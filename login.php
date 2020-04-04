
 
<html>

<title>Login</title>


<style>
body{
	margin:0px;
    padding:0px;
    background-image: url("login.jpg");
    overflow: hidden;
    border-image-repeat: none;
}

ul{
	list-style-type:none;
	background-color:rgb(80, 224, 36);
	overflow:hidden;
}
li{
	float:right;
}
li a{
	padding:20px;
	display:inline-block;
	text-decoration:none;
	color:black;
}
li a:hover{
	background-color:rgb(22, 119, 48  );
	color:white;
}
.head{
	margin-right:35%;
	color:white;
	float:right;
	
}
.voteImg{
	width:8%;
	height:8%;
	position:absolute;
	top:5%;
}

.login_icon{
	width:20%;
	height: 13%;
	border-radius: 50%;
	margin-left:40%;
	margin-top: 4%;

}
.login_formate{
	width:25%;
	height:75%;
	position:relative;
	top:5%;
	left: 70%;
	background-color: rgb(91, 86, 88  );
	border-radius: 5%;
}
input{
	padding:10px;
	margin: 5px;
	border-radius: 5px;
	
}
.form{
	margin-left:17%;


}
#login{
	margin-left: 20%;
	color:white;
}


 .register{
	
	width:110px;
	color:white;
	background-color: rgb(49, 55, 52  );
}
.register:hover{
	background-color: rgb(7,7,7);
	cursor: pointer;
	
}
.google{
	
	width:190px;
	background-color: rgb(215, 82, 36);
}
.google:hover{
    background-color: rgb(217, 56, 0);	
    cursor: pointer;
}
.logintbn:hover{
    background-color: rgb(14, 173, 255);
    cursor:pointer;	
}
.loginbtn{
	background-color:rgb(14, 73, 151 ); color:white ; width:70px;
	cursor: pointer;
}
.votearea{
	position: absolute;
	top:17%;
	left:5%;
	width: 50%;
	height: 70%;

	

}
.box1{
	background-color: white;
	width: 40%;
	height: 40%;
	display: block;
	float:left;
	margin-left:30px;
	margin-top: 20px;
	clear: both;
	border-radius:10px;

}
.box2{
	background-color: white;
	width: 40%;
	height: 40%;
	display: block;
	float:right;
	margin-right: 70px;
	margin-top: 20px;
	border-radius:10px;


}
.box3{
	background-color: white;
	width: 40%;
	height: 40%;
	display: block;
	float:left;
	clear: both;
	margin-left: 30px;
	margin-top: 25px;
	border-radius:10px;
}
.box4{
	background-color: white;
	width: 40%;
	height: 40%;
	display: block;
	float:right;
	margin-right: 70px;
	margin-top: 25px;
	border-radius:10px;
}

.a{
	margin:auto;
}
.alert{
	color:red;
}

</style>
<body>

    <ul>

    	<li><a href=""><strong>Contact </strong></a></li>
    	<li><a href="about.html"><strong>About </strong></a></li>
    	<li><a href="login.php"><strong>Home</strong></a></li>
    	
    	<h3 class="head"><strong>Online Voting System</strong></h3>
    	<img  class ="voteImg "src="vote1.png" style="width:100px; height: 50px; position: absolute;top:6px;left: 13px;">
    </ul>	
   

	<div class="login_formate">
		<img  class="login_icon"  src="login_icon.png">
		<form class="form" action=" login_check.php" method="post">
			<table>
				<h3 id="login">Login to vote</h3>

					<?php
						if(@$_GET['msg']==true)
						{
					?>

							<div class="alert"><strong><?php echo  $_GET['msg']; ?></strong></div>
			            <?php

						}

					?>


				<tr><td><input type="text" name="adharcard" placeholder="AdharCard No" required=""></td></tr><br>
				<tr><td><input type="password" name="password" placeholder="password" required=""></td></tr>
				<tr><td ><p><input  class ="loginbtn"  name="login" type="submit" value="Login"></p></td></tr>

			</table>
			
		</form>
	         <table class="a">
	         	<tr><td><input class="google" type="submit" value ="Sign In with Google"> </td></tr>
			<tr><td><h3 style="color:yellow;">New user: <a href="registration.php "><input  class="register"  type="submit" value ="Register"></a></h3></td></tr>
		</table>

	   
	</div>

	<?php
	
		$host="localhost:3306";
		$user="root";
		$db="online_voting_system";
		$pass="";
		$conn=mysqli_connect($host,$user,$pass,$db);
