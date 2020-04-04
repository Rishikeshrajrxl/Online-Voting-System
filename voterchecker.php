<?php


session_start();

                $host="localhost:3306";
				$user="root";
				$pass="";
				$db="online_voting_system";
				$conn=mysqli_connect($host,$user,$pass,$db);

				$adharno=$_SESSION['adhar'];

				$sql0="select * from votes where adharcard='$adharno' ";
				$result0=mysqli_query($conn,$sql0);

		if(mysqli_num_rows($result0)==1)
		  {
		  	header('location:error.php');
		  }

		else{
				if(isset($_POST['btn1']))
				{
					$party="bjp";	
				}
				elseif (isset($_POST['btn2']))
				{
					$party="congress";
				}
				elseif (isset($_POST['btn3']))
				{
					$party="jdu";
				}
				elseif (isset($_POST['btn4']))
				{
					$party="aap";
				}


				$sql="insert into votes values('$party','$adharno')";
				$result=mysqli_query($conn,$sql);

				header('location:thank-you.php');
			}

				session_destroy();
				

?>