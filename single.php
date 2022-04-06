<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <section class="main col-md-8">
                <div class="row single-posts">
                    <?php if(have_posts() ) : while(have_posts()) : the_post();?>
                    <!-- Articulo -->
                    <article class="col-md-12 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('homepage-thumb'); } ?>
                            </div>
                            <div class="info" style="
                                
                            ">
                                <h2 class="titulo"><?php the_title(); ?></h2>
                                <p class="fecha"><?php echo get_the_date(); ?></p>
                                <div class="categorias">
                                    <?php the_category(); ?>
                                </div>
                                <div class="texto"><?php echo the_content(); ?></div>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; else : ?>
                    <!-- NO hay Articulos -->
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <a href="#"><img src="img/1.png" width="700" alt=""></a>
                            </div>
                            <div class="info">
                                <h2 class="titulo">El post que buscas no existe :( </h2>
                                <div class="extracto">Revisa que la url este correcta</div>
                            </div>
                        </div>
                    </article>
                    <?php endif; ?>
                </div>

                <section class="comentarios col-sm-12">
                    <?php comments_template( ); ?>
                </section>
            </section>
            <?php get_sidebar();?>
        </div>
    </div>

<?php get_footer(); ?>