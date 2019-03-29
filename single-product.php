<?php

get_header();

?>
        <?php
            while (have_posts()):
                the_post();

                $dizital_product_id = get_the_ID();
                $dizital_product = wc_get_product($dizital_product_id);
                $currency = get_woocommerce_currency_symbol();

	            $product_picture = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'large');

        ?>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php echo $product_picture[0]; ?>)">
        <div class="auto-container">
            <h1><?php echo the_title(); ?></h1>
            <div class="text"><?php echo esc_html($dizital_product->get_short_description());?></div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Shop Single Section-->
    <section class="shop-single-section sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="shop-single">
                            <div class="inner-box">
                                <div class="image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="lower-content">
                                    <div class="text">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="lower-box">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="post-meta-option">
                                                    <div class="author">
                                                        <div class="author-image"><img src="images/resource/author-2.jpg" alt="" /></div>
	                                                    <?php echo __( 'by', 'dizital' ); ?> <?php echo get_the_author(); ?>
                                                    </div>
                                                    <ul class="post-meta">
	                                                    <?php

	                                                    $dizital_tag = get_the_terms( $post->ID, 'product_cat' );


	                                                    if ( $dizital_tag ):
		                                                    foreach ( $dizital_tag as $dizital_tag_item ):
			                                                    printf( '<li><a href="%s">%s</a></li>', get_category_link( $dizital_tag_item ), $dizital_tag_item->name );
		                                                    endforeach;
	                                                    endif;
	                                                    ?>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pull-right">
	                                            <?php echo do_shortcode("[social_share_button]"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--Popular Category-->
                        <div class="popular-category">
                            <h2>Popular Categories</h2>
                            <div class="row clearfix">

                                <?php

                                $arg= array(
	                                'taxonomy' => 'product_cat',
                                );
                                    $product_cats = get_categories($arg);
                                  foreach ($product_cats as $product_cat):
	                                  $product_cat_id = esc_attr( $product_cat->term_id );

	                                  $thumbnail_id = get_woocommerce_term_meta($product_cat_id, 'thumbnail_id', true);
	                                  $image = wp_get_attachment_url( $thumbnail_id );
	                                  $link = esc_url(get_term_link($product_cat));
	                                  //var_dump($link);
	                                  ?>
                                <!--Category Block-->
                                <div class="category-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($product_cat->name); ?>" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="content">
                                                        <h3><a href="<?php echo $link; ?>"><?php echo esc_html($product_cat->name); ?></a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <?php
                                    endforeach;
                                  ?>
                            </div>

                        </div>

                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title">
                                <h2><?php echo __('Reviews', 'dizital');?></h2>
                            </div>
	                        <?php
	                        // If comments are open or we have at least one comment, load up the comment template.
	                        if ( comments_open() || get_comments_number() ) :
		                        comments_template();
	                        endif;
	                        ?>
                        </div>
                    </div>
                </div>
                <?php
                     endwhile; // End of the loop.
                     wp_reset_query();
                ?>

                <!--Sidebar Column-->
                <?php
                    get_sidebar('shop');
                ?>

            </div>
        </div>
    </section>
    <!--End Shop Single Section-->






<?php
get_footer();
