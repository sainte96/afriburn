<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="African entertainment news, trends, gists, facts, events, and lots of gaze snatching events" />
	<meta property="og:title" content="AfriBURN - Media and Entertainment" />
	<meta property="og:description" content="African entertainment news, trends, gists, facts, events, and lots of gaze snatching events" />
	<meta property="og:image" content="hype.jpg" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="img/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title><?php echo $pageTitle; ?> - AfriBURN</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="demo/js/html5shiv.min.js"></script>
	<script src="demo/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="demo/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="demo/css/style.css">
	<link rel="stylesheet" type="text/css" href="demo/css/templete.css">
	<link class="skin" rel="stylesheet" type="text/css" href="demo/css/skin/skin-7.css">
	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="demo/plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="demo/plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="demo/plugins/revolution/revolution/css/navigation.css">

	<style type="text/css">
		.actives{
			color: #4caf50!important;
		}
		input, textarea, select{
			background-color: black!important;
			color: white;
		}
		.bootstrap-select .dropdown-toggle { 
		    background: black !important;
		}

		.bootstrap-select .dropdown-toggle:hover { 
		    background: black !important;
		}
		.bootstrap-select .dropdown-toggle:focus { 
		    background: black !important;
		}
	</style>
</head>
<body id="bg">
<div class="page-wraper">

	<!-- header -->
    <header class="site-header header mo-left">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
           <div class="main-bar clearfix " style="background-color:black">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="https://afriburn.ng"><img src="img/logo_white.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span style="background-color: white"></span>
						<span style="background-color: white"></span>
						<span style="background-color: white"></span>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index"><img src="img/logo_black.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav">	
							<li><a href="https://afriburn.ng" class="<?php if ($pageTitle== 'Media and Entertainment'){echo 'actives';} ?>">Home</a></li>
							<li><a href="about" class="<?php if ($pageTitle== 'About Us'){echo 'actives';} ?>">About Us</a></li>
							<li><a href="africonnect" class="<?php if ($pageTitle== 'Africonnect'){echo 'actives';} ?>">AfriCONNECT</a></li>
							<li><a href="https://academy.afriburn.ng">AfriBurn Film Academy</a></li>
							<li><a href="contact" class="<?php if ($pageTitle== 'Contact Us'){echo 'actives';} ?>">Contact Us </a></li>
						</ul>	
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>