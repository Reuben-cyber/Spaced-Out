<DOCTYPE html>
<html>
<head>
	<style>
		.cont2 button
            {
              position: absolute;
              width:20vw;
              height:5vw;
              top: 1vw;
              left: 1vw;
              z-index: 2;
            }
            .cont2 img
            {
              position: absolute;
              width:20vw;
              height:5vw;
              margin-top:-2.5vw;
              margin-left: -10vw;
            }
		    .content
            {
              position: absolute;
              width:100vw;
              height:25vw;
              background: linear-gradient( to right,#000428,#004e92,#000428);
              z-index: 1;
            }
            .i_header_btn button
            {
              background-color:rgba(255,255,255,0.1); 
              color:#ffffff;
              border: none;
              border-radius: 0vw;
              width:4vw;
              height:4vw;
              margin-top: 1.7vw;
              float: right;
              z-index: 2;
            }
            .i_header_btn img
            {
              height:3vw;
              width:3vw;
              margin-top: 0vw;
              margin-left: 0vw;
              z-index: 2;
            }
            .header2_btn button
            {
              position: absolute;
              background-color:rgba(255,255,255,0.1); 
              color:#ffffff;
              border: none;
              border-radius: 0vw;
              width:12vw;
              height:4vw;
              top: 1vw;
              margin-left: 84vw;
              font-size: 1.5vw;
              float: right;
              z-index: 2;
            }
            .g_header2_btn button
            {
              position: absolute;
              background-color:rgba(255,255,255,0.1); 
              color:#ffffff;
              border: none;
              width:10vw;
              height:4vw;
              top: 1vw;
              margin-left: 74vw;
              font-size: 1.5vw;
              float: right;
              z-index: 2;
            }
            .slideshow-container
             {
              position: absolute;
              opacity:0.3; 
              width:100vw; 
              height: 25vw; 
              top: 0vw; 
              left: 0vw;
              z-index: 1;
             }
            .mySlides
             {
              position: absolute;
              width:100vw; 
              height: 25vw;
              top: 0vw;
              z-index: 1;
             }
            .mySlides img
             {
              position: absolute;
              width:100vw; 
              height: 25vw;
              top: 0vw;
              z-index: 1;
             }
             .tagline1
             {
              position: absolute;
              top: 8vw;
              margin-left: 15vw;
              width:90vw;
              height:10vw;
              text-align: center;
			  font-family: Bradley Hand ITC;
              z-index: 2;
             }
            .tagline1 p
             {
              position: absolute;
              color: #ffffff;
              font-size: 3vw;
              font-family: Bradley Hand ITC;
              top: 3vw;
              text-decoration: bold;
              z-index: 2;
             }
</style>
</head>
<body>
	<div class="content">
    <p align="center" style="margin-left: -1vw; margin-top: -1vw;">
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
</p>
   <div class="cont2">
      <button onclick="location.href='homeal.php';"><img src="images/SOSO_logo.png" /></button>
    </div>
   <div class="i_header_btn">
        <button  type="submit" formaction="user.php"><img src="avatar.svg" onclick="user.php" /></button>
      </div>
    <div class="header2_btn">
			<button onclick="location.href='logout.php';">Logout</button>
		</div>
		<div class="g_header2_btn">
        <button onclick="location.href='Listspace.php';">Get Listed</button>
		</div>

    <div class="tagline1">
      <p>YOUR  HUNT  FOR  SPACE  ENDS  HERE,<br>YOUR  SPACE  REQUIREMENTS  ARE  OUR  PRIORITY.</p>
    </div>
    </div>
</body>
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