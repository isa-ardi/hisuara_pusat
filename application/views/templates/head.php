<!DOCTYPE html>
<html lang="en">

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the apple mobile web app capable -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the apple mobile web app status bar style -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- set the description -->
	<meta name="description" content="Rekapitung">
	<meta name="keywords" content="rekapitung, kpu, pemilu, pilkada, pilkades, pilgub, pilpres, pileg">
	<meta name="author" content="Yudi Cahya Prawira">
	<!-- Page Title -->
	<title>Rekapitung - Pemilu Jujur</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CWork+Sans:300,400,500,600" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('ui/') ?>css/swiper.css">
	<link rel="stylesheet" href="<?= base_url('ui/') ?>style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/color.css">
	<!-- <script type="text/javascript" src="ajax_daerah.js"></script> -->
	<style>
		.body {
			font-family: 'Roboto', sans-serif;
		}

		.bg-opacity {
			background: RGBA(0, 0, 0, 0.4);

		}

		.navbar {
			background-color: rgba(69, 77, 85, 0) !important;
		}

		.footer {
			position: fixed;
			left: 20px;
			right: 20px;
			bottom: 20%;
			height: auto;
			padding: 10px;
		}

		.footerHukum {
			position: fixed;
			left: 20px;
			right: 20px;
			bottom: 15%;
			height: auto;
			padding: 10px;
		}

		.footers {
			position: fixed;
			left: 20px;
			right: 20px;
			bottom: 10px;
			height: auto;
			padding: 10px;
		}

		.mt-custom {
			margin-top: 300px;
		}



		@media (max-width: 1000px) {
			.mt-custom {
				position: fixed;
				right: 10px;
				bottom: 70px;
				left: 10px;

			}


		}

		.scroll {
			height: 150px;
			overflow: scroll;
			z-index: 10000;
		}
	</style>
</head>