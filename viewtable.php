<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0">
    <title>XCELENCY </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/page.js"></script>
</head>

<body class="no-bg">
    <div class="admin-loginbtn pull-right"> <a href="index.php" class="btn btn-success">Logout</a> </div>
    <?php 
$con=mysqli_connect('localhost','frugaltalentuser',';6^hnMiuyFSS');
mysqli_select_db($con,'frugaltalent');
$sql="SELECT * FROM adminlogin";
$records=mysqli_query($con,$sql);
?>
        <div class="container">
            <h2>Customer Details</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Phone Number</th>
                        <th>Bid</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <?php
while($row=mysqli_fetch_array($records))
    {?>
                    <tbody>
                        <tr>
                            <?php echo "<form action=sampleupdate.php method=post>"; ?>
                                <td>
                                    <?php echo $row['id'];?>
                                </td>
                                <td>
                                    <?php echo "<input type=text name=name value='".$row['name']."'";?>
                                </td>
                                <td>
                                    <?php echo "<input type=text name=email value='".$row['email']."'";?>
                                </td>
                                <td>
                                    <?php echo "<input type=text name=phoneno value='".$row['phoneno']."'";?>
                                </td>
                                <td>
                                    <?php echo "<input type=text name=bid value='".$row['bid']."'";?>
                                </td>
                                <td>
                                    <?php
                                            echo "
                                           
                                                <select name=status>
                                                    <option value='1'>accept </option>
                                                    <option value='0'>denied </option>
                                                </select>
                                           "; 
                                            echo "<input type=hidden name=id value='".$row['id']."'>"; ?>
                                </td>
                                <td>
                                    <?php echo "<input type=submit>"; ?>
                                </td>
                                <?php echo "</form>"; ?>
                        </tr>
                    </tbody>
                    <?php } ?>
            </table>
        </div>
</body>

</html>