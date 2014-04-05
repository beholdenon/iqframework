<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/app.css" />
    <script src="<?php echo URL; ?>/public/js/modernizr.js"></script>
  </head>
  <body>
  <div class="fixed contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">BatteryIQ</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
      </ul>
    
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="divider"></li>
          <li><a href="<?php echo URL; ?>">Home</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo URL; ?>home/exampleone">One</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo URL; ?>home/exampletwo">Two</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo URL; ?>songs">Songs</a></li>
          <li class="divider"></li>
        </ul>
    
        <!-- Left Nav Section -->
        <ul class="left">
          <li class="divider"></li>
          <li><a href="#">Learn</a></li>
          <li class="divider"></li>
        </ul>
      </section>
    </nav>
  </div>