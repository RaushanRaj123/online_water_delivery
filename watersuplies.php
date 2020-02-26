<?php
include("dbconn.php");
session_start();
/*if(isset($_SESSION['uid'])){
$id=$_SESSION['uid'];

$query="SELECT `name`, `img` FROM `user` WHERE id='$id'";
$run=mysqli_query($conn,$query);
if(isset($run)){

$data=mysqli_fetch_assoc($run);
?>
<div style="width: 100%; height:auto; background-color:#001a00; padding:0%; margin:0%; ">
<table style="width:20%; color:white;">
  <tr>
    <th><img src="dataimg/<?php echo $data['img']; ?>" width="120px;" height="100px;" style="border-radius: 50%; border:1px solid white"></th>
    <th style="font-size: 20px;"><?php echo $data['name']; ?></th>
</tr>
</table>
</div>

<?php

}

}*/
?>

<!DOCTYPE html>

<html>



<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>

drinking water supplies

</title>

<link rel="stylesheet"  href="css/index.css">
<link rel="stylesheet"   href="font/css/font-awesome.min.css">

</head>
 
<body>
 <div id="wraper">
	 
      <div class="header">
         <img src="weblogo.png" >
        <div><h1>  Fresh water supply home delivery </h1></div>
        <?php
        if(isset($_SESSION['uid'])){
$id=$_SESSION['uid'];

$query="SELECT `name`, `img` FROM `user` WHERE id='$id'";
$run=mysqli_query($conn,$query);
if(isset($run)){

$data=mysqli_fetch_assoc($run);
?>
<div style="float: right; padding: 10px;">
<table style="color:white;">
  <tr>
    <th><img src="dataimg/<?php echo $data['img']; ?>" style="border-radius: 50%; border:1px solid white; width:120px; height:120px; float: right;"></th>
    
</tr>
<tr><th style="color:#00e6b8; font-size: 30px; padding-top: 8px;">Welcome <?php echo $data['name']; ?>!</th></tr>
</table>
</div>
<?php
}}
?>
  
          <marquee> <b>life start with water   &nbsp    &nbsp   &nbsp  &nbsp! Save Water Save Your Life  </b></marquee>
       </div> 

         <div class="navbar">
             <ul>
                    <div id="myDIV">    

                     <li  class="btn active"><a href="watersuplies.php" >Home </a></li>
                     <li  class="btn"><a  href="#service-pannel" >Our Services</a></li>
	                   <li  class="btn"><a href="customer/registationform.php">New registation </a></li>
                     <li  class="btn"><a href="customer/customerlogin.php">Consumer login </a></li>
                      <li  class="btn"><a  href="customer/profile.php" >Profile</a></li>
                     
                      <li class="btn"><a href="admin/complain.php" >Complain</a></li>
                      <li  class="btn"><a href="customer/order.php">Order</a></li>
     	               <li  class="btn"><a  href="customer/deleverydetails.php" >Delivery details</a></li>
					           <li  class="btn"><a  href="#bookmark" >How it Work</a></li>
                      <li  class="btn"><a href="logout.php">Log out </a></li>
                     </div>
                    
             </ul>
           
		  </div>
                 <marquee style="color:#27AE60; font-size:20px; margin-top:5px;"> <b>! First consuumer please fill the register form first before login</b> </marquee>


        <div class="wrap">

                   <div class="left-pannel">

                      <h2> Notification</h2>
                         <marquee direction = "up"> Online Payment Currently not <b>Available</b><br><br><br>

                          Sunday Timing: 10:00 AM to  2:00 PM<br><br><br>
                        Monday to Friday <br><br><br>
                          Saturday Closed<br><br><br>
                          More discount on bulk order <br><br><br>
                          Save water drink beer</marquee><br><br><br>
                         

                   </div>


           <!-- Slideshow container -->
                   <div class="slideshow-container">

                           <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                             <div class="numbertext">1 / 4</div>
                                <img src="webimg/img1.jpeg" style="width:100%; height:600px;">
                                 <div class="text"><b>Best Water Purifiers for the home in India</b></div>
                            </div>

                             <div class="mySlides fade">
                              <div class="numbertext">2 /4</div>
                              <img src="webimg/img2.jpeg" style="width:100%; height:600px;">
                              <div class="text"><b>– Thousands Have Lived Without Love, Not One Without Water</b></div>
                            </div>

                               <div class="mySlides fade">
                                  <div class="numbertext">3 / 4</div>
                                   <img src="webimg/img3.jpeg" style="width:100%; height:600px;">
                                    <div class="text"><b>:)Improve Your Water. Improve Your Life.</b></div>
                               </div>

                                 <div class="mySlides fade">
                                      <div class="numbertext">4 / 4</div>
                                       <img src="webimg/img4.jpg" style="width:100%; height:600px;">
                                          <div class="text"><b> “Nothing is softer or more flexible than water, yet nothing can resist it.”</b></div>
                                </div>
  
 
  
                       </div>

             </div>
              
             
          <div id="bookmark" class="howitwork">
                    <p align="center" style="font-family:  ; font-size:30px; color:#3366ff; text-decoration:underline solid green; padding:10px;"> How it Work <p>
                   <br> <br><br><br>
               <div>

                   <div class="register">
					           <div class="icon">
                           <i class="fa fa-user-plus fa-5x"></i>
						         </div>
                         <h4 style="margin-left:170px; font-size:20px;">Register</h4><br><br>
                          <p style="font-size:20px; margin:20px;">Create your own account with your some details. It is hassle-free registration process.</p>
                    </div>

                       <div class="login">
                            <div class="icon">
                           <i class="fa fa-user fa-5x"></i>
						               </div>
						              <h4 style="margin-left:170px; font-size:20px;">Log In</h4><br><br>
                          <p style="font-size:20px; margin:20px;">Simply login with your Email/Username and Password.</p>


                       </div>

                      <div class="login">
                           <div class="icon">
                           <i class="fa fa-product-hunt fa-5x"></i>
						               </div>
                           <h4 style="margin-left:160px; font-size:20px;">choose product</h4><br><br>
                           <p style="font-size:20px; margin:20px;">Choose your preferred brand & water container like ISI Mark Purified water, Bisleri, Kinley etc.</p>

                       </div>
                 </div>

                  <div>
                                   
                      <div class="register">
					              <div class="icon">
                           <i class="fa fa-cart-plus fa-5x"></i>
						           </div>
                         <h4 style="margin-left:140px; font-size:20px;">Order Your Product</h4><br><br>
                          <p style="font-size:20px; margin:20px;">Place your order with freshwater.com</p>
                       
					   
				             </div> 
                      <div class="login">
                            <div class="icon">
                           <i class="fa fa-inr fa-5x"></i>
						               </div>
						              <h4 style="margin-left:170px; font-size:20px;">Payment</h4><br>
                          <p style="font-size:20px; margin:10px;">Online payment using multiple payment options with either cash on delivery or with any online payment system.</p>


                       </div>
                      <div class="login">

                             <div class="icon">
                           <i class="fa fa-motorcycle fa-5x"></i>
						               </div>
						               <h4 style="margin-left:170px; font-size:20px;">Delivery</h4><br><br>
                          <p style="font-size:18px; margin:5px;">You do not have to go pick up bottled water - we will bring it to you. The Water-Man will be delivered at your door step based on your preferred address.</p>


                       </div>

                  </div>



              </div>
          
                 <div>
                       
                       <div id="service-pannel">
                               <div class="servicesheading">
                                    <h2>Our Services</h2>
                               </div>
                         
                                <div class="servicesblock">
                                      <div class="icon">
                                        <i class="fa fa-plane fa-5x"></i>
                                      </div>

                                    <h4 style="margin-left:140px; font-size:20px; color:white;">Instant Water</h4><br><br>
                                     <p style="font-size:20px; margin:20px; color:white;">You are short of water and need it immediately? Do not worry, just order from freshwater.Com and fill the requisite details, make the payment and we will deliver at your door step within 2-4 hours.</p>


                                </div>

                                  <div class="servicesblock">
                                    <div class="icon">
                                        <i class="fa fa-truck fa-5x"></i>
                                     </div>
                                      <h4 style="margin-left:140px; font-size:20px; color:white;">Scheduled Water</h4><br><br>
                                     <p style="font-size:20px; margin:20px; color:white;">Tired of booking ordering daily!! Just plan for the whole month once and sit aside. freshwater.Com will ensure the timely delivery of your scheduled order.</p>
                                  </div>

                                   <div class="servicesblock">
                                     <div class="icon">
                                        <i class="fa fa-cart-plus fa-5x"></i>
                                     </div>

                                     <h4 style="margin-left:140px; font-size:20px; color:white;">Bulk Order</h4><br><br>
                                      <p style="font-size:20px; margin:20px; color:white;">Ohhh!! You are planning for the event or party!! No need to worry for drinking water!! freshwater.Com is here to serve you!! You can book for your events and parties (conference, birthday party, wedding party, corporate events, seminars etc.)</p>
                                   </div>

                        </div>
</div>

                 

  
                     <div class="navbar">
                         <ul>
	
                          <li><a href="admin/about.html" >About </a></li>
	                       <li><a href="admin/contactus.php" >Contact us </a></li>
                          
                         </ul>  

                       </div>

               <h3 style="text-align:center; font-size:20px;"> product by <b> teammate<b> </h3>

				 


  




       

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}





// Add active class to the current button (highlight it)
/*var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
*/




</script>




<iframe
    allow="microphone;"
    width="100%"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/034d630e-e7ac-40a6-937b-5a86cde50101">
</iframe>
</div>
</body>


</html>
