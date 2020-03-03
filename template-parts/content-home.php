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
			<H1><?php the_field('cat-heading'); ?></H1>
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
		</section>

		
	<section class="ourWork">
		<h2><?php the_field('our_work'); ?></h2>
		<p><?php the_field('our_work_copy'); ?></p>
		<button class="big-btn">View Projects</button>
	</section>


		<!-- .custom-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', '_s' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->