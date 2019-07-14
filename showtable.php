<?php include 'session.php'; ?>
<?php $type=$_GET['type'];
	if($type=='appointment')
	{
		?>
		<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form action="" method="post">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl.No</th>
					<th>Appoinment Date</th>
					<th>Appointment With</th>
					<th>Appointment Reason</th>
					<th>Posted On</th>
					<th>Action</th>	
				</tr>
			</thead>
			<br>
			<h5 style="text-align: center; font-weight: bold; color: blue">View Appointment</h5><br>
         <div id="showtable">
			<tbody>
			 <?php include "connection.php";
			 	$i=1;
			 	$query=mysqli_query($con,"SELECT * from `appointments`") or die(mysqli_error($con));
			 	while($row=mysqli_fetch_array($query))
			 	{?>
			 		<tr>
			 			<td><?php echo $i++;?></td>
			 			<td><?php echo $row['ap_on'];?></td>
                        <td><?php echo $row['apwith'];?></td>
			 			<td><?php echo $row['reason'];?></td>
			 			<td><?php echo $row['postedon'];?></td>
			 			<td><a href="appointments.php?uid=<?php echo $row['uid'];?>" class="btn btn-primary" title="Update details"><i class="fa fa-edit"></i></a>||<a href="delete_app.php?uid=<?php echo $row['uid'];?>" class="btn btn-danger" title="Delete details" onclick="return confirm('Are you want to delete?');"><i class="fa fa-trash"></i></a>
			 			</td>
			 	    </tr>
			 			<?php
			     } 
			  ?>

				
			</tbody>
			</form>
			</table>
             </div>
			</div>
		</div>
		</div>

<?php } elseif ($type=='meeting') 
{ 
	?>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form action="" method="post">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl. No</th>
					<th>Meeting Date</th>
					<th>Meeting With</th>
					<th>Meeting Reason</th>
					<th>Posted On</th>
					<th>Action</th>	
				</tr>
			</thead>
			<br>
			<h5 style="text-align: center; font-weight: bold; color: blue">View Meeting</h5><br>
         <div id="showtable">
			<tbody>
			 <?php include "connection.php";
			 	$i=1;
			 	$query=mysqli_query($con,"SELECT * from `meeting`") or die(mysqli_error($con));
			 	while($row=mysqli_fetch_array($query))
			 	{?>
			 		<tr>
			 			<td><?php echo $i++;?></td>
			 			<td><?php echo $row['mdate'];?></td>
                        <td><?php echo $row['mwith'];?></td>
			 			<td><?php echo $row['reason'];?></td>
			 			<td><?php echo $row['postedon'];?></td>
			 			<td><a href="meeting.php?uid=<?php echo $row['uid'];?>" class="btn btn-primary" title="Update details"><i class="fa fa-edit"></i></a>||<a href="delete_mee.php?uid=<?php echo $row['uid'];?>" class="btn btn-danger" title="Delete details" onclick="return confirm('Are you want to delete?');"><i class="fa fa-trash"></i></a>
			 			</td>
			 	    </tr>
			 			<?php
			     } 
			  ?>

				
			</tbody>
			</form>
			</div>
		</div>
<?php } elseif ($type=='event')
 { 
	?>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form action="" method="post">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl. No</th>
					<th>Event Date</th>
					<th>Event Description</th>
					<th>Event Venue</th>
					<th>Posted On</th>
					<th>Action</th>	
				</tr>
			</thead>
			<br>
			<h5 style="text-align: center; font-weight: bold; color: blue">View Event</h5><br>
         <div id="showtable">
			<tbody>
			 <?php include "connection.php";
			 	$i=1;
			 	$query=mysqli_query($con,"SELECT * from `event`") or die(mysqli_error($con));
			 	while($row=mysqli_fetch_array($query))
			 	{?>
			 		<tr>
			 			<td><?php echo $i++;?></td>
			 			<td><?php echo $row['eventdate'];?></td>
                        <td><?php echo $row['description'];?></td>
			 			<td><?php echo $row['evenue'];?></td>
			 			<td><?php echo $row['postedon'];?></td>
			 			<td><a href="event.php?uid=<?php echo $row['uid'];?>" class="btn btn-primary" title="Update details"><i class="fa fa-edit"></i></a>||<a href="delete_evnt.php?uid=<?php echo $row['uid'];?>" class="btn btn-danger" title="Delete details" onclick="return confirm('Are you want to delete?');"><i class="fa fa-trash"></i></a>
			 			</td>
			 	    </tr>
			 			<?php
			     } 
			  ?>

				
			</tbody>
			</form>
			</div>
		</div>
		<?php } elseif ($type=='birthday') 
{ 
	?>
	<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form action="" method="post">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl. No</th>
					<th>Birthday Date</th>
					<th>Birthday Name</th>
					<th>Posted On</th>
					<th>Action</th>	
				</tr>
			</thead>
			<br>
			<h5 style="text-align: center; font-weight: bold; color: blue">View Birthday</h5><br>
         <div id="showtable">
			<tbody>
			 <?php include "connection.php";
			 	$i=1;
			 	$query=mysqli_query($con,"SELECT * from `birthday`") or die(mysqli_error($con));
			 	while($row=mysqli_fetch_array($query))
			 	{?>
			 		<tr>
			 			<td><?php echo $i++;?></td>
			 			<td><?php echo $row['bdate'];?></td>
                        <td><?php echo $row['bname'];?></td>
			 			<td><?php echo $row['postedon'];?></td>
			 			<td><a href="birthday.php?uid=<?php echo $row['uid'];?>" class="btn btn-primary" title="Update details"><i class="fa fa-edit"></i></a>||<a href="delete_bir.php?uid=<?php echo $row['uid'];?>" class="btn btn-danger" title="Delete details" onclick="return confirm('Are you want to delete?');"><i class="fa fa-trash"></i></a>
			 			</td>
			 	    </tr>
			 			<?php
			     } 
			  ?>

				
			</tbody>
			</form>
			</div>
		</div>
		<?php } elseif ($type=='memory')
	{
		?>
			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form action="" method="post">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl. No</th>
					<th>Memory Title</th>
					<th>Memory Description</th>
					<th>Image</th>
					<th>Posted On</th>
					<th>Action</th>	
				</tr>
			</thead>
			<br>
		    <h5 style="text-align: center; font-weight: bold; color: blue">View Memory</h5><br>
         <div id="showtable">
			<tbody>
			 <?php include "connection.php";
			 	$i=1;
			 	$query=mysqli_query($con,"SELECT * from `memories`") or die(mysqli_error($con));
			 	while($row=mysqli_fetch_array($query))
			 	{?>
			 		<tr>
			 			<td><?php echo $i++;?></td>
			 			<td><?php echo $row['memory_title'];?></td>
                        <td><?php echo $row['mem_desc'];?></td>
			 			<td>

			 			<!-- <img src="photos/<?php $img=explode(',', $row['image']); $image=$img[0];
			 			echo $image;?>" width="60" height="60"> -->

			 			<?php 
			 							
										$splittedstring=explode(",",$row['image']);
										foreach ($splittedstring as $key => $value) 
										{
												
										?>
										<img src="photos/<?php echo $value ?>" width="60" height="60">			
										
										<?php
										}
			 							?>

			 			</td>
			 			<td><?php echo $row['postedon'];?></td>
			 			<td><a href="memory.php?uid=<?php echo $row['uid'];?>" class="btn btn-primary" title="Update details"><i class="fa fa-edit"></i></a>||<a href="delete_mem.php?uid=<?php echo $row['uid'];?>" class="btn btn-danger" title="Delete details" onclick="return confirm('Are you want to delete?');"><i class="fa fa-trash"></i></a>
			 			</td>
			 	    </tr>
			 			<?php
			     } 
			  ?>

				
			</tbody>
			</form>
			</div>
		</div>
  <?php } elseif ($type=='reminder') 
{ 
	?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<form action="" method="post">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sl. No</th>
					<th>Reminder Date</th>
					<th>stuff Name</th>
					<th>Stored Place</th>
					<th>Posted On</th>
					<th>Action</th>	
				</tr>
			</thead>
			<br>
			<h5 style="text-align: center; font-weight: bold; color: blue">View Reminder</h5><br>
         <div id="showtable">
         </div>
			<tbody>
			 <?php include "connection.php";
			 	$i=1;
			 	$query=mysqli_query($con,"SELECT * from `reminder`") or die(mysqli_error($con));
			 	while($row=mysqli_fetch_array($query))
			 	{?>
			 		<tr>
			 			<td><?php echo $i++;?></td>
			 			<td><?php echo $row['storedon'];?></td>
                        <td><?php echo $row['thingname'];?></td>
			 			<td><?php echo $row['storage'];?></td>
			 			<td><?php echo $row['postedon'];?></td>
			 			<td><a href="view_reminder.php?uid=<?php echo $row['uid'];?>" class="btn btn-primary" title="Update details"><i class="fa fa-edit"></i></a>||<a href="delete_rem.php?uid=<?php echo $row['uid'];?>" class="btn btn-danger" title="Delete details" onclick="return confirm('Are you want to delete?');"><i class="fa fa-trash"></i></a>
			 			</td>
			 	    </tr>
			 			<?php
			     } 
			  ?>

				
			</tbody>
			</form>
			</div>
		</div>
<?php } 
 ?>