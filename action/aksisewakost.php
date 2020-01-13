<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama_penyewa']) && isset($_POST['id_pemilik']) && isset($_POST['status_sewa']) && isset($_POST['total_sewa']) && isset($_POST['id_kost'])) {
//inisialisasi variabel
$nama_penyewa = filter_input(INPUT_POST, 'nama_penyewa', FILTER_SANITIZE_STRING);
$id_pemilik = filter_input(INPUT_POST, 'id_pemilik', FILTER_SANITIZE_STRING);
$status_sewa = filter_input(INPUT_POST, 'status_sewa', FILTER_SANITIZE_STRING);
$total_sewa = filter_input(INPUT_POST, 'total_sewa', FILTER_SANITIZE_STRING);
$id_kost = filter_input(INPUT_POST, 'id_kost', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into sewa(nama_penyewa, id_pemilik, status_sewa, total_sewa, id_kost) values ('$nama_penyewa', '$id_pemilik','$status_sewa', '$total_sewa', '$id_kost')");

if($query) {
	header('location: ../halamankost.php');
} else {
	echo mysqli_error($link);

}
}
}
?>