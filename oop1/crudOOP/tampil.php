<?php 
    include 'koneksi.php';
    $db = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h3 align="center">Data Mahasiswa</h3>
        <table class="table table-success table-striped" border="1">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col" align="center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach ($db -> tampilData() as $data) { ?>
                        <tr>
                            <td align="center"> <?php echo $no++; ?> </td>
                            <td> <?php echo $data['nim']; ?> </td>
                            <td> <?php echo $data['nama']; ?> </td>
                            <td> <?php echo $data['alamat']; ?> </td>
                            <td> <?php echo $data['telp']; ?> </td>
                            <td> 
                                <a class="btn btn-warning btn-sm" href="edit.php?nim=<?php echo $data['nim']; ?>&aksi=edit">Edit</a>
                                <a class="btn btn-danger btn-sm" href="proses.php?nim=<?php echo $data['nim']; ?>&aksi=hapus">Hapus</a>
                            </td>
                        </tr>   
                <?php
                    }
                ?>
            </tbody>
        </table>
        <form action="proses.php?aksi=tambah" method="post" class="mx-auto card p-5 mt-5" style="width: 500px !important;">
            <table>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim">
                </div>
                <div class="form-group">
                    <label for="nim">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="nim">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat">
                </div>
                <div class="form-group">
                    <label for="nim">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon">
                </div>
                <input type="submit" class="btn btn-primary mt-4">
            </table>
        </form>
    </div>    
</body>
</html>