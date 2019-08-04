<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package englishTeach
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

</head>
<body>
<header class="top_header" id="top_header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo font_nav">
        <h1><?php bloginfo( 'name' ); ?></h1>
    </a>
    <div class="top_right_nav">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header',
            'menu_id'        => 'header-menu',
            'menu_class'     => 'navbar-nav',
            'container'      => 'nav',
            'container_class'=> 'overlayMenu',
            'container_id'   => 'header-nav',
        ) );
        ?>
        <span class="mobile"></span>
        <span class="tele">0-779-59-745</span>
    </div>
    <div class="navBurger" role="navigation" id="navToggle"></div>
</header>