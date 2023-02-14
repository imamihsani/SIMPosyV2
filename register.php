<?php include "koneksi.php";
error_reporting(0);
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
    <title>Daftar | SIMP Krobokan</title>
</head>

<body>
    <div class="container-fluid" style="background-image: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(aset/gambar/baby.jpg);
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        height: 150vh;">

        <div class="row" style="padding-top: 70px;">
            <div class="col-6 offset-3">
                <div class="card card-sm" style="border-color:cornflowerblue;">
                    <div class="card-body">
                        <div class="row mb-1">
                            <h3 style="text-align:center;">Registrasi Admin</h3>
                            <hr>
                            <div class="alert alert-info">
                                <h5 style="text-align: center;">Sistem Informasi Manajemen Posyandu Dusun Krobokan</h5>
                            </div>
                            <div class="col-6 mb-1">

                                <form method="post" name="">
                                    <div class="">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" style="max-width:37.5rem;" required autocomplete="off">
                                    </div>
                                    <div class="">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email" style="max-width:37.5rem;" required autocomplete="off">
                                    </div>
                                    <div class="">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" style="max-width:37.5rem;" required autocomplete="off">
                                    </div>
                                    <div class="">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan password" style="max-width:37.5rem;" required autocomplete="off">
                                    </div>
                            </div>
                            <div class="col-6 mb-1">
                                <div class="">
                                    <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="notelp" id="exampleFormControlInput1" placeholder="Masukkan No. Telp/WA" style="max-width:37.5rem;" required autocomplete="off">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Role</label>
                                    <select class="form-select" name="role" aria-label="Default select example" required>
                                        <option value="Petugas Posyandu" name="role">Petugas Posyandu</option>
                                        <option value="Dokter" name="role">Dokter</option>
                                        <option value="Bidan" name="role">Bidan</option>
                                        <option value="Apoteker" name="role">Apoteker</option>

                                    </select>
                                </div>
                                <div class="">
                                    <!-- <label for="exampleFormControlInput1" class="form-label">Tanggal Daftar</label> -->
                                    <input type="datetime-local" class="form-control" style="visibility:hidden" name="trn_date" id="exampleFormControlInput1" value="<?php echo date("Y-m-d h:i:s") ?>" style="max-width:37.5rem;" required autocomplete="off">
                                </div>
                            </div>
                            <div class="">
                                <button class="btn btn-sm btn-success mb-3" type="submit" name="register" style="float:right"><i class="bi bi-box-arrow-in-right"></i> Daftar</button>

                            </div>
                            </form>
                            <hr>
                            <p class="text-center">Sudah punya akun? <a href="login.php"> LogIn</a></p>
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
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$notelp = $_POST['notelp'];
$role = $_POST['role'];
$trn_date = $_POST['trn_date'];

if (isset($_POST['register'])) {
    mysqli_query($koneksi, "INSERT INTO users set nama ='$nama', email='$email', username='$username', password='$password', notelp='$notelp', role='$role', trn_date='$trn_date'");
}
?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, window.location.href)
    }
</script>