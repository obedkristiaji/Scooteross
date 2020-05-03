
<div method="GET" action="DataPengguna">
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Role</th>
        <th>KTP</th>
    </tr>
    <?php
        foreach ($result as $key => $row){
            echo "<tr>";
            echo "<td>".$row->getIdPengguna()."</td>";
            echo "<td>".$row->getNamaPengguna()."</td>";
            echo "<td>".$row->getAlamatPengguna()."</td>";
            echo "<td>".$row->getRole()."</td>";
            echo "<td>".$row->getKTPPengguna()."</td>";
            echo "</tr>";
        }
    ?>
</table>
</div>