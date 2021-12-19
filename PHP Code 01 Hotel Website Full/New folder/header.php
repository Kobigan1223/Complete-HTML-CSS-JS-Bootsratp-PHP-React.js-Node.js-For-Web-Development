<?php
  
  session_start();
  if(isset($_SESSION['login']))
  {

    $name = $_SESSION['uname'];


  }
  ob_start();


?>
<!--UNREGISTERED USER'S HEADER-->

<?php echo 's';  if(!isset($_SESSION['login']))
{
?> 
<script>
function show() {
    
    document.getElementById("nevigate").style.display = "block";
    document.getElementById("logformbackgr2").style.width = "78%";

}

</script>

<!-- HEADER SECTION -->
<section class="header1">
<div class="header">
    <!-- HEADER LOGO -->
  	<a href="index.php" class="logo">HOTEL LUSTRIO INN</a>
       <!-- HEADER RIGHT-->
  	  <div class="header-right" id="axe">
          <!-- HEADER RIGHT-LINKS-->
          <a href="index.php" id="axe">Home</a>
          <a href="search.php" id="axe">Search</a>
          <a href="FAQ.php" id="axe" >FAQ</a>
          <a href="usersignup.php">Sign up</a>
          <a href="userlogin.php">Login</a>
          <a id="more" onclick="show()">More</a>
        <!-- HEADER RIGHT-LINKS-END-->
      </div>
</div>




</section>
<!-- END-OF-UN-REGISTERED USER'S-HEADER SECTION-->

<!--REGISTERED USER'S HEADER-->

<?php }  else if(isset($_SESSION['login'])){ ob_clean(); ?>
<!-- HEADER SECTION -->
<script>
function show2() {
    
    document.getElementById("nevigate").style.display = "block";
    document.getElementById("logformbackgr2").style.width = "78%";

}

</script>
<section class="header1">;
<div class="header">
    <!-- HEADER LOGO -->
    <a href="index.php" class="logo">HOTEL LUSTRIO INN</a>
       <!-- HEADER RIGHT-->
      <div class="header-right" id="axe">
          <!-- HEADER RIGHT-LINKS-->
          <a href="index.php" id="axe">Home</a>
          <a href="search.php" id="axe">Search</a>
          <a href="FAQ.php" id="axe" >FAQ</a>
          <a href="userprofile.php">Account </a>
          <a href="confirmlogout.php">Log Out</a>
           <a id="more" onclick="show2()">More</a>

        <!-- HEADER RIGHT-LINKS-END-->
      </div>
</div>
</section>
<!-- END-OF-REGISTERED USER'S-HEADER SECTION-->


<?php }  ?>
	

