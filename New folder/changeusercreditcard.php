
<!--SIGNUP-PAGE-->
<!DOCTYPE html>
<html>
<head>
    <title>Online Hotel Reservation system</title>
    <link rel="stylesheet" type="text/css" href="assets/css26/style.css">
    <script src="assets/js/script6.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        function validatepassword()
        {

           

                    var creditcard = document.forms["myform"]["nccardnumber"].value;
                    var pin = document.forms["myform"]["newpin"].value;
                    var conpin = document.forms["myform"]["newpincon"].value;
                    if(creditcard.length == 16 && pin.length == 4)
                    {
                        
                                if( conpin != pin )
                                {
                                    alert("New pin and confirm pins are different");
                                    return false;
                                    
                                }else
                                {
        
                                    return true;

                                }
                    }else
                    {
                        alert('Credit card number number be 16 digits and pin must be 4 digits');
                        return false;

                    }

                    

               

                    





                   


        }
    


    </script>
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg">
    
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header"> <?php include('includes/header.php');?> </header>
    <nev id="neVV2"> <?php include('includes/nevigation.php');?> </nev>
    <?php
  
  
        if (empty($_SESSION['uname']))
        {
            // The username session key does not exist or it's empty.
            header('Location: userlogin.php');
    
        }


    ?>

    <?php 

        if(isset($_SESSION['login']))
        {
            
            $uname = $_SESSION['uname'];
            $fname = $_SESSION['$fname'];
            $mobile = $_SESSION['$mobile'];
            $email = $_SESSION['$email'];
            $id = $_SESSION['uid'];
           
    
        }
  


     ?>


     <?php

    if(isset($_POST['submit']))
    {

        
        require('includes/config.php');
    
        
        $oldpassword = mysqli_real_escape_string($conn ,$_POST['oldpassword']);
        $curruntccard = mysqli_real_escape_string($conn ,$_POST['occardnumber']);
        $newccard = mysqli_real_escape_string($conn ,$_POST['nccardnumber']);
        $newpin = mysqli_real_escape_string($conn ,$_POST['newpin']);

        $sql2 = "SELECT * FROM user WHERE UserID = '$id'";
      
        $aresult = mysqli_query($conn,$sql2);

        $arows=mysqli_fetch_array($aresult,MYSQLI_ASSOC);
        
        if(mysqli_num_rows($aresult)==1)
        {

            $lengthcreditcard = strlen("$newccard");
            $lengthcreditcardpin = strlen("$newpin");

           if($lengthcreditcard == 16 && $lengthcreditcardpin ==4)
           {
            
            $sql = "UPDATE user SET CredicardNo = '$newccard' , CardPin = '$newpin'  WHERE Password = '$oldpassword' AND id = '$id'";
            if(mysqli_query($conn,$sql))
            {
            
            
                echo "<script>alert('Credit card updated successfully');
                    window.location.href='userprofile.php';
                    </script>";
                    $_SESSION['$cre'] = $newccard;

            
            
                
            

        

            }else if(mysqli_num_rows($aresult)==0)
            {

                echo "<script>alert('Please enter your old password and Full name correctly');
                    window.location.href='changeuserpassword.php';
                    </script>";

            }  
            } 


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
            <form name="myform" action="changeusercreditcard.php" method="POST" onsubmit="return validatepassword();">
                  <!--LOGING-FORM-HEADER-->`
                  <div class="head-container">
                  
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> Update Credit Card </h2>
            
                  </div>

                <!--LOGIN-FORM-CONTENT-->
                <div class="form-container-signup" style="z-index: 1;">
             
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">  CURRUNT CREDIT CARD NUMBER </h3>
                <input  type="text" name="occardnumber"  autocomplete="off" value="<?php echo  $_SESSION['$cre'] ?>">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NEW CREDIT CARD NUMBER</h3>
                <input type="text" id="pass1" name="nccardnumber"  autocomplete="off">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NEW PIN</h3>
                <input type="password" id="pass2" name="newpin" autocomplete="off">
                 <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CONFIRM PIN</h3>
                <input type="password" id="pa" name="newpincon" autocomplete="off">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER CURRUNT PASSWORD</h3>
                <input type="password" name="oldpassword" autocomplete="off">
               
                <!--h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">PASSWORD </h3>
                <input type="password" name="pword" autocomplete="off" value="<?php //echo $password; ?>" disabled=""--> 
                </div>


                <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
                <div style="padding-left: 23px; padding-top: 12px;">
                <button type="submit" name="submit" style="font-size: 13px; border-radius: 5px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;width: 150px;height: 40px;" > Update  </button>
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
