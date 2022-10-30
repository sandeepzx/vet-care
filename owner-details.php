<?php
include('../connect.php');

$name=$_POST['FullName'];
$number=$_POST['w3lPhone'];
$email=$_POST['w3lSender'];
$address=$_POST['Address'];
$district=$_POST['district'];
$pass=$_POST['password'];
$cnfrm=$_POST['Confirm'];
if($pass==$cnfrm)
{
	$insert="INSERT INTO owner_register(Owner_name,Owner_num,owner_email,owner_address,owner_district,owner_password,owner_repassword)VALUES('$name','$number','$email','$address','$district','$pass')";
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