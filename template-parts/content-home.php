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
				<a href="shop">
				<div class="catagoryPic" style="background-image:url('<?php the_field('cat_1_img'); ?>');">
				</div>
				<h2><?php the_field('cat_1'); ?></h2>
			</a>
				<p><?php the_field('cat_1_copy'); ?></p>

			</div>
			<div class="contentBox">
				<a href="shop">
				<div class="catagoryPic" style="background-image:url('<?php the_field('cat_2_img'); ?>');">
				</div>
				<h2><?php the_field('cat_2'); ?></h2>
				</a>
				<p><?php the_field('cat_2_copy'); ?></p>

			</div>
			<div class="contentBox">
				<a href="shop">
				<div class="catagoryPic" style="background-image:url('<?php the_field('cat_2_img'); ?>');">
				</div>
				<h2><?php the_field('cat_3'); ?></h2>
				</a>
				<p><?php the_field('cat_3_copy'); ?></p>

			</div>


		</section>

	


</article><!-- #post-<?php the_ID(); ?> -->