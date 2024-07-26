<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Membership page
 */
get_header();
?>
<div class="memberShipWrap">
    <?php if (have_rows('membership_banner')): ?>
    <?php while (have_rows('membership_banner')):
            the_row(); ?>
    <section class="bannerWrap">
        <div class="container">
            <div>
                <div class="bannerTitle">
                    <h1><?php the_sub_field('membership_title'); ?></h1>
                    <p><?php the_sub_field('sub_title'); ?></p>
                </div>
                <div class="gridWrap">
                    <?php if (have_rows('plan_details')): ?>
                    <?php while (have_rows('plan_details')):
                                    the_row(); ?>
                    <div class="selectBox">
                        <div class="optionBox">
                            <div class="optionTop">
                                <div class="topLeft">
                                    <h4><?php the_sub_field('count'); ?></h4>
                                    <h5><?php the_sub_field('match'); ?></h5>
                                </div>
                                <div class="topRight">
                                    <span><?php the_sub_field('inr_text'); ?></span>
                                    <h6><?php the_sub_field('price'); ?></h6>
                                </div>
                            </div>
                            <div class="optionBottom">
                                <?php $select_btn = get_sub_field('select_btn'); ?>
                                <?php if ($select_btn) { ?>
                                <a href="<?php echo $select_btn['url']; ?>"
                                    target="<?php echo $select_btn['target']; ?>"
                                    class="red-sec"><?php echo $select_btn['title']; ?></a>
                                <?php } ?>
                                <span>
                                    <?php the_sub_field('valid_text'); ?>
                                </span>
                            </div>

                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                </div>
                <p class="bannerDetails"><?php the_sub_field('banner_bottom_text'); ?></p>
            </div>
        </div>

    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="visually-hidden">
        <div class="qrCodeInner">
            <?php
            // Replace with the actual ID of the post/page where the field is saved
            $source_post_id = 246;
            // echo 'The source post ID is: ' . $source_post_id;
            ?>
            <?php if (have_rows('qr_codes', $source_post_id)): ?>
            <?php while (have_rows('qr_codes', $source_post_id)):
                    the_row(); ?>
            <?php $rs6k_qr_code = get_sub_field('rs6k_qr_code', $source_post_id); ?>
            <?php if ($rs6k_qr_code) { ?>
            <div class="6k qrCode" style="display:none;" data-bs-toggle="modal" data-bs-target="#rs6kModal"><img
                    src="<?php echo $rs6k_qr_code['url']; ?>" alt="<?php echo $rs6k_qr_code['alt']; ?>" /></div>
            <?php } ?>
            <?php $rs10k_qr_code = get_sub_field('rs10k_qr_code'); ?>
            <?php if ($rs10k_qr_code) { ?>
            <div class="10k qrCode" style="display:none;" data-bs-toggle="modal" data-bs-target="#rs10kModal"><img
                    src="<?php echo $rs10k_qr_code['url']; ?>" alt="<?php echo $rs10k_qr_code['alt']; ?>" />
            </div>
            <?php } ?>
            <?php $rs14k_qr_code = get_sub_field('rs14k_qr_code'); ?>
            <?php if ($rs14k_qr_code) { ?>
            <div class="14k qrCode" style="display:none;" data-bs-toggle="modal" data-bs-target="#rs14kModal"><img
                    src="<?php echo $rs14k_qr_code['url']; ?>" alt="<?php echo $rs14k_qr_code['alt']; ?>" />
            </div>
            <?php } ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php ?>
        </div>
    </div>

    <?php if (have_rows('form_title_wrap')): ?>
    <?php while (have_rows('form_title_wrap')):
            the_row(); ?>
    <section class="giftWrap">
        <div class="container">
            <div class="giftTitle">
                <h2><?php the_sub_field('form_main_title'); ?></h2>
                <p><?php the_sub_field('form_sub_title'); ?></p>
            </div>
            <div class="giftMemberForm detailsFormWrap">
                <?php echo do_shortcode('[contact-form-7 id="ed0d509" title="gift membership"]'); ?>
            </div>
        </div>
    </section>
    <div class="modal fade" id="rs6kModal" tabindex="-1" aria-labelledby="rs6kModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rs6kModalLabel">QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">

                    <?php if (have_rows('qr_codes', $source_post_id)): ?>
                    <?php while (have_rows('qr_codes', $source_post_id)):
                                    the_row(); ?>
                    <?php $rs6k_qr_code = get_sub_field('rs6k_qr_code', $source_post_id); ?>
                    <?php if ($rs6k_qr_code) { ?>
                    <img src="<?php echo $rs6k_qr_code['url']; ?>" alt="<?php echo $rs6k_qr_code['alt']; ?>" />
                    <?php } ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rs10kModal" tabindex="-1" aria-labelledby="rs10kModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rs10kModalLabel">QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">

                    <?php if (have_rows('qr_codes', $source_post_id)): ?>
                    <?php while (have_rows('qr_codes', $source_post_id)):
                                    the_row(); ?>
                    <?php $rs10k_qr_code = get_sub_field('rs10k_qr_code', $source_post_id); ?>
                    <?php if ($rs10k_qr_code) { ?>
                    <img src="<?php echo $rs10k_qr_code['url']; ?>" alt="<?php echo $rs10k_qr_code['alt']; ?>" />
                    <?php } ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rs14kModal" tabindex="-1" aria-labelledby="rs14kModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rs14kModalLabel">QR Code</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">

                    <?php if (have_rows('qr_codes', $source_post_id)): ?>
                    <?php while (have_rows('qr_codes', $source_post_id)):
                                    the_row(); ?>
                    <?php $rs14k_qr_code = get_sub_field('rs14k_qr_code', $source_post_id); ?>
                    <?php if ($rs14k_qr_code) { ?>
                    <img src="<?php echo $rs14k_qr_code['url']; ?>" alt="<?php echo $rs14k_qr_code['alt']; ?>" />
                    <?php } ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>