<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/estilos.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/estilos_single.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oswald&display=swap" rel="stylesheet">
    <title>
        <?php
            if(is_home() ){
                echo get_bloginfo('name');
            } else if (is_single() ){
                echo the_title();
            }else{
                echo get_bloginfo('name');
            }
        ?>
    </title>

    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <a href="<?php bloginfo('url') ?>/"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Kevin Munguia"></a>
                </div>
                <div class="redes-sociales col-xs-12 col-sm-6">
                    <a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a>
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <!-- <audio src="http://stream.zeno.fm/sdtyt9r53k8uv" controls="controls"></audio> -->
                </div>
            </div>
        </div>

        <nav class="menu">
            <div class="container">
                <div class="row">
                    <!-- <ul class="col-md-12">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">Jquery</a></li>
                        <li><a href="#">Photoshop</a></li>
                        <li><a href="#">Git</a></li>
                    </ul> -->
                    <?php
                        wp_nav_menu(array(
                            'container' => false,
                            'menu_class' => '',
                            'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                            'theme_location' => 'menu-top'
                        ));
                    ?>
                </div>
            </div>
        </nav>

        <!-- div class="ad container">
            <div class="row hidden-xs">
                <div class="col-md-12">
                    <img src="//<?php bloginfo('template_url') ?>////img/banner.jpg" alt="">
                </div>
            </div>
        </div> -->
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')) : endif; ?>
    </header>
