<?php
    $action = $_GET['action'];
    if($action=="saveKaryawan"){
        include("save.php");
    }

    if($action=="readKaryawan"){
        include("read.php");
    }

    if($action=="updateKaryawan"){
        include("update.php");
    }

    if($action=="deleteKaryawan"){
        include("delete.php");
    }

    if($action=="loginAdmin"){
		include("login.php");
	}

    if($action=="registerAdmin"){
		include("register.php");
	}

    header('Content-Type: application/json');
    echo json_encode($response);

?>