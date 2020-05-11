<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Scooter.php";
require_once "model/Transaksi.php";
require_once "model/RankScooter.php";
require_once "model/RankPengguna.php";
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
        $result = $this->getDataScooterWithWarna();
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

    public function getDataScooterWithWarna()
    {
        $query = "SELECT * FROM scooter";
        $Warna = $_GET['searchSP'];
        if (isset($Warna) && $Warna != "") {
            $Warna = $this->db->escapeString($Warna);
            $query .= " WHERE Warna LIKE '%$Warna%'";
        }
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
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
                $diff = ceil($diff / 3600);
                $biaya = $diff * $tarif;
                $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian'], $value['fotoKTP']);
            }
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            if ($value['waktu_pengembalian'] != NULL) {
                $date1 = strtotime($value['waktu_mulai']);
                $date2 = strtotime($value['waktu_pengembalian']);
                $diff = $date2 - $date1;
                $diff = ceil($diff / 3600);
                $biaya = $diff * $tarif;
                $result[] = new Transaksi($value['noTransaksi'], $value['NoKTP'], $value['NamaPenyewa'], $value['NoUnik'], $value['Warna'], $biaya, $value['waktu_mulai'], $value['waktu_pengembalian'], $value['fotoKTP']);
            }
        }
        return $result;
    }

    public function view_statistik_pimpinanS()
    {
        $result = $this->getRankS();
        return View::createView(
            '/Pimpinan/statistikPenyewaan.php',
            [
                "result" => $result
            ]
        );
    }

    public function view_statistik_pimpinanP()
    {
        $result = $this->getRankP();
        return View::createView(
            '/Pimpinan/statistikPenyewaan.php',
            [
                "result" => $result
            ]
        );
    }

    public function getRankS()
    {
        $query = "SELECT scooter.NoUnik, COUNT(penyewa.NamaPenyewa) AS rankS from scooter INNER JOIN transaksipenyewaan ON scooter.NoUnik = transaksipenyewaan.noUnik INNER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP GROUP BY scooter.NoUnik ORDER BY rankS DESC LIMIT 10";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new RankScooter($value['NoUnik'], $value['rankS']);
        }
        $_SESSION['indexStat'] = 1;
        if (isset($_GET['next'])) {
            $_SESSION['indexStat']++;
            header("Refresh:0");
        }
        return $result;
    }

    public function getRankP()
    {
        $query = "SELECT penyewa.NamaPenyewa, COUNT(scooter.NoUnik) AS rankP from scooter INNER JOIN transaksipenyewaan ON scooter.NoUnik = transaksipenyewaan.noUnik INNER JOIN transaksipengembalian ON transaksipenyewaan.noTransaksi = transaksipengembalian.noTransaksi INNER JOIN penyewa ON transaksipenyewaan.noKTP = penyewa.NoKTP GROUP BY scooter.NoUnik ORDER BY rankP DESC LIMIT 10";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new RankPengguna($value['NamaPenyewa'], $value['rankP']);
        }
        $_SESSION['indexStat'] = 2;
        if (isset($_GET['prev'])) {
            $_SESSION['indexStat']--;
            header("Refresh:0");
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
