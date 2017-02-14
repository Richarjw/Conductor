<!DOCTYPE html>
<?php
$conn = mysqli_connect('localhost', 'richarjw', 'jjrocks1') or die(mysqli_error());
mysqli_select_db($conn, 'conductor') or die(mysqli_error());
?>
<html>
<head>
    <title>Motion Pictures</title>
</head>
<body>
<h1>Welcome to Conductor!</h1>
<ul>
    <li><a href="/public/views/register.php/">Create a Conductor Account</a></li>
    <li><a href="/public/views/myobandregister.php">Register an Existing Myo Band</a></li>
</ul>
<h2>Current Users</h2>
<?php
    $posts = mysqli_query($conn, "SELECT FirstName, LastName, MyoName FROM users, myoband WHERE users.MyoID = myoband.MyoID ORDER BY UserID DESC LIMIT 30;");
    //  Display each    post
    echo '<p><strong>Last Name, First Name: MyoBand Name</strong></p>';
    while ($row = mysqli_fetch_array($posts)) {
        echo '<p>' . $row[1] . ', ' . $row[0] . '|- Uses: ' . $row[2] . '</p>';
    }
?>
</body>
</html>