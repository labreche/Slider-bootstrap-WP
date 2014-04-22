<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

						<?php //if(of_get_option('search_bar', '1')) {?>
						<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="form-group">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</div>
						</form>
						<?php //} ?>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		
		<div class="container">
            <!--slider-->
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
        <?php
          $the_query = new WP_Query(array(
           'post_type' =>'post',
           'posts_per_page' => 1
         ));
         while ( $the_query->have_posts() ) :
         $the_query->the_post();
         ?>
        <div class="item active">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php
         $the_query = new WP_Query(array(
          'post_type' =>'post',
          'offset' => 1
         ));
         while ( $the_query->have_posts() ) :
         $the_query->the_post();
         ?>
         <div class="item">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
                        
                    
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                    </div>
                </div>
            </div>
            <!--/slider-->
           
