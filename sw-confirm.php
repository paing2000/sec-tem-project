<?php 

include ('auth/configs.php');
$code=$_POST['code'];
$sql="SELECT * FROM confirmations WHERE code='$code'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if ($row['code']==$code) {
	header("location:index.php");
}
else
{
	echo "<script>document.getElementbyId('wrong').innerHTML='Wrong';</script>";
	header("location:confirmation.php");
}

 ?>