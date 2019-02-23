<?php include "database.php";
session_start();

$test = $_SERVER["REQUEST_METHOD"];

if ($test == "POST") {
    // TANGAKAP REQUEST SERVER APABILA BERNILAI TRUE / POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SAMAKAN DATA YANG ADA DI DATABASE DENGAN INPUTAN PADA FORM
    $sql = "SELECT * FROM users WHERE username='$username' AND pass = '$password' ";
    $query = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    // CEK SESSION username
    if ($count == 1) {

        $_SESSION["login_user"] = $username;
        // REDIRECT HALAMAN KE INDEX ;
        header('Location:index.php');

    } else {

        echo "<script>

            alert('GALGAL AUTH Silakan Masukan Password Yang Benar');

        </script> ";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>LOGIN</title>
</head>
<body>
    <body>
        <div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">SILAKAN LOGIN</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    <input type="submit" name="login" class="btn btn-info btn-md" value="LOGIN">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</body>

</html>
