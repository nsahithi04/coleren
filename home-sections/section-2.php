<?php
$greenButton = get_field('sec2_green_btn');
$heading = get_field('section_2_heading');
$description = get_field('section2_description');
$viewButton = get_field('section_2_white_btn');
$solution = get_field('section_2_solution');
$background = get_field('section_2_background');
$background_mob  = get_field('sec2_mobile_bg');
$background_tab  = get_field('sec2_tab_bg');
?>

<style>
  :root {
    --sec2-comp: url('<?php echo esc_url($background); ?>');
    --sec2-mob: url('<?php echo esc_url($background_mob); ?>');
    --sec2-tab: url('<?php echo esc_url($background_tab); ?>');
  }
</style>



<section class="section-2">

  <div class="solution">


    <?php if ($greenButton): ?>
      <div class="greenButton2"><?php echo esc_html($greenButton); ?></div>
    <?php endif; ?>


    <?php if ($heading): ?>
      <div class="sec2-block2">
        <?php echo esc_html($heading); ?>
      </div>
    <?php endif; ?>

    <?php if ($description): ?>
      <div class="sec2-block3">
        <p>
          <?php echo esc_html($description); ?>
        </p>
      </div>
    <?php endif; ?>



    <div class="sec2-block4">
      <?php if ($viewButton): ?>
        <button>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg" alt="Star icon">
          <?php echo esc_html($viewButton); ?>
        </button>
      <?php endif; ?>

      <?php if ($solution): ?>
        <p>
          <?php echo esc_html($solution); ?>
        </p>
      <?php endif; ?>
    </div>


  </div>
</section>