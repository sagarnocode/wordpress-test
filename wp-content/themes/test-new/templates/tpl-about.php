<?php
/**
 * Template Name: about page
 */
get_header();
?>
<section>

    <div class="banner">
        <?php 
        $bannerImage = get_field('banner_image');
        if( !empty( $bannerImage ) ): ?>
        <img src="<?php echo esc_url($bannerImage['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>
</section>

<div class="container">
    <p> this is the static text to test</p>
    <p> <?php the_field('test_home_page_pera'); ?></p>


</div>


<?php get_footer(); ?>