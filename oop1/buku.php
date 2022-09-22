<?php 
    class buku{
        public $judul;
        private $harga;
        protected $penerbit;

        function __construct($x, $y, $z){
            $this -> judul = $x;
            $this -> harga = $y;
            $this -> penerbit = $z;
        }

        function cetakBuku(){
            return "Cetak Sebuah Buku";
        }

        function bacaJudul(){
            return $this -> judul;
        }

        function bacaHarga(){
            return $this -> harga;
        }

        function bacaPenerbit(){
            return $this -> penerbit;
        }
    }

    $buku1 = new buku('Belajar PHP', 200000, 'Airlangga');
    echo 'Nama Judul : ' . $buku1 -> judul . '<br>';
    echo 'Harga Buku : ' . $buku1 -> bacaHarga() . '<br>';
    echo 'Penerbit   : ' . $buku1 -> bacaPenerbit();
?>