<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="heroImage" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>

<div class="intro-box">	
<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</div>	
		<section class="mainCat">
			<div class="contentBox">
				<a href="gallery">
				<div class="catagoryPic" style="background-image:url('<?php the_field('cat_1_img'); ?>');">
				</div>
				<h3><?php the_field('cat_1'); ?></h3>
			</a>

			</div>
			<div class="contentBox">
				<a href="projects">
				<div class="catagoryPic" style="background-image:url('<?php the_field('cat_2_img'); ?>');">
				</div>
				<h3><?php the_field('cat_2'); ?></h3>
				</a>

			</div>
			<div class="contentBox">
				<a href="D-I-Y">
				<div class="catagoryPic" style="background-image:url('<?php the_field('cat_3_img'); ?>');">
				</div>
				<h3><?php the_field('cat_3'); ?></h3>
				</a>

			</div>


		</section>

	
	


</article><!-- #post-<?php the_ID(); ?> -->