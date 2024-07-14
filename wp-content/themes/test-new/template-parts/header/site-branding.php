<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info = get_bloginfo('name');
$description = get_bloginfo('description', 'display');
$show_title = (true === get_theme_mod('display_title_and_tagline', true));
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>
<!-- <?php if (has_custom_logo() && $show_title): ?> -->
<!-- <div class="site-logo">

    <img src="<?php echo $_asset_path ?>/assets/images/haptiq-logo-black (1).svg" />
</div> -->
<!-- <?php endif; ?> -->

<div class="site-branding">


    <div class="site-logo"><img src="<?php echo $_asset_path ?>/assets/images/couplet-logo-yellow.svg" /></div>


    <?php if ($blog_info): ?>
    <?php if (is_front_page() && !is_paged()): ?>
    <h1 class="<?php echo esc_attr($header_class); ?>"><?php echo esc_html($blog_info); ?></h1>
    <?php elseif (is_front_page() && !is_home()): ?>
    <h1 class="<?php echo esc_attr($header_class); ?>"><a
            href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></h1>
    <?php else: ?>
    <p class="<?php echo esc_attr($header_class); ?>"><a
            href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($blog_info); ?></a></p>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($description && true === get_theme_mod('display_title_and_tagline', true)): ?>
    <p class="site-description">
        <?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
    </p>
    <?php endif; ?>
</div><!-- .site-branding -->