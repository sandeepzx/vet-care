<?php
include('../connect.php');

$name=$_POST['Name'];
$email=$_POST['Email'];
$pass=$_POST['password'];
$cnfrm=$_POST['Confirm'];
if($pass==$cnfrm)
{
	$insert="INSERT INTO tbl_user(user_name,user_email,user_pwd)VALUES('$name','$email','$pass')";
	$exe=mysqli_query($dbconnect,$insert);
	if($exe==1)
	{
		echo "<script>alert('Successfull')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
	else
	{
		echo "<script>alert('Failed')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
}
else
{
	echo "<script>alert('Passwords not match')</script>";
	echo "<script>window.location.href='index.php'</script>";
}

?>