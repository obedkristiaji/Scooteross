<!-- View Admin -->
<?php
$halamanSekarangNav = 'indexAdmin';
$halamanSekarangButton = 'logout';
?>
<div class="home-container" method="GET" action="index">
        <button onclick="window.location = `./data-pengguna`" class="item1">Data Pengguna</button>
        <button onclick="window.location = `./scooter-admin`" class="item2">Data Scooter</button>
        <button onclick="window.location = `./edit-scooter`" class="item3">Edit Tarif</button>
</div>
