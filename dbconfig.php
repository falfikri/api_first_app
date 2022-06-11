<?php
    $host_database="localhost";
    $user_database="root";
    $pass_database="";
    $nama_database="dbkaryawan";

    $conn = mysqli_connect($host_database, $user_database, $pass_database, $nama_database);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>