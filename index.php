<?php
	require_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?= $GeneralViews->head() ?>
		<link rel="stylesheet" href="/static/assets/css/index.css">
		<!-- Index CSS -->
		 
		<title>Anasayfa | Tiyatro & Sinema Kulübü</title>
	</head>
	<body data-bs-theme="">
		
		<nav class="navbar navbar-expand-lg sticky-top">
			<div class="container-md">
				<a class="navbar-brand d-md-none" href="#">
					<img class="logo" src="/static/uploads/logo.png" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#MainNavbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="MainNavbarMenu">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a class="nav-link active" href="#">ANASAYFA</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">KURUMSAL</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Hakkımızda</a></li>
								<li><a class="dropdown-item" href="#">Vizyon & Misyon</a></li>
								<li><a class="dropdown-item" href="#">İletişim</a></li>
								<li><a class="dropdown-item" href="#">Danışman Hocamız</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#">YÖNETİM</a>
						</li>
					</ul>
					<a class="navbar-brand mx-auto d-none d-md-block" href="#">
						<img class="logo" src="/static/uploads/logo.png" alt="Logo" />
					</a>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">SPONSORLAR</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">2023-2024</a></li>
								<li><a class="dropdown-item" href="#">2024-2025</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ETKİNLİKLER</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<header class="py-5">
			<div class="container-md py-5">
				<h1>Eskişehir Teknik Üniversitesi Tiyatro ve Sinema Kulübü</h1>
				<h3></h3>
			</div>
			<!--
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="/static/uploads/header1.jpg" alt="">
					</div>
					<div class="swiper-slide">
						<img src="/static/uploads/header2.jpg" alt="">
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
			-->
		</header>

		<main>
			<section class="container-md py-5">
				<h2 class="mb-5 text-center">Biz Kimiz?</h2>
				<div class="row g-4">
					<div class="col-4">
						<div class="card h-100 shadow">
							<div class="card-body p-4 text-center">
								<div class="icon-box"><i class="fa-solid fa-bolt"></i></div>
								<h3>Hakkımızda</h3>
								<p>Hakkımızda Metini Burda Olacak</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card h-100 shadow">
							<div class="card-body p-4 text-center">
								<div class="icon-box"><i class="fa-solid fa-bolt"></i></div>
								<h3>Vizyonumuz</h3>
								<p>Vizyonumuz Metini Burda Olacak</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card h-100 shadow">
							<div class="card-body p-4 text-center">
								<div class="icon-box"><i class="fa-solid fa-bolt"></i></div>
								<h3>Misyonumuz</h3>
								<p>Misyonumuz Metini Burda Olacak</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<?= $GeneralViews->javascripts() ?>
		<!--
		<script>
			var swiper = new Swiper(".mySwiper", {
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
				},
			});
		</script>
		-->
	</body>
</html>