<table class="rankScooter">
    <tr>
        <th>Rank</th>
        <th>No Unik Scooter</th>
        <th>Jumlah Penyewa</th>
    </tr>
    <?php
        foreach ($result as $key => $row){
            echo "<tr>";
            echo "<td>".$row->getNoUnik()."</td>";
            echo "<td>".$row->getWarna()."</td>";
            echo "<td>".$row->getTarifScooter()."</td>";
            echo "</tr>";
        }
    ?>
</table>