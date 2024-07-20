<?php $_asset_path = get_stylesheet_directory_uri(); ?>
<?php
/**
 * Template Name: Membership page
 */
get_header();
?>
<div class="memberShipWrap">
<?php if ( have_rows( 'membership_banner' ) ) : ?>
	<?php while ( have_rows( 'membership_banner' ) ) : the_row(); ?>
  <section class="bannerWrap">
    <div class="container">
      <div>
        <div class="bannerTitle">
          <h1><?php the_sub_field( 'membership_title' ); ?></h1>
          <p><?php the_sub_field( 'sub_title' ); ?></p>
        </div>
        <div class="gridWrap">
          <?php if ( have_rows( 'plan_details' ) ) : ?>
            <?php while ( have_rows( 'plan_details' ) ) : the_row(); ?>
          <div class="selectBox">
            <div class="optionBox">
              <div class="optionTop">
                <div class="topLeft">
                  <h4><?php the_sub_field( 'count' ); ?></h4>
                  <h5><?php the_sub_field( 'match' ); ?></h5>
                </div>
                <div class="topRight">
                  <span><?php the_sub_field( 'inr_text' ); ?></span>
                  <h6><?php the_sub_field( 'price' ); ?></h6>
                </div>
              </div>
              <div class="optionBottom">
                <a href="" class="red-sec"><?php the_sub_field( 'select_btn' ); ?></a>
                <span>
                <?php the_sub_field( 'valid_text' ); ?>
                </span>
              </div>

            </div>
          </div>        
            <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
          <?php endif; ?>  
      </div>
        <p class="bannerDetails"><?php the_sub_field( 'banner_bottom_text' ); ?></p>
      </div>
    </div>

  </section>
  <?php endwhile; ?>
  <?php endif; ?>


  <?php if ( have_rows( 'form_title_wrap' ) ) : ?>
    <?php while ( have_rows( 'form_title_wrap' ) ) : the_row(); ?>
  <section class="giftWrap">
    <div class="container">
      <div class="giftTitle">
        <h2><?php the_sub_field( 'form_main_title' ); ?></h2>
        <p><?php the_sub_field( 'form_sub_title' ); ?></p>
      </div>
      <div class="giftMemberForm detailsFormWrap">
        <?php echo do_shortcode('[contact-form-7 id="ed0d509" title="gift membership"]'); ?>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
</>
<?php get_footer(); ?>