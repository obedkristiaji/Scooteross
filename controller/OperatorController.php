<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Pengguna.php";
require_once "model/Penyewa.php";
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
        $result = $this->getAllDataPenyewa();
        return View::createView('/Operator/dataPenyewa.php',
        [
            "result"=> $result
        ]
        );
    }

    public function getAllDataPenyewa(){
        $query = "SELECT * from penyewa";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value){
            $result[] = new Penyewa($value['NoKTP'],$value['NamaPenyewa'],$value['AlamatPenyewa'],$value['NoScooter']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $result[] = new Penyewa($value['NoKTP'],$value['NamaPenyewa'],$value['AlamatPenyewa'],$value['NoScooter']);
        }
        return $result;
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

    
    public function view_pendaftaran_penyewa()
    {
        return View::createView(
            '/Operator/PendaftaranPenyewa.php',
            []
        );
    }

    public function pendaftaranPenyewa(){
        $NoKTP = $_GET['KTPPenyewa'];
        $Nama = $_GET['namePenyewa'];
        $Alamat = $_GET['addressPenyewa'];
        $Email = $_GET['emailPenyewa'];

        if(isset($NoKTP) && isset($Nama) && isset($Alamat) && $NoKTP!="" && $Nama!="" && $Alamat!=""){
            $NoKTP = $this->db->escapeString($NoKTP);
            $Nama = $this->db->escapeString($Nama);
            $Alamat = $this->db->escapeString($Alamat);
            $Email = $this->db->escapeString($Email);

            $query = "INSERT INTO penyewa (NoKTP,NamaPenyewa,AlamatPenyewa,email) VALUES ('$NoKTP','$Nama','$Alamat','$Email')";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function view_pendaftaran_transaksi()
    {
        return View::createView(
            '/Operator/PendaftaranTransaksi.php',
            []
        );
    }

    public function view_pelunasan_transaksi()
    {
        return View::createView(
            '/Operator/PelunasanTransaksi.php',
            []
        );
    }
}
?>
