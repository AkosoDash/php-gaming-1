<?php 
    class mobil{
        var $jenis, $merk, $warna;

        function __construct($x, $y, $z){
            $this -> jenis = $x;
            $this -> merk = $y;
            $this -> warna = $z;
        }

        function bacaJenis(){
            return $this -> jenis;
        }

        function bacaMerk(){
            return $this -> merk;
        }

        function bacaWarna(){
            return $this -> warna;
        }
    }

    $mobil3 = new mobil('City Car', 'Ford', 'Ungu');
    echo 'Mobil 3 berjenis ' . $mobil3 -> bacaJenis() . ' dengan merk ' . $mobil3 -> bacaMerk() . ' berwarna ' . $mobil3 -> bacaWarna();
?>