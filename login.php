<?php
session_start();
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/css/login.css">
    <link rel="preload" as="image" href="aset/gambar/baby.jpg">
    <title>Login | SIMP Krobokan</title>
</head>

<body>
    <div class="container-fluid" style="background-image: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(aset/gambar/baby.jpg);
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        height: 100vh;">

        <div class="row" style="padding-top: 70px;">
            <div class="col-6 offset-3">
                <div class="card" style="border-color:cornflowerblue;">
                    <div class="card-body">
                        <div class="row">
                            <h3 style="text-align:center;">LogIn</h3>
                            <hr>
                            <div class="col-4">
                                <div class="card">
                                    <img src="aset/gambar/momandbaby.png" style="max-width: 300px; max-height: 500px;">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="alert alert-info">
                                    <h5 style="text-align: center;">Sistem Informasi Manajemen Posyandu Dusun Krobokan</h5>
                                </div>
                                <form action="" method="post" name="login">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Masukkan Username" style="max-width:37.5rem;" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password" style="max-width:37.5rem;" required autocomplete="off">
                                    </div>
                                    <button class="btn btn-sm btn-success mb-3" type="submit" name="login" style="float:right"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>
                                </form>
                            </div>
                            <hr>
                            <!-- <p class="text-center">Belum punya akun? <a href="register.php"> Daftar</a></p> -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="aset/js/bootstrap.bundle.min.js"></script>

</html>

<?php
if (isset($_POST['login'])) {
    $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$_POST[username]' and password = '$_POST[password]'");

    $tiliki = mysqli_num_rows($sql);
    if ($tiliki > 0) {
        $_SESSION['username'] = $_POST['username'];
        echo "<meta http-equiv=refresh content=0;URL='index.php'>";
    } else {
        echo "<script type='text/javascript'>alert('Username atau Password Tidak Benar!');</script>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'>";
    }
}
?>