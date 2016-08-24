<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-left">
        <div class="container-fluid">
          <a href="<?php bloginfo( 'url' ); ?>"><img class="nav-logo" src="../wordpress/wp-content/uploads/2016/08/logo_horiz_redG.svg" alt="Red Sweater Project logo" /></a>
        </div>
      </div>
      <div class="pull-right">


          <?php

          $defaults = array(
            'menu' => 'main-navigation',
            'container' => 'false',
            'menu_class' => 'nav navbar-nav hidden-xs'
          );

            wp_nav_menu( $defaults );

           ?>
          <!-- <ul class="nav navbar-nav hidden-xs">
            <li><a href="/who-we-are/the-red-sweater">Who We Are</a></li>
            <li><a href="/what-we-do/the-school">What We Do</a></li>
            <li><a href="/get-involved/donate">Get Involved</a></li>
            <li><a href="/sponsor/sponsor-a-student">Sponsor</a></li>
          </ul> -->
          <a href="/donate" class="navbar-text donate">Donate</a>
          <div class="navbar-text">
            <img class="subnav-toggle" src="../wordpress/wp-content/uploads/2016/08/menu_icon.svg" alt="menu icon" />
          </div>
      </div>
    </nav>
