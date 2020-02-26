 <?php

session_start();

if(isset($_SESSION['uid']))
{
 
  header('location:../watersuplies.php');
}
?>

<!DOCTYPE html>

<html>



<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>

       drinking water supplies

</title>

<style type="text/css">
      input{
           border-width: 2px;
           border-style: outset;
    
}


</style>
         <link rel="stylesheet" href="../css/index.css">

         <link rel="stylesheet" href="../css/registrationformstyle.css">
</head>

<body>
 <div id="wraper">
   
   
   
   
      <div class="header">
         <img src="../weblogo.png" >
        <h1>  fresh water supply home delivery </h1>
  
          <marquee> <b>life start with water   &nbsp    &nbsp   &nbsp  &nbsp! Save Water Save Your Life  </b></marquee>
       </div>  

         <div class="navbar">
             <ul>
                      
                      <li><a href="../watersuplies.php">Home </a></li>
                      <li><a href="registationform.php" >New registation </a></li>
                      <li class="active"><a href="customerlogin.php" >Consumer login </a></li>
                      <li><a href="../admin/complain.php" >Complain </a></li>
                      <li><a href="order.php">Order</a> </li>
                       <li><a href="" >Delivery details</a></li>
                   </div>
             </ul>
      </div>
                 <marquee style="color:#27AE60; font-size:20px; margin-top:5px;"> <b>! First consuumer please fill the register form first before login</b> </marquee>


<!--********* header ********************-->
 


     

 <div class="rblock" style="background-color: white; opacity: 0.8;">
    <form   action="forgotpass.php" method="POST" enctype="multipart/form-data">
      
      <h1 align="center">Update Password form</h1><br><br>
     

        <label>User email id :</label> <br>
        <input type="text"  placeholder="Enter User email" name="uemail" required>  <br><br>

       <label>Enter New Password : </label><br>
       <input type="Password" name="password" placeholder="Enter New Password"  required> <br><br>
       
      <input type="submit" name="submit"  value="forget" style="background-color: #3333ff; color:white;"> <br>
      
       <br>
           
                  

           
   
    </form>
</div>
<br>
       <br>

<?php

include("../dbconn.php");

if(isset($_POST['submit'])){

   $uemail=$_POST['uemail'];
   $password=$_POST['password'];
   
   $query="UPDATE `user` SET `password`='$password' WHERE email='$uemail'";
     
    $run=mysqli_query($conn,$query);
      
    
       if(isset($run))
  {
     
 
     echo "<script>
alert('!WEL-COME YOur password forgeted now you can login with new password');
window.location.href='../watersuplies.php';
</script>";
  
  
      
  }
  else{ 
  ?>
  <script>
    alert('!ohh check your user and password');
    window.open('customerlogin.php','_self');
    </script>
    <?php
  }
   
   } 
?>
<!--********* footer********************-->

<?php
include("../footer.html");

?>



</body>

</html>