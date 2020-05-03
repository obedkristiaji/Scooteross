<div class="pendaftaranTransaksi">
    <h1>Pendaftaran Transaksi</h1>
    <form mtehod="GET" action="pendaftaranTransaksi">
        <table>
            <tr>
                <td>No KTP : </td>
                <td><input type="number" name="KTPPenyewa" required></td>
            </tr>
            <tr>
                <td>No Scooter : </td>
                <td><input type="number" name="noScooter" required></td>
            </tr>
            <tr>
                <td>Durasi Peminjaman : </td>
                <td><input type="number" name="duration" required></td>
            </tr>
            <tr>
                <td>Tanggal Peminjaman : </td>
                <td><input type="date" name="tanggalPinjam" required></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="masukkan" value="KTP" required /> KTP
                    <input type="checkbox" name="masukkan" value="uangMuka" required /> Uang Muka 
                </td>
            </tr>    
            <tr>
                <td><input type="submit" placeholder="Input"></td>
            </tr>
        </table>
    </form>
</div>