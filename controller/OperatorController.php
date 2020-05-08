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
        session_start();
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
?>
