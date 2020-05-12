<?php
$halamanSekarangNav = 'statistikPenyewaan';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <div class="flex-header">
        <h1>Statistik Penyewaan</h1>
        <?php if ($_SESSION['indexStat'] == 1) : ?>
            <form method="GET" action="statistik-scooter">
                <input type="text" name="searchStatS"><input type="submit" value="Cari">
            <form>
        <?php else : ?>
            <form method="GET" action="statistik-penyewa">
                <input type="text" name="searchStatP"><input type="submit" value="Cari">
            <form>
        <?php endif ?>
    </div>
    <div class="flex-body">
        <?php if ($_SESSION['indexStat'] == 1) : ?>
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
                    <td> ' . $num . ' </td>
                    <td> ' . $row->getNoScooter() . ' </td>
                    <td> ' . $row->getjmlP() . ' </td>
                    </tr>
                ';
                    $num++;
                }
                ?>
            </table>
        <?php else : ?>
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
                    <td> ' . $num . ' </td>
                    <td> ' . $row->getnama() . ' </td>
                    <td> ' . $row->getjmlS() . ' </td>
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
        </div>
        <div class="right-footer">
            <?php if ($_SESSION['indexStat'] == 1) : ?>
                <form method="GET">
                    <button onclick="window.location = `./statistik-penyewa`; return false;" type="submit" name="rankP">Statistik Penyewa</button>
                </form>
            <?php else : ?>
                <form method="GET">
                    <button onclick="window.location = `./statistik-scooter`; return false;" type="submit" name="rankP">Statistik Scooter</button>
                </form>
            <?php endif ?>
        </div>
    </div>
</div>