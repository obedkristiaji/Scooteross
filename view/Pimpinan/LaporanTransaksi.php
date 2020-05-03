<table>
    <tr>
        <th>No Unik</th>
        <th>No KTP</th>
        <th>Warna</th>
        <th>Biaya Sewa</th>
        <th>Tanggal</th>
    </tr>
    <?php
        foreach ($result as $key => $row){
            echo "<tr>";
            echo "<td>".$row->getNoUnik()."</td>";
            echo "<td>".$row->getNoKTPPenyewa()."</td>";
            echo "<td>".$row->getWarna()."</td>";
            //buat get biaya sewa hrs nerima input dlu dari penyewa
            // buat tanggal sewa hrs nerima input dlu dari penyewa
            echo "</tr>";
        }
    ?>
</table>