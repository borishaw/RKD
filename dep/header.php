<?php
	date_default_timezone_set('America/Los_Angeles');
	
	$navUrl= '';
	$navClass = '';
	if($active == 'index') {
		$navClass = 'smoothanchor';
	} else {
		$navUrl = 'index.php';
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the title of your site -->
	<title>RK Doors | Architectural Wood Doors &amp; Frames</title>
	<!--  Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicons/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#248ab9">
	<link rel="shortcut icon" href="favicons/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="RK Doors">
	<meta name="application-name" content="RK Doors">
	<meta name="msapplication-TileColor" content="#248ab9">
	<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
	<meta name="msapplication-config" content="favicons/browserconfig.xml">
	<meta name="theme-color" content="#248ab9">
	
	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--scripts needed for ReCaptcha and Validation-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>
	<!--end of script-->
	
</head>
<body class="page-<?php echo $active; ?>">
	<!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="img/logo-nav-colour.png" alt="RK Doors"/>
                <div class="spinner7">
                    <div class="circ1"></div>
                    <div class="circ2"></div>
                    <div class="circ3"></div>
                    <div class="circ4"></div>
                </div>
            </div>
        </div>
    </div>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<div class="w1">
			<!-- header of the page -->
			<header id="header" class="style14">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<!-- page logo -->
							<div class="logo">
								<a href="index.php">
									<img src="img/logo-nav-white.png" alt="RK Doors" class="img-responsive w-logo">
									<img src="img/logo-nav-colour.png" alt="RK Doors" class="img-responsive b-logo">
								</a>
							</div>
							<!-- main navigation of the page -->
							<nav id="nav">
								<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
								<div class="nav-holder">
									<ul class="list-inline nav-top">
										<li><a href="<?php echo $navUrl; ?>#wrapper" class="<?php echo $navClass; ?>">Home</a></li>
										<li><a href="<?php echo $navUrl; ?>#section2" class="<?php echo $navClass; ?>">About RK Doors</a></li>
										<li><a href="<?php echo $navUrl; ?>#section3" class="<?php echo $navClass; ?>">Why Us</a></li>
										<li><a href="products.php">Our Products</a></li>
										<li><a href="<?php echo $navUrl; ?>#section4" class="<?php echo $navClass; ?>">Contact Us</a></li>
									</ul>
								</div>
							</nav>
							<!-- icon list -->
							<ul class="list-unstyled icon-list">
								<li>
									<span class="phone-number">(416) 479&ndash;8323</span>
									<a href="tel:+14164798323" class="opener-icons"><i class="fa fa-phone"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			
	