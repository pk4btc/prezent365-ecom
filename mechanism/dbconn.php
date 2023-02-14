<?php
// session_start();
// $conn= mysqli_connect('localhost','root','qwerty123','sklep1');
// if (mysqli_connect_errno()) {
//     error_log('Connection error: ' . mysqli_connect_errno());
//     exit();
//   };
// echo "Connected successfully";

// $serverName = "localhost";
// $dBUsername = "root";
// $dBPassword = "qwerty123";
// $dBName = "sklep1";
$serverName = "mysql01.prezent365.beep.pl";
$dBUsername = "prezent365admin";
$dBPassword = "calineczka";
$dBName = "przent365";

$conn= mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);
if(!$conn){
    die("connection  failed". mysqli_connect_errno());
}echo "Connected successfully";
