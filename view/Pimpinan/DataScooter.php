<table border="1">
    <tr>
        <th>No Unik</th>
        <th>Warna</th>
        <th>Tarif</th>
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