<?php
/**
 * Template Name: Track Shipment
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="estimate-header" style="background-image: url(<?php the_field('background_image_tracking'); ?>)">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-5 col-lg-6">
                <div class="header-caption">
                    <h1><?php the_field('title_hero_tracking'); ?></h1>
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.offset-xl-1 col-xl-5 col-lg-6 -->
            <div class="col-xl-6 col-lg-6">
                <div class="estimate-form shipment-form">
                <?php the_field('form_code_track_shipment'); ?>
                </div>
                <!-- /.contact-form -->
            </div>
            <!-- /.col-xl-6 col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>