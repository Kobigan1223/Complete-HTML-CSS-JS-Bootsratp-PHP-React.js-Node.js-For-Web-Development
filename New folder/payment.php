
<!--SIGNUP-PAGE-->
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script6.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<body background="assets/images/11568168178_tmp_bricks-brickwall-brickwork-276514.jpg" style="background-repeat: repeat-y;">
    
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
            $id = $_SESSION['$id'];
            $total_price = $_SESSION['$totalPrice'];
            $roomPrice = $_SESSION['$roomPrice'];
            $packageprice = $_SESSION['$packagePrice'];
            $creditcard = $_SESSION['$cre'];
            //$password = $_SESSION['pword'].'sdshjdghsgdhgshgdjsg';
            $check_in =  $_SESSION['$startdate'];
            $check_out = $_SESSION['$enddate'];
    
        }
  


     ?>

     <?php


  
  
  if(isset($_POST['submit']))
  {
        








        $id = $_SESSION['$id'];

        
        require('includes/config.php');
    
        
        
        $pin = mysqli_real_escape_string($conn ,$_POST['cardpin']);

       
        $sql = "SELECT * FROM user WHERE  CardPin = '$pin' AND Utype != 'A' AND UserID = '$id'" ;
      
        $result = mysqli_query($conn,$sql);

        $rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        if(mysqli_num_rows($result)==1)
        {


            

            $sql2 = "INSERT INTO reservation(UserID,CheckInDate,CheckOutDate,Amount) VALUES('$id','$check_in','$check_out','$total_price')";



             if(mysqli_query($conn,$sql2))
        {
            
            
             echo "<script>alert('Reservation Successfull');
                 window.location.href='index.php';
                  </script>";

        }else
        {

            echo 'query error : ' .mysqli_error($conn);

        }
           
            
        }else
        {
            
            
            //header('Location: userlogin.php');
            //echo "<script> alert('Invalid credentials') </script> ";  

            //header('Location: userlogin.php');

            echo "<script>alert('ERROR : Check your pin number');
                 window.location.href='payment.php';
                  </script>";
            

        }



      
   }   


?>
    




     <?php
  
  
        if (empty($_SESSION['uname']))
        {
            // The username session key does not exist or it's empty.
            header('Location: userlogin.php');
    
        }
        if(isset($_POST['submit']))
        {

        
        require('includes/config.php');
        
        
        
         }


    ?>



<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap2" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.7);position:absolute;z-index: 1;color:white;height: 1520px;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container" style="padding-top:0px;height: : 100px; ">
            <form name="myForm" action="payment.php" method="POST" onsubmit="return basicvalidateForm();">
                  <!--LOGING-FORM-HEADER-->`
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> PAYMENT </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
                
     		    
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">YOUR TOTAL BILL  </h3>
                <input type="input" style="width: 97%; height: 40px;" value="<?php echo 'LKR - '.$total_price; ?>" disabled="">
               
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">FOR ROOM/ROOMS  </h3>
                <input type="input" style="width: 97%; height: 40px;"  value="<?php echo 'LKR - '.$roomPrice; ?>" disabled="">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">FOR PACKAGE/PACKAGES  </h3>
                <input type="input" style="width: 97%; height: 40px;"  value="<?php echo 'LKR - '.$packageprice; ?>" disabled="">
                 <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">YOUR BILL FOR A SINGE DAY </h3>
                <input type="input" style="width: 97%; height: 40px;"  value="<?php echo 'LKR - '.($packageprice + $roomPrice); ?>" disabled="">

              
		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> ENTER YOUR CREDIT CARD NUMBER </h3>
                <input  type="text" name="cardnum"  autocomplete="off" value="<?php echo $creditcard; ?>"  >
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> ENTER YOUR CREDIT PIN NUMBER </h3>
                <input  type="password" name="cardpin"  autocomplete="off" >
                
            </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button type="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > CONFIRM </button>
     	        
               <label style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 10%;"><a href="usersignup.php" style="color:white;"> cancel</a></label>

     		    </div>


     	          </div>


     	    </form>

            </div>
    </div>

</div>


<footer id="footer" style="position: absolute;top: 1600px;z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
