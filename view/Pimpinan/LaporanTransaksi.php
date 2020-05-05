<div class="flex-container">
    <div class="flex-header">
        <h1>Laporan Transaksi</h1>
        <form><input type="text" name="search"><input type="submit" value="Cari"></form>
    </div>
    <div class="flex-body">
        <table>
            <tr>
                <th>No Unik</th>
                <th>No KTP</th>
                <th>Warna</th>
                <th>Biaya Sewa</th>
                <th>Tanggal</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                echo '
                    <tr>
                    <td> '. $row->getNoUnik() .' </td>
                    <td> '. $row->getNoKTPPenyewa() .' </td>
                    <td> '. $row->getWarna() .' </td>
                    // buat get biaya sewa hrs nerima input dlu dari penyewa
                    // buat tanggal sewa hrs nerima input dlu dari penyewa
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <form><label>Tanggal</label><input type="date"><label>-</label><input type="date"><input type="submit" value="Cari"></form>
        </div>
        <div class="right-footer">
            <!-- pagination button -->
        </div>
    </div>
</div>