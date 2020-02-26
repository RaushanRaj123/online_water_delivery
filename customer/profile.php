<?php
include("../dbconn.php");

 session_start();

if(isset($_SESSION['uid'])){

}
else{
    echo "<script>
alert('YOU ARE NOT LOGIN ! PLEASE LOGIN FIRST');
window.location.href='customerlogin.php';
</script>"; 
	
}
 $id=$_SESSION['uid'];

 ?>
<!DOCTYPE html>
<html>

<head>
<title>user profile</title>
</head>
<style>
button{
	height: 50px;
	margin-left: 20px;
	margin-top: 10px;
	width:auto;
}
 td{

	font-size: 30px;
}
</style>
	
</style>
<body bgcolor="lightblue" >
 <div>
 	<button><a href="../watersuplies.php" style="text-decoration:none; font-size:25px;">HOME</a></button>
 		

 	<?php
    $query="SELECT * FROM `user` WHERE id='$id'";
    $run=mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0)
		
		{
			
			$data=mysqli_fetch_assoc($run);
			?>
			<table style="width:90%; margin:auto; margin-top : 10px;  border-collapse: collapse; padding: auto; background-image:url(../webimg/tableimg.jpg); background-size:cover; border:1px solid black;">

			<tr >
				<td colspan="3" align="center">info</td>
			</tr>
			<tr>
				
            <td rowspan="5"><img src="../dataimg/<?php echo $data['img'];?>" style="width:400px; height:500px"></td>
            <td>ID</td>
			<td><?php echo $data['id']; ?></td>
			
			</tr>
			<tr>
			<td>NAME</td>
			<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<td>E-MAIL</td>
			<td><?php echo $data['email']; ?> </td>
			</tr>
			
			<tr>
				<td>ADDRESS</td>
			<td><?php echo $data['address']; ?></td>
			</tr>
			<tr>
				<td>MOBILE NUMBER</td>
			<td><?php echo $data['pnumber']; ?></td>
			</tr>
		
				
			</table>

			<?php
		}
     else
	 {
		 
		 echo "<script> alert('no data found');</script>";
	 }
	
	 
 	?>
<div align="center" >
 <button align="center" style="font-size: 25px;" ><a href="updateprofile.php" style="text-decoration: none;"><i>Edit Profile</i></a></button>
</div>




 </div>	
</body>
</html>
