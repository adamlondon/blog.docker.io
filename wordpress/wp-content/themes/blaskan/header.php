<!DOCTYPE html>
<!--[if IEMobile 7 ]><html id="blaskan" class="no-js iem7" <?php language_attributes(); ?>><![endif]-->
<!--[if lt IE 7 ]><html id="blaskan" class="no-js ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html id="blaskan" class="no-js ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html id="blaskan" class="no-js ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html id="blaskan" class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html id="blaskan" class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php blaskan_head_title(); ?></title>
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/img/favicon.png" />
	<?php wp_head(); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
<body <?php body_class(); ?>>



<?php echo blaskan_top(); ?>
<div id="site">
	<div id="wrapper">
		<header id="header" role="banner">

			<div style="margin-left: -12px; float: left;">
        <a href="http://www.docker.io" title="Docker Homepage"><img style="margin-top: 0px; height: 60px; width: 160px; margin-left: 10px;" src="<?php echo get_bloginfo('template_url') ?>/img/docker-top-logo.png"></a>
      </div>
		  
		  <div id="topnavigation" class="navbar">
        <div class="pull-right" >
          <ul class="nav">
            <li id="nav-home"><a href="http://www.docker.io/">Home</a></li>
            <li id="nav-about"><a href="http://www.docker.io/about/">About</a></li>
            <li id="nav-gettingstarted"><a href="http://www.docker.io/gettingstarted/">Getting started</a></li>
            <li id="nav-community"><a href="http://www.docker.io/community/">Community</a></li>
            <li id="nav-documentation"><a href="http://docs.docker.io/en/latest/">Documentation</a></li>
            <li id="nav-blog" class="active"><a href="http://blog.docker.io/">Blog</a></li>
            <li id="nav-index"><a href="http://index.docker.io/" title="Docker Image Index, find images here">INDEX <img class="inline-icon" src="<?php echo get_bloginfo('template_url') ?>/img/external-link-icon.png" title="external link"> </a></li>
          </ul>
        </div>
    	</div>

      <div class="titlebar">
          <a href="/"><h1 class="pageheader" title="Docker Blog">DOCKER BLOG</h1></a>
      </div>


		  <!-- <?php echo blaskan_header_structure(); ?> -->
		</header>
		<!-- / #header -->
		