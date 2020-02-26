<?php
 session_start();
			if(isset( $_SESSION['uid'])){
				
			echo '';
			}
			else{

	header('location:../login.php');
	
}
			
?>

<?php

include("../dbconn.php");

$id=$_SESSION['uid'];

$qry="SELECT * FROM `user` WHERE `id`='$id'";
$run=mysqli_query($conn,$qry);

$data=mysqli_fetch_assoc($run);

?>
<div style="height: 100%; width: 100%; background-image: url(../webimg/bgimage.jpg);
background-repeat:cover;">
<form method="POST" action="updateprofile.php" enctype="multipart/form-data">


<table align="center" style="height: 80%; width:90%; margin-top:40px; font-size: 35px;" border="1">

  
<tr >
	   <td>NAME</td><td><input style="border: none; font-size: 30px;" type="text" name="name" value="<?php echo $data['name'] ?>" required></td>
 </tr>
 <tr>
	   <td>Address</td><td><input style="border: none; font-size: 30px;" type="text" name="address" value="<?php echo $data['address'] ?>" required></td>
 </tr>
 <tr>
	   <td>CONTACT NUMBER</td><td><input style="border: none; font-size: 30px;" maxlength="10" type="phone" name="pnumber"  value="<?php echo $data['pnumber'] ?>" required></td>
 </tr>

 <tr>
	   <td>IMAGE</td><td><input style="border: none; font-size: 30px;" type="file" name="pimg" value="<?php echo $data['img'] ?>" required></td>
 </tr>
 <tr bgcolor="green">
	   <td colspan="2" align="center">
	   <input type="hidden" name="sid" value="<?php echo $id; ?>">
	   <input style="border: none; font-size: 30px; color: black;" type="submit" name="submit" value="submit"required></td>
 </tr>
</table>
</form>
</div>
<?php
if(isset($_POST['submit'])){
	$id=$_POST['sid'];
	$name=$_POST['name'];
   $address=$_POST['address'];
   $pnumber=$_POST['pnumber'];
   $imgname=$_FILES['pimg']['name'];
   $tempname=$_FILES['pimg']['tmp_name'];
     
     move_uploaded_file($tempname,"../dataimg/$imgname");
  
  $qry="UPDATE `user` SET `name`='$name',`address`='$address',`pnumber`='$pnumber',`img`='$imgname' WHERE id='$id'";
    
     $run=mysqli_query($conn,$qry);
 
    if($run)
  {
     
        echo "<script>
alert('profile updated success');
window.location.href='profile.php';
</script>"; 
 
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