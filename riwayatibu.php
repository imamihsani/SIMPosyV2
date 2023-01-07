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
    <link rel="preload" as="image" href="aset/gambar/">
</head>

<body>
    <div class="container-fluid">
        <div class="alert alert-success alert-sm mt-2" role="alert">
            <p class="text-center">Riwayat Konsul Kesehatan Ibu</p>
        </div>
    </div>

    <div class="container-fluid">
        <p>Nama : <?php echo $tampildataibu['namaibu'] ?></p>
        <p>NIK : <?php echo $tampildataibu['nik'] ?></p>
        <table class="table table-responsive table-bordered table-striped">
            <thead style="background-color:forestgreen">
                <tr>
                    <th scope="col" class="text-white">NIK</th>
                    <th scope="col" class="text-white">Nama</th>
                    <th scope="col" class="text-white">Keperluan</th>
                    <th scope="col" class="text-white">Usia Kandungan</th>
                    <th scope="col" class="text-white">Tensi Darah</th>
                    <th scope="col" class="text-white">BB</th>
                    <th scope="col" class="text-white">Keluhan</th>
                    <th scope="col" class="text-white">Saran</th>
                    <th scope="col" class="text-white">Status</th>
                    <th scope="col" class="text-white">Obat/Vitamin</th>
                    <th scope="col" class="text-white">Tgl. Konsul</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
            </tbody>

        </table>
    </div>
</body>

<script src="aset/js/bootstrap.bundle.min.js"></script>
<script src="datatables/datatables.min.js"></script>
<script>
    $(document).ready(function() {

        $('#datatables').DataTable();
        $('#datatable').DataTable();

        $('.dataTables_filter input[type="search"]').css({
            'width': '150%',
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