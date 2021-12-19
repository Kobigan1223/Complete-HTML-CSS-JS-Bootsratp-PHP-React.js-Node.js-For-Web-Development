
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script5.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body  background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg" >
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->

   <div id="content-wrap" style="padding-top:150px; padding-left:20px; ">
   	  
    
  
    <div class="fade" id="logformbackgr2" style="width: 100%; height: 939px; left: 0;right: 0;bottom: 0; background-color: rgb(0,0,0,0.7);position:fixed;" class="fade">
     </div>
 

     <div class="absolute" style="position: fixed;">
	
	<h2 id="indexDET" style="z-index: 1;" class="fade"> "Search anything Here" </h2>

     </div>

     
  	
 
    
<div>
	<form name="searhform" action="searchrooms .php" method="POST">
		<input type="text" name="uname" value="search here..." autofocus autocomplete="off" id="searchID" >
		


	</form>
</div>

</div>
 
<footer id="footer" style="position: absolute;top: 1079px;background-color: rgb(255,255,255,0.9);"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
