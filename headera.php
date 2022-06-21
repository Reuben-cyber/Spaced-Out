
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
		<a href="admin.php"><img src="images/SOSO_logo.png"></a>
	  </div>
      <div class="i_header_btn">
        <button onclick="location.href='function.php';"><img src="avatar.svg" /></button>
      </div>
	  <div class="header2_btn">
        <button onclick="location.href='logout.php';">Logout</button>
      </div>
    </div>
  </header>
</html>
