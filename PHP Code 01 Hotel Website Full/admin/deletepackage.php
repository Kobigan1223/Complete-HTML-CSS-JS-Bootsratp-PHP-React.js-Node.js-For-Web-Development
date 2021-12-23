<?php
  
  
  


    
  if(isset($_POST['submit']))
  {

        
        require('includes/config.php');
    
        
        $cpname = mysqli_real_escape_string($conn ,$_POST['cpname']);
        
        
        
        
        $sql = "DELETE FROM Package WHERE Pname='$cpname'";

        if(mysqli_query($conn,$sql))
        {
            
            echo "<script>alert('Package Delected');
                 window.location.href='managepackages.php';
                  </script>";
            


        }else
        {

            echo 'query error : ' .mysqli_error($conn);

        }

    }   


?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Hotel Reservation system</title>
	<link rel="stylesheet" type="text/css" href="assets/css27/style.css">
	<script src="assets/js/scriptw.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<body background="assets/images/prism_abstract-1920x1080.jpg" class="fade" >
 
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
        <div class="fade" id="logformbackgr" style="height: 869px; position: absolute; position:absolute;z-index: 1; ">
            <h1 id="tit" style="color: white;font-family: monospace;font-weight: 0;text-align: center;margin-top: 30px;z-index: 1;"> DELETE PACKAGE </h1>
   			    <hr>
            <div style="margin-top: 50px;color: black;">
  
          <div class="login-container" style="padding-top: 0px">
            <form name="editpackage" action="deletepackage.php" method="POST" onsubmit="return basicvalidateForm2();">
                  <!--LOGING-FORM-HEADER-->
                <div class="head-container">
              
                         <h2 style="font-weight: normal;font-family: monospace; font-weight: normal;text-align: center;margin: 30px;padding-top: 20px;color: black;font-size: 25px;"> Package info  </h2>
                       
                </div>

                <!--LOGIN-FORM-CONTENT-->
              <div class="form-container">
             <h3 style="padding-top: 3%;color:black;font-family: monospace; font-weight: normal;">PACKAGE NAME </h3>
            <input type="text" name="cpname" value="">
             
            </div>

              <!--LOGIN-FORM-FOOTER-PART-->
                <div class="btn-container" style="overflow: auto;auto">
            <div style="padding-left: 23px; padding-top: 0px;">
            <button tyle="submit" name="submit" style="font-size: 13px; border-radius: 10px; background-color:#1ac6ff;font-family: monospace; font-weight: normal;width: 97%" > delete package </button>
              

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

    
<footer id="footer" style="position: absolute;top: 1079px;background-color: rgb(255,255, 255,0.3);"> <?php include('includes/footer.php');?> </footer>
</div>
</body>
</html>
