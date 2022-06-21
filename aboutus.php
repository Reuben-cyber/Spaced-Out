<doctype HTML!>
<HTML>
<head>
<title> About Us </title>
<style>
</style>
</head>
<body>
	<div style="position:absolute;margin-top: 0vw;">
	<?php
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include'headeru.php';
}else{
    include'ShortHeaderBL.php';
}
	?>
</div>
	<div style="position:absolute;margin-top: 8vw;margin-right: 1vw;margin-left: 1vw;text-align: left;">
	<center><h1 style="color: #004e92;"> About Us </h1></center>
	<p style="font-family:verdana">
<p style="font-family:verdana; text-align: left;">Spaced Out is revolutionizing the way people think about event booking. Our platform lets venues and bookers plan together, creating a smarter and better-connected experience for all. We simplify planning, so you can have more fun!</p>
<p style="font-family:verdana; text-align: left;"> Whether you are a professional meeting planner or a volunteer planning a party, wedding, meeting, family reunion or event of any kind, Spaced out can assist you in your event venue finding plans.  Our event venue listings include the perfect conference centers, banquet halls, business meeting venues, and retreat centers.  Search our vast database of event venues and meeting Your can also contact a venue specialist at +91982327679  to help you with your venue search and get matched to your ideal venue.  As a premier event planning venues firm, we are opening doors to one-of-a-kind experiences. Through panel discussions, events, interviews and our email list, we are learning that a great relationship with our community is a two-way street. We are listening, and through conversation, we hope to evolve the way people think about booking events, together. </p>
<p style="font-family:verdana;text-align: left; ">With us you can reimagine the use of space, and create a more sustainable and enjoyable way of living together.</p>
</div>
<div style="position:absolute;margin-top: 47.53vw;">
<?php
	include'footer10.php';	
	?>
</body>
</html>


 