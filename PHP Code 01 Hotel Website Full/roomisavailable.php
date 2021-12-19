
<!--LOGIN-PAGE-->
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script5.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<body background="assets/images/11568168178_tmp_bricks-brickwall-brickwork-276514.jpg">
   
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header"> <?php include('includes/header.php');?> </header>
    <nev id="neVV2"> <?php include('includes/nevigation.php');?> </nev>


<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.7);position:fixed;z-index: 1;color:white;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container"  style="padding-top: 150px">
            <div name="loginForm"  method="POST">
                  <!--LOGING-FORM-HEADER-->
     	          <div class="head-container" style="background-color: white;" >
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container"  style="background-color: white; font-weight:normal;font-family: monospace;">
     		    <h1 style="text-align: center;color:rgb(0,0,0,0.5);margin-top: 0;margin-bottom: 0px;"> Your rooms is available</h1>
                <ul style="color:rgb(0,0,0,0.3);">
                    

                </ul>


     		    </div>

     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container" style="text-align: center;background-color: white;">
     		    <div style="padding-left: 23px; padding-top: 0px;">
                <img src="assets/logos/kipi-smugmug.png" style="margin-bottom: 20px;margin-top:-30px;"><br>
     		    <a href="book.php"><button style="font-size: 13px; border-radius: 10px; background-color:rgb(255, 0, 0,0.7);font-family: monospace; font-weight: normal;width: auto;" >Booking page </button></a>
     	        <a href="ourrooms.php" style="font-size: 13; border-radius: 10px; background-color: #1ac6ff;font-family: monospace; font-weight: normal;width: 100px;color: white;padding: 14px 20px;margin: 8px 0;border: none;width: auto;;"> Go to the room page</a>

     		    </div>


     	          </div>


     	    </div>

            </div>
    </div>

</div>


<footer id="footer" style="position: absolute;top: 920px;background-color: rgb(255,255,255,0.9);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
