<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Personal Dairy</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Pizza-Pie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
            window.scrollTo(0, 1);
         }
      </script>      
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   </head>

      <div class="header-main" id="home">
         <!--headder-->
         <!--navbar-->
         <div class="header-outs">
            <div class="header-bar">
               <h1><a href="homepage.php">Notedownme</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="menu">
               <a href="" id="menuToggle"> <span class="navClosed"></span> </a>
               <nav>  
                  <a href="homepage.php" class="active">Home</a> 
                  <a href="make_a_note.php" >Make a note</a>  
                  <a href="view_my_notes.php">View my notes</a>  
                  <a href="my_piggy_bank.php">My piggy bank</a> 
                  <a href="reminder.php" >Reminders</a>  
                  <a href="profile.php">Profile</a>  
                  <a href="logout.php">Logout</a>

               </nav>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <!--//navbar-->
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="homepage.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Make a Note</li>
            </ul>
         </div>
      </div>
     

<?php include "connection.php";
   $id=$_GET['uid'];
   $query=mysqli_query($con,"DELETE from event where uid='$id'") or die(mysqli_error($con));
   if($query==true)
   {
      echo '<script>alert("Deleted Successfully");window.location="view_my_notes.php";</script>';
   }
   else
   {
      echo '<script>alert("Failed");window.location="view_my_notes.php";</script>';
   }
?>
    <footer>
         <p>©2018 Pizza-Pie. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">ARAVIND KUMAR</a></p>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--navbar-->
      <script type="text/javascript">
        </script> 
      <script>
         (function($){
            // Menu Functions
            $(document).ready(function(){
            $('#menuToggle').click(function(e){
               var $parent = $(this).parent('.menu');
              $parent.toggleClass("open");
              var navState = $parent.hasClass('open') ? "hide" : "show";
              $(this).attr("title", navState + " navigation");
                  // Set the timeout to the animation length in the CSS.
                  setTimeout(function(){
                     console.log("timeout set");
                     $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                  }, 200);
               e.preventDefault();
            });
           });
         })(jQuery);
      </script>
      <!--// navbar-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
               event.preventDefault();
               $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
               }, 900);
            });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
            var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1200,
               easingType: 'linear'
            };
         
         
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>
