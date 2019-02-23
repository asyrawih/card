<?php

include "proses.php";

$id = $_GET['id'];

$quer = mysqli_query($con, "DELETE FROM tcard WHERE id = $id ");

if ($quer) {
    header('Location:listanggota.php?status=berhasil');
    echo "Berhasil";
}
