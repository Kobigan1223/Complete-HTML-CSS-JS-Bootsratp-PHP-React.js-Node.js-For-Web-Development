<?php
  require('includes/config.php');

  $sql = "SELECT * FROM user WHERE id != 'A' " ;
      
        $result = mysqli_query($conn,$sql);

        $arows=mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        $countusers = mysqli_num_rows($result);

  $sql2 = "SELECT * FROM roomtype " ;
      
        $result2 = mysqli_query($conn,$sql2);

        $rows2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
        
        $countrooms = mysqli_num_rows($result2);


  $sql3 = "SELECT * FROM package " ;
      
        $result3 = mysqli_query($conn,$sql3);

        $rows3=mysqli_fetch_array($result3,MYSQLI_ASSOC);
        
        $countpackages = mysqli_num_rows($result3);

$sql4 = "SELECT * FROM reservation " ;
      
        $result4 = mysqli_query($conn,$sql4);

        $rows4=mysqli_fetch_array($result4,MYSQLI_ASSOC);
        
        $countresevation = mysqli_num_rows($result4);


$sql5 = "SELECT * FROM room " ;
      
        $result5 = mysqli_query($conn,$sql5);

        $rows5=mysqli_fetch_array($result5,MYSQLI_ASSOC);
        
        $countroom = mysqli_num_rows($result5);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css27/style.css">
	<script src="assets/js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body background="assets/images/prism_abstract-1920x1080.jpg" class="fade" >
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>
  <?php
  
  
        if (empty($_SESSION['aname']))
        {
            // The username session key does not exist or it's empty.
            header('Location: adminlogin.php');
    
        }


    ?>
<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->

   <div id="content-wrap" style="padding-top:150px; padding-left:20px; ">
   
    
   

   
   <div id="content-wrap" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
         <div class="fade" id="logformbackgr" style="background-color: rgb(0,0,0,0.7);position:fixed;z-index: 1;color:white;position: absolute;">
            <h1 id="tit">ADMIN DASHBOARD</h1>
   			<hr>
            <div style="margin-top: 50px;color: black;">
  
             <div class="dash1" style="margin-left: 11%;"><h1 style="text-align: center;"><img src="assets/logos/abiword.png"><h2><?php echo $countrooms ?></h2><h3>Rooms listed</h3></div>
             <div class="dash1" style="margin-left: 41%;"><h1 style="text-align: center;"><img src="assets/logos/agenda.png"><h2><?php echo $countpackages ?></h2><h3>Packages listed</h3></div>
             <div class="dash1" style="margin-left: 71%;"><h1 style="text-align: center;"><img src="assets/logos/ktp-contacts.svg"><h2><?php echo $countusers ?></h2><h3>Registered Users</h3></div>
             <div class="dash2" style="margin-left: 11%;"><h1 style="text-align: center;"><img src="assets/logos/zanshin.png"><h3>Total Reservations</h3><h2><?php echo $countresevation ?></div>
             <div class="dash2" style="margin-left: 41%;"> <h1 style="text-align: center;"><img src="assets/logos/homebank.svg"><h3>Total Rooms</h3><h2><?php echo $countroom ?></h2></div>
             <div class="dash2" style="margin-left: 71%;"><h1 style="text-align: center;"><img src="assets/logos/ptask.png"><h3>Available Rooms</h3><h2>12</h2></div>



   			</div>
            
                  
     	          

               
     	       

     	 

            </div>

    </div>


   



   
   </div>

  

</div>

 </div>

    
<footer id="footer" style="position: absolute;top: 1079px;background-color: rgb(255,255, 255,0.3);"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
