


<html>
	<head>
		<link href="registration.css" rel="stylesheet" type="text/css">
	</head>
  <style>

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
  margin-right:25%;
  color:white;
  float:right;
  
}
.voteImg{
  width:8%;
  height:8%;
  position:absolute;
  top:5%;
}
input{
  padding:13px;
  margin-top:0px;
}
.alert{
  background-color: red;
  padding: 5px;
  color: black;
  margin: auto;
  text-align: center;
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
   




 
  <div class="formoutline">
   	<h3 class ="Registration">Registration</h3>


<!--checking for both password same  or not -->
              <?php

                  if(@$_GET['msg']==true)
                  {
                    $message=$_GET['msg'];
                  
              ?>

                    <div class ="alert"><?php echo" $message"; ?></div>
              <?php
                  }

              ?>

                <?php

                  if(@$_GET['msg2']==true)
                  {
                    $message=$_GET['msg2'];
                  
              ?>

                    <div class ="alert"><?php echo" $message"; ?></div>
              <?php
                  }

              ?>




   	    <div class ="form">
   		<form  action="project.php" method="post">

   			<table>
   				<tr ><td><input type="text" name="name" placeholder="Name*" required=""></td>
   				      <td><input type="tel" name="mobile" placeholder="Mobile"></td></tr>
   				 <tr><td><input type="password" name="pass" placeholder="Password*" required="" ></td>
   					<td><input type="password" name="confirmpass" placeholder="Confirm password*" required=""></td></tr>

               
   				<tr><td><input type="text" name="state" placeholder="State"></td>
   					<td><input type="text" name="city" placeholder="City"></td></tr>
   				

   				<tr><td><p class ="dat"><input type="text" name="adharcard" placeholder="Adhar Card*" required=""></p></td>
   					<td><h3><input type="text" name="address" placeholder="Address"></h3></td></tr>
   				<tr><td><input type="file"  name="photo" placeholder="Upload Image"></td></tr>	

   			</table>
   			<input  class ="btn" type="submit" name="register" value="Register">
   		</form>
      	</div>

   	</div>

</body>
</html>
