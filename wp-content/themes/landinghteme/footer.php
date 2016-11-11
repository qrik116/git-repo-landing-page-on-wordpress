<footer class="main_footer bg_dark clearfix">
        <div class="descr">
            &copy; <?php echo date("Y");?> <?php bloginfo('name');?>
        </div>
        <div class="social_wrap">
            <ul>
                <?php
                    $idObj = get_category_by_slug('social');
                    $id = $idObj->term_id;
                    $args = array('category' => $id );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){ setup_postdata($post);
                        ?>
                        <li><a href="<?php echo get_post_meta($post->ID, "soc_url", true);?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, "font-awesome", true);?>" aria-hidden="true"></i></a></li>
                        <?php
                } wp_reset_postdata();
                ?>
            </ul>
        </div>
    </footer>
    <!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
   <?php wp_footer();?>
    <!-- Yandex.Metrika counter -->
    <!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter -->
    <!-- /Google Analytics counter -->
</body>

</html>