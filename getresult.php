<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
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
</head>
<body>

<?php
$q = intval($_GET['q']);
//for assigning categories as below, switch case is a better option!!
if($q == '1'){$qi = 'production';} 
elseif($q=='2') {$qi = 'workspace';}
elseif($q == '3'){$qi = 'workshop';} 
elseif($q == '4'){$qi = 'lounges';}
elseif($q == '5'){$qi = 'sports';}
elseif($q == '6'){$qi = 'banquets';}

$con = mysqli_connect('localhost','root','','space_db');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"space_db");
//category is a column in the database table masteritemlist in the database named hb
$sql="SELECT * FROM space_list WHERE c_name = '".$qi."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Space Name</th>
<th>Address</th>
<th>phone </th>
<th>Block </th>
</tr>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$prod_id=$row['space_id'];
  echo "<tr>";
  echo "<td>" . $row['space_name'] . "</td>";
  echo "<td>" . $row['space_address'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";?>
  <td><button value="revert" id="revert" name="revert" ><a style="text-decoration: none;" href="blockspace1.php?prod_id=<?php echo $row['space_id'];?>"><i ></i><font color="black">Block Space</font></a></button></td>
  <?php
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>