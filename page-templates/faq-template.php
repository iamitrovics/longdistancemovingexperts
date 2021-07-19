<?php
/**
 * Template Name: FAQ
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="faq-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('title_header_faq'); ?></h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row" id="faq-content">
            <div class="offset-xl-1 col-xl-7 col-lg-8 col-md-8">
                <div id="faq-body">
                    <h2><?php the_field('answers_title_faq'); ?></h2>

                    <?php

                        // check if the repeater field has rows of data
                        if(have_rows('answers_repeater_faq')):$counter = 1;

                            // loop through the rows of data
                            while(have_rows('answers_repeater_faq')) : the_row();

                                $ques = get_sub_field('question_repaeter_faq');
                                $answ = get_sub_field('answer_repeater_faq');

                                ?>  

                                <div class="faq-item" id="q<?php echo $counter;?>">
                                    <h3><?php echo $ques; ?></h3>
                                    <p><?php echo $answ; ?></p>
                                </div>
                                <!-- /.faq-item -->

                            <?php $counter++; endwhile;

                        else :
                            echo 'No data';
                        endif;
                    ?>

                </div>
                <!-- /#faq-body -->
            </div>
            <!-- /.col-md-9 -->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div id="faq-questions">
                    <h2>Questions</h2>
                    <ul>

                    <?php

                        // check if the repeater field has rows of data
                        if(have_rows('answers_repeater_faq')):$counter2 = 1;

                            // loop through the rows of data
                            while(have_rows('answers_repeater_faq')) : the_row();

                                $ques = get_sub_field('question_repaeter_faq');
                                $answ = get_sub_field('answer_repeater_faq');

                                ?>  

                                <li><a href="#q<?php echo $counter2;?>"><?php echo $ques; ?></a></li>

                            <?php $counter2++; endwhile;

                        else :
                            echo 'No data';
                        endif;
                    ?>

                    </ul>
                </div>
                <!-- /#faq-questions -->
            </div>
            <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#faq-page -->

<?php get_footer(); ?>