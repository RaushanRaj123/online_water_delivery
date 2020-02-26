<?php
include("../dbconn.php");
session_start();
if(isset($_SESSION['uid']))
{
  
    
 
}
  else{
     
     header('location:../watersuplies.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>order</title>
	<link rel="stylesheet" type="text/css" href="../css/orderstyle.css">
	<style>
    table{
    	border:1px solid;
         border-collapse: collapse;
         width: 100%;
        margin: auto;
        padding: auto;
        margin-top: 100px;
    }
    tr td{
    	text-align: left;
        border:1px solid;
    	padding: 10px;
    	font-size: 20px;
    }

	</style>

</head>
<body>
	<h1 style="background-color:red; height: 50px;
	width: 200px; margin: 10px; border-radius: 5px; text-align: center;
	"><a href="http://localhost/project/watersuplies.php" style="text-decoration: none;">GO BACK</a></h1>
     <h1 align="center">My Orders</h1>
     <div id="orderform">
          <form action="deleverydetails.php" method="POST">
          	<label>starting Date</label>
           <input type="date" name="orderdate1"   required><br>
           <label>End date</label>
           <input type="date" name="orderdate2"   required><br>
            <input type="submit" name="submit" value="Get Details"  style="background-color:blue; color: white;">
            
          </form>


     </div>


 <table>
	
        <tr style="font-size: 15px; font-weight: bold;">
        	<td>NO</td>
        	<td>order id</td>
            <td>Area code</td>
            <td>type</td>
            <td>water type</td>
            <td>Order date</td>
</tr>




<?php
if(isset($_POST['submit'])){

$date1=$_POST['orderdate1'];
$date2=$_POST['orderdate2'];
$uid=$_SESSION['uid'];

$query="SELECT * FROM `order` WHERE order_date>='$date1' AND order_date<='$date2' AND customer_id = '$uid'";

$run=mysqli_query($conn,$query);

if(isset($run)){

	   if(mysqli_num_rows($run)<1){
		   
		   ?>
		   <tr >
		   <td colspan="6" style="text-align: center;"> no data found</td>
		</tr>
		<?php
		  
		   
	   }
	   else{
		    $count=0;
			
			while($data=mysqli_fetch_assoc($run))
{$count++;
?>
      <tr>
        	<td><?php echo $count; ?></td>
        	<td><?php echo $data['order_id']; ?></td>
            <td><?php echo $data['area_code']; ?></td>
            <td><?php echo $data['type']; ?></td>
            <td><?php echo $data['water_type']; ?></td>
            <td><?php echo $data['order_date']; ?></td>
</tr>

      
<?php
}
}
}
else{
?>
<script>
    alert('!ohh check your user and password');
    //window.open('customerlogin.php','_self');
    </script>
<?php
}
}

?>
</table>
</body>
</html>