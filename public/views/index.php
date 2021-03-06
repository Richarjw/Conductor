<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Conductor</title>
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
.fa-handshake-o,.fa-hand-peace-o,.fa-mobile,.fa-globe {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-indigo w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-indigo" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="" class="w3-padding-large w3-white">Home</a></li>
    <li class="w3-hide-small"><a href="register.php" class="w3-padding-large w3-hover-white">Register Armband</a></li>
    <li class="w3-hide-small w3-right"><a href="login.php" class="w3-padding-large w3-hover-white">Login / Sign Up</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="nav" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="register.php">Register Armband</a></li>
      <li><a class="w3-padding-large" href="login.php">Login / Sign Up</a></li>
    </ul>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-indigo w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo">CONDUCTOR</h1>
  <p class="w3-xlarge">The <i>handiest</i> database</p>
  <button class="w3-btn w3-padding-16 w3-large w3-margin-top" onclick="location.href='login.php';" value="Get Started">Get Started</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About</h1>
      <h5 class="w3-padding-32">An open EMG hand gesture database.</h5>

      <p class="w3-text-grey">Conductor is a collaborative open database designed to help you create, explore, and utilize different electromyographic (EMG) hand gestures for any imaginable project. Using statistical analysis and the use of  Myo Gesture Control Armbands, we aim to be the largest collection of EMG hand gesture data.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-handshake-o w3-padding-64 w3-text-indigo"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-hand-peace-o w3-padding-64 w3-text-indigo w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Create Gestures</h1>
      <h5 class="w3-padding-32">Create a gesture for the world to use.</h5>

      <p class="w3-text-grey">Add new gestures to the world's arsenal! Your hands are everything and the more data you contribute, they stronger they become.</p>
    </div>
  </div>
</div>

<!-- Third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Control your App</h1>
      <h5 class="w3-padding-32">The hands-on-hands-off way to control anything: the future is now.</h5>

      <p class="w3-text-grey">The world can literally be at your fingertips! All you have to do is make it happen.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-mobile w3-padding-64 w3-text-indigo"></i>
    </div>
  </div>
</div>

<!-- Fourth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-globe w3-padding-64 w3-text-indigo w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Inspire the World</h1>
      <h5 class="w3-padding-32">Limitless applicable applications.</h5>

      <p class="w3-text-grey">With any gesture at your fingertips, what's stopping you from creating the next most realistic prosthetic or robot? The future is here and the possibilities are endless.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge"><a href="www.myo.com" target="_blank">Check out Myo</a></h1>
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
