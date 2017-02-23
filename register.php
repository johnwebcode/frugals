<?php include 'config.php'; 

if(!empty($_SESSION['username'])) {
 Header("Location:login-success.php");
}

?>
<html>
<head>
<title>Login Form</title>
</head>
<body>

<?php
 
if(!empty($_POST['username'])) {

	$query = mysql_query("select * from users where username = '".$_POST['username']."' ") or die(mysql_error());

	if(mysql_num_rows($query) == 0) {

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		mysql_query("INSERT INTO users(username, firstname, lastname, password) 
		VALUES ('".$username."', '".$firstname."', '".$lastname."', '".$password."')") or die(mysql_error());

		echo "<p style='color:green;'>You have successfully created account! Click <a href='login.php'>here</a> to login.</p>";


	} else {

		echo "<p style='color:red;'>Username already taken by another users in system!</p>";

	}

exit(0);

}

?>
<h2>Registration Form</h2>

<form id="loginForm" name="loginForm" method="post" action="">

First Name 	<input name="fname" type="text" id="fname" /> <br/><br/>

Last Name 	<input name="lname" type="text" id="lname" /> <br/><br/>

Login Username <input name="username" type="text" id="username" /> <br/><br/>

Password 	<input name="password" type="password" id="password" /> <br/><br/>

<input type="submit" name="Submit" value="Register" />

</form>
</body>
</html>
