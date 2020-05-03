<div class="pelunasanTransaksi">
    <h1>Pelunasan Transaksi</h1>
    <form mtehod="GET" action="pelunasanTransaksi">
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
                <td>Durasi Tambahan : </td> 
                <td><input type="number" name="durasiTambahan" required></td>
            </tr>
            <tr>
                <td>Biaya Tambahan : </td>
                <td><input type="number" name="biayaTambahan" required></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="masukkan" value="KTP" required /> KTP
                    <input type="checkbox" name="masukkan" value="biayaSewa" required /> Biaya Sewa 
                </td>
            </tr>
            <tr>
                <td><input type="submit" placeholder="Input"></td>
            </tr>
        </table>
    </form>
</div>