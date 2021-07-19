<?php
/**
 * Template Name: Gallery
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

    <div id="gallery-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php the_field('title_paragraph_portfolio'); ?></p>
                    <div class="gallery-items">
                        <div class="row">
                            <?php 
                                $images = get_field('gallery');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="gallery-item">
                                                <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                                                    <img src="<?php echo $image['url']; ?>" />
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 col-md-6 -->
                                    <?php endforeach; ?>
                                    
                            <?php endif; ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.gallery-items -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#gallery-page -->

<?php get_footer(); ?>