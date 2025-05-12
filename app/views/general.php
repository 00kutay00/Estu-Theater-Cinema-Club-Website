<?php

namespace App\Views;

class General {
	
	public $db;
	
	function __construct($db) {
		$this->db = $db;
	}
	
	public function head() {
?>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
		<!-- Swiper CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
		<!-- fontawesome -->

		<link href="https://fonts.googleapis.com/css2?family=Gidole&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
		<!-- Navbar Font -->

		<link rel="stylesheet" href="/static/assets/css/main.css">
		<!-- Main CSS -->
<?php
	}
	
	public function javascripts() {
?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<!-- jquery -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<!-- bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
		<!-- Swiper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
		<!-- fontawesome -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.13.0/beautify-html.js"></script>
		<!-- Beautify JS  -->
		<script src="/static/assets/js/mainn.js"></script>
		<!-- MAIN JS  -->
<?php
	}
	
}
	