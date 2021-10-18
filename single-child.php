<?php
/*
 * Template Name: Parent Child Template
 * Template Post Type: post
 */
  
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="blog-header-single">
    <div class="blog-cover-img">
        <?php 
            $values = get_field( 'featured_image_blog' );
            if ( $values ) { ?>

                <?php
                $imageID = get_field('featured_image_blog');
                $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                ?> 

                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

            <?php 
            } else { ?>
                
        <?php } ?>
    </div> <!-- blog-cover-img -->
    <div class="title-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div> <!-- title-container -->
</header>

<?php if( have_rows('list_of_posts_parent') ): ?>
<div id="post-nav">
    <div class="container">
        <div class="post-wrapper">                           
            <div id="nav-slider">
                
                    <?php while( have_rows('list_of_posts_parent') ): the_row(); ?>

                        <div class="item">
                            <div class="nav-col">
                                <a href="<?php the_sub_field('link_to_post'); ?>">
                                    <div class="icon">
                                        <img src="<?php the_sub_field('icon'); ?>" alt="">
                                    </div>
                                    <span><?php the_sub_field('label'); ?></span>
                                </a>
                            </div>
                            <!-- // col  -->
                        </div>

                    <?php endwhile; ?>
                
            </div>
            <!-- // nav  -->
        </div>
        <!-- // wrapper  -->
    </div>
</div>
<!-- // post nav  -->
<?php endif; ?>

<div id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-body">
                    <div class="blog-content">
                        <?php if( have_rows('content_layout_blog') ): ?>
                            <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                <?php if( get_row_layout() == 'intro_text' ): ?>

                                    <div class="intro-text">
                                        <?php the_sub_field('intro_content'); ?>
                                    </div>

                                <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                    <div class="full-content">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>

                                <?php elseif( get_row_layout() == 'full_width_image' ): ?>

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

                                <?php elseif( get_row_layout() == 'half_width_image' ): ?>

                                    <div class="half-width-image">

                                        <div class="featured-photo half-content">
                                            <?php
                                            $imageID = get_sub_field('featured_image_1_half');
                                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption">
                                                <?php the_sub_field('image_caption'); ?>
                                            </div>
                                        </div>

                                        <div class="featured-photo half-content">
                                            <?php
                                            $imageID = get_sub_field('featured_image_2_half');
                                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption">
                                                <?php the_sub_field('image_caption'); ?>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.half-width-image -->

                                <?php elseif( get_row_layout() == 'quote' ): ?>

                                    <div class="quote-holder">
                                        <?php the_sub_field('quotation_content'); ?>
                                        <small><?php the_sub_field('source'); ?></small>
                                    </div>

                                <?php elseif( get_row_layout() == 'video' ): ?>

                                    <div class="video-holder">
                                        <?php the_sub_field('embedded_code'); ?>
                                    </div>

                                <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                    <div class="quote-cta--single">
                                        <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                        <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                    </div>
                                    <!-- // single  -->                                                 

                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- /.blog-content -->
                </div>
                <!-- /.blog-body -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#blog-page -->

    <div id="bottom-form">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                <?php get_template_part('quote-form-part'); ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(function($) {
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $('#post-nav a').each(function() {
        if (this.href === path) {
        $(this).addClass('active');
        }
        });
        });
    </script>    

<?php
get_footer();
