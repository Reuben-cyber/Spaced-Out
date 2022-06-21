<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="HeadAndFoot.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <header>
    <div class="header">
	  <div>
		<a href="homebl.php"><img src="images/SOSO_logo.png"></a>
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

            <button type="submit" name="submit" id="submit">Submit</button>
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

        <button type="submit" id="submit" name="submit">Submit</button>
        </form>
        </div>
    </div>
    <div class="g_header_btn">
      <button onclick="location.href='ListSpace.php';"> Get Listed</button>
    </div>
    </div>
  </header>
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