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

        $result = $this->getDataPenggunaWithName();
        return View::createView(
            '/Admin/dataPengguna.php',
            [
                "result" => $result
            ]
        );
    }

    /*public function getAllDataPengguna()
    {
        $query = "SELECT * FROM pengguna INNER JOIN role ON pengguna.IdRole = role.idRole INNER JOIN kelurahan ON pengguna.idKel = kelurahan.idKel";
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new Pengguna($value['KTP'], $value['NamaPengguna'], $value['Alamat'], $value['email'], $value['namaRole'], $value['namaKel']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $result[] = new Pengguna($value['KTP'], $value['NamaPengguna'], $value['Alamat'], $value['email'], $value['namaRole'], $value['namaKel']);
        }
        return $result;
    }*/

    public function getDataPenggunaWithName()
    {
        $query = "SELECT * FROM pengguna INNER JOIN role ON pengguna.IdRole = role.idRole INNER JOIN kelurahan ON pengguna.idKel = kelurahan.idKel";
        $name = $_GET['searchP'];
        if (isset($name) && $name != "") {
            $name = $this->db->escapeString($name);
            $query .= " WHERE NamaPengguna LIKE '%$name%' OR KTP LIKE '%$name%'";
        }
        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach ($query_result as $key => $value) {
            $result[] = new Pengguna($value['KTP'], $value['NamaPengguna'], $value['Alamat'], $value['email'], $value['namaRole'], $value['namaKel'], $value['status']);
        }
        $pagination = $this->pagination($result, $query);
        $result = [];
        foreach ($pagination as $key => $value) {
            $result[] = new Pengguna($value['KTP'], $value['NamaPengguna'], $value['Alamat'], $value['email'], $value['namaRole'], $value['namaKel'], $value['status']);
        }
        return $result;
    }

    public function view_data_scooter()
    {
        $result = $this->getDataScooterWithWarna();
        return View::createView(
            '/Admin/dataScooter.php',
            [
                "result" => $result
            ]
        );
    }

    /*public function getAllDataScooter()
    {
        $query = "SELECT * FROM scooter";
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
    }*/

    public function getDataScooterWithWarna()
    {
        $query = "SELECT * FROM scooter";
        $Warna = $_GET['searchS'];
        if (isset($Warna) && $Warna != "") {
            $Warna = $this->db->escapeString($Warna);
            $query .= " WHERE Warna LIKE '%$Warna%' OR NoUnik='$Warna'";
        }
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
        $KTPPengguna = $_GET['KTPPengguna'];
        $namaPengguna = $_GET['namePengguna'];
        $alamatPengguna = $_GET['addressPengguna'];
        $emailPengguna = $_GET['emailPengguna'];
        $passwordPengguna = $_GET['passwordPengguna'];
        $Role = $_GET['roles'];
        $Kelurahan = $_GET['kelurahan'];

        $temp = "SELECT idKel FROM kelurahan WHERE namaKel LIKE '%$Kelurahan%'";
        $temp_res = $this->db->executeNonSelectQuery($temp);
        $row = mysqli_fetch_row($temp_res);
        $idKel = $row[0];

        if (
            isset($namaPengguna) && isset($alamatPengguna) && isset($Role) && isset($KTPPengguna) && isset($emailPengguna) && isset($passwordPengguna) && isset($idKel)
            && $namaPengguna != "" && $alamatPengguna != "" && $Role != "" && $KTPPengguna != "" && $emailPengguna != "" && $passwordPengguna != "" && $idKel != ""
        ) {
            $KTPPengguna = $this->db->escapeString($KTPPengguna);
            $namaPengguna = $this->db->escapeString($namaPengguna);
            $alamatPengguna = $this->db->escapeString($alamatPengguna);
            $emailPengguna = $this->db->escapeString($emailPengguna);
            $passwordPengguna = $this->db->escapeString($passwordPengguna);
            $Role = $this->db->escapeString($Role);
            $idKel = $this->db->escapeString($idKel);

            $query = "INSERT INTO pengguna (KTP,NamaPengguna,Alamat,email,password,IdRole,idKel) VALUES ('$KTPPengguna','$namaPengguna','$alamatPengguna','$emailPengguna','$passwordPengguna','$Role','$idKel')";
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
        $warnaScooter = $_GET['newColor'];

        $temp = "SELECT Tarif FROM scooter WHERE NoUnik = 1";
        $temp_res = $this->db->executeNonSelectQuery($temp);
        $row = mysqli_fetch_row($temp_res);
        $tarif = $row[0];

        if (
            isset($warnaScooter)  && $warnaScooter != ""
        ) {

            $warnaScooter = $this->db->escapeString($warnaScooter);
            $query = "INSERT INTO scooter (Warna,Tarif) VALUES ('$warnaScooter','$tarif')";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function view_edit_pengguna()
    {
        if (isset($_GET['id'])) {
            $KTP = $_GET['id'];
            $_SESSION['id'] = $KTP;
        }
        return View::createView(
            '/Admin/EditPengguna.php',
            []
        );
    }

    public function editPengguna()
    {
        $KTP = $_SESSION['id'];
        $newName = $_GET['newNamePengguna'];
        $newAlamat = $_GET['newAddressPengguna'];
        $newEmail = $_GET['newEmailPengguna'];
        $newPassword = $_GET['newPasswordPengguna'];
        $newRoles = $_GET['newRoles'];
        $newKelurahan = $_GET['newKelurahan'];

        $temp = "SELECT idKel FROM kelurahan WHERE namaKel LIKE '%$newKelurahan%'";
        $temp_res = $this->db->executeNonSelectQuery($temp);
        $row = mysqli_fetch_row($temp_res);
        $idKel = $row[0];

        $query = "UPDATE pengguna SET";

        if (isset($newName) && $newName != "") {
            $newName = $this->db->escapeString($newName);
            $query .= " NamaPengguna='$newName'";
        }
        if (isset($newAlamat) && $newAlamat != "") {
            $newAlamat = $this->db->escapeString($newAlamat);
            if ($query == "UPDATE pengguna SET") {
                $query .= " Alamat='$newAlamat'";
            } else {
                $query .= ", Alamat='$newAlamat'";
            }
        }
        if (isset($newEmail) && $newEmail != "") {
            $newEmail = $this->db->escapeString($newEmail);
            if ($query == "UPDATE pengguna SET") {
                $query .= " email='$newEmail'";
            } else {
                $query .= ", email='$newEmail'";
            }
        }
        if (isset($newPassword) && $newPassword != "") {
            $newPassword = $this->db->escapeString($newPassword);
            if ($query == "UPDATE pengguna SET") {
                $query .= " password='$newPassword'";
            } else {
                $query .= ", password='$newPassword'";
            }
        }
        if (isset($newRoles) && $newRoles != "") {
            if ($query == "UPDATE pengguna SET") {
                $query .= " IdRole='$newRoles'";
            } else {
                $query .= ", IdRole='$newRoles'";
            }
        }
        if (isset($idKel) && $idKel != "") {
            if ($query == "UPDATE pengguna SET") {
                $query .= " idKel='$idKel'";
            } else {
                $query .= ", idKel='$idKel'";
            }
        }

        $query .= " WHERE KTP='$KTP'";
        $this->db->executeNonSelectQuery($query);
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

    public function view_edit_tarif_scooter()
    {
        return View::createView(
            '/Admin/EditTarif.php',
            []
        );
    }

    public function editTarifScooter()
    {
        $newTarif = $_GET['newTarif'];

        if (isset($newTarif) && $newTarif != "") {
            $newTarif = $this->db->escapeString($newTarif);
            $query = "UPDATE scooter SET Tarif='$newTarif'";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function deletePengguna()
    {
        $KTP = $_GET['id'];

        if (isset($KTP) && $KTP != "") {
            $KTP = $this->db->escapeString($KTP);
            $query = "DELETE FROM pengguna WHERE KTP='$KTP'";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function deleteScooter()
    {
        $noUnik = $_GET['no'];

        if (isset($noUnik) && $noUnik != "") {
            $noUnik = $this->db->escapeString($noUnik);
            $query = "DELETE FROM scooter WHERE NoUnik='$noUnik'";
            $this->db->executeNonSelectQuery($query);
        }
    }

    public function searchPengguna($query, $nama)
    {
        $query .= " WHERE NamaPengguna LIKE '%$nama%";
        return $query;
    }
}
