<?php 

session_start();

require_once 'connectvars.php';

// If the session vars aren't set, try to set them with a cookie
if (!isset($_SESSION['userId'])) {
    if (isset($_COOKIE['userId'])) { //if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) 
        $_SESSION['userId'] = $_COOKIE['userId'];
        //$_SESSION['username'] = $_COOKIE['username'];
    }
}

// echo $_SESSION['userId'];

if(!$_SESSION['userId']) {
	header('location: http://localhost/PDS-sys/login.php');	
} 
