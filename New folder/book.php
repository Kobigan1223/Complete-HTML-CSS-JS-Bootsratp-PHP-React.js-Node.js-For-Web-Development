

<?php
	

  require('includes/config.php');
  
  $sql2 = 'SELECT  * FROM RoomType';
  
  $result = mysqli_query($conn, $sql2);

  $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  mysqli_free_result($result);
 
  //mysqli_close($conn);

  $sql3 = 'SELECT  * FROM Package';
  
  $result2 = mysqli_query($conn, $sql3);

  $packages = mysqli_fetch_all($result2, MYSQLI_ASSOC);
  
  mysqli_free_result($result2);
 
  //mysqli_close($conn);


    
	


?>


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
            //$password = $_SESSION['pword'].'sdshjdghsgdhgshgdjsg';
    
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
        $_SESSION['packagePrice'] = 0.0;
        if(isset($_POST['packagePrice']))
        {
         
          $package= $_POST['packagePrice'];
          $numberofpackages=count($package);
          for($i=0;$i<$numberofpackages;$i++)
          {

              $_SESSION['$packagePrice'] = $_SESSION['$packagePrice'] +$package[$i];

          
          }

         // $_SESSION['$packagePrice'] = $numberofpackages;


        }else
        {

          
        }


        //$_SESSION['$packagePrice'] = $_POST['packagePrice'];
        $_SESSION['$roomPrice'] = $_POST['room_price'] * $_POST['num_room'] ;
        $_SESSION['$totalPrice'] = $_SESSION['$roomPrice'] + $_SESSION['$packagePrice'];
        //$_SESSION['$days'] = 

        //$date2=date_create();
        //$diff=date_diff($date1,$date2);
        $start = strtotime($_POST['check_in']);
        $end =  strtotime($_POST['check_out']);
        $_SESSION['$startdate'] = $_POST['check_in'];
        $_SESSION['$enddate'] = $_POST['check_out'];
        $_SESSION['$interval'] = $end - $start;
        $_SESSION['$days'] = $_SESSION['$interval'] / 86400;
         


        
        if($_POST['num_adult'] > 2)
        {

          for($i=0; $i < $_POST['num_adult'] - 2; $i++ )
          {

              $_SESSION['$totalPrice'] = $_SESSION['$totalPrice'] + 500;

          }

         
        }
        if($_POST['num_child'] > 0)
        {

          for($i=0; $i < $_POST['num_child']; $i++ )
          {

              $_SESSION['$totalPrice'] = $_SESSION['$totalPrice'] + 250;

          }

         
          $temp = $_SESSION['$totalPrice'];


        } 
        if($_SESSION['$days'] == 0 )
        {


              $_SESSION['$totalPrice'] = $_SESSION['$totalPrice'] ;

          

         
        }else if($_SESSION['$days'] >= 1 )
        {


          for($i=0; $i < $_SESSION['$days']; $i++ )
          {

              $_SESSION['$totalPrice'] = $_SESSION['$totalPrice'] + $temp ;

          }

        }


        header('Location: payment.php');
        //echo $_SESSION['$totalPrice'];
       
        
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
            <form name="myForm" action="book.php" method="POST" onsubmit="return basicvalidateForm();">
                  <!--LOGING-FORM-HEADER-->`
     	          <div class="head-container">
     		      
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> BOOKING </h2>
     		
     	          </div>

                <!--LOGIN-FORM-CONTENT-->
     	        <div class="form-container-signup" style="z-index: 1;">
                
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">SELECT A ROOM </h3>
     		    <select style="width: 97%;height: 40px;" name="room_price">
                <?php  foreach($rooms as $room) { ?>
                <option  value="<?php echo ($room['Rtypeprice']);?>" > <?php echo htmlspecialchars(ucfirst($room['Rtypename'])) . ' - LKR ' . htmlspecialchars ($room['Rtypeprice']);?></option>
                <?php } ?>
                </select>
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NUMBER OF ROOMS </h3>
                <input type="NUMBER" style="width: 97%; height: 40px;" min="1" max="20" value="1" name="num_room">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NUMBER OF ADULTS </h3>
                <input type="NUMBER" style="width: 97%; height: 40px;" min="2" max="5" value="2" name="num_adult">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NUMBER OF CHILDS </h3>
                <input type="NUMBER" style="width: 97%; height: 40px;" min="0" max="5" value="0" name="num_child">

                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;" >SELECT A PACKAGE</h3>
                
                <?php  foreach($packages as $package) { ?>
                <label style="color: black;font-family: monospace;font-size: 15px;font-weight: normal;"><input name="packagePrice[]" type="checkbox"
                  value="<?php echo ($package['Pprice']);?>" > <?php echo htmlspecialchars(ucfirst($package['Pname'])) . ' - LKR ' . htmlspecialchars ($package['Pprice']);?><br></label>
                <?php } ?>
            
     		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CHECK IN DATE </h3>
     		    <input type="date" style="width: 97%;height: 40px;" name="check_in" min=<?php echo date('Y-m-d'); ?> >


                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CHECK OUT DATE </h3>
                <input type="date" style="width: 97%;height: 40px;" name="check_out"  min=<?php echo date('Y-m-d'); ?> >
		    <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> FULL NAME </h3>
                <input  type="text" name="fname"  autocomplete="off" value="<?php echo $fname; ?>" disabled="">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">USER NAME</h3>
                <input type="text" name="uname"  autocomplete="off" value="<?php echo $uname; ?>" disabled="">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> MOBILE NUMBER</h3>
                <input type="text" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>" disabled="">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;"> EMAIL </h3>
                <input type="text" name="email" autocomplete="on" value="<?php echo $email; ?>" disabled="">
            </div>


     	        <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
     		    <div style="padding-left: 23px; padding-top: 12px;">
     		    <button type="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > PROCEED </button>
     	        
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
