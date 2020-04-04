<?php

$host="localhost:3306";
$user="root";
$pass="";
$db="online_voting_system";

$adharcard=$_POST['adharcard'];
$password=$_POST['password'];
$conn=mysqli_connect($host,$user,$pass,$db);

if(isset($_POST['login']))
{
		$sql="select * from registration_detail where adharcard ='$adharcard' AND password ='$password' ";
		$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==1)	
			{
				header("location:user.php?msg=$adharcard");
			}	
			else
			{
				header('Location:login.php?msg=Invalid Login..');
			}
		
}
mysqli_close($conn);

?>