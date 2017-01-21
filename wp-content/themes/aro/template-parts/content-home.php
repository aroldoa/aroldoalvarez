<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aro
 */

?>


<section id="showcase">
	
	<h1 class="showcase-title animated fadeInUp">Lead Visual Designer <span>/</span> <br/>UX Assassin<span>.</span></h1>
	
	<h2 class="showcase-subtitle animated fadeIn">Crafting Digital Experiences.</h2>
	
	<?php if ( has_post_thumbnail() ) : ?>
	    
	  	<?php the_post_thumbnail(); ?>
	 
	<?php endif; ?>
	
	
	<div class="scroll-icon">
		<img src="<?php echo get_template_directory_uri(); ?>/img/scroll.svg"/>
	</div>
	
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="intro">
		
			<div class="lines">
				<img src="<?php echo get_template_directory_uri(); ?>/img/lines.svg"/>
			</div>
			
		
		<div class="container">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aro' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


<section id="featured-portfolio">
	<div class="container-fluid">
		<div class="row no-gutter" style="padding-left:90px;">
			<div class="col-md-5">
				<a href="http://localhost/aroldoalvarez.com/portfolio-item/the-skinmd">
					<div id="project-item" class="skinmd">
						<div class="skinmd-img"></div>
						<h3>The SkinMD</h3>
						<h4>Brand, Website Design &amp; Development, E-Commerce</h4>
					</div>
				</a>
			</div>
			<div class="col-md-7">
				<div id="project-item" class="watkins">
					<img class="img-responsive" src="http://localhost/aroldoalvarez.com/wp-content/uploads/2016/12/watkins.jpg"/>
					<h3>Watkins Appeals</h3>
					<h4>Website Design</h4>
				</div>
			</div>
		</div>
		<div class="row no-gutter" style="padding-left:90px;">
			<div class="col-md-7">
				<div id="project-item" class="goebel">
					<img class="img-responsive" src="http://localhost/aroldoalvarez.com/wp-content/uploads/2016/12/goebel.jpg"/>
					<h3>Goebel Pools</h3>
					<h4>Brand, Website Design &amp; Development</h4>
				</div>
			</div>
			<div class="col-md-5">
				<div id="project-item" class="nswm">
					<img class="img-responsive" src="http://localhost/aroldoalvarez.com/wp-content/uploads/2016/12/nswm.jpg"/>
					<h3>Northside World Music</h3>
					<h4>Brand, Website Design &amp; Development</h4>
				</div>
			</div>
		</div>
	</div>
	
</section>

<section id="featured-articles">
	
</section>

<section id="social-gram">
	
</section>

