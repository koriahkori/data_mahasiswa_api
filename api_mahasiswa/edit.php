
<?php

include 'koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$connect->query("UPDATE tb_mahasiswa SET nim='".$nim."', nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', jurusan='".$jurusan."', alamat='".$alamat."' WHERE id=". $id);



?>