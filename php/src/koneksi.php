<?php

$host="172.20.0.2";
$user="root";
$password="admin";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>