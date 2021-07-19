<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<header id="about-header" style="background-image: url(<?php the_field('background_image_hero_regular'); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('title_hero_regular'); ?></h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
<!-- /#about-header -->
<section id="regular-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about-content">
                    <?php the_field('regular_content_page'); ?>
                </div>
                <!-- /.about-content -->
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
get_footer(); ?>
