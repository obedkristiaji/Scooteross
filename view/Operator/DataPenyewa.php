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
        <div class="right-footer">
            <!-- pagination button -->
        </div>
    </div>
</div>