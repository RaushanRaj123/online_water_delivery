<?php
session_start();

if(isset($_SESSION['uid']))
{
	
  
}
  else{
  	

     echo "<script>
alert('YOU ARE NOT LOGIN ! PLEASE LOGIN FIRST');
window.location.href='../customer/customerlogin.php';
</script>";
  }
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>complain</title>
	<style type="text/css" media="screen">
		#complainform{
			padding: 10px;
			margin:auto;
			width: 50%;
			height:auto;
			
		}
		#complainform input{
			border-radius:5px;
            width:90%;
            margin: 10px;
            font-size: 20px;
             height:40px;
             border-width: 5px;
          
		}
		#complainform input:hover{
			border-color: green;
			border-width: 8px;
		}
	</style>
</head>
<body bgcolor="#d279a6">
	<button style=" width:300px; text-align: center; height: auto; border-radius:5px;" ><a href="http://localhost/project/watersuplies.php" style="text-decoration: none; font-size:25px; color:green;"><b> GO TO HOME PAGE</b></a></button>

	<div id="complainform">
		
		<h1 align="center"> Complain form</h1>
	     <form action="complain.php" method="GET">
	     	<input type="text" name="uid" value="<?php echo $_SESSION['uid']; ?>" hidden >
		    <input type="text" name="complain" style="height: 200px;">
		    <input type="submit" name="submit" value="send" style="background-color:blue; color: white;">
	
	     </form>

    </div>

</body>
</html>



<?php
  
  include("../dbconn.php");

  if(isset($_GET['submit'])){
          
      $complain=$_GET['complain'];
      $uid=$_GET['uid'];



 $qry="INSERT INTO `complain`(`uid`, `compldetails`) VALUES ('$uid','$complain')";

 $run = mysqli_query($conn,$qry);


    
       if(isset($run))
  {     
     $query="SELECT * FROM `complain` where uid='$uid'";
       $result=mysqli_query($conn,$query);
       $data=mysqli_fetch_assoc($result);
        ?>
        <script>
alert('your request id is'+'<?php echo $data['id']; ?>'+'! please remember ');
window.location.href='../watersuplies.php';
</script>";
 <?php
  }
  else{ 
  ?>
  <script>
    alert('!ohh retry something went wrong');
    </script>
    <?php
  }
   
 }   



?>
