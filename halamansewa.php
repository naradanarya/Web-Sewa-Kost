<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: halamanlogin.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
	<title>Kostan</title>
</head>
<body>
	<div class="koko">	
		<img src="img/background7.jpg" class="img-fluid" alt="Responsive image">
		<div class="yoyo">
			<h1 style="font-size: 60px;">Informasi Kostan</h1>
			<a href="#luar" class="login" style="font-size: 19px;text-decoration: none;">Lihat</a>
		</div>

	</div>
	<div class="covers" id="myheader">
		
		<div class="left-side">
			<div class="var-left-side">
				<a href="index.php"> Home </a>
			</div>

			<div class="var-left-side">
				<a href="halamankost.php"> Sewa</a>
			</div>

			<div class="var-left-side">
				<a href="halamansewa.php"> Informasi </a> 
			</div>
			<div class="var-left-side">
				<a href="halamanpemilik.php"> Pemilik </a> 
			</div>	
		</div>
		
		<div class="right-side">
			<div style="color: white; "> <?php echo htmlspecialchars($_SESSION["username"]); ?></div>

		</div>
		<div class="oke">
			<a href="action/logout.php" class="login"><span>logut</span></a>

		</div>
	</div>
	
	<div class="luar" id="luar">

		<div class="wrap" style="display: flex;}">
			<h1 style="font-weight: 700; margin-top: 20px; margin-left: 10px; font-family: Impact, fantasy; width: 100%;">Informasi Kost</h1>
			<form method="POST" action="searchkost.php" class="aqaqa">
				<div class="search" style="float: right; margin-left: 600px; margin-top: 29px;width: 100%;position: relative;display: flex;">
					<input type="text" name="search" class="searchTerm" placeholder="What are you looking for?" style="width: 100%;border: 3px solid #00B4CC;border-right: none;padding: 15px;height: 20px;border-radius: 5px 0 0 5px;outline: none;color: #9DBFAF;">
					<button type="submit" class="searchButton" style="width: 40px; height: 36px; border: 1px solid #00B4CC;background: #00B4CC;text-align: center;color: #fff;border-radius: 0 5px 5px 0;cursor: pointer;font-size: 20px;">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
		</form>
		<table class="makanan" style="text-align: center;">
			<tr>
				<th>No</th>
				<th>Nama Kost</th>
				<th>Alamat</th>
				<th>Jumlah Kamar</th>
				<th>Harga Kamar</th>
				<th>Nama Pemilik</th>
				<th>No Telp</th>
				<th>Aksi</th>
				<th>Pilihan</th>
			</tr>
			<tbody>
				<?php
				include "action/koneksi.php";
				$query = "
				select id_kost , nama_kost, alamat , jumlah_kamar , harga_kamar , nama_pemilik, no_hp_pemilik
				from kostan inner join pemilik on kostan.id_pemilik = pemilik.id_pemilik
				";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				while ($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<td><?php echo $row['id_kost']; ?></td>
						<td><?php echo $row['nama_kost']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td><?php echo $row['jumlah_kamar']; ?></td>
						<td><?php echo $row['harga_kamar']; ?></td>
						<td><?php echo $row['nama_pemilik']; ?></td>
						<td><?php echo $row['no_hp_pemilik']; ?></td>
						<td><a href='editkost.php?id_kost=<?php echo $row['id_kost'] ?>' class='btn btn-success'>
							<span class='glyphicon glyphicon-edit'></span>Edit</button></a>
							<a href='action/aksideletekost.php?id_kost=<?php echo $row['id_kost'] ?>' class='btn btn-danger'>
								<span class='glyphicon glyphicon-remove-sign'>Delete</button></a></td>
									<td><td><a href='sewakost.php?id_kost=<?php echo $row['id_kost'] ?>' class='btn btn-success'>
							<span></span>Sewa</button></a></td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>




					<a href="tambahkost.php" class="login" style="margin:10px;"><span>Tambah Kost</span></a>


				</div>
				<footer class="site-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<h6>About</h6>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>

							<div class="col-xs-6 col-md-3">
								<h6>Categories</h6>
								<ul class="footer-links">
									<li><a href="http://scanfcode.com/category/c-language/">C</a></li>
									<li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
									<li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
									<li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
									<li><a href="http://scanfcode.com/category/android/">Android</a></li>
									<li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
								</ul>
							</div>

							<div class="col-xs-6 col-md-3">
								<h6>Quick Links</h6>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Contribute</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Sitemap</a></li>
								</ul>
							</div>
						</div>
						<hr>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-6 col-xs-12">
								<p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by 
									<a href="#">AryaN</a>.
								</p>
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</body>	
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script src="jquery-3.4.1.min.js"></script>
			<script scr="jquery.backstretch.min.js"></script>
			</html>