<?php
namespace Picqer\Barcode;

use Picqer\Barcode\BarcodeGeneratorHTML;

include "./vendor/autoload.php";
include "proses.php";

// cetak Barcode
$barcode = new BarcodeGeneratorSVG();

// query data
$sql = "SELECT * FROM tcard LIMIT 10     ";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/cetak.css">
    <title>Cetak Kartu</title>
</head>

<body>
    <h3 class="text-center">CETAK KARTU</h3>
    <div class="container">
        <div class="row">
            <?php while ($data = mysqli_fetch_assoc($query)): ?>
            <div class="col-md-6"><br />
                <div class="cetakdepan">

                </div>
                <br />
                <div class="cetakbelakang">
                    <table style="
                            margin-top : 20px;
                            margin-left: 50px;
                            font-size: 12px;
                            float: none;

                    ">
                        <br /> <br>
                        <tr>
                            <td style="align center">
                                <?=$barcode->getBarcode($data['nik'], $barcode::TYPE_CODE_128, 2, 12)?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>NAMA</b>
                                <b style="margin-left:10px">
                                    <?=strtoupper($data['nama']);?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>NIK</b>
                                <b style="margin-left:28px;">
                                    <?=strtoupper($data['nik']);?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    NOKK
                                </b>
                                <b style="margin-left: 15px;">
                                    <?=strtoupper($data['nokk']);?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>ALAMAT </b>
                                <?=strtoupper($data['alamat']);?>
                            </td>
                        </tr>
                    </table>
                </div>
                <br /> <br /> <br /> <br />
            </div>
            <?php endwhile;?>
        </div>

    </div>
    <!-- Load Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>

</html>