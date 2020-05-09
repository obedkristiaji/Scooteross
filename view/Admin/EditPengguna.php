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
                <p>Role Baru : </p>
                <input type="text" name="newRoles">
            </div>
            <div class="input">
                <input type="submit" value="Update">
                <button onclick="window.location = `./data-pengguna`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>