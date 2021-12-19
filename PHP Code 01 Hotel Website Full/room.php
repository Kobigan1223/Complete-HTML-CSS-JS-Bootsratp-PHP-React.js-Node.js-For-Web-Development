
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body  background="assets/images/11568168178_tmp_bricks-brickwall-brickwork-276514.jpg" style="background-repeat: repeat-y;" >
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV2"> <?php include('includes/nevigation.php');?> </nev>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" class="fade" >
  
   <!--PAGE CONTENT-->
						
   <div id="content-wrap" style="padding-top:150px; padding-left:20px;  ">
   
	
   		<div class="fade" id="logformbackgr" style="background-color: rgb(0,0,0,0.7);position:absolute;z-index: 0;color:white;height: 4400px;">
   			<h1 style="text-align: center;color:rgb(255,255,255,0.7);font-weight: normal;font-family: monospace;font-size: 35px;margin-top: 20px;margin-bottom: 0px;">ROOMS</h1>
   			    <hr style="width: 86%;">
		<div style = "position: absolute; top : -70px; left : 0; right : 0; " ><!--to send down the whole content of the intro of rooms-->
	 
		<!--Single rooms-->
		<img class = "type" src = "assets/images/single.gif"  style="position:absolute; border-radius:15px; ;top: 200px; left: 100px; height:300px; width:600px;" >
		<h3 style = "position : absolute; top : 200px; left : 800px; font-size : 30px; color : white;" >1. Single Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 255px; left : 800px; color : white;"  > 
			<li>A room assigned to one person.</li>
			<li>May have a single bed.</li>
			<li>Air conditioned.</li>
			<li>The room size or area of Single Rooms are generally between 37 m²<br> to 45 m².</li>
			<li><b>15 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 400px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
		
		
		<!--Double rooms-->
		<img class = "type" src = "assets/images/double.gif"  style="border-radius:15px;position:absolute; top: 600px; left: 100px; height:300px; width:600px; " >
		<h3 style = "position : absolute; top : 600px; left : 800px; font-size : 30px; color : white;" >2. Double Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 655px; left : 800px; color : white;"  > 
			<li>A room assigned to two people.</li> 
			<li>May have a double bed.</li>
			<li>Air conditioned.</li>
			<li>The room size or area of Double Rooms are generally between 40 m² <br>to 45 m².</li>
			<li><b>10 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 800px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
	
		
		<!--Triple rooms-->
		<img class = "type" src = "assets/images/triple.jpg"  style="border-radius:15px;position:absolute; top: 1000px; left: 100px; height:300px; width:600px;" >
		<h3 style = "position : absolute; top : 1000px; left : 800px; font-size : 30px; color : white;" >3. Triple Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 1055px; left : 800px; color : white;"  > 
			<li>A room assigned to three people.</li> 
			<li>May have a double bed & a single bed.</li>
			<li>Air conditioned.</li>
			<li>Has fast optic free wifi connection.</li>
			<li>The room size or area of Triple Rooms are generally between 45 m²<br> to 65 m².</li>
			<li><b>10 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 1207px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
			
			
		<!--Quad rooms-->
		<img class = "type" src = "assets/images/quad.jpg"  style="border-radius:15px;position:absolute; top: 1400px; left: 100px; height:300px; width:600px; " >
		<h3 style = "position : absolute; top : 1400px; left : 800px; font-size : 30px; color : white;" >4. Quad Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 1455px; left : 800px; color : white;"  > 
			<li>A room assigned to four people.</li> 
			<li>May have four single beds.</li>
			<li>Air conditioned and has a flat-screen TV with international TV channels.</li>
			<li>Has fast optic free wifi connection.</li>
			<li>The room size or area of Quad Rooms are generally between 70 m² <br>to 85 m².</li>
			<li><b>10 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 1615px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
		
		<!--Queen rooms-->
		<img class = "type" src = "assets/images/queen.jpg"  style="border-radius:15px;position:absolute; top: 1800px; left: 100px; height:300px; width:600px;" >
		<h3 style = "position : absolute; top : 1800px; left : 800px; font-size : 30px; color : white;" >5. Queen Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 1855px; left : 800px; color : white;"  > 
			<li>May be occupied by one or more people.</li> 
			<li>A room with a Queen-sized bed.</li>
			<li>Air conditioned and has a flat-screen TV with international TV channels.</li>
			<li>Has fast optic free wifi connection.</li>
			<li>The room size or area of Queen Rooms are generally between 32 m² <br>to 50 m².</li>
			<li><b>5 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 2015px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
			
			
		<!--King rooms-->
		<img class = "type" src = "assets/images/king.jpg"  style="border-radius:15px;position:absolute; top: 2200px; left: 100px; height:300px; width:600px; " >
		<h3 style = "position : absolute; top : 2200px; left : 800px; font-size : 30px; color : white;" >6. King Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 2255px; left : 800px; color : white;"  > 
			<li>May be occupied by one or more people.</li> 
			<li>A room with a King-sized bed.</li>
			<li>Air conditioned and has a flat-screen TV with international TV channels.</li>
			<li>has fast optic free wifi connection.</li>
			<li>The room size or area of King Rooms are generally between 32 m² <br>to 50 m².</li>
			<li><b>5 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 2415px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
		
		<!--Twin rooms-->
		<img class = "type" src = "assets/images/twin.jpg"  style="border-radius:15px;position:absolute; top: 2600px; left: 100px; height:300px; width:600px;" >
		<h3 style = "position : absolute; top : 2600px; left : 800px; font-size : 30px; color : white;" >7. Twin Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 2655px; left : 800px; color : white;"  > 
			<li>May be occupied by two people.</li> 
			<li>A room with two twin beds.</li>
			<li>The room size or area of Twin Rooms are generally between 32 m² <br>to 40 m².</li>
			<li><b>10 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 2800px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
		
		<!--Double-double rooms-->
		<img class = "type" src = "assets/images/double-double.jpg"  style="border-radius:15px;position:absolute; top: 3000px; left: 100px; height:300px; width:600px;" >
		<h3 style = "position : absolute; top : 3000px; left : 800px; font-size : 30px; color : white;" >8. Double-Double Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 3055px; left : 800px; color : white;"  > 
			<li>Can accommodate two to four persons.</li> 
			<li>A Room with two double ( or perhaps queen) beds. </li>
			<li>Air conditioned.</li>
			<li>Has fast optic free wifi connection.</li>
			<li>The room size or area of Double-double / Double Twin rooms are <br>generally between 50 m² to 70 m².</li>
			<li><b>5 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 3200px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
				
				
		<!--luxury rooms-->
		<img class = "type" src = "assets/images/luxury.jpg"  style="border-radius:15px;position:absolute; top: 3400px; left: 100px; height:300px; width:600px;" >
		<h3 style = "position : absolute; top : 3400px; left : 800px; font-size : 30px; color : white;" >9. Luxury Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 3455px; left : 800px ;color : white;"  > 
			<li>Can accommodate two to four persons.</li> 
			<li>A Room with a king bed with a good comfortable mattress. </li>
			<li>Air conditioned and has a flat-screen TV with international TV channels.</li>
			<li>Has fast optic free wifi connection.</li>
			<li>The room size or area of Luxury Rooms are generally between 50 m² <br>to 70 m².</li>
			<li><b>5 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 3615px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
		<!--Presidential rooms-->
		<img class = "type" src = "assets/images/presidential.jpg"  style="border-radius:15px;position:absolute; top: 3800px; left: 100px; height:400px; width:600px;" >
		<h3 style = "position : absolute; top : 3800px; left : 800px; font-size : 30px; color : white;" >10. President Suite | Presidential Suite Rooms</h3><br><br>
		<ul type = "disc" id = "p1" style = "position : absolute; top : 3900px; left : 800px; color : white;"  > 
			<li>The most expensive room provided by the Hotel Lustrio INN.</li> 
			<li>Usually, only one president suite is available in one single hotel property</li>
			<li>A president suite always has one or more bedrooms and a living space with<br> a strong emphasis on grand in-room decoration, high-quality amenities and supplies, and tailor-made services.</li>
			<li>The room size or area of Presidential Suites are generally between 80 m²<br> to 350 m².</li>
			<li><b>5 Rooms are available.</b></li>
		</ul>
		<button id = "btn" style = "position : absolute; top : 4125px; left : 840px; font-size : 20px; background-color : #8B0000; color : white;border-radius:3px;">Check Availability</button>
		
		</div>
		
   </div>
	</div>
   <footer id="footer" style="position: absolute;top: 4500px;background-color: rgb(255,255,255,0.9);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
