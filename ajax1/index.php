<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include 'ambildata.php';
    ?> 
    <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#kecamatan').change(function (){
                var tampung = $(this).val();
                $.ajax({
                    url: 'ambildata.php',
                    method: 'GET',
                    data: {
                        action: 'getKelurahan',
                        idKecamatan: tampung
                    },
                    success:function(data){
                        $('#kelurahan').html(data);
                    }
                });
            });
        });
    </script>
    <title>Dynamix Combo Box</title>
</head>
<body>
    <div class="">
        <h2 align="center">Combo Box Bertingkat Wilayah Kota Kediri</h2>
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="Kecamatan">Kecamatan</label>
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <option value="">-- Pilih Kecamatan --</option>
                        <?php 
                            echo load_kecamatan();
                        ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Kelurahan</label>
                    <select class="form-control" name="kelurahan" id="kelurahan">
                        <option value="">-- Pilih Kelurahan --</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</body>
</html>