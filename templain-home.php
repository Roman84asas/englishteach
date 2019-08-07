<?php

/*
 * Template name: Главная траница
 */

get_header();

    while ( have_posts() ) :
        the_post(); ?>


    <section class="info_sect">
        <div class="wrapper">
            <div class="info_data font_nav">
                <h2><?php the_field('info_labe'); ?></h2>
                <p class="description"><?php the_field('descr_info'); ?></p>
                <a href="#box_subscribe" class="button" id="button"><span>Узнать больше</span></a>
            </div>

        </div>
    </section>

    <section class="services_icon">
        <div class="item">
            <div class="image_holder">
                <?php
                $image = get_field('img_icon_1');
                if ($image){ ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php }?>
            </div>
            <h3><?php the_field('icon_1'); ?></h3>
            <p><?php the_field('info_icon_1'); ?></p>
        </div>

        <div class="item">
            <div class="image_holder">
                <?php
                $image = get_field('img_icon_2');
                if ($image){ ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php }?>
            </div>
            <h3><?php the_field('icon_2'); ?></h3>
            <p><?php the_field('info_icon_2'); ?></p>
        </div>

        <div class="item">
            <div class="image_holder">
                <?php
                $image = get_field('img_icon_3');
                if ($image){ ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php }?>
            </div>
            <h3><?php the_field('icon_3'); ?></h3>
            <p><?php the_field('info_icon_3'); ?></p>
        </div>

        <div class="item">
            <div class="image_holder">
                <?php
                $image = get_field('img_icon_4');
                if ($image){ ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php }?>
            </div>
            <h3><?php the_field('icon_4'); ?></h3>
            <p><?php the_field('info_icon_4'); ?></p>
        </div>
    </section>

    <section class="about_posts" id="about_posts">
        <div class="wrapper">
            <h2 class="block_title font_nav"><?php the_field('title_about'); ?></h2>

            <div class="about_list">
                <div class="about_item">
                    <?php
                    $image = get_field('about_img_1');
                    if ($image){ ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php }?>
                    <div class="data_line">
                        <span class="about_img">
                            <?php
                            $image = get_field('finger_img');
                            if ($image){ ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php }?>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav"><?php the_field('about_info_1'); ?></h3>
                </div>

                <div class="about_item">
                    <?php
                    $image = get_field('about_img_2');
                    if ($image){ ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php }?>
                    <div class="data_line">
                        <span class="about_img">
                            <?php
                            $image = get_field('finger_img');
                            if ($image){ ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php }?>
                        </span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav"><?php the_field('about_info_2'); ?></h3>
                </div>

                <div class="about_item">
                    <?php
                    $image = get_field('about_img_3');
                    if ($image){ ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php }?>
                    <div class="data_line">
                        <span class="about_img">
                            <?php
                            $image = get_field('finger_img');
                            if ($image){ ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php }?>
                        </span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav"><?php the_field('about_info_3'); ?></h3>
                </div>

                <div class="about_item">
                    <?php
                    $image = get_field('about_img_4');
                    if ($image){ ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php }?>
                    <div class="data_line">
                        <span class="about_img">
                            <?php
                            $image = get_field('finger_img');
                            if ($image){ ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php }?>
                        </span>
                        <span class="line"></span>
                    </div>
                    <h3 class="about_data font_nav"><?php the_field('about_info_4'); ?></h3>
                </div>
            </div>

        </div>
    </section>

    <section class="services_list" id="services_list">
        <div class="wrapper">

            <h2 class="block_title font_nav"><?php the_field('serv_title'); ?></h2>
            <p class="sub_title font_nav"><?php the_field('serv_title_descr'); ?></p>

            <div class="product_list cf">

                <div class="product">
                    <div class="image_holder">
                        <?php
                        $image = get_field('service_img_1');
                        if ($image){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php }?>
                    </div>

                    <div class="data_holder">
                        <span class="catig"><?php the_field('service_catig_1'); ?></span>
                        <h3><?php the_field('service_title_1'); ?></h3>
                        <p><?php the_field('service_descr_1'); ?></p>
                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <?php
                        $image = get_field('service_img_2');
                        if ($image){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php }?>
                    </div>

                    <div class="data_holder">
                        <span class="catig"><?php the_field('service_catig_2'); ?></span>
                        <h3><?php the_field('service_title_2'); ?></h3>
                        <p><?php the_field('service_descr_2'); ?></p>
                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <?php
                        $image = get_field('service_img_3');
                        if ($image){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php }?>
                    </div>

                    <div class="data_holder">
                        <span class="catig"><?php the_field('service_catig_3'); ?></span>
                        <h3><?php the_field('service_title_3'); ?></h3>
                        <p><?php the_field('service_descr_3'); ?></p>

                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <?php
                        $image = get_field('service_img_4');
                        if ($image){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php }?>
                    </div>

                    <div class="data_holder">
                        <span class="catig"><?php the_field('service_catig_4'); ?></span>
                        <h3><?php the_field('service_title_4'); ?></h3>
                        <p><?php the_field('service_descr_4'); ?></p>
                    </div>
                </div>

                <div class="product">
                    <div class="image_holder">
                        <?php
                        $image = get_field('service_img_5');
                        if ($image){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php }?>
                    </div>

                    <div class="data_holder">
                        <span class="catig"><?php the_field('service_catig_5'); ?></span>
                        <h3><?php the_field('service_title_5'); ?></h3>
                        <p><?php the_field('service_descr_5'); ?></p>
                    </div>
                </div>
            </div>

            <div class="all_products">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font_nav">Все услуги</a>
            </div>
        </div>
    </section>

    <section class="box_subscribe" id="box_subscribe">
        <div class="wrapper">
            <div class="left_subscribe">
                <span class="category"><?php the_field('info_subscr'); ?></span>
                <h2 class="block_title font_nav"><?php the_field('title_subsc'); ?>r</h2>
                <p class="description"><?php the_field('descr_subscr'); ?></p>
                <form class="form_subscribe" action="" >
                    <input type="email" class="email" placeholder="<?php the_field('email_subscr'); ?>" name="message">
                    <span class="separator"></span>
                    <input type="submit" value="">
                </form>
            </div>

            <div class="right_subscribe">
                <figure>
                    <figcaption>
                        <?php
                        $image = get_field('image_subscr');
                        if ($image){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php }?>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="slider_info" id="slider_info">
        <div class="left_box">
            <?php
            $image = get_field('slider_img_1');
            if ($image){ ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php }?>
        </div>
        <div class="right_box">
            <div class="data_holder">
                <span class="category"><?php the_field('slider_info_1'); ?></span>
                <h3 class="font_nav"><?php the_field('slider_title_1'); ?></h3>
                <p class="description"><?php the_field('slider_descr_1'); ?></p>
            </div>
        </div>
        <div class="product_img">
            <?php
            $image = get_field('slider_img_all');
            if ($image){ ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php }?>
        </div>
    </section>

<?php
    endwhile;

get_footer();