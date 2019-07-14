<?php $type=$_GET['type'];
	if($type=='appointment')
	{
		?>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="insert_note.php" method="post">
					<div class="form-group">
						<label>Appointment with</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" name="apwith" placeholder="Enter the name of the person" class="form-control">
					</div>
					<div class="form-group">
						<label>Appointment Reason</label>
						<textarea placeholder="Enter the reason" name="reason" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Appointment on</label>
						<input type="datetime-local" pattern="[A-Za-z0-9\s]+" title="only date" name="apdate" class="form-control">
					</div>
					<div class="form-group">
	               <label>Priorities:</label><br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="important" checked="true">Important<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="average">Average<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="least">Least
	               </div>
					<div class="form-group">
						<label></label>
						<input type="submit" name="saveapp" value="Save" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
<?php } elseif ($type=='meeting') 
{ 
	?>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="insert_note.php" method="post">
					<div class="form-group">
						<label>Meeting with</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" name="mwith" placeholder="Enter the name of the person" class="form-control">
					</div>
					<div class="form-group">
						<label>Meeting Reason</label>
						<textarea placeholder="Enter the reason" name="reason" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Meeting on</label>
						<input type="datetime-local" pattern="[A-Za-z0-9\s]+" title="only letters" name="mdate" class="form-control">
					</div>
					<div class="form-group">
	               <label>Priorities:</label><br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="important" checked="true">Important<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="average">Average<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="least">Least
	               </div>
					<div class="form-group">
						<label></label>
						<input type="submit" name="savemee" value="Save" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
<?php } elseif ($type=='event')
 { 
	?>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="insert_note.php" method="post">
					<div class="form-group">
						<div class="form-group">
						<label>event Title</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" placeholder="Enter the event title" name="etitle" class="form-control">
					</div>
						<label>event description</label>
                        <textarea placeholder="Enter the description" name="description" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>event venue</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" placeholder="Enter the event venue" name="evenue" class="form-control">
					</div>
					<div class="form-group">
						<label>event on</label>
						<input type="datetime-local" pattern="[A-Za-z0-9\s]+" title="only letters" name="edate" class="form-control">
					</div>
					<div class="form-group">
	               <label>Priorities:</label><br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only"  name="priority" value="important" checked="true">Important<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="average">Average<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="least">Least
	               </div>
					<div class="form-group">
						<label></label>
						<input type="submit" name="saveevt" value="Save" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
		<?php } elseif ($type=='birthday') 
{ 
	?>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="insert_note.php" method="post">
					<div class="form-group">
						<label>Birthday date</label>
						<input type="date" pattern="[A-Za-z0-9\s]+" title="only letters" name="bdate" placeholder="Enter the birthday date" class="form-control">

					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" placeholder="Enter the name of the person" name="name" class="form-control"></label>
					</div>
					<div class="form-group">
	               <label>Priorities:</label><br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="important" checked="true">Important<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="average">Average<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="least">Least
	               </div>
					<div class="form-group">
						<label></label>
						<input type="submit" name="savebir" value="Save" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
		<?php } elseif ($type=='memory')
	{
		?>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="insert_note.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Memory title</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" name="title" placeholder="Enter the memory title" class="form-control">
					</div>
					<div class="form-group">
						<label>Memory Description</label>
						<textarea placeholder="Enter the memory description" name="mem_desc" class="form-control"></textarea>
					</div>
					<div class="row">
							<label>Select Image files to upload</label>
							<input type="file" name="files[]" multiple >
					</div>
					<div id="imgbox1"></div>
					<div id="imgbox2"></div>
					<div id="imgbox3"></div>
					<div id="imgbox4"></div>
					<div class="form-group">
	               <label>Priorities:</label><br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="important" checked="true">Important<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="average">Average<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="least">Least
	               </div>
					<div class="form-group">
						<label></label>
						<input type="submit" name="savemem" value="Save" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
  <?php } elseif ($type=='reminder') 
{ 
	?>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="insert_note.php" method="post">
					<div class="form-group">
						<label>Stuff name</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" name="thingname" placeholder="Enter the name of the person" class="form-control">
					</div>
					<div class="form-group">
						<label> Stored Place</label>
						<input type="text" pattern="[A-Za-z]+" title="letters only" name="storage" placeholder="Enter the reason" class="form-control">
					</div>
					<div class="form-group">
						<label>Kept date</label>
						<input type="datetime-local" pattern="[A-Za-z0-9\s]+" title="only letters" name="date" class="form-control">
					</div>
				    <div class="form-group">
	               <label>Priorities:</label><br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="important" checked="true">Important<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="average">Average<br>
	               <input type="radio" pattern="[A-Za-z]+" title="letters only" name="priority" value="least">Least
	               </div>
					<div class="form-group">
						<label></label>
						<input type="submit" name="saverem" value="Save" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
<?php } 
 ?>