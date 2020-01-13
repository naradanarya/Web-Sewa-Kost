<?php
//isikan dengan query select data
include "action/koneksi.php";
$id_kost = $_GET['id_kost'];
$query = mysqli_query($link, "select * from kostan where id_kost='$id_kost'") or die(mysqli_error($link));

while ($res = mysqli_fetch_array($query)) {
    $nama_kost = $res['nama_kost'];
    $alamat = $res['alamat'];
    $jumlah_kamar = $res['jumlah_kamar'];
    $harga_kamar = $res['harga_kamar'];
    $id_pemilik = $res['id_pemilik'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">
        body{ font: 14px sans-serif;
        font-family: Arial, Helvetica, sans-serif; 
          background-image: url("img/overlay.png"),url("img/background2.jpg");
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          margin-left: 660px;
          margin-top: 130px;
          
          
         
        }
        .wrapper{ width: 400px; padding: 20px;
        background-color: white; 
        border: 3px solid #f1f1f1;
        border-radius: 30px;

      }
        input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
       border-radius: 30px;
        
    </style>
</head>
<body>

    <div class="wrapper">
        <h2 >Edit Kost</h2>
        <p>Please fill this form to edit kostan.</p>
        <form action=" action/aksieditkost.php?id_kost=<?php echo  $id_kost;  ?>" method="post">
            <div class="form-group ">
                <label>ID Kost</label>
                <input value="<?php echo $id_kost; ?>" type="text" name="id_kost" class="form-control" value="<?php echo $row['id__kost']; ?>" disabled>
                <span class="help-block"></span>
            </div> 
            <div class="form-group ">
                <label>Nama kost</label>
                <input value="<?php echo $nama_kost; ?>" type="text" name="nama_kost" class="form-control" value="<?php echo $row['nama_kost']; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Alamat</label>
                <input value="<?php echo $alamat; ?>" type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
                <span class="help-block"></span>
            </div>       
            <div class="form-group ">
                <label>Jumlah Kamar</label>
                <input value="<?php echo $jumlah_kamar; ?>" type="text" name="jumlah_kamar" class="form-control" value="<?php echo $row['jumlah_kamar']; ?>">
                <span class="help-block"></span>
            </div>
            <div class="form-group ">
                <label>Harga Kamar</label>
                <input value="<?php echo $harga_kamar; ?>" type="text" name="harga_kamar" class="form-control" value="<?php echo $row['harga_kamar']; ?>">
                <span class="help-block"></span>
            </div>   
            <div class="form-group ">
                    <label>ID Pemilik</label>
                    <select class="form-control" name='id_pemilik' style="border:1px;border-radius: 30px;">
                        <?php include "action/koneksi.php"; 
                        $query = "SELECT * FROM Pemilik"; 
                        $result = mysqli_query($link, $query) or die(mysqli_error($link)); 
                        while  ($row   = mysqli_fetch_array($result)) { ?>
                            <option value="<?php    echo    $row['id_pemilik'];   ?>"><?php   echo $row['id_pemilik']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="halamanlogin.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>