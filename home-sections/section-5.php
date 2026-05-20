<?php
// Section 4 – common
$green_btn   = get_field('sec5_greenbtn');
$heading     = get_field('sec5_title');

// Section 4 – background
$background  = get_field('sec5_bg');

$description = get_field('sec5_desc');
$email = get_field('sec5_email');
$signup_sec5 = get_field('sec5_signup');
$background_mob  = get_field('sec5_mobile_bg');
$background_tab  = get_field('sec5_tab_bg');
?>

<style>
  :root {
    --sec5-comp: url('<?php echo esc_url($background); ?>');
    --sec5-mob: url('<?php echo esc_url($background_mob); ?>');
    --sec5-tab: url('<?php echo esc_url($background_tab); ?>');
  }
</style>

<section class="section-5" id="signup">


  <div class="Insights">
    <?php if ($green_btn): ?>
      <div class="greenButton2"><?php echo esc_html($green_btn); ?></div>
    <?php endif; ?>

    <?php if ($heading): ?>
      <div class="sec5-block2"><?php echo esc_html($heading); ?></div>
    <?php endif; ?>

    <?php if ($description): ?>
      <div class="sec5-block3">
        <?php echo esc_html($description); ?>
      </div>
    <?php endif; ?>

    <?php if ($email): ?>
      <div
        class="sec5-block4"><?php echo do_shortcode('[contact-form-7 id="def22e8" title="signup"]'); ?>
      </div>
    <?php endif; ?>





  </div>
</section>