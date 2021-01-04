<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header px-1 px-md-3">
			<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php wp_bootstrap_starter_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content text-justify px-1 px-md-3">
			<?php
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dreamarina' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
			<footer class="entry-footer px-1 px-md-3 mt-2 mb-3 pb-3">
				<?php wp_bootstrap_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
	</article><!-- #post-## -->