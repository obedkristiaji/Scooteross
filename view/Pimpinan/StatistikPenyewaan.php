<?php
$halamanSekarangNav = 'statistikPenyewaan';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <div class="flex-header">
        <h1>Statistik Penyewaan</h1>
    </div>
    <div class="flex-body">
        <?php if($_SESSION['indexStat'] == 1): ?>
        <table>
            <tr>
                <th>Rank</th>
                <th>No Unik Scooter</th>
                <th>Jumlah Penyewa</th>
            </tr>
            <?php
            $num = 1;
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> '. $num .' </td>
                    <td> '. $row->getNoScooter() .' </td>
                    <td> '. $row->getjmlP() .' </td>
                    </tr>
                ';
                $num++;
            }
            ?>
        </table>
        <?php else: ?>
        <table>
            <tr>
                <th>Rank</th>
                <th>Nama Penyewa</th>
                <th>Jumlah Scooter Sewaan</th>
            </tr>
            <?php
            $num = 1;
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> '. $num .' </td>
                    <td> '. $row->getnama() .' </td>
                    <td> '. $row->getjmlS() .' </td>
                    </tr>
                ';
                $num++;
            }
            ?>
        </table>
        <?php endif ?>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <form><input type="text"><input type="submit" value="Cari"><form>
        </div>
        <div class="right-footer">
            <form method="GET">
                <?php
                echo '<button class="btn" name="prev"><i class="fa fa-angle-left"></i></button>';
                echo '<p class="page-num"> ' . $_SESSION['indexStat'] . ' </p>';
                echo '<button class="btn" name="next"><i class="fa fa-angle-right"></i></button>';
                ?>
            </form>
        </div>
    </div>
</div>