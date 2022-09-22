<?php 
    include 'koneksi.php';
    $db = new database();

    $aksi = $_GET['aksi'];
    if ($aksi == "tambah") {
        $db -> input($_POST['nim'], $_POST['nama'], $_POST['alamat'], $_POST['telepon']);
        header("location:tampil.php");
    }else if ($aksi == "hapus") {
        $db -> delete($_GET['nim']);
        header("location:tampil.php");
    }else if ($aksi == "edit") {
        $db -> edit($_POST['nim'], $_POST['nama'], $_POST['alamat'], $_POST['telepon']);
        header("location:tampil.php");
    }else if($aksi == "update") {
        $db -> update($_POST['nim'], $_POST['nama'], $_POST['alamat'], $_POST['telepon']);
        header("location:tampil.php");
    }
?>