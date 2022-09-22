<?php 
    class mobilku{
        var $jenis, $warna, $merk;

        function hargaMobil(){
            if ($this -> jenis == 'SUV' && $this -> merk == 'Honda' && $this -> warna == 'merah') {
                echo 'Rp. 400.000.000,-';
            }else{
                echo 'Rp. 150.000.000,-';
            }
        }
    }

    $mobil1 = new mobilku;
    $mobil1 -> jenis = 'SUV';
    $mobil1 -> merk = 'Honda';
    $mobil1 -> warna = 'merah';
    echo $mobil1 -> hargaMobil(). '<br>';

    $mobil2 = new mobilku;
    $mobil2 -> jenis = 'SUV';
    $mobil2 -> merk = 'Toyota';
    $mobil2 -> warna = 'kuning';
    echo $mobil2 -> hargaMobil();
?>