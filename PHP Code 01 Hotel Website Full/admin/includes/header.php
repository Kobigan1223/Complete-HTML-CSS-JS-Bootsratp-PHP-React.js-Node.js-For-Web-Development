<?php
  
  session_start();
  
  ob_start();


?>
<!--UNREGISTERED USER'S HEADER-->

<?php echo 's'; if(!isset($_SESSION['alogin']))
{
?> 
<!-- HEADER SECTION -->
<script>
function show() {
    
    document.getElementById("nevigate").style.display = "block";
    document.getElementById("logformbackgr").style.width = "73%";

}

</script>
<section class="header1">
<div class="header">
    <!-- HEADER LOGO -->
    <a href="#" class="logo">HOTEL LUSTRIO INN</a>
       <!-- HEADER RIGHT-->
      <div class="header-right" id="axe">
          <!-- HEADER RIGHT-LINKS-->
          <a href="admindashboard.php" id="axe">Dashboard</a>
          
          
          <a href="userlogin.php">Forgot password</a>
         <a id="more" onclick="show()">More</a>
        <!-- HEADER RIGHT-LINKS-END-->
      </div>
</div>
</section>
<!-- END-OF-UN-REGISTERED USER'S-HEADER SECTION-->

<!--REGISTERED USER'S HEADER-->

<?php }  else if(isset($_SESSION['alogin'])){ ob_clean(); ?>
<!-- HEADER SECTION -->
<script>
function show() {
    
    document.getElementById("nevigate").style.display = "block";
    document.getElementById("logformbackgr").style.width = "73%";

}

</script>
<section class="header1">;
<div class="header">
    <!-- HEADER LOGO -->
    <a href="#" class="logo">HOTEL LUSTRIO INN</a>
       <!-- HEADER RIGHT-->
      <div class="header-right" id="axe">
          <!-- HEADER RIGHT-LINKS-->
          <a href="admindashboard.php" id="axe">Dashboard</a>
         
          <a href="changeadminpassword.php">Change password</a>
          
          <a href="confirmlogout.php">Log Out</a>
          <a id="more" onclick="show()">More</a>
        <!-- HEADER RIGHT-LINKS-END-->
      </div>
</div>
</section>
<!-- END-OF-REGISTERED USER'S-HEADER SECTION-->


<?php }  ?>
  



