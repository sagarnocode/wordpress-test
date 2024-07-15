<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Our story
 */
get_header();
?>
<?php if (have_rows('our_story')): ?>
    <?php while (have_rows('our_story')):
        the_row(); ?>
        <section class="ourStory">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="storyContent">
                            <div class="storyTtitle">
                                <h3><?php the_sub_field('our_story_title'); ?></h3>
                            </div>
                            <p><?php the_sub_field('story_details'); ?>
                            </p>
                            <div class="storyLogo">
                                <?php $story_logo = get_sub_field('story_logo'); ?>
                                <?php if ($story_logo) { ?>
                                    <img src="<?php echo $story_logo['url']; ?>" alt="<?php echo $story_logo['alt']; ?>" />
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="layerImageBox greenBox">
                            <div class="layerImageWrap">
                                <?php $story_right_image = get_sub_field('story_right_image'); ?>
                                <?php if ($story_right_image) { ?>
                                    <img src="<?php echo $story_right_image['url']; ?>"
                                        alt="<?php echo $story_right_image['alt']; ?>" />
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

<?php if (have_rows('lets_talk_section')): ?>
    <?php while (have_rows('lets_talk_section')):
        the_row(); ?>
        <section class="letsTalk">
            <p class="borderTitle">
                <?php the_sub_field('main_title'); ?>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="description">
                            <h2>
                                <?php the_sub_field('lets_talk_title'); ?>
                            </h2>
                            <p><?php the_sub_field('lets_talk_details'); ?></p>
                        </div>
                        <div class="layerImageBox decisionWrap">
                            <div class="layerImageWrap leftlayerBox">
                                <?php $lets_talk_image = get_sub_field('lets_talk_image'); ?>
                                <?php if ($lets_talk_image) { ?>
                                    <img src="<?php echo $lets_talk_image['url']; ?>"
                                        alt="<?php echo $lets_talk_image['alt']; ?>" />
                                <?php } ?>
                                <div class="layerImgBg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="formWrap">
                            <?php echo do_shortcode('[contact-form-7 id="ba4bfc4" title="Contact form 1"]'); ?>
                            <?php the_sub_field('form_wrap'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>