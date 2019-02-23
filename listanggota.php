<?php

include "proses.php";
$sql = "SELECT * FROM tcard";
$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>List Anggota</title>
</head>

<body>
    <!-- Panggil Header  -->
    <?php include "./tamplates/header.php";?>
    <div class="container">
        <div class="row col-sm12">
            <table class="table mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NO KK</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    <?php while ($res = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <th scope="row">
                            <?=$no++?>
                        </th>
                        <td>
                            <?=$res['nama']?>
                        </td>
                        <td>
                            <?=$res['nik']?>
                        </td>
                        <td>
                            <?=$res['nokk']?>
                        </td>
                        <td>
                            <?=$res['alamat']?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?=$res['id'];?>" class=" btn btn-warning btn-small">EDIT</a>
                            <a href="hapus.php?id=<?=$res['id'];?>" class=" btn btn-danger btn-small"             type="submit" name="hapus">HAPUS</a>
                        </td>

                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- mangil script cdn  -->
    <?php include "./tamplates/script.php";?>
</body>

</html>