<?php 
session_start(); //untuk membaca session yang telah terdaftar

session_destroy(); // menghapus semua session yang terdaftar

echo "Anda Berhasil Logout";
echo "<a href='login.php'> Login Disini </a>";
