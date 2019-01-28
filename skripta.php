<?php
print '
<!DOCTYPE HTML>
<html lang="hr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1"> 
		<meta name="description" content="Projekt">
		<meta name="keywords" content="">
		<meta name="author" content="Toni Kenđel">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="projekt_css.css">
		<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
		<title>Projekt</title>
	</head>
	<body>
		<header>
			<div class="bannerBackground">
				<img class="banner_Image" src="images/nintendo.png">
			</div>
				<nav>
					<ul class="navbar">
						<li><a class="nav_Element" href="index.html"><strong>Home</strong></a></li>
						<li><a class="nav_Element" href="news.html"><strong>News</strong></a></li>
						<li><a class="nav_Element" href="contact.html"><strong>Contact</strong></a></li>
						<li><a class="nav_Element" href="about.html"><strong>About</strong></a></li>
						<li><a class="nav_Element" href="gallery.html"><strong>Gallery</strong></a></li>
						<li><a class="nav_Element" href="dojmovnik.html"><strong>Dojmovnik</strong></a></li>
						<li id="source"><a class="nav_Element" href="source.html"><strong>Source</strong></a></li>
					</ul>
				</nav>
		</header>';
	$username = $_POST['username'];
	$lastname = $_POST['lastname'];
	$grad = $_POST['grad'];
	$država = $_POST['država'];
	echo '
		<div class="dojam">
			<h1>Vaša poruka nama</h1>
			<p>Lijep pozdrav!</p><br>
			<p>Zovem se '.$username.' '.$lastname.' i stalno kupujem preko vašeg shopa.</p>
			<p>Jako sam zadovljna vašim proizvodom i uslugom.</p>
			<p>Hvala vam</p>
			<p>'.$username.', '.$grad.', '.$država.'</p>
		</div>
	</body>
</html>';
?>
