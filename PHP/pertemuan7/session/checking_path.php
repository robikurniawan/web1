<?php 


// echo session_save_path();

session_start(); // ini untuk membaca sesssion 
// code ini harus selalu ditempat paling atas 

$_SESSION['username'] = "mahasiswa121401210";
$_SESSION['role'] = "mhs";
$_SESSION['isLogin'] = 1;

// echo $_SESSION['user'];