<!DOCTYPE html>
<html>
<head>
<!-- function -->
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "nothing to show!";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getresult.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
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

select
            { 
              width: 35vw;
              height: 2.5vw;
              padding: 0 1vw 0 1vw;
              font-size: 1vw;
              margin: 0.5vw 0.5vw 0.5vw 0.5vw;
              border: none;
              border-radius: 2vw;
              background: rgba(0, 78, 146,0.1);
              margin-left: 5vw;
            }
      
option
            {
              width:35vw;
              height:2vw; 
              background: rgba(0, 78, 146,0.1);
              font-size:1vw
              }


</style>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>    
<?php
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
   <li><a href="customerquery.php" >Customer Queries</a></li>
  <li><a href="addadmin.php" >Add Admin</a></li>
  <li><a href="deleteadmin.php" >Delete Admin</a></li>
  <li><a href="blockuser.php" >Block user</a></li>
  <li><a href="blockspace.php" >Block Space</a></li>
</ul>
<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a category:</option>
  <option value="1">Production</option>
  <option value="2">Workspaces</option>
  <option value="3">Workshop</option>
  <option value="4">Lounges</option>
  <option value="5">Sports</option>
  <option value="6">Banquets</option>
  
  </select>
</form>
<br>
<div id="txtHint"><b>  </b></div>
   

</body>
</html>
