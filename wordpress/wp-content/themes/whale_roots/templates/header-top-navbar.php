
<div id="wrap">
<header class="navbar navbar-static-top navbar-inner navbar-fixed-top" role="banner">

      <div class="container">
        <a href="<?php echo get_settings('home'); ?>" title="Homepage"><div class="brand logo"><img src="http://www.docker.io/static/img/docker-top-logo.png"> </div></a>
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
          <ul class="nav pull-right">

            <li><a href="https://www.docker.io/" title="Homepage">Home</a></li>
            <li><a href="https://www.docker.io/learn_more/" title="Learm more">Learn More</a></li>
            <li><a href="https://www.docker.io/gettingstarted/" title="Get Started">Getting started</a></li>
            <li><a href="https://www.docker.io/community/" title="The Docker Community">Community</a></li>
            <li><a href="https://docs.docker.io" title="Documentation">Documentation</a></li>
            <li class="active"><a class="active" href="<?php echo home_url(); ?>/">Blog</a></li>
            <li><a href="https://index.docker.io" title="Docker Image Index, find images here">INDEX <img class="inline-icon" src="http://www.docker.io/static/img/external-link-icon.png" title="external link"> </a></li>
          </ul>
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
          ?>
        </nav>
      </div>
</header>
