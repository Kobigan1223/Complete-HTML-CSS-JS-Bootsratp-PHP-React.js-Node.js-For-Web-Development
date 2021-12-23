
<!--SIGNUP-PAGE-->
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css27/style.css">
	<script src="assets/js/script6.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        function validatepassword()
        {

            var oldps = document.forms["myform"]["npword"].value;
            var newps = document.forms["myform"]["cnpword"].value;
            

            if( oldps != newps )
            {
                    alert("New password and confirm new passwords are different");
                    return false;
                            
            }else
            {

                return true;

            }



        }



    </script>
<body background="assets/images/prism_abstract-1920x1080.jpg">
    
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header"> <?php include('includes/header.php');?> </header>
    <nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>
    <?php
  
  
        if (empty($_SESSION['aname']))
        {
            // The username session key does not exist or it's empty.
            header('Location: userlogin.php');
    
        }


    ?>

    <?php 

       


     ?>


     <?php

    if(isset($_POST['submit']))
    {

        
        require('includes/config.php');
    
        
        $oldpassword = mysqli_real_escape_string($conn ,$_POST['cpword']);
        $newpassword = mysqli_real_escape_string($conn ,$_POST['npword']);
        

        $sql2 = "SELECT * FROM user WHERE Password = '$oldpassword' AND Utype = 'A'";
      
        $aresult = mysqli_query($conn,$sql2);

        $arows=mysqli_fetch_array($aresult,MYSQLI_ASSOC);
        
        if(mysqli_num_rows($aresult)==1)
        {

            $sql = "UPDATE user SET Password = '$newpassword' WHERE Password = '$oldpassword' AND Utype = 'A'";
            if(mysqli_query($conn,$sql))
            {
            
            
                echo "<script>alert('Password changed successfully');
                    window.location.href='admindashboard.php';
                    </script>";

            }
            
                
        

        

        }else if(mysqli_num_rows($aresult)==0)
            {

                echo "<script>alert('Please enter your old password and Full name correctly');
                    window.location.href='changeadminpassword.php';
                    </script>";

            }   


   }

?>

<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap2" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr" style="background-color: rgb(0,0,0,0.7);position:absolute;z-index: 1;color:white;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container" style="padding-top:0px;height: : 100px; ">
            <form name="myform" action="changeadminpassword.php" method="POST" onsubmit="return validatepassword();">
                  <!--LOGING-FORM-HEADER-->`
     	          <div style="color:white; background-color: red;" class="head-container" >
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> Change Password </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
                
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">  ENTER CURRUNT PASSWORD </h3>
     		    <input  type="password" name="cpword"  autocomplete="off">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NEW PASSWORD</h3>
                <input type="password" name="npword"  autocomplete="off">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CONFIRM NEW PASSWORD</h3>
     		    <input type="password" name="cnpword" autocomplete="off">
		       
		        <!--h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">PASSWORD </h3>
                <input type="password" name="pword" autocomplete="off" value="<?php //echo $password; ?>" disabled=""--> 
     		    </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container" style="color:white; background-color: red;" >
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button type="submit" name="submit" style="font-size: 13px; border-radius: 5px; background-color:black;font-family: monospace; font-weight: normal;width: 150px;height: 40px;" > Update  </button>
     	        <label style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 5%;"><a href="userprofile.php" style="color:white;"> cancel</a></label>

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
