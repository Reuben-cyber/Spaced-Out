<doctype HTML!>
	<?php
  session_save_path('../tmp');
session_start();
?>
<HTML>
<head>
<title> Privacy Policy </title>
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
	<div style="position:absolute;margin-top: 8vw; margin-right: 1vw;margin-left: 1vw; text-align: left;">
	<center><h1 style="color: #004e92;"> Privacy Policy</h1></center>
	<p style="font-family:verdana">
<p style="font-family:verdana; text-align: left;">We at Spaced Out Inc. (“Spaced Out,” “we,” “us,” or “our”) have created this privacy policy (this “Privacy Policy”) because we know that you care about how information you provide to us is used and shared. This Privacy Policy relates to the information collection and use practices of Spaced Out in connection with our Site and our Services.  By visiting our Site or using our Services, Visitors and Registered Users are agreeing to the terms of this Privacy Policy and the accompanying Terms of Use. Capitalized terms not defined in this Privacy Policy shall have the meaning set forth in our Terms of Use.</p>
<b><u><h3>The Information We Collect</h3></u></b>
 <p style="font-family:verdana; text-align: left;">In the course of operating the Site and/or providing our Services, we may collect (and/or receive) the following types of information. You authorize us to collect and/or receive such information.</p>
<b><u><h3>1.Personal Information</h3></b></u>
 <p style="font-family:verdana; text-align: left;">When you sign up to become a Registered User, you will be required to provide us with personal information about yourself, such as your name, e-mail address, location, and phone number.  If you contact us, you will need to provide your name and e-mail address.  Registered Users may also provide identifiable information in the course of using the Site or the Services.  All information we collect and/or receive under this section is collectively called “Personal Information.”  We do not collect any personal information from Visitors or Registered Users unless they provide such information voluntarily.</p>
<b><u><h3>2.Billing Information</h3></b></u>
<p style="font-family:verdana; text-align: left;">In the course of using the Site or the Services, you may be required to provide certain information to our third-party payment vendors pursuant to the terms and conditions of their privacy policies and terms of use.  Such information may include a debit card number, credit card number, expiration date, billing address, activation codes, and similar information.  Such information is collectively called the “Billing Information.”  You authorize our third-party payment vendors to collect, process, and store your Billing Information.Spaced Out does not store or process your Billing Information.</p>

<b><u><h3>How We Use and Share the Information</h3></b></u>
<p style="font-family:verdana; text-align: left;">We use the Personal Information and the Other Information (collectively, the “Information”) to provide the Services; to maintain and improve our Site and Services; to solicit your feedback; and to inform you about our products and services and those of our third-party marketing partners.</p>

<b><u><h3>How We Protect the Information</h3></b></u>
<p style="font-family:verdana; text-align: left;">We take commercially reasonable steps to protect the Information from loss, misuse, and unauthorized access, disclosure, alteration, or destruction.  Please understand, however, that no security system is impenetrable.  We cannot guarantee the security of our databases, nor can we guarantee that the Information that you supply will not be intercepted while being transmitted to and from us over the Internet.  In particular, e-mail sent to or from the Site may not be secure, and you should therefore take special care in deciding what information you send to us via e-mail.</p>

<b><u><h3>How to Contact Us</h3></b></u>
<p style="font-family:verdana; text-align: left;">If you have questions about this Privacy Policy, please contact us via e-mail at info@spacedout.co with “Privacy Policy” in the subject line.
</p>
</div>
<div style="position:absolute;margin-top: 80vw;">
	<?php
	include'footer10.php';	
	?>
</body>
</html>