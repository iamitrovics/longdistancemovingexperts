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

<section id="city-page">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-xl-1 col-xl-7 col-lg-8">
                <div class="about-content">
                    <?php if( have_rows('content_cities_single') ): ?>
                        <?php while( have_rows('content_cities_single') ): the_row(); ?>

                            <?php if( get_row_layout() == 'full_width_content' ): ?>

                                <div class="full-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>

                            <?php elseif( get_row_layout() == 'full_width_image_cities' ): ?>

                                <div class="featured-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    <div class="caption">
                                        <?php the_sub_field('image_caption'); ?>
                                    </div>
                                </div>

                            <?php elseif( get_row_layout() == 'video' ): ?>

                                <div class="video-holder">
                                    <?php the_sub_field('embedded_code'); ?>
                                </div>

                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- /.about-content -->
            </div>
            <!-- /.offset-xl-1 col-xl-7 col-lg-8 -->
            <div class="col-xl-3 col-lg-4">
                <div class="city-aside">
                    <div class="city-aside-box">
                        <h2>Contact Us</h2>
                        <?php get_template_part('quote-form-part'); ?>
                    </div>
                    <!-- /.city-aside-box -->
                    <div class="city-aside-call">
                        <p>Or call us:</p>
                        <p><a href="tel:<?php the_field('phone_number_cities_single'); ?>"><?php the_field('phone_number_cities_single'); ?></a></p>
                    </div>
                    <!-- /.city-aside-call -->
                    <div class="city-aside-box">
                        <div class="aside-socials">
                            <ul>
                                <li><a href="https://www.facebook.com/LongDistanceMovingExperts/" target="_blank"><span class="icon-facebook-f"></span>Facebook</a></li>
                                <li><a href="https://twitter.com/LDMExperts" target="_blank"><span class="icon-twitter"></span>Twitter</a></li>
                                <li><a href="<?php the_field('yelp_link_cities_single'); ?>" target="_blank"><span class="icon-yelp"></span>Yelp</a></li>
                            </ul>
                        </div>
                        <!-- /.aside-socials -->
                    </div>
                    <!-- /.city-aside-box -->
                    <div class="city-aside-related">
                        <?php
                            $post_objects = get_field('related_post_cities');

                            if( $post_objects ): ?>
                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                    <?php setup_postdata($post); ?>
                    
                                    <div class="related-single">
                                        <div class="image-holder-related">
                                        <a href="<?php echo get_permalink(); ?>"><img src="<?php the_field('featured_image_cities'); ?>" alt="featured-image"></a>
                                        </div> <!-- image-holder-related -->
                                        <div class="title-holder-related">
                                            <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                        </div> <!-- title-holder-related -->
                                    </div> <!-- related-single -->
                                    
                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div> <!-- city-aside-related --> 
                </div>
                <!-- /.city-aside -->
            </div>
            <!-- /.col-xl-3 col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /#city-page-->

<?php
get_footer(); ?>
