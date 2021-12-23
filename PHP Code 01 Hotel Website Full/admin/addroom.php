<?php
  
    
  
  




    
  if(isset($_POST['submit']))
  {

        
        require('includes/config.php');
    
        
        $rname = mysqli_real_escape_string($conn ,$_POST['rname']);
        $rprice = mysqli_real_escape_string($conn ,$_POST['rprice']);
        $detailss = mysqli_real_escape_string($conn ,$_POST['rdetails']);
        $cstock = mysqli_real_escape_string($conn ,$_POST['cstock']);
        
        $sql = "INSERT INTO RoomType(Rtypename,TypeDetails,Rtypeprice,stock,availrooms) VALUES('$rname','$detailss','$rprice','$cstock','$cstock')";

        if(mysqli_query($conn,$sql))
        {
            
            echo "<script> alert('room successfully added') </script> ";  


        }else
        {

            echo 'query error : ' .mysqli_error($conn);

        }

        $sql3 = "SELECT * FROM RoomType WHERE Rtypename = '$rname' ";
        $result = mysqli_query($conn,$sql3);

        $dets = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($dets as $det)
        {

          $quan = $det['TypeID'];

        }

        for($x=1 ; $x <=  $cstock ; $x++)
        {

          $sql3 = "INSERT INTO Room(TypeID) VALUES('$quan')";

        if(mysqli_query($conn,$sql3))
        {
            
            header("Location:managerooms.php");


        }else
        {

            echo 'query error : ' .mysqli_error($conn);

        }

        }





    }   


?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css28/style.css">
	<script src="assets/js/scriptw.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body background="assets/images/prism_abstract-1920x1080.jpg" class="fade" >
  <?php include('includes/config.php') ?>
   	<!--INCLUDING HEADER AND THE NEVIGATION --->
	<header id="header"> <?php include('includes/header.php');?> </header>
	<nev id="neVV"> <?php include('includes/nevigation.php');?> </nev>

  <?php
  
  
        if (empty($_SESSION['aname']))
        {
            // The username session key does not exist or it's empty.
            header('Location: adminlogin.php');
    
        }


    ?>
<!--PAGE WITH FOOTER-FOOTER-POSITIONING-->
<div id="page-container" >
  
   <!--PAGE CONTENT-->

   <div id="content-wrap" style="padding-top:150px; padding-left:20px; ">
   
    
 
   
   <div id="content-wrap" style="padding-top:240px; padding-left:20px; ">

        <!--LOGING-FORM-TRANSPARENT-BACKGROUN-->
        <div class="fade" id="logformbackgr" style="width: 100%; height: 1269px; position: absolute; left: 0;right: 0;bottom: 0;background-color: rgb(0,0,0,0.5);position: absolute;z-index: 1;  ">
            <h1 id="tit"> ADD ROOM TYPE </h1>
   			    <hr>
            <div style="margin-top: 20px;color: black;">
  
          <div class="login-container" id="login-container" style="padding-top: 0px;">
            <form name="addroom" action="addroom.php" method="POST" onsubmit="return basicvalidateForm();" enctype="multipart/form-data">
                  <!--LOGING-FORM-HEADER-->
                <div class="head-container" id="head-container">
              
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;color: black;font-size: 25px;"> Type info  </h2>
        
                </div>

                <!--LOGIN-FORM-CONTENT-->
              <div class="form-container" style="height: auto;">
            <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">ROOM TYPE NAME </h3>
            <input type="text" name="rname" >
            <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">PRICE </h3>
            <input type="text" name="rprice" >
            <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">DETAILS </h3>
            <textarea rows="4" cols="50" name="rdetails" style="width: 97%;border-radius: 5px; " name="rdetails"></textarea>
            <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">CURRUNT STOCK </h3>
            <input type="text" name="cstock" >
            <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">CHOOSE IMAGES </h3>
            <input type="file" name=img[] multiple="multiple" style="height: : 20px; width: 97%" >
           
            </div>

              <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container" style="overflow: auto;auto">
            <div style="padding-left: 23px; padding-top: 12px;">
            <button tyle="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;width: 97%" > create room </button>
              

            </div>


                </div>


          </form>

            </div>


   			</div>
            
                  
     	          

               
     	       

     	 

            </div>

    </div>


   



   
   </div>

  

</div>

 </div>

    
<footer id="footer" style="position: absolute;top: 1279px;background-color: rgb(255,255, 255,0.3);z-index: 1;"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
