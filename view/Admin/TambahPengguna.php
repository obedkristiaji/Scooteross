<?php
$halamanSekarangNav = 'tambahPengguna';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <form method="GET" action="tambah-pengguna-process">
        <div class="flex-form">
            <h1>Tambah Pengguna</h1>
            <div class="input">
                <p>KTP : </p>
                <input type="text" name="KTPPengguna">
            </div>
            <div class="input">
                <p>Nama : </p>
                <input type="text" name="namePengguna">
            </div>
            <div class="input">
                <p>Alamat : </p>
                <input type="text" name="addressPengguna">
            </div>
            <div class="input">
                <p>Email : </p>
                <input type="text" name="emailPengguna">
            </div>
            <div class="input">
                <p>Password : </p>
                <input type="text" name="passwordPengguna">
            </div>
            <div class="input">
                <p>Id Role : </p>
                <input type="number" max="3" min="1" name="roles">
            </div>
            <div class="input">
                <p>Id Kelurahan : </p>
                <input type="number" max="7" min="1" name="kelurahan">
            </div>
            <div>
                <input type="submit" value="Tambah">
                <button onclick="window.location = `./data-pengguna`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>