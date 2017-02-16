<!DOCTYPE html>
<html lang="en">
<head>
<title>Conductor - Login / Sign Up</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Used to toggle between navbars on screen sizes -->
<script type="text/javascript" src="../scripts/navbar.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
</style>
</head>

<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-indigo w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-indigo" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li class="w3-hide-small"><a href="index.php" class="w3-padding-large w3-hover-white">Home</a></li>
    <li class="w3-hide-small"><a href="register.php" class="w3-padding-large w3-hover-white">Register Armband</a></li>
    <li class="w3-right"><a href="" class="w3-padding-large w3-white">Login / Sign Up</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="index.php">Home</a></li>
      <li><a class="w3-padding-large" href="register.php">Register Armband</a></li>
    </ul>
  </div>
</div>

<!-- PADDING HIDDEN BY NAVBAR -->
<header class="w3-container w3-indigo w3-center">
    <h3>--HIDDEN PADDING--</h3>
</header>

<!-- LOGIN -->
<div class="w3-container w3-indigo w3-center">
    <h2>Login</h2>
</div>

<div class="w3-row-padding w3-container">
    <div class="w3-content w3-center">
        <br />
        <form class="w3-content" method="post">
            <label class="w3-left" for="login_username">Username</label><br/>
            <input class="w3-input w3-validate" type="text" name="login_username" id="login_username"/><br/>
            <label class="w3-left" for="login_password">Password</label><br/>
            <input class="w3-input w3-validate" type="password" name="login_password" id="login_password"/><br/>
            <input class="w3-btn w3-black w3-left" type="submit" value="Login"/>
        </form>
    </div>
</div>
<br />
<br />

<!-- REGISTER -->
<div class="w3-container w3-indigo w3-center">
    <h2>Register</h2>
</div>

<div class="w3-row-padding w3-container w3-light-grey">
    <div class="w3-content w3-center">
        <br />
        <form class="w3-content" method="post">
            <label class="w3-left" for="myoband">Existing Myo Band ID </label><br/>
            <input class="w3-input w3-validate w3-light-grey" type="text" name="myoband" id="myoband"/><br/>
            <label class="w3-left" for="firstname">First Name</label><br/>
            <input class="w3-input w3-validate w3-light-grey" type="text" name="firstname" id="firstname"/><br/>
            <label class="w3-left" for="lastname">Last Name</label><br/>
            <input class="w3-input w3-validate w3-light-grey" type="text" name="lastname" id="lastname"/><br/>
            <label class="w3-left" for="username">Desired Username</label><br/>
            <input class="w3-input w3-validate w3-light-grey" type="text" name="username" id="username"/><br/>
            <label class="w3-left" for="password">Password</label><br/>
            <input class="w3-input w3-validate w3-light-grey" type="password" name="password" id="password"/><br/>
            <label class="w3-left" for="confirmpassword">Confirm Password</label><br/>
            <input class="w3-input w3-validate w3-light-grey" type="password" name="confirmpassword" id="confirmpassword"/><br/>
            <input class="w3-btn w3-black w3-left" type="submit" value="Register Account"/>
        </form>
    </div>
    <br /><br /><br /><br />
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h3>Users Online:</h3>

    <p id="onlineUsers"></p>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-layout-container w3-center">
        <div class="w3-layout-col">
            CSSE333 Introduction to Database Systems<br />
            Rose-Hulman Institute of Technology<br />
            5500 Wabash Ave<br />
            Terre Haute, IN 47803
        </div>

        <div class="w3-layout-col">
            Developers:<br />
            Patrick Barr <a href="mailto:barrpt@rose-hulman.edu">barrpt@rose-hulman.edu</a><br />
            Brad Pender <a href="mailto:penderbm@rose-hulman.edu">penderbm@rose-hulman.edu</a><br />
            Jack Richard  <a href="mailto:richarjw@rose-hulman.edu">richarjw@rose-hulman.edu</a>
        </div>
    </div>

    <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
</body>
</html>