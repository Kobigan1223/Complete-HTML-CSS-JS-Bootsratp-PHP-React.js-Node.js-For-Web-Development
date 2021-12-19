<?php
  
  
  
  
  




  require('includes/config.php');

  $sql = 'SELECT  * FROM reservation';
  
  $result = mysqli_query($conn, $sql);

  $resevations = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  mysqli_free_result($result);
 
  mysqli_close($conn);

  //print_r($packages);
  

?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg" class="fade" >
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>
 <?php
  
  
  
  
  




  require('includes/config.php');
  
  $x =$_SESSION['uid'];
  $sql = "SELECT  * FROM reservation WHERE id = '$x'";
  
  $result = mysqli_query($conn, $sql);

  $resevations = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  mysqli_free_result($result);
 
  mysqli_close($conn);

  //print_r($packages);
  

?>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->

   <div id="content-wrap" style="padding-top:150px; padding-left:20px; ">
   
    
 
   
   <div id="content-wrap" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr" style="width: 100%; height: 1495px; position: absolute; left: 0;right: 0;bottom: 0;background-color: rgb(0,0,0,0.5);position:absolute;z-index: 1; ">
            <h1 id="tit"> My Reservations </h1>
   			    <hr>
            <div style="margin-top: 50px;color: black;">
  
            <div class="reguser" style="margin-left: 11%;background-color: rgb(255,255,255,0.7);height: auto;"><h1 style="text-align: center;">
            <table  class="tab" border="1" style="color: black;width: 96%;background-color: rgb(0,0,0,0.5);margin-left: 2%;border-radius: 10px;font-family: monospace;font-weight: 1;font-size: 20px;">
               <tr>
                <th colspan="6" style="background-color: rgb(255,255,255,0.9);border-top-left-radius: 10px;border-top-right-radius: 10px;">Reservations</th>
              

              </tr>
              <tr style="background-color: rgb(0,0,0,0.5);color: white;">
                <th>Reservation ID</th>
                
                
                <th>Check In Date</th>
                <th>Check Out Date</th>
              
                <th>Amount</th>
                  <th>Action</th>
              </tr>
              <?php  foreach($resevations as $resevation) { ?>

                <tr>
                <td><?php echo htmlspecialchars($resevation['id']);?></td>
               
                <td><?php echo htmlspecialchars($resevation['CheckInDate']);?></td>
                <td><?php echo htmlspecialchars($resevation['CheckOutDate']);?></td>
                <td><?php echo htmlspecialchars($resevation['TotalAmount']);?></td>
                              
                <td width="400px"><a href="deletereservation.php?resid=<?php echo $resevation['id'];?>"><button id="tab2" style="margin-left: 10px;">cancel</button></a></td>

              </tr>




              <?php } ?>

            </table>


            </div>
             


   			</div>
            
                  
     	          

               
     	       

     	 

            </div>

    </div>


   



   
   </div>

  

</div>

 </div>

    
<footer id="footer" style="position: absolute;top: 1479px;background-color: rgb(255,255, 255,0.7);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
