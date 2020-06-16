<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Sheel Tangri</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400&family=Manrope:wght@300;400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/medias/images/favicon/apple-touch-icon.png'; ?>">
    <link rel=" icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/medias/images/favicon/favicon-32x32.png'; ?>">
    <link rel=" icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/medias/images/favicon/favicon-16x16.png'; ?>">
    <link rel=" manifest" href="<?php echo get_template_directory_uri() . '/medias/images/favicon/site.webmanifest'; ?>">

    <?php wp_head(); ?>
</head>

<?php

global $template;
console($template);

?>

<body <?php body_class('main'); ?>>

    <header class="sticky-top" role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
            <div class="container-fluid">
                <a class="navbar-brand mx-auto" href=<?php bloginfo('url'); ?>>
                    <img src="<?php echo wp_get_attachment_url(1361); ?>" alt="" class="navbar-logo" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar',
                    'menu_class'        => 'nav navbar-nav mx-auto text-center font-kollektif font-weight-bold',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                </>
        </nav>
    </header>

    <main role="main">