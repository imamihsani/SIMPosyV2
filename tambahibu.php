<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Ibu</title>
    <!-- <link rel="stylesheet" href="tambahibu.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-4 offset-4 shadow border border-info" style="background-color:azure;">
                <div class="row">
                    <center><img src="aset/gambar/ilym.png" class="mt-2" style="width:100px; height:100px;"></center>
                    <h3 class="text-center ">Formulir Pendaftaran Ibu</h3>
                </div>
                <hr>
                <div class="input-group mb-3 mt-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="NIK" required autocomplete="off">
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Calon Ibu" required autocomplete="off">
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nomor HP/WA" required autocomplete="off">
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" required autocomplete="off">
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="file" class="form-control" id="floatingInput" placeholder="Foto" required autocomplete="off">
                </div>
                <div class="input-group mb-3 mt-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="Jumlah Anak (di Luar Kandungan)" required autocomplete="off">
                </div>
                <select class="form-select" aria-label="Default select example" required>
                    <option>Status Kehamilan</option>
                    <option value="tidak mengandung">Tidak Sedang Mengandung</option>
                    <option value="mengandung">Sedang Mengandung</option>
                </select>
                <select class="form-select mb-3 mt-3" aria-label="Default select example" required>
                    <option>Status Pernikahan</option>
                    <option value="tidak mengandung">Bersuami</option>
                    <option value="mengandung">Janda</option>
                    <option value="belum bersuami">Belum Bersuami</option>
                </select>
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Alamat" required autocomplete="off">
                </div>

                <button class="btn btn-success btn-sm float-end mb-3 shadow" type="submit" name="daftarkanibu"><i class="bi bi-plus-square"></i> Daftarkan</button>
                <br><br>
                <p class="text-center text-muted" style="font-size:13px;">Posyandu Desa Krobokan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                        var creditsyear = new Date();
                        document.write(creditsyear.getFullYear());
                    </script>
                </p>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>