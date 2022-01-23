<!DOCTYPE html>
<html>

	<head>
		<title>Sign Up</title>
	</head>
<style>
	body {
background-color: darkred;
}

#container {
width:1150px;
margin:auto;
}

#container a {
text-decoration:none;
}

.sign-in-form {
width:1150px;
margin:auto;
}

.sign-in-form h1 {
color:goldenrod;
text-shadow:2px 2px 2px #000000;
margin:auto;
}

.sign-in-form h2 {
color:goldenrod;
text-shadow:2px 2px 2px #000000;
margin-left:210px;
}

.sign-in-form b {
color:white;
margin-left:780px;
}

.sign-in-form strong {
margin-left:210px;
}

.sign-in-form  hr{
width:410px;
float:left;
}

.sign-in-form label {
color:#000000;
font-size:19px;
font-weight:bold;
}

.form-1 {
width:300px;
text-indent:5px;
height:25px;
font-size:19px;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}

.form-2 {
width:60px;
text-indent:5px;
height:25px;
font-size:19px;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-o-border-radius:5px;
}

.btn-sign-in {
color:black;
font-size:19px;
width:200px;
line-height:30px;
background-color:goldenrod;
border:2px solid white;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
margin-left:210px;
}

.btn-sign-in:hover {
color:black;
background-color:white;
border:2px solid goldenrod;
}

.sign-up-form-1 {
width:700px;
background-color:#F4F4F4;
margin:auto;
}

.sign-up-form-1 table {
width:100%;
background-color:#F4F4F4;
margin:auto;
}

.sign-up-form-1 legend {
font-size:30px;
font-weight:bold;
}
</style>
<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1>Welcome to SOCIALIZAR</h1>
		</center>

			<h2>Create Account</h2>
			<b>All fields are required.</b>
		<br />
		
		<fieldset class="sign-up-form-1">
		<form method="post" action="signup_form.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>First name*</label></td>
					<td><label>Last name *</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter your firstname" class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Enter your lastname" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>User name*</label></td>
					<td><label>Repeat user name*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter your username" class="form-1" title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />		
		
		<fieldset class="sign-up-form-1">
			<h1>Personal information</h1>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Birthday*</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1901;
					while($year<=2014)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender*</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Mobile number*</label></td>
					<td><input type="text" name="number" placeholder="#" maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
		<fieldset class="sign-up-form-1">
			<h1>Log in information*</h1>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Your email address*</label></td>
					<td><label>Repeat email*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Enter your email address....." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="email2" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>Password*</label></td>
					<td><label>Repeat password*</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter your password....." class="form-1" title="Enter your username" required /></td>
					<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
				</tr>
			</table>
		</fieldset>
		<br />
					<input type="submit" name="submit" value="Register" class="btn-sign-in" title="Log in" />
		</form>
		
		</div>
	</div>

</body>

</html>