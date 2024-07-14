<?php
/**
 * Template Name: home test page
 */
get_header();
?>
<section>
    <div class="banner">
        <?php
        $bannerImage = get_field('banner_image');
        if (!empty($bannerImage)): ?>
        <img src="<?php echo esc_url($bannerImage['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>
</section>

<div class="container">
    <p> this is the static text to test</p>
    <p> <?php the_field('test_home_page_pera'); ?></p>
</div>
<section>
    <div class="container">

        <div class="accordion" id="accordionExample">
            <?php if (have_rows('faq')): ?>

            <?php
                $i = 0;
                while (have_rows('faq')):
                    the_row();
                    $i++;
                    ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?php the_sub_field('faq_question'); ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse show"
                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            <?php the_sub_field('faq_answer'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>text</p>
            </div>
            <div class="col-md-6">
                <img src="" />
            </div>

        </div>
    </div>
</section>

<?php if (have_rows('slider_section')): ?>
<?php while (have_rows('slider_section')):
        the_row(); ?>
<section class="sliderSection">
    <div class="container">
        <div class="row">
            <h2><?php the_sub_field('main_title'); ?></h2>
            <?php if (have_rows('slider_box')): ?>
            <div class="sliderTest">
                <?php while (have_rows('slider_box')):
                                the_row(); ?>
                <div class="col-md-4">
                    <div class="sliderDetails">
                        <span><?php the_sub_field('box_title'); ?></span>
                        <p><?php the_sub_field('box_description'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>


<!-- <div class="wrapper">
    <h2>Slick Carousel Example<h2>
            <div class="carousel">
                <div><img src="https://picsum.photos/300/200?random=1"></div>
                <div><img src="https://picsum.photos/300/200?random=2"></div>
                <div><img src="https://picsum.photos/300/200?random=3"></div>
                <div><img src="https://picsum.photos/300/200?random=4"></div>
                <div><img src="https://picsum.photos/300/200?random=5"></div>
                <div><img src="https://picsum.photos/300/200?random=6"></div>
            </div>
</div> -->

<?php get_footer(); ?>