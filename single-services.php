<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="about-header" style="background-image: url(<?php the_field('background_image_hero_services'); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('title_hero_services'); ?></h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
<!-- /#about-header -->
<section id="about-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    <?php the_field('service_content_services'); ?>
                </div>
                <!-- /.about-content -->
                <h2 class="services-title"><?php the_field('services_list_title_services'); ?></h2>
                <div class="row" id="services-div">
                <?php
                    $post_objects = get_field('services_list_single_services');

                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
            
                                <div class="col-md-6">
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
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <?php get_template_part('quote-form-part'); ?>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.about-page-->
   
<?php
get_footer();?>
