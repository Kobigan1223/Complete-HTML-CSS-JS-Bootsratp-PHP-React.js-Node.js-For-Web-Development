<?php
	


    $email = $fname = $uname = $mobile = $cname = $pword = $cpword = $cpin = $ccpin =  '' ;
    $errors = array('email' => '' , 'fname' => '' , 'uname' => '' , 'mobile' => '' , 'cpin' => '' , 'password' => '' , 'creditcard' => '' , 'cpin' => '' );
    

	if(isset($_POST['submit']))
	{

        
        require('includes/config.php');
		/*echo htmlspecialchars($_POST['fname']) . "<br>";
        echo htmlspecialchars($_POST['uname']) . "<br>";
		echo htmlspecialchars($_POST['mobile']) . "<br>";
		echo htmlspecialchars($_POST['email']) . "<br>";
        echo htmlspecialchars($_POST['pword']) . "<br>";
        */
        
        $fname = mysqli_real_escape_string($conn ,$_POST['fname']);
        $uname = mysqli_real_escape_string($conn ,$_POST['uname']);
        $mobile = mysqli_real_escape_string($conn ,$_POST['mobile']);
        $email = mysqli_real_escape_string($conn ,$_POST['email']);
        $pword = mysqli_real_escape_string($conn ,$_POST['pword']);
        $cpword = mysqli_real_escape_string($conn ,$_POST['cpword']);
        $cname = mysqli_real_escape_string($conn ,$_POST['cnumber']);
        $cpin = mysqli_real_escape_string($conn ,$_POST['cpin']);
        $ccpin = mysqli_real_escape_string($conn ,$_POST['ccpin']);
        //check emails validity
        if(empty($_POST['email']))
        {

            $errors['email'] = 'You must input a Email';
           

        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {

            $errors['email'] = 'Email address is not valid';
           

        }

        //chck user full names validity
        if(empty($_POST['fname']))
        {

            $errors['fname'] = 'You must input a full name';
           

        }else if(!preg_match('/^[a-zA-Z\s]+$/', $fname))
        {

            $errors['fname'] = 'Full name must contain any lower case letters or any upper case letters and spaces only ';
           

        }

        //check user name's validity
        if(empty($_POST['uname']))
        {

            $errors['uname'] = 'You must input a user name';
           

        }else if(!preg_match('/^[a-zA-Z]+$/', $uname))
        {

            $errors['uname'] = 'User name must contain any lower case letters or any upper case letters only ';
            

        }

        //check user mobile number's validity
        if(empty($_POST['mobile']))
        {

            $errors['mobile'] = 'You must input a mobile number';
            

        }else if(!preg_match('/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $mobile))
        {

            $errors['mobile'] = 'Mobile number is not valid';
         

        }

        //password check
        if($pword != $cpword)
        {

            $errors['password'] = 'Password and the confirm password are not match';
            
        }

        //validate credit card
        if(empty($_POST['cnumber']))
        {

            $errors['creditcard'] = 'You must input a credit card';
            

        }else if(!preg_match('/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $cname))
        {

            $errors['creditcard'] = 'Credi card must contain 16 digits';
            

        }

        //validate credit card number's pin
        if(empty($_POST['cpin']))
        {

            $errors['cpin'] = 'This field cannot be empty';
           

        }else if(!preg_match('/^[0-9][0-9][0-9][0-9]/', $cpin))
        {

            $errors['cpin'] = 'Pin number must contain only 4 digits';
           

        }
       
        //enter details to the DB
        if(!array_filter($errors))
        {


        $sql = "INSERT INTO user(FullName,UserName,Email,Password,MobileNo,CredicardNo,CardPin) VALUES('$fname','$uname', '$email','$pword' ,'$mobile','$cname','$cpin')";

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
    }   


?>


<!--SIGNUP-PAGE-->
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css26/style.css">
	<script src="assets/js/script6.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<body background="assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg" style="background-repeat: repeat-y;">
    
    <!--INCLUDING HEADER AND THE NEVIGATION --->
    <header id="header"> <?php include('includes/header.php');?> </header>
    <nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>


<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container">
  

    <!--PAGE CONTENT-->
    <div id="content-wrap2" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr2" style="background-color: rgb(0,0,0,0.7);position:absolute;z-index: 1;color:white;height: 1500px;">

            <!--LOGIN-FORM-BEGGINING-POINT-->
            <div class="login-container" style="padding-top:0px;height: : 100px; ">
            <form name="myForm" action="usersignup.php" method="POST" > <!-- onsubmit="return basicvalidateForm();" -->
                  <!--LOGING-FORM-HEADER-->`
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> Signup Form </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER FULL NAME </h3>
     		    <input type="text" name="fname" autofocus autocomplete="off" value="<?php echo htmlspecialchars($fname); ?>">
                 <div style="color: red;"> <?php echo $errors['fname']; ?> </div>
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER A USER NAME</h3>
                <input type="text" name="uname" autofocus autocomplete="off" value="<?php echo htmlspecialchars($uname); ?>">
                <div style="color: red;"> <?php echo $errors['uname']; ?> </div>
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">MOBILE NUMBER </h3>
     		    <input type="text" name="mobile" autocomplete="off"  value="<?php echo htmlspecialchars($mobile); ?>">
                <div style="color: red;"> <?php echo $errors['mobile']; ?> </div>
		        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER EMAIL </h3>
     		    <input type="text" name="email" autocomplete="on" value="<?php echo htmlspecialchars($email); ?>">
                <div style="color: red;"> <?php echo $errors['email']; ?> </div>
		        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER PASSWORD </h3>
     		    <input type="password" name="pword" autocomplete="off" value="<?php echo htmlspecialchars($pword); ?>">
                 <div style="color: red;"> <?php echo $errors['password']; ?> </div>
		        <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CONFIRM PASSWORD </h3>
     		    <input id="cP" type="password" name="cpword" autocomplete="off" value="<?php echo htmlspecialchars($cpword); ?>">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER CREDIT CARD NUMBER </h3>
                <input type="text" name="cnumber" autofocus autocomplete="off" value="<?php echo htmlspecialchars($cname); ?>">
                <div style="color: red;"> <?php echo $errors['creditcard']; ?> </div>
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">ENTER PIN NUMBER</h3>
                <input type="text" name="cpin" autofocus autocomplete="off" value="<?php echo htmlspecialchars($cpin); ?>">
                <div style="color: red;"> <?php echo $errors['cpin']; ?> </div>
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CONFIRM PIN NUMBER </h3>
                <input type="text" name="ccpin" autocomplete="off" value="<?php echo htmlspecialchars($ccpin); ?>">
     		    </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button type="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > Register NOW </button>
     	        <label  style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 5%;"><a href="userlogin.php" style="color:white;"> Already signed up</a></label>
               <label style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 30%;"><a href="usersignup.php" style="color:white;"> cancel</a></label>

     		    </div>


     	          </div>


     	    </form>

            </div>
    </div>

</div>


<footer id="footer" style="position: absolute;top:1500px;z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
