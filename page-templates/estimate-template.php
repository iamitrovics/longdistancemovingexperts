<?php
/**
 * Template Name: Free Estimate
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="estimate-header" style="background-image: url(<?php the_field('background_image_hero_estimate'); ?>)">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-xl-5 col-lg-6">
                <div class="header-caption">
                    <h1><?php the_field('title_hero_estimate'); ?></h1>
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.offset-xl-1 col-xl-5 col-lg-6 -->
            <div class="col-xl-6 col-lg-6">
                <div class="estimate-form">
                    <div class="estimate-form-heading">
                        <span class="form-title"><?php the_field('form_title_estimate'); ?></span>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#e1"><span class="icon-house-user"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#e2"><span class="icon-video"></span></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                    </div>
                    <!-- /.estimate-form-heading -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="e1">
                            <?php the_field('form_code_home_visit'); ?>
                        </div>
                        <!-- /#e1 -->
                        <div class="tab-pane" id="e2">
                            <?php the_field('form_code_video_call'); ?>
                        </div>
                        <!-- /#e2 -->
                    </div>
                </div>
                <!-- /.contact-form -->
            </div>
            <!-- /.col-xl-6 col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<div id="estimate-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="estimate-item">
                    <img src="<?php the_field('box_image_estimate_1'); ?>" alt="">
                    <?php the_field('box_content_estimate_1'); ?>
                </div>
                <!-- /.estimate-item -->
            </div>
            <!-- /.col-md-6 -->  
            <div class="col-md-6">
                <div class="estimate-item">
                    <img src="<?php the_field('box_image_estimate_2'); ?>" alt="">
                    <?php the_field('box_content_estimate_2'); ?>
                </div>
                <!-- /.estimate-item -->
            </div>
            <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#estimate-page -->

<?php get_footer(); ?>