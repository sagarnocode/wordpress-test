
<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Our story
 */
get_header();
?>

<section class="ourStory">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="storyContent">
                    <div class="storyTtitle">
                        <h3>Our Story</h3>
                        <span class="storyIcon">
                            <img src="" />
                        </span>
                    </div>
                    <p>Stemming from the founder’s own experience navigating the modern dating landscape, Couplet was
                        created to address the needs of the discerning single Indian. Led by a seasoned Talent Architect
                        with over a decade of expertise in understanding people, we offer a streamlined approach to
                        finding love, all while preserving your authenticity. Backed by a robust team, Couplet ensures a
                        seamless experience for all our valued members.
                    </p>
                    <div class="storyLogo">
                        <img src="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="layerImageBox">
                    <div class="layerImageWrap">
                        <img src="http://localhost/couplet/wp-content/uploads/2024/07/Mask-group-15.png" alt="">
                        <div class="layerImgBg"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="letsTalk">
    <p class="borderTitle">
        Embrace connection beyond the screen
    </p>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="description">
                    <h2>Let’s Talk!</h2>
                    <p>Drop us a line at hello@couplet.in or leave behind your details and we will give you a call.</p>
                </div>
                <div class="layerImageBox decisionWrap">
                    <div class="layerImageWrap leftlayerBox">
                        <img src="http://localhost/couplet/wp-content/uploads/2024/07/img-1.png" alt="find love">
                        <div class="layerImgBg"></div>
                    </div>


                </div>
            </div>
            <div class="col-md-6">
            <div>
            <?php echo do_shortcode('[contact-form-7 id="ba4bfc4" title="Contact form 1"]');?>
            </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>