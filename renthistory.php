<DOCTYPE html>
    <?php
session_save_path('../tmp');
session_start();
?>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
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
	
	<body>
	<ul>
  <li><a class="active" href="personal1.php">Personal</a></li>
  <li><a href="user.php">Your spaces</a></li>
  <li><a href="renthistory.php">Rent History</a></li>
  </ul>
		<?php
        include'headeru.php';
        $uid=$_SESSION["uid"];
		include 'conn.php';
		 $query = "select b.b_id,b.space_id,b.startTime,b.endTime,b.startDate,b.endDate,b.status,b.u_id as booker,u.u_id,u.name,
              s.u_id as owner,s.image1,s.space_name from booked b  
              join  
              space_list s on s.space_id=b.space_id
              join users u on u.u_id=b.u_id
              where b.u_id= $uid ";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) { 
        $_SESSION["b_id"]=$res["b_id"];
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
            <h3><?php echo $res ["space_name"];?></h3>
            <p><?php echo "Start Date &nbsp:".$res["startDate"];?></p>
            <p><?php echo "End Date   &nbsp&nbsp:".$res["endDate"];?></p>
            <p><?php echo "Start Time :".$res["startTime"];?></p>
            <p><?php echo "End Time &nbsp:".$res["endTime"];?></p><br>
            <p><?php echo "Status : ".$res["status"];?>
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