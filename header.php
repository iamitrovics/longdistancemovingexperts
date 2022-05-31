<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
	<?php if( get_field('head_code_snippet', 'options') ): ?>
		<?php the_field('head_code_snippet', 'options'); ?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php if( get_field('body_code_snippet', 'options') ): ?>
		<?php the_field('body_code_snippet', 'options'); ?>
	<?php endif; ?>

	<div class="menu-overlay"></div>
	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><img src="<?php bloginfo('template_directory'); ?>/img/ico/close-x.svg" alt=""></a>
		</header>
		<!-- // header  -->


		<nav id="sidebar-menu-wrapper">
			<img src="<?php the_field('website_logo_general', 'options'); ?>" alt="">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'mobile',
						'theme_location'    => 'mobile',
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
			<!-- // menu  -->

		</nav> 
		<!-- // sidebar menu wrapper  -->

	</div>
	<!-- // main menu sidebar  -->	

		<div id="menu_area" class="menu-area">
			<div id="top-license">
				<?php the_field('license_text_top', 'options'); ?>
            </div>
			<div id="menu-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div id="top-area">
								<div class="navbar-brand">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_general', 'options'); ?>" alt=""></a>
								</div>
								<!-- /.navbar-brand -->
								<div id="call-btn">
									<a href="tel:<?php the_field('main_phone_number_options', 'options') ?>"><span class="icon-phone-alt"></span><?php the_field('main_phone_number_options', 'options') ?></a>
								</div>
								<!-- /#call-btn -->

								<div id="mobile-menu--btn" class="d-lg-none">
									<a href="javascript:;">
										<span></span>
										<span></span>
										<span></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<!-- // mobile  -->	

							</div>
							<!-- /#top-area -->
							<nav class="mainmenu">
								<div class="collapse navbar-collapse">
									<ul class="navbar-nav">
									<?php if( have_rows('menu_items_header_main', 'options') ): ?>
										<?php while( have_rows('menu_items_header_main', 'options') ): the_row(); ?>

											<?php if (get_sub_field('link_type') == 'Single Item') { ?>
												<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a></li>
											<?php } elseif (get_sub_field('link_type') == 'Dropdown') { ?>

												<li class="dropdown">
													<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>" aria-expanded="false"><?php the_sub_field('item_label'); ?></a>
													<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
														<?php if( have_rows('dropdown_items') ): ?>
															<?php while( have_rows('dropdown_items') ): the_row(); ?>
																<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('label'); ?></a></li>
															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
												</li>													

											<?php } elseif (get_sub_field('link_type') == 'Dropdown Multilevel') { ?>

												<li class="dropdown">
													<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a>
													<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">

														<?php if( have_rows('multilevel_items') ): ?>
															<?php while( have_rows('multilevel_items') ): the_row(); ?>

																<?php if (get_sub_field('type_of_item') == 'Single Items') { ?>

																	<li><a href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label_sub'); ?></a></li>

																<?php } elseif (get_sub_field('type_of_item') == 'Dropdown Items') { ?>
																	<li class="dropdown">
																		<a class="dropdown-toggle" href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label_sub'); ?></a>
																		<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
																			<?php if( have_rows('dropdown_items_sub') ): ?>
																			<?php while( have_rows('dropdown_items_sub') ): the_row(); ?>

																				<li><a href="<?php the_sub_field('link_sub_sub'); ?>"><?php the_sub_field('label_sub_sub'); ?></a></li>

																			<?php endwhile; ?>
																			<?php endif; ?>
																		</ul>
																	</li>
																<?php } ?>   																

															<?php endwhile; ?>
														<?php endif; ?>

													</ul>
												</li>

											<?php } ?>   

											<?php endwhile; ?>
										<?php endif; ?>
									</ul>
									<!-- /.navbar-nav -->
								</div>
								<!-- /.navbar-collapse -->
							</nav>
							<!-- /.mainmenu -->
						</div>
						<!-- /.col-md-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.continer-fluid -->
			</div>
			<!-- /#menu-wrapper -->
		</div>
		<!-- // desktop menu  --> 		
