<DOCTYPE html>
<html>
<head>
  <title>Spaced Out</title>
    <link rel="shortcut icon" href="images/ass.ico">
<link rel="stylesheet" type="text/css" href="style1.css"> 
<link rel="stylesheet" type="text/css" href="HeadAndFoot.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="content">
    <p align="center" style="margin-left: -1vw; margin-top: -1vw;">
    <div class="slideshow-container">
<div class="mySlides">
  <img src="images/s_workspace.jpg">
</div>

<div class="mySlides">
  <img src="images/s_sport.jpg">
</div>

<div class="mySlides">
  <img src="images/s_banquets.jpg">
</div>

<div class="mySlides">
  <img src="images/s_workshop.jpg">
</div>

<div class="mySlides">
  <img src="images/s_lounge.jpg">
</div>

<div class="mySlides">
  <img src="images/s_studio.jpg">
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

</div>
</p>
		<div class="cont2">
			<button onclick="location.href='homebl.php';"><img src="images/SOSO_logo.png" /></button>
		</div>
		<div class="header_btn">
			<button onclick="openForm()">Login</button>
            <div class="form-popup" id="myForm">
            <form action="check.php" class="form-container" method="POST">
            <button type="button" class="cancel" onclick="closeForm()">X</button>
            <h2>Login</h2>

            <input type="email" placeholder="Enter Email" name="email" id="email" required>
            <br>
            <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

            <button type="submit" name="submit" id="submit">Submit</button>
            <a href="forgot.php">Forgot password?</a>
            </form>
        </div>
		</div>
		<div class="s_header_btn">
        <button onclick="openForm1()">Sign up</button>
        <div class="s_form-popup" id="myForm1">
        <form action="signup.php" class="s_form-container" method="POST">
        <button type="button" class="cancel" onclick="closeForm1()">X</button>
        <h2>Sign up</h2>
        <input type="text" placeholder="First Last" name="name" id="name"required>
        <input type="text" placeholder="Enter Phone Number" name="phno" id="phno" required>
        
        <input type="email" placeholder="Enter Email" name="email1" id="email1" required >
        <input type="password" placeholder="Enter Password" name="psw1" id="psw1" required>

        <button type="submit" id="submit" name="submit">Submit</button>
        </form>
        </div>
		</div>
    <div class="g_header_btn">
      <button onclick="location.href='ListSpace.php';"> Get Listed</button>
    </div>
    <div class="tagline1">
      <p>YOUR  HUNT  FOR  SPACE  ENDS  HERE,<br>YOUR  SPACE  REQUIREMENTS  ARE  OUR  PRIORITY.</p>
    </div>
    
    </div>
    
    <center>
    <div class="img_container">
      <br>
       <h1> CHOOSE A SPACE THAT SUITS YOU</h1>
       <div class="thumbnails">
        <button type="button" name="Production" id="production"  title="Venues Available For Videography & Photoshoots">
		 <a href="production.php"><img src="images/Production.jpeg" alt="production"></a>
		</button>
       <button type="button" name="Workspace" id="workspace"  title="Get Affordable Co-working spaces">
		 <a href="workspace.php"><img src="images/Workspace.jpeg" alt="workspace"></a>
		</button>
       <button type="button" name="Workshops" id="workshops" onclick="#.php" title="Spaces To Conduct Productive Sessions">
		 <a href="workshops.php"><img src="images/Workshop.jpeg" alt="workshops"></a>
		</button><br>
       <button type="button" name="Lounges" id="lounges" onclick="#.php" title="Places To Celebrate With Your Loved Ones">
		 <a href="lounges.php"><img src="images/Lounge.jpeg" alt="lounges"></a>
		</button>
       <button type="button" name="Sports" id="sports" onclick="#.php" title="Places To Discover The Athlete In You">
		 <a href="sports.php"><img src="images/Sport.jpeg" alt="sports"></a>
		</button>
       <button type="button" name="Banquets" id="banquets" onclick="#.php" title="Places To Commemorate Your Happy Moments">
		 <a href="banquets.php"><img src="images/Banquet.jpeg" alt="banquets"></a>
		</button>
    </div>
    <div class="howiw">
    <center><h1>Navigate Through Spaced Out</h1></center>
    <img src="images/Final.png" style="width:70vw;height:30vw;margin-top: -2vw;">
    </div>
    </div>
  </center>
</body>
<div style="position: absolute; margin-top: 125vw;">
<?php
include'footer10.php';
?>
</div>
</html>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}
function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}

</script>var
<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>