<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/scooteross';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        case $baseURL . '/index';
            require_once "controller/HomeController.php";
            $homeCtrl = new HomeController();
            echo $homeCtrl->view_home();
            break;
        case $baseURL . '/data-pengguna';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_data_pengguna();
            break;
        case $baseURL . '/admin';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_index_admin();
            break;
        case $baseURL . '/pimpinan';
            require_once "controller/PimpinanController.php";
            $pimpinanCtrl = new PimpinanController();
            echo $pimpinanCtrl->view_index_pimpinan();
            break;
        case $baseURL . '/operator';
            require_once "controller/OperatorController.php";
            $operatorCtrl = new OperatorController();
            echo $operatorCtrl->view_index_operator();
            break;
        case $baseURL . '/scooter-admin';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_data_scooter();
            break;
        case $baseURL . '/scooter-pimpinan';
            require_once "controller/PimpinanController.php";
            $pimpinanCtrl = new PimpinanController();
            echo $pimpinanCtrl->view_data_scooter();
            break;
        case $baseURL . '/data-penyewa';
            require_once "controller/OperatorController.php";
            $operatorCtrl = new OperatorController();
            echo $operatorCtrl->view_data_penyewa();
            break;
        case $baseURL . '/login';
            require_once "controller/HomeController.php";
            $homeCtrl = new HomeController();
            echo $homeCtrl->view_index_login();
            break;
        case $baseURL . '/tambah-pengguna';
            require_once "controller/AdminController.php";
            $adminCtrl = new AdminController();
            echo $adminCtrl->view_tambah_pengguna();
            break;
        default:
            echo '404 Not Found!';
            break;
    }
}
