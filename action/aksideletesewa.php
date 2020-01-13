<?php
include "koneksi.php";

$id_kost = $_GET['id_sewa'];
$query = mysqli_query($link, "delete from sewa
	where id_sewa = '$id_sewa'
")or die(mysqli_error($link));

if($query) {
        header('location:../halamankost.php');
} else {
        echo mysqli_error($link);
}
?>

