


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

        if(isset($_SESSION['login']))
        {
            
            $uname = $_SESSION['uname'];
            $fname = $_SESSION['$fname'];
            $mobile = $_SESSION['$mobile'];
            $email = $_SESSION['$email'];
            $id = $_SESSION['uid'];
            //$password = $_SESSION['pword'].'sdshjdghsgdhgshgdjsg';
    
        }
  


     ?>

     <?php

     if(isset($_POST['submit']))
     {

        
        require('includes/config.php');
    
        $profile = mysqli_real_escape_string($conn ,$_POST['fname']);
        $username = mysqli_real_escape_string($conn ,$_POST['uname']);
        $oldpassword = mysqli_real_escape_string($conn ,$_POST['cpword']);
        $email  = mysqli_real_escape_string($conn ,$_POST['email']);
        $mobile  = mysqli_real_escape_string($conn ,$_POST['mobile']);
        //$newpassword = mysqli_real_escape_string($conn ,$_POST['npword']);
        

        $sql = "SELECT * FROM user WHERE Password = '$oldpassword' AND id = '$id'";
      
        $result = mysqli_query($conn,$sql);

        $arows=mysqli_fetch_array( $result , MYSQLI_ASSOC);
        
        if(mysqli_num_rows($result)==1)
        {

            $sql = "UPDATE user SET FullName = '$profile' , UserName = '$username' , Email = '$email' , MobileNo = '$mobile' WHERE Password = '$oldpassword' AND id = '$id'"
            ;
            
                    
            
                  
           



            if(mysqli_query($conn,$sql))
            {
                        $sql2 = "SELECT * FROM user WHERE Password = '$oldpassword' AND id = '$id'";
      
                        $result2 = mysqli_query($conn,$sql2);

                        $rows2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
        

                        $fname = 'defaultuname';
            
                        $mobile = 'defaultmobile';
                        $email = 'defaultemail';
                        //$id = 'defaultid';


            
                    
                        $_SESSION['$fname'] = $rows2['FullName'];
           
                        $_SESSION['$mobile'] = $rows2['MobileNo'];
                        $_SESSION['$email'] = $rows2['Email'];
                        $_SESSION['uname']  = $rows2['UserName'];
                        
            
                echo "<script>alert('Profile Updated successfully.');
                    window.location.href='userprofile.php';
                    </script>";

                   


            }
            
                
        

        

        }else if(mysqli_num_rows($result)==0)
            {

                echo "<script>alert('There is an error with your request');
                 
                    </script>";

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
            <form name="myForm" action="updateuserprofile.php" method="POST">
                  <!--LOGING-FORM-HEADER-->`
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> Edit Profile </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> FULL NAME </h3>
     		    <input  type="text" name="fname"  autocomplete="off" value="<?php echo $fname; ?>" >
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">USER NAME</h3>
                <input type="text" name="uname"  autocomplete="off" value="<?php echo $uname; ?>" >
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> MOBILE NUMBER</h3>
     		    <input type="text" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>">
		        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> EMAIL </h3>
     		    <input type="text" name="email" autocomplete="on" value="<?php echo $email; ?>">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> ENTER YOUR PASSWORD </h3>
                <input  type="password" name="cpword"  autocomplete="off" >
		        <!--h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">PASSWORD </h3>
                <input type="password" name="pword" autocomplete="off" value="<?php echo $password; ?>" disabled=""--> 
     		    </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button type="submit" name="submit" style="font-size: 13px; border-radius: 5px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;width: 150px;height: 40px;" > Update profile </button>
                <a href="confirmdeleteaccount.php"><button type="button"  name="link" style="font-size: 13px; border-radius: 5px; background-color:red; font-family: monospace; font-weight: normal;width: auto;height: 40px;" >Delete My Account  </button></a>
     	        <label style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 5%;"><a href="userprofile.php" style="color:white;"> Cancel</a></label>

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
