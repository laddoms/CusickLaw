<html lang="en">
<div class="wrapper">
<head>
		<title>LAW OFFICE OF ELIZABETH E. CUSICK - Contact Attorney Cusick</title>
		<meta charset="UTF-8">
		<meta name="description" content="Eastern Massachusetts Area Attorney Specializing in Divorce, Separation, Wills, Landlord Tenent Law, 
		Deeds, Homesteads, Family Law and Personal Injury Law" />
		<meta name="keywords" content="Attorney Elizabeth Liz Cusick, Boston and eastern Massachusetts Attorney, Specializing in deeds, 
		homesteads, wills, landlord tenant law, eviction, family law, divorce, separation, and personal injury. Boston, Quincy, Somerville, 
		Natick, Hull, Cambridge, Dedham, Salem, Plymouth, Taunton, Brookline, Beverly, Brockton, Brookline, Fitchburg, Gloucester, Haverhill, Lawrence,
		Leominster" />
		<meta name="author" content="Laurie Addoms, Elizabeth Cusick"/>
		<meta name="google-site-verification" content="google-site-verification: googleb9744a45f0607368.html" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet"> 
		<?php  include("nav.inc.php"); ?>
		<link href="styling.css" type="text/css" rel="stylesheet" />
</head>


<body>
	<?php 
		include('nameplate.html');
		include('photobanner.html');
	?>

	<div id="contact">
			<h2 style="text-align:center;">LAW OFFICE OF ELIZABETH E. CUSICK </h2>
			<p style="text-align:center;">Quincy, MA. 01118</p>
			<p style="text-align:center;">Phone: (617)922-3621 </p>
			<a style="margin-left:226px;color:#343756; " href="mailto:elizabethcusick@ymail.com">
			<img src="email.png" alt="elizabethcusick@ymail.com" /></a></b>             
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST')
			{
				if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments']))
					{
						$email=$_POST['email'];
						$name=$_POST['name'];
						$comments=$_POST['comments'];
						$message="NAME:$name\n\nComments:$comments";
						htmlspecialchars($message, ENT_QUOTES);
						$message=wordwrap($message, 70, "\r\n");
						$subject='Contact Form Submission';
						$headers = 'From: Web Contact Form Submission' . "\r\n";
						//mail('addoms@comcast.net', $subject, $message, $headers);  not sure this is needed since it is already in line 38
						if(mail('elizabethcusick@ymail.com', $subject, $message, $headers))
							{
								echo"<div id='contactForm'><p><em>Message sent successfully.</p>
									<p>Thank you for submitting the contact form.</p></em></div>";
							}
						else
							{
								echo"<div id='contactForm'>Message failed to send. Please try again.</div>";
							}
						$_POST=array();  //clear out the variables
					}
				else
					{
						echo'<div id="contactForm"><p><b>Please fill out the form completely.</b></p></div>';
					}

			}


		?>		
		
		<div id="contactForm">
			<h3>Or fill out this form to contact Attorney Cusick</h3>
				<form action="contact.inc.php" method="post" target="_parent" name="contactForm" onsubmit="return validateSubmit()">
					<p style="float:right;">Name:<input type="text" name="name" size="30" maxlength="80" /></p>
					<p style="float:right;">Email Address:<input type="text" name="email" id="email" size="30" maxlength="80" /></p>
					<p style="float:right;">Comments:<textarea name="comments" rows="5" cols="30" maxlength="240"></textarea></p>
					<p style="float:right;"><input type="submit" name="submit" value="Contact Attorney Cusick" /></p>
				</form>
			<script src="jsfunctions.js"></script> 
		</div>
	</DIV>

	<?php 
			include('leftnav.html');
			include('footer.html');
	?>
</body>
</div>
	

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
	$(function(){
	  $('a').each(function() {
		if ($(this).prop('href') == window.location.href) {
		  $(this).addClass('current');
		}
	  });
	});
</script>
</html>

