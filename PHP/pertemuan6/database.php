<?php  

$host = "localhost";
$user = "root";
$pwd  = "root";
$db   = "fikom_unimerz_19";

$koneksi = mysqli_connect($host,$user,$pwd,$db);

if(mysqli_connect_errno()) {
    echo "Koneksi Database Gagal". mysqli_connect_error();
}else{
    echo "";
}

?>