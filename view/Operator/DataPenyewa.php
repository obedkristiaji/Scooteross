<table border="1">
    <tr>
        <th>No KTP</th>
        <th>Nama</th>       
        <th>Alamat</th>
        <th>No Scooter</th>
    </tr>
    <?php
        foreach ($result as $key => $row){
            echo "<tr>";
            echo "<td>".$row->getNoKTPPenyewa()."</td>";
            echo "<td>".$row->getNamaPenyewa()."</td>";
            echo "<td>".$row->getAlamatPenyewa()."</td>";
            echo "<td>".$row->getNoScooter()."</td>"; // dataScooter.php
            echo "</tr>";
        }
    ?>
</table>