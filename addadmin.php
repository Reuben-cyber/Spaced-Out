<!DOCTYPE html>
<html>
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
<link rel="stylesheet" type="text/css" href="style1.css">
</head>    
<?php
session_save_path('../tmp');
session_start();
$uid=$_SESSION["uid"];
?>

    <?php
  include "headera.php";
  ?> 
  <body>
  <ul>
  <li><a class="active" href="admin.php">Personal</a></li>
  <li><a href="spaceverification.php" id="spaceveri">Space Verification</a></li>
   <li><a href="customerquery.php" >Customer Queries</a></li>
  <li><a href="addadmin.php" >Add Admin</a></li>
  <li><a href="deleteadmin.php" >Delete Admin</a></li>
  <li><a href="blockuser.php" >Block user</a></li>
  <li><a href="blockspace.php" >Block Space</a></li>
</ul>

   <div class="left">
    <img src="images/addadmin.gif" style="width:45vw; height:35vw; margin-left:2vw; margin-top:3vw; opacity:1">
  </div>
<div class="right" >
  <div class="main"style="height:25vw">
<h1> Add Administrator</h1>
 <?php
    include 'conn.php';
    $query = "SELECT * FROM users WHERE u_id=$uid";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) {  
  ?>
  <form method="post" action="insertadmin.php" > 
    <input type="text" id="name" name="name" placeholder="Name"></br></br>
    <input type="email" id="username" name="email1" placeholder="Username"></br></br>
    <input type="password" id="password" name="psw1" placeholder="Password"></br></br>
    <input type="text" id="mobile" name="phno" placeholder="Mobile"></br></br>
        <input type="submit" id="submit" name="submit" Value="Add">
      <?php
  }
  ?>
</form>
</div>
</div>

</body>
</html>