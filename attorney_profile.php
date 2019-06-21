<html>

<div class="wrapper">
		<?php include('header.inc.php'); ?>
	<body>
		<?php 
			include('nameplate.html');
			include('photobanner.html');
		?>
		<div id="singlefemalelawyerImg"><img src="singlefemalelawyer.jpg"></div>
		<div id="attorneyprofile">
			<p class="attorneyprofileP">I am a civil litigation attorney with extensive experience in the areas of personal injury and domestic 
										relations. </p>
			<p class="attorneyprofileP">I can help you complete all steps in the litigation process, from your initial client interview to your trial.</p>
			<p class="attorneyprofileP">I work closely with other attorneys, paralegals and secretaries. </p>
			<p class="attorneyprofileP">I also bring 30 years experience working with clients and employees in multi-cultural situations.</p>
		
		</div>	
		<div id="attorneyprofileLeftNav">
			<?php include('leftnav.html');	?>
		</div>
</div>
<div id="attorneyprofleFooter">
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


