<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Pengguna.php";
require_once "model/Scooter.php";
class AdminController{
    protected $db;

    public function __construct(){
        $this->db = new MySQLDB("localhost","root","","scooteross");
    }

    public function view_data_pengguna(){
        $result = $this->getAllDataPengguna();
		return View::createView('/Admin/DataPengguna.php',
        [
            "result"=> $result
        ]);
	}

    public function getAllDataPengguna(){
        $query = "SELECT * from DataPengguna";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value){
            $result[] = new Pengguna($value['id'],$value['NamaPengguna'],$value['Alamat'],$value['Role'],$value['KTP']);
        }
        return $result;
    }

    public function view_data_scooter(){
        $result = $this->getAllDataScooter();
        return View::createView('/Admin/DataScooter.php',
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

    public function view_index_admin(){
        return View::createView('/Admin/index.php',
        []
        );
    }
}
?>
