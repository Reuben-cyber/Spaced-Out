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
<link rel="stylesheet" type="text/css" href="style2.css">
</head>    <?php
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
  <li><a href="addadmin.php" >Add Admin</a></li>
  <li><a href="deleteadmin.php" >Delete Admin</a></li>
  <li><a href="blockuser.php" >Block user</a></li>
  <li><a href="blockspace.php" >Block Space</a></li>
</ul>

		<?php
		include 'conn.php';
    $query = "SELECT * FROM space_list WHERE u_id=$uid";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['space_id'];
           
?> 
        <center>
        <div class="space">
        <table>
        <tr>
        <td style="width:30%">
        	<?php $imageURL = 'upload/'.$res["image1"];?>
            <img src="<?php echo $imageURL; ?>" alt="production" />
        </td>
        <td style="width:70%">
        	<h3><a  title="Click for more details!" href="space.php?prod_id=<?php echo $res['space_id'];?>"><i ></i><?php echo $res ["space_name"];?></a>
        	<h3><a href="#"><?php// echo $res ["space_name"];?></a></h3>
			<p><?php echo $res ["space_address"];?></p><br>
        	<p><?php echo $res["space_description"];?></p>
        	<p>Rs <?php echo $res ["price"];?>/hr</p>
			<?php
            if($res['verified'] == "v"){
				 echo "<p>Status : Verified </p>";
			}?>
                <br>
			
			<button value="edit" id="edit" name="edit" ><a  title="Click for more details!" href="updatespace.php?prod_id=<?php echo $res['space_id'];?>"><i ></i>Update</a></button>
        	<button value="delete" id="delete" name="delete"><a  title="Click for more details!" href="deletespace.php?prod_id=<?php echo $res['space_id'];?>"><i ></i>Delete Space</a></button>
        </td>
        </tr>
        </table>
        </div>
        </center>
        
		 <?php
		 }
		
		 ?>
    </body>
    </html>