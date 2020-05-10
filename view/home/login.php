<?php
$halamanSekarangNav = 'login';
$halamanSekarangButton = '';
?>

<div id="sign-in">
    <h2>MASUK</h2>
    <form method="GET" action="login-process">
        <div class="flex-form">
            <div class="input">
                <p>Email : </p>
                <input type="text" name="username" required>
            </div>
            <div class="input">
                <p>Password : </p>
                <input type="password" name="password" required>
            </div>
            <input class="loginHalamanUtama" id="login" type="submit" value="Masuk">
        </div>
    </form>
</div>