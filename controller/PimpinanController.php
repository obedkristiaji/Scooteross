<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Pengguna.php";
require_once "model/Scooter.php";
class PimpinanController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","scooteross");
    }

    public function view_index_pimpinan(){
        return View::createView('/Pimpinan/index.php',
        []
        );
    }

    public function view_data_scooter(){
        $result = $this->getAllDataScooter();
        return View::createView('/Pimpinan/dataScooter.php',
        [
            "result"=> $result
        ]
        );
    }

    public function getAllDataScooter(){
        $query = "SELECT * from DataScooter";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value){
            $result[] = new Scooter($value['NoUnik'],$value['Warna'],$value['Tarif']);
        }
        return $result;
    }
}
?>
