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
		

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

		<section class="mainCat">
			<H1>BESPOKE FURNATURE</H1>
			<div class="contentBox">
				<div class="catagoryPic" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
				</div>
				<h2>Fitted Furnature</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam sint exercitationem debitis, porro, ipsa molestias consequuntur at illum quis non.</p>
			</div>
			<div class="contentBox">
				<div class="catagoryPic" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
				</div>
				<h2>Freestanding Furnature</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam sint exercitationem debitis, porro, ipsa molestias consequuntur at illum quis non.</p>
			</div>
		</section>

		
	<section class="ourWork">
		<h2>Our Work</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, eaque architecto quaerat excepturi dolore! Recusandae, asperiores, esse! Optio rerum animi, earum modi, illum cumque consequuntur porro reprehenderit nisi ut error. Voluptas veritatis quo ipsa accusantium quisquam accusamus deleniti velit. Quo.</p>
		<button>View Projects</button>
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