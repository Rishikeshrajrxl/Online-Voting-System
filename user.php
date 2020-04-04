<!DOCTYPE html>
<html>
<head>
	<title>Users_page</title>
</head>

<style>

 body{
    margin-top: -16px;
    margin-left: -10px;
    margin-right: 0px;
    padding:0px;
    background-color: rgb(230, 230, 230 );
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

.left-section{

	width: 30%;
	float:left;
	

}
.right-section{
	width:60%;
    margin-right: 3%;
	float:right;
  
}
.profile{
   width:80%;
   height: 70%;
   margin-left:30%;
   background-color:white;
   border-radius: 3%;
   border:2px solid red;
}
.candidates-details{
    background-color:white;
	width:90%;
	height: 50%;
	border-radius: 2%;
	border:2px solid red;

}
  tr td{
	padding:15px;

}
input{
	margin-left: 50px;
	padding: 10px;
	width:80px;
	background-color: rgb(60, 246, 53 );
}
input:hover{
	cursor: pointer;
	background-color: rgb(23, 131, 19 );
	color:white;
}

</style>
  <body>
          <div>
		     <ul>
    			<li><a href="login.php"><strong>Logout <img  style="width:10%"  src="logout.png"></strong></a></li>
    			<h3 class="head"><strong>Online Voting System</strong></h3>
    			<img  class ="voteImg "src="vote1.png" style="width:100px; height: 50px; position: absolute;top:6px;left: 13px;">
           </ul>	
	  
        </div>

        <?php

        		session_start();


				if(@$_GET['msg']==true)
			{
					$adhar=$_GET['msg'];

					


				$host="localhost:3306";
				$user="root";
				$pass="";
				$db="online_voting_system";
				$conn=mysqli_connect($host,$user,$pass,$db);

				$sql1="select * from registration_detail where adharcard='$adhar' ";
				$sql2="select * from votes where adharcard='$adhar' ";

				$result2=mysqli_query($conn,$sql2);

				$result1=mysqli_query($conn,$sql1);

				while($row=mysqli_fetch_assoc($result1))
				{
					$name=$row['name'];
					$mobile=$row['mobile'];
					$state=$row['state'];
					$city=$row['city'];
					$photo=$row['photo'];
				}

				
				if(mysqli_num_rows($result2)==1)
				{
					$status="Voted";
					$color="#31D72B ";
				}
				else{
					$status="Not Voted";
					$color="red";

				}
				mysqli_close($conn);
			  		
			}

		?>
        <div class="left-section">
        	<div class="profile"><br><br>
        	
        		<table> 
        			<tr><td><img  style="width:50%;height: 7%; border-radius: 50%;margin-left: 70%;" src="<?php echo" $photo"; ?>"></td></tr>
        			<tr><td>Name</td><td>:</td><td><strong><?php echo" $name";?></strong></td></tr>
        			<tr><td>Mobile </td><td>:</td><td><strong><?php echo" $mobile";?></strong></td></tr>
        			<tr><td>State </td><td>:</td><td><strong><?php echo" $state";?></strong></td></tr>
        			<tr><td>City </td><td>:</td><td><strong><?php echo" $city";?></strong></td></tr>
        			<tr><td>Adharcard  </td><td>:</td><td><strong><?php echo" $adhar";?></strong></td></tr>
        			<tr><td>Status</td><td>:</td><td><strong><p style="color:<?php echo" $color";?>">
        			<?php echo"$status";?></p></strong></td></tr>
        		</table>
        	
        	</div>
        </div>

        <div class="right-section">
        	<div class="candidates-details">
        	<form action="voterchecker.php" method="post">
        		<table>
        			<tr><td><strong>1.</strong></td><td><h3>Bhartiya Janata Party (BJP)</h3></td><td><img  class="logo" src="bjp.png" style="width:110px; height:90px;margin-top: -10px;margin-left:70px;"></td><td><input type="submit" name="btn1" value="Vote"></td></tr>

        			<tr><td><strong>2.</strong></td><td><h3>Congress</h3></td><td><img  class="logo"  src="congress.png"  style="width: 80px; height: 60px;margin-top: 5px;margin-left: 75px;" ></td><td><input type="submit" name="btn2" value="Vote"></td></tr>

        			<tr><td><strong>3.</strong></td><td><h3> Janta Dal(United) JDU</h3></td><td><img  class="logo"  src="jdu.png" style="width: 80px; height: 70px; border-radius: 50% ;margin-top:-5px;margin-left: 70px;"></td><td><input type="submit" name="bnt3" value="Vote"></td></tr>

        			<tr><td><strong>4.</strong></td><td><h3> Aam Aadmi Party (AAP)</h3></td><td><img class="logo"   src="app.jpg"  style="width: 90px; height: 70px; margin-top: 0px;margin-left: 70px;border-radius: 50% ;" ></td><td><input type="submit" name="btn4" value="Vote"></td></tr>

        		</table>
        	</form>
        	</div>
        </div>


        	<?php
        		$_SESSION["adhar"]="$adhar";
        	?>
       
        		


</body>
</html>