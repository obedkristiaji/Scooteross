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
        $query = "SELECT * from DataPenyewa";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value){
            $result[] = new Penyewa($value['NoKTP'],$value['NamaPenyewa'],$value['AlamatPenyewa'],$value['NoScooter']);
        }
        return $result;
    }
}
?>
