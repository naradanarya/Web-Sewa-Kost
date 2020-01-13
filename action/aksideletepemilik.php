<?php
include "koneksi.php";

$id_pemilik = $_GET['id_pemilik'];
$query = mysqli_query($link, "delete from pemilik
	where id_pemilik = '$id_pemilik'
")or die(mysqli_error($link));

if($query) {
        header('location:../halamanpemilik.php');
} else {
        echo mysqli_error($link);
}
?>

