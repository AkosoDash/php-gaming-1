<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum_ajax2");

$nim = $_GET ['nim'];

$query = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
    'nim' => $mahasiswa['nim'],
    'nama' => $mahasiswa['nama'],
    'alamat' => $mahasiswa['alamat'],
    'jurusan' => $mahasiswa['jurusan'],
);

echo json_encode($data);
?>