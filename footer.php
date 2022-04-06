<footer>
        <!-- <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php bloginfo('template_url') ?>/img/banner.jpg" alt="">
                </div>
            </div>
        </div> -->
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            wp_nav_menu(array(
                                'container' => false,
                                'menu_class' => '',
                                'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                                'theme_location' => 'menu-footer'
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Sitio Creado por Kevin Munguia - 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>