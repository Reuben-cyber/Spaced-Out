<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="content">
		<div>
			<img src="SOSO_logo.png">
		</div>
		<div class="header_btn">
			<button onclick="openForm()">Login</button>
            <div class="form-popup" id="myForm">
            <form action="check.php" class="form-container" method="POST">
            <button type="button" class="cancel" onclick="closeForm()">X</button>
            <h2>Login</h2>

            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <br>
            <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

            <button type="submit" class="btn" name="submit" id="submit">Login</button>
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
        
        <input type="text" placeholder="Enter Email" name="email1" id="email1"required>
        <input type="password" placeholder="Enter Password" name="psw1" id="psw1" required>

        <button type="submit" class="btn" id="submit" name="submit">Sign Up</button>
        </form>
        </div>
		</div>
    <div class="header_btn">
      <button onclick="location.href='ListSpace.php';"> Get Listed</button>
    </div>
    </div>
    <div class="tagline1">
      <p>Your hunt for space ends here,<br>Your space requirements are our priority.</p>
    </div>
    <div class="img_container">
       <h1> Choose a space that suits you</h1>
       <div class="thumbnails">
        <button type="button" name="Production" id="production"  title="Venues Available For Videography & Photoshoots" style="border:none; background:none;">
		 <a href="production.php"><img src="images/pro10.jpg" alt="production"></a>
		</button>
       <button type="button" name="Workspace" id="workspace"  title="Get Affordable Co-working spaces" style="border:none; background:none;">
		 <a href="workspace.php"><img src="images/wspace10.jpg" alt="workspace"></a>
		</button>
       <button type="button" name="Workshops" id="workshops" onclick="#.php" title="Spaces To Conduct Productive Sessions" style="border:none; background:none;">
		 <a href="workshops.php"><img src="images/wshop10.jpg" alt="workshops"></a>
		</button><br>
       <button type="button" name="Lounges" id="lounges" onclick="#.php" title="Places To Celebrate With Your Loved Ones" style="border:none; background:none;">
		 <a href="lounges.php"><img src="images/lounge10.jpg" alt="lounges"></a>
		</button>
       <button type="button" name="Sports" id="sports" onclick="#.php" title="Places To Discover The Athlete In You" style="border:none; background:none;">
		 <a href="sports.php"><img src="images/sport10.jpg" alt="sports"></a>
		</button>
       <button type="button" name="Banquets" id="banquets" onclick="#.php" title="Places To Commemorate Your Happy Moments" style="border:none; background:none;">
		 <a href="banquets.php"><img src="images/hall10.jpg" alt="banquets"></a>
		</button>
    </div>
    </div>
</body>
<div class="foot">
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

</script>