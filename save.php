<?php
    include ("dbconfig.php");

    $nik = $_POST ['nik'];
    $nama = $_POST ['nama'];

    $save = mysqli_query($conn,
    "insert into tkaryawan (nik, nama) values ('$nik', '$nama')") or die(mysqli_error($conn));

    if($save == true){
        $response["status"] = true;
        $response["pesan"] = "Data Karyawan Berhasil Di Simpan";
    }else{
        $response["status"] = false;
        $response["pesan"] = "Data Karyawan Gagal Disimpan";
    }
?>