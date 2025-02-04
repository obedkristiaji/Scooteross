<?php
$halamanSekarangNav = 'editPengguna';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <form method="GET" action="edit-pengguna-process">
        <div class="flex-form">
            <h1>Edit Pengguna</h1>
            <div class="input">
                <p>Nama Baru : </p>
                <input type="text" name="newNamePengguna">
            </div>
            <div class="input">
                <p>Alamat Baru : </p>
                <input type="text" name="newAddressPengguna">
            </div>
            <div class="input">
                <p>Email Baru : </p>
                <input type="text" name="newEmailPengguna">
            </div>
            <div class="input">
                <p>Password Baru : </p>
                <input type="password" name="newPasswordPengguna">
            </div>
            <div class="input">
                <p>Id Role Baru : </p>
                <input type="number" max="3" min="1" name="newRoles">
            </div>
            <div class="input">
                <p>Kelurahan Baru : </p>
                <input type="text" name="newKelurahan">
            </div>
            <div class="input">
                <input type="submit" value="Update" class="tombol">
                <button class="tombol" onclick="window.location = `./data-pengguna`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>