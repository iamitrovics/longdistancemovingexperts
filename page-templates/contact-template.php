<?php
/**
 * Template Name: Contact Us
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="contact-page" style="background-image: url(<?php the_field('background_image_contact'); ?>)">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-xl-1 col-xl-5 col-lg-6">
                <div class="header-caption">
                    <h1><?php the_field('title_contact'); ?></h1>
                    <p>call us:</p>
                    <a href="tel:<?php the_field('cta_contact'); ?>" class="call-btn"> <span class="icon-phone-alt-o"></span> <?php the_field('cta_contact'); ?></a>
                    <?php the_field('content_contact'); ?>
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.offset-xl-1 col-xl-5 col-lg-6 -->
            <div class="col-xl-5 col-lg-6">
                <div class="contact-form">
                    <span class="form-title"><?php the_field('form_title_contact_us'); ?></span>
                    <?php the_field('form_code_contact_us'); ?>
                </div>
                <!-- /.contact-form -->
            </div>
            <!-- /.col-xl-5 col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php get_footer(); ?>