//query1-----------------------------------------------------------------------------------------
		$sqli="select candidate,count(candidate)  as no from votes where candidate='BJP' ";

		$result=mysqli_query($conn,$sqli);
		if(mysqli_num_rows($result))
		{
	 while( $rows=mysqli_fetch_assoc($result))
     {
     	$bjp=$rows['no'];
     }
	     }
	     else
	     {
	     	$bjp="0";
	     }

//query 2----------------------------------------------------------------------------------------
     $sqli2="select candidate,count(candidate)  as no from votes where candidate='congress' ";

		$result2=mysqli_query($conn,$sqli2);
		if(mysqli_num_rows($result2))
		{
	 while( $rows2=mysqli_fetch_assoc($result2))
     {
     	$congress=$rows2['no'];
     }
       }
       else
       {
   	     $congress="0";
        }

//query 3----------------------------------------------------------------------------------------
     $sqli3="select candidate,count(candidate)  as no from votes where candidate='jdu' ";

		$result3=mysqli_query($conn,$sqli3);
		if(mysqli_num_rows($result3))
   {
	 while( $rows3=mysqli_fetch_assoc($result3))
     {
     	$jdu=$rows3['no'];
     }
   }
   else{
   	$jdu="0";
   }

//query 4-------------------------------------------------------------------------------------------
    $sqli4="select candidate,count(candidate)  as no from votes where candidate='aap' ";

		$result4=mysqli_query($conn,$sqli4);
		if(mysqli_num_rows($result4))
   {
	 while( $rows4=mysqli_fetch_assoc($result4))
     {
     	$aap=$rows4['no'];
     }
   }
   else{
   	$aap="0";
   }

	?>

	<div class="votearea">

		
	        <div class="box1">
	        	<h3 style="margin-top: 17px;margin-left: 105px; color:rgb(254, 30, 23 );">BJP</h3>
	        	<img  class="logo" src="bjp.png" style="width:110px; height:90px;margin-top: -10px;margin-left:70px;">
	        	<h3 style="margin-top: 0px;margin-left: 90px;">Vote:<?php echo" $bjp"; ?> </h3>
			</div>

			<div class="box2">
				<h3 style="margin-top: 17px;margin-left: 70px;color:rgb(254, 30, 23 );">CONGRESS</h3>
				<img  class="logo"  src="congress.png"  style="width: 80px; height: 60px;margin-top: 5px;margin-left: 75px;" >
				<h3 style="margin-top: 20px;margin-left: 90px;">Vote: <?php echo" $congress"; ?></h3>
			</div>

			
			<div class="box3">
				<h3 style="margin-top: 17px;margin-left: 90px;color:rgb(254, 30, 23 );">JDU</h3>
				<img  class="logo"  src="jdu.png" style="width: 80px; height: 70px; border-radius: 50% ;margin-top:-5px;margin-left: 70px;">
				<h3 style="margin-top: 20px;margin-left: 90px;">Vote:<?php echo" $jdu"; ?> </h3>
			</div>

			<div class="box4">
				<h3 style="margin-top: 17px;margin-left: 100px;color:rgb(254, 30, 23 );">AAP</h3>
				<img class="logo"   src="app.jpg"  style="width: 90px; height: 70px; margin-top: 0px;margin-left: 70px;" >
				<h3 style="margin-top: 20px;margin-left: 90px;">Vote:<?php echo" $aap"; ?> </h3>
			</div>

	</div>

</body>
</html>