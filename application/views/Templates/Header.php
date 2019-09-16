<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/compiler/bootstrap.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/compiler/style.css');?>">
		<!-- Important Owl stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url('assets/owl-carousel/owl.carousel.css');?>">
		<!-- Default Theme -->
		<link rel="stylesheet" href="<?php echo base_url('assets/owl-carousel/owl.theme.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css');?>">
		<script src="https://kit.fontawesome.com/d92702d438.js"></script>
	</head>
	<body>
		<!-- navbar navbar-expand-lg -->
		<nav id="nav" class="navbar navbar-expand-lg navbar-dark">
			<div class="container">
				<a class="navbar-link" href="<?php echo base_url();?>">
					<img class="img-fluid d-block ml-5" src="<?php echo base_url('assets/imgs/yourlogo.png');?>"  alt="nav-logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSite" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse justify-content-center" id="navbarSite">
					<ul class="navbar-nav ">
						<li class="nav-item active">
							<a id="nav-a" class="nav-link" href="<?php echo base_url();?>">HOME<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a id="nav-a" class="nav-link" href="#"  data-toggle="modal" data-target="#appModal">ABOUT US</a>
						</li>
						<li class="nav-item">
							<a id="nav-a" class="nav-link" href="<?php echo base_url('Contato');?>">CONTACT</a>
						</li>
					</ul>
				</div>
				<div class="collapse navbar-collapse justify-content-end">
					<ul class="navbar-nav">
						<li class="navbar-item">
							<a class="nav-link" href="#">
								<i class="fab fa-facebook-square"></i>
							</a>
						</li>	
						<li class="navbar-item">
							<a class="nav-link" href="#">
								<i class="fab fa-google-plus-square"></i>
							</a>
						</li>
						<li class="navbar-item">
							<a class="nav-link" href="#">
								<i class="fab fa-twitter-square"></i>
							</a>
						</li>
					</ul>
				</div>	
			</div>
		</nav>	