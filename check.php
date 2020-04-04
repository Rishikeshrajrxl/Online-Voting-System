<?php
	$pass=$_POST['name'];
	$confirm=$_POST['confirmpass'];
	if($pass!=$confirm)
	{
		echo"not valid";
	}
?>