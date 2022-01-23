<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Socializar!</title>
</head>
<style>
	body {
background-image: url('image/bg.jpg');
background-attachment: fixed;
background-size: 100% 100%;
}

#header {
background-color:darkblue;
width:100%;
margin-top:-8px;
}

.head-view {
margin:auto;
width:1000px;
line-height:50px;
}

.head-view ul {
width: 1000px;
margin: auto;
padding: 30px;
}

.head-view  li {
display: inline;
color: #fff;
padding: 30px;
}

.head-view b {
color:goldenrod;
text-shadow:3px 3px 3px #000000;
font-size:50px;
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

	<div id="header">
		<div class="head-view">
			<ul>
				<li><b>SOCIALIZAR</b></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="signin.php" title="Sign in"><button class="btn-sign-in" value="Sign in">Sign in</button></a></li>
				<li><a href="signup.php" title="Sign up"><button class="btn-sign-up" value="Sign up">Sign up</button></a></li>
			</ul>
		</div>
	</div>
</body>

</html>