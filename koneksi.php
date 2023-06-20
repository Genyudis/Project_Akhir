<?php

$server = "localhost";
$username = "root";
$pass = "";
$db = "regis";
$koneksi = mysqli_connect($server, $username, $pass, $db); 

if(mysqli_connect_error()){
    echo "koneksi gagal : ".mysqli_connect_error();
}