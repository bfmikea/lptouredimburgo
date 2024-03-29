<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Tour Edimburgo ofrece a los viajeros la oportunidad de conocer lo mejor de Edimburgo en su propio idioma.">
    <meta name="keywords" content="tour edimburgo, free tour edimburgo, visita edimburgo, guia edimburgo, visita guiada edimburgo, excursion edimburgo, tour gratis">
    <meta name="author" content="touredimburgo.com">
    <meta name="copyright" content="touredimburgo.com">

    <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">

    <title><?php wp_title('|', true, 'right'); bloginfo( 'name' ); ?></title>

    <?php

    // wp_head action hook
    wp_head();

    ?>

</head>

<body <?php body_class(); ?>>
    <nav id="myHeader" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid anchohp">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TOUR EDIMBURGO</a>
                
            </div>


                <?php

                // show here a menu using a bootstrap menu nav walker
                $args = array(
                    'menu'              => 'header-menu',
                    'theme_location'    => 'header-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
                );
                wp_nav_menu( $args );

                ?>


        </div>
    </nav>
