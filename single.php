<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dizital
 */

get_header();

$dizital_sidebar_position = get_theme_mod('sidebar_display_settings', 'no');
$dizital_container_class = 'no' == $dizital_sidebar_position ? 'col-lg-12' : 'col-lg-8';
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="breadcrumb-section">
                <div class="auto-container">
					<?php
                        if ( function_exists( 'bcn_display' ) ) {
                            bcn_display();
                        }
					?>
                </div>
            </section>

            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">
	                    <?php
                            if('left' == $dizital_sidebar_position){
                                get_sidebar();
                            }
	                    ?>

                        <div class="content-side <?php echo esc_attr($dizital_container_class); ?> col-md-12 col-sm-12">
							<?php
							while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );
							?>
                            <div class="comments-area">
                                <div class="group-title">
                                    <h2><?php echo __('Reviews', 'dizital');?></h2>
                                </div>
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								endwhile; // End of the loop.
								?>
                            </div>
                        </div>

                        <?php
                            if('right' == $dizital_sidebar_position){
	                            get_sidebar();
                            }
                        ?>



                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
