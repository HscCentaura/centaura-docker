<?php
/**
 * The Header for our theme.
 *
 * @package Nuntius
 * @since Nuntius 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) | !(IE 9) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<link rel="icon" type="image" href="http://www.centaura.be/wp-content/uploads/2013/11/favicon.png" />
</head>

<body <?php body_class(); ?>>
<div id="body-container">
<?php do_action( 'before' ); ?>
<div id="menu-secondary" class="menu-container">
  <div class="wrap">
    <div id="site-description">
      <?php bloginfo( 'description' ); ?>
    </div>
    <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'menu', 'menu_class' => '', 'menu_id' => 'menu-secondary-items', 'fallback_cb' => '' ) ); ?>
  </div>
  <!-- .wrap --> 
</div>
<!-- #menu-secondary .menu-container -->

<div id="header">
  <div class="wrap">
  
    <h1 id="site-title"> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.centaura.be/wp-content/uploads/2013/11/bg_header.png" title="centaura" alt="centaura"/></a> </h1>
    <?php get_sidebar( 'header' ); ?>
  </div>
  <!-- .wrap --> 
</div>
<!-- #header -->

<div id="menu-primary" class="menu-container">
  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu', 'menu_class' => '', 'menu_id' => 'menu-primary-items' ) ); ?>
</div>
<!-- #menu-primary .menu-container -->

<?php get_template_part( 'breadcrumb-trail' ); ?>
<div id="container">
