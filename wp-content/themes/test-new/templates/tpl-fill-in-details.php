<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Fill in Details Page
 */
get_header();
?>
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