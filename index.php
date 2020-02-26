<html>
<title>Registration</title>
<body>

<form action="action/validate.php" method="post">
	<h2>REGISTRATION</h2>
	First Name    : <input type="text" name="fname" required><br>
	Last Name     : <input type="text" name="lname" required><br>
	Middle Name   : <input type="text" name="mname" required><br>
	Address       : <input type="text" name="address" required><br>
	Date of Birth : <input type="date" name="dob" required><br>
	<input type="radio" id="male" name="gender" value="MALE" required>
  	<label for="male">Male</label><br>
  	<input type="radio" id="female" name="gender" value="FEMALE">
  	<label for="female">Female</label><br>
  	<input type="radio" id="other" name="gender" value="OTHER">
  	<label for="other">Other</label><br>
  	Guardian   	  : <input type="text" name="guard" required><br>
  	Contact Number: <input type="text" name="connum" value="+63"  pattern="[+0-9]{13}" required><br>
  	Civil Status  : <input type="text" name="civstat" required><br>
  	Year Level    : 
  	<select name="level" id="level" required>
  		<option value="First Year">1st</option>
  		<option value="Second Year">2nd</option>
  		<option value="Third Year">3rd</option>
  		<option value="Fourth Year">4th</option>
  		<option value="Fifth Year">5th</option>
  	</select>
  	Course 		  : 
  	<select name="course" id="course" required>
  		<option value="Information Tech.">IT</option>
  		<option value="Computer Eng.">CPE</option>
  		<option value="TeleCommuManagement">TCM</option>
  	</select><br>
  	School Year   : <input type="text" name="year" required><br>
<input type="submit">
</form>

</body>
</html>