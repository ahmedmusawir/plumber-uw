<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Plumber</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
<header class="top-header">

<div class="row">
	<div class="site-title medium-8 columns">
       <a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		    <div class="logo">
		    <img src="img/logo.jpg" alt="">
			<?php
			    //$siteLogo = get_field('website_logo',1476); // 1476 is post id                               
			    //$size = 'full'; // (thumbnail, medium, large, full or custom size)
			    //if( $siteLogo ) { echo wp_get_attachment_image( $siteLogo, $size ); }
			?>
		    </div> 
		</a>
    </div>
    <div class="site-contact medium-4 columns">

    	<div class="">
    		<p><i class="fa fa-phone .small-text-center"></i> 0409 097 095, (08) 8248 6122 </p>
    		<p><i class="fa fa-paper-plane .small-text-center"></i> office@dciplumbing.com.au </p>	
    	</div>

    </div>
</div>   
</header>

<div class="contain-to-grid sticky">
	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="index.php">HOME</a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	 
	    <ul class="right">
	      <li><a href="about-us.php">ABOUT US</a></li>
	      <li><a href="blocked-drains.php">BLOCKED DRAINS</a></li>
	      <li><a href="hot-water.php">HOT WATER SERVICE</a></li>
	      <li><a href="commercial.php">COMMERCIAL</a></li>
	      <li><a href="contact.php">CONTACT</a></li>
	    </ul>

	 
	  </section>
	</nav>
</div>