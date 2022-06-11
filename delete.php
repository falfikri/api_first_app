<?php
    include("dbconfig.php");

    $nik = $_POST ['nik'];

    $delete = mysqli_query($conn,
    "delete from tkaryawan where nik='$nik'") or die(mysqli_error($conn));

    if($delete == true){
        $response ["status"] = true;
        $response ["pesan"] = "Data Karyawan Berhasil Dihapus";
    }else{
        $response ["status"] = false;
        $response ["pesan"] = "Data Karyawan Gagal Dihapus";
    }
?>