<!DOCTYPE html>
<html>
	<head>
		<title>IT Bucket</title>
		<link href="<?php echo site_url('/public/bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet">
		<script src="<?php echo site_url('/public/bootstrap/js/jquery.js'); ?>"></script>
		<script src="<?php echo site_url('/public/bootstrap/js/bootstrap.js'); ?>"></script>
		<style type="text/css">
		</style>
	</head>
	<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header ">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url(); ?>">IT_Bucket</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<ul class="nav navbar-nav">
			<li><a href="/home/about">About</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
				</ul>
			</li>
			</ul>
			<ul class="nav navbar-nav pull-right">
			<li><a href="login/">Login</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">