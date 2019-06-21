<html lang="en">
<div class="wrapper">
<head>
		<title>LAW OFFICE OF ELIZABETH E. CUSICK - Family Law</title>
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
	<div id="familylaw">
		<div id="familyLawUlLeft">
			<ul>
				<li>Divorce</li>
				<li>Restraining Orders</li>
				<li>Separate Support (legal separation)</li>
				<li>Paternity</li>
				<li>Child support/alimony</li>
				<li>Child custody</li>
			</ul>

		</div>
		<div id="familyLawUlRight">
			<ul>
				<li>Adoptions</li>
				<li>Prenuptial agreements</li>
				<li>Change of Name</li>
				<li>Contempt</li>
				<li>Modification</li>
				<li>Representation of same sex couples</li>
			</ul>
		</div>
		
		<p>Family law can be one of the most stressful areas for clients, even if both parties agree to a divorce.</p>
		<p>Attorney Cusick has many years of experience in family law and has represented clients in hundreds of divorce cases, primarily in Norfolk, 
		   Suffolk and Middlesex Counties. She has also appeared in court in Essex, Bristol, Barnstable and Worcester Counties of the Probate and Family Court.</p>
		<p>Attorney Cusick believes that both parties benefit when they can agree on the terms of their own divorce, separation or paternity case 
		  and will assist the parties in reaching an agreement.</p>
		<p>If you have already reached an agreement, she can draft the documents in order to make sure that they are accepted by the court.</p>
		<p>However, in circumstances where an agreement is not possible, she is able and willing to advocate for her client in court, including 
		   conducting a trial.</p>
	</div>
	<div id="familylawleftnav">
		<h2 style="margin-left:90px;">Areas of Practice</h2><br /><br />
		<div id="leftnavli">
			<ul>
				<li><a href="familylaw.inc.php">Family Law</a></li><br /><br />
				<li><a href="personalinjury.inc.php">Personal Injury</a></li><br /><br />
				<li><a href="wills.inc.php">Wills</a></li><br /><br />
				<li><a href="deedsandhomesteads.inc.php">Deeds and Homesteads</a></li><br /><br />
				<li><a href="landlordtenant.inc.php">Landlord Tenant Law</a></li><br /><br />
				<li><a href="civillitigation.inc.php">Civil Litigation</a></li><br /><br />
			</ul>
		</div>
	</div>
	<?php include('footer.html');?>
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
