<?php
/**
* Template Name: Instagram wuick links
 */

get_header('instagram'); ?>

	<section id="primary" class="col-12 col-md-6 offset-md-3">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</section><!-- #primary -->
<?php
get_footer('instagram');
