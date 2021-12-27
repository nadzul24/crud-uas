<?php

$host="10.0.0.41";
$user="admin";
$password="Nadcan247#";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>