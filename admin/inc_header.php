<?php include("../inc_koneksi.php") ?>
<!DOCTYPE html>
<html lang="id">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Company Profile</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/summernote/css/summernote-lite.css">
	<link rel="stylesheet" href="../assets/summernote/plugin/summernote-image-list/summernote-image-list.css">
	<script defer src="../assets/fontawesome/js/fontawesome.js"></script>
	<style>
	    /* I added this to make the summernote dropdown carrets don't appear twice */
	    .note-btn.dropdown-toggle:after {
		content: none;
	    }
	</style>
    </head>
    <body class="container">
	<header>
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
		    <a class="navbar-brand" href="#">Navbar</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			    <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Admin</a>
			    </li>
			    <li class="nav-item">
				<a class="nav-link" href="#">Admin Tutors</a>
			    </li>
			    <li class="nav-item">
				<a class="nav-link" href="#">Admin Partners</a>
			    </li>
			    <li class="nav-item">
				<a class="nav-link" href="#">Admin Contacts</a>
			    </li>
			    <li class="nav-item">
				<a class="nav-link" href="#">Logout &gt;&gt;</a>
			    </li>
			</ul>
		    </div>
		</div>
	    </nav>
	</header>
	<main>
