<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>css/bootstrap.min.css">
	<title>Foo</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a href="#" class="navbar-brand">Pemrograman Web MVC</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsedNavbar">
				<ul class=" navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item"><a href="<?php echo BASEURL ?>Home/index" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="<?php echo BASEURL ?>About/page" class="nav-link">About</a></li>
					<li class="nav-item"><a href="<?php echo BASEURL ?>Mahasiswa" class="nav-link">Mahasiswa</a></li>
					<li class="nav-item"><a href="<?php echo BASEURL ?>Dosen" class="nav-link">Dosen</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>