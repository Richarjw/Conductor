<!DOCTYPE	html>
<?php
    $conn = mysqli_connect('localhost', 'richarjw', 'jjrocks1') or die(mysqli_error());
    mysqli_select_db($conn, 'conductor')  or die(mysqli_error());
?>
<html>
<head>
<title>Register a New Myoband</title>
</head>
<body>
<h1>New	Myoband</h1>
<form action="" method="post">
    <label for="myoband">Myoband ID</label><br/>
    <input type="text" name="myoband"/><br/>
    <label for="myoname">Myoband Name</label><br/>
    <input type="text" name="myoname"/><br/>
    <label for="expected">Expected Number Of Users</label><br/>
    <input type = "text" name = "expected"/><br/>
    <label for="sensors">Number Of Sensors</label><br/>
    <input type = "text" name = "sensors"/><br/>
    <input type="submit" value="Post"/><br/>
</form>
<h2>Current Myobands</h2>
<?php

$posts = mysqli_query($conn,    "SELECT MyoID, MyoName   " . "FROM myoband" . " ORDER  BY  MyoID  DESC " . "LIMIT  30");   
//  Display each    post
echo '<p><strong>' . 'Myoband ID' . '-----' . 'Myoband Name' . '</strong></p>';   
while   ($row = mysqli_fetch_array($posts)) {   
                echo '<p>' . $row[0] . '-----' . $row[1] .'</p>';   
}   
?>
<h3>Options</h3>
<a href="/public/views/index.php">Return to Main Page</a>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$errors = '';

			$myoband = mysqli_real_escape_string($conn,$_POST['myoband']);
			if (empty($myoband))
				$errors .= '<li>Myoband ID is required</li>';

			$myoname = mysqli_real_escape_string($conn,$_POST['myoname']);
			if (empty($myoname))
				$errors .= '<li>Myoband Name is required</li>';

			$expected = mysqli_real_escape_string($conn,$_POST['expected']);
			if (empty($expected))
				$errors .= '<li>Enter a number of users.</li>';

			$sensors = mysqli_real_escape_string($conn,$_POST['sensors']);
			if (empty($sensors))
				$errors .= '<li>Enter a number of sensors.</li>';
			if (!empty($errors)) {
				echo '<ul>' . $errors . '</ul';
			} else {
				echo '<ul><li> ' . $myoband . '</li></ul>';
				$myo_results = mysqli_query($conn, "SELECT MyoID FROM myoband WHERE MyoID = " . $myoband . ";");
				if (is_null($myo_results)) echo'<ul><li>MyoID already Registered! </li></ul>';
				else {
					mysqli_query($conn, "CALL addMyoband(" . $myoband . ", '" . $myoname . "', " . $expected . ", " . $sensors . ")") or exit(1);
					echo '<ul><li>Registered New Myoband ' . $myoband . '!</li></ul>';
				}
			}


}

?>
</body>
</html>