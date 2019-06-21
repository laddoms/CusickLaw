<html>
<header>
	<title>LAW OFFICE OF ELIZABETH E. CUSICK - Civil Litigation</title>
</header>
<div class="wrapper">
		<?php include('header.inc.php'); ?>
<body>
		<?php 
			include('nameplate.html');
			include('photobanner.html');
		?>
		<div id="litigation">
			<h3 style="text-align:center;">Civil Litigation</h3>
			<p>When two or more parties become embroiled in a legal dispute seeking money or another specific performance rather than criminal 
		       sanctions, civil litigation is the result. They must instead head to the courtroom for trial so a judge or jury can decide the matter.
			</p>
			<h4>Types of Civil Litigation</h4>
			<ul>
				<li>Environmental law</li>
				<li>Landlord/tenant disputes</li>
				<li>Product liability lawsuits</li>
				<li>Personal injury claims</li>
				<li>Intellectual property disputes</li>
				<li>Construction liability lawsuits</li>
				<li>Medical malpractice claims</li>
				<li>Employment and labor disputes</li>
				<li>Real estate lawsuits</li>
				<li>Divorce lawsuits</li>
			</ul>
			<h3 style="text-align:center;">Civil Litigation Attorney</h3>
			<p>The attorney is his client's advocate, obligated to fight for him to achieve the best possible outcome on the client's behalf.
			</p>
			<p>Lawyers specializing in this field must be willing to assume oppositional positions, to embrace conflict and controversy, and to 
			   effectively act as human pit bulls in defense of their clients.
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