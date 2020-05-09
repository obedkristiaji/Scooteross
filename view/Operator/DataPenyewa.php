<div class="flex-container">
    <div class="flex-header">
        <h1>Data Penyewa</h1>
        <form><input type="text" name="search"><input type="submit" value="Cari"></form>
    </div>
    <div class="flex-body">
        <table border="1">
            <tr>
                <th>No KTP</th>
                <th>Nama</th>
                <th>No Scooter</th>
                <th>Warna</th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo "<tr>";
                echo "<td>" . $row->getKTP() . "</td>";
                echo "<td>" . $row->getNama() . "</td>";
                echo "<td>" . $row->getIdScooter() . "</td>";
                echo "<td>" . $row->getWarna() . "</td>";
                echo "<td>" . $row->getMulai() . "</td>";
                echo "<td>" . $row->getSelesai() . "</td>";
                echo "</tr>";
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