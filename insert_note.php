<?php include 'session.php'; ?>
<?php include 'connection.php'; ?>
<?php
    if(isset($_POST['saveapp']))
    {
      $apwith=$_POST['apwith'];
      $apreason=$_POST['reason'];
      $apdate=$_POST['apdate'];
      $priority=$_POST['priority'];
      $query=mysqli_query($con,"INSERT INTO `appointments`(`cid`, `uid`, `ap_on`, `postedon`, `reason`, `astatus`, `apwith`) VALUES ('3','$uid','$apdate',now(),'$apreason','pending','$apwith')") or die(mysqli_error($con));
      if($query==true)
      {
         echo '<script> alert("Appointment successfully");window.location="make_a_note.php";</script>';
      }
      else
      {
         echo '<script> alert("Failed");</script>';
      }

   }
   else if(isset($_POST['savemee']))
    {
      $mwith=$_POST['mwith'];
      $mreason=$_POST['reason'];
      $mdate=$_POST['mdate'];
      $priority=$_POST['priority'];
      $query=mysqli_query($con,"INSERT INTO `meeting`(`cid`, `uid`, `mwith`, `reason`, `mdate`, `postedon`, `mstatus`) VALUES ('6','$uid','$mwith','$mreason','$mdate',now(),'pending')") or die(mysqli_error($con));
      if($query==true)
      {
         echo '<script> alert("Meeting successfully");window.location="make_a_note.php";</script>';
      }
      else
      {
         echo '<script> alert("Failed");</script>';
      }

   }
   
  else if(isset($_POST['saveevt']))
    {
      $etitle=$_POST['etitle'];
      $description=$_POST['description'];
      $eventvenue=$_POST['evenue'];
      $eventdate=$_POST['edate'];
      $priority=$_POST['priority'];
      $query=mysqli_query($con, "INSERT INTO `event`(`cid`, `uid`, `etitle`, `description`, `evenue`, `eventdate`, `postedon`, `estatus`) VALUES ('8','$uid','$etitle','$description','$eventvenue','$eventdate',now(),'pending')") or die(mysqli_error($con));
      if($query==true)
      {
         echo '<script> alert("Event successfully");window.location="make_a_note.php";</script>';
      }
      else
      {
         echo '<script> alert("Failed");</script>';
      }

   }
   else if(isset($_POST['savebir']))
    {
      $bdate=$_POST['bdate'];
      $name=$_POST['name'];
      $priority=$_POST['priority'];
      $query=mysqli_query($con,"INSERT INTO `birthday`(`cid`, `uid`, `bdate`, `bname`, `bstatus`, `postedon`) VALUES ('5','$uid','$bdate','$name','pending',now())") or die(mysqli_error($con));
      if($query==true)
      {
         echo '<script> alert("successfully");window.location="make_a_note.php";</script>';
      }
      else
      {
         echo '<script> alert("Failed");</script>';
      }

   }
   else if(isset($_POST['savemem']))
    {
        $targetDir = "photos/";
        $allowTypes = array('jpg','png','jpeg','gif');
      
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        $title=$_POST['title'];
        $mem_desc=$_POST['mem_desc'];
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .=$fileName.',';
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].',';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].',';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = mysqli_query($con,"INSERT INTO `memories`(`cid`, `uid`, `memory_title`, `mem_desc`, `image`, `postedon`) VALUES ('4','$uid','$title','$mem_desc','$insertValuesSQL',now())") or die(mysqli_error($con));
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
              echo '<script> alert("Files are uploaded successfully.");window.location="make_a_note.php";</script>';
            }
            else
            {
              echo '<script> alert("Sorry, there was an error uploading your file.");window.location="make_a_note.php";</script>';
            }
            }
    
  }

   else if(isset($_POST['saverem']))
    {
      $thingname=$_POST['thingname'];
      $storage=$_POST['storage'];
      $date=$_POST['date'];
      $priority=$_POST['priority'];
      $query=mysqli_query($con,"INSERT INTO `reminder`(`uid`, `cid`, `thingname`, `storage`, `storedon`, `postedon`, `rstatus`) VALUES ('$uid','7','$thingname','$storage','$date',now(),'pending')") or die(mysqli_error($con));
      if($query==true)
      {
         echo '<script> alert("Reminder successfully");window.location="make_a_note.php";</script>';
      }
      else
      {
         echo '<script> alert("Failed");</script>';
      }

   }
   ?>
  