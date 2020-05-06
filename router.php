<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/scooteross';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        //home page
        case $baseURL . '/index';
            require_once "controller/HomeController.php";
            $homeCtrl = new HomeController();
            echo $homeCtrl->view_home();
            break;
        //data pengguna admin
        case $baseURL . '/data-pengguna';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_data_pengguna();
            break;
        //home admin
        case $baseURL . '/admin';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_index_admin();
            break;
        //home pimpinan
        case $baseURL . '/pimpinan';
            require_once "controller/PimpinanController.php";
            $pimpinanCtrl = new PimpinanController();
            echo $pimpinanCtrl->view_index_pimpinan();
            break;
        //home operator
        case $baseURL . '/operator';
            require_once "controller/OperatorController.php";
            $operatorCtrl = new OperatorController();
            echo $operatorCtrl->view_index_operator();
            break;
        //data scooter admin
        case $baseURL . '/scooter-admin';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_data_scooter();
            break;
        //data scooter pimpinan
        case $baseURL . '/scooter-pimpinan';
            require_once "controller/PimpinanController.php";
            $pimpinanCtrl = new PimpinanController();
            echo $pimpinanCtrl->view_data_scooter();
            break;
        //data penyewa operator
        case $baseURL . '/data-penyewa';
            require_once "controller/OperatorController.php";
            $operatorCtrl = new OperatorController();
            echo $operatorCtrl->view_data_penyewa();
            break;
        //login home
        case $baseURL . '/login';
            require_once "controller/HomeController.php";
            $homeCtrl = new HomeController();
            echo $homeCtrl->view_index_login();
            break;
        //tambah penggguna admin
        case $baseURL . '/tambah-pengguna';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_tambah_pengguna();
            break;
        // proses tambah pengguna admin
        case $baseURL . '/tambah-pengguna-process':
            require_once "controller/Admin.php";
            $adminCtrl = new AdminController();
            $adminCtrl->tambahPengguna();
            header('Location: tambah-pengguna');
            break;
        // tambah scooter admin
        case $baseURL . '/tambah-scooter';
            require_once "controller/Admin.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_tambah_scooter();
            break;
        // proses tambah scooter admin
        case $baseURL . '/tambah-scooter-process':
            require_once "controller/Admin.php";
            $adminCtrl = new AdminController();
            $adminCtrl->tambahScooter();
            header('Location: tambah-scooter');
            break;
        // default
        default:
            echo '404 Not Found!';
            break;
    }
}
