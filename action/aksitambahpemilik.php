<?php
include "koneksi.php";

if (!empty($_POST)) {
	if (isset($_POST['nama_pemilik']) && isset($_POST['no_hp_pemilik']) && isset($_POST['tempat_tinggal'])) {
		//inisialisasi variabel
		$nama_pemilik = filter_input(INPUT_POST, 'nama_pemilik', FILTER_SANITIZE_STRING);
		$no_hp_pemilik = filter_input(INPUT_POST, 'no_hp_pemilik', FILTER_SANITIZE_STRING);
		$tempat_tinggal = filter_input(INPUT_POST, 'tempat_tinggal', FILTER_SANITIZE_STRING);



		$query = mysqli_query($link, "insert into pemilik(nama_pemilik,no_hp_pemilik,tempat_tinggal) values ('$nama_pemilik', '$no_hp_pemilik','$tempat_tinggal')");
		if($query) {
			header('location: ../halamanpemilik.php');
		} else {
			echo mysqli_error($link);

		}
	}
}
?>