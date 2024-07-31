<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<footer id="colophon" class="site-footer">
    <div class="container-fluid fdv">

        <div class="row">
            <div class="col-12 col-md-8">
                <?php if (has_nav_menu('footer')): ?>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>"
                                class="footer-navigation">
                                <ul class="footer-navigation-wrapper">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'footer',
                                            'items_wrap' => '%3$s',
                                            'container' => false,
                                            'depth' => 1,
                                            'link_before' => '<span>',
                                            'link_after' => '</span>',
                                            'fallback_cb' => false,
                                        )
                                    );
                                    ?>
                                </ul><!-- .footer-navigation-wrapper -->
                            </nav><!-- .footer-navigation -->
                        </div>
                    </div>

                <?php endif; ?>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-logo"><img src="/wp-content/uploads/2024/07/couplet-logo-red.png" style="max-width: 212px" />
                </div>
            </div>
        </div>


        <!-- .site-info -->
    </div>
    <div class="footerBottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="bottomText">
                                Meet someone who rhymes with you and write a beautiful couplet.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="copyrights">
                        <p>© Couplet 2023, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js">

</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>

<script src="<?php echo $_asset_path ?>/assets/js/custom.js"></script>

</script>
</body>

</html>