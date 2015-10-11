<hgroup>
   <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
   <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup>


<div class="logo">
   <?php
       $siteLogo = get_field('website_logo',1476); // 1476 is post id                               
       $size = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $siteLogo ) { echo wp_get_attachment_image( $siteLogo, $size ); }
   ?>
</div>

$siteLogo = variable name (any name can do)
website_logo = field name (from the custom field)
1476 = post ID

<hgroup>
   <h1 class="site-title">
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	    <div class="logo">
		<?php
		    $siteLogo = get_field('website_logo',1476); // 1476 is post id                               
		    $size = 'full'; // (thumbnail, medium, large, full or custom size)
		    if( $siteLogo ) { echo wp_get_attachment_image( $siteLogo, $size ); }
		?>
	    </div> 
	</a>
    </h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>			
</hgroup>