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
        <a href="<?php bloginfo( 'url' ); ?>">
          <img class="nav-logo" src="<?php bloginfo( 'url' ); ?>/wp-content/uploads/2016/08/logo_horiz_redG.svg" alt="Red Sweater Project logo" />
        </a>
      </div>
      <div class="navbar-right">

        <?php

        $defaults = array(
          'menu' => 'main-navigation',
          'container' => 'false',
          'menu_class' => 'nav navbar-nav hidden-xs'
        );

          wp_nav_menu( $defaults );

         ?>

        <a href="/donate" class="navbar-text donate">Donate</a>
        <div class="navbar-text menu-toggle">
          <img class="subnav-toggle" src="<?php bloginfo( 'url' ); ?>/wp-content/uploads/2016/08/menu_icon.svg" alt="menu icon" />
        </div>
      </div>
    </nav>




    <nav id="sub-navigation">
      <img class="arrow" src="../wordpress/wp-content/uploads/2016/08/triangle.svg" alt="black arrow" />
      <i class="close-menu">X</i>
      <div class="row">
        <?php

        $defaults = array(
          'menu' => 'collapse-navigation',
          'container' => 'false',
          'menu_class' => 'col-md-offset-2 col-md-8'
        );

          wp_nav_menu( $defaults );

         ?>
        <h2>Contact</h2>
        <div class="contact-form">
          <i class="white-triangle">
            <img src="../wordpress/wp-content/uploads/2016/08/white-triangle.svg" alt="white triangle" />
          </i>
          <form>
            <label for="name">Your name</label>
            <input type="text" name="name">
            <label for="email">Email address</label>
            <input type="text" name="email">
            <label for="comments">Comments</label>
            <textarea name="comments"></textarea>
            <button id="contact-form-submit-button" type="submit" name="button">Send</button>
          </form>
        </div>
      </div>
    </nav>
