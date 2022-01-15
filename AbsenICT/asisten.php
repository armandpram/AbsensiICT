<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Asisten</title>
    <?php include "header.php"; ?>
</head>

<body>
    <?php include "dashboard.php"; ?>
    <div class="container">
    <h1 align="center">Data Asisten</h1>
    <hr class="hr-besar">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Tambah Asisten</button><br><br>
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
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Asisten</h4>
                </div>
                <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" type="number" name="nim" placeholder="Nomor Induk Mahasiswa">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="nomorkartu" placeholder="Nomor Kartu">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nama" placeholder="Nama Asisten">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="jabatan" placeholder="Jabatan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="tambah" class="btn btn-success">Tambah</button></form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <?php include "footer.php" ?>
</body>
</html>

<?php
    if(isset($_POST['tambah'])){
        $nim = $_POST['nim'];
        $noKartu = $_POST['nomorkartu'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $sql1 = mysqli_query($conn, "INSERT INTO asisten VALUES('$nim','$noKartu','$nama','$jabatan')");
        if($sql1){
            echo "<script>alert('Berhasil Tambah Asisten!'); location.replace('asisten.php');</script>";
        } else {
            echo "<script>alert('Ada Kesalahan!'); location.replace('asisten.php');</script>";
        }
    }
?>
