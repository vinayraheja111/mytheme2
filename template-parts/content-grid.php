<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php !is_single()?post_class('grid-view pb-4 mb-4'):post_class(); ?>>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'post-thumb' ); ?>
		</div>
		<header class="entry-header px-1 px-md-3">

			<?php
				$categories_list = get_the_category_list( esc_html__( ' &hearts; ', 'dreamarina' ) );
				if ( $categories_list && wp_bootstrap_starter_categorized_blog() ) {
					printf( '<span class="cat-links my-3 my-md-4 text-center">' . esc_html__( '%1$s', 'dreamarina' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
				the_title( '<h2 class="entry-title mt-3 text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php wp_bootstrap_starter_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content text-justify px-1 px-md-3">
			<?php echo get_the_excerpt();	?>
		</div><!-- .entry-content -->
		<footer class="entry-footer px-1 px-md-3 mt-4 mb-3 pb-3">
			<div class="row mt-4">
				<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'dreamarina' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<div class="col-12 mt-4">',
					'</div>'
				);
				?>
			</div>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->