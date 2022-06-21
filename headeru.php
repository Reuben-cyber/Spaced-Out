<?php
include("conn.php");
$uid=$_SESSION["uid"];
  $query = "select b.b_id,b.space_id,b.startTime,b.endTime,b.startDate,b.endDate,b.status,b.u_id as booker,u.u_id,u.name,
               s.u_id as owner,s.image1,s.space_name from booked b  
               join  
               space_list s on s.space_id=b.space_id
               join 
               users u on u.u_id=b.u_id
               where s.u_id=$uid  and b.status='waiting'";
    $result = mysqli_query($con1,$query);
  $count=mysqli_num_rows($result);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="HeadAndFoot.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    .notification{
              position: absolute;
              background-color:rgba(255,255,255,0.1); 
              color:#ffffff;
              border: none;
              width:10vw;
              height:4vw;
              top: 1vw;
              margin-left: 64vw;
              font-size: 2vw;
              float: right;
              z-index: 2;
            }

.notification:hover {
  background: #004e92;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  font-size: 1vw;
  color: white;
}
.i_header_btn img:hover {
  -ms-transform: scale(1); /* IE 9 */
  -webkit-transform: scale(1); /* Safari 3-8 */
  transform: scale(1.5); 
  z-index:2;
}
</style>
  </head>
  <header>
    <div class="header">
	  <div>
		<a href="homeal.php"><img src="images/SOSO_logo.png"></a>
	  </div>
      <div class="i_header_btn">
        <button onclick="location.href='function.php';"><img src="avatar.svg" /></button>
      </div>
	  <div class="header2_btn">
        <button onclick="location.href='logout.php';">Logout</button>
      </div>
      <div class="g_header2_btn">
        <button onclick="location.href='ListSpace.php';">Get Listed</button>
      </div>
      <div class="notification">
    <button onclick="location.href='notification.php'" style="width:10vw;height:4vw;background-color:rgba(255,255,255,0.0);color:#ffffff;border: none;font-size: 1.5vw;">Inbox
 <?php if($count>0) { ?>  
  <span class="badge"><?php echo $count ?></span>
<?php } ?>
  </button>
  </div>
    </div>
  </header>
</html>
