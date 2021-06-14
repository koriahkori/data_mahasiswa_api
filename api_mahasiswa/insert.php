<?php

include 'koneksi.php';
    	
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$connect->query("INSERT INTO tb_mahasiswa (nim,nama,jenis_kelamin,jurusan,alamat) VALUES ('".$nim."','".$nama."','".$jenis_kelamin."','".$jurusan."','".$alamat."')");



?>