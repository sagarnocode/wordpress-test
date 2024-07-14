<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Landing page
 */
get_header();
?>
<?php if (have_rows('home_banner')): ?>
<?php while (have_rows('home_banner')):
        the_row(); ?>
<section class="bannerWrap">
    <div class="container">
        <div class="row bannerContent">
            <div class="col-lg-5">
                <div class="innerBanner">
                    <!-- <h1 class="mainLogo">
                                <?php $banner_logo = get_sub_field('banner_logo'); ?>
<?php if ($banner_logo) { ?>
<img src="<?php echo $banner_logo['url']; ?>" alt="<?php echo $banner_logo['alt']; ?>" />
<?php } ?>
</h1> -->
                    <h1 class="logoText">Couplet</h1>



                    <div class="line"></div>
                    <h2>
                        <?php the_sub_field('banner_title'); ?>
                    </h2>
                    <h3><?php the_sub_field('banner_sub_title'); ?></h3>
                    <div class="btn-wrap">
                        <a href="" class="primary-btn"><?php the_sub_field('start_btn'); ?></a>
                        <a href="" class="sec-btn"><?php the_sub_field('contact_btn'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="bannerImgWrap">
                    <div class="mainImg">
                        <?php $banner_main_image = get_sub_field('banner_main_image'); ?>
                        <?php if ($banner_main_image) { ?>
                        <img src="<?php echo $banner_main_image['url']; ?>"
                            alt="<?php echo $banner_main_image['alt']; ?>" />
                        <?php } ?>
                    </div>
                    <div class="photoInfo"><span><?php the_sub_field('banner_image_detail'); ?></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('about_section')): ?>
<?php while (have_rows('about_section')):
        the_row(); ?>
<section class="aboutWrap">
    <p class="borderTitle">
        <?php the_sub_field('about_title'); ?>
    </p>
    <div class="container">
        <div class="grid">
            <?php if (have_rows('about_box')): ?>
            <?php while (have_rows('about_box')):
                            the_row(); ?>
            <div class="aboutDetail">
                <div class="iconWrap">
                    <?php $box_icon = get_sub_field('box_icon'); ?>
                    <?php if ($box_icon) { ?>
                    <img src="<?php echo $box_icon['url']; ?>" alt="<?php echo $box_icon['alt']; ?>" />
                    <?php } ?>
                </div>
                <h4>
                    <?php the_sub_field('box_title'); ?>
                </h4>
                <p><?php the_sub_field('box_detail'); ?></p>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php // no rows found ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('new_age_wrap')): ?>
<?php while (have_rows('new_age_wrap')):
        the_row(); ?>
<section class="newAgeWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newAgeDetail">
                    <h2><?php the_sub_field('age_title'); ?></h2>
                    <p><?php the_sub_field('age_detail'); ?></p>
                    <ul class="checkListWrap">
                        <?php if (have_rows('match_wrap')): ?>
                        <?php while (have_rows('match_wrap')):
                                        the_row(); ?>
                        <li>
                            <i class="checkIcon">
                                <?php $check_icon = get_sub_field('check_icon'); ?>
                                <?php if ($check_icon) { ?>
                                <img src="<?php echo $check_icon['url']; ?>" alt="<?php echo $check_icon['alt']; ?>" />
                                <?php } ?>
                            </i>
                            <p>
                                <?php the_sub_field('check_details'); ?>
                            </p>
                        </li>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <?php // no rows found ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="layerImageBox">
                    <div class="layerImageWrap">
                        <?php $new_age_image = get_sub_field('new_age_image'); ?>
                        <?php if ($new_age_image) { ?>
                        <img src="<?php echo $new_age_image['url']; ?>" alt="<?php echo $new_age_image['alt']; ?>" />
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

<?php if (have_rows('member_wrap')): ?>
<?php while (have_rows('member_wrap')):
        the_row(); ?>
<section class="memberWrap sliderSection">
    <div class="container">
        <h2><?php the_sub_field('member_title'); ?></h2>
        <div class="row">

            <div class="sliderTest">
                <?php if (have_rows('member_slider')): ?>
                <?php while (have_rows('member_slider')):
                                the_row(); ?>
                <div>
                    <div class="sliderDetails">
                        <div class="testimonial">
                            <p><?php the_sub_field('slider_details'); ?></p>
                        </div>
                        <div class="name"><?php the_sub_field('slider_date_name'); ?></div>
                    </div>
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


<?php if (have_rows('join_now_wrap')): ?>
<?php while (have_rows('join_now_wrap')):
        the_row(); ?>
<section class="joinNow">
    <p class="borderTitle">
        <?php the_sub_field('find_love_title'); ?>
    </p>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="layerImageBox decisionWrap">
                    <div class="layerImageWrap leftlayerBox">
                        <?php $find_love_image = get_sub_field('find_love_image'); ?>
                        <?php if ($find_love_image) { ?>
                        <img src="<?php echo $find_love_image['url']; ?>"
                            alt="<?php echo $find_love_image['alt']; ?>" />
                        <?php } ?>
                        <div class="layerImgBg"></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="joinNowDetail">
                    <p><?php the_sub_field('join_now_details'); ?></p>
                    <a href="" class="red-btn"><?php the_sub_field('join_now_btn'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('trust_wrap')): ?>
<?php while (have_rows('trust_wrap')):
        the_row(); ?>
<section class="trustWrap">
    <p class="borderTitle">
        <?php the_sub_field('trust_us_title'); ?>
    </p>
    <div class="trustContainer">
        <?php if (have_rows('trust_box')): ?>
        <?php while (have_rows('trust_box')):
                        the_row(); ?>
        <div class="trustBox">
            <div class="icon">
                <?php $icon_image = get_sub_field('icon_image'); ?>
                <?php if ($icon_image) { ?>
                <img src="<?php echo $icon_image['url']; ?>" alt="<?php echo $icon_image['alt']; ?>" />
                <?php } ?>
            </div>
            <span>
                <?php the_sub_field('trust_details_text'); ?></span>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php // no rows found ?>
        <?php endif; ?>
    </div>
    
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('meet_wrap')): ?>
<?php while (have_rows('meet_wrap')):
        the_row(); ?>
<section class="meetWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="meetContent">
                    <h3><?php the_sub_field('meet_title'); ?></h3>
                    <div class="btn-wrap">
                        <a href="" class="red-btn"><?php the_sub_field('sign_up_btn'); ?></a>
                        <a href="" class="red-sec"><?php the_sub_field('contact_us_btn'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="layerImageBox">
                    <div class="layerImageWrap">
                        <?php $meet_image = get_sub_field('meet_image'); ?>
                        <?php if ($meet_image) { ?>
                        <img src="<?php echo $meet_image['url']; ?>" alt="<?php echo $meet_image['alt']; ?>" />
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

<?php get_footer(); ?>