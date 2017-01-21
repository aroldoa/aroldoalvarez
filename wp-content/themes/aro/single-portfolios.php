<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aro
 */

get_header(); ?>

<section id="portfolio-hero">
	
	<h1 class="portfolio-title animated fadeInUp"><?php the_title(); ?></h1>
	
	<h2 class="portfolio-subtitle animated fadeIn"><?php the_excerpt(); ?></h2>
	
	<?php if ( has_post_thumbnail() ) : ?>
	    
	  	<?php the_post_thumbnail(); ?>
	 
	<?php endif; ?>
	
</section>

	
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content','portfolios' );

		endwhile; // End of the loop.
		?>
		
		

		</main><!-- #main -->
	</div><!-- #primary -->
	


<?php
get_footer();
