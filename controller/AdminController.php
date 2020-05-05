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
        $result = $this->get_all_data_pengguna();
		return View::createView('/Admin/dataPengguna.php',
        [
            "result"=> $result
        ]);
	}

    public function get_all_data_pengguna(){
        $query = "SELECT * from DataPengguna";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value){
            $result[] = new Pengguna($value['id'],$value['NamaPengguna'],$value['Alamat'],$value['Role'],$value['KTP']);
        }
        return $result;
    }

    public function view_data_scooter(){
        $result = $this->get_all_data_scooter();
        return View::createView('/Admin/dataScooter.php',
        [
            "result"=> $result
        ]
        );
    }

    public function get_all_data_scooter(){
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

    public function view_tambah_pengguna(){
        return View::createView('/Admin/tambahPengguna.php',
        []
        );
    }

    public function tambah_pengguna(){
        $namaPengguna = $_GET['namePengguna'];
        $idPengguna = $_GET['IdPengguna'];
        $alamatPengguna = $_GET['addressPengguna'];
        $Role = $_GET['roles'];
        $KTPPengguna = $_GET['KTPPengguna'];
        if(isset($namaPengguna) && isset($alamatPengguna) && isset($Role) && isset($KTPPengguna) 
            && $namaPengguna != "" && $alamatPengguna != "" && $Role != "" && $KTPPengguna != ""
        ){
            $namaPengguna = $this->db->escapeString($namaPengguna);
            $idPengguna = $this->db->escapeString($idPengguna);
            $alamatPengguna = $this->db->escapeString($alamatPengguna);
            $Role = $this->db->escapeString($Role);
            $KTPPengguna = $this->db->escapeString($KTPPengguna);

            $query = "INSERT INTO DataPengguna VALUES ('$namaPengguna','$idPengguna','$alamatPengguna','$Role','$KTPPengguna')";
            $this->db->executeNonSelectQuery($query);
        }
    }
    
}
?>
