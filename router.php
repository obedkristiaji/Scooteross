<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/scooteross';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
        switch ($url) {
                // data pengguna admin
            case $baseURL . '/data-pengguna';
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_data_pengguna();
                break;
                // home admin
            case $baseURL . '/admin';
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_index_admin();
                break;
                // data scooter admin
            case $baseURL . '/scooter-admin';
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_data_scooter();
                break;
                // tambah penggguna admin
            case $baseURL . '/tambah-pengguna';
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_tambah_pengguna();
                break;
                // proses tambah pengguna admin
            case $baseURL . '/tambah-pengguna-process':
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                $adminCtrl->tambahPengguna();
                header('Location: tambah-pengguna');
                break;
                // tambah scooter admin
            case $baseURL . '/tambah-scooter';
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_tambah_scooter();
                break;
                // proses tambah scooter admin
            case $baseURL . '/tambah-scooter-process':
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                $adminCtrl->tambahScooter();
                header('Location: tambah-scooter');
                break;
                // view edit pengguna admin
            case $baseURL . '/edit-pengguna';
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_edit_pengguna();
                break;
                // proses edit pengguna admin
            case $baseURL . '/edit-pengguna-process':
                require_once "controller/AdminController.php";
                $adminCtrl = new AdminController();
                $adminCtrl->editPengguna();
                header('Location: edit-pengguna');
                break;
                // view edit scooter admin
            case $baseURL . '/edit-scooter':
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_edit_tarif_scooter();
                break;
                // proses edit scooter admin
            case $baseURL . '/edit-scooter-process':
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                $adminCtrl->editTarifScooter();
                header('Location: edit-scooter');
                break;
                // proses delete pengguna
            case $baseURL . '/delete-pengguna':
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                $adminCtrl->deletePengguna();
                header('Location: data-pengguna');
                break;
                // proses delete scooter
            case $baseURL . '/delete-scooter':
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                $adminCtrl->deleteScooter();
                header('Location: scooter-admin');
                break;
                // data pengguna search
            case strpos($url, $baseURL . "/data-pengguna-search"):
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_data_pengguna();
                break;
                // data scooter search di admin
            case strpos($url, $baseURL . "/data-scooter-search"):
                require_once "Controller/AdminController.php";
                $adminCtrl = new AdminController();
                echo $adminCtrl->view_data_scooter();
                break;
                //logout
            case $baseURL . '/logout-process':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->logout();
                header('location: ./index');
                break;
                // default
            default:
                echo '404 Not Found!';
                break;
        }
    }
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'pimpinan') {
        switch ($url) {
                // home pimpinan
            case $baseURL . '/pimpinan';
                require_once "controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_index_pimpinan();
                break;
                // data scooter pimpinan
            case $baseURL . '/scooter-pimpinan';
                require_once "controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_data_scooter();
                break;
                // view laporan transaksi di pimpinan taman
            case $baseURL . '/laporan-transaksi':
                require_once  "Controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_laporan_transaksi();
                break;
            case strpos($url, $baseURL . "/tanggal-search"):
                require_once "Controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_laporan_transaksi2();
                break;
                // statistik scooter search 
            case strpos($url, $baseURL . "/statistik-scooter"):
                require_once "Controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_statistik_pimpinanS();
                break;
                // statistik penyewa search
            case strpos($url, $baseURL . "/statistik-penyewa"):
                require_once "Controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_statistik_pimpinanP();
                break;
                // data scooter search di pimpinan
            case strpos($url, $baseURL . "/data-scooter-pimpinan-search"):
                require_once "Controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_data_scooter();
                break;
                // laporan transaksi search di pimpinan by nama penyewa dan warna
            case strpos($url, $baseURL . "/laporan-transaksi-process"):
                require_once "Controller/PimpinanController.php";
                $pimpinanCtrl = new PimpinanController();
                echo $pimpinanCtrl->view_laporan_transaksi();
                break;
                //logout
            case $baseURL . '/logout-process':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->logout();
                header('location: ./index');
                break;
                // default
            default:
                echo '404 Not Found!';
                break;
        }
    }
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'operator') {
        switch ($url) {
                // home operator
            case $baseURL . '/operator';
                require_once "controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->view_index_operator();
                break;
                // data penyewa di operator
            case $baseURL . '/data-penyewa';
                require_once "controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->view_data_penyewa();
                break;
                // data penyewa search by date
            case strpos($url, $baseURL . "/tanggal2-search"):
                require_once "Controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->view_data_penyewa2();
                break;
                // data penyewa search di operator
            case strpos($url, $baseURL . "/data-penyewa-search"):
                require_once "Controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->view_data_penyewa();
                break;
                // view pendaftaran transaksi di operator
            case $baseURL . '/pendaftaran-transaksi':
                require_once "Controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->view_pendaftaran_transaksi();
                break;
                // view pelunasan transaksi di operator
            case $baseURL . '/pelunasan-transaksi':
                require_once "Controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->view_pelunasan_transaksi();
                break;
                // daftar penyewa operator
            case $baseURL . '/daftar-penyewa';
                require_once "controller/OperatorController.php";
                $adminCtrl = new OperatorController();
                echo $adminCtrl->view_daftar_penyewa();
                break;
                // proses daftar penyewa operator
            case $baseURL . '/daftar-penyewa-process':
                require_once "controller/OperatorController.php";
                $adminCtrl = new OperatorController();
                $adminCtrl->daftarPenyewa();
                header('Location: daftar-penyewa');
                break;
                // proses pendaftaran transaksi operator
            case $baseURL . '/pendaftaran-transaksi-process':
                require_once "controller/OperatorController.php";
                $adminCtrl = new OperatorController();
                $adminCtrl->pendaftaranTransaksi();
                header('Location: pendaftaran-transaksi');
                break;
                // proses pelunasan transaksi operator
            case $baseURL . '/pelunasan-transaksi-process':
                require_once "controller/OperatorController.php";
                $adminCtrl = new OperatorController();
                $adminCtrl->pelunasanTransaksi();
                header('Location: pelunasan-transaksi');
                break;
                //logout
            case $baseURL . '/logout-process':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->logout();
                header('location: ./index');
                break;
                // default
            default:
                echo '404 Not Found!';
                break;
        }
    } else {
        switch ($url) {
                // proses login page
            case $baseURL . '/login-process':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                $homeCtrl->login();
                $role = $_SESSION['role'];
                header('Location: ' . $role . '');
                break;
                //view team profile
            case $baseURL . '/the-team':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->view_team();
                break;
                // view home utama 
            case $baseURL . '/index':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->view_home_utama();
                break;
                // view about us 
            case $baseURL . '/about-us':
                require_once "Controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->view_about_us();
                break;
                // login home
            case $baseURL . '/login';
                require_once "controller/HomeController.php";
                $homeCtrl = new HomeController();
                echo $homeCtrl->view_index_login();
                break;
                // default
            default:
                echo '404 Not Found!';
                break;
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'operator') {
        switch ($url) {
                //upload
            case $baseURL . '/uploadfile':
                require_once "controller/OperatorController.php";
                $operatorCtrl = new OperatorController();
                echo $operatorCtrl->handle_upload_file();
                break;
                // default
            default:
                echo '404 Not Found!';
                break;
        }
    }
}
