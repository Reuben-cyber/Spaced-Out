
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">
<title> List Space</title>
</head>
<?php
session_save_path('../tmp');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include'headeru.php';
?>
<body>
  <div class="left">
    <img src="images/scan.gif">
    <h1>Why List Here?</h1>
    <p>- Free Listing<br><br>
       - Grow Your Business<br><br>
       - Every Process In One Place<br><br>
       - Hassel Free And Secure Payments<br><br>
       - Customer Support<br><br></p>
  </div>
<div class="right">
  <div class="main">
<h1> Space Details</h1>
<form action="List_Space.php" method="POST" class="main_form" enctype="multipart/form-data">
 <input type="text" name="Name" id="Name" placeholder="Enter Space Name"required>
 <input type="textarea" name="Add" id="Add" placeholder="Enter the Address"required>
 <input type="text" name="Phone" id="Phone" placeholder="Enter Contact Number"required>
 <select name="Category" id="Category">
 <!--<option value="Select">Category</option>
 <option value="WorkSpace">WorkSpace </option>
 <option value="Production">Production </option>
 <option value="Sports">Sports </option>
 <option value="Workshop">Workshop</option>
 <option value="Banquets/Hall">Banquets/Hall</option>
 <option value="Lounges">Lounges</option>-->
 <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT c_name From categories");  

        while($data = mysqli_fetch_array($records))
        {
			$cat=$data[0];
            echo "<option value='$cat' id='cat' name='$cat'> $cat </option>"; 
        }	
    ?>  
  </select>
 <input type="textarea" name="Description" id="Description" placeholder="Describe in Short">
 <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFacilities Available<h2>
  <h3><input type="checkbox" id="restroom" name="facility[]" value="restroom">Restroom
  &nbsp&nbsp&nbsp
  <input type="checkbox" id="parking" name="facility[]" value="parking">Parking</h3>
  <h3><input type="checkbox" id="cafeteria" name="facility[]" value="cafeteria">Cafeteria
  &nbsp&nbsp&nbsp
  <input type="checkbox" id="wifi" name="facility[]" value="wifi">Wi-Fi</h3>
  <input type="text" id="rent" name="rent" placeholder="Rent/" style="width:10vw;">
  <input type="radio" id="hour" name="rper" value="Hour">Hour
  <input type="radio" id="day" name="rper" value="Day">Day
  <input type="radio" id="month" name="rper" value="Month">Month<br>
     <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdd Images:<h2>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="file1" required>
    <input type="file" name="file2" required>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="file3" required>
    <input type="file" name="file4" required><br>
<input type="submit" value="Submit" id="submit" name="submit" align="center">
</form>
</div>
</div>
 </body>
</html>
<?php
}
else
{
	echo"<script>alert('You need to Login first!!');window.location.href='homebl.php';</script>";
	
}
?>