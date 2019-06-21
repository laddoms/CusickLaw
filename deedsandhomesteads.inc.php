<html lang="en">
<div class="wrapper">
<head>
		<title>LAW OFFICE OF ELIZABETH E. CUSICK - Deeds and Homesteads</title>
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
		<div id="deeds">
			<h3>Deeds</h3>
			<p>A property deed is what you use to transfer the ownership of real property from one person to another. If you’re buying a home 
			   from someone, this is one of the many documents you’ll sign when ownership is transferred. It must be filed with the Registry of Deeds
			   for the county that the property is located in and must be witnessed by a Notary Public.
			</p>
			<h3>Homesteads</h3>
			<p>A homestead is a legal document that is filed in the Registry of Deeds to protect the home in which you live from claims by creditors. 
		       It can protect the value of real estate up to $500,000
			</p>
		</div>	
	<?php include('leftnav.html');
		  include('footer.html');?>
</div>
</body>
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