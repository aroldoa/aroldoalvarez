<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro
 */

?>

<section id="portfolio-hero">
	
	<h1 class="portfolio-title animated fadeInUp"><?php the_title(); ?></h1>
	
	<h2 class="portfolio-subtitle animated fadeIn"><?php the_excerpt(); ?></h2>
	
	<?php if ( has_post_thumbnail() ) : ?>
	    
	  	<?php the_post_thumbnail(); ?>
	 
	<?php endif; ?>
	
</section>

<section id="about-aro">
	
	<div class="lines">
		<img src="<?php echo get_template_directory_uri(); ?>/img/lines.svg"/>
	</div>
			
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aro' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

</section>

<?php echo do_shortcode('[instagram-feed]'); ?>