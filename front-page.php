<!-- the header -->
<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container slider">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;endif; ?>
            <span id="que_veremos"></span>
        </div>

        <div id="que_veremos" class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="row">
                        <div class="col-xs-4 col-sm-1 col-lg-1">
                            <img class="logo_veremos" src="<?php bloginfo('template_url');?>/images/destination.svg">
                        </div>
                        <div class="col-12">
                            <h2 class="subtitulos text-768-center">Tours disponibles</h2>
                        </div>
                    </div>
                    <div class="textos"><?php the_field( 'tours_disponibles' ); ?></div>
                </div>
                <div class="table1no col-lg-4">

                    <a target="_blank" href="<?php the_field( 'tours_disponibles_url_3' ); ?>">
                        <div class="grid">
                            <figure class="effect-sarah">
                                <?php $tours_disponibles_3 = get_field( 'tours_disponibles_3' ); ?>
                                <?php if ( $tours_disponibles_3 ) { ?>
                                    <img src="<?php echo $tours_disponibles_3['url']; ?>" alt="<?php echo $tours_disponibles_3['alt']; ?>" />
                                <?php } ?>
                                <figcaption>
                                    <div class="numeros">3</div>
                                    <h2><?php the_field( 'tours_disponibles_3_titulo' ); ?></h2>
                                    <?php the_field( 'tours_disponibles_3_descripcion' ); ?>
                                    <div class="labelp3">RESERVA YA !</div>


                                </figcaption>
                            </figure>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">

                
                <div class="col-xs-12 col-sm-6 col-lg-4 img_altura">
                    <a target="_blank" href="<?php the_field( 'tours_disponibles_url_1' ); ?>">

                        <div class="grid">
                            <figure class="effect-sarah">
                                <?php $tours_disponibles_1 = get_field( 'tours_disponibles_1' ); ?>
    							<?php if ( $tours_disponibles_1 ) { ?>
    								<img src="<?php echo $tours_disponibles_1['url']; ?>" alt="<?php echo $tours_disponibles_1['alt']; ?>" />
    							<?php } ?>
                                <figcaption>
                                    <div class="numeros">1</div>
                                    <h2><?php the_field( 'tours_disponibles_1_titulo' ); ?></h2>
                                    <?php the_field( 'tours_disponibles_1_descripcion' ); ?>
                                    <div class="labelp">RESERVA YA !</div>


                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                

                <div class="col-xs-12 col-sm-6 col-lg-4 img_altura">
                    <a target="_blank" href="<?php the_field( 'tours_disponibles_url_2' ); ?>">

                        <div class="grid">
                            <figure class="effect-sarah">
                                <?php $tours_disponibles_2 = get_field( 'tours_disponibles_2' ); ?>
                                <?php if ( $tours_disponibles_2 ) { ?>
                                    <img src="<?php echo $tours_disponibles_2['url']; ?>" alt="<?php echo $tours_disponibles_2['alt']; ?>" />
                                <?php } ?>
                                <figcaption>
                                    <div class="numeros">2</div>
                                    <h2><?php the_field( 'tours_disponibles_2_titulo' ); ?></h2>
                                    <?php the_field( 'tours_disponibles_2_descripcion' ); ?>
                                    <div class="labelp">RESERVA YA !</div>

                                          
                                </figcaption>
                            </figure>
                        </div>
                    </a>
                </div>
                <div class="table1si col-xs-12 col-sm-6 img_anchura img-center">

                    <a target="_blank" href="<?php the_field( 'tours_disponibles_url_3' ); ?>">
                        <div class="grid">
                            <figure class="effect-sarah">
                                <?php $tours_disponibles_3 = get_field( 'tours_disponibles_3' ); ?>
                                <?php if ( $tours_disponibles_3 ) { ?>
                                    <img src="<?php echo $tours_disponibles_3['url']; ?>" alt="<?php echo $tours_disponibles_3['alt']; ?>" />
                                <?php } ?>
                                <figcaption>
                                    <div class="numeros">3</div>
                                    <h2><?php the_field( 'tours_disponibles_3_titulo' ); ?></h2>
                                    <?php the_field( 'tours_disponibles_3_descripcion' ); ?>
                                    <div class="labelp">RESERVA YA !</div>
                                                                       


                                </figcaption>
                            </figure>
                        </div>
                    </a>

                </div>
                <div class="col-xs-12 col-lg-4 img_anchura px-0">
                    <div class="col-sm-6 col-lg-12 grid img-center">
                    
                        <!-- <a href="<?php //the_field( 'tours_disponibles_url_4' ); ?>"> -->
                    
                        <div class="grid">
                            <figure class="effect-sarah">
                                <?php $tours_disponibles_4 = get_field( 'tours_disponibles_4' ); ?>
                                <?php if ( $tours_disponibles_4 ) { ?>
                                    <img src="<?php echo $tours_disponibles_4['url']; ?>" alt="<?php echo $tours_disponibles_4['alt']; ?>" />
                                <?php } ?>
                                <figcaption>
                                    <div class="numeros">4</div>
                                    <h2><?php the_field( 'tours_disponibles_4_titulo' ); ?></h2>
                                    <?php the_field( 'tours_disponibles_4_descripcion' ); ?>
                    
                    
                    
                                </figcaption>
                            </figure>
                        </div>
                    
                        <!-- </a> -->
                    
                    </div>

                    <div class="col-xs-12 col-sm-6 grid col-lg-12 img-center">

                        <a href="<?php the_field( 'tours_disponibles_url_5' ); ?>" target="_blank" rel=noopener>
                        <div class="grid">
                            <figure class="effect-sarah">
                                <?php $tours_disponibles_5 = get_field( 'tours_disponibles_5' ); ?>
                                <?php if ( $tours_disponibles_5 ) { ?>
                                    <img src="<?php echo $tours_disponibles_5['url']; ?>"  alt="<?php echo $tours_disponibles_5['alt']; ?>"  />
                                <?php } ?>
                                <figcaption>
                                    <div class="numeros">5</div>
                                    <h2><?php the_field( 'tours_disponibles_5_titulo' ); ?></h2>
                                    <?php the_field( 'tours_disponibles_5_descripcion' ); ?>


                                </figcaption>
                            </figure>
                        </div>
                        </a>

                    </div>

                    <div class="col-xs-12 col-sm-6 container veremos table1si">
                        <div class="col-sm-12 fondo">
                            <p><?php the_field( 'tours_disponibles_cinta_21' ); ?></p>
                        </div>
                        <div class="col-sm-12 fondo">
                            <p><?php the_field( 'tours_disponibles_cinta_22' ); ?></p>
                        </div>
                        <div class="col-sm-12 fondo">
                            <p><?php the_field( 'tours_disponibles_cinta_23' ); ?></p>
                        </div>
                        <div class="col-sm-12 pr0">
                            <a class="btnps1 btn btn-lg" href="https://www.eventbrite.co.uk/e/entradas-free-tour-de-edimburgo-en-espanol-38432850691" rel ="noopener noreferrer" target = "_blank">RESERVAR</a>
                        </div>
                        
                    </div>

                </div>
            </div>
            <p></p>
        </div>

        <div class="container veremos table1no">
            <div class="col-lg-3 fondo">
                <p><?php the_field( 'tours_disponibles_cinta_21' ); ?></p>
            </div>
            <div class="col-lg-4 fondo">
                <p class="postes"><?php the_field( 'tours_disponibles_cinta_22' ); ?></p>
            </div>
            <div class="col-lg-3 fondo">
                <p><?php the_field( 'tours_disponibles_cinta_23' ); ?></p>
            </div>
            
            <div class="col-lg-2 pr0">
                <a class="btnps1 btn btn-lg" href="https://www.eventbrite.co.uk/e/entradas-free-tour-de-edimburgo-en-espanol-38432850691" rel ="noopener noreferrer" target = "_blank">RESERVAR</a>
            </div>
            
            

        </div>

        <div id="quien_somos" class="row fondo recortar">
            <div class="container">
                <div class="row quienes_bajar">
                    <div class="col-xs-3 col-sm-2 col-lg-1">
                        <img class="logo_veremos" src="<?php bloginfo('template_url');?>/images/binoculars-copy.svg">
                    </div>
                    <div class="col-12">
                        <h2 class="subtitulos text-pt-center">Punto de encuentro</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    				
                    <!-- Google map -->                       				
						
						
						<div class="col-sm-6 col-lg-6 mapgoogle" id="my-fast-map" data-iframe-width="100%" data-iframe-height="400" data-iframe-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2233.974765683451!2d-3.1913547840576606!3d55.94980928060651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c7857a3c09b9%3A0xde13aeb0d3eaadc3!2s166+High+St%2C+Edinburgh+EH1+1QS%2C+Reino+Unido!5e0!3m2!1ses!2scu!4v1534960610205" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
							
  <a href="" title="Click para activar el mapa"><img src="wp-content/uploads/2018/09/staticmap.png"></a>


                  <!-- End Google map -->      
                        <?php $location_array = get_field( 'inicio_tour' );?>
						
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="textos textos_separados"><?php the_field( 'quien_somos_texto' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="preguntas_frecuentes" class="container">
            <div class="row bajar-pf">
                <div class="col-xs-3 col-sm-2 col-lg-1">
                    <img class="logo_veremos" src="<?php bloginfo('template_url');?>/images/FAQ.svg">
                </div>
                <div class="col-12">
                    <h2 class="subtitulos sub_preguntas">Preguntas frecuentes</h2>
                </div>
            </div>
        </div>
        <div class="container faq">
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordeon">
                        <h3 class="accordeon-title"><?php the_field( 'pregunta1' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta1' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta2' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta2' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta3' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta3' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta4' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta4' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta5' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta5' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta6' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta6' ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordeon">
                        <h3 class="accordeon-title"><?php the_field( 'pregunta7' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta7' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta8' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta8' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta9' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta9' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta10' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta10' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta11' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta11' ); ?>
                        </div>
                        <h3 class="accordeon-title"><?php the_field( 'pregunta12' ); ?></h3>
                        <div class="accordeon-content">
                            <?php the_field( 'respuesta12' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="otras_ciudades" class="row fondo recortar recortar_new">
            <div class="container otras_recortar">
            <h2 class="otras_sub">Otras ciudades</h2>
            <p class="otras_texto"><?php the_field( 'otras_ciudades' ); ?></p>
            <div class="row">
                <div class="col-sm-6 col-md-4 ciudades_espacio">
                    <div class="span4">
                        <div class="thumbnailok">
                            <div class="caption">
                                <div class="Line_2"></div>
                                <h4><?php the_field( 'titulo1' ); ?></h4>
                                <?php the_field( 'resumen1' ); ?>
                                <div class="Line_2"></div>
                                <p class="labelok"><a target="_blank" href="<?php the_field( 'link1' ); ?>" class="label">VER TOUR</a>
                            </div>
                            <?php $imagen1 = get_field( 'imagen1' ); ?>
                            <?php if ( $imagen1 ) { ?>
                                <img src="<?php echo $imagen1['url']; ?>" alt="<?php echo $imagen1['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 ciudades_espacio">
                    <div class="span4">
                        <div class="thumbnailok">
                            <div class="caption">
                                <div class="Line_2"></div>
                                <h4><?php the_field( 'titulo2' ); ?></h4>
                                <?php the_field( 'resumen2' ); ?>
                                <div class="Line_2"></div>
                                <p class="labelok"><a target="_blank" href="<?php the_field( 'link2' ); ?>" class="label">VER TOUR</a>
                            </div>
                            <?php $imagen2 = get_field( 'imagen2' ); ?>
                            <?php if ( $imagen2 ) { ?>
                                <img src="<?php echo $imagen2['url']; ?>" alt="<?php echo $imagen2['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 ciudades_espacio">
                    <div class="span4">
                        <div class="thumbnailok">
                            <div class="caption">
                                <div class="Line_2"></div>
                                <h4><?php the_field( 'titulo3' ); ?></h4>
                                <?php the_field( 'resumen3' ); ?>
                                <div class="Line_2"></div>
                                <p class="labelok"><a target="_blank" href="<?php the_field( 'link3' ); ?>" class="label">VER TOUR</a>
                            </div>
                            <?php $imagen3 = get_field( 'imagen3' ); ?>
                            <?php if ( $imagen3 ) { ?>
                                <img src="<?php echo $imagen3['url']; ?>" alt="<?php echo $imagen3['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
                <div class="col-lg-9 contacto_superior"></div>
        </div>
        <div id="contacto" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-6 contacto_texto">
                    <h2>Contacto</h2>
                    <?php the_field( 'descripcion' ); ?>
                    <a class="contacto_correo" href="mailto:<?php the_field( 'correo' ); ?>"><?php the_field( 'correo' ); ?></a>
                    <a class="contacto_tel" href="tel:<?php the_field( 'telefono' ); ?>"><?php the_field( 'telefono' ); ?></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6 contacto_derecho">
                    <?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>
                </div>
                <div id="borde_derecho"></div>
            </div>
        </div>
    </div>



<!-- the footer -->
<?php get_footer(); ?>
