<!DOCTYPE html>
<html>
  <head>
<?php require_once 'includes/head.php'; ?>
  </head>
<body>
	  
	 <h1>HTML web form examples with html5 validations</h1> 
<hr><br><br>  


<form method="post" action="form.html" autocomplete=on enctype="application/x-www-form-urlencoded">
 <fieldset>
  <legend>Text, Email</legend>	
	<label for="userName">User Name</label>
	<input type="text" name="userName" id="userName" required maxlength="20" minlength="3">
	<label for="userEmail">Email</label>
	<input type="email" name="userEmail" id="userEmail" required>
	<input type="submit" value="Submit">
 </fieldset>
</form>	  



<form method="post" action="" autocomplete=off enctype="multipart/form-data">
 <fieldset>
  <legend>File upload</legend>
	<label for="file">Image</label>
	<input type="file" name="file" id="file">
	<input type="submit" value="Download">
 </fieldset>
</form>
	  

<form method="post" action="">
 <fieldset>
  <legend>Choose color</legend>
	<label for="color">Color</label>
	<input type="color" id="color" name="color">
	<input type="submit" value="Submit">
 </fieldset>
</form>




<form method="post" action="">
 <fieldset>
  <legend>Date</legend>
	<label for="date">Date</label>
	<input type="date" name="date" id="date" required 
	min="<?php echo date('Y-m-d',time()); // from now on ?>" 
	max="<?php echo date('Y-m-d', time() + 60 * 60 * 24 * 90); // three month ?>">
	<input type="submit" value="Submit">
 </fieldset>
</form>


<form method="post" action="">
 <fieldset>
  <legend>datetime-local</legend>
      <label for="party">Party time</label>
      <input type="datetime-local" name="party" id="party"  required
      min="<?php echo date('Y-m-d',time()); // from now on ?>" 
	 max="<?php echo date('Y-m-d', time() + 60 * 60 * 24 * 10); // ten days ?>">
	 <input type="submit" value="Submit">	
 </fieldset>
</form>

<!-- doesn't working -->
<form method="post" action="">
 <fieldset>
 <legend>Data list</legend>
  <label for="browsers">Choose favourite browser</label>
  <input list="browsers" id="browsers" name="browsers" class="datalist"/>
   <datalist id="browsers">
	<option value="Chrome">
	<option value="Firefox">
	<option value="Internet Explorer">
	<option value="Opera">
	<option value="Safari">
   </datalist>
 </fieldset>
</form>


</body>
  
  
  
 <script src="javascript.js"></script> 
</html>
