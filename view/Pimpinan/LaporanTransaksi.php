<?php
$halamanSekarangNav = 'laporanTransaksi';
$halamanSekarangButton = 'logout';
?>
<div class="flex-container">
    <div class="flex-header">
        <h1>Laporan Transaksi</h1>
        <form><input type="text" name="search"><input type="submit" value="Cari"></form>
    </div>
    <div class="flex-body">
        <table>
            <tr>
                <th>No Transaksi</th>
                <th>KTP</th>
                <th>Nama</th>
                <th>Id Scooter</th>
                <th>Warna</th>
                <th>Biaya</th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> ' . $row->getNoTransaksi() . ' </td>
                    <td> ' . $row->getKTP() . ' </td>
                    <td> ' . $row->getNama() . ' </td>
                    <td> ' . $row->getIdScooter() . ' </td>
                    <td> ' . $row->getWarna() . ' </td>
                    <td> ' . $row->getBiaya() . ' </td>
                    <td> ' . $row->getMulai() . ' </td>
                    <td> ' . $row->getSelesai() . ' </td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <form><label>Tanggal </label><input type="date"><label> - </label><input type="date"><input type="submit" value="Cari"></form>
        </div>
        <div class="right-footer">
            <form method="GET">
                <?php
                if ($_SESSION['pageCount'] > 1) {
                    echo '<button class="btn" name="prev"><i class="fa fa-angle-left"></i></button>';
                    echo '<p class="page-num"> ' . $_SESSION['i'] . ' </p>';
                    echo '<button class="btn" name="next"><i class="fa fa-angle-right"></i></button>';
                }
                ?>
            </form>
        </div>
    </div>
</div>