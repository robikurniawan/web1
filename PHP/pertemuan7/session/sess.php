<?php
session_start(); // ini untuk membaca sesssion 
// code ini harus selalu ditempat paling atas 

//mengecek apakah session isLogin telah diregister di server
if($_SESSION && $_SESSION['isLogin'] == 1) {
    
    //jika benar maka akan tampil var session yang telah diregister
    echo "Halo Selamat Datang " . $_SESSION['username'] . "<br>";
    echo "Login Sebagai " . $_SESSION['role'] . "<br>";
    /**
     * echo $_SESSION['nama_session']
     * fungsi menampilkan session yang telah terdaftar pada server
     */

    // mengarahkan ke logout.php untuk menghapus session 
    echo "<a href='logout.php'> Log Out </a>";

} else {
    echo "Anda Belum Melakukan Login";
    echo "<a href='login.php'> Login Disini </a>";

}



