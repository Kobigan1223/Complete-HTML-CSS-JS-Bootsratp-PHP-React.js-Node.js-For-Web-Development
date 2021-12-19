<?php


  
  
  if(isset($_POST['login']))
  {
        session_start();

        
        require('includes/config.php');
    
        
        $username = mysqli_real_escape_string($conn ,$_POST['uname']);
        $password = mysqli_real_escape_string($conn ,$_POST['pword']);

       
        $sql = "SELECT id , FullName , Email , MobileNo , CredicardNo , CardPin  FROM user WHERE UserName = '$username' AND Password = '$password' AND Type != 'A'" ;
      
        $result = mysqli_query($conn, $sql);

        $rows=mysqli_fetch_array( $result , MYSQLI_ASSOC);
        
        if(mysqli_num_rows($result)==1)
        {

            $fname = 'defaultuname';
            
            $mobile = 'defaultmobile';
            $email = 'defaultemail';
            $id = 'defaultid';


            $_SESSION['login'] = true;

            $_SESSION['uname'] = $_POST['uname'];
            $_SESSION['pword'] = $_POST['pword'];
            $_SESSION['uid'] = $rows['id'];
            $_SESSION['$fname'] = $rows['FullName'];
            $_SESSION['$email'] = $rows['Email'];
            $_SESSION['$mobile'] = $rows['MobileNo'];
            
            
            $_SESSION['$cre'] = $rows['CredicardNo'];
            $_SESSION['$pin'] = $rows['Cardpin'];
            header('Location: index.php');
        }else
        {
            
            
            //header('Location: userlogin.php');
            //echo "<script> alert('Invalid credentials') </script> ";  

            //header('Location: userlogin.php');

            echo "<script>alert('Invalid credentials');
                 window.location.href='userlogin.php';
                  </script>";
            
    
        }



      
   }   


?>
<!--LOGIN-PAGE-->
<!DOCTYPE html>
<html>
<head>
    <title>Online Hotel Reservation system</title>
    <link rel="stylesheet" type="text/css" href="assets/css26/style.css">
    <script src="assets/js/script5.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg">
   
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header"> <?php include('includes/header.php');?> </header>
    <nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>


<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.7);position:fixed;z-index: 1;color:white;position: absolute;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container" style="padding-top: 100px">
            <form name="loginForm" action="userlogin.php" method="POST">
                  <!--LOGING-FORM-HEADER-->
                  <div class="head-container">
                  
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> Login Form </h2>
            
                  </div>

                <!--LOGIN-FORM-CONTENT-->
                <div class="form-container" id="form-container">
                <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">USER NAME </h3>
                <input type="text" name="uname" >
                <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">PASSWORD </h3>
                <input type="password" name="pword" >
                </div>
              
                <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container" style="overflow: auto;auto">
                <div style="padding-left: 23px; padding-top: 12px;">
                <button  tyle="submit" name="login" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > login </button>
                <button  style="font-size: 13px; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: auto;"> Forgot Password</button>
                  <label style="font-size: 13px;border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: auto;"><a href="admin/adminlogin.php" style="color:white;"> Admin login</a></label>
                </div>


                  </div>


            </form>

            </div>
    </div>

</div>


<footer id="footer" style="position: absolute;top: 920px;background-color: rgb(255,255,255,0.9);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
