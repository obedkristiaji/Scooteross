<div class="pendaftaranPenyewa">
    <h1>Pendaftaran Penyewa</h1>
    <form mtehod="GET" action="pendaftaranPenyewa">
        <table>
            <tr>
                <td>No KTP : </td>
                <td><input type="number" name="KTPPenyewa" required></td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="namePenyewa" required></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="addressPenyewa" required></td>
            </tr>
            <tr>
                <td>Upload Foto KTP : </td>
                <td><input type="file" placeholder="Choose File" required></td>
            </tr>
            <tr>
                <td><input type="submit" placeholder="Tambah" required></td>
            </tr>
        </table>
    </form>
</div>