<?php

	 
	
	

	require('includes/config.php');
 	
 	$id = $_GET['resid'];
 	$sql = "DELETE FROM reservation WHERE ResID = '$id '";

 	if(mysqli_query($conn,$sql))
 	{

 		
 		echo "<script>alert('Reservation successfully delected');
 				 window.location.href='resevations.php';
 	                    </script>";
 	
 	}
 	else
 	{
 	
 		 echo "<script>alert('There is an error deleting your Reservation');
 	                    window.location.href='resevations.php';
                    </script>";
 	
 	}



	 
 	?>
