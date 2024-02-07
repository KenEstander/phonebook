<?php
session_start();
include_once($ROOT_DIR . "config/database.php");
include_once($ROOT_DIR . "config/Models.php");
?>

<html lang="en">
  <head>
  	<title>PHONEBOOK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=$ROOT_DIR;?>templates/css/style.css">
    <link rel="stylesheet" href="<?=$ROOT_DIR;?>templates/css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light header-fix">
    <a class="navbar-brand" href="#">Menubook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-menu.php">My Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-friend.php">My Friend</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="suggested-friend-list.php">Friend Suggestion</a>
        </li>
        <li class="nav-item;">
          <a class="nav-link" href="login.php" >Log Out</a>
        </li>
      </ul>
      <form action="add-friend.php" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    </nav>

<div class="container custom-body">
<br><br><br><br><br>
