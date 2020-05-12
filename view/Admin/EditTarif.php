<?php
$halamanSekarangNav = 'editTarifAdmin';
$halamanSekarangButton = 'logout';
?>

<div class="flex-container">
    <form method="GET" action="edit-scooter-process">
        <div class="flex-form">
            <h1>Edit Tarif</h1>
            <div class="input">
                <p>Tarif Baru : </p>
                <input type="number" name="newTarif">
            </div>
            <div class="input">
                <input type="submit" value="Update" class="tombol">
                <button class="tombol" onclick="window.location = `./scooter-admin`; return false;">Kembali</button>
            </div>
        </div>
    </form>
</div>