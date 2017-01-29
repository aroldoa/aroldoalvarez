<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro
 */

?>



<section id="portfolio-listing">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="">
	
		<?php 
		// the query
		
		$query = new WP_Query( array( 'post_type' => 'portfolios', 'orderby' => 'menu_order title','order'   => 'ASC', ) ); 
			
		?>
		

		<?php if ( $query->have_posts() ) : ?>
			
			<!-- the loop -->
			<?php while ( $query->have_posts() ) : $query->the_post();
			
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			
        ?>
			
		<a href="<?php the_permalink(); ?>">	
        <div class="portfolio-list-item" style="background-image: url(<?php echo $image ['0'];?>); background-size:cover; background-repeat:no-repeat; background-position:center;">

            <div class="blackhover"></div>
				
            <div class="portfolio-list-item-copy">
						
						<span><?php the_excerpt(); ?></span>
						<h2><?php the_title(); ?></h2>
					
            </div>
            
        </div>
        </a>	
				
			<?php endwhile; ?>
			<!-- end of the loop -->
		
			<!-- pagination here -->
		
			<?php wp_reset_postdata(); ?>
		
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
			
	
	</div><!-- .entry-content -->

</article><!-- #post-## -->
</section><!-- #portfolio-listing -->