<?php
$halamanSekarangNav = 'dataScooterAdmin';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <div class="flex-header">
        <h1>Data Scooter</h1>
        <form method="GET" action='./scooter-admin'><input type="text" name="searchS"><input type="submit" value="Cari"></form>
    </div>
    <div class="flex-body">
        <table border="1">
            <tr>
                <th>No Unik</th>
                <th>Warna</th>
                <th>Tarif</th>
                <th>Aksi</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                $NoUnik = $row->getNoUnik();
                echo '
                    <tr>
                    <td> ' . $NoUnik . ' </td>
                    <td> ' . $row->getWarna() . ' </td>
                    <td> ' . $row->getTarifScooter() . ' </td>
                    <td>
                        <form method="GET" action="./delete-scooter" style="display: inline-block;">
                            <input type="hidden" name="no" value="' . $NoUnik . '"/>
                            <input type="submit" value="Hapus">
                        </form>
                    </td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <button onclick="window.location = `./tambah-scooter`">Tambah Scooter</button>
            <button onclick="window.location = `./edit-scooter`">Edit Tarif</button>
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