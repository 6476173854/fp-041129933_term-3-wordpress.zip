<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            <nav>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'container' => 'ul',
                    'menu_class' => 'main-menu',
                ) );
                ?>
            </nav>
        </div>
    </header>
