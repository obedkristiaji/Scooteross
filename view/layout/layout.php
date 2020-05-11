<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="view/css/style.css"> -->
    <link rel="stylesheet" href="view/css/font-awesome.css">
</head>

<body>
    <header>
        <img src="view/img/Logos.png" alt="Logo" class="logo">
        <?php
            echo '<div class="flex-nav">';
            if($halamanSekarangNav=='indexAdmin'){
                echo '<div><a class="navigator" href="./admin">Admin</a></div>';
            }

            else if($halamanSekarangNav=='dataPengguna'){
                echo '<div><a class="navigator" href="./admin">Admin</a> / <a class="navigator" href="./data-pengguna">Data Pengguna</a></div>';
            }

            else if($halamanSekarangNav=='tambahPengguna'){
                echo '<div><a class="navigator" href="./admin">Admin</a> / <a class="navigator" href="./tambah-pengguna">Tambah Pengguna</a></div>';
            }

            else if($halamanSekarangNav=='editPengguna'){
                echo '<div><a class="navigator" href="./admin">Admin</a> / <a class="navigator" href="./edit-pengguna">Edit Pengguna</a></div>';
            }

            else if($halamanSekarangNav=='dataScooterAdmin'){
                echo '<div><a class="navigator" href="./admin">Admin</a> / <a class="navigator" href="./scooter-admin">Data Scooter</a></div>';
            }

            else if($halamanSekarangNav=='tambahScooterAdmin'){
                echo '<div><a class="navigator" href="./admin">Admin</a> / <a class="navigator" href="./tambah-scooter">Tambah Scooter</a></div>';
            }

            else if($halamanSekarangNav=='editTarifAdmin'){
                echo '<div><a class="navigator" href="./admin">Admin</a> / <a class="navigator" href="./edit-scooter">Edit Tarif</a></div>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='indexPimpinan'){
                echo '<div><a class="navigator" href="./pimpinan">Pimpinan Taman</a></div>';
            }

            else if($halamanSekarangNav=='dataScooterPimpinan'){
                echo '<div><a class="navigator" href="./pimpinan">Pimpinan Taman</a> / <a class="navigator" href="./scooter-pimpinan">Data Scooter</a></div>';
            }

            else if($halamanSekarangNav=='laporanTransaksi'){
                echo '<div><a class="navigator" href="./pimpinan">Pimpinan Taman</a> / <a class="navigator" href="./laporan-transaksi">Laporan Transaksi</a></div>';
            }

            else if($halamanSekarangNav=='statistikPenyewaan'){
                echo '<div><a class="navigator" href="./pimpinan">Pimpinan Taman</a> / <a class="navigator" href="./statistik-penyewaan">Statistik Penyewaan</a></div>';
            }

            else if($halamanSekarangNav=='indexOperator'){
                echo '<div><a class="navigator" href="./operator">Operator</a></div>';
            }

            else if($halamanSekarangNav=='pendaftaranTransaksi'){
                echo '<div><a class="navigator" href="./operator">Operator</a> / <a class="navigator" href="./pendaftaran-transaksi">Pendaftaran Transaksi</a></div>';
            }

            else if($halamanSekarangNav=='pendaftaranPenyewa'){
                echo '<div><a class="navigator" href="./operator">Operator</a> / <a class="navigator" href="./daftar-penyewa">Pendaftaran Penyewa</a></div>';
            }

            else if($halamanSekarangNav=='dataPenyewaOperator'){
                echo '<div><a class="navigator" href="./operator">Operator</a> / <a class="navigator" href="./data-penyewa">Data Penyewa</a></div>';
            }

            else if($halamanSekarangNav=='pelunasanTransaksi'){
                echo '<div><a class="navigator" href="./operator">Operator</a> / <a class="navigator" href="./pelunasan-transaksi">Pelunasan Transaksi</a></div>';
            }

            if($halamanSekarangButton=='logout'){
                echo '<form method="GET" action="logout-process">';
                echo '<input type="submit" class="logout" value="Logout">';
                echo '</form>';
            }
            echo '</div>';
        ?>
    </header>
    <div class="left">.</div>

    <div class="center">
        <?php echo $content; ?>
    </div>

    <div class="right">.</div>
    <footer>.</footer>
    <script src="view/js/script.js" defer></script>
</body>

</html>