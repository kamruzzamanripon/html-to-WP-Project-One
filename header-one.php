<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dizital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-wrapper">

    <!-- Preloader -->
   <!-- <div class="preloader"></div>-->

    <!-- Main Header-->
    <header class="main-header">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
						<?php the_custom_logo(); ?>
                    </div>

                    <div class="nav-outer pull-right clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

	                        <div class="head-one">
		                        <?php
		                        wp_nav_menu(
			                        array(
				                        'theme_location' => 'menu-1',
				                        'container_class' =>'navbar-collapse collapse clearfix',
				                        'container_id'  =>  'navbarSupportedContent',
				                        'menu_class' => 'navigation clearfix',
			                        )
		                        );

		                        ?>
                            </div>

                        </nav>

                        <!-- Main Menu End-->

                        <!--Button Box-->
                        <div class="outer-box clearfix">
                            <!--Option Box-->
                            <div class="option-box">
                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><i class="fa fa-search"></i></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li class="panel-outer">
                                                <div class="form-container">
													<?php get_search_form(); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="shop-single.html" class="cart-btn dripicons-shopping-bag"><span class="total-number">2</span></a>
                            </div>

                            <div class="button-box">
                                <a href="#" class="theme-btn btn-style-one">Sign in</a>
                            </div>

                        </div>
                        <!--Button Box-->

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
					<?php the_custom_logo(); ?>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'menu-1',
			                    'container_class' =>'navbar-collapse collapse clearfix',
			                    'container_id'  =>  'navbarSupportedContent',
			                    'menu_class' => 'navigation clearfix',
		                    )
	                    );

	                    ?>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->

    <div id="content" class="site-content">