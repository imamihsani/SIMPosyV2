<?php
include "session.php";
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="aset/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="aset/font/static/Comfortaa-Bold.ttf">
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrapicons/bootstrap-icons.css">
  <link rel="stylesheet" href="aset/css/login.css">
  <link rel="stylesheet" href="datatables/DataTables-1.13.1/css/dataTables.bootstrap.min.css">
  <link rel="preload" as="image" href="aset/gambar/">
  <!-- <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" /> -->
  <title>Home | SIMP Krobokan</title>
</head>

<body>


  <div class="container-fluid">

    <ul class="nav nav-pills justify-content-center mb-3 shadow py-3 px-3 sticky-top" style="background-color:#0275d8;" id="pills-tab" role="tablist">

      <div class="alert alert-info" role="alert">
        <h4 class="text-center">Sitem Informasi Manajemen Posyandu Kembang Harapan</h4>
        <p class="text-center" style="font-size: 15px;">Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta</p>
        <hr>
        <div class="row">
          <div class="col-4">
            <center><button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected=""><i class="fa fa-home" aria-hidden="false"></i> Home</button></center>
          </div>
          <div class="col-4">
            <center><button class="nav-link" id="pills-bumil-tab" data-bs-toggle="pill" data-bs-target="#pills-bumil" type="button" role="tab" aria-controls="pills-bumil" aria-selected=""><i class="fa fa-female" aria-hidden="false"></i> Ibu</button></center>
          </div>
          <div class="col-4">
            <center><button class="nav-link" id="pills-balita-tab" data-bs-toggle="pill" data-bs-target="#pills-balita" type="button" role="tab" aria-controls="pills-balita" aria-selected=""><i class="fa fa-child" aria-hidden="false"></i> Balita</button></center>
          </div>
        </div>
      </div>
      <hr>

    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="container-fluid">
          <div class="row mb-3">
            <div class="col-3">
              <div class="card shadow" style="max-height: 500px; border:none;">
                <div class="card-body">
                  <img src="aset/gambar/logo.png" class="d-block w-100 py-2 mx-1" style="max-height:500px;">
                  <h4 class="text-center py-2">Posyandu Kembang Harapan</h4>
                </div>
              </div>
            </div>
            <div class="col-9">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="aset/gambar/momboy.jpg" class="d-block w-100" style="max-height:500px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="aset/gambar/youngbaby.jpg" class="d-block w-100" style="max-height:500px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="aset/gambar/pregnant.jpg" class="d-block w-100" style="max-height:500px;" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid shadow py-3" style="background-color:#d1ecf1;">
          <h4 class="text-center mt-2 mb-3">Mari Mewujudkan Ibu & Anak yang:</h4>
          <div class="row mb-5" style="margin-left: 40px; margin-right: 40px;">
            <div class="col-4">
              <div class="card" style="background-color:#0275d8; border-radius: 10px; border:none;">
                <center><i class="bi bi-heart-pulse-fill text-white" style="font-size: 50px;"></i> </center>
                <p class="text-center text-white" style="font-size: 20px;">Sehat</p>
              </div>
            </div>

            <div class="col-4">
              <div class="card" style="background-color: #0275d8; border-radius: 10px; border:none;">
                <center><i class="bi bi-safe text-white" style="font-size: 50px;"></i></center>
                <p class="text-center text-white" style="font-size: 20px;">Aman</p>
              </div>
            </div>

            <div class="col-4">
              <div class="card" style="background-color: #0275d8; border-radius: 10px; border:none;">
                <center><i class="bi bi-emoji-laughing text-white" style="font-size: 50px;"></i> </center>
                <p class="text-center text-white" style="font-size: 20px;">Bahagia</p>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: linear-gradient( rgba(0, 0, 255, 0.6), rgba(0,0,100,0.6)), url(aset/gambar/care.jpg);
             background-size: cover;
             background-repeat: no-repeat;
             background-position: center center;
             height: 600px;
             
             ">
          <div class="row">
            <div class="col-4">
              <div class="card" style="background-color:transparent; border:none; margin-top:50px; margin-left:50px;">
                <div class="card-body">
                  <center><img src="aset/gambar/budigunadi.png" style="border-radius: 20px; height:300px;"></center>
                  <h5 class="text-center text-white mt-1"><u>Budi Gunadi</u></h5>
                  <h6 class="text-center text-white">Menteri Kesehatan RI</h6>
                  <p class=" text-center text-white" style="font-size: 12px;"><i>"Posyandu dan puskesmas adalah kunci yang dimiliki bangsa Indonesia untuk mempertahankan, mendidik, menjaga, dan mencegah masyarakat dari terkena penyakit dan tetap hidup sehat"</i></p>
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="card" style="background-color:transparent; border:none; margin-top:50px; margin-left:50px; margin-right:50px;">
                <div class="card-body">
                  <h2 class="text-white">Posyandu Kembang Harapan</h2>
                  <hr class="text-white">
                  <h5 class="text-white">adalah Posyandu yang terletak di Dusun Krobokan, Kelurahan Tamanan, Kecamatan
                    Banguntapan, Kabupaten Bantul, Yogyakarta. Posyandu ini berdiri sejak tahun XXXX. Posyandu ini melayani cek pemeriksaan kesehatan
                    Ibu dan Balita sesuai dengan standar kesehatan yang ditetapkan secara efisien.
                  </h5>
                  <br>
                  <h5 class="text-white">
                    Fasilitas:
                    <h5 class="text-white"><i class="bi bi-boxes text-white"></i> Permainan Anak</h5>
                    <h5 class="text-white"><i class="bi bi-hospital text-white"></i> Alkes yang Memadai</h5>
                    <h5 class="text-white"><i class="bi bi-cup-straw text-white"></i> Snack</h5>
                  </h5>
                  <br>
                  <a href="#"><button class="btn btn-lg shadow" style="background-color:#0275d8;"><i class="bi bi-telephone-fill text-white"></i><span class="text-white"> Kontak Kami</span></button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-color:#d1ecf1;">
          <h4 class=" text-center py-4">Dokumentasi Kegiatan</h4>
          <div class="row row-cols-1 row-cols-md-4 g-4 mb-3" style="margin-left:40px; margin-right:40px;">
            <div class="col mb-5">
              <div class="card h-100 shadow">
                <img src="aset/gambar/timbanganak.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: #0275d8;">
                  <h5 class="card-title text-white text-center">Penimbangan Balita Rutin</h5>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100 shadow">
                <img src="aset/gambar/imunisasi.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: #0275d8;">
                  <h5 class="card-title text-white text-center">Imunisasi</h5>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100 shadow">
                <img src="aset/gambar/cekkandungan.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: #0275d8;">
                  <h5 class="card-title text-white text-center">Pengecekan Kandungan</h5>
                </div>
              </div>
            </div>
            <div class="col mb-5">
              <div class="card h-100 shadow">
                <img src="aset/gambar/gizi.jpg" class="card-img-top" alt="...">
                <div class="card-body" style="background-color: #0275d8;">
                  <h5 class="card-title text-white text-center">Pemantauan Gizi Ibu & Anak</h5>
                </div>
              </div>
            </div>
          </div>
          <div style="background-image: linear-gradient( rgba(0, 0, 255, 0.6), rgba(0,0,100,0.6))" class="shadow">
            <h4 class="text-center text-white py-4">Partner Kami</h4>
            <div class="row mt-2">
              <div class="col-3 mb-5">
                <div class="card" style="background-color:transparent; border:none;">
                  <div class="card-body">
                    <center>
                      <img src="aset/gambar/logo-kemenkes.png" style="height:100px; width:290px;">
                    </center>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="background-color:transparent; border: none;">
                  <div class="card-body">
                    <center>
                      <img src="aset/gambar/LOGO1Awhite.png" style="height:100px; width:290px;">
                    </center>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="background-color:transparent; border:none;">
                  <div class="card-body">
                    <center>
                      <img src="aset/gambar/germas-logo.png" style="height:100px; width:290px;">
                    </center>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="background-color:transparent; border:none;">
                  <div class="card-body">
                    <center>
                      <img src="aset/gambar/pusbang-logo.png" style="height:100px; width:290px;">
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="background-color: #d1ecf1;">
            <p class="text-center text-muted mt-4" style="font-size:13px;">Posyandu Kembang Harapan<br> Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright
              <script type="text/javascript">
                var creditsyear = new Date();
                document.write(creditsyear.getFullYear());
              </script>
            </p>
            <br>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-bumil" role="tabpanel" aria-labelledby="pills-bumil-tab" tabindex="0">
        <div class="container-fluid">
          <table class="table table-responsive nowrap table-striped table-bordered table-primary" id="datatables">
            <div class="modal-header">
              <button type="button" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal"><i class="fa fa-plus"></i> Tambah Ibu</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #0275d8;">
                      <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Formulir Pendaftaran Ibu</h1>
                      <button type="button" class="btn-close" style="background-color: aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color:#d1ecf1;">

                      <form enctype="multipart/form-data" method="post" action="">
                        <div class="row">
                          <center><img src="aset/gambar/ilym.png" class="" style="width:100px; height:100px;"></center>
                          <input type="number" name="id_ibu" class="form-control" id="floatingInput" placeholder="ID Ibu" style="visibility:hidden" autocomplete="off">
                          <div class="col-6">
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="number" name="nik" class="form-control" id="floatingInput" placeholder="NIK" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="namaibu" class="form-control" id="floatingInput" placeholder="Nama Calon Ibu" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="nohp" class="form-control" id="floatingInput" placeholder="Nomor HP/WA" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <label class="input-group-text" for="inputGroupFile01">Tgl. lahir</label>
                              <input type="date" name="tgllahir" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <label class="input-group-text" for="inputGroupFile01">Foto</label>
                              <input type="file" name="foto" class="form-control" id="floatingInput" placeholder="Foto" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="riwayatpenyakit" class="form-control" id="floatingInput" placeholder="Riwayat Penyakit" required autocomplete="off">
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="number" name="jumlahanakluarkandungan" class="form-control" id="floatingInput" placeholder="Jumlah Anak (di Luar Kandungan)" required autocomplete="off">
                            </div>
                            <select class="form-select form-select-sm" name="statuskehamilan" aria-label="Default select example" required>
                              <option>Status Kehamilan</option>
                              <option value="tidak mengandung" name="statuskehamilan">Tidak Sedang Mengandung</option>
                              <option value="mengandung" name="statuskehamilan">Sedang Mengandung</option>
                            </select>
                            <select class="form-select form-select-sm mb-3 mt-3" name="statuspernikahan" aria-label="Default select example" required>
                              <option>Status Pernikahan</option>
                              <option value="bersuami" name="statuspernikahan">Bersuami</option>
                              <option value="janda" name="statuspernikahan">Janda</option>
                              <option value="belum bersuami" name="statuspernikahan">Belum Bersuami</option>
                            </select>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="alamat" class="form-control" id="floatingInput" placeholder="Alamat" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="pekerjaan" class="form-control" id="floatingInput" placeholder="Pekerjaan" required autocomplete="off">
                            </div>
                            <select class="form-select form-select-sm" name="bpjs" aria-label="Default select example" required>
                              <option>BPJS</option>
                              <option value="ya" name="bpjs">Ya</option>
                              <option value="tidak" name="bpjs">Tidak</option>
                            </select>
                            <div class="input-group input-group-sm">
                              <input type="text" name="tgldftr" class="form-control" id="floatingInput" value="<?php echo date('d-m-Y H:i:s'); ?>" style="visibility:hidden" required autocomplete="off">
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-success btn-sm float-end mb-3 shadow" type="submit" name="daftarkanibu"><i class="bi bi-plus-square"></i> Daftarkan</button>
                      </form>
                      <br><br>
                      <p class="text-center text-muted" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                          var creditsyear = new Date();
                          document.write(creditsyear.getFullYear());
                        </script>
                      </p>

                    </div>

                  </div>
                </div>
              </div>
              <a href="exportibupdf.php" target="_blank"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-pdf-o"></i> Export PDF</button></a>
              <a href="exportibu.php"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</button></a>
              <button type="button" value="Reload" onClick="document.location.reload(true)" class="btn btn-sm btn-info" data-bs-dismiss="modal"><i class="fa fa-refresh"></i> Refresh
                <script>
                  function reloadpage() {
                    location.reload()
                  }
                </script>
              </button>

            </div>
            <!-- <form action="" method="POST">
              <div class="input-group input-group-sm mb-2">
                <input type="text" name="query" style="margin-left:300px;" class="form-control" placeholder="Cari data ibu" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" name="cari" id="button-addon2" style="margin-right:300px;"><i class="fa fa-search"></i></button>
              </div>
            </form> -->

            <thead>
              <tr>
                <th class="text-center text-white" style="background-color:#0275d8;">NIK</th>
                <th class="text-center text-white" style="background-color:#0275d8;">FOTO</th>
                <th class="text-center text-white" style="background-color:#0275d8;">NAMA</th>
                <th class="text-center text-white" style="background-color:#0275d8;">NO. HP/WA</th>
                <th class="text-center text-white" style="background-color:#0275d8;">ALAMAT</th>
                <th class="text-center text-white" style="background-color:#0275d8;">OPSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "koneksi.php";
              error_reporting(0);

              // $query = $_POST['query'];
              // if ($query != '') {
              //   $ambildataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu WHERE nik LIKE '" . $query . "'");
              // } else {
              //   $ambildataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu");
              // }


              $ambildataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu ORDER BY id_ibu DESC");
              while ($tampildataibu = mysqli_fetch_array($ambildataibu)) {
              ?>
                <tr>
                  <td scope="row"><?php echo $tampildataibu['nik'] ?></td>
                  <td>
                    <center><img src="file/<?php echo $tampildataibu['foto']; ?>" style="width:100px; height:150px;"></center>
                  </td>
                  <td><?php echo $tampildataibu['namaibu'] ?></td>
                  <td><?php echo $tampildataibu['nohp'] ?></td>
                  <td><?php echo $tampildataibu['alamat'] ?></td>
                  <td>
                    <center><button type="button" class="btn btn-sm btn-light mb-1" data-bs-toggle="modal" data-bs-target="#konsul<?php echo $tampildataibu['id_ibu'] ?>">
                        <i class="fa fa-stethoscope"></i>
                      </button>
                      <button class="btn btn-sm btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#edit<?php echo $tampildataibu['id_ibu'] ?>" data-id_ibu="<?php echo $tampildataibu['id_ibu'] ?>" data-namaibu="<?php echo $tampildataibu['namaibu'] ?>" data-nik="<?php echo $tampildataibu['nik'] ?>" data-nohp="<?php echo $tampildataibu['nohp'] ?>" data-tgllahir="<?php echo $tampildataibu['tgllahir'] ?>" data-foto="<?php echo $tampildataibu['foto'] ?>" data-riwayatpenyakit="<?php echo $tampildataibu['riwayatpenyakit'] ?>" data-jumlahanakluarkandungan="<?php echo $tampildataibu['jumlahanakluarkandungan'] ?>" data-statuskehamilan="<?php echo $tampildataibu['statuskehamilan'] ?>" data-statuspernikahan="<?php echo $tampildataibu['statuspernikahan'] ?>" data-alamat="<?php echo $tampildataibu['alamat'] ?>" data-pekerjaan="<?php echo $tampildataibu['pekerjaan'] ?>" data-bpjs="<?php echo $tampildataibu['bpjs'] ?>"><i class="fa fa-edit"></i>
                      </button>
                      <a href="riwayatibu.php?id_ibu=<?php echo $tampildataibu['id_ibu']; ?>"><button class=" btn btn-sm btn-success mb-1"><i class=" fa fa-history"></i>

                        </button></a>
                      <button class="btn btn-sm btn-danger mb-1" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $tampildataibu['id_ibu'] ?>"><i class="fa fa-trash"></i></button>
                    </center>
                  </td>

                  <div class="modal fade" id="konsul<?php echo $tampildataibu['id_ibu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:darkgrey;">
                          <h1 class="modal-title fs-5 text-white" style="color:black" id="exampleModalLabel">Cek Kesehatan Rutin</h1>
                          <button type="button" class="btn-close" style="background-color: aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:lavender;">

                          <form method="post" action="">
                            <input type="text" name="id_ibu" style="visibility:hidden;" class="form-control" id="floatingInput" value="<?php echo $tampildataibu['id_ibu'] ?>" required readonly autocomplete="off">
                            <div class="row">
                              <center>
                                <img src="file/<?php echo $tampildataibu['foto']; ?>" class="mb-2" style="width:100px; height:100px;">
                              </center>
                              <!-- <div class="card mb-1" style="background-color:yellow">
                                <div class="card-body"> -->
                              <!-- </div>
                              </div> -->
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Nama</label>
                                <input type="text" name="namaibu" class="form-control" id="floatingInput" value="<?php echo $tampildataibu['namaibu'] ?>" required readonly autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">NIK</label>
                                <input type="number" name="nik" class="form-control" id="floatingInput" value="<?php echo $tampildataibu['nik'] ?>" required readonly autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <select class="form-select form-select-sm mb-1" name="keperluan" aria-label="Default select example" required>
                                  <option>Keperluan</option>
                                  <option value="Cek Kesehatan" name="keperluan">Cek Kesehatan</option>
                                  <option value="Konsul KB" name="keperluan">Konsul KB</option>
                                  <option value="Cek Kandungan" name="keperluan">Cek Kandungan</option>
                                  <option value="Lainnya" name="keperluan">Lainnya</option>
                                </select>
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Usia Kandungan</label>
                                <input type="text" name="usiakandungan" class="form-control" id="floatingInput" placeholder="Usia Kandungan" required autocomplete="off">
                                <label class="input-group-text" for="inputGroupFile01">minggu</label>
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Tensi</label>
                                <input type="text" name="tensidarah" class="form-control" id="floatingInput" placeholder="Tensi Darah" required autocomplete="off">
                                <label class="input-group-text" for="inputGroupFile01">mmHg</label>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Berat Badan</label>
                                <input type="text" name="beratbadan" class="form-control" id="floatingInput" placeholder="Berat Badan" required autocomplete="off">
                                <label class="input-group-text" for="inputGroupFile01">kg</label>
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Keluhan</label>
                                <input type="text" name="keluhan" class="form-control" id="floatingInput" placeholder="Keluhan" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Saran</label>
                                <input type="text" name="saran" class="form-control" id="floatingInput" placeholder="Saran" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Kesehatan</label>
                                <input type="text" name="statuskesehatanibu" class="form-control" id="floatingInput" placeholder="Status Kesehatan Ibu & Bayi" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Obat/Vitamin</label>
                                <input type="text" name="obatibu" class="form-control" id="floatingInput" placeholder="Obat/Vitamin Untuk Ibu (Jika Perlu)" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Tgl. Konsul</label>
                                <input type="text" name="tanggalkonsul" class="form-control" id="floatingInput" value="<?php echo date('d-m-Y') ?>" required readonly autocomplete="off">
                              </div>

                            </div>

                            <button class="btn btn-warning btn-sm float-end mb-3 shadow" type="submit" name="simpankonsulibu"><i class="bi bi-save"></i> Simpan</button>
                          </form>
                          <br><br>

                          <p class="text-center text-muted" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                              var creditsyear = new Date();
                              document.write(creditsyear.getFullYear());
                            </script>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="edit<?php echo $tampildataibu['id_ibu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:goldenrod;">
                          <h1 class="modal-title fs-5" style="color:black" id="exampleModalLabel">Rubah Data Detail Ibu</h1>
                          <button type="button" class="btn-close" style="background-color: aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:khaki;">
                          <form method="POST" action="" enctype="multipart/form-data">

                            <?php
                            include "koneksi.php";
                            $id_ibu = $tampildataibu['id_ibu'];
                            $ubahdataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu WHERE id_ibu = '$id_ibu'");
                            $tampildataibu = mysqli_fetch_array($ubahdataibu)
                            ?>
                            <div class="row">
                              <center>
                                <img src="file/<?php echo $tampildataibu['foto']; ?>" class="mb-2" style="width:100px; height:100px;">
                              </center>
                              <!-- <div class="card mb-1" style="background-color:yellow">
                                <div class="card-body"> -->
                              <!-- </div>
                              </div> -->
                              <input type="text" name="id_ibu" style="visibility:hidden;" class="form-control" id="id_ibu" value="<?php echo $tampildataibu['id_ibu'] ?>" required readonly autocomplete="off">
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Nama</label>
                                <input type="text" name="namaibu" class="form-control" id="namaibu" value="<?php echo $tampildataibu['namaibu'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">NIK</label>
                                <input type="number" name="nik" class="form-control" id="nik" value="<?php echo $tampildataibu['nik'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">No. HP/WA</label>
                                <input type="number" name="nohp" class="form-control" id="nohp" value="<?php echo $tampildataibu['nohp'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Tgl. Lahir</label>
                                <input type="date" name="tgllahir" class="form-control" id="tgllahir" value="<?php echo $tampildataibu['tgllahir'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Foto</label>
                                <input type="file" name="foto" class="form-control" id="foto" value="file/<?php echo $tampildataibu['foto'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Riwayat Penyakit</label>
                                <input type="text" name="riwayatpenyakit" class="form-control" id="riwayatpenyakit" value="<?php echo $tampildataibu['riwayatpenyakit'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Jml. Anak Luar Kndgn.</label>
                                <input type="number" name="jumlahanakluarkandungan" class="form-control" id="jumlahanakluarkandungan" value="<?php echo $tampildataibu['jumlahanakluarkandungan'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <select class="form-select form-select-sm" name="statuskehamilan" id="statuskehamilan" aria-label="Default select example" required>
                                  <option>Status Kehamilan</option>
                                  <option value="tidak mengandung" name="statuskehamilan">Tidak Sedang Mengandung</option>
                                  <option value="mengandung" name="statuskehamilan">Sedang Mengandung</option>
                                </select>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <select class="form-select form-select-sm" name="statuspernikahan" id="statuspernikahan" aria-label="Default select example" required>
                                  <option>Status Pernikahan</option>
                                  <option value="bersuami" name="statuspernikahan">Bersuami</option>
                                  <option value="janda" name="statuspernikahan">Janda</option>
                                  <option value="belum bersuami" name="statuspernikahan">Belum Bersuami</option>
                                </select>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $tampildataibu['alamat'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?php echo $tampildataibu['pekerjaan'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <select class="form-select form-select-sm" name="bpjs" id="bpjs" aria-label="Default select example" required>
                                  <option>BPJS</option>
                                  <option value="ya" name="bpjs">Ya</option>
                                  <option value="tidak" name="bpjs">Tidak</option>
                                </select>
                              </div>
                              <input type="hidden" name="tgldftr" class="form-control" id="tgldftr" value="<?php echo $tampildataibu['tgldftr'] ?>" readonly autocomplete="off">
                            </div>
                            <button class="btn btn-warning btn-sm float-end mb-3 shadow" type="submit" name="updateibu"><i class="bi bi-save"></i> Update</button>

                          </form>
                          <br><br>

                          <p class="text-center text-muted" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                              var creditsyear = new Date();
                              document.write(creditsyear.getFullYear());
                            </script>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="hapus<?php echo $tampildataibu['id_ibu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:darkred;">
                          <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Anda Yakin Mau Menghapus Data Ini?</h1>
                          <button type="button" class="btn-close" style="background-color:aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:indianred;">
                          <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_ibu" class="form-control" id="id_ibu" value="<?php echo $tampildataibu['id_ibu'] ?>" required readonly autocomplete="off">
                            <p class="text-white"><?php echo $tampildataibu['namaibu'] ?> - <?php echo $tampildataibu['nik'] ?>
                              <button class="btn btn-danger btn-sm float-end mb-3 shadow" style="border-color:aliceblue" type="" name="hapusibu"><i class="bi bi-trash"></i> Hapus</button>
                            </p>
                            <br><br>
                            <p class="text-center text-white" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                                var creditsyear = new Date();
                                document.write(creditsyear.getFullYear());
                              </script>
                            </p>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </tr>
              <?php } ?>
            </tbody>
          </table>
          <a href="register.php"><button class="btn btn-outline btn-primary btn-sm float-start"><i class="fa fa-user-plus"></i> Register</button></a>
          <a href="logout.php"><button class="btn btn-outline btn-danger btn-sm float-end"><i class="fa fa-sign-out"></i> Logout</button></a>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-balita" role="tabpanel" aria-labelledby="pills-balita-tab" tabindex="0">
        <div class="container-fluid">
          <table class="table table-responsive nowrap table-striped table-bordered table-warning" id="datatable">
            <div class="modal-header">
              <button type="button" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-dismiss="modal"><i class="fa fa-plus"></i> Tambah Balita</button>
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:#f0ad4e;">
                      <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Formulir Pendaftaran Balita</h1>
                      <button type="button" class="btn-close" style="background-color: aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color:bisque;">

                      <form enctype="multipart/form-data" method="post" action="">
                        <div class="row">
                          <center><img src="aset/gambar/baby.png" class="" style="width:100px; height:100px;"></center>
                          <input type="number" name="id_balita" class="form-control" id="floatingInput" placeholder="ID Balita" style="visibility:hidden" autocomplete="off">
                          <div class="col-6">
                            <div class="input-group input-group-sm mb-3">
                              <input type="number" name="nik" class="form-control" id="floatingInput" placeholder="NIK" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="namabalita" class="form-control" id="floatingInput" placeholder="Nama Balita" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="anakdari" class="form-control" id="floatingInput" placeholder="Anak Dari" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <label class="input-group-text" for="inputGroupFile01">Tgl. lahir</label>
                              <input type="date" name="tgllahir" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <label class="input-group-text" for="inputGroupFile01">Foto</label>
                              <input type="file" name="foto" class="form-control" id="floatingInput" placeholder="Foto" required autocomplete="off">
                            </div>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="riwayatpenyakit" class="form-control" id="floatingInput" placeholder="Riwayat Penyakit" required autocomplete="off">
                            </div>
                          </div>
                          <div class="col-6">
                            <select class="form-select form-select-sm" name="jeniskelamin" aria-label="Default select example" required>
                              <option>Jenis Kelamin</option>
                              <option value="laki-laki" name="jeniskelamin">Laki-laki</option>
                              <option value="perempuan" name="jeniskelamin">Perempuan</option>
                            </select>
                            <select class="form-select form-select-sm mb-3 mt-3" name="bk" aria-label="Default select example" required>
                              <option>Berkebutuhan Khusus?</option>
                              <option value="Ya" name="bk">Ya</option>
                              <option value="Tidak" name="bk">Tidak</option>
                            </select>
                            <div class="input-group input-group-sm mb-3 mt-3">
                              <input type="text" name="alamat" class="form-control" id="floatingInput" placeholder="Alamat" required autocomplete="off">
                            </div>
                            <select class="form-select form-select-sm" name="bpjs" aria-label="Default select example" required>
                              <option>BPJS</option>
                              <option value="ya" name="bpjs">Ya</option>
                              <option value="tidak" name="bpjs">Tidak</option>
                            </select>
                            <div class="input-group input-group-sm">
                              <input type="text" name="tgldftrbalita" class="form-control" id="floatingInput" value="<?php echo date('d-m-Y H:i:s'); ?>" style="visibility:hidden" required autocomplete="off">
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-success btn-sm float-end mb-3 shadow" type="submit" name="daftarkanbalita"><i class="bi bi-plus-square"></i> Daftarkan</button>
                      </form>
                      <br><br>
                      <p class="text-center text-muted" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                          var creditsyear = new Date();
                          document.write(creditsyear.getFullYear());
                        </script>
                      </p>

                    </div>

                  </div>
                </div>
              </div>
              <a href="exportbalitapdf.php" target="_blank"><button type="button" class="btn btn-sm btn-danger"><i class="fa fa-file-pdf-o"></i> Export PDF</button></a>
              <a href="exportbalita.php"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</button></a>

              <button type="button" value="Reload" onClick="document.location.reload(true)" class="btn btn-sm btn-info" data-bs-dismiss="modal"><i class="fa fa-refresh"></i> Refresh
                <script>
                  function reloadpage() {
                    location.reload()
                  }
                </script>
              </button>

            </div>
            <!-- <form action="" method="POST">
              <div class="input-group input-group-sm mb-2">
                <input type="text" name="query" style="margin-left:300px;" class="form-control" placeholder="Cari data ibu" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" name="cari" id="button-addon2" style="margin-right:300px;"><i class="fa fa-search"></i></button>
              </div>
            </form> -->

            <thead>
              <tr>
                <th class="text-center text-white" style="background-color:#f0ad4e;">NIK</th>
                <th class="text-center text-white" style="background-color:#f0ad4e;">FOTO</th>
                <th class="text-center text-white" style="background-color:#f0ad4e;">NAMA</th>
                <th class="text-center text-white" style="background-color:#f0ad4e;">ANAK DARI</th>
                <th class="text-center text-white" style="background-color:#f0ad4e;">JK</th>
                <th class="text-center text-white" style="background-color:#f0ad4e;">ALAMAT</th>
                <th class="text-center text-white" style="background-color:#f0ad4e;">OPSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "koneksi.php";
              error_reporting(0);

              // $query = $_POST['query'];
              // if ($query != '') {
              //   $ambildataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu WHERE nik LIKE '" . $query . "'");
              // } else {
              //   $ambildataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu");
              // }


              $ambildatabalita = mysqli_query($koneksi, "SELECT * FROM tb_balita ORDER BY id_balita DESC");
              while ($tampildatabalita = mysqli_fetch_array($ambildatabalita)) {
              ?>
                <tr>
                  <td scope="row"><?php echo $tampildatabalita['nik'] ?></td>
                  <td>
                    <center><img src="file/<?php echo $tampildatabalita['foto']; ?>" style="width:100px; height:150px;"></center>
                  </td>
                  <td><?php echo $tampildatabalita['namabalita'] ?></td>
                  <td><?php echo $tampildatabalita['anakdari'] ?></td>
                  <td><?php echo $tampildatabalita['jeniskelamin'] ?></td>
                  <td><?php echo $tampildatabalita['alamat'] ?></td>
                  <td>
                    <center><button type="button" class="btn btn-sm btn-light mb-1" data-bs-toggle="modal" data-bs-target="#konsul<?php echo $tampildatabalita['id_balita'] ?>">
                        <i class="fa fa-stethoscope"></i>
                      </button> <button class="btn btn-sm btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#editbalita<?php echo $tampildatabalita['id_balita'] ?>"><i class="fa fa-edit"></i></button>
                      <a href="riwayatbalita.php?id_balita=<?php echo $tampildatabalita['id_balita']; ?>"><button class="btn btn-sm btn-success mb-1"><i class="fa fa-history"></i></button></a>
                      <button class="btn btn-sm btn-danger mb-1" data-bs-toggle="modal" data-bs-target="#hapusbalita<?php echo $tampildatabalita['id_balita'] ?>"><i class="fa fa-trash"></i></button>
                    </center>
                  </td>
                  <div class="modal fade" id="konsul<?php echo $tampildatabalita['id_balita'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:darkgrey;">
                          <h1 class="modal-title fs-5 text-white" style="color:black" id="exampleModalLabel">Cek Kesehatan Rutin</h1>
                          <button type="button" class="btn-close" style="background-color: aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:lavender;">

                          <form method="post" action="">
                            <input type="hidden" name="id_balita" style="visibility:;" class="form-control" id="floatingInput" value="<?php echo $tampildatabalita['id_balita'] ?>" required readonly autocomplete="off">
                            <div class="row">
                              <center><img src="file/<?php echo $tampildatabalita['foto']; ?>" class="mb-2" style="width:100px; height:100px;"></center>
                              <!-- <div class="card mb-1" style="background-color:yellow">
                                <div class="card-body"> -->
                              <!-- </div>
                              </div> -->
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroup">Nama</label>
                                <input type="text" name="namabalita" class="form-control" id="floatingInput" value="<?php echo $tampildatabalita['namabalita'] ?>" required readonly autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroup">NIK</label>
                                <input type="number" name="nik" class="form-control" id="floatingInput" value="<?php echo $tampildatabalita['nik'] ?>" required readonly autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroup">Ibu</label>
                                <input type="text" name="anakdari" class="form-control" id="floatingInput" value="<?php echo $tampildatabalita['anakdari'] ?>" required readonly autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroup">Usia</label>
                                <input type="text" name="usiamingguke" class="form-control" id="floatingInput" placeholder="Usia Minggu" required autocomplete="off">
                                <label class="input-group-text" for="inputGroup">minggu</label>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Berat Badan</label>
                                <input type="text" name="beratbadan" class="form-control" id="floatingInput" placeholder="Berat Badan" required autocomplete="off">
                                <label class="input-group-text" for="inputGroup">kg</label>
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroup">Tinggi/Panjang Badan</label>
                                <input type="text" name="panjangbadan" class="form-control" id="floatingInput" placeholder="Tinggi/Panjang Badan" required autocomplete="off">
                                <label class="input-group-text" for="inputGroup">cm</label>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Lingkar Kepala</label>
                                <input type="text" name="lingkarkepala" class="form-control" id="floatingInput" placeholder="Lingkar Kepala" required autocomplete="off">
                                <label class="input-group-text" for="inputGroup">cm</label>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Lingkar Lengan</label>
                                <input type="text" name="lingkarlengan" class="form-control" id="floatingInput" placeholder="Lingkar Lengan" required autocomplete="off">
                                <label class="input-group-text" for="inputGroup">cm</label>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Keluhan</label>
                                <input type="text" name="keluhan" class="form-control" id="floatingInput" placeholder="Keluhan" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Kesehatan</label>
                                <input type="text" name="statuskesehatanbalita" class="form-control" id="floatingInput" placeholder="Status Kesehatan" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Saran</label>
                                <input type="text" name="saran" class="form-control" id="floatingInput" placeholder="Saran" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Vitamin/Obat</label>
                                <input type="text" name="vitamin_obat" class="form-control" id="floatingInput" placeholder="Vitamin/Obat" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroup">Tgl. Konsul</label>
                                <input type="text" name="tanggalkonsul" class="form-control" id="floatingInput" value="<?php echo date('d-m-Y') ?>" required readonly autocomplete="off">
                              </div>

                            </div>

                            <button class="btn btn-warning btn-sm float-end mb-3 shadow" type="submit" name="simpankonsulbalita"><i class="bi bi-save"></i> Simpan</button>
                          </form>
                          <br><br>

                          <p class="text-center text-muted" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                              var creditsyear = new Date();
                              document.write(creditsyear.getFullYear());
                            </script>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="editbalita<?php echo $tampildatabalita['id_balita'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:goldenrod;">
                          <h1 class="modal-title fs-5" style="color:black" id="exampleModalLabel">Rubah Data Detail Balita</h1>
                          <button type="button" class="btn-close" style="background-color: aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:khaki;">
                          <form method="POST" action="" enctype="multipart/form-data">

                            <?php
                            include "koneksi.php";
                            $id_balita = $tampildatabalita['id_balita'];
                            $ubahdatabalita = mysqli_query($koneksi, "SELECT * FROM tb_balita WHERE id_balita = '$id_balita'");
                            $tampildatabalita = mysqli_fetch_array($ubahdatabalita)
                            ?>
                            <div class="row">
                              <center>
                                <img src="file/<?php echo $tampildatabalita['foto']; ?>" class="mb-2" style="width:100px; height:100px;">
                              </center>
                              <!-- <div class="card mb-1" style="background-color:yellow">
                                <div class="card-body"> -->
                              <!-- </div>
                              </div> -->
                              <input type="text" name="id_balita" style="visibility:hidden;" class="form-control" id="id_balita" value="<?php echo $tampildatabalita['id_balita'] ?>" required readonly autocomplete="off">
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Nama</label>
                                <input type="text" name="namabalita" class="form-control" id="namabalita" value="<?php echo $tampildatabalita['namabalita'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">NIK</label>
                                <input type="number" name="nik" class="form-control" id="nik" value="<?php echo $tampildatabalita['nik'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Anak Dari</label>
                                <input type="text" name="anakdari" class="form-control" id="anakdari" value="<?php echo $tampildatabalita['anakdari'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Tgl. Lahir</label>
                                <input type="date" name="tgllahir" class="form-control" id="tgllahir" value="<?php echo $tampildatabalita['tgllahir'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Foto</label>
                                <input type="file" name="foto" class="form-control" id="foto" value="file/<?php echo $tampildataibu['foto'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <label class="input-group-text" for="inputGroupFile01">Riwayat Penyakit</label>
                                <input type="text" name="riwayatpenyakit" class="form-control" id="riwayatpenyakit" value="<?php echo $tampildatabalita['riwayatpenyakit'] ?>" required autocomplete="off">
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <select class="form-select form-select-sm" name="jeniskelamin" id="jeniskelamin" aria-label="Default select example" required>
                                  <option>Jenis Kelamin</option>
                                  <option value="laki-laki" name="jeniskelamin">Laki-laki</option>
                                  <option value="perempuan" name="jeniskelamin">Perempuan</option>
                                </select>
                              </div>
                              <div class="input-group input-group-sm mb-1 ">
                                <select class="form-select form-select-sm" name="bk" id="bk" aria-label="Default select example" required>
                                  <option>Berkebutuhan Khusus?</option>
                                  <option value="ya" name="bk">Ya</option>
                                  <option value="tidak" name="bk">Tidak</option>
                                </select>
                              </div>
                              <div class="input-group input-group-sm mb-1">
                                <label class="input-group-text" for="inputGroupFile01">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $tampildatabalita['alamat'] ?>" required autocomplete="off">
                              </div>

                              <div class="input-group input-group-sm mb-1 ">
                                <select class="form-select form-select-sm" name="bpjs" id="bpjs" aria-label="Default select example" required>
                                  <option>BPJS</option>
                                  <option value="ya" name="bpjs">Ya</option>
                                  <option value="tidak" name="bpjs">Tidak</option>
                                </select>
                              </div>

                              <input type="hidden" name="tgldftrbalita" class="form-control" id="tgldftrbalita" value="<?php echo $tampildatabalita['tgldftrbalita'] ?>" readonly autocomplete="off">
                            </div>
                            <button class="btn btn-warning btn-sm float-end mb-3 shadow" type="submit" name="updatebalita"><i class="bi bi-save"></i> Update</button>

                          </form>
                          <br><br>

                          <p class="text-center text-muted" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright <script type="text/javascript">
                              var creditsyear = new Date();
                              document.write(creditsyear.getFullYear());
                            </script>
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="hapusbalita<?php echo $tampildatabalita['id_balita'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:darkred;">
                          <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Anda Yakin Mau Menghapus Data Ini?</h1>
                          <button type="button" class="btn-close" style="background-color:aliceblue;" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color:indianred;">
                          <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_balita" class="form-control" id="id_balita" value="<?php echo $tampildatabalita['id_balita'] ?>" required readonly autocomplete="off">
                            <p class="text-white"><?php echo $tampildatabalita['namabalita'] ?> - <?php echo $tampildatabalita['nik'] ?>
                              <button class="btn btn-danger btn-sm float-end mb-3 shadow" style="border-color:aliceblue" type="" name="hapusbalita"><i class="bi bi-trash"></i> Hapus</button>
                            </p>
                          </form>
                          <br><br>
                          <p class="text-center text-white" style="font-size:13px;">Posyandu Kembang Harapan<br>Krobokan, Tamanan, Banguntapan, Bantul, D.I. Yogyakarta <br>Copyright: Imxx Ixxxxi <script type="text/javascript">
                              var creditsyear = new Date();
                              document.write(creditsyear.getFullYear());
                            </script>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                </tr>
              <?php } ?>
            </tbody>
          </table>
          <a href="register.php"><button class="btn btn-outline btn-outline btn-primary btn-sm float-start"><i class="fa fa-user-plus"></i> Register</button></a>
          <a href="logout.php"><button class="btn btn-outline btn-danger btn-sm float-end"><i class="fa fa-sign-out"></i> Logout</button></a>
        </div>
      </div>
    </div>
  </div>



</body>
<script src="aset/js/bootstrap.bundle.min.js"></script>
<script src="datatables/datatables.min.js"></script>
<!-- <script src="aset/js/jquery-3.6.3.min.js"></script> -->
<script>
  $(document).ready(function() {

    $('#datatables').DataTable();
    $('#datatable').DataTable();

    $('.dataTables_filter input[type="search"]').css({

      'display': 'inline-block',
    });

    $('.dataTables_filter input[type="search"]').attr({
      'placeholder': 'Cari Data...'
    });


  });
</script>


</html>
<?php
include "koneksi.php";

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$id_ibu = $_POST['id_ibu'];
$tgldftr = $_POST['tgldftr'];
$nik = $_POST['nik'];
$namaibu = $_POST['namaibu'];
$nohp = $_POST['nohp'];
$tgllahir = $_POST['tgllahir'];
$riwayatpenyakit = $_POST['riwayatpenyakit'];
$jumlahanakluarkandungan = $_POST['jumlahanakluarkandungan'];
$statuskehamilan = $_POST['statuskehamilan'];
$statuspernikahan = $_POST['statuspernikahan'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$bpjs = $_POST['bpjs'];

$namabalita = $_POST['namabalita'];
$anakdari = $_POST['anakdari'];
$jeniskelamin = $_POST['jeniskelamin'];
$bk = $_POST['bk'];
$tgldftrbalita = $_POST['tgldftrbalita'];


$keperluan = $_POST['keperluan'];
$usiakandungan = $_POST['usiakandungan'];
$tensidarah = $_POST['tensidarah'];
$beratbadan = $_POST['beratbadan'];
$keluhan = $_POST['keluhan'];
$saran = $_POST['saran'];
$statuskesehatanibu = $_POST['statuskesehatanibu'];
$obatibu = $_POST['obatibu'];
$tanggalkonsul = $_POST['tanggalkonsul'];

$id_balita = $_POST['id_balita'];
$usiamingguke = $_POST['usiamingguke'];
$panjangbadan = $_POST['panjangbadan'];
$lingkarkepala = $_POST['lingkarkepala'];
$lingkarlengan = $_POST['lingkarlengan'];
$statuskesehatanbalita = $_POST['statuskesehatanbalita'];
$vitamin_obat = $_POST['vitamin_obat'];

if (isset($_POST['daftarkanibu'])) {
  mysqli_query($koneksi, "INSERT INTO tb_ibu set  id_ibu ='$id_ibu', tgldftr = '$tgldftr', nik = '$nik', 
  namaibu = '$namaibu', nohp = '$nohp', tgllahir = '$tgllahir', 
  foto = '$foto', riwayatpenyakit = '$riwayatpenyakit', 
  jumlahanakluarkandungan = '$jumlahanakluarkandungan', statuskehamilan = '$statuskehamilan', 
  statuspernikahan = '$statuspernikahan', alamat = '$alamat', 
  pekerjaan = '$pekerjaan', bpjs = '$bpjs'");
}
header("Location:index.php");
move_uploaded_file($file_tmp, 'file/' . $foto);

// if ($koneksi) {
//   echo "<script>alert('Berhasil Mendaftarkan Data Ibu Baru')</script>";
// }

if (isset($_POST['daftarkanbalita'])) {
  mysqli_query($koneksi, "INSERT INTO tb_balita set  id_balita ='$id_balita', tgldftrbalita = '$tgldftrbalita', nik = '$nik', 
  namabalita = '$namabalita', anakdari = '$anakdari', tgllahir = '$tgllahir', 
  foto = '$foto', riwayatpenyakit = '$riwayatpenyakit', alamat = '$alamat', 
  bk = '$bk', jeniskelamin = '$jeniskelamin', bpjs = '$bpjs'");
}
header("Location:index.php");
move_uploaded_file($file_tmp, 'file/' . $foto);


if (isset($_POST['simpankonsulibu'])) {
  mysqli_query($koneksi, "INSERT INTO tb_konsulibu set id_ibu ='$id_ibu', namaibu ='$namaibu', nik = '$nik', keperluan = '$keperluan',
  usiakandungan = '$usiakandungan', tensidarah = '$tensidarah', beratbadan = '$beratbadan', keluhan = '$keluhan', 
  saran = '$saran', statuskesehatanibu = '$statuskesehatanibu', obatibu = '$obatibu', 
  tanggalkonsul = '$tanggalkonsul'");
}
header("Location:index.php");


if (isset($_POST['updateibu'])) {
  mysqli_query($koneksi, "UPDATE tb_ibu SET namaibu = '$namaibu', nik = '$nik', nohp='$nohp', tgllahir='$tgllahir', foto='$foto', riwayatpenyakit='$riwayatpenyakit', jumlahanakluarkandungan ='$jumlahanakluarkandungan', statuskehamilan='$statuskehamilan', statuspernikahan='$statuspernikahan', alamat='$alamat', pekerjaan='$pekerjaan', bpjs='$bpjs', tgldftr='$tgldftr' where id_ibu='$id_ibu'");
}
header("Location:index.php");
move_uploaded_file($file_tmp, 'file/' . $foto);

if (isset($_POST['hapusibu'])) {
  mysqli_query($koneksi, "DELETE FROM tb_ibu WHERE id_ibu = '$id_ibu'");
}
header("Location:index.php");

if (isset($_POST['simpankonsulbalita'])) {
  mysqli_query($koneksi, "INSERT INTO tb_konsulbalita set id_balita = '$id_balita', namabalita = '$namabalita', nik = '$nik', anakdari = '$anakdari', usiamingguke = '$usiamingguke', beratbadan = '$beratbadan', panjangbadan='$panjangbadan', lingkarkepala='$lingkarkepala', lingkarlengan='$lingkarlengan', keluhan='$keluhan', statuskesehatanbalita='$statuskesehatanbalita', saran='$saran', vitamin_obat ='$vitamin_obat', tanggalkonsul ='$tanggalkonsul' ");
}
header("Location:index.php");

if (isset($_POST['updatebalita'])) {
  mysqli_query($koneksi, "UPDATE tb_balita SET namabalita = '$namabalita', nik = '$nik', anakdari='$anakdari', tgllahir='$tgllahir', foto='$foto', riwayatpenyakit='$riwayatpenyakit', jeniskelamin ='$jeniskelamin', bk='$bk', alamat='$alamat', bpjs='$bpjs', tgldftrbalita='$tgldftrbalita' where id_balita='$id_balita'");
}
header("Location:index.php");
move_uploaded_file($file_tmp, 'file/' . $foto);

if (isset($_POST['hapusbalita'])) {
  mysqli_query($koneksi, "DELETE FROM tb_balita WHERE id_balita = '$id_balita'");
}
header("Location:index.php");

?>


<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, null, null, null, null, null, null, null, null, null, null, null, null, window.location.href)
  }
</script>