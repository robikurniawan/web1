

<?php
//buat cookies
setcookie("remember_me", '1', time() + (3600 * 24 * 30));
setcookie('background-color', '#1d202b', strtotime('+7 days'), '');
setcookie("ads", 'img/cookie.jpg', strtotime('+1 days'), '');

//hapus cookies
setcookie("background-color", "", time() - 3600);
setcookie("dark_mode", "", time() - 3600);
?>

<style lang="">
    body {
        background-color: <?= $_COOKIE['background-color'] ?> ;
    }
</style>
<?php
print_r($_COOKIE);
?>