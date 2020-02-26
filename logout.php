<?php
session_start();


session_destroy();
 echo "<script>
alert('YOU ARE logout ! thanks for login');
window.location.href='watersuplies.php';
</script>"; 
//header('location:http://localhost/project/watersuplies.php');

?>