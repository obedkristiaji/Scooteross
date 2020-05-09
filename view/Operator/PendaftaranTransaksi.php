<div class="flex-container">
    <form method="GET" action="pendaftaran-transaksi-process">
        <div class="flex-form">
            <h1>Pendaftaran Transaksi</h1>
            <div class="input">
                <p>No KTP : </p>
                <input type="text" name="KTPPenyewa" required>
            </div>
            <div class="input">
                <p>No Scooter : </p>
                <input type="number" name="noScooter" required>
            </div>
            <div class="input">
                <p>Durasi Peminjaman : </p>
                <input type="number" name="duration" required>
            </div>
            <div class="input">
                <input type="checkbox" name="masukkan" value="KTP" required /> KTP
                <input type="checkbox" name="masukkan" value="uangMuka" required /> Uang Muka
            </div>
            <div class="input">
                <input type="submit" value="Input">
                <button onclick="window.location = `./daftar-penyewa`; return false;">Daftar</button>
                <button onclick="window.location = `./operator`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>