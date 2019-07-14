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
   $query=mysqli_query($con,"SELECT * from memories where uid='$id'")or die(mysqli_error($con));
   $row=mysqli_fetch_array($query);
?>
<div class="container">
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form action="" method="POST">
      <div class="row">
         <div class="col-md-6 form-group">
            <label>Memory Title</label>
            <input type="text" name="memory_title" class="form-control" placeholder="Enter Memory Title" value="<?php echo $row['memory_title']; ?>">
         </div>   
         <div class="col-md-6 form-group">
            <label>Memory Description</label>
            <input type="text" name="mem_desc" class="form-control" placeholder="Enter Memory Description" value="<?php echo $row['mem_desc']; ?>">
         </div>
      </div>

      <div class="row">
         <div class="col-md-6 form-group">
            <label>Image1</label>
            <input type="text" class="form-control" name="image1" placeholder="Enter Stored Place" value="<?php echo $row['image1']; ?>">
            </div>
            <div class="col-md-6 form-group">
            <label>Image2</label>
            <input type="text" class="form-control" name="image2" placeholder="Enter Stored Place" value="<?php echo $row['image2']; ?>">
            </div>
             <div class="col-md-6 form-group">
            <label>Image3</label>
            <input type="text" class="form-control" name="image3" placeholder="Enter Stored Place" value="<?php echo $row['image3']; ?>">
            </div>
            <div class="col-md-6 form-group">
            <label>Image4</label>
            <input type="text" class="form-control" name="image4" placeholder="Enter Stored Place" value="<?php echo $row['image4']; ?>">
            </div>
             <div class="col-md-6 form-group">
            <label>Image5</label>
            <input type="text" class="form-control" name="image5" placeholder="Enter Stored Place" value="<?php echo $row['image5']; ?>">
            </div>
         <div class="col-md-6 form-group">
            <label>Posted On</label>
            <input type="text" name="postedon" class="form-control" placeholder="Enter Posted On" value="<?php echo $row['postedon']; ?>">
         </div>
      </div>
         <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-4">
            <input type="submit" name="submit" class="btn btn-success btn-block" value="Update">
         </div>
      </div>
      </form>
    </div>
   </div>
   </div>
  
