<?php 
$cn=mysqli_connect('localhost','frugaltalentuser',';6^hnMiuyFSS');
mysqli_select_db($cn,'frugaltalent');
$sql="UPDATE adminlogin SET status='$_POST[status]' WHERE id='$_POST[id]'";

if(mysqli_query($cn,$sql))

header("location:viewtable.php");
else
echo "not update";
?>>