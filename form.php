<!DOCTYPE html>
<html>
  <head>
<?php require_once 'includes/head.php'; ?>
  </head>
<body>
	  
	 <h1>HTML web form examples with html5 validations</h1> 
<hr><br><br>  


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete=on enctype="application/x-www-form-urlencoded">
 <fieldset>
  <legend>Form example</legend>	
	<label for="userName">User Name</label>
	<input type="text" name="userName" id="userName" required maxlength="20" minlength="3">
	<label for="userEmail">Email</label>
	<input type="email" name="userEmail" id="userEmail" required>
	<label for="postcode">Postcode</label>
	<input type="text" id="postcode" name="postcode" required 
	pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}">
	<label for="phone">Tel. number</label>
	<input type="tel" id="phone" name="phone" required
	pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$">
	<label for="age">Age</label>
	<input type="number" id="age" name="age" step="1" min="13" placeholder="Min age 13">
	<label for="mnth">Month</label>
	<input type="month" id="mnth" name="mnth" required>
	<input type="image" alt="login" src="image/submit.png" width="97px" height="45px">
 </fieldset>
</form>	  


<form method="post" action="" autocomplete=off>
 <fieldset>
  <legend>Login form</legend>
	<label for="email">Email</label>
	<input type="email"	id="email" name="email" required>
	<label for="password">Password</label>
	<input type="password" id="password" name="password" required>
	<input type="submit" value="Login">
	<input type="reset"  value="Reset">
 </fieldset>
</form>

<form method="post" action=""  enctype="multipart/form-data">
 <fieldset>
  <legend>File upload</legend>
	<label for="file">Image</label>
	<input type="file" name="file" id="file" accept="image/*" required>
  </fieldset>
  <fieldset>
   <legend>Choose color</legend>
   	<label for="color">Color</label>
	<input type="color" id="color" name="color">   
  </fieldset>  
	<input type="submit" value="Download">
 </form>
	  

<form role="search">
<fieldset>
<legend>Search</legend>
<label for="find">Search</label>
<input type="search" id="find" name="find" placeholder="Search the site...." 
aria-label="Search through site content" required>
<button>Search</button>
</fieldset>
</form>




<form method="post" action="">
 <fieldset>
  <legend>Date</legend>
     <label for="noon">Time</label>
     <input type="time" id="noon" name="noon" min="12:00" max="22:00">
	<label for="date">Date</label>
	<input type="date" name="date" id="date" required 
	min="<?php echo date('Y-m-d',time()); // from now on ?>" 
	max="<?php echo date('Y-m-d', time() + 60 * 60 * 24 * 90); // three month ?>">
	<label for="volume">Volume</label>
	<input type="range" id="volume" name="valume" min="0" max="20" step="1">
	<input type="submit" value="Submit">
 </fieldset>
</form>

<!-- Not all browser support -->
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


<form method="post" action="">
 <fieldset>
  <legend>Website</legend>
      <label for="web">Website</label>
      <input type="url" id="web" name="web" pattern="https://.*" placeholder="https://www.example.com">
      <input type="submit" value="Submit">
 </fieldset>
</form>


<form method="post" action="">
 <fieldset>
  <legend>Week</legend>
    <label for="wknm">Week number</label>
    <input type="week" id="wknm" name="wknm">
    <input type="submit" value="submit">
 </fieldset>
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <fieldset>
  <legend>Checkbox</legend>
     <div class="left">
     <label><input type="checkbox" name="mon[]" value="monday">Monday</label>
     <label><input type="checkbox" name="mon[]" value="tuesday">Tuesday</label>
     <label><input type="checkbox" name="mon[]" value="wednesday">Wednesday</label>
     </div >
     <div class="left">
     <label><input type="checkbox" name="mon[]" value="thursday">Thursday</label>
     <label><input type="checkbox" name="mon[]" value="friday">Friday</label>
     <label><input type="checkbox" name="mon[]" value="saturday">Saturday</label>
     </div>
     <div class="clear"></div>
     <input type="submit" value="submit">
 </fieldset>
</form>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <fieldset>
  <legend>Radio boxes</legend>
      <div class="left">
      <label><input type="radio" name="jurney" value="bus">By bus</label>
      <label><input type="radio" name="jurney" value="car">By car</label>
      </div>
      <div class="left">
      <label><input type="radio" name="jurney" value="bicycle">By bicycle</label>
      <label><input type="radio" name="jurney" value="foot">By foot</label>
      </div>
      <div class="clear"></div>
      <input type="submit" value="Submit">    
            
            
 </fieldset>
</form>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <fieldset>
  <legend>Select Option</legend>
    <label for="pet">Favourite Pet</label>
    <select id="pet" name="pet">
	    <option value="">-select your favourite pet-</option>
	    <option value="dog">Dog</option>
	    <option value="cat">Cat</option>
	    <option value="horse">Horse</option>
	    <option value="parrot">Parrot</option>
    </select>
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
