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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836844.7091268664!2d138.14151428242252!3d-34.98355219116978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab735c7c526b33f%3A0x4033654628ec640!2sAdelaide+SA%2C+Australia!5e0!3m2!1sen!2smy!4v1444618559566" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>