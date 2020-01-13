<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama_kost']) && isset($_POST['alamat']) && isset($_POST['jumlah_kamar']) && isset($_POST['harga_kamar']) && isset($_POST['id_pemilik'])) {
//inisialisasi variabel
$nama_kost = filter_input(INPUT_POST, 'nama_kost', FILTER_SANITIZE_STRING);
$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
$jumlah_kamar = filter_input(INPUT_POST, 'jumlah_kamar', FILTER_SANITIZE_STRING);
$harga_kamar = filter_input(INPUT_POST, 'harga_kamar', FILTER_SANITIZE_STRING);
$id_pemilik = filter_input(INPUT_POST, 'id_pemilik', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into kostan(nama_kost,alamat,jumlah_kamar,harga_kamar,id_pemilik) values ('$nama_kost', '$alamat','$jumlah_kamar', '$harga_kamar', '$id_pemilik')");
if($query) {
	header('location: ../halamansewa.php');
} else {
	echo mysqli_error($link);

}
}
}
?>