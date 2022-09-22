<?php 
    class mobilkoe{
        var $jenis, $merk, $warna;

        function setJenis($x){
            $this -> jenis = $x;
        }
        function bacaJenis(){
            return $this -> jenis;
        }
        function setMerk($x){
            $this -> merk = $x;
        }
        function bacaMerk(){
            return $this -> merk;
        }
        function setWarna($x){
            $this -> warna = $x;
        }
        function bacaWarna(){
            return $this -> warna;
        }
    }

    $mobil1 = new mobilkoe;
    $mobil2 = new mobilkoe;

    $mobil1 = new mobilkoe();
    $mobil1 -> setJenis('SUV');
    $mobil1 -> setMerk('Honda');
    $mobil1 -> setWarna('merah');
    echo 'Mobil 1 merupakan mobil berjenis ' . $mobil1 -> bacaJenis() . ' dengan merk '. $mobil1 -> bacaMerk().' dan berwarna ' . $mobil1 -> bacaWarna() . '<br>';

    $mobil2 = new mobilkoe();
    $mobil2 -> setJenis('SUV');
    $mobil2 -> setMerk('Toyota');
    $mobil2 -> setWarna('kuning');
    echo 'Mobil 2 merupakan mobil berjenis ' . $mobil2 -> bacaJenis() . ' dengan merk '. $mobil2 -> bacaMerk().' dan berwarna ' . $mobil2 -> bacaWarna();
?>