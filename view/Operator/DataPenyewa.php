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
                <th>Alamat</th>
                <th>No Scooter</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo "<tr>";
                echo "<td>" . $row->getNoKTPPenyewa() . "</td>";
                echo "<td>" . $row->getNamaPenyewa() . "</td>";
                echo "<td>" . $row->getAlamatPenyewa() . "</td>";
                echo "<td>" . $row->getNoScooter() . "</td>"; // dataScooter.php
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