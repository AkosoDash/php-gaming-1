<?php
    function load_provinsi(){
        $koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajaxtgs1");
        if(!$koneksi){
            die("Connection failed". mysqli_connect_error());
        }
        $provinsi = "";
        $query = "SELECT * FROM provinces";
        $result = mysqli_query($koneksi, $query);
        while($row = mysqli_fetch_array($result)){

        $provinsi .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
        }
        return $provinsi;
    }
    if(isset($_GET['action']) && $_GET['action'] == 'getKabupaten'){
        $koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajaxtgs1");
        
        if(!$koneksi){
            die("Connection failed". mysqli_connect_error());
        }

        $id_prov = $_GET['id_prov'];
        echo'<script>console.log('.$id_prov.')</script>';
        $query = 'SELECT * FROM regencies WHERE province_id = '.$_GET["id_prov"].' ';
        $result = mysqli_query($koneksi, $query);

        $kabupaten="";
        $kabupaten ='<option value="">PILIH KABUPATEN / KOTA</option>';
        while($row = mysqli_fetch_array($result)){
            $kabupaten.='<option value="'.$row["id"].'">'.$row["name"].'</option>';
        }
        echo $kabupaten;
    }
    if(isset($_GET['action']) && $_GET['action'] == 'getKecamatan'){
        $koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajaxtgs1");
        
        if(!$koneksi){
            die("Connection failed". mysqli_connect_error());
        }

        $id_kab = $_GET['id_kab'];
        echo'<script>console.log('.$id_kab.')</script>';
        $query = 'SELECT * FROM districts WHERE regency_id = '.$_GET["id_kab"].' ';
        $result = mysqli_query($koneksi, $query);

        $kecamatan="";
        $kecamatan ='<option value="">PILIH KECAMATAN</option>';
        while($row = mysqli_fetch_array($result)){
            $kecamatan.='<option value="'.$row["id"].'">'.$row["name"].'</option>';
        }
        echo $kecamatan;
    }
    if(isset($_GET['action']) && $_GET['action'] == 'getKelurahan'){
        $koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajaxtgs1");
        
        if(!$koneksi){
            die("Connection failed". mysqli_connect_error());
        }

        $id_kec = $_GET['id_kec'];
        echo'<script>console.log('.$id_kec.')</script>';
        $query = 'SELECT * FROM villages WHERE district_id = '.$_GET["id_kec"].' ';
        $result = mysqli_query($koneksi, $query);

        $kelurahan="";
        $kelurahan ='<option value="">PILIH KELURAHAN</option>';
        while($row = mysqli_fetch_array($result)){
            $kelurahan.='<option value="'.$row["id"].'">'.$row["name"].'</option>';
        }
        echo $kelurahan;
    }
?> 