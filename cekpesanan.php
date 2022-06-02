<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$kelas = $_POST['kelas'];
$jadwal = $_POST['jadwal'];
$penumpang = $_POST['penumpang'];
$lansia = $_POST['lansia'];
$harga = $_POST['harga'];
$total = $_POST['total'];

if($kelas == "Bus Ekonomi"){
    $harga = 35000;
}else if($kelas == "Bus Bisnis"){
    $harga = 105000;
}else if($kelas == "Bus Eksekutif"){
    $harga = 250000;
}

$totallansia = ( $lansia * $harga) - ($lansia * ($harga * 0.1));
$total = ($penumpang * $harga) + $totallansia;

mysqli_query($db,"insert into pesan values('$id', '$nama', '$hp', '$kelas', '$jadwal' ,'$penumpang', '$lansia', '$harga', '$total')");

header('location:datapemesanan.php');
?>