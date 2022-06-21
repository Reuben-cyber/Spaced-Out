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
tr:hover 
{background-color:#f5f5f5;}
table
{border: 0.1vw solid black;
  border-collapse: collapse;}
  td
  {
    padding-left: 0.5vw;
    height:2.5vw;
  }
  th{
    height:2.5vw;
    background-color:#ddd;
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
   <li><a href="customerquery.php">Customer Queries</a></li>
  <li><a href="addadmin.php" >Add Admin</a></li>
  <li><a href="deleteadmin.php" >Delete Admin</a></li>
  <li><a href="blockuser.php" >Block user</a></li>
  <li><a href="blockspace.php" >Block Space</a></li>
</ul>
<div style="margin-left:1vw;">
  <table border='1vw solid #000000'>
    <tr>
      <th style="width:15vw;">Email-ID</th>
      <th style="width:20vw;">Subject</th>
      <th style="width:50vw;">Problem</th>
      <th style="width:50vw;">Message</th>
      <th style="width:5vw;">Revert</th>
    </tr>
    <?php
    include('conn.php');
    $sql="Select * from contactus where status='us'";
    $run=mysqli_query($con1,$sql);
    while($row=mysqli_fetch_array($run)){
      $prod_id=$row['ccid'];
  ?>
  <tr>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["subject"];?> </td>
<td><?php echo $row["problem"];?> </td>
<td><form action="revert.php?prod_id=<?php echo $row['ccid'];?>" method="POST">
<input type="text" name="message" id="message" style="width:35vw; border:none; margin-left: 4vw;" placeholder="Type the message here"></td>
<td><input type="submit" name="submit" id="submit" value="Revert"></form></td>
  </tr>
  <?php
}
  ?>
</table>
</div>
   

</body>
</html>