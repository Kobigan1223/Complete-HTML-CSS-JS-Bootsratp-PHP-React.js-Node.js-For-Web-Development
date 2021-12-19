
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script5.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body  background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg" class="fade" onload="svalidateForm();">

<?php include('includes/config.php') ?>
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>
<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->

   <div id="content-wrap" style="padding-top:150px; padding-left:20px; ">
   	  
    
  <!--
    <div class="fade" id="logformbackgr" style="display:none;width: 100%; height: 939px; left: 0;right: 0;bottom: 0; top:142px;background-color: rgb(0,0,0,0.7);position:absolute;">
     </div>
 -->

     <div class="absolute">
	
	<h2 id="indexDET" style="z-index: 1;"> "Our Guests enjoy the best of everything" </h2>

     </div>

     <div class="quickABOUT">
 
 	<ul class="quickABOUT" style="display: block">
 		<li>wide-screen TV</li>
 		<li>50% discounts for restaurent services</li>
 		<li>30% discount for 3 days+ orders</li>
 		<li>free drinks and beverages in rooms</li>
 		<li>exclusive souvenirs</li>
 	
	</ul>
     </div>
  	
 <div class="quickLOCATION" style="display: block">
 
 <ul class="quickLOCATION">
 	        <li>Free WIFI with high speed connections</li>
 	        <li>Free gym with professional help</li>
 	        <li>Special free playing area for your kids</li>
 
 	
       </ul>
</div>
<div class="mobiledet" id="mobiledet">
  <ul>
    <li>wide-screen TV</li>
    <li>50% discounts for restaurent services</li>
    <li>30% discount for 3 days+ orders</li>
    <li>free drinks and beverages in rooms</li>
    <li>exclusive souvenirs</li>
     <li>Free WIFI with high speed connections</li>
    <li>Free gym with professional help</li>
    <li>Special free playing area for your kids</li>
  </ul>
  <div style="float:right; position:absolute;right:1%; top:20px; " id="footerimages">
  <a href="#"><img src="assets/logos/iconfinder_Vector-2_4747497.png" height="30px" width="40px" style="margin-right:10px;"></a>
  </div>
  <div style="float:right; position:absolute;right:1%; top:60px; " id="footerimages">
  <a href="#"><img src="assets/logos/iconfinder_Vector-3_4747496.png" height="30px" width="40px" style="margin-right:10px;"></a>
  </div>
  <div style="float:right; position:absolute;right:1%; top:100px; " id="footerimages"> 
  <a href="#"><img src="assets/logos/iconfinder_Vector-1_4747498.png" height="30px" width="40px" style="margin-right:10px;"></a>
  </div>
  <div style="float:right; position:absolute;right:3%; top:120px; " id="footerimages"> 
  <h6>LUSTRIO INN</h6>
  </div>

</div>    


</div>
 
<footer id="footer" style="position: absolute;top: 1079px;background-color: rgb(255,255,255,0.9);"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
