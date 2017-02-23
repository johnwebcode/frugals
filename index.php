<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XCELENCY </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/page.js"></script>
</head>

<body>
    <div class="admin-page">
        <div class="socialadmin">
            <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style=" right:0; top:190px; background-color: transparent;">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
                <a class="a2a_button_pinterest"></a>
            </div>
        </div>
        <div class="admin-loginbtn pull-right"> <a href="login.php" class="btn btn-success">Login</a> </div>
        <div class="container loginadmin">
            <div class="adminpagelogin">
                <h1 class="adminheading text-center">Domain Sale aimwindow.com</h1>
                <div class="row">
                    <div class="col-sm-6 col-xs-12 col-sm-push-6">
                        <div class="detail-form">
                            <form id="contact-form" method="POST" action="">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control con-form" placeholder="Name" required="required"> </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control con-form" placeholder="Email Address" required="required"> </div>
                                    <div class="form-group">
                                        <input type="text" id="phoneno" name="phoneno" class="form-control con-form" placeholder="Phone Number" required="required"> </div>
                                    <div class="form-group">
                                        <input type="text" id="bid" name="bid" class="form-control con-form" placeholder="Your BID (in $)" required="required"> </div>
                                    <div class="form-group submit-mb">
                                        <input type="submit" name="submit" value="Submit" class="btn-submit btn btn-success"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-sm-pull-6">
                        <div class="recent-bg">
                            <?php
include('config.php');
$sql="select * from adminlogin";
$res=mysql_query($sql);?>
                                <h3 class="recent">Recent Bits</h3>
                                <div class="">
                                    <?php
    while($row=mysql_fetch_array($res))
    {
                                    ?>
                                        <p class="text-center"><span class="name">  <?php if ($row['status']== 1){
 echo $row['name']; 
                                      //echo ("\t\t\t\t\t\t\t\t\t\t\t\t");
                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                                         echo $row['bid'];
}
       ?></span> </p>
                                        <?php }?>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="timer text-center" id="timeLeft">
                    <script type="text/javascript">
                        function updateTimeSpan() {
                            var theSpan = document.getElementById('timeLeft');
                            var d = new Date();
                            var t = new Date();
                            var ms;
                            var s, m, h;
                            // if it's after 5pm, set today to tomorrow    
                            if (d.getHours() > 16) {
                                d.setDate(d.getDate() + 1);
                            }
                            // get the next monday    
                            while (d.getDay() != 1) {
                                d.setDate(d.getDate() + 1);
                            }
                            // set the time    
                            d.setHours(23);
                            d.setMinutes(18);
                            d.setSeconds(0);
                            // get the difference between right now and next monday    
                            ms = d - t;
                            // get the days between now and then    
                            d = parseInt(ms / (1000 * 60 * 60 * 24));
                            ms -= (d * 1000 * 60 * 60 * 24);
                            // get hours    
                            h = parseInt(ms / (1000 * 60 * 60));
                            ms -= (h * 1000 * 60 * 60);
                            // get minutes    
                            m = parseInt(ms / (1000 * 60));
                            ms -= (m * 1000 * 60);
                            // get seconds    
                            s = parseInt(ms / 1000);
                            theSpan.innerHTML = d + ' days, ' + h + ' hours, ' + m + ' minutes, and ' + s + ' seconds.';
                            setTimeout('updateTimeSpan()', 100);
                        }
                        onload = updateTimeSpan();
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if(!empty($_POST)){
$con=mysql_connect("localhost","frugaltalentuser",";6^hnMiuyFSS");
mysql_select_db("frugaltalent",$con);

$sql="INSERT INTO adminlogin(name,email,phoneno,bid)VALUES
('$_POST[name]','$_POST[email]','$_POST[phoneno]','$_POST[bid]')";
if(!mysql_query($sql,$con))
{
die('Error:' .mysql_error());
}
echo "<script>javascript: alert('Congratulation , You Are Successfully Submitted..!!.')</script>";
mysql_close($con);
}
?>