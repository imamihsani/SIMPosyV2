<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachment; filename=DataBalitaPosyanduKembangHarapan.xls");
header("Pragma: no-cache");
header("Expires: 0");
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
    <title>Export Data Balita</title>
</head>

<body>
    <div class="container-fluid">
        <div class="alert alert-warning mt-2" role="alert">
            <a href="" onclick="window.print()" style="text-decoration:none;">
                <h5 class="text-center text-dark">
                    Data Balita Posyandu Kembang Harapan
                </h5>
            </a>
        </div>
        <table class="table table-responsive nowrap table-striped table-bordered table-primary" id="datatables">

            <thead>
                <tr>
                    <th class="text-center text-white" style="background-color:#0275d8;">NIK</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">NAMA</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">TGL. LAHIR</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">ANAK DARI</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">GENDER</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">BK</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">ALAMAT</th>
                    <th class="text-center text-white" style="background-color:#0275d8;">BPJS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                error_reporting(0);
                $ambildatabalita = mysqli_query($koneksi, "SELECT * FROM tb_balita ORDER BY id_balita DESC");
                while ($tampildatabalita = mysqli_fetch_array($ambildatabalita)) {
                ?>
                    <tr>
                        <td><?php echo $tampildatabalita['nik'] ?></td>
                        <td><?php echo $tampildatabalita['namabalita'] ?></td>
                        <td><?php echo $tampildatabalita['tgllahir'] ?></td>
                        <td><?php echo $tampildatabalita['anakdari'] ?></td>
                        <td><?php echo $tampildatabalita['jeniskelamin'] ?></td>
                        <td><?php echo $tampildatabalita['bk'] ?></td>
                        <td><?php echo $tampildatabalita['alamat'] ?></td>

                        <td><?php echo $tampildatabalita['bpjs'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<script src="aset/js/bootstrap.bundle.min.js"></script>
<script src="datatables/datatables.min.js"></script>
<script src="datatables/DataTables-1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    // $(document).ready(function() {

    //     $('#datatables').DataTable();
    //     $('#datatable').DataTable();

    //     $('.dataTables_filter input[type="search"]').css({

    //     });

    //     $('.dataTables_filter input[type="search"]').attr({
    //         'placeholder': 'Cari Data...'
    //     });


    // });
</script>