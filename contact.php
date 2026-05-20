<?php
/*
Template Name: contact page
*/
get_header();

$location1        = get_field('location1');
$loc1_state       = get_field('loc1_state');
$loc1_address     = get_field('loc1_address');
$loc1_phone       = get_field('loc1_phone');
$loc1_maps        = get_field('loc1_maps');

$location2        = get_field('location2');
$loc2_state       = get_field('loc2_state');
$loc2_address     = get_field('loc2_address');
$loc2_phone       = get_field('loc2_phone');
$loc2_maps        = get_field('loc2_maps');

$contact_greenbtn     = get_field('contact_greenbtn');
$contact_sec1_title   = get_field('contact_sec1_title');
$contact_sec1_desc    = get_field('contact_sec1_desc');
$contact_tab_main_bg  = get_field('contact_tab_main_bg');
$contact_mob_bg       = get_field('contact_mob_bg');
$contact_sec2_title   = get_field('contact_sec2_title');

?>

<style>
  :root {
    --contact-sec1-title: "<?php echo esc_js($contact_sec1_title); ?>";
    --contact-sec1-desc: "<?php echo esc_js($contact_sec1_desc); ?>";

    --contact-tab-bg: url('<?php echo esc_url($contact_tab_main_bg); ?>');
    --contact-mob-bg: url('<?php echo esc_url($contact_mob_bg); ?>');
  }
</style>


<section class="contact-sec1">
  <div class="first-half">
    <div class="inner-container">

      <?php if ($contact_greenbtn): ?>
        <div class="greenButton2"><?php echo esc_html($contact_greenbtn); ?></div>
      <?php endif; ?>

      <?php if ($contact_sec1_title): ?>
        <p class="contact-sec1-title"><?php echo esc_html($contact_sec1_title); ?></p>
      <?php endif; ?>

      <?php if ($contact_sec1_desc): ?>
        <p class="contact-sec1-desc"><?php echo esc_html($contact_sec1_desc); ?></p>
      <?php endif; ?>

    </div>
  </div>

  <div class="second-half">
    <div class="contact-form">
      <h3>Get in touch with us</h3>
      <?php echo do_shortcode('[contact-form-7 id="c006319" title="contact form"]'); ?>
    </div>
  </div>
</section>


<section class="contact-sec2">

  <?php if ($contact_sec2_title): ?>
    <p class="contact-sec2-title"><?php echo esc_html($contact_sec2_title); ?></p>
  <?php endif; ?>
  <div class="locations">

    <?php if ($location1 || $loc1_state || $loc1_address || $loc1_phone || $loc1_maps): ?>
      <div class="loc">
        <div class="address">

          <?php if ($location1): ?>
            <div class="greenButton2"><?php echo esc_html($location1); ?></div>
          <?php endif; ?>

          <?php if ($loc1_state): ?>
            <p class="loc-name"><?php echo esc_html($loc1_state); ?></p>
          <?php endif; ?>

          <?php if ($loc1_address): ?>
            <p class="loc-add"><?php echo nl2br(esc_html($loc1_address)); ?></p>
          <?php endif; ?>

          <?php if ($loc1_phone): ?>
            <p class="loc-phone">
              <a href="tel:<?php echo esc_attr($loc1_phone); ?>">
                <?php echo esc_html($loc1_phone); ?>
              </a>
            </p>
          <?php endif; ?>

        </div>

        <div class="maps">
          <?php if ($loc1_maps): ?>
            <?php echo $loc1_maps; ?>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($location2 || $loc2_state || $loc2_address || $loc2_phone || $loc2_maps): ?>
      <div class="loc">
        <div class="address">

          <?php if ($location2): ?>
            <div class="greenButton2"><?php echo esc_html($location2); ?></div>
          <?php endif; ?>

          <?php if ($loc2_state): ?>
            <p class="loc-name"><?php echo esc_html($loc2_state); ?></p>
          <?php endif; ?>

          <?php if ($loc2_address): ?>
            <p class="loc-add"><?php echo nl2br(esc_html($loc2_address)); ?></p>
          <?php endif; ?>

          <?php if ($loc2_phone): ?>
            <p class="loc-phone">
              <a href="tel:<?php echo esc_attr($loc2_phone); ?>">
                <?php echo esc_html($loc2_phone); ?>
              </a>
            </p>
          <?php endif; ?>

        </div>

        <div class="maps">
          <?php if ($loc2_maps): ?>
            <?php echo $loc2_maps; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      </div>

</section>


<?php get_footer(); ?>