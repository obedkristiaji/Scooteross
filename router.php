<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/scooteross';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        //data pengguna admin
        case $baseURL . '/data-pengguna';
            require_once "controller/Admin.php";
            $dataPenggunaCtrl = new AdminController();
            echo $dataPenggunaCtrl->view_data_pengguna();
            break;
        // home admin
        case $baseURL . '/admin';
            require_once "controller/Admin.php";
            $indexAdminCtrl = new AdminController();
            echo $indexAdminCtrl->view_index_admin();
            break;
        // home pimpinan
        case $baseURL . '/pimpinan';
            require_once "controller/Pimpinan.php";
            $indexPimpinanCtrl = new PimpinanController();
            echo $indexPimpinanCtrl->view_index_pimpinan();
            break;
        // home operator
        case $baseURL . '/operator';
            require_once "controller/Operator.php";
            $indexOperatorCtrl = new OperatorController();
            echo $indexOperatorCtrl->view_index_operator();
            break;
        // data scooter admin
        case $baseURL . '/scooter-admin';
            require_once "controller/Admin.php";
            $dataScooterCtrl = new AdminController();
            echo $dataScooterCtrl->view_data_scooter();
            break;
        // data scooter pimpinan
        case $baseURL . '/scooter-pimpinan';
            require_once "controller/Pimpinan.php";
            $dataScooterCtrl2 = new PimpinanController();
            echo $dataScooterCtrl2->view_data_scooter();
            break;
        //data penyewa operator
        case $baseURL . '/data-penyewa';
            require_once "controller/Operator.php";
            $dataPenyewaCtrl = new OperatorController();
            echo $dataPenyewaCtrl->view_data_penyewa();
            break;
        // home login
        case $baseURL . '/login';
            require_once "controller/Login.php";
            $loginCtrl = new LoginController();
            echo $loginCtrl->view_index_login();
            break;
        // tambah pengguna admin
        case $baseURL . '/tambah-pengguna';
            require_once "controller/Admin.php";
            $tambahPenggunaCtrl = new AdminController();
            echo $tambahPenggunaCtrl->view_tambah_pengguna();
            break;
        // proses tambah pengguna admin
        case strpos($url,$baseURL.'/tambah-pengguna-process'):
            require_once "controller/Admin.php";
            $tambahPenggunaCtrl2 = new AdminController();
            $tambahPenggunaCtrl2->tambahPengguna();
            header('Location: tambah-pengguna');
            break;
        // tambah scooter admin
        case $baseURL . '/tambah-scooter';
            require_once "controller/Admin.php";
            $tambahScooterCtrl = new AdminController();
            echo $tambahScooterCtrl->view_tambah_scooter();
            break;
        // proses tambah scooter admin
        case strpos($url,$baseURL.'/tambah-scooter-process'):
            require_once "controller/Admin.php";
            $tambahScooterCtrl2 = new AdminController();
            $tambahScooterCtrl2->tambahScooter();
            header('Location: tambah-scooter');
            break;
        // default
        default:
            echo '404 Not Found!';
            break;
    }
}
