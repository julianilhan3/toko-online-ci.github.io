<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title><?= isset($title) ? $title : "CIShop" ?> - CodeIgniter E-Commerce</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url(); ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/font-awesome/css/all.min.css">

	<!-- mycss -->
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

	


</head>

<body>
	<!-- Navbar -->
	<?php $this->load->view('layouts/_navbar') ?>
	<!-- End Navbar -->

	<!-- Content -->
	<?php $this->load->view($page) ?>
	<!-- End Content -->

	<script src="<?= base_url(); ?>/assets/libs/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?= base_url(); ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/app.js"></script>
	<script src="<?= base_url(); ?>/assets/vendor/slick-1.8.1/slick/slick.min.js"></script>
	<script src="<?= base_url(); ?>/assets/vendor/slick-1.8.1/slick/slick.js"></script>
	
</body>

</html>
