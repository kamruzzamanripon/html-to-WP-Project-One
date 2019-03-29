<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dizital
 */

get_header();

$dizital_sidebar_position = get_theme_mod( 'sidebar_blog_settings', 'no' );
$dizital_container_class  = 'no' == $dizital_sidebar_position ? 'masonry-items' : '';
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
                    <div class="<?php echo esc_attr( $dizital_container_class ); ?> row clearfix">

						<?php
						if ( 'left' == $dizital_sidebar_position ) {
							get_sidebar();
						}
						?>

                        <div class="content-side <?php if('no' != $dizital_sidebar_position){echo 'col-lg-8 col-md-12 col-sm-12';} ?>">
                            <div class="blog-classic">

								<?php
								if ( have_posts() ) :


									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', get_post_type() );

									endwhile;
									?>

                                    <?php
                                        if('no' != $dizital_sidebar_position):
                                    ?>
                                    <!--custom pagination-->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="custom-pagination">
                                                <!--next post paginaton-->
												<?php
												$dizital_ppl = get_previous_posts_link();
												if ( ! $dizital_ppl ):
													?>
                                                    <div class="older full">
														<?php next_posts_link( __( 'older post >', 'dizital' ) ); ?>
                                                    </div>
												<?php
												else:;
													?>
                                                    <div class="older">
														<?php next_posts_link( __( 'older post >', 'dizital' ) ); ?>
                                                    </div>
												<?php
												endif;
												?>

                                                <!--Previous post pagination-->
												<?php
												$dizital_npl = get_next_posts_link();
												if ( ! $dizital_npl ):
													?>
                                                    <div class="older full">
														<?php previous_posts_link( __( '< Newer Post', 'dizital' ) ); ?>
                                                    </div>
												<?php
												else:;
													?>
                                                    <div class="newer">
														<?php previous_posts_link( __( '< Newer Post', 'dizital' ) ); ?>
                                                    </div>
												<?php
												endif;
												?>

                                            </div>
                                        </div>
                                    </div>
                                    <!--custom pagination-->
                                <?php endif; ?>



								<?php
								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>
                            </div>
                        </div>

						<?php
						if ( 'right' == $dizital_sidebar_position ) {
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
