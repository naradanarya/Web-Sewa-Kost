<?php
include "koneksi.php";

$id_kost = $_GET['id_kost'];
$query = mysqli_query($link, "delete from kostan
	where id_kost = '$id_kost'
")or die(mysqli_error($link));

if($query) {
        header('location:../halamansewa.php');
} else {
        echo mysqli_error($link);
}
?>

