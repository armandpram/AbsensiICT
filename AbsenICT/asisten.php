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
    <button type="button" onclick="location.href='index.php';" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Asisten</button><br><br>
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
            <?php
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
</body>
</html>