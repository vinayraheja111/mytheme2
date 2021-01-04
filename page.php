<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>
		<?php if (is_front_page()):
				// the query
				$the_query = new WP_Query( array(
					//'category_name' => 'news',
					'posts_per_page' => 4,
				)); 
				if ( $the_query->have_posts() ) : ?>
				<div class="row mb-4">
				<div class="col-12 mb-3">
				<h2>Posledné články na blogu:</h2>
				</div>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-12 col-md-6">
					<?php
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content-grid', get_post_format() );
					?>
					</div>
				<?php endwhile; ?>
					<div class="col-12 col-md-4 mt-3 mx-auto">
						<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn-primary" rel="bookmark">Zobraziť viac</a>
					</div>
				</div>
				<?php 
				else : 
					get_template_part( 'template-parts/content', 'none' );
				endif; 
				wp_reset_postdata(); 
			 endif;?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
