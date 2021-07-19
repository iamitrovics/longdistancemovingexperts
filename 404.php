<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="nf-header" style="background-image: url(<?php the_field('background_image_404', 'options'); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('title_404', 'options'); ?></h1>
                <a href="<?php the_field('cta_link_404', 'options'); ?>" class="quote-btn"><?php the_field('cta_404', 'options'); ?></a>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<div id="services-div">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('title_services_404', 'options'); ?></h2>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row sd-row">

        <?php
            $post_objects = get_field('services_listing_404', 'options');

            if( $post_objects ): ?>
                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
    
                    <div class="col-lg-3 col-md-6">
                        <div class="service-div-item">
                            <img src="<?php the_field('featured_image_services_listing'); ?>" alt="">
                            <div class="sdi-content">
                                <h3><?php the_field('title_services_listing'); ?></h3>
                                <?php the_field('description_services_listing'); ?>
                                <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                            </div>
                            <!-- /.sdi-content -->
                        </div>
                        <!-- /.service-div-item -->
                    </div>
                    <!-- /..col-lg-3 col-md-6 -->

                    <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>
            
        </div>
        <!-- /.row sd-row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#services-div -->

<div id="choosing-div">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('title_section_certificates', 'options'); ?></h2>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">

        <?php

            // check if the repeater field has rows of data
            if(have_rows('certificate_repeater_404', 'options')):

                // loop through the rows of data
                while(have_rows('certificate_repeater_404', 'options')) : the_row();

                    $icon = get_sub_field('certificate_icon_404', 'options');
                    $title = get_sub_field('certificate_title_404', 'options');

                    ?>  

                    <div class="col-md-3">
                        <div class="cd-item">
                            <img src="<?php echo $icon; ?>" alt="">
                            <h3><?php echo $title; ?></h3>
                        </div>
                        <!-- /.cd-item -->
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
</div>
<!-- /#choosing-div -->

<?php
get_footer(); ?>
