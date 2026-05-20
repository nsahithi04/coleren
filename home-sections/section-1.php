<?php
$greenButton = get_field('highlight_button');
$heading = get_field('section_1_heading');
$description = get_field('section_1_description');
$signupButton = get_field('signup_button');

$background = get_field('section_1_background');
$background_mob  = get_field('sec1_mobile_bg');
$background_tab  = get_field('sec1_tab_bg');
?>

<style>
  :root {
    --sec1-comp: url('<?php echo esc_url($background); ?>');
    --sec1-mob: url('<?php echo esc_url($background_mob); ?>');
    --sec1-tab: url('<?php echo esc_url($background_tab); ?>');
  }
</style>



<section class="section-1">
  <div class="about">

    <?php if ($greenButton): ?>

      <div class="greenButton1">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg"
          alt="Star icon"><?php echo esc_html($greenButton); ?>
      </div>
    <?php endif; ?>


    <?php if ($heading): ?>
      <div class="sec1-block2">
        <?php echo esc_html($heading); ?>
      </div>
    <?php endif; ?>


    <?php if ($description): ?>
      <div class="sec1-block3">
        <?php echo esc_html($description); ?>
      </div>
    <?php endif; ?>


    <?php if ($signupButton): ?>
      <div class="sec1-block4">
        <a href="<?php echo esc_url($signupButton['url']); ?>"
          class="sec1-signup">
          <?php echo esc_html($signupButton['title']); ?>
        </a>
      </div>
  </div>
<?php endif; ?>

</section>