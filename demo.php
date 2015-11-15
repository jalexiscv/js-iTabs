<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Tabs Demo</title>
		
		<link rel="stylesheet" href="iTabs.css" />
		
	</head>
	<body>
		<ul id="tabs">
			<li><a class="tab" href="#" id="one">One</a></li>
			<li><a class="tab" href="#" id="two">Two</a></li>
			<li><a class="tab" href="#" id="three">Three</a></li>
		</ul>
		
		<div id="home">
			<div class="feature">
				<img src="mgfxtabs1.jpg" alt="" />
			</div>
			<div class="feature">
				<img src="mgfxtabs2.jpg" alt="" />
			</div>
			<div class="feature">
				<img src="mgfxtabs3.jpg" alt="" />
			</div>
		</div>
		
		<script type="text/javascript" src="mootools.full.js"></script>
		<script type="text/javascript" src="iRotater.js"></script>
		<script type="text/javascript" src="iTabs.js"></script>
		<script type="text/javascript">
			var tabs = new iTabs('.tab','.feature',{
				autoplay: true,
				transitionDuration:500,
				slideInterval:3000,
				hover:true
			});
		</script>
		
	</body>
</html>
