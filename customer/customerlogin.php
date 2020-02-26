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
    <form   action="customerlogin.php" method="POST" enctype="multipart/form-data">
      
      <h1 align="center">Login Here </h1><br><br>
     

        <label>User email id :</label> <br>
        <input type="text"  placeholder="Enter User email" name="uemail" required>  <br><br>

       <label>Password : </label><br>
       <input type="Password" name="password" placeholder="Enter Password"  required> <br><br>
       <h4 style="margin-left:600px;">forget password?<a href="forgotpass.php" >  Click here </a></h4>
      <input type="submit" name="submit"  value="Sign In" style="background-color: #3333ff; color:white;"> <br>
      <h4 style="margin-left:600px;">Not a member?<a href="registationform.php">  Sign up </a></h4>
      <br>
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
   
   $query="SELECT * FROM `user` WHERE email='$uemail' AND password='$password'";
     
    $run=mysqli_query($conn,$query);
      $data=mysqli_num_rows($run);
    
       if($data===1)
  {
     
 $data=mysqli_fetch_assoc($run);
         
        $id=$data['id'];
       $_SESSION['uid']=$id;
     echo "<script>
alert('!WEL-COME YOu are login NOW you can access all page');
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