<?php
$halamanSekarangNav = 'dataPengguna';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <div class="flex-header">
        <h1>Data Pengguna</h1>
        <form method="GET" action="data-pengguna-search"><input type="text" name="searchP"><input type="submit" value="Cari"></form>
    </div>
    <div class="flex-body">
        <table border="1">
            <tr>
                <th>KTP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Role</th>
                <th>Kelurahan</th>
                <th>Aksi</th>
            </tr>
            <?php
            foreach ($result as $key => $row) {
                $KTP = $row->getKTPPengguna();
                echo '
                    <tr>
                        <td> ' . $KTP . ' </td>
                        <td> ' . $row->getNamaPengguna() . ' </td>
                        <td> ' . $row->getAlamatPengguna() . ' </td>
                        <td> ' . $row->getEmailPengguna() . ' </td>
                        <td> ' . $row->getRole() . ' </td>
                        <td> ' . $row->getKel() . ' </td>
                        <td>
                            <form method="GET" action="./edit-pengguna" style="display: inline-block;">
                                <input type="hidden" name="id" value="' . $KTP . '"/>
                                <input type="submit" value="Edit" class="tombol">
                            </form>
                            <form method="GET" action="./delete-pengguna" style="display: inline-block;">
                                <input type="hidden" name="id" value="' . $KTP . '"/>
                                <input type="submit" value="Hapus" class="tombol">
                            </form>
                        </td>
                    </tr>
                ';
            }
            ?>
        </table>
    </div>
    <div class="flex-footer">
        <div class="left-footer">
            <button class="tombol" onclick="window.location = `./tambah-pengguna`">Tambah Pengguna</button>
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