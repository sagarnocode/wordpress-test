<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Terms and conditions
 */
get_header();
?>


<?php if (have_rows('terms_conditions')): ?>
    <?php while (have_rows('terms_conditions')):
        the_row(); ?>
        <section class="privacyPolicy">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="verticalMenu">
                            <div class="logoWrap">
                                <?php $page_logo = get_sub_field('page_logo'); ?>
                                <?php if ($page_logo) { ?>
                                    <img src="<?php echo $page_logo['url']; ?>" alt="<?php echo $page_logo['alt']; ?>" />
                                <?php } ?>
                            </div>
                            <ul>
                                <li>
                                    <?php $privacy_policy_link = get_sub_field('privacy_policy_link'); ?>
                                    <?php if ($privacy_policy_link) { ?>
                                        <a href="<?php echo $privacy_policy_link['url']; ?>"
                                            target="<?php echo $privacy_policy_link['target']; ?>"
                                            ><?php echo $privacy_policy_link['title']; ?></a>
                                    <?php } ?>
                                </li>

                                <li>
                                    <?php $terms_condition_menu = get_sub_field('terms_condition_menu'); ?>
                                    <?php if ($terms_condition_menu) { ?>
                                        <a href="<?php echo $terms_condition_menu['url']; ?>"
                                            target="<?php echo $terms_condition_menu['target']; ?>" class="activeMenu"><?php echo $terms_condition_menu['title']; ?></a>
                                    <?php } ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contentDetails">
                            <p><?php the_sub_field('page_content'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>