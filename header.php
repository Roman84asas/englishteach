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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Cormorant:400,600|Work+Sans:300,400&display=swap&subset=cyrillic" rel="stylesheet">
    <?php wp_head(); ?>

</head>
<body>
<header class="top_header" id="top_header">
    <a href="index.html" class="logo font_nav">
        <h1>Teach</h1>
    </a>

    <div class="top_right_nav">
        <nav class="overlayMenu">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="#about_posts">Обо мне</a></li>
                <li><a href="#services_list">Сервис</a></li>
                <li><a href="#slider_info">Языки</a></li>
                <li><a href="#contact_footer">Контакты</a></li>
            </ul>
        </nav>
        <span class="mobile"></span>
        <span class="tele">0-779-59-745</span>
    </div>

    <div class="navBurger" role="navigation" id="navToggle"></div>
</header>

<!--
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'englishteach' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
the_custom_logo();
if ( is_front_page() && is_home() ) :
    ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
else :
    ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
endif;
$englishteach_description = get_bloginfo( 'description', 'display' );
if ( $englishteach_description || is_customize_preview() ) :
    ?>
				<p class="site-description"><?php echo $englishteach_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'englishteach' ); ?></button>
			<?php
wp_nav_menu( array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
) );
?>
		</nav>
	</header>

	<div id="content" class="site-content"> -->