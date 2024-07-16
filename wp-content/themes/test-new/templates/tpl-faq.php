<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Faq Page
 */
get_header();
?>

<section class="faqWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="faqDescrption">
                    <h2>FAQs</h2>
                    <p>Have a question about finding love with Couplet? We’ve got you covered!</p>
                    <a href="" class="red-sec">
                        Contact
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>
                                    At Couplet, we promote intentional dating. We focus on finding a quality match that
                                    feels right, rather than quantity. Once you’ve had a successful first date, we’ll
                                    pause the search and resume when you’re ready to move on.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    At Couplet, we promote intentional dating. We focus on finding a quality match that
                                    feels right, rather than quantity. Once you’ve had a successful first date, we’ll
                                    pause the search and resume when you’re ready to move on.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>