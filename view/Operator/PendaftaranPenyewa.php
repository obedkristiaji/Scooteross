<?php
$halamanSekarangNav = 'pendaftaranPenyewa';
$halamanSekarangButton = 'logout';
?>
<div class="flex-container">
    <form method="GET" action="daftar-penyewa-process">
        <div class="flex-form">
            <h1>Pendaftaran Penyewa</h1>
            <div class="input">
                <p>No KTP : </p>
                <input type="text" name="KTPPenyewa" required>
            </div>
            <div class="input">
                <p>Nama : </p>
                <input type="text" name="namePenyewa" required>
            </div>
            <div class="input">
                <p>Alamat : </p>
                <input type="text" name="addressPenyewa" required>
            </div>
            <div class="input">
                <p>Email : </p>
                <input type="text" name="emailPenyewa" required>
            </div>
            <div class="input">
                <p>Kelurahan : </p>
                <input type="text" name="kelPenyewa" required>
            </div>
            <div class="input">
                <br>
                <input type="checkbox" required>Upload Foto
            </div>
            <div class="input">
                <br>
                <input type="submit" value="Daftar" class="tombol" required>
                <button class="tombol" onclick="window.location = `./pendaftaran-transaksi`; return false;">Kembali</button>
            </div>
        </div>
    </form>
    <form id="formUpload" method="post" action="uploadfile">
        <br>
        <div class="tombol">Foto KTP : </div><input type="file" name="file" class="tombol">
        <button class="tombol" id="btn_upload" type="submit">Upload</button>
    </form>
</div>