<?php
    include ('dbconfig.php');
    
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $save = mysqli_query($conn,
    "insert into tlogin (username, password) values ('$username', '$password')") or die(mysqli_error($conn));

    if($save == true){
        $response["status"] = true;
        $response["pesan"] = "Register Admin Berhasil";
    }else{
        $response["status"] = false;
        $response["pesan"] = "Register Admin Gagal";
    }
?>