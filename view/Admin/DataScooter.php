<div class="flex-container">
    <div class="flex-header">
        <h1>Data Scooter</h1>
        <form><input type="text" name="search"><input type="submit" value="Cari"></form>
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
                echo '
                    <tr>
                    <td> ' . $row->getNoUnik() . ' </td>
                    <td> ' . $row->getWarna() . ' </td>
                    <td> ' . $row->getTarifScooter() . ' </td>
                    <td><form><input type="submit" value="Hapus"></form></td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <button>Tambah Scooter</button>
            <button>Edit Tarif</button>
        </div>
        <div class="right-footer">
            <form method="GET">
                <?php
                if ($_SESSION['pageCount'] > 1) {
                    echo '<button class="btn" name="prev"><i class="fa fa-angle-left"></i></button>';
                    echo ' ' . $_SESSION['i'] . ' ';
                    echo '<button class="btn" name="next"><i class="fa fa-angle-right"></i></button>';
                }
                ?>
            </form>
        </div>
    </div>
</div>