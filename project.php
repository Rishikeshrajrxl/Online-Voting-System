<?php


  $host="localhost:3306";
  $user="root";
  $pass="";
  $db="online_voting_system";
  $conn=mysqli_connect($host,$user,$pass,$db);

  //storing the filed data into variables

  $name=$_POST['name'];
  $phone=$_POST['mobile'];
  $password=$_POST['pass'];
  $confirm=$_POST['confirmpass'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $adharcard=$_POST['adharcard'];
  $address=$_POST['address'];
  $photo=$_POST['photo'];



  if(isset($_POST['register']))
  {
         if($password!=$confirm)
            {
              header('location:registration.php?msg=Password does not natch');
           }
         else
            {

             if(!$conn)
                  {
                  die('Page Not found: connection failed');
                   }
             else
               {
                    $sql1="select * from registration_detail where adharcard='$adharcard' ";
                    $result=mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($result)==1)
                    {
                        header('location:registration.php?msg2=Already registered ');
                    }
                    else
                    {
                      $sql="insert into registration_detail values('$name','$phone','$password','$state','$city','$adharcard','$address','$photo')";
 
                        if(mysqli_query($conn,$sql))
                         {
                          header('Location:login.php');
                         }
                        else{
                            echo"problem ".mysqli_connect_error();
                            }

                    }
    
                }
            }
  }
 mysqli_close($conn);

?>