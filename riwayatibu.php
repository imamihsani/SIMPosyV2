<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Konsul Ibu</title>
    <link rel="stylesheet" href="aset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/font/static/Comfortaa-Bold.ttf">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrapicons/bootstrap-icons.css">
    <link rel="stylesheet" href="aset/css/login.css">
    <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="datatables/datatables.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="preload" as="image" href="aset/gambar/">
</head>

<?php
include "koneksi.php";
error_reporting(0);
$ambildataibu = mysqli_query($koneksi, "SELECT * FROM tb_ibu WHERE id_ibu='$_GET[id_ibu]'");
$tampildataibu = mysqli_fetch_array($ambildataibu);
?>

<body>
    <div class="container-fluid">
        <div class="alert alert-sm mt-2" role="alert" style="background-color:forestgreen">
            <p class="text-center text-white"><strong>Riwayat Konsul Kesehatan Ibu</strong></p>
            <div class="alert alert-success alert-sm" role="alert">
                <div class="row">
                    <div class="col-1">
                        <p class="">Nama</p>
                        <p class="">NIK</p>
                        <p class="">Alamat</p>
                    </div>
                    <div class="col-11">
                        <p class="">: <?php echo $tampildataibu['namaibu'] ?></p>
                        <p class="">: <?php echo $tampildataibu['nik'] ?></p>
                        <p class="">: <?php echo $tampildataibu['alamat'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <table class="table table-responsive table-bordered table-striped" id="datatable">
            <thead style="background-color:forestgreen">
                <tr>
                    <th scope="col" class="text-white text-center">No.</th>
                    <th scope="col" class="text-white text-center">Keperluan</th>
                    <th scope="col" class="text-white text-center" style="width:160px">Usia Kandungan</th>
                    <th scope="col" class="text-white text-center">Tensi</th>
                    <th scope="col" class="text-white text-center">BB</th>
                    <th scope="col" class="text-white text-center">Keluhan</th>
                    <th scope="col" class="text-white text-center">Saran</th>
                    <th scope="col" class="text-white text-center">Status</th>
                    <th scope="col" class="text-white text-center">Obat/Vitamin</th>
                    <th scope="col" class="text-white text-center">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                error_reporting(0);
                $no = 1;
                $ambildatakonsulibu = mysqli_query($koneksi, "SELECT * FROM tb_konsulibu WHERE id_ibu='$_GET[id_ibu]'");
                while ($tampildatakonsulibu = mysqli_fetch_array($ambildatakonsulibu)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampildatakonsulibu['keperluan'] ?></td>
                        <td><?php echo $tampildatakonsulibu['usiakandungan'] ?> minggu</td>
                        <td><?php echo $tampildatakonsulibu['tensidarah'] ?> mmHg</td>
                        <td><?php echo $tampildatakonsulibu['beratbadan'] ?> kg</td>
                        <td><?php echo $tampildatakonsulibu['keluhan'] ?></td>
                        <td><?php echo $tampildatakonsulibu['saran'] ?></td>
                        <td><?php echo $tampildatakonsulibu['statuskesehatanibu'] ?></td>
                        <td><?php echo $tampildatakonsulibu['obatibu'] ?></td>
                        <td><?php echo $tampildatakonsulibu['tanggalkonsul'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

<script src="aset/js/bootstrap.bundle.min.js"></script>
<script src="datatables/datatables.min.js"></script>
<script src="datatables/datatables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {

        $('#datatables').DataTable();
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: ['excel']
        });

        $('.dataTables_filter input[type="search"]').css({
            'margin-bottom': '10px',
            'display': 'inline-block',
        });

        $('.dataTables_filter input[type="search"]').attr({
            'placeholder': 'Cari Data...'
        });


    });
</script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, null, null, null, null, null, null, null, null, null, null, null, null, window.location.href)
    }
</script>

</html>