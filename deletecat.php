<!DOCTYPE html>
<html>
<head>
<!--- The page has a title Liyestyle store --->
<link rel="stylesheet" type="text/css" href="stylefun.css">
</head>


    <?php
	include "headeru.php";
	?>
<body>
	<div class="sidenav1">

  <a href="addcat.php" id="bba">Add Category</a>
  <a href="deletecat.php" id="bbaib">Delete Category</a>
  <a href="addadmin.php" id="bbaca">Add Admin</a>
  <a href="deleteadmin.php" id="bbaca">Delete Admin</a>
   <a href="ListSpace.php" id="bbaca">Add Space</a>
  <a href="deletespace.php" id="bbaca">Delete Space</a>
  <a href="blockuser.php" id="bbaca">Block user</a>
  <a href="blockspace.php" id="bbaca">Block Space</a>
</div>

	<div class="contents">
  <h2>Delete Category</h2>
 <form action="deletecategory.php" method="POST" >
    <label for="name">Name of category</label>
    <select>
    <option class="active">-- Select Category --</option>
    <?php
        include "conn.php";  
        $records = mysqli_query($con1, "SELECT c_name From categories");  

        while($data = mysqli_fetch_array($records))
        {
			$delete=$data[0];
            echo "<option value='$delete' id='delete' name='delete'> $delete </option>"; 
        }	
    ?>  
  </select>
	<input type="submit" value="Submit" name="submit" id="submit" >
  </form>
</div>
<?php
  include "footer10.php"
  ?>
</body>
</html>

