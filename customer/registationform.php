
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
                      <li class="active"><a href="registationform.php" >New registation </a></li>
                      <li><a href="customerlogin.php" >Consumer login </a></li>
                      <li><a href="../admin/complain.php" >Complain </a></li>
                      <li><a href="order.php" >Order</a> </li>
                       <li><a href="" >Delivery details</a></li>
                   </div>
             </ul>
      </div>
                 <marquee style="color:#27AE60; font-size:20px; margin-top:5px;"> <b>! First consuumer please fill the register form first before login</b> </marquee>



<!--    **********************     header************************* -->

  
  <div class="rblock">
    <form   action="registationform.php" method="POST" enctype="multipart/form-data">
      
      <h1 align="center">Registration Form </h1><br><br>
     

        <label>User Name :</label> <br>
        <input type="text"  placeholder="Enter Username" name="uname" required>  <br><br>

       <label>Create Password : </label><br>
       <input type="Password" name="password" placeholder="create Password"  required> <br><br>

       <label>E-mail:</label><br>
       <input type="email" name="email" placeholder="Enter your E-mail" required><br><br>
 
       <label>Address :</label><br>
       <input type="text" name="address" placeholder="Enter Your address" required><br><br>

       <label>Phone Number :</label><br>
       <input type="tel" name="pnumber" placeholder="example 91xxxxxxxxxx" minlength="10" maxlength="10" required><br><br>

       <label>Choose profile pic:</label><br>
       <input type="file" name="pimg"><br><br>
      
       <input type="checkbox" name="condition" value="true" style="margin:10px; width:auto;" required><span><b>I have read and agree to <a href="  ">term & condition </a></b></span><br>
 
      <input type="submit" name="submit"  value="signup" style="background-color: #3333ff;"> <br>
      <h4 style="margin-left:600px;">Already have login<a href="customerlogin.php" >  Sign In </a></h4>
      <br>
       <br>
           
                  

           
   
    </form>
</div><br>
       <br>
  





<?php
    include("../footer.html");
     include("../dbconn.php");

   if(isset($_POST['submit'])){

   $uname=$_POST['uname'];
   $password=$_POST['password'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $pnumber=$_POST['pnumber'];
   $condition=$_POST['condition'];
   $imgname=$_FILES['pimg']['name'];
   $tempname=$_FILES['pimg']['tmp_name'];
     
     
     move_uploaded_file($tempname,"../dataimg/$imgname");
  
  $qry="INSERT INTO `user`(`name`, `password`, `email`, `address`, `pnumber`, `condition`, `img`) VALUES ('$uname','$password','$email','$address','$pnumber','$condition','$imgname')";
    
     $run=mysqli_query($conn,$qry);
 
    if($run)
  {
     
        ?>
    <script>
    alert('data inserted successfully');
    </script>

   <?php
 
  }
  else
  {
    ?>
    <script>
    alert("error");
    </script>
    <?php
  }


 }

?>


</body>

</html>