<?php
   if(isset($_POST['submit']))
   {
         if(isset($_FILES['image']['name']))
    {
     //Image storing code
          
          $file = rand(1000,100000)."-".$_FILES['image']['name'];
          $file_loc = $_FILES['image']['tmp_name'];
          $file_size = $_FILES['image']['size'];
          $file_type = $_FILES['image']['type'];
          $folder="photos/";
          // new file size in KB
          $new_size = $file_size/2048;  
          // new file size in KB          
          // make file name in lower case
          $new_file_name = strtolower($file);
          // make file name in lower case         
          $final_file=str_replace(' ','-',$new_file_name);



        
          $file1 = rand(1000,100000)."-".$_FILES['image1']['name'];
          $file_loc1 = $_FILES['image1']['tmp_name'];
          $file_size1 = $_FILES['image1']['size'];
          $file_type = $_FILES['image1']['type'];
          $folder="photos/";
          // new file size in KB
          $new_size1 = $file_size1/2048;  
          // new file size in KB          
          // make file name in lower case
          $new_file_name1 = strtolower($file1);
          // make file name in lower case         
          $final_file1=str_replace(' ','-',$new_file_name1);

           
                    
          $file2 = rand(1000,100000)."-".$_FILES['image2']['name'];
          $file_loc2= $_FILES['image2']['tmp_name'];
          $file_size2 = $_FILES['image2']['size'];
          $file_type = $_FILES['image2']['type'];
          $folder="photos/";
          // new file size in KB
          $new_size3 = $file_size2/2048;  
          // new file size in KB          
          // make file name in lower case
          $new_file_name2 = strtolower($file2);
          // make file name in lower case         
          $final_file2=str_replace(' ','-',$new_file_name2);




          $file13 = rand(1000,100000)."-".$_FILES['image3']['name'];
          $file_loc3 = $_FILES['image3']['tmp_name'];
          $file_size3 = $_FILES['image3']['size'];
          $file_type = $_FILES['image3']['type'];
          $folder="photos/";
          // new file size in KB
          $new_size3 = $file_size3/2048;  
          // new file size in KB          
          // make file name in lower case
          $new_file_name3 = strtolower($file3);
          // make file name in lower case         
          $final_file3=str_replace(' ','-',$new_file_name3);



           $file4 = rand(1000,100000)."-".$_FILES['image4']['name'];
          $file_loc4 = $_FILES['image4']['tmp_name'];
          $file_size4 = $_FILES['image4']['size'];
          $file_type = $_FILES['image4']['type'];
          $folder="photos/";
          // new file size in KB
          $new_size4 = $file_size4/2048;  
          // new file size in KB          
          // make file name in lower case
          $new_file_name4 = strtolower($file4);
          // make file name in lower case         
          $final_file4=str_replace(' ','-',$new_file_name4);

 if(move_uploaded_file($file_loc,$folder.$final_file)|move_uploaded_file($file_loc1,$folder.$final_file1)|move_uploaded_file($file_loc2,$folder.$final_file2)|move_uploaded_file($file_loc3,$folder.$final_file3)|move_uploaded_file($file_loc4,$folder.$final_file4))
          {// Start of if image file upload successful


      $title=$_POST['title'];
      $mem_desc=$_POST['mem_desc'];
$query=mysqli_query($con,"UPDATE `memories` SET `memory_title`='$memory_title',`mem_desc`='$mem_desc',`image1`='image1',`image2`='$image2',`image3`='$image3',`image4`='$imagee4',`image5`='$image5',`postedon`='$postedon' WHERE  uid='$id'") or die(mysqli_error($con));
       
       if($query==true)
         {
            echo '<script>alert("Updated");window.location="view_my_notes.php";</script>';
         }
         else
         {
            echo '<script>alert("Update Failed");window.location="view_my_notes.php"</script>';
         }
      
      if($query==true)
      {
         // echo '<script> alert("Memory successfully");window.location="make_a_note.php";</script>';
      }
      else
      {
         // echo '<script> alert("Failed");</script>';
      }
    
      
         $title=$_POST['title'];
      $mem_desc=$_POST['mem_desc'];
      $query=mysqli_query($con,"UPDATE `memories` SET `memory_title`='$memory_title',`mem_desc`='$mem_desc',`postedon`='$postedon' WHERE  uid='$id'") or die(mysqli_error($con));
       
       if($query==true)
         {
            echo '<script>alert("Updated");window.location="view_my_notes.php";</script>';
         }
         else
         {
            echo '<script>alert("Update Failed");window.location="view_my_notes.php"</script>';
         }
      
    

      
         $title=$_POST['title'];
      $mem_desc=$_POST['mem_desc'];
$query=mysqli_query($con,"UPDATE `memories` SET `memory_title`='$memory_title',`mem_desc`='$mem_desc',`postedon`='$postedon' WHERE  uid='$id'") or die(mysqli_error($con));
       
       if($query==true)
         {
            echo '<script>alert("Updated");window.location="view_my_notes.php";</script>';
         }
         else
         {
            echo '<script>alert("Update Failed");window.location="view_my_notes.php"</script>';
         }
      
      
      
         $title=$_POST['title'];
      $mem_desc=$_POST['mem_desc'];

      $query=mysqli_query($con,"UPDATE `memories` SET `memory_title`='$memory_title',`mem_desc`='$mem_desc',`postedon`='$postedon' WHERE  uid='$id'") or die(mysqli_error($con));
       
       if($query==true)
         {
            echo '<script>alert("Updated");window.location="view_my_notes.php";</script>';
         }
         else
         {
            echo '<script>alert("Update Failed");window.location="view_my_notes.php"</script>';
         }
      
      
         $title=$_POST['title'];
      $mem_desc=$_POST['mem_desc'];
     $query=mysqli_query($con,"UPDATE `memories` SET `memory_title`='$memory_title',`mem_desc`='$mem_desc',`postedon`='$postedon' WHERE  uid='$id'") or die(mysqli_error($con));
       
       if($query==true)
         {
            echo '<script>alert("Updated");window.location="view_my_notes.php";</script>';
         }
         else
         {
            echo '<script>alert("Update Failed");window.location="view_my_notes.php"</script>';
         }
      
      }
    }
      
 }
      // $memory_title=$_POST['memory_title'];
      // $mem_desc=$_POST['mem_desc'];
      // $image1=$_POST['image1'];
      // $image2=$_POST['image2'];
      // $image3=$_POST['image3'];
      // $image4=$_POST['image4'];
      // $image5=$_POST['image5'];     
      // $postedon=$_POST['postedon'];
      
      // $query=mysqli_query($con,"UPDATE `memories` SET `memory_title`='$memory_title',`mem_desc`='$mem_desc',`image1`='image1',`image2`='$image2',`image3`='$image3',`image4`='$imagee4',`image5`='$image5',`postedon`='$postedon' WHERE  uid='$id'") or die(mysqli_error($con));
       
      //  if($query==true)
      //    {
      //       echo '<script>alert("Updated");window.location="view_my_notes.php";</script>';
      //    }
      //    else
      //    {
      //       echo '<script>alert("Update Failed");window.location="view_my_notes.php"</script>';
      //    }
      // }
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
