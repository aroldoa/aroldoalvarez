<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				
				if( is_front_page() ){
					
					get_template_part( 'template-parts/content', 'home' );
				
					
				} else if( is_page(7) ){
					
					
					get_template_part( 'template-parts/content', 'portfolio' );
					
				
					
				} else if(is_page(9) ){
					
					get_template_part( 'template-parts/content', 'aro' );
					
					
				} else{
					
					get_template_part( 'template-parts/content', 'page' );
					
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
