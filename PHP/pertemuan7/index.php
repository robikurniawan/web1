<?php include "database.php"; ?>

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

        <a href="" class="btn btn-success">Tambah Data </a>


        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th width="10%">Foto</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                            <img class="img-fluid" style="width:50px" src="asset/img/<?= $data['photo'] ?>"  alt="">
                        </td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['prodi'] ?></td>
                        <td>
                            <a href="detail.php?id=<?= $data['id'] ?>&nim=<?= $data['nim']?>" class="btn btn-primary"> Detail </a>
                            <a href="#" class="btn btn-warning"> Edit </a>
                            <a href="#" class="btn btn-danger"> Hapus </a>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>