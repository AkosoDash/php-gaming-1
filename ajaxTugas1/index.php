<!doctype html>
<html lang="en">
  <head>
  <?php include 'ambildata.php';
    ?>
    <script src = "jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#provinsi').change(function(){
                var tampung = $(this).val();
                $.ajax({
                    url:'ambildata.php',
                    method:'GET',
                    data : {
                        action : 'getKabupaten',
                        id_prov: tampung
                    },
                    success : function(data){
                        $('#kabupaten').html(data);
                    }
                });
            });
            $('#kabupaten').change(function(){
                var tampung = $(this).val();
                $.ajax({
                    url:'ambildata.php',
                    method:'GET',
                    data : {
                        action : 'getKecamatan',
                        id_kab: tampung
                    },
                    success : function(data){
                        $('#kecamatan').html(data);
                    }
                });
            });
            $('#kecamatan').change(function(){
                var tampung = $(this).val();
                $.ajax({
                    url:'ambildata.php',
                    method:'GET',
                    data : {
                        action : 'getKelurahan',
                        id_kec: tampung
                    },
                    success : function(data){
                        $('#kelurahan').html(data);
                    }
                });
            });
        });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dinamis Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .theBody{
            width: 100%;
            height: 100vh;
        }
    </style>

  </head>
<body class="theBody d-flex bg-dark bg-gradient">
    <div class="container my-auto shadow p-5 rounded-3 bg-light bg-gradient bg-opacity-10" style="width: 75%">
        <div class="col">
            <h3 align="center" class="text-uppercase fw-bolder text-white display-4">Menu Pilihan Dinamis</h3>
        </div>
        <hr>
        <div class="col mt-3">
            <div class="label text-uppercase text-white fw-bold"><label for="">Provinsi</label></div>
            <select class="form-select mt-1" name="provinsi" id="provinsi" aria-label="Default select example">
            <option selected>PILIH PROVINSI</option>
                <?php
                    echo load_provinsi();
                ?>
            </select>
        </div>
        <div class="col mt-3">
            <div class="label text-uppercase text-white fw-bold"><label for="">Kabupaten/Kota</label></div>
            <select class="form-select mt-1" name="kabupaten" id="kabupaten" aria-label="Default select example">
                <option value="">PILIH KABUPATEN / KOTA</option>
            </select>
        </div>
        <div class="col mt-3">
            <div class="label text-uppercase text-white fw-bold"><label for="">Kecamatan</label></div>
            <select class="form-select mt-1" name="kecamatan" id="kecamatan" aria-label="Default select example">
                <option value="">PILIH KECAMATAN</option>
            </select>
        </div>
        <div class="col mt-3">
            <div class="label text-uppercase text-white fw-bold"><label for="">Kelurahan</label></div>
            <select class="form-select mt-1" name="kelurahan" id="kelurahan" aria-label="Default select example">
                <option value="">PILIH KELURAHAN</option>
            </select>
        </div>
    
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>