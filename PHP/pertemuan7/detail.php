<?php include "database.php"; ?>
<?php  

    $id = $_GET['id'];
    $nim = $_GET['nim'];
    $query = mysqli_query($koneksi,"SELECT a.* , b.username, b.email 
    FROM tbl_mahasiswa a 
    INNER JOIN tbl_user b 
    ON a.id = b.mahasiswa_id 
    WHERE a.nim = '$nim' ");

    $get = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5" style="margin-top:50px;">

        <h5>Detail</h5>
        <h1><?= $get['nama'] ?> </h1> 
      
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>