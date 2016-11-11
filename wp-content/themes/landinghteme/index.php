<?php get_header();?>
    <section id="about" class="s_about bg_light">
       <?php 
        $idObj = get_category_by_slug('s_about');
        $id = $idObj->term_id;
        ?>
        <h2><?php echo get_cat_name($id);?></h2>
        <h3><?php echo category_description($id);?></h3>
        <span class="line"></span>
        <div class="container">
            <div class="row">
              <?php
                    $args = array('category' => $id );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){ setup_postdata($post);
                        if ($post->post_name == 'about'){ //поиск поста с ярлыком about и вывод информации
                        ?>
                        <div class="col-sm-4 col-sm-push-4">
                            <div class="photo">
                                <h4>Фото</h4>
                                <img src="<?php the_post_thumbnail_url();?>" href="<?php the_post_thumbnail_url();?>" class="popup" data-effect="mfp-zoom-in" alt="photo">
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-pull-4">
                            <div class="description">
                                <h4><?php the_title();?></h4>
                                <?php the_content();?>
                            </div>
                        </div>
                        <?php
                } } wp_reset_postdata();
                ?>
                <?php
                    $idObj = get_category_by_slug('s_about');
                    $id = $idObj->term_id;
                    $args = array('category' => $id );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){ setup_postdata($post);
                        if ($post->post_name == 'pers_info'){ //поиск поста с ярлыком about и вывод информации
                        ?>
                        <div class="col-sm-4">
                            <div class="pers_info">
                                <h4><?php the_title();?></h4>
                                <?php the_content();
                } } wp_reset_postdata();
                ?>
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
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <section id="resume" class="s_resume bg_default">
       <?php 
            $idObj = get_category_by_slug('s_resume');
            $id = $idObj->term_id;
        ?>
        <h2><?php echo get_cat_name($id)?></h2>
        <h3><?php echo category_description($id)?></h3>
        <span class="line"></span>
        <div class="container">
            <div class="row">
               <div class="container info">
                 <?php
                    $args = array('category' => $id );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){ setup_postdata($post);
                        if ($post->post_name == 'resume'){ //поиск поста с ярлыком resume и вывод информации
                            the_content(); //вывод ГЛАВНОГО резюме
                    } } wp_reset_postdata();
                ?>
               </div>
                <div class="border col-sm-6">
                    <h4 class="h4_w">Работа</h4>
                    <i class="icon-basic-case"></i>
                    <?php
                        $idObj = get_category_by_slug('work');
                        $id = $idObj->term_id;
                        $args = array('category' => $id );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <div class="work">
                                <p class="color_bg"><?php echo get_post_meta($post->ID, "years", true);?></p>
                                <div class="titl">
                                    <p><?php echo get_post_meta($post->ID, "place", true);?></p>
                                    <h4><?php the_title();?></h4>
                                </div>
                                <?php the_content();?>
                            </div>
                            <?php
                    } wp_reset_postdata();
                    ?>
                </div>
                <div class="col-sm-6">
                    <h4 class="h4_s">Образование</h4>
                    <i class="icon-basic-notebook-pen"></i>
                    <?php
                        $idObj = get_category_by_slug('study');
                        $id = $idObj->term_id;
                        $args = array('category' => $id );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <div class="study">
                                <p class="color_bg"><?php echo get_post_meta($post->ID, "years", true);?></p>
                                <div class="titl clearfix">
                                    <h4><?php the_title();?></h4>
                                    <p><?php echo get_post_meta($post->ID, "place", true);?></p>
                                </div>
                                <?php the_content();?>
                            </div>
                            <?php
                    } wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="s_portfolio bg_dark">
       <?php 
            $idObj = get_category_by_slug('s_portfolio');
            $id = $idObj->term_id;
        ?>
        <h2><?php echo get_cat_name($id)?></h2>
        <h3><?php echo category_description($id)?></h3>
        <span class="line"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                      <li class="filter active" data-filter="all">Все работы</li>
                       <?php $tags = get_tags();
                            if ($tags){
                                foreach ($tags as $tag){?>
                                    / <li class="filter" data-filter=".<?php echo $tag->slug;?>"><?php echo $tag->name;?></li>
                        <?php }}?>
                    </ul>
                </div>
                <div class="portfolio_grid" id="Container">
                 
                     <?php
                        $args = array('numberposts' => '-1', 'category' => $id );
                        $myposts = get_posts( $args );?>
                        <?php foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <div class="mix col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3 <?php $tags = get_the_tags();
                                if ($tags){
                                    foreach ($tags as $tag){
                                        echo $tag->slug . ' ';
                                    }}?> portfolio_item">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                            <div class="hover_cont">
                                <h3><?php the_title();?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <a class="open_descr" data-effect="mfp-zoom-out">Просмотреть</a>
                            </div>
                            <div class="hidden">
                                <div class="descr_work mfp-with-anim">
                                    <h3><?php the_title();?></h3>
                                    <?php the_content();?>
                                    <img src="<?php bloginfo('template_url')?>/img/portfolio-images/<?php echo get_post_meta($post->ID, "image", true);?>" alt="<?php the_title();?>">
                                    <p>Ссылка на сайт: <a href="<?php echo get_post_meta($post->ID, "site", true);?>" target="_blank"><?php echo get_post_meta($post->ID, "site", true);?></a></p>
                                </div>
                            </div>
                        </div>
                            <?php
                    } wp_reset_postdata();
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="s_contact bg_light">
       <?php 
            $idObj = get_category_by_slug('s_contact');
            $id = $idObj->term_id;
        ?>
        <h2><?php echo get_cat_name($id)?></h2>
        <h3><?php echo category_description($id)?></h3>
        <span class="line"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="discr_form">
                        <div class="icon"><i class="fa fa-location-arrow fa-2x" aria-hidden="true"></i></div>
                        <h4>&nbsp;Адрес:</h4>
                        <p><?php $options = get_option('sample_theme_options'); echo $options['adress'];?></p>
                    </div>
                    <div class="discr_form">
                        <div class="icon"><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></div>
                        <h4>&nbsp;Телефон:</h4>
                        <p><?php $options = get_option('sample_theme_options'); echo $options['telephone'];?></p>
                    </div>
                    <div class="discr_form">
                        <div class="icon"><i class="fa fa-globe fa-2x" aria-hidden="true"></i></div>
                        <h4>&nbsp;Вебсайт:</h4>
                        <p><a href="<?php $options = get_option('sample_theme_options'); echo $options['website'];?>" target="_blank"><?php $options = get_option('sample_theme_options'); echo $options['website'];?></a></p>
                    </div>
                    <div class="discr_form">
                        <div class="icon"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></div>
                        <h4>&nbsp;Skype:</h4>
                        <p><?php $options = get_option('sample_theme_options'); echo $options['skype'];?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="https://formspree.io/qrik116@gmail.com" class="main_form" method="POST" novalidate>
                       <div class="control-group">
                            <label class="control-label"><strong>*</strong> Ваше имя:</label>
                            <div class="controls">
                                <input type="text" name="name" placeholder="Ваше имя:" data-validation-required-message="* Это поле обязательно для заполнения" required />
                                <i class="fa" aria-hidden="true"></i>
                            </div>
                            <p class="help-block"></p>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><strong>*</strong> Электронная почта:</label>
                            <div class="controls">
                                <input type="email" name="email" placeholder="Email:" data-validation-email-message="* Не верно введена электронная почта" data-validation-required-message="* Это поле обязательно для заполнения" required />
                                <i class="fa" aria-hidden="true"></i>
                            </div>
                            <p class="help-block"></p>
                        </div>
                        <div class="control-group">
                            <label class="control-label mes">Сообщение:</label>
                            <div class="controls">
                                <textarea name="message" cols="30" rows="5" placeholder="Ваше сообщение"></textarea>
                            </div>
                        </div>
                        <button>Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>