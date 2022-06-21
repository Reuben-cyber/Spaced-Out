<DOCTYPE html>
 <?php
  session_save_path('../tmp');
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header("Welcome");

include("conn.php");
$uid=$_SESSION["uid"];
include("conn.php");
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
<link rel="stylesheet" type="text/css" href="style1.css"> 
<link rel="stylesheet" type="text/css" href="HeadAndFoot.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
.header_btn img:hover {
  -ms-transform: scale(1); /* IE 9 */
  -webkit-transform: scale(1); /* Safari 3-8 */
  transform: scale(1.5); 
  z-index:2;
}
</style>
</head>
<body>

	<div class="content">
    
    <div class="slideshow-container">
<div class="mySlides">
  <img src="images/s_workspace.jpg">
</div>

<div class="mySlides">
  <img src="images/s_sport.jpg">
</div>

<div class="mySlides">
  <img src="images/s_banquets.jpg">
</div>

<div class="mySlides">
  <img src="images/s_workshop.jpg">
</div>

<div class="mySlides">
  <img src="images/s_lounge.jpg">
</div>

<div class="mySlides">
  <img src="images/s_studio.jpg">
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

</div>

   <div class="cont2">
      <button onclick="location.href='homeal.php';"><img src="images/SOSO_logo.png" /></button>
    </div>
  <!-- <div class="homeal_btn">
        <button onclick="location.href='user.php';" ></button>
      </div>-->
	   <div class="header_btn">
	   <button onclick="location.href='function.php';" style="margin-left:96vw;margin-top:vw;opacity:0.9; border:none;width:10vw;" title="Your Profile">
	   <img src="avatar.svg"  style="height:3vw;width:3vw;margin-left:-8vw;"/></button>
		</div>
    <div class="header2_btn">
			<button onclick="location.href='logout.php';">Logout</button>
			</div>
		<div class="g_header2_btn">
        <button onclick="location.href='Listspace.php';">Get Listed</button>
		</div>
    <div class="notification">
    <button onclick="location.href='notification.php'" style="width:10vw;height:4vw;background-color:rgba(255,255,255,0.0);color:#ffffff;border: none;font-size: 1.5vw;">Inbox
 <?php if($count>0) { ?>  
  <span class="badge"><?php echo $count ?></span>
<?php } ?>
  </button>
  </div>

    <div class="tagline1">
      <p>YOUR  HUNT  FOR  SPACE  ENDS  HERE,<br>YOUR  SPACE  REQUIREMENTS  ARE  OUR  PRIORITY.</p>
    </div>
    </div>
    
    <center>
    <div class="img_container">
      <br>
       <h1> CHOOSE A SPACE THAT SUITS YOU</h1>
       <div class="thumbnails">
        <button type="button" name="Production" id="production"  title="Venues Available For Videography & Photoshoots">
     <a href="production.php"><img src="images/Production.jpeg" alt="production"></a>
    </button>
       <button type="button" name="Workspace" id="workspace"  title="Get Affordable Co-working spaces">
     <a href="workspace.php"><img src="images/Workspace.jpeg" alt="workspace"></a>
    </button>
       <button type="button" name="Workshops" id="workshops" onclick="#.php" title="Spaces To Conduct Productive Sessions">
     <a href="workshops.php"><img src="images/Workshop.jpeg" alt="workshops"></a>
    </button><br>
       <button type="button" name="Lounges" id="lounges" onclick="#.php" title="Places To Celebrate With Your Loved Ones">
     <a href="lounges.php"><img src="images/Lounge.jpeg" alt="lounges"></a>
    </button>
       <button type="button" name="Sports" id="sports" onclick="#.php" title="Places To Discover The Athlete In You">
     <a href="sports.php"><img src="images/Sport.jpeg" alt="sports"></a>
    </button>
       <button type="button" name="Banquets" id="banquets" onclick="#.php" title="Places To Commemorate Your Happy Moments">
     <a href="banquets.php"><img src="images/Banquet.jpeg" alt="banquets"></a>
    </button>
    </div>
    </div>
  </center>
</body>
<div style="position: absolute; margin-top: 85vw;">
<?php
include'footer10.php';
?>
</div>
</html>


<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
<?php
}else{
  echo"You are not an Authorized User";
}
?>