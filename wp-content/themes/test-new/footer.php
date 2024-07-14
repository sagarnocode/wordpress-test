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


    <?php if (has_nav_menu('footer')): ?>
    <nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
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
    <?php endif; ?>
    <div class="site-info">
        <div class="site-name">
            <?php if (has_custom_logo()): ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php else: ?>
            <?php if (get_bloginfo('name') && get_theme_mod('display_title_and_tagline', true)): ?>
            <?php if (is_front_page() && !is_paged()): ?>
            <?php bloginfo('name'); ?>
            <?php else: ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
        </div><!-- .site-name -->

        <?php
        if (function_exists('the_privacy_policy_link')) {
            the_privacy_policy_link('<div class="privacy-policy">', '</div>');
        }
        ?>

        <div class="powered-by">
            <?php
            printf(
                /* translators: %s: WordPress. */
                esc_html__('Proudly powered by %s.', 'twentytwentyone'),
                '<a href="' . esc_url(__('https://wordpress.org/', 'twentytwentyone')) . '">WordPress</a>'
            );
            ?>
        </div><!-- .powered-by -->

    </div><!-- .site-info -->
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
<script src="<?php echo $_asset_path ?>/assets/js/custom.js"></script>

</script>
</body>

</html>