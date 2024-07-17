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
                    <?php echo do_shortcode('[contact-form-7 id="27bf59d" title="The Couplet Approach"]'); ?>

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