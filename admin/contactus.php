<!DOCTYPE html>

<html>


 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>

drinking water supplies

</title>


<link rel="stylesheet" href="../css/index.css">
<style type="text/css">
    #contactus{
      width:100%;
      height:600px;
      background-image:url("water-glasses.jpg");
      background-size:100% 600px;
      
    }
     .cform{
               margin-top: 40px;
               margin-right: 30px;
               padding: 7px;
               width:400px;
               height:550px;
               box-shadow: 10px 5px 15px #595959;
              border-radius:10px;
               background-color:white;
               opacity: 0.5;
               float: right;
     }
     .cform label{
  font-size:25px;
  margin:5px;
}

    .cform input{
            border-radius:5px;
            width: 370px;
            
            font-size: 20px;
             height:40px;
             border-width: 2px;
           border-style: outset;
}
   .cform input:hover{
            border: 5px solid #66b3ff;

 }

</style>

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
                      <li class=""><a href="../customer/registationform.php" >New registation </a></li>
                      <li><a href="../customer/customerlogin.php" >Consumer login </a></li>
                      <li><a href="complain.php  ">Complain </a></li>
                      <li><a href="../customer/order.php" >Order</a> </li>
                       <li><a href="" >Delivery details</a></li>
                   
             </ul>
      </div>
                 <marquee style="color:#27AE60; font-size:20px; margin-top:5px;"> <b>! First consuumer please fill the register form first before login</b> </marquee>



<!--    **********************     header************************* -->


<!--    ********************** contactus body************************* -->

        <div id="contactus">
                
               <div class="cform">
                     <form action="contactus.php" method="GET">
                        <h1>Contact Us</h1>
                        <label>Your Name:</label><br>
                        <input type="text" name="uname" placeholder="name" required><br><br>
                        <label>Mobile No. :</label><br>
                        <input type="tel" name="pnumber" placeholder="pnumber" required><br><br>
                        <label>E-mail:</label><br>
                        <input type="email" name="uemail" placeholder="email" required><br><br>
                        <label>Subject :</label><br>
                        <input type="text" name="subject" placeholder="subject" required><br><br>
                        <label>Type your text:</label><br>
                        <input type="text" name="resion" placeholder="enter resion" required><br><br>
                        <input type="submit" name="submit" value="send" style="background-color:darkblue; color:white;">

                     </form>
               </div>



     
        </div>


<?php
  
  include("../dbconn.php");

  if(isset($_GET['submit'])){
     
      $uname=$_GET['uname'];
      $pnumber=$_GET['pnumber'];
      $uemail=$_GET['uemail'];
      $subject=$_GET['subject'];
      $resion=$_GET['resion'];



 $qry="INSERT INTO `contactrequest`( `name`, `pnumber`, `email`, `subject`, `comment`) VALUES ('$uname','$pnumber','$uemail','$subject','$resion')";

 $run = mysqli_query($conn,$qry);


    
       if(isset($run))
  {     
    $query="SELECT * FROM `contactrequest` WHERE email='$uemail'";
    $query=mysqli_query($conn,$query);
        
        
         $data=mysqli_fetch_assoc($query);

      
      
        ?>
    <script>
      alert ( 'inserted successfull your req id is '+'<?php echo $data['req_id']; ?>');
    
    </script>

   <?php
 
  }
  else{ 
  ?>
  <script>
    alert('!ohh retry');
    </script>
    <?php
  }
   
 }   



?>












<!--****************footer*********************************-->
 <div class="navbar">
          <ul>
  
            <li><a href="../admin/about.html" >About </a></li>
            <li class="active"><a href="contactus.php" >Contact us </a></li>
             
 
   
        </ul>
    

   </div>

             <h3 style="text-align:center; font-size:20px;"> product by <b> teammate<b> </h3>

         
</div>
</body>
</html>

