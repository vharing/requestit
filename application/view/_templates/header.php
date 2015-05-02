<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Request It!</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/normalize.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/skeleton.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/jquery-ui.structure.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/jquery-ui.theme.css">
  <link rel="stylesheet" href="<?php echo URL ?>vendor/css/jquery-ui.theme.min.css">

  <link rel="stylesheet" href="<?php echo URL ?>css/styles.css">

  <link href='http://fonts.googleapis.com/css?family=Lobster&subset=all ' rel='stylesheet' type='text/css'>


  <!--
  <link rel="icon" type="image/png" href="images/favicon.png">
  -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="/js/search.js"></script>  


</head>
<body>

<div class="row">
  <div class="twelve columns header">
      <div class="container">
        <div class="row">
          <div class="four columns logo">
            Request it!
          </div>
        	<div class="eight columns navigation">	
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/requests">Requests</a></li>
			        <li><a href="/users">Users</a></li>
              <?php if (isset($_SESSION["login"])) : ?>
                <li><a href="/users/logout">Log Out</a></li>
              <?php else : ?>
                <li><a href="/users/login">Log In</a></li>
              <?php endif; ?>
              <li><a href="/requests/add">Patron</a></li>
              <li><a href="/search">Search</a></li>
              <li><a href="/information">About</a></li> 
            </ul> 
        	</div>
        </div>
      </div>
  </div>
</div>
