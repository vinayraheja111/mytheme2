<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-12">
		<main id="main" class="site-main" role="main">
		<div class="row" id="post-listing">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();?>
				<div class="col-12 col-md-4">
				<?php
					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content-grid', get_post_format() );
				?>
				</div>
				<?php
				endwhile;
				?>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-3">
				<?php the_posts_pagination(
					array(
							'prev_text' => '<i class="fa fa-angle-double-left"></i>',
							'next_text' => '<i class="fa fa-angle-double-right"></i>',
						)
					);?>
				</div>
				
			</div>
			<?php
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div> <!-- row -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
	
get_footer();
