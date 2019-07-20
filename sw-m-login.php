<?php 

session_start();
include('auth/configs.php');

if (isset($_POST['username'])) {
	

$user=$_POST['username'];
$password=$_POST['password'];

$pass=md5($password);

$sql="SELECT * FROM marchants where name='$user' AND pass='$pass' LIMIT 1";

$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);

if ($num==1) {
	$_SESSION['auth']==true;
	header("location:index.php");
}
else
{
echo "<script>alert('Username or password is incorrect.')</script>";

}

}
 ?>