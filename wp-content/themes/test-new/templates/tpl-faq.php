<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Faq Page
 */
get_header();
?>
<?php if ( have_rows( 'faq_section' ) ) : ?>
<?php while ( have_rows( 'faq_section' ) ) : the_row(); ?>
<section class="faqWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="faqDescrption">
                    <h2><?php the_sub_field( 'faq_title' ); ?></h2>
                    <p><?php the_sub_field( 'faq_description' ); ?></p>
                    
                    <div class="faqContact">
                    <a href="" class="red-sec">
                    <?php the_sub_field( 'faq_contact' ); ?> </a>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-7">
                <div class="accordion" id="accordionExample">
                    <?php if ( have_rows( 'faq_list_data' ) ) : ?>

                    <?php
                        $i =0;
                        while( have_rows( 'faq_list_data' ) ) : the_row();
                        $i++
                        ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?php the_sub_field( 'question' ); ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <?php the_sub_field( 'answer' ); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>