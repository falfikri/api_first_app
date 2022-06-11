<?php
    include("dbconfig.php");

    $result = mysqli_query($conn,
        "select * from tkaryawan order by nama") or die(mysqli_error($conn));
    if (mysqli_num_rows($result) > 0){
        $response ["karyawan"] = array();
        while ($row = mysqli_fetch_array($result)){
            $data = array();
            $data ["nik"] = $row["nik"];
            $data ["nama"] = $row["nama"];
            array_push($response["karyawan"], $data);
        }
    }else{
        $response["karyawan"] = null;
    }
?>