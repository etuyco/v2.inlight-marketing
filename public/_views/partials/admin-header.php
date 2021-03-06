<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inlight Marketing Version 2</title>
	<link href="<?php echo SITE_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo SITE_URL ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo SITE_URL ?>/assets/css/site.css" rel="stylesheet">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="<?php echo $acc_type ?>">

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand" id="logo"><img src="<?php echo SITE_URL ?>/assets/img/admin-logo.png" /></a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span id="head-avatar"><img src='<?php echo SITE_URL ?>/uploads/<?php echo $photo ?>' /></span></li>
        <li><a>Welcome <?php echo $name ?></a></li>
        <li><a href="<?php echo SITE_URL ?>/admin/logout">Logout</a></li>
      </ul>
    </nav>
  </div>
</header>
<hr />