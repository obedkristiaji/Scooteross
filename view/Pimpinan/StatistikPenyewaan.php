<div class="flex-container">
    <div class="flex-header">
        <h1>Statistik Penyewaan</h1>
    </div>
    <div class="flex-body">
        <table>
            <tr>
                <th>Rank</th>
                <th>No Unik Scooter</th>
                <th>Jumlah Penyewa</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> '. $row->getNoUnik() .' </td>
                    <td> '. $row->getWarna() .' </td>
                    <td> '. $row->getTarifScooter() .' </td>
                    </tr>
                ';
            }
            ?>
        </table>
        <table>
            <tr>
                <th>Rank</th>
                <th>Nama Penyewa</th>
                <th>Jumlah Scooter Sewaan</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> '. $row->getNoUnik() .' </td>
                    <td> '. $row->getWarna() .' </td>
                    <td> '. $row->getTarifScooter() .' </td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <form><input type="text"><input type="submit" value="Cari"><form>
        </div>
        <div class="right-footer">
            <form><input type="text"><input type="submit" value="Cari"><form>
        </div>
    </div>
</div>