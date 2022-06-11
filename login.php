<?php
    include ("dbconfig.php");
		 
	$username	= $_POST['username'];
	$password   = $_POST['password'];
  
    $result = mysqli_query($conn, "SELECT * FROM tlogin WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
	if (mysqli_num_rows($result) == 1) {
		$response["statuslogin"] = true;	
		$response["pesan"]  = "Login admin berhasil";		
    }else{
		$response["statuslogin"] = false;
		$response["pesan"]  = "Login admin gagal";
	}

?>