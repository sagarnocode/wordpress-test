<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'main-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';


?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <?php get_template_part( 'template-parts/header/site-branding' ); ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <?php get_template_part( 'template-parts/header/site-nav' ); ?>
                </ul>
            </div>

        </div>
    </nav>
</header><!-- #masthead -->