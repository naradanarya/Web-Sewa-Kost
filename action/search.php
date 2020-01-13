<?php
//isikan dengan query select data
include "action/koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$query = mysqli_query($connect, " (select nama,alamat,id_dosen from mahasiswa WHERE nama LIKE '%$search%') UNION 
                                  (select nama,alamat,id_dosen from dosen WHERE nama LIKE '%$search%')") 
		 or die(mysqli_error($connect));

while ($res = mysqli_fetch_array($query)) {
    $nama = $res['nama'];
    $alamat = $res['alamat'];
}
?>