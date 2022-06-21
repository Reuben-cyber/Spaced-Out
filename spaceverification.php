<DOCTYPE html>
    <?php
session_save_path('../tmp');
session_start();
?>
	<html>
	<head>
        <style>
ul {
  list-style-type: none;
  margin-top:7vw;
  padding: 0;
  margin-left:-1vw;
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
	</head>
	<?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include'headera.php';
}else{
    include'ShortHeaderBL.php';
}
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
<center><h1 style="margin-top: 3vw; font-size: 3.5vw;">Space Verification</h1></center>
		<?php
		include 'conn.php';
    $query = "SELECT * FROM space_list WHERE  verified='nv'";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['space_id'];
    
?> 

        <center>
        <div class="space">
        <table>
        <tr>
        <td style="width:30%">
            <?php
        	 $imageURL = 'upload/'.$res["image1"];?>
            <img src="<?php echo $imageURL; ?>" alt="production" />
        </td>
        <td style="width:70%">
        	<h3><?php echo $res ["space_name"];?></a>
        	<h3><a href="#"><?php// echo $res ["space_name"];?></a></h3>
			<p><?php echo $res ["space_address"];?></p><br>
        	<p><?php echo $res["space_description"];?></p>
        	<p>Rs <?php echo $res ["price"];?>/hr</p>
			<br>
			<button value="accept" id="accept" name="accept" ><a href="veri.php?prod_id=<?php echo $res['space_id'];?>"><i ></i><font color="black">Accept</font></a></button>
        	<button value="decline" id="decline" name="decline"><a href="veridecline.php?prod_id=<?php echo $res['space_id'];?>"><i ></i><font color="black">Decline</font></a></button>
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
