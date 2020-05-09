<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Scooter.php";
require_once "model/Transaksi.php";
class PimpinanController
{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "scooteross");
    }

    public function view_index_pimpinan()
    {
        return View::createView(
            '/Pimpinan/index.php',
            []
        );
    }

    public function view_data_scooter()
    {
        $result = $this->getAllDataScooter();
        return View::createView(
            '/Pimpinan/dataScooter.php',
            [
                "result" => $result
            ]
        );
    }

    public function getAllDataScooter()
    {
        $query = "SELECT * from scooter";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new Scooter($value['NoUnik'], $value['Warna'], $value['Tarif']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $result[] = new Scooter($value['NoUnik'], $value['Warna'], $value['Tarif']);
        }
        return $result;
    }

    public function view_laporan_transaksi()
    {
        $result = $this->getAllTransaksi();
        return View::createView(
            '/Pimpinan/laporanTransaksi.php',
            [
                "result" => $result
            ]
        );
    }

    public function getAllTransaksi()
    {
        $query = "SELECT * from scooter INNER JOIN transaksipenyewaan ON scooter.NoUnik = transaksipenyewaan.noUnik INNER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        $tarif = 20000;
        if (isset($_SESSION['tarif'])) {
            $tarif = $_SESSION['tarif'];
        }
        foreach ($query_result as $key => $value) {
            if ($value['waktu_pengembalian'] != NULL) {
                $date1 = strtotime($value['waktu_mulai']);
                $date2 = strtotime($value['waktu_pengembalian']);
                $diff = $date2 - $date1;
                $diff = ceil($diff/3600);
                $biaya = $diff * $tarif;
                $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian']);
            }
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            if ($value['waktu_pengembalian'] != NULL) {
                $date1 = strtotime($value['waktu_mulai']);
                $date2 = strtotime($value['waktu_pengembalian']);
                $diff = $date2 - $date1;
                $diff = ceil($diff/3600);
                $biaya = $diff * $tarif;
                $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian']);
            }
        }
        return $result;
    }

    public function view_statistik_pimpinan()
    {
        $result = $this->getRank();
        return View::createView(
            '/Pimpinan/statistikPenyewaan.php',
            [
                "result" => $result
            ]
        );
    }

    public function getRank()
    {
        $query = "SELECT scooter.NoUnik, COUNT(penyewa.Nama) AS 'rankS' from scooter INNER JOIN memiliki ON scooter.NoUnik = memiliki.NoUnik INNER JOIN transaksipenyewaan ON memiliki.noTransaksi = transaksipenyewaan.noTransaksi INNER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP GROUP BY scooter.NoUnik LIMIT 10";
        $query_result = $this->db->executeSelectQuery($query);
        $query2 = "SELECT penyewa.Nama, COUNT(scooter.NoUnik) AS 'rankP' from scooter INNER JOIN memiliki ON scooter.NoUnik = memiliki.NoUnik INNER JOIN transaksipenyewaan ON memiliki.noTransaksi = transaksipenyewaan.noTransaksi INNER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP GROUP BY penyewa.Nama LIMIT 10";
        $query_result += $this->db->executeSelectQuery($query2);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new Transaksi($value['rankS'], $value['rankP'], $value['NamaPenyewa'], $value['NoUnik'], 1, 2, 3, 4);
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
}
