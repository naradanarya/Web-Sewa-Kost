


<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;
margin-top: 60px;
margin-left: 610px;
padding: 50px 50px;
background-image: url("img/overlay.png"),url("img/background6.jpg");
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;


}
form {border: 3px solid #f1f1f1;
border-radius: 30px;
background-color: white;
width: 450px;
position: fixed;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 30px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 30px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #0090c4;
  border-radius: 30px;
  border:none;
  color: white;
  text-decoration: none;

}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 30px;
  border-radius: 30px;
}

span.password {
  float: right;
  padding-top: 1px;

}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.password {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php include 'action/login.php';?>

<h2 style="color: white;">Login </h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
  <div class="imgcontainer">
    <img src="img/ava2.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="halamanregister.php" class="cancelbtn">Daftar</a>
    <span class="password">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
