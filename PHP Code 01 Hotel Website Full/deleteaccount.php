<?php

 

	require('includes/config.php');
 	session_start();
 	$id = $_SESSION['$id'];
 	$sql = "DELETE FROM user WHERE UserID = '$id '";

 	if(mysqli_query($conn,$sql))
 	{

 		$_SESSION = array();

 		unset($_SESSION['login']);
 		session_destroy(); // destroy session
 		echo "<script>alert('Account successfully delected');
 				 window.location.href='index.php';
 	                    </script>";
 	
 	}
 	else
 	{
 	
 		 echo "<script>alert('There is an error deleting your account');
 	                    window.location.href='userprofile.php';
                    </script>";
 	
 	}
 	?>
