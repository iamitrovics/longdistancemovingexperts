<?php
/**
 * Template Name: Reviews
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="reviews-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="reviews">
                    <h1><?php the_title(); ?></h1>

                    <?php
                        $loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 150) ); ?>  
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="review-item">
                            <blockquote>
                                <?php the_field('review_text_reviews'); ?>
                                <span class="author">– <?php the_field('author_reviews'); ?></span>
                            </blockquote>
                            <div class="star-area">
                                <?php if (get_field('review_score') == '4') { ?>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star empty-star"></span>
                                <?php } elseif (get_field('review_score') == '5') { ?>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                <?php } ?> 
                            </div>
                            <!-- /.star-area -->
                        </div>
                        <!-- /.review-item -->

                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <!-- /.reviews -->
            </div>
            <!-- /.col-md-6 col-lg-6 col-xl-6 -->
            <div class="col-md-6 col-lg-6 col-xl-5">
                <div class="review-form">
                    <h2><?php the_field('form_title_reviews'); ?></h2>
                    <?php the_field('form_code_reviews'); ?>
                </div>
                <!-- /.review-form -->
            </div>
            <!-- /.col-md-6 col-lg-6 col-xl-5 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /#reviews -->

<?php get_footer(); ?>