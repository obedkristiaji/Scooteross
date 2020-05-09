<div class="flex-container">
    <form method="GET" action="pelunasan-transaksi-process">
        <div class="flex-form">
            <h1>Pelunasan Transaksi</h1>
            <div class="input">
                <p>No KTP : </p>
                <input type="number" name="KTPPenyewa" required>
            </div>
            <div class="input">
                <p>No Scooter : </p>
                <input type="number" name="noScooter" required>
            </div>
            <div class="input">
                <p>Durasi Tambahan : </p>
                <input type="number" name="durasiTambahan" required>
            </div>
            <div class="input">
                <p>Biaya Tambahan : </p>
                <input type="number" name="biayaTambahan" required>
            </div>
            <div class="input">
                <input type="checkbox" name="masukkan" value="KTP" required /> KTP
                <input type="checkbox" name="masukkan" value="biayaSewa" required /> Biaya Sewa
            </div>
            <div class="input">
                <input type="submit" value="Selesai">
                <button onclick="window.location = `./operator`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>