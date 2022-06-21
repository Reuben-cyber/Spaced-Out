<DOCTYPE html>
  <?php
session_save_path('../tmp');
session_start();

?>
  <html>
  <head>
     <link rel="stylesheet" type="text/css" href="HeadAndFoot.css">
  <style type="text/css">
   .sp{
            position: absolute;
            width:90vw;
            height:150vw;
            margin-left:4vw;
            top:7vw;
            margin-top: 1vw;
            border:0.3vw solid;
            border-color:#004e92; 
}
.ms img{
            position:absolute;
            width:60vw;
            height: 35vw;
            margin-top: 1vw;
            margin-left: -30vw;
}
.sp h3{
            position: absolute;
            margin-left: 1vw;
            margin-top: 37vw;
            font-size: 6vw;
}
.sp p{
            position: relative;
            /*margin-left: 2vw;*/
            margin-top: 42vw;
            font-size: 1.5vw;
}

.sp a
{
    text-decoration: none;
    color: black;
}
.spaces{
      position: absolute;
      width:80vw;
      margin-top:45vw;
      margin-left: 10vw;
  text-align: left;
  font-size: 2vw;
}
.book
{
  height: 20vw;
  width: 80vw;
  background-color:rgba(0, 78, 146,0.1);
  border-radius: 2vw;
}
.book input[type=date]
{
      position: absolute;
      height: 3vw;
      width: 15vw;
  font-size: 1.5vw;
  border-radius: 1vw;
  padding: 0vw 0vw 0vw 1vw;
   
}
.book input[type=time]
{
  position: absolute;
  height: 3vw;
  width: 15vw;
  font-size: 1.5vw;
  border-radius: 1vw;
  padding: 0vw 0vw 0vw 1vw; 
}
.book input[type=submit]
{
  width: 15vw;
  height: 3vw;
  font-size: 1.5vw;
  background: #004e92;
  color: #ffffff;
  border-radius: 0.5vw;
}
.w3-left{
  position:absolute;
  top:17vw;
  left:10vw; 
  width:2vw;
  height:2vw;
  font-size:3vw;
  color:#808080;
  background:transparent;
  border:none;
}
.w3-right{
  position:absolute;
  top:17vw;
  right:10vw; 
  width:2vw;
  height:2vw;
  font-size:3vw;
  color:#808080;
  background:transparent;
  border:none;
}
  </style>
  </head>
  <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include'headeru.php';
}else{
    include'ShortHeaderBL.php';
}
//$sname=$_SESSION["spacename"];
?>
  <body>
    <?php
    include('conn.php');
    $prod_id=$_GET['prod_id'];
    $query = "SELECT * FROM space_list WHERE space_id='$prod_id'";
    $result = mysqli_query($con1,$query);
    while($res = mysqli_fetch_array($result)) {   
      $_SESSION["spaceid"]=$res["space_id"];
        ?>
        <center>
        <div class="sp"> <!--full page-->
           <div class="sc"><!--blue border-->
<div class="ms"><!--image-->

<div class="mySlides1">
<?php $imageURL1 = 'upload/'.$res["image1"];?>
  <img src="<?php echo $imageURL1; ?>">
</div>

<div class="mySlides1">
  <?php $imageURL2 = 'upload/'.$res["image2"];?>
  <img src="<?php echo $imageURL2; ?>">
</div>

<div class="mySlides1">
  <?php $imageURL3 = 'upload/'.$res["image3"];?>
  <img src="<?php echo $imageURL3; ?>">
</div>

<div class="mySlides1">
  <?php $imageURL4 = 'upload/'.$res["image4"];?>
  <img src="<?php echo $imageURL4; ?>">
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
</div>
</div>
</div>
          <div class="spaces">
          <h2><?php echo ucfirst( $res ["space_name"]);?></h2>
          
          <p><h4>Address :</h4>
            <?php echo ucfirst( $res ["space_address"]);?><br>
            <h4>Description :</h4>
          <?php echo ucfirst($res ["space_description"]);?>
          <h4>Facilities Provided :</h4>
          <?php echo ucfirst( $res["facility"]);?>
          <h4>Charges : Rs <?php echo ucfirst( $res ["price"])."/".ucfirst( $res["rper"]);?></h4>
          <h4>Directions :</h4>
      <iframe width="100%" height="450vw"
            <?php $map_address=$res ["space_address"]?>     
                src="https://maps.google.it/maps?q=<?php echo $map_address; ?>&output=embed"
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0"
                scrolling="no" 
                marginheight="0" 
                marginwidth="0"
                >
            </iframe><br>
      <br>
      <br>
      <br>
          <hr style="width: 60vw;margin-left: 10vw;">
          <form method="post" action="book.php" class="book">
            <center><h2>Enter Booking Details</h2></center>
          &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp Start Date: <input type="date" id="start_date" name="start_date">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
          End Date : <input type="date" id="end_date" name="end_date"><br><br>
          &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp Start Time:<input type="time" id="start_time" name="start_time">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp
          End Time:<input type="time" id="end_time" name="end_time"><br><br>
          <center><input type="submit" name="submit" value="Book"></center></form></p>
    </div>
        </center>
        
     <?php
     }    
     ?>
    </body>
    <script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
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
    </html>