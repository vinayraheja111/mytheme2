<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/inc/assets/css/owl.carousel.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/inc/assets/css/owl.theme.green.css">
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/inc/assets/js/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/inc/assets/js/owl.carousel.min.js"></script>

<?php wp_head(); ?>
<?php if(!is_admin_bar_showing()):?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152727327-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-152727327-1');
	</script>
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/6324bd68266277c9e58211dad/af4310442b283c9b5c512a037.js");</script>
<?php endif;?>
<style>
 .item
 {
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 90%;
    margin: 3rem 2rem;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
 }
 main .item .blog-titile{
    padding: 2rem 0;
 }
 main .item .blog-btn
 {
    padding: .7rem 2rem;
    background: var(--sky);
    margin: .5rem;
 }


</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
   
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <header class="site-preheader">
        <div class="container">
            
            <div class="row">
                
                    <div class="col-12 col-md-6 mt-3 float-left text-left">
                        <?=get_bloginfo('description')?>
                    </div>
                    <div class="col-12 col-md-6 mt-1 float-right text-right">
                            <ul class="social-media-list">
                                <?php 
                                if ( is_active_sidebar('social-top-bar'))
                                    dynamic_sidebar( 'social-top-bar'); 
                                ?>
                            </ul>
                    </div> 
            </div>
        </div>
    </header>
    <header  id="masthead" class="site-header sticky-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner" >
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <div class="navbar-brand p-0">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img class="img-fluid" src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
    </header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' ) && has_header_image()): ?>
     <div class="parallax-window" data-position-y="0px" data-parallax="scroll" data-image-src="<?php header_image(); ?>"></div>
    <?php else: ?>  
    <br/>  
     <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
    <?php endif; ?>