<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/scooteross';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    switch ($url) {
        case $baseURL . '/DataPengguna';
            require_once "controller/Admin.php";
            $dataPenggunaCtrl = new AdminController();
            echo $dataPenggunaCtrl->view_data_pengguna();
            break;
        case $baseURL . '/indexAdmin';
            require_once "controller/Admin.php";
            $indexAdminCtrl = new AdminController();
            echo $indexAdminCtrl->view_index_admin();
            break;
        case $baseURL . '/indexPimpinan';
            require_once "controller/Pimpinan.php";
            $indexPimpinanCtrl = new PimpinanController();
            echo $indexPimpinanCtrl->view_index_pimpinan();
            break;
        case $baseURL . '/indexOperator';
            require_once "controller/Operator.php";
            $indexOperatorCtrl = new OperatorController();
            echo $indexOperatorCtrl->view_index_operator();
            break;
        case $baseURL . '/DataScooterAdmin';
            require_once "controller/Admin.php";
            $dataScooterCtrl = new AdminController();
            echo $dataScooterCtrl->view_data_scooter();
            break;
        case $baseURL . '/DataScooterPimpinan';
            require_once "controller/Pimpinan.php";
            $dataScooterCtrl2 = new PimpinanController();
            echo $dataScooterCtrl2->view_data_scooter();
            break;
        case $baseURL . '/DataPenyewa';
            require_once "controller/Operator.php";
            $dataPenyewaCtrl = new OperatorController();
            echo $dataPenyewaCtrl->view_data_penyewa();
            break;
        default:
            echo '404 Not Found!';
            break;
    }
}
