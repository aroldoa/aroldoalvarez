<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid">
		<div id="portfolio-intro">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aro' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aro' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->

<section id="elements-area">
	<div class="container-fluid">
		<div class="row no-gutter">
			
			<div class="col-md-7">
				
				<div class="row no-gutter">
				<div class="col-sm-6">
					<img id="element1" class="img-responsive" src="<?php the_field('element-grid-1'); ?>" alt="" />
				</div>
				<div class="col-sm-6">
					<img id="element2" class="img-responsive" src="<?php the_field('elements_grid_2'); ?>" alt="" />
				</div>
				</div>
				
				<img id="element3" class="img-responsive" src="<?php the_field('elements_grid_3'); ?>" alt="" />
			</div>
			
			<div class="col-md-5">
				<img id="element4" src="<?php the_field('elements_grid_4'); ?>" alt="" />
			</div>
			
		</div>
	</div>
</section>

<section id="ux-process">
	
	<div class="container-fluid sm-space">
		<?php the_field('ux_process'); ?>
	</div>
	
	<div class="container">
		<?php echo do_shortcode ('[rev_slider alias="skinmd-ux"]'); ?>
	</div>
	
</section>


<section id="port-back-fixed" style="background-image:url(<?php the_field('fixed_background'); ?>); background-attachment: fixed; background-size:cover; background-repeat:no-repeat;">
	
	
</section>



<section id="extra-info">
	
	<div class="container lg-space">
		
		<?php the_field('extra_information'); ?>
		
	</div>
	
</section>


<section id="portfolio-board">
	<div class="container-fluid">
		<div class="row">
			<img  src="<?php the_field('portfolio_board'); ?>" alt="" />
		</div>
	</div>
</section>


<section id="portfolio-parallax">
	
	<div class="container plax-inner">
		
		<div class="row">
			
			<img class="img-responsive plax1" data-stellar-ratio="0.5" src="<?php the_field('parallax_item_1'); ?>"/>
			
			<img class="img-responsive plax2" data-stellar-ratio="2" src="<?php the_field('parallax_item_2'); ?>"/>
			
			<img class="img-responsive plax3" data-stellar-ratio=".5" src="<?php the_field('parallax_item_3'); ?>"/>
	
		
		</div>
	
	</div>
</section>


<div class="clearfix"></div>



<section id="portfolio-end">
	
	<div class="container-fluid">
		
			<?php the_field('portfolio-end'); ?>

	</div>
	
</section>


</article><!-- #post-## -->


<section id="get-next-portfolio">
	<div class="container-fluid">
		<div class="row">
			
		<?php
		
			$next_post = get_next_post();
			$nextThumbnail = get_the_post_thumbnail_url( $next_post->ID );
			
				if (!empty( $next_post )): ?>
				
				<a href="<?php echo get_permalink( $next_post->ID ); ?>">
				
				<section id="get-next-portfolio" style="background-image:url(<?php echo $nextThumbnail ?>); background-repeat:no-repeat; background-size:cover; background-position:center;">
					<div class="blackhover"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-8 col-md-offset-1">
								
								<div class="next-link">	
									<span>View Next Project</span>
				  					<a href="<?php echo get_permalink( $next_post->ID ); ?>">
				  						<img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/img/next.svg" /><h4><?php echo $next_post->post_title; ?></h4>
				  					</a>
				 				</div>
				 			</div>
				 		</div>
				 	</div>
				 </section>
				 
				 </a>
				 
		<?php endif; ?>
		</div>
	</div>
</section>	