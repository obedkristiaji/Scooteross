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
                <p>Id Kelurahan : </p>
                <input type="number" min="1" max="7" name="kelPenyewa" required>
            </div>
            <div class="input">
                <p>Upload Foto KTP : </p>
                <input type="file" placeholder="Choose File" required>
            </div>
            <div class="input">
                <input type="submit" value="Daftar" required>
                <button onclick="window.location = `./pendaftaran-transaksi`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>