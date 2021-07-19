<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

	<footer id="page-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-sitemap">
                    <ul>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'footer-links',
                                'theme_location'    => 'footer-links',
                                'depth'             => 2,
                                'container'         => false,
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => false,
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'items_wrap' => '%3$s',
                                'walker'            => new wp_bootstrap_navwalkermobile())
                            );
                        ?>
                    </ul>
                </div>
                <!-- /,footer-sitemap -->
                <div class="footer-socials">
                    <ul>
                        <li><a href="https://www.facebook.com/LongDistanceMovingExperts/" target="_blank"><span class="icon-facebook-f"></span></a></li>
                        <li><a href="https://twitter.com/LDMExperts" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li><a href="https://www.yelp.com/biz/long-distance-moving-experts-brooklyn?osq=long+distance+moving+experts" target="_blank"><span class="icon-yelp"></span></a></li>
                    </ul>
                </div>
                <div class="footer-sitemap">
                    <ul>
                        <li><a href="<?php the_field('privacy_link_footer', 'options'); ?>"><?php the_field('privacy_label_footer', 'options'); ?></a></li>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
                <div id="footer-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_general', 'options'); ?>" alt=""></a>
                </div>
                <!-- /#footer-logo -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <small>Long Distance Moving Experts <?php echo(date('Y'));?> (C) All Rights Reserved</small>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.copyright -->
</footer>
<!-- /#page-footer -->
<div id="cookie-notice">
    <div id="cookie-notice-in">
        <div class="notice-text">
            <?php the_field('notice_text_cookies', 'options') ?>
        </div>
        <!-- /.notice-text -->
        <div class="notice-btns">
            <a href="#" id="accept-cookie"><?php the_field('button_1_label_cookies', 'options'); ?></a>
            <a href="<?php the_field('button_link_cooke_2', 'options'); ?>"><?php the_field('button_2_label_cooki', 'options'); ?></a>
        </div>
        <!-- /.notice-btns -->
        <a href="javascript:void(0);" id="close-notice"></a>
    </div>
    <!-- /#cookie-notice-in -->
</div>
<!-- /#cookie-notice -->

<div class="modal-overlay disclaimer-modal" data-my-element="tooltip-modal">
    <div class="modal" data-my-element="tooltip-modal">
        <a class="close-modal">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/close.svg" alt="">
        </a>
        <!-- close modal -->
        <div class="disclaimer-modal-wrap">
            <p>By listing or updating my cellular phone information, I authorize Long Distance Moving Experts to call or send SMS text messages using an automatic telephone dialing system or prerecorded message to my cell phone number to provide account information and services related to my long distance move. Additionally, I authorize Long Distance Moving Experts to follow up in order to assist me with payment reminders and provide me with opportunities to provide feedback regarding customer service. If I do not want to receive calls or SMS text messages, I can unsubscribe by sending an email to info@longdistancemovingexperts.com with the subject line “STOP Transaction Calls” or by calling a customer service representative at (310) 819-1671. Receipt of cellular phone calls and text messages may be subject to service provider charges.</p>
        </div>
        <!-- /.disclaimer-modal-wrap -->
    </div>
    <!-- modal -->
</div>
<!-- overlay -->

</body>
</html>

