<html lang="en">
<div class="wrapper">
<head>
		<title>LAW OFFICE OF ELIZABETH E. CUSICK - Personal Injury Law</title>
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
	<div id="personalInjury">
		<ul>
			<li>Auto Accidents</li>
			<li>Slips and falls</li>
			<li>Dog Bites</li>
		</ul>
		<p>Attorney Cusick has represented several hundred injured parties obtain money from insurance companies when they were injured in 
			auto accidents or by the negligence of another person or business.  
		</p>
		<p>It is the job of insurance adjusters to save money for the insurance company, not to compensate the injured person; therefore,
			it is better to have an experienced attorney help you.
		</p>
		<p>Even the process of getting your medical bills paid after an accident through Personal Injury Protection (no-fault benefits) can be 
		  very confusing and varies depending on whether or not you have private or government health insurance (Medicare or MassHealth).  
		</p>
		<p>Attorney Cusick will also deal with your medical providers and health insurance company so that you will not have to worry about 
		   getting your medical bills paid while you are trying to recover.
		</p>
		<p>Attorney Cusick has represented clients in mediation and arbitration, as well as in court.	
		</P>
	</DIV>

	<?php 
			echo'<div id="personalInjuryLeftNav">';
			include('leftnav.html');
			echo'</div>';
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