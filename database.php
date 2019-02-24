<?php
// SET ENV
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_BASE', 'card');
// Membuka Konesi Database

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
// CEK APAKAH ADA ERROR APA TIDAK
if (!$conn) {
    echo "GAGAL KONEKSI" . $conn->error;
}
;
