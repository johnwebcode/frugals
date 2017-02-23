<?php include 'config.php'; 
if(!empty($_SESSION['viewtable.php'])) {
 Header("Location:login.php");
}?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/page.js"></script>
</head>
<body>

<?php
if(!empty($_GET['username'])) {

		$username = $_GET['username'];
		$password = md5($_GET['password']);
        

	$query = mysql_query("select * from users where username = '".$username."' and password = '".$password."' ") or die(mysql_error());

	if(mysql_num_rows($query) > 0) {

		$_SESSION['username'] = $username; 
		header('location:viewtable.php?username=$username&password=$password');
			exit(0);
		
		
	} else {

		echo "<p style='color:red;'>Username or Password is incorrect!</p>";

	}


}

?>

    <div class="login">
<form id="loginForm" name="loginForm" method="GET" action="">
 <div class="row">
 <div class="form-group">
                    <input type="text" name="username" class="form-control con-form" placeholder="User Name" required="required"> </div>
  <div class="form-group">
                    <input type="password" name="password" class="form-control con-form" placeholder="Password" required="required"> </div>
    <div class="form-group">
<input type="submit" name="Submit" value="Login" class="btn-submit btn btn-success" /> </div>
</div>
</form>
</div>
</body>
</html>


	