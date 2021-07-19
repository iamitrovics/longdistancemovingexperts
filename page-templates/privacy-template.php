<?php
/**
 * Template Name: Privacy Policy
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<section id="regular-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_field('content_privacy_policy'); ?>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#about-area -->

<?php get_footer(); ?>