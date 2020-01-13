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
		<img src="img/background4.jpg" class="img-fluid" alt="Responsive image">
		<div class="yoyo">
			<h1 style="font-size: 60px;">Selamat Datang <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
			<p style="font-size: 19px;">Kami akan carikan anda Kostsan yang terbaik</p>
		</div>

	</div>
	<div class="covers" id="myheader">
		
		<div class="left-side">
			<div class="var-left-side">
				<a href="index.php"> Home </a>
			</div>

			<div class="var-left-side">
				<a href="halamankost.php"> sewa </a>
			</div>

			<div class="var-left-side">
				<a href="halamansewa.php"> Informasi </a> 
			</div>
			<div class="var-left-side">
				<a href="halamanpemilik.php"> pemilik </a> 
			</div>	
		</div>
		
		<div class="right-side">
			<div style="color: white; "> <?php echo htmlspecialchars($_SESSION["username"]); ?></div>

		</div>
		<div class="oke">
			<a href="action/logout.php" class="login"><span>logut</span></a>

		</div>
	</div>
	
	<div class="luar">
		<h1 style="font-weight: 700; margin-top: 20px; margin-left: 10px; font-family: Impact, fantasy;">Daftar Kost</h1>
		
		<div class="card">
			<img src="img/background1.jpg" alt="Avatar" style="width:100%">
			<div class="container" style="margin-top: 10px;">
				<h4><b>Kost Putra Salman</b></h4> 
				<p>Alamat :Jl Tanjung Sari no7 Sumurboto Banyumanik 
					<br>No Telp : 0812189775950 
					<br>Harga: 1.000.000 
					<br>Fasilitas : AC, KM Dalam, Termasuk Listrik, Kulkas Bersama</p> 
				
			</div>
		</div>
		<div class="card">
			<img src="img/background1.jpg" alt="Avatar" style="width:100%">
			<div class="container" style="margin-top: 10px;">
				<h4><b>Kost Lanang</b></h4> 
				<p>Jl Tanjung Sari no7 Sumurboto Banyumanik
				<br>No Telp : 0812189775950 
					<br>Harga: 1.000.000 
					<br>Fasilitas : AC, KM Dalam, Termasuk Listrik, Kulkas Bersama</p></p> 
			</div>
		</div>
		
				<a href="halamansewa.php" class="login" style="margin:20px; "><span>View More</span></a>
			
		
	</div>
	 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Arya Naradana <br>
            	21120117140024 <br>
            	Teknik Komuter 2017 <br>
            	@naradanarya <br>
            jl Tanjung sari no7 </p>
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
              <li><a class="facebook" href="https://www.facebook.com/arya.naradana"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/naradanarya/"><i class="fa fa-instagram"></i></a></li>
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