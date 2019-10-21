<?php 
/*
* Template Name: Tour privado
*/
?>

<!-- the header -->
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

    <?php // wp_head action hook
    wp_head(); 
    ?>

</head>

<body <?php body_class(); ?>>
    <nav id="myHeader" class="navbar navbar-inverse-tp navbar-fixed-top" role="navigation">
        <div class="container-fluid anchohp">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle nvtotp collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                    'menu'              => 'header-menu-tp',
                    'theme_location'    => 'header-menu-tp',
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
<!-- end the header -->


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="call-to-action">
        <div class="container slider">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile;endif; ?>
            <span id="que_veremos"></span>
        </div>
    
        <div id="secc-titulo-tp" class="fondo">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="titulo-tp"><?php the_field( 'titulo_de_la_pagina' ); ?></h1>
                    </div>
                    <div class="col-md-4 mbstc2">
                        <div>
                            <?php the_breadcrumb() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="tour-privado" id="tour-privado">
            <div class="container">
    
                <div class="row">
    
                    <!-- PROJECT DETAILS -->
                    <div class="col-sm-4 col-md-3 mb5rem">
    
                        <!-- PROJECT DETAILS -->
                        <div class="port-detail-cont">
                            <div class="mb2rem">
                                <i class="fa fa-hourglass-end"><span> <?php the_field( 'horario' ); ?></span></i>
                            </div>
                            <div class="mb2rem">
                                <i class="fa fa-comment-alt"><span> <?php the_field( 'idioma' ); ?></span></i>
                            </div>
    
                            <div class="mb2rem">
                                <i class="fa fa-map-marker-alt"><span> <?php the_field( 'direccion' ); ?></span></i>
                            </div>
                            <div class="">
                                <a class="btnrtp btn" href="<?php the_field( 'boton_de_reservar' ); ?>">RESERVAR<span
                                        aria-hidden="true" class="button-icon-anim arrow_carrot-right"></span>
                                </a>
                            </div>
                        </div>
    
                    </div>
                    <div class="col-sm-8 col-md-8 col-md-offset-1 mb-50">
                        <div class="lightbox-item popup-gallery">
							<?php $imagen1s1 = get_field( 'imagen1s1' ); ?>
                            <a  class="sb" href="<?php echo $imagen1s1['url']; ?>" alt="<?php echo $imagen1s1['alt']; ?>">
                                <div class="pport-img-overlay">
                                    <img class="port-main-img" <?php if ( $imagen1s1 ) { ?>
											<img src="<?php echo $imagen1s1['url']; ?>" alt="<?php echo $imagen1s1['alt']; ?>" />
										<?php } ?>
                                </div>
                                <div class="port-overlay-cont">
                                    <div class="port-btn-cont">
                                        <div aria-hidden="true" class="icon_search"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="row">
    
                    <div class="popup-gallery">

                        <!-- IMG -->
                        <div class="col-sm-4 col-xs-12 mb-20">
                                <div class="lightbox-item">
									<?php $imagen2s1 = get_field( 'imagen2s1' ); ?>
                                    <a class="sb" href="<?php echo $imagen2s1['url']; ?>" alt="<?php echo $imagen2s1['alt']; ?>">
                                        <div class="port-img-overlay">
                                            <img class="port-main-img" 
										<?php if ( $imagen2s1 ) { ?>
											<img src="<?php echo $imagen2s1['url']; ?>" alt="<?php echo $imagen2s1['alt']; ?>" />
										<?php } ?>
                                                
                                        </div>
                                        <div class="port-overlay-cont">
                                            <div class="port-btn-cont">
                                                <div aria-hidden="true" class="icon_search"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
                        

                        <!-- IMG -->
                        <div class="col-sm-4 col-xs-12 mb-20">
                                <div class="lightbox-item">
									<?php $imagen3s1 = get_field( 'imagen3s1' ); ?>
                                    <a class="sb" href="<?php echo $imagen3s1['url']; ?>" alt="<?php echo $imagen3s1['alt']; ?>" />
                                        <div class="port-img-overlay">
                                            <img class="port-main-img" 
											<?php if ( $imagen3s1 ) { ?>
												<img src="<?php echo $imagen3s1['url']; ?>" alt="<?php echo $imagen3s1['alt']; ?>" />
											<?php } ?>
                                        </div>
                                        <div class="port-overlay-cont">
                                            <div class="port-btn-cont">
                                                <div aria-hidden="true" class="icon_search"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        <!-- IMG -->
                        <div class="col-sm-4 col-xs-12 mb-20">
                                <div class="lightbox-item">
									<?php $imagen4s1 = get_field( 'imagen4s1' ); ?>
                                    <a class="sb" href="<?php echo $imagen4s1['url']; ?>" alt="<?php echo $imagen4s1['alt']; ?>" />
                                        <div class="port-img-overlay">
                                            <img class="port-main-img"
											<?php if ( $imagen4s1 ) { ?>
												<img src="<?php echo $imagen4s1['url']; ?>" alt="<?php echo $imagen4s1['alt']; ?>" />
											<?php } ?>
                                        </div>
                                        <div class="port-overlay-cont">
                                            <div class="port-btn-cont">
                                                <div aria-hidden="true" class="icon_search"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
    
    
                    </div>
    
                </div>
    
                <div class="row" id="informacion">
                    <div class="col-md-12">
                        <h4 class="subt1"><?php the_field( 'titulo_de_la_descripcion_del_tour' ); ?></h4>
                    </div>
                    <div class="col-md-6 tptp">
                        <?php the_field( 'descripcion_del_tour_columna1' ); ?>
                    </div>
                    <div class="col-md-6 tptp">
    
                        <?php the_field( 'descripcion_del_tour_columna2' ); ?>
                    </div>
    
                </div>
    
            </div>
        </div>

        
    
        <div class="fondo fondo-tp" id="contacto">
            <div class="container">
                <div class="col-lg-9 contacto_superior"></div>
            </div>
            <div id="contacto" class="container contacto-tp">
                <div class="row ">
                    <div class="col-xs-12 col-sm-12 col-lg-6 contacto_texto">
                        <?php the_field( 'seccion_contacto_columna_1' ); ?>
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-6 contacto_derecho">
                        <?php the_field( 'seccion_contacto_columna_2' ); ?>
                    </div>
                    <div id="borde_derecho"></div>
                </div>
            </div>
        
        </div>

        <div id="otras_ciudades" class="otras_ciudades">
            
            <h2 class="otras_subtp"><?php the_field( 'seccion_de_tours_relacionados' ); ?></h2>
            <p class="otras_texto"><?php the_field( 'seccion_de_tours_relacionados_descripcion' ); ?></p>
            <div class="container">
                <div class="row">
                <div class="col-sm-6 col-md-4 ciudades_espacio">
                        <div class="span4">
                            <div class="thumbnailok">
                                <div class="caption-tp-p">
                                    <div class="Line_2"></div>
                                    <h4>
                                    <?php the_field( 'seccion_tours_relacionados_img1-text' ); ?>
                                    </h4>
                                    <div class="Line_2"></div>
                                </div>
                                
                                <div class="caption-tp">                                    

                                    <p class="labelok"><a target="_blank" href="<?php the_field( 'seccion_tours_relacionados_img1-href' ); ?>" class="label">VER
                                            TOUR</a>
                                </div>

                                <?php $seccion_tours_relacionados_img1 = get_field( 'seccion_tours_relacionados_img1' ); ?>
								<?php if ( $seccion_tours_relacionados_img1 ) { ?>
								<img class="img-otros-tp" src="<?php echo $seccion_tours_relacionados_img1['url']; ?>" alt="<?php echo $seccion_tours_relacionados_img1['alt']; ?>" />
								<?php } ?>
                            </div>
                        </div>
                    </div>                    
            
                    <div class="col-sm-6 col-md-4 ciudades_espacio">
                        <div class="span4">
                            <div class="thumbnailok">
                                <div class="caption-tp-p">
                                    <div class="Line_2"></div>
                                    <h4>
                                    <?php the_field( 'seccion_tours_relacionados_img2-text' ); ?>
                                    </h4>
                                    <div class="Line_2"></div>
                                </div>
                                
                                <div class="caption-tp">                                    

                                    <p class="labelok"><a target="_blank" href="<?php the_field( 'seccion_tours_relacionados_img2-href' ); ?>" class="label">VER
                                            TOUR</a>
                                </div>

                                <?php $seccion_tours_relacionados_img2 = get_field( 'seccion_tours_relacionados_img2' ); ?>
								<?php if ( $seccion_tours_relacionados_img2 ) { ?>
								<img class="img-otros-tp" src="<?php echo $seccion_tours_relacionados_img2['url']; ?>" alt="<?php echo $seccion_tours_relacionados_img2['alt']; ?>" />
								<?php } ?>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-sm-6 col-md-4 ciudades_espacio">
                        <div class="span4">
                            <div class="thumbnailok">
                                <div class="caption-tp-p">
                                    <div class="Line_2"></div>
                                    <h4>
                                    <?php the_field( 'seccion_tours_relacionados_img3-text' ); ?>
                                    </h4>
                                    <div class="Line_2"></div>
                                </div>
                                
                                <div class="caption-tp">                                    

                                    <p class="labelok"><a target="_blank" href="<?php the_field( 'seccion_tours_relacionados_img3-href' ); ?>" class="label">VER
                                            TOUR</a>
                                </div>

                                <?php $seccion_tours_relacionados_img3 = get_field( 'seccion_tours_relacionados_img3' ); ?>
								<?php if ( $seccion_tours_relacionados_img3 ) { ?>
								<img class="img-otros-tp" src="<?php echo $seccion_tours_relacionados_img3['url']; ?>" alt="<?php echo $seccion_tours_relacionados_img3['alt']; ?>" />
								<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- the footer -->
    <footer class="footer-tp">
        <div class="colorf">
    
            <?php the_field( 'footer_texto' ); ?>
    
        </div>
    
    </footer>
    <?php // wp_footer action hook
    wp_footer();

    ?>
    
    </body>
    
    </html>
