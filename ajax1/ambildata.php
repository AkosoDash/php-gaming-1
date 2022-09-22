<?php
    function load_kecamatan(){
        $koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajax1");
        if(!$koneksi){
            die("Connection Failed : " . mysqli_connect_error());
        }

        $kecamatan = "";
        $query = "select * from kecamatan";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_array($result)) {
            $kecamatan .= '<option value="'. $row["id_kec"].'">'.$row["nama_kec"].'</option>';
        }
        return $kecamatan;
    };

    if (isset($_GET['action']) && $_GET['action'] == 'getKelurahan' ) {
        $koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajax1");
        if(!$koneksi){
            die("Connection Failed : " . mysqli_connect_error());
        }

        $idKecamatan = $_GET['idKecamatan'];
        echo '<script>console.log('.$idKecamatan.')</script>';
        $query = 'select * from kelurahan where id_kec ='.$_GET["idKecamatan"].' order by nama_kel';
        echo '<script>console.log('.$query.')</script>';

        $result = mysqli_query($koneksi, $query);

        $kelurahan = "";
        $kelurahan = '<option value=""> -- Pilih Kelurahan -- </option>';
        while($row = mysqli_fetch_array($result)){
            $kelurahan .= '<option value ="'.$row["id_kel"]. '">'.$row["nama_kel"].'</option>';
        }
        
        echo $kelurahan;
    }
?>