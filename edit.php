<?php include "proses.php";
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM tcard WHERE id='$id' ");

$jum = mysqli_query($con, "SELECT * FROM tcard");

$hitung = mysqli_num_rows($jum);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>ID CARD GENERATE</title>
</head>

<body>
    <?php include "./tamplates/header.php"?>
    <h1 class="text-center mt-5">EDIT Anggota</h1>
    <hr />
    <!-- FORM INPUT -->
    <div class=" container">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-8 mt-2">
                <form action="proses.php" method="post">

                    <div class="form-group">
                        <input type="hidden" value="<?=$row['id']?>" name="id" >
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" id="nama" value="<?=$row['nama']?>" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" value="<?=$row['nik']?>" name="nik" required>
                    </div>
                    <div class="form-group">
                        <label for="No KK">NO KK</label>
                        <input type="text" class="form-control" id="No KK" value="<?=$row['nokk']?>" name="nokk" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="<?=$row['alamat']?>" name="alamat" required>
                    </div>

                    <button class="btn btn-success" type='submit' name='btn-edit'>UPDATE</button>

                </form>
            </div>
            <?php endwhile?>
            <div class="col-4">
                <div class="card mt-5" style="width: 20rem; height: 5rem; ">
                    <h5 class="text-center" id="hitung">
                        <?=$hitung;?>
                    </h5>
                    <small class="text-center">Yang telah terdaftar</small>
                    <h5 class="text-center">Jumlah Anggota</h5>
                    <img class="card-img-top" src="./assets/img/1.jpeg" alt="Card image cap">
                    <a href="cetakcard.php" class="btn btn-warning m-1">Cetak Depan</a>
                    <a href="cetakbelakang.php" class="btn btn-warning">Cetak Belakang</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>


</html>