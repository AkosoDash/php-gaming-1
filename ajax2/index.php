<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Data Mahasisiwa</h1>
    <div class="container">
        <form>
            <div class="form-group row">
                <label for="nim" class="col=sm-4 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" onkeyup="isi_otomatis()" id="nim">
            </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col=sm-4 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" id="nama" class="form-control">
            </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col=sm-4 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" id="alamat" class="form-control">
            </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col=sm-4 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" id="jurusan" class="form-control">
            </div>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nim = $("#nim").val();
                $.ajax({
                    url: 'getdata.php',
                    data:"nim="+nim ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nim').val(obj.nim);
                    $('#nama').val(obj.nama);
                    $('#alamat').val(obj.alamat);
                    $('#jurusan').val(obj.jurusan);
                });
            }
        </script>
    </div>

</body>
</html>