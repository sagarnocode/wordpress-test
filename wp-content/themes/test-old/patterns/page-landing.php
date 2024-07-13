<?php
/**
 * Title: Landing home
 * Slug: twentytwentyfour/page-landing
 * Categories: twentytwentyfour_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
?>


<div class="bgBannerText h-100">
    <h1 class="largeTitle">
        <?php the_field('test'); ?>
        one more </h1>



</div>

<div class="banner">
    <?php $bannerImage = get_field('banner_image'); ?>
    <img src="<?php echo $bannerImage['url']; ?>" alt="<?php echo $bannerImage['alt']; ?>" />
</div>
<div>
    <p>
        <?php the_field('detail_text'); ?>
    </p>
</div>