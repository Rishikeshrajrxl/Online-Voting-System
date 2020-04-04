<?php
		
$host="localhost:3306";
$user="root";
$password="";
$database="college";

$conn=mysqli_connect($host,$user,$password,$database);

if(!$conn)
{
	die('some error occurred');
}
else{
	$username=$_POST['username'];
	$pass=$_POST['pass'];

	$query1="select * from studentinfo where username='$username'";
	$result=mysqli_query($conn,$query1);

	if(mysqli_num_rows($result)==1)
	{
		echo"Login successfully";
	}
	else{
		die('Invalid login');
	}

}

mysqli_close($conn);

?>