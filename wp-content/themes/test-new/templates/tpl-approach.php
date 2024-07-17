<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: The Couplet Approach
 */
get_header();
?>
<?php if (have_rows('approach_banner')): ?>
    <?php while (have_rows('approach_banner')):
        the_row(); ?>
        <section class="approachBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="approachDetail">
                            <div class="approachIcon">
                                <?php $banner_icon = get_sub_field('banner_icon'); ?>
                                <?php if ($banner_icon) { ?>
                                    <img src="<?php echo $banner_icon['url']; ?>" alt="<?php echo $banner_icon['alt']; ?>" />
                                <?php } ?>
                            </div>
                            <h1>
                                <?php the_sub_field('banner_title'); ?>
                            </h1>
                            <p><?php the_sub_field('banner_details'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="approachSlider">
                            <?php if (have_rows('approach_slider')): ?>
                                <?php while (have_rows('approach_slider')):
                                    the_row(); ?>
                                    <div class="sliderBox">
                                        <div class="boxTitle">
                                            <span class="counter"><?php the_sub_field('slider_number'); ?></span>
                                            <h3><?php the_sub_field('slider_title'); ?></h3>
                                        </div>
                                        <div class="boxDetails">
                                            <p><?php the_sub_field('slider_details'); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <?php // no rows found ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('freedom_section')): ?>
    <?php while (have_rows('freedom_section')):
        the_row(); ?>
        <section class="freedomeWrap">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="freedomeDetails">
                            <h2><?php the_sub_field('main_title'); ?></h2>
                            <h3><?php the_sub_field('sub_title_one'); ?></h3>
                            <h3><?php the_sub_field('sub_title_two'); ?></h3>
                            <h3><?php the_sub_field('sub_title_three'); ?></h3>
                            <p><?php the_sub_field('details_text'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="layerImageBox greenBox">
                            <div class="layerImageWrap">
                                <?php $right_image = get_sub_field('right_image'); ?>
                                <?php if ($right_image) { ?>
                                    <img src="<?php echo $right_image['url']; ?>" alt="<?php echo $right_image['alt']; ?>" />
                                <?php } ?>
                                <div class="layerImgBg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('guide_section')): ?>
    <?php while (have_rows('guide_section')):
        the_row(); ?>
        <section class="guideWrap">
            <p class="borderTitle">
                <?php the_sub_field('main_title'); ?>
            </p>
            <div class="container">
                <div class="guidPrincipal">
                    <h2><?php the_sub_field('principal_title'); ?></h2>
                    <div class="d-flex boxWrapper">
                        <?php if (have_rows('principal_column')): ?>
                            <?php while (have_rows('principal_column')):
                                the_row(); ?>
                                <div class="principal">
                                    <div class="principalImg">
                                        <?php $icon_image = get_sub_field('icon_image'); ?>
                                            <?php if ($icon_image) { ?>
                                                <img src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>" />
                                            <?php } ?>
                                    </div>
                                    <h4><?php the_sub_field('column_title'); ?></h4>
                                    <p><?php the_sub_field('column_details'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'join_today_section' ) ) : ?>
	<?php while ( have_rows( 'join_today_section' ) ) : the_row(); ?>
<section class="joinToday">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3>
                <?php the_sub_field( 'title' ); ?>
                </h3>
            </div>
            <div class="col-lg-5 btnBox">
                <div class="joinBtnWrap">
                    <a href="" class="red-btn"><?php the_sub_field( 'join_today_btn' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>