
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script5.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body background="assets/images/11568168178_tmp_bricks-brickwall-brickwork-276514.jpg" >
   
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV2"> <?php include('includes/nevigation.php');?> </nev>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->
   <div id="content-wrap" style="padding-top:150px; padding-left:20px;">
    <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.6);position:absolute;z-index: 1;color:white;height: 920px;">
    <h1 style="text-align: center;color:rgb(255,255,255,0.7);font-weight: normal;font-family: monospace;font-size: 35px;margin-top: 20px;margin-bottom: 0px;">HAVE SOME QUESTIONS?</h1>
            <hr style="width: 86%;">
    <h2 style="text-align: center;color:rgb(255,255,255,0.7);font-weight: normal;font-family: monospace;font-size: 20px;margin-top: 20px;"> We are here to help & answer any matter regarding our services you might have.We look forward hearing from you. </h2>
    <div class="login-container" style="padding-top:0px;height: : 100px; ">
            <form name="myForm" action="usersignup.php" method="POST" onsubmit="return basicvalidateForm();">
                  <!--LOGING-FORM-HEADER-->`
                <div class="head-container">
              
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;">For a Special Enquiry </h2>
        
                </div>

                <!--LOGIN-FORM-CONTENT-->
              <div class="form-container-signup" style="z-index: 1;">
            <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER YOUR NAME </h3>
            <input type="text" name="fname" autofocus autocomplete="off">
                
            <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">MOBILE NUMBER </h3>
            <input type="text" name="mobile" autocomplete="off">
        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER EMAIL </h3>
            <input type="text" name="email" autocomplete="on">
        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENQUIRY </h3>
            <input type="text" name="det" autofocus autocomplete="off">
          
            </div>


              <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
            <div style="padding-left: 23px; padding-top: 12px;">
            <button type="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > Sumbit </button>
              <label  style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 5%;">


            </div>


                </div>


          </form>

            </div>

    </div>

    
   </div>
    
   <footer id="footer" style="position: absolute;top: 1051px;background-color: rgb(255,255,255,0.9);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
