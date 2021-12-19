
<?php
  

  require('includes/config.php');
  
  $sql2 = 'SELECT  * FROM roomtype';
  
  $result = mysqli_query($conn, $sql2);

  $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  mysqli_free_result($result);
 
  //mysqli_close($conn);

  $sql3 = 'SELECT  * FROM package';
  
  $result2 = mysqli_query($conn, $sql3);

  $packages = mysqli_fetch_all($result2, MYSQLI_ASSOC);
  
  mysqli_free_result($result2);
 
  //mysqli_close($conn);

  if(isset($_POST['submit']))
  {
    $rooID = $_POST['room_id'];
    $numROOM = $_POST['num_room'];
    
    $sql5 = "SELECT  * FROM roomtype WHERE id = '$rooID'";
  
    $result5 = mysqli_query($conn, $sql5);

    $availrooms = mysqli_fetch_all($result5, MYSQLI_ASSOC);

    foreach ($availrooms as $availroom) {
      $availR = $availroom['availrooms'];
      //echo "<script>alert('$availR')</script>";
    }

    if($numROOM <= $availR)
    {

      header('Location:roomisavailable.php');

    }else
    {

      
      header('Location:roomisnotavailable.php');

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            $id = $_SESSION['uid'];
            //$password = $_SESSION['pword'].'sdshjdghsgdhgshgdjsg';
    
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
            <form name="myForm" method="POST" action="checkavailability.php" onsubmit="return basicvalidateForm();">
                  <!--LOGING-FORM-HEADER-->`
                <div class="head-container">
              
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;"> CHECK AVAILABILITY </h2>
        
                </div>

                <!--LOGIN-FORM-CONTENT-->
              <div class="form-container-signup" style="z-index: 1;">
                
            <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">SELECT A ROOM </h3>
            <select style="width: 97%;height: 40px;" name="room_id">
                <?php  foreach($rooms as $room) { 

                  $TypeID = $room['id'];



                 ?>
                <option  value="<?php echo ($room['id']);?>" > <?php echo htmlspecialchars(ucfirst($room['type'])) . ' - LKR ' . htmlspecialchars ($room['price']);?></option>
                <?php } ?>
                </select>
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NUMBER OF ROOMS </h3>
                <input type="NUMBER" style="width: 97%; height: 40px;" required="" min="1" value="1" name="num_room">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NUMBER OF ADULTS </h3>
                <input type="NUMBER" style="width: 97%; height: 40px;" required="" min="2" max="5" value="2" name="num_adult">
                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">NUMBER OF CHILDS </h3>
                <input type="NUMBER" style="width: 97%; height: 40px;" required="" min="0" max="5" value="0" name="num_child">

               
            
            <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CHECK IN DATE </h3>
            <input type="date" style="width: 97%;height: 40px;" required="" name="check_in" min=<?php echo date('Y-m-d'); ?> >


                <h3 style="padding-top: 1%;padding-bottom: 0%;color:black;font-family: monospace; font-weight: normal;">CHECK OUT DATE </h3>
                <input type="date" style="width: 97%;height: 40px;" required="" name="check_out"  min=<?php echo date('Y-m-d'); ?> >
        
            </div>


              <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container">
            <div style="padding-left: 23px; padding-top: 12px;">
            <button type="submit" name="submit"  style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;" > CHECK </button>
              
               <label style="font-size: 13; border-radius: 10px; background-color: transparent;font-family: monospace; font-weight: normal;width: 200px;margin-left: 10%;"><a href="index.php" style="color:white;"> cancel</a></label>

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
