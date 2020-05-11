<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Penyewa.php";
require_once "model/Transaksi.php";
class OperatorController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","scooteross");
    }

    public function view_index_operator(){
        return View::createView('/Operator/index.php',
        []
        );
    }

    public function view_data_penyewa(){
        $result = $this->getDataPenyewaWithName();
        return View::createView('/Operator/dataPenyewa.php',
        [
            "result"=> $result
        ]
        );
    }

    /*public function getAllDataPenyewa(){
        $query = "SELECT * from scooter INNER JOIN transaksipenyewaan ON scooter.NoUnik = transaksipenyewaan.noUnik LEFT OUTER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        $tarif = 20000;
        if (isset($_SESSION['tarif'])) {
            $tarif = $_SESSION['tarif'];
        }
        foreach ($query_result as $key => $value) {
            $date1 = strtotime($value['waktu_mulai']);
            $date2 = strtotime($value['waktu_pengembalian']);
            $diff = $date2 - $date1;
            $diff = ceil($diff/3600);
            $biaya = $diff * $tarif;
            $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian'], $value['fotoKTP']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $date1 = strtotime($value['waktu_mulai']);
            $date2 = strtotime($value['waktu_pengembalian']);
            $diff = $date2 - $date1;
            $diff = ceil($diff/3600);
            $biaya = $diff * $tarif;
            $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian'], $value['fotoKTP']);
        }
        return $result;
    }*/

    public function getDataPenyewaWithName(){
        $query = "SELECT * from scooter INNER JOIN transaksipenyewaan ON scooter.NoUnik = transaksipenyewaan.noUnik LEFT OUTER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP";
        $nama = $_GET['search'];
        if(isset($nama) && $nama!=""){
            $nama = $this->db->escapeString($nama);
            $query .= " WHERE NamaPenyewa LIKE '%$nama%' OR penyewa.NoKTP LIKE '%$nama%'";
        }
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        $tarif = 20000;
        foreach ($query_result as $key => $value) {
            $date1 = strtotime($value['waktu_mulai']);
            $date2 = strtotime($value['waktu_pengembalian']);
            $diff = $date2 - $date1;
            $diff = ceil($diff/3600);
            $biaya = $diff * $tarif;
            $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian'], $value['fotoKTP']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $date1 = strtotime($value['waktu_mulai']);
            $date2 = strtotime($value['waktu_pengembalian']);
            $diff = $date2 - $date1;
            $diff = ceil($diff/3600);
            $biaya = $diff * $tarif;
            $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian'], $value['fotoKTP']);
        }
        return $result;
    }
    
    public function view_daftar_penyewa()
    {
        return View::createView(
            '/Operator/PendaftaranPenyewa.php',
            []
        );
    }

    public function daftarPenyewa(){
        $NoKTP = $_GET['KTPPenyewa'];
        $Nama = $_GET['namePenyewa'];
        $Alamat = $_GET['addressPenyewa'];
        $Email = $_GET['emailPenyewa'];
        $Kelurahan = $_GET['kelPenyewa'];
        $foto = $_SESSION['file'];

        if(isset($NoKTP) && isset($Nama) && isset($Alamat) && isset($Email) && isset($Kelurahan) && $NoKTP!="" && $Nama!="" && $Alamat!="" && $Email!="" && $Kelurahan!= ""){
            $NoKTP = $this->db->escapeString($NoKTP);
            $Nama = $this->db->escapeString($Nama);
            $Alamat = $this->db->escapeString($Alamat);
            $Email = $this->db->escapeString($Email);
            $foto = $this->db->escapeString($foto);

            $query = "INSERT INTO penyewa (NoKTP,NamaPenyewa,AlamatPenyewa,email,fotoKTP,idKel) VALUES ('$NoKTP','$Nama','$Alamat','$Email','$foto','$Kelurahan')";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function view_pendaftaran_transaksi()
    {
        return View::createView(
            '/Operator/pendaftaranTransaksi.php',
            []
        );
    }

    public function pendaftaranTransaksi()
    {
        $KTP = $_GET['KTPPenyewa'];
        $IdS = $_GET['noScooter'];
        $Durasi = $_GET['duration'];
        date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime();
        $date = $date->format('Y-m-d h:i:s');

        if(isset($KTP) && isset($IdS) && isset($Durasi) && $KTP!="" && $IdS!="" && $Durasi!=""){
            $KTP = $this->db->escapeString($KTP);
            $IdS = $this->db->escapeString($IdS);
            $Durasi = $this->db->escapeString($Durasi);

            $query = "INSERT INTO transaksipenyewaan (waktu_mulai,noKTP,noUnik) VALUES ('$date','$KTP','$IdS')";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function view_pelunasan_transaksi()
    {
        return View::createView(
            '/Operator/pelunasanTransaksi.php',
            []
        );
    }

    public function pelunasanTransaksi()
    {
        $KTP = $_GET['KTPPenyewa'];
        $IdS = $_GET['noScooter'];
        $Durasi = $_GET['durasiTambahan'];
        $Biaya = $_GET['biayaTambahan'];
        date_default_timezone_set('Asia/Jakarta');
        $date = new DateTime();
        $date = $date->format('Y-m-d h:i:s');

        if(isset($KTP) && isset($IdS) && isset($Durasi) && $KTP!="" && $IdS!="" && $Durasi!="" && $Biaya!=""){
            $KTP = $this->db->escapeString($KTP);
            $IdS = $this->db->escapeString($IdS);
            $Durasi = $this->db->escapeString($Durasi);

            $temp = "SELECT noTransaksi FROM transaksipenyewaan WHERE noKTP='$KTP' AND noUnik='$IdS' ORDER BY noTransaksi DESC LIMIT 1";
            $temp_res = $this->db->executeNonSelectQuery($temp);
            $row = mysqli_fetch_row($temp_res);
            $id = $row[0];

            $query = "INSERT INTO transaksipengembalian (noTransaksi,waktu_pengembalian,noKTP,noUnik) VALUES ('$id','$date','$KTP','$IdS')";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function pagination($result, $query)
    {
        $_SESSION['i'] = 1;

        $start = 0;
        $show = 10;
        $pageCount = count($result) / $show;
        $_SESSION['pageCount'] = $pageCount;

        if (isset($_GET['prev']) && $_SESSION['i'] > 1) {
            $_SESSION['i']--;
        }

        if (isset($_GET['next']) && $_SESSION['i'] <= $_SESSION['pageCount']) {
            $_SESSION['i']++;
        }


        $start = $this->db->escapeString($_SESSION['i']) - 1;
        if ($start != 0) {
            $start *= 10;
        }

        $query .= " LIMIT $start, $show";
        $result = $this->db->executeSelectQuery($query);
        return $result;
    }

    public function handle_upload_file()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if ($_FILES['upfile']['name'] != "") {
				$oldName = $_FILES['upfile']['tmp_name'];
				$newName = dirname(__DIR__) . "\\uploads\\" . $_FILES['upfile']['name'];
				if (move_uploaded_file($oldName, $newName)) {
					echo json_encode([
						"code" => "success",
						"location" => $_FILES['upfile']['name']
					]);
				} else {
					echo "Error in uploading";
				}
			} else
				echo "Error: No file uploaded";
        }
        
        $_SESSION['file'] = $_FILES['upfile']['name'];
	}
}
?>
