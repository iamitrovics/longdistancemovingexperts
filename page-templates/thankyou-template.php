<?php
/**
 * Template Name: Thank You
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="thankyou-header" style="background-image: url(<?php the_field('background_image_hero_thank_you'); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('title_hero_thank_you'); ?></h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<div id="thankyou-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="thankyou-body">
                    <?php the_field('thank_you_text'); ?>
                    <div class="yelp-logo">
                        <a class="#" href="<?php the_field('yelp_logo_link_thank_you'); ?>" target="_blank"><img src="<?php the_field('yelp_logo_image_thank_you'); ?>" alt="" width="300" height="225"></a>
                    </div>
                    <!-- /.yelp-logo -->
                </div>
                <!-- /.thankyou-body -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#thankyou-page -->

<?php get_footer(); ?>