<DOCTYPE html>
    <?php
session_save_path('../tmp');
session_start();
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
	<center><h1 style="margin-top: 9vw; font-size: 3.5vw;">Workspaces</h1></center>
		<?php
		include 'conn.php';
    $query = "SELECT * FROM space_list WHERE c_name='workspace'and verified='v'";
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
            <img src="<?php echo $imageURL; ?>" alt="workspace" />
        </td>
        <td style="width:70%">
        	<h3><a  title="Click for more details!" href="space.php?prod_id=<?php echo $res['space_id'];?>"><i ></i><?php echo ucfirst($res ["space_name"]);?></a>
        	<h3><a href="#"><?php// echo $res ["space_name"];?></a></h3>
			<p><?php echo ucfirst($res ["space_address"]);?></p><br>
        	<p><?php echo ucfirst($res["space_description"]);?></p>
        	<p>Rs <?php echo $res ["price"]."/".ucfirst( $res["rper"]);?></p>
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