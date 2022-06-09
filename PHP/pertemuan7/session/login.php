<?php


session_start(); //memulai session agar dapat terbaca
// session_start() selalu ditempatkan di baris pertama file.

$_SESSION['username'] = "mahasiswa121401210"; // membuat var session username
$_SESSION['role'] = "mhs"; // membuat var session role
$_SESSION['isLogin'] = 1; // membuat var session login (boolean)

// mengecek value dari variabel isLogin,
// jika value bernilai true (1), maka session berhasil di register
if($_SESSION['isLogin'] == 1) {
    echo "Anda Telah Login";
    echo "<a href='sess.php'> Masuk Ke Profil </a>";

    // header('Location: sess.php', true); mengalihkan ke laman sess.php
}else{
    echo "Anda Belum Login";
}