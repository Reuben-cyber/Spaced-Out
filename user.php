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
  <li><a class="active" href="personal1.php">Personal</a></li>
  <li><a href="user.php">Your spaces</a></li>
  <li><a href="renthistory.php">Rent History</a></li>
  
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