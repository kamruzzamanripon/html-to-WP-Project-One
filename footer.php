<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dizital
 */

?>

</div>
<!--end div content-->

<!--Main Footer-->
<footer class="main-footer alternate">

    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-lg-5 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column / Logo Widget-->
                        <div class="footer-column col-lg-7 col-md-7 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
	                                <?php the_custom_logo(); ?>
                                </div>

                                <?php
                                    if(is_active_sidebar('footer')) {
                                        dynamic_sidebar('footer');
                                    }
                                ?>

                            </div>
                        </div>

                        <!--Footer Column / Links Widget-->
                        <div class="footer-column col-lg-5 col-md-5 col-sm-12">
                            <div class="footer-widget links-widget">
                                <?php
                                    if(is_active_sidebar('footer-2')){
                                        dynamic_sidebar('footer-2');
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

                <!--big column-->
                <div class="big-column col-lg-7 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column / Links Widget-->

                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <?php
                                    if(is_active_sidebar('footer-3')){
                                        dynamic_sidebar('footer-3');
                                    }
                                ?>
                            </div>
                        </div>

                        <!--Footer Column / Links Widget-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <?php
                                    if(is_active_sidebar('footer-4')){
                                        dynamic_sidebar('footer-4');
                                    }
                                ?>
                            </div>
                        </div>

                        <!--Footer Column / Map Widget-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget map-widget">

                                <div class="image">
                                    <?php
                                        if(is_active_sidebar('footer-5')){
                                            dynamic_sidebar('footer-5');
                                        }
                                    ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyright">
            <?php
             if(is_active_sidebar('footer-6')){
                 dynamic_sidebar('footer-6');
             }
            ?>
        </div>

    </div>
</footer>


</div>

<?php wp_footer(); ?>

</body>
</html>
