<?php
        
       echo "<script>alert('Log out as a user before login as a admin');</script> " ;
  

  
  
  if(isset($_POST['alogin']))
  {
        session_start();

        
        require('includes/config.php');
    
        
        $adminname = mysqli_real_escape_string($conn ,$_POST['aname']);
        $apassword = mysqli_real_escape_string($conn ,$_POST['apword']);
        $id = 35 ;

       
        $sql2 = "SELECT * FROM user WHERE Type = 'A' AND UserName = '$adminname' AND Password = '$apassword' " ;
      
        $aresult = mysqli_query($conn,$sql2);

        $arows=mysqli_fetch_array($aresult,MYSQLI_ASSOC);
        
        if(mysqli_num_rows($aresult)==1)
        {

            $fname = 'defaultuname';
            
            $mobile = 'defaultmobile';
            $email = 'defaultemail';
            $id = 'defaultid';


            $_SESSION['alogin'] = true;
            $_SESSION['aname'] = $_POST['aname'];
            $_SESSION['apword'] = $_POST['apword'];
            //$_SESSION['$fname'] = $rows['FullName'];

            $_SESSION['$id'] = $rows['id'];
            
            header('Location: admindashboard.php');
        }else
        {
            
            
            //header('Location: userlogin.php');
            //echo "<script> alert('Invalid credentials') </script> ";  

            //header('Location: userlogin.php');

            echo "<script>alert('Invalid credentials');
                 window.location.href='adminlogin.php';
                  </script>";
            

        }



      
   }   


?>
<!--LOGIN-PAGE-->
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css25/style.css">
	<script src="assets/js/script5.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg">
   
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header" style="z-index: 1;"> <?php include('includes/header.php');?> </header>
    <nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>
    

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.7);position:fixed;z-index: 1;color:white;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container" style="padding-top: 100px">
            <form name="loginForm" action="adminlogin.php" method="POST">
                  <!--LOGING-FORM-HEADER-->
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;">Admin Login Form </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container" id="form-container">
     		    <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">USER NAME </h3>
     		    <input type="text" name="aname" >
     		    <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">PASSWORD </h3>
     		    <input type="password" name="apword" >
     		    </div>
              
     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container" style="overflow: auto;auto">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button  tyle="submit" name="alogin" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > login </button>
     	        <button  style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;"> Forgot Password</button>

     		    </div>


     	          </div>


     	    </form>

            </div>
    </div>

</div>


<footer id="footer" style="position: absolute;top: 920px;background-color: rgb(0,0,0,0.9);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
