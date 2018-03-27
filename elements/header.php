<!DOCTYPE html>
<html lang="fr">

<head>
  <?php Loader::element('header_required');?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Factorian</title>

  <link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/style.css">
  <script src="<?php echo $view->getThemePath(); ?>/js/bootstrap.min.js"></script>
</head>

<body>
<div class="<?= $c->getPageWrapperClass()?>">
  <div class="container" id="menu">
    <div class="row">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#" style="border: 3px solid #494949;
    font-size: 16px;
    margin: 10px 0;
    padding: 10px 15px; color:black;">Factorian</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color:black;"> Home</a></li>
            <li><a href="#" style="color:black;"> About Us</a></li>
            <li><a href="#" style="color:black;"> Services</a></li>
            <li><a href="#" style="color:black;"> Works</a></li>
            <li><a href="#" style="color:black;"> Blog</a></li>
            <li><a href="#" style="color:black;"> Pages</a></li>
            <li><a href="#" style="color:black;"> Contact Us</a></li>
            <li><a href="#" style="color:black;"><span class="glyphicon glyphicon-search"></span></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
