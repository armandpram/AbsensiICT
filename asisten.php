<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Asisten</title>
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include "dashboard.php"; ?>
    <div class="container">
        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"><span
                style="font-size: 13px; font-weight: bold;" class="glyphicon glyphicon-plus"></span> Tambah
            Asisten</button><br><br>

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No. Kartu</th>
                    <th>NIM</th>
                    <th>Nama Asisten</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <!-- Koneksi Data Asisten -->
            <?php
            include "koneksi.php";
            $no = 1;
            $sql = mysqli_query($conn, "SELECT * FROM asisten");
            while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['noKartu']; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jabatan']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <!-- Modal Tambah-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Isinya Modal-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Asisten</h4>
                </div>
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-3">NIM</label>
                        <div class="col-xs-9">
                            <input name="nabar" class="form-control" type="text" placeholder="Masukin NIM lu cuk..." style="width:335px;" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Asisten</label>
                            <div class="col-xs-9">
                                <input name="nabar" class="form-control" type="text" placeholder="Masukin nama lu cuk..." style="width:335px;" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>