<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Fill in Details Page
 */
get_header();
?>
<?php if (have_rows('title_section')): ?>
<?php while (have_rows('title_section')):
        the_row(); ?>
<section class="formTitleWrap">
    <div class="container">
        <div class="col-md-12">
            <div class="d-flex headingWrap">
                <div class="notepadIcon">
                    <?php $left_icon = get_sub_field('left_icon'); ?>
                    <?php if ($left_icon) { ?>
                    <img src="<?php echo $left_icon['url']; ?>" alt="<?php echo $left_icon['alt']; ?>" />
                    <?php } ?>
                </div>
                <h2><?php the_sub_field('page_title'); ?></h2>

            </div>
            <p><?php the_sub_field('form_details_text'); ?></p>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="detailsFormWrap">
                <div class="formInner">
                    <div class="visually-hidden">
                        <div class="qrCodeInner">
                            <?php if (have_rows('qr_codes')): ?>
                            <?php while (have_rows('qr_codes')):
                                    the_row(); ?>
                            <?php $rs6k_qr_code = get_sub_field('rs6k_qr_code'); ?>
                            <?php if ($rs6k_qr_code) { ?>
                            <div class="6k qrCode" style="display:none" data-bs-toggle="modal"
                                data-bs-target="#rs6kModal"><img src="<?php echo $rs6k_qr_code['url']; ?>"
                                    alt="<?php echo $rs6k_qr_code['alt']; ?>" /></div>
                            <?php } ?>
                            <?php $rs10k_qr_code = get_sub_field('rs10k_qr_code'); ?>
                            <?php if ($rs10k_qr_code) { ?>
                            <div class="10k qrCode" style="display:none" data-bs-toggle="modal"
                                data-bs-target="#rs10kModal"><img src="<?php echo $rs10k_qr_code['url']; ?>"
                                    alt="<?php echo $rs10k_qr_code['alt']; ?>" />
                            </div>
                            <?php } ?>
                            <?php $rs14k_qr_code = get_sub_field('rs14k_qr_code'); ?>
                            <?php if ($rs14k_qr_code) { ?>
                            <div class="14k qrCode" style="display:none" data-bs-toggle="modal"
                                data-bs-target="#rs14kModal"><img src="<?php echo $rs14k_qr_code['url']; ?>"
                                    alt="<?php echo $rs14k_qr_code['alt']; ?>" />
                            </div>
                            <?php } ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if (have_rows('title_section')): ?>
                    <?php while (have_rows('title_section')):
                            the_row(); ?>
                    <?php echo do_shortcode(get_sub_field('fill_in_details_form')); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="modal fade" id="rs6kModal" tabindex="-1" aria-labelledby="rs6kModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rs6kModalLabel">QR Code</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center">

                                    <?php if (have_rows('qr_codes')): ?>
                                    <?php while (have_rows('qr_codes')):
                                            the_row(); ?>
                                    <?php $rs6k_qr_code = get_sub_field('rs6k_qr_code'); ?>
                                    <?php if ($rs6k_qr_code) { ?>
                                    <img src="<?php echo $rs6k_qr_code['url']; ?>"
                                        alt="<?php echo $rs6k_qr_code['alt']; ?>" />
                                    <?php } ?>

                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="rs10kModal" tabindex="-1" aria-labelledby="rs10kModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rs10kModalLabel">QR Code</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center">

                                    <?php if (have_rows('qr_codes')): ?>
                                    <?php while (have_rows('qr_codes')):
                                            the_row(); ?>
                                    <?php $rs10k_qr_code = get_sub_field('rs10k_qr_code'); ?>
                                    <?php if ($rs10k_qr_code) { ?>
                                    <img src="<?php echo $rs10k_qr_code['url']; ?>"
                                        alt="<?php echo $rs10k_qr_code['alt']; ?>" />
                                    <?php } ?>

                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="rs14kModal" tabindex="-1" aria-labelledby="rs14kModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rs14kModalLabel">QR Code</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center">

                                    <?php if (have_rows('qr_codes')): ?>
                                    <?php while (have_rows('qr_codes')):
                                            the_row(); ?>
                                    <?php $rs14k_qr_code = get_sub_field('rs14k_qr_code'); ?>
                                    <?php if ($rs14k_qr_code) { ?>
                                    <img src="<?php echo $rs14k_qr_code['url']; ?>"
                                        alt="<?php echo $rs14k_qr_code['alt']; ?>" />
                                    <?php } ?>

                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mb40">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb40">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb40 ">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <div class="upload-btn-wrapper">
                            <button class="btn">Upload a file</button>
                            <input type="file" name="myfile" />
                        </div>
                    </div>
                    <div class="mb40">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I confirm I am single by relationship status
                            </label>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>