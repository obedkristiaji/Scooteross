<?php
$halamanSekarangNav = 'dataScooterPimpinan';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <div class="flex-header">
        <h1>Data Scooter</h1>
        <form method="GET" action="data-scooter-pimpinan-search"><input type="text" name="searchSP"><input type="submit" value="Cari"></form>
    </div>
    <div class="flex-body">
        <table border="1">
            <tr>
                <th>No Unik</th>
                <th>Warna</th>
                <th>Tarif</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> ' . $row->getNoUnik() . ' </td>
                    <td> ' . $row->getWarna() . ' </td>
                    <td> ' . $row->getTarifScooter() . ' </td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
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