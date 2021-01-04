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
body { 
  background-image: url('https://dreamarina.sk/wp-content/uploads/2020/05/dreamarina.sk-logo-blond-560x560.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center 100px;
  background-size: 85vw;
}
.wp-block-button__link {
    background-color: #E49497!important;
    opacity: .8;
}
@media only screen and (max-width: 600px) {
    .wp-block-button__link {
        color: #fff;
        background-color: #E49497;
        border-radius: 0px;
        display: block;
        font-size: 18px;
        padding: 12px 24px;
        opacity: .8;
        text-align: center;
    }
    .wp-block-button{
        width:100%;
    }
    .container-fluid{
        padding:0px;
    }
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="content" class="site-content">
		<div class="container-fluid">
			<div class="row">