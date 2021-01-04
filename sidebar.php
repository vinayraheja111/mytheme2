<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$page = get_post(url_to_postid(home_url($_SERVER['REQUEST_URI'])));
if ( !is_active_sidebar( 'sidebar-' . $page->post_name )){
	if ( !is_active_sidebar( 'sidebar-1' ))
		return;
	 ?>
	<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1'); ?>
	</aside><!-- #secondary default-->
<?php } ?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-' . $page->post_name ); ?>
</aside><!-- #secondary page sidebar-->
