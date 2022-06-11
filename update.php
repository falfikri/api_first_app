<?php
    include("dbconfig.php");

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];

    $update = mysqli_query($conn,
        "update tkaryawan set nama = '$nama' where nik = '$nik'")or die(mysqli_error($conn));

    if($update == true){
        $response["status"] = true;
        $response["pesan"] = "Data Karyawan Berhasil Di Update";
    }else{
        $response["status"] = false;
        $response["pesan"] = "Data KAryawan Gagal Di Update";
    }
?>