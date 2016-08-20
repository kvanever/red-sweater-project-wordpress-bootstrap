<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-nav navbar-right">
          <ul class="nav navbar-nav">
            <li class="who-we-are {% if page.folder == 'who-we-are' %}active{% endif %}">
              <a href="/who-we-are/the-red-sweater">Who We Are</a>
            </li>
            <li class="what-we-do {% if page.folder == 'what-we-do' %}active{% endif %}">
              <a href="/what-we-do/the-school">What We Do</a>
            </li>
            <li class="get-involved {% if page.folder == 'get-involved' %}active{% endif %}">
              <a href="/get-involved/donate">Get Involved</a>
            </li>
            <li class="sponsor {% if page.folder == 'sponsor' %}active{% endif %}">
              <a href="/sponsor/sponsor-a-student">Sponsor</a>
            </li>
            <li class="donate{% if page.folder == 'donate' %} active{% endif %}">
              <a href="/donate">Donate</a>
            </li>
            <li class="menu">
              <img src="/images/menu_icon.svg" alt="menu icon" />
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    </header>
