<DOCTYPE html>
<head>
<style>
ul {
  list-style-type: none;
  margin-top:7vw;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
    <?php
session_save_path('../tmp');
session_start();
$uid=$_SESSION["uid"];
?>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include'headeru.php';
}else{
    include'ShortHeaderBL.php';
}
?>
	<body>
	<ul>
  <li><a class="active" href="personal.php">Personal</a></li>
  <li><a href="user.php">Your spaces</a></li>
  <li><a href="renthistory.php">Rent History</a></li>
  </ul>
  
   <?php
		include 'conn.php';
    $query = "SELECT * FROM users WHERE u_id=$uid";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) {  
	?>
	<form method="post" action="update.php" >
	<input type="text" placeholder="First Last" name="name" id="name" value="<?php echo $res ["name"];?>" required><br>
        <input type="tel" placeholder="Enter Phone Number" name="phno" id="phno" value="<?php echo $res ["mobile"];?>"  pattern="^\d{10}$" required><br>
        
        <input type="email" placeholder="Enter Email" name="email1" id="email1" value="<?php echo $res ["u_email"];?>" required ><br>
        <input type="password" placeholder="Enter Password" name="psw1" id="psw1"  value="<?php echo $res ["password"];?>" required>
         <br>
        <button type="submit" id="submit" name="submit">Update</button>

			<?php
	}
	?>
	</form>
</body>
</head>
</html>



