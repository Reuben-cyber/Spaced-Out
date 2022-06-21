<DOCTYPE html>
    <?php
session_save_path('../tmp');
session_start();
?>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	
	<body>
		<?php
        include'headeru.php';
        $uid=$_SESSION["uid"];
		include 'conn.php';
      $query = "select b.b_id,b.space_id,b.startTime,b.endTime,b.startDate,b.endDate,b.status,b.u_id as booker,u.u_id,u.name,
               s.u_id as owner,s.image1,s.space_name from booked b  
               join  
               space_list s on s.space_id=b.space_id
               join 
               users u on u.u_id=b.u_id
               where s.u_id=$uid  and b.status='waiting'";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) { 
    	$prod_id=$res['b_id'];
    	?> 
        <center>
        <div class="noti">
        <table>
        <tr>
        	<td style="width:30%">
        	<?php $imageURL = 'upload/'.$res["image1"];?>
            <img src="<?php echo $imageURL; ?>" alt="production" />
        </td>
        <td style="width:70%">
            <h3><?php echo $res ["space_name"];?></h3>
            <p><?php echo "Name &nbsp:".$res["name"];?></p>
        	<p><?php echo "Start Date &nbsp:".$res["startDate"];?></p>
        	<p><?php echo "End Date   &nbsp&nbsp:".$res["endDate"];?></p>
        	<p><?php echo "Start Time :".$res["startTime"];?></p>
        	<p><?php echo "End Time &nbsp:".$res["endTime"];?></p>
        	<button value="accept" id="accept" name="accept" ><a href="accept.php?prod_id=<?php echo $res['b_id'];?>"><i ></i><font color="white">Accept</font></a></button>
        	<button value="decline" id="decline" name="decline"><a href="decline.php?prod_id=<?php echo $res['b_id'];?>"><i ></i><font color="white">Decline</font></a></button>
        </td>
        </tr>
        </table>
        </div>
        </center>
		        <?php
    }
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
        <div class="noti">
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
            <?php
            if($res['status'] == "accepted"){
                ?>
                
                <button class="py" value="payment" id="payment" name="payment" style="height:3vw ; float:right;" ><a href="payment.php?prod_id=<?php echo $res['b_id'];?>" style="color:white; font-size:1vw;">Procced to Payment</a></button></p>
             <?php}else { ?>
        
              <?php     } ?>
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