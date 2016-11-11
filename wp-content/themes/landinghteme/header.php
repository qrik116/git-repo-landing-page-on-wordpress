<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Евгений Козырев Web-дизайнер, Front-End разработчик</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/logo.png" />
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/skins/<?php 
    $options = get_option('sample_theme_options');
    echo $options['selectinput'];?>.css" />
</head>

<body>
    <div class="loader">
        <div class="loader_inner">
            <i class="fa fa-refresh fa-spin fa-5x fa-fw"></i>
        </div>
    </div>
    <header class="top_header main_color_bg" data-parallax="scroll" data-image-src="<?php bloginfo('template_url')?>/img/bg.jpg" data-z-index="1">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="logo_container col-lg-3 col-lg-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1">
                <?php dynamic_sidebar('logo-1');?>
                </div>
                <nav class="main_mnu">
                    <div class="btn">
                        <span class="line"></span>
                    </div>
                    <div class="top_mnu">
                        <ul>
                           <?php
                                $massiv_vhodnih_parametrov = array(
                                    'theme_location' => 'menu',
                                    'container' => false,
                                    'echo' => false,
                                    'depth' => 0,
                                    'link_before' => '',
                                    'link_after' => '',
                                    );
                                print strip_tags(wp_nav_menu($massiv_vhodnih_parametrov), '<li>, <a>');
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="top_wrapper">
                <div class="top_row">
                    <div class="top_cell">
                        <div class="title">
                            <h1><?php bloginfo('name')?></h1>
                            <span class="line"></span>
                            <p><?php bloginfo('description')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>