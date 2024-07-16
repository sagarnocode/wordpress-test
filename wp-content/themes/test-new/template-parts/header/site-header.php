<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes = 'main-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';


?>

<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?>">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <?php get_template_part('template-parts/header/site-branding'); ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <svg class="svg-icon" width="24" height="24" aria-hidden="true" role="img" focusable="false"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.5 6H19.5V7.5H4.5V6ZM4.5 12H19.5V13.5H4.5V12ZM19.5 18H4.5V19.5H19.5V18Z"
                        fill="currentColor"></path>
                </svg>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <?php get_template_part('template-parts/header/site-nav'); ?>
                </ul>
            </div>

        </div>
    </nav>
</header><!-- #masthead -->