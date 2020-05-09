<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/font-awesome.css">
</head>


<body>
    <header>
        <img src="view/img/Logos.png" alt="Logo" class="logo">
        <?php
            if($halamanSekarangNav=='indexAdmin'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='dataPengguna'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin / Data Pengguna'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='tambahPengguna'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin / Tambah Pengguna'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='editPengguna'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin / Edit Pengguna'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='dataScooterAdmin'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin / Data Scooter'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='tambahScooterAdmin'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin / Tambah Scooter'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='editTarifAdmin'){
                echo '<ul class="navigator">';
                echo '<li>'.'Admin / Edit Tarif'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='indexPimpinan'){
                echo '<ul class="navigator">';
                echo '<li>'.'Pimpinan Taman'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='dataScooterPimpinan'){
                echo '<ul class="navigator">';
                echo '<li>'.'Pimpinan Taman / Data Scooter'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='laporanTransaksi'){
                echo '<ul class="navigator">';
                echo '<li>'.'Pimpinan Taman / Laporan Transaksi'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='statistikPenyewaan'){
                echo '<ul class="navigator">';
                echo '<li>'.'Pimpinan Taman / Statistik Penyewaan'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='indexOperator'){
                echo '<ul class="navigator">';
                echo '<li>'.'Operator'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='pendaftaranTransaksi'){
                echo '<ul class="navigator">';
                echo '<li>'.'Operator / Pendaftaran Transaksi'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='pendaftaranPenyewa'){
                echo '<ul class="navigator">';
                echo '<li>'.'Operator / Daftar Penyewa'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='dataPenyewaOperator'){
                echo '<ul class="navigator">';
                echo '<li>'.'Operator / Data Penyewa'.'</li>';
                echo '</ul>';
            }

            else if($halamanSekarangNav=='pelunasanTransaksi'){
                echo '<ul class="navigator">';
                echo '<li>'.'Operator / Pelunasan Transaksi'.'</li>';
                echo '</ul>';
            }

            if($halamanSekarangButton=='logout'){
                echo '<button>Logout</button>';
            }
        ?>
    </header>
    <div class="left">.</div>

    <div class="center">
        <?php echo $content; ?>
    </div>

    <div class="right">.</div>
    <footer>.</footer>
    <script src="view/js/script.js"></script>
</body>

</html>