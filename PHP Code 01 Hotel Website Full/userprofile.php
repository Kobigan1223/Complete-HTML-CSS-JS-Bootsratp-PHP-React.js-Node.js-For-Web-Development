


<!--SIGNUP-PAGE-->
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script6.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg">
    
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header"> <?php include('includes/header.php');?> </header>
    <nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>
 

    <?php 

        if(isset($_SESSION['login']))
        {
            
            $uname = $_SESSION['uname'];
            $pword = $_SESSION['pword'];
            $fname = $_SESSION['$fname'];
            $email = $_SESSION['$email'];
            $mobile = $_SESSION['$mobile'];
           	$creditcard = $_SESSION['$cre'];
            $cpin = $_SESSION['$pin'];
            $id = $_SESSION['uid'];

            //$password = $_SESSION['pword'].'sdshjdghsgdhgshgdjsg';
    
        }
  


     ?>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap2" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.7);position:absolute;z-index: 1;color:white;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container" style="padding-top:0px;height: : 100px; ">
            <form name="myForm">
                  <!--LOGING-FORM-HEADER-->`
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> My Profile </h2>
     		              
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> FULL NAME </h3>
     		    <input  type="text" name="fname"  autocomplete="off" value="<?php echo $fname; ?>" disabled="">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">USER NAME</h3>
                <input type="text" name="uname"  autocomplete="off" value="<?php echo $uname; ?>" disabled="">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> MOBILE NUMBER</h3>
     		    <input type="text" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>" disabled="">
		        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> EMAIL </h3>
     		    <input type="text" name="email" autocomplete="on" value="<?php echo $email; ?>" disabled="">
		        <!--h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">PASSWORD </h3>
                <input type="password" name="pword" autocomplete="off" value="<?php echo $password; ?>" disabled=""--> 
     		    </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <a href="updateuserprofile.php"><button type="button"  name="link" style="font-size: 13px; border-radius: 5px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;width: 150px;height: 40px;" > Edit profile </button></a>
     	        <a href="changeuserpassword.php"><button type="button"  name="link" style="font-size: 13px; border-radius: 5px; background-color:red; font-family: monospace; font-weight: normal;width: auto;height: 40px;" > Change password </button></a>

                <a href="changeusercreditcard.php"><button type="button"  name="link" style="font-size: 13px; border-radius: 5px; background-color:red; font-family: monospace; font-weight: normal;width: auto;height: 40px;" > Change Credit card  </button></a>
                 <a href="resevations.php"><button type="button"  name="link" style="font-size: 13px; border-radius: 5px; background-color:red; font-family: monospace; font-weight: normal;width: auto;height: 40px;" >My Reservations  </button></a>

     		    </div>


     	          </div>


     	    </form>

            </div>
    </div>

</div>


<footer id="footer"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
