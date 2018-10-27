<!doctype html>
<html class="no-js" lang="fi">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?> Puola.fi</title>
    <?php /*
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    */ ?>
   <link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/foundation.min.css" />
    <link rel="stylesheet" href="/css/app.css" />
    <script src="/js/vendor/modernizr.js"></script>
  </head>
  <body>
    
<div class="header">
  <div class="row">
    <div class="large-12 columns">  
      <div class="left">
        <a href="/">
          <img style="border:#bbb 1px solid" width="160" height="100" class="logo" src="/img/puolan-lippu.gif" />
          <h1 style="font-family: 'Frijole', Arial, serif; font-weight: 500;" class="paaotsikko">Puola.fi</h1>
        </a> 
        <!-- <small>Puolan matkavinkit</small>-->
      </div>
    </div> 
  </div>
  
  <div class="row">
    <div class="large-12 columns">   
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
        
          </li>
          <li class="toggle-topbar menu-icon"><a href="#">Valikko</a></li>
        </ul>

        <section class="top-bar-section">
          <ul class="left">
            <li<?php if(strlen($_SERVER["REQUEST_URI"])<2) echo ' class="active"'; ?>><a href="/">ETUSIVU</a></li>
            <li<?php if(strpos($_SERVER["REQUEST_URI"],'nahtavyydet')) echo ' class="active"'; ?>><a href="/nahtavyydet">NÄHTÄVYYDET</a></li>

            <?php /*
            <li class="divider"></li>
            <li><a href="/hotellit">HOTELLIT</a></li>
            <li class="divider"></li>
            <li><a href="/matkustaminen">MATKUSTAMINEN</a></li>
            <li class="divider"></li>
            <li><a href="/ravintolat-baarit">RAVINTOLAT JA BAARIT</a></li>
            <li class="divider"></li>
            <li><a href="/ostokset-shoppailu">OSTOKSET JA SHOPPAILU</a></li>
            <li class="divider"></li>
            
            */ ?>
            <li<?php if(strpos($_SERVER["REQUEST_URI"],'kartat')) echo ' class="active"'; ?>><a href="/kartat">KARTAT</a></li>
          </ul>
        </section>
      </nav>
    </div>
  </div>
</div>
  <!-- Main Page Content and Sidebar -->
  <div class="row">
