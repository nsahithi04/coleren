<?php
// Section 4 – common
$green_btn   = get_field('sec4_greenbtn');
$heading     = get_field('sec4_title');

// Section 4 – background
$background  = get_field('sec4_bg');
$background_mob  = get_field('sec4_mobile_bg');
$background_tab  = get_field('sec4_tab_bg');


//Block 1
$block1_title = get_field('sec4_block1_title');
$block1_description = get_field('sec4_block1_desc');
$block1_bg_closed = get_field('sec4_block1_bg_small');
$block1_bg = get_field('sec4_block1_bg');
$block1_bg_mob = get_field('sec4_block1_mobile');

//Block 2
$block2_title = get_field('sec4_block2_title');
$block2_description = get_field('sec4_block2_desc');
$block2_bg_closed  = get_field('sec4_block2_bg_small');
$block2_bg = get_field('sec4_block2_bg');
$block2_bg_mob = get_field('sec4_block2_mobile');

?>


<style>
:root {
  --bg1-default: url("<?php echo esc_url($block1_bg_closed); ?>");
  --bg1-clicked: url("<?php echo esc_url($block1_bg); ?>");
  --bg1-mobile: url("<?php echo esc_url($block1_bg_mob); ?>");
  --bg2-default: url('<?php echo esc_url($block2_bg_closed); ?>');
  --bg2-clicked: url('<?php echo esc_url($block2_bg); ?>');
  --bg2-mobile: url('<?php echo esc_url($block2_bg_mob); ?>');
  --sec4-comp: url('<?php echo esc_url($background); ?>');
  --sec4-mob: url('<?php echo esc_url($background_mob); ?>');
  --sec4-tab: url('<?php echo esc_url($background_tab); ?>');
}
</style>


<section class="section-4">
      <div class="Advantages">
        <?php if ($green_btn): ?>
        <div class="greenButton2"><?php echo esc_html($green_btn);?></div>
        <?php endif; ?>

        <?php if ($heading): ?>
        <div class="sec4-block2">
          <p>
            <?php echo esc_html($heading);?>
          </p>
        </div>
        <?php endif; ?>
        <div class="sec4-block3">
          <div class="sec4-block3-box1">
            <div>
              <?php if ($block1_title): ?>
              <p class="box-title"><?php echo esc_html($block1_title);?></p>
              <?php endif; ?>

              <?php if ($block1_description): ?>
              <p class="box1-description">
                <?php echo esc_html($block1_description);?>
              </p>
              <?php endif; ?>

              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">
            </div>
          </div>
          <div class="sec4-block3-box2">
            <div>
              <?php if ($block2_title): ?>
              <p class="box-title"><?php echo esc_html($block2_title);?></p>
              <?php endif; ?>

              <?php if ($block2_description): ?>
              <p class="box2-description">
                <?php echo esc_html($block2_description);?>
              </p>
              <?php endif; ?>

              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">
            </div>
        </div>
      </div>
    </section>