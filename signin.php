<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
	</head>
<style>
	body {
background-color: darkblue;
}

#container {
width:850px;
margin-left: 600px;
}

.sign-in-form {
width:500px;
margin-top:180px;
}

.sign-in-form table{
width:100%;
background-color:#F4F4F4;
margin:auto;
padding: 50px;
}

.sign-in-form h1 {
color:goldenrod;
text-shadow:2px 2px 2px #000000;
}

.sign-in-form  hr{
width:410px;
float:left;
}

.sign-in-form label {
color:#000000;
font-size:19px;
font-weight:bold;
margin-right:30px;
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

.btn-sign-in {
color:#000000;
font-size:19px;
width:100px;
line-height:30px;
background-color:#ffffff;
border:2px solid goldenrod;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-sign-in:hover {
color:black;
background-color:goldenrod;
border:2px solid white;
}

.btn-sign-up {
color:#ffffff;
font-size:19px;
width:100px;
line-height:30px;
background-color:goldenrod;
border:2px solid white;
border-radius:100px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-o-border-radius:100px;
}

.btn-sign-up:hover {
color:black;
background-color:white;
border:2px solid goldenrod;
}
</style>
<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<h1>Sign in at Socializar</h1>
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="example@gmail.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="*******" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>