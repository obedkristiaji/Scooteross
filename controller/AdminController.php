<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/Pengguna.php";
require_once "model/Scooter.php";
class AdminController
{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "scooteross");
    }

    public function view_data_pengguna()
    {
        $result = $this->getAllDataPengguna();
        return View::createView(
            '/Admin/dataPengguna.php',
            [
                "result" => $result
            ]
        );
    }

    public function getAllDataPengguna()
    {
        $query = "SELECT * from DataPengguna";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new Pengguna($value['id'], $value['NamaPengguna'], $value['Alamat'], $value['Role'], $value['KTP']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $result[] = new Pengguna($value['id'], $value['NamaPengguna'], $value['Alamat'], $value['Role'], $value['KTP']);
        }
        return $result;
    }

    public function view_data_scooter()
    {
        $result = $this->getAllDataScooter();
        return View::createView(
            '/Admin/dataScooter.php',
            [
                "result" => $result
            ]
        );
    }

    public function getAllDataScooter()
    {
        $query = "SELECT * from DataScooter";
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

    public function view_index_admin()
    {
        return View::createView(
            '/Admin/index.php',
            []
        );
    }

    public function view_tambah_pengguna()
    {
        return View::createView(
            '/Admin/tambahPengguna.php',
            []
        );
    }

    public function tambahPengguna()
    {
        $namaPengguna = $_GET['namePengguna'];
        $idPengguna = $_GET['IdPengguna'];
        $alamatPengguna = $_GET['addressPengguna'];
        $Role = $_GET['roles'];
        $KTPPengguna = $_GET['KTPPengguna'];
        if (
            isset($namaPengguna) && isset($alamatPengguna) && isset($Role) && isset($KTPPengguna)
            && $namaPengguna != "" && $alamatPengguna != "" && $Role != "" && $KTPPengguna != ""
        ) {
            $namaPengguna = $this->db->escapeString($namaPengguna);
            $idPengguna = $this->db->escapeString($idPengguna);
            $alamatPengguna = $this->db->escapeString($alamatPengguna);
            $Role = $this->db->escapeString($Role);
            $KTPPengguna = $this->db->escapeString($KTPPengguna);

            $query = "INSERT INTO DataPengguna VALUES ('$idPengguna','$namaPengguna','$alamatPengguna','$Role','$KTPPengguna')";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function view_tambah_scooter()
    {
        return View::createView(
            '/Admin/TambahScooter.php',
            []
        );
    }

    public function tambahScooter()
    {
        $noUnik = 1;
        $warnaScooter = $_GET['newColor'];
        $tarif = 20000;
        if (
            isset($warnaScooter)  && $warnaScooter != ""
        ) {

            $warnaScooter = $this->db->escapeString($warnaScooter);
            $query = "INSERT INTO DataScooter VALUES ('$noUnik','$warnaScooter','$tarif')";
            $this->db->executeNonSelectQuery($query);
            $noUnik++;
        }
    }

    public function view_edit_pengguna()
    {
        return View::createView(
            '/Admin/EditPengguna.php',
            []
        );
    }

    public function editPengguna()
    {
        $id = $_GET['idLamaPengguna'];
        $newName = $_GET['newNamePengguna'];
        $newAlamat = $_GET['newAddressPenggguna'];
        $newRole = $_GET['newRoles'];

        if (
            isset($id) && isset($newName) && isset($newAlamat) && isset($newRole)
            && $id != "" && $newName != "" && $newAlamat != "" && $newRole != ""
        ) {
            $id = $this->db->escapeString($id);
            $newName = $this->db->escapeString($newName);
            $newAlamat = $this->db->escapeString($newAlamat);
            $newRole = $this->db->escapeString($newRole);

            $query = "UPDATE DataPengguna SET NamaPengguna='$newName' , Alamat='$newAlamat' , Role='$newRole' WHERE id='$id' ";
            $this->db->executeNonSelectQuery($query);
        }
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
