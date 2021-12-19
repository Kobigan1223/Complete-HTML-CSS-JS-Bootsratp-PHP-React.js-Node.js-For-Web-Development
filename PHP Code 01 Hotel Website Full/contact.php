
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script>
		function validateForm(){
			var fname = document.forms["myform"]["name"].value;
			var phno = document.forms["myform"]["phone"].value;
			if(fname == "")
			{
				 alert("Name must be filled out");
                 return false;
			}
			else if(phno == "")
			{
				alert("phone number must be filled out");
				return false;
			}
			else{
				alert( "Recieved your message" );
			}
			
		}
	
	</script>
	
	<style>
		.transparent{align:center;background:rgb(0,0,0);background:rgba(0,0,0,0.5);color:#f1f1f1;width:100%;padding:10px;-wessbkit-align-content:center;}
	</style>
	
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg" >
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV2"> <?php include('includes/nevigation.php');?> </nev>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->
   <div id="content-wrap" style="padding-top:150px; padding-left:20px;padding-right:20px;">
   
   <div class = "transparent" >
     <h3 style = "color:#e4ede6;font-size:50px;">CONTACT US</h3>
		
		<p id = "para" style = "color:white;font-size:30px;">We are here to help & answer any matter regarding our services you might have.We look forward hearing from you. </p>
		
		<h2 style = "color:white;">For Special Inquiries</h2>
		
		<form name = "myform" method = "post" onsubmit="return validateForm()">
		
			<input type="text" id="name" name="firstname" placeholder="Your name.."  ><br><br>

			<input type="text" id="phone" name="Phoneno" placeholder="Your phone number.."><br><br>
			
			<input type = "email" id = "email" placeholder="Enter your email.."><br><br>
			
			<textarea rows = "5" columns = "10" placeholder="Your message.." ></textarea><br><br>
			
			<input id = "submit" type="submit" value="Send" >

			
		
		</form>
		</div>
    
   </div>
    
   <footer id="footer" style="position: absolute;top: 1051px;background-color: rgb(255,255,255,0.9);"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
