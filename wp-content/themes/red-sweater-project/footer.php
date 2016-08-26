<footer>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <a href="<?php bloginfo( 'url' ); ?>">
        <img src="../wordpress/wp-content/uploads/2016/08/logo_horiz_white.svg" alt="Red Sweater Project logo" />
      </a>
      <p>© 2016</p>
      <p>1000 SW Forest Meadows Way</p>
      <p>Lake Oswego, OR 97034</p>
    </div>
    <div class="col-md-3 col-sm-4">
      <nav>
        <?php

        $defaults = array(
          'menu' => 'footer-menu',
          'container' => 'false',
          'menu_class' => 'footer-menu'
        );

          wp_nav_menu( $defaults );

         ?>
      </nav>
    </div>
    <div class="col-md-offset-3 col-md-3 col-sm-offset-2 col-sm-2">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
