<?php 

$dbhost="localhost";
$dbuser="kta";
$dbpass="";
$dbname="shwyne";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
mysqli_select_db($conn,$dbname);

 ?>