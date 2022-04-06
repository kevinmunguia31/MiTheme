            <aside class="sidebar col-md-4">
                <div class="widget redes-sociales">
                    <div class="titulo-seccion">
                        <h3>Síguenos</h3>
                        <div class="redes-sociales">
                            <a class="youtube" href="#">
                                <i class="icono fa fa-youtube-play"></i>
                                <span class="seguidores">130K</span>
                            </a>
                            <a class="facebook" href="#">
                                <i class="icono fa fa-facebook"></i>
                                <span class="seguidores">6K</span>
                            </a>
                            <a class="twitter" href="#">
                                <i class="icono fa fa-twitter"></i>
                                <span class="seguidores">6.5K</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="widget boletin">
                    <div class="titulo-seccion">
                        <h3>Suscribete</h3>
                        <form class="formulario" action="">
                            <label for="email">Suscribete a nuestro boletin</label>
                            <input type="email" id="email" placeholder="Correo Electronico" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>

               <!--  <div class="widget anuncio">
                    <div class="contenedor-anuncio">
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/img/banner2.png" alt=""></a>
                    </div>
                </div> -->

                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : endif; ?>
            </aside>