<?php 
/**
 * Template Name: Homepage
**/
get_header(); ?>

<header id="masheader"  style="background-image: url(<?php the_field('header_bg_homepage'); ?>)">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 offset-xl-7 col-xl-4">
                <?php get_template_part('quote-form-part'); ?>
            </div>
            <!-- /.offset-lg-6 col-lg-6 offset-xl-7 col-xl-4 -->
        </div>
        <!-- /.row -->
        <div class="row trust-icons">
            <div class="offset-md-2 col-md-4 offset-lg-4 col-lg-4">
                <div class="trust-item">
                    <img src="<?php the_field('review_icons_homepage_1'); ?>" alt="">
                </div>
                <!-- /.trust-item -->
            </div>
            <!-- /.offset-md-2 col-md-4 offset-lg-4 col-lg-4 -->
            <div class="col-md-4 col-lg-4">
                <div class="trust-item">
                    <img src="<?php the_field('review_icons_homepage_2'); ?>" alt="">
                </div>
                <!-- /.trust-item -->
            </div>
            <!-- /.col-md-4 col-lg-4 -->
        </div>
        <!-- /.row trust-icons -->
    </div>
    <!-- /.container-fluid -->
</header>

<section id="about-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-intro">
                    <?php the_field('intro_text_intro_section_homepage'); ?>
                </div>
                <!-- /.about-intro -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

        <?php

            // check if the repeater field has rows of data
            if(have_rows('about_boxes_repeater_homepage')):

                // loop through the rows of data
                while(have_rows('about_boxes_repeater_homepage')) : the_row();

                    $icon = get_sub_field('icon_intro_section_homepage');
                    $title = get_sub_field('title_intro_section_homepage');
                    $desc  = get_sub_field('description_intro_section_homepage');

                    ?>  

                    <div class="col-md-3">
                        <div class="about-item">
                            <img src="<?php echo $icon; ?>" alt="">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $desc; ?></p>
                        </div>
                        <!-- /.about-item -->
                    </div>
                    <!-- /.col-md-3 -->

                <?php endwhile;

            else :
                echo 'No data';
            endif;
            ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#about-area -->


<div id="services-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-intro">
                        <?php the_field('intro_text_services_homepage'); ?>
                    </div>
                    <!-- /.services-intro -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    <?php

        // check if the repeater field has rows of data
        if(have_rows('services_repeater_homepage')):

            // loop through the rows of data
            while(have_rows('services_repeater_homepage')) : the_row();

                $image = get_sub_field('bg_image_services_homepage');
                $title = get_sub_field('title_services_homepage');
                $desc  = get_sub_field('description_services_homepage');
                $cta   = get_sub_field('button_link_services_homepage');

                ?>  

                <section class="service-item" style="background-image: url(<?php echo $image; ?>)">
                    
                    <div class="container">
                        <div class="row si-wrap">
                            <div class="col-md-6">
                                <div class="service-item-in">
                                    <h3><?php echo $title; ?></h3>
                                    <p><?php echo $desc; ?></p>
                                    <a href="<?php echo $cta; ?>" class="more-btn">Learn More</a>
                                </div>
                                <!-- /.service-item-in -->
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /.service-item -->

            <?php endwhile;

        else :
            echo 'No data';
        endif;
    ?>

</div>
<!-- /#services-area -->

<div id="cities-area" style="background-image: url(<?php the_field('background_image_areas_homepage'); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('title_areas_homepage'); ?></h2>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="mobile-bg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg/mobilem.jpg" alt=""></div>
    <!-- /.mobile-bg -->
</div>
<!-- /#cities-area -->

<?php get_footer(); ?>
