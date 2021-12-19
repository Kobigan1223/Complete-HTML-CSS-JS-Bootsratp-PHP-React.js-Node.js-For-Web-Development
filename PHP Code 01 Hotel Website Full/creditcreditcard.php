


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
    <nev id="neVV2"> <?php include('includes/nevigation.php');?> </nev>

    <?php
            
        

    
    if(isset($_POST['submit']))
    {

        $id = $_SESSION['$id'];
        require('includes/config.php');
        /*echo htmlspecialchars($_POST['fname']) . "<br>";
        echo htmlspecialchars($_POST['uname']) . "<br>";
        echo htmlspecialchars($_POST['mobile']) . "<br>";
        echo htmlspecialchars($_POST['email']) . "<br>";
        echo htmlspecialchars($_POST['pword']) . "<br>";
        */
        
        $cname = mysqli_real_escape_string($conn ,$_POST['cnumber']);
        $cpin = mysqli_real_escape_string($conn ,$_POST['cpin']);
        

        $sql = "UPDATE user SET creditC = $cname , Cpin = $cpin WHERE uid = $id AND uid != 35;  ";
        if(mysqli_query($conn,$sql))
        {
            
            
             echo "<script>alert('successfully registered');
                 window.location.href='index.php';
                  </script>";

        }else
        {

            echo 'query error : ' .mysqli_error($conn);

        }

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
            <form name="myForm" action="usersignup.php" method="POST" onsubmit="return basicvalidateForm();">
                  <!--LOGING-FORM-HEADER-->`
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> Add Credit Card </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER CREDIT CARD NUMBER </h3>
     		    <input type="text" name="cnumber" autofocus autocomplete="off">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER PIN NUMBER</h3>
                <input type="text" name="cpin" autofocus autocomplete="off">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CONFIRM PIN NUMBER </h3>
     		    <input type="text" name="ccpin" autocomplete="off">
		
     		    </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button type="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > ADD </button>
     	        <label  style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 5%;"><a href="userlogin.php" style="color:white;"> Already signed up</a></label>
               <label style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 30%;"><a href="#" style="color:white;"> cancel</a></label>

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
