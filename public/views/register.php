<!DOCTYPE	html>
<?php
$conn = mysqli_connect('localhost', 'richarjw', 'jjrocks1') or die(mysqli_error()); 
mysqli_select_db($conn, 'conductor')  or die(mysqli_error()); 
?>
<html>
<head>
<title>Create A Conductor Account</title>
</head>
<body>
<h1>Register</h1>
<form action="" method="post">
				<label for="myoband">Existing Myoband ID </label><br/>
				<input type="text" name="myoband"/><br/>
				<label for="firstname">First Name</label><br/>
				<input type="text" name="firstname"/><br/>
				<label for="lastname">Last Name</label><br/>
				<input type="text" name="lastname"/><br/>
				<label for="username">Desired Username</label><br/>
				<input type="text" name="username"/><br/>
				<label for="password">Password</label><br/>
				<input type="password" name="password"/><br/>
				<label for="confirmpassword">Confirm Password</label></br>
				<input type="password" name = "confirmpassword"/><br/>
				<input type="submit" value="Register Account"/>
</form>
<h2>Options</h2>
<a href="/public/views/index.php">Return to Main Page</a>

<?php
if	($_SERVER['REQUEST_METHOD']	== 'POST')	{

				$errors = '';	
				$myoband =		$_POST['myoband'];	
				if	(empty($myoband))	$errors .= '<li>Existing Myoband ID is	required</li>';	
				$firstname = $_POST['firstname'];	
				if	(empty($firstname))	$errors .= '<li>First Name	is	currently required... This may change in the future.</li>';	
				$lastname = $_POST['lastname'];	
				if	(empty($lastname))	$errors .= '<li>Last Name	is	required... This may change in the future.</li>';	
				$username = $_POST['username'];	
				if	(empty($username))	$errors .= '<li>Username	is	required</li>';	
				$password = $_POST['password'];	
				if	(empty($password))	$errors .= '<li>Password	is	required</li>';	
				$confirm = $_POST['confirmpassword'];	
				if	(strcmp($password,	$confirm)	!= 0)	$errors .= '<li>Passwords	do	not	match</li>';	
				if	(!empty($errors))	{	
								echo '<ul>' . $errors . '</ul>';	
				}	else	{		
					$user_results	=	mysqli_query($conn,	"SELECT	LoginName	FROM	users		WHERE	LoginName	=	'"	.	$username . "'");
					if	(is_null($user_results)){	
						echo	'<ul><li>Myoband ' . $myoband. '!</li></ul>';
						if	(mysqli_fetch_array($user_results))	{	
									echo	'<ul><li>Username	already	taken</li></ul>';
								}
							}
					else {
						mysqli_query($conn, "CALL addUser('" . $username . "', '" . $password . "', '" . $firstname . "', '" . $lastname . "', " . $myoband . ")") or exit(1);
						echo	'<ul><li>Added User to Myoband ' . $myoband. '!</li></ul>';				}	
				}
		}	
?>
</body>
</html>