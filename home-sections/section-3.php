<?php
// Section 3 – common
$green_btn   = get_field('sec3_green_btn');
$heading     = get_field('section3_heading');
$sales_btn   = get_field('section3_sales_btn');
$prod_btn    = get_field('section3_prod_btn');

// Section 3 – background
$background  = get_field('section3_background');

// Sales – Block 1
$block1_sales_title       = get_field('sec3_block1_sales_title');
$block1_sales_description = get_field('section3_block1_sales_description');

// Sales – Block 2
$block2_sales_title       = get_field('section3_block2_sales_title');
$block2_sales_description = get_field('section3_block2_sales_description');

// Sales – Block 3
$block3_sales_title       = get_field('section3_block3_sales_title');
$block3_sales_description = get_field('section3_block3_sales_description');

// Product – Block 1
$block1_prod_title        = get_field('section3_block1_prod_title');
$block1_prod_description  = get_field('section3_block1_prod_description');

// Product – Block 2
$block2_prod_title        = get_field('section3_block2_prod_title');
$block2_prod_description  = get_field('section3_block2_prod_description');

// Product – Block 3
$block3_prod_title        = get_field('section3_block3_prod_title');
$block3_prod_description  = get_field('section3_block3_prod_description');

// Block backgrounds
$block1_bg = get_field('section3_block1_bg');
$block2_bg = get_field('section3_block2_bg');
$block3_bg = get_field('section3_block3_bg');

$background_mob  = get_field('sec3_mobile_bg');
$background_tab  = get_field('sec3_tab_bg');
?>

<style>
  :root {
    --sec3-comp: url('<?php echo esc_url($background); ?>');
    --sec3-mob: url('<?php echo esc_url($background_mob); ?>');
    --sec3-tab: url('<?php echo esc_url($background_tab); ?>');
    --sec3-bl1: url('<?php echo esc_url($block1_bg); ?>');
    --sec3-bl2: url('<?php echo esc_url($block2_bg); ?>');
    --sec3-bl3: url('<?php echo esc_url($block3_bg); ?>');
  }
</style>



<section class="section-3">

  <div class="Benefits">

    <?php if ($green_btn): ?>
      <div class="greenButton2"><?php echo esc_html($green_btn); ?></div>
    <?php endif; ?>

    <?php if ($heading): ?>
      <div class="sec3-block2">
        <p><?php echo esc_html($heading); ?></p>
      </div>
    <?php endif; ?>

    <div class="sec3-block3">
      <?php if ($sales_btn): ?>
        <button class="salesTeam"><?php echo esc_html($sales_btn); ?></button>
      <?php endif; ?>

      <?php if ($prod_btn): ?>
        <button class="productTeam"><?php echo esc_html($prod_btn); ?></button>
      <?php endif; ?>
    </div>

    <div class="sec3-block4 sales">

      <?php if ($block1_sales_title): ?>
        <div class="sec3-block4-box1">
          <p><?php echo esc_html($block1_sales_title); ?></p>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">

          <?php if ($block1_sales_description): ?>
            <p class="info">
              <?php echo esc_html($block1_sales_description); ?>
            </p>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if ($block2_sales_title): ?>
        <div class="sec3-block4-box2">

          <p><?php echo esc_html($block2_sales_title); ?></p>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">

          <?php if ($block2_sales_description): ?>
            <p class="info">
              <?php echo esc_html($block2_sales_description); ?>
            </p>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if ($block3_sales_title): ?>
        <div class="sec3-block4-box3">

          <p><?php echo esc_html($block3_sales_title); ?></p>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">

          <?php if ($block3_sales_description): ?>
            <p class="info">
              <?php echo esc_html($block3_sales_description); ?>
            </p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </div>


    <div class="sec3-block4 prod">

      <?php if ($block1_prod_title): ?>
        <div class="sec3-block4-box1">
          <p><?php echo esc_html($block1_prod_title); ?></p>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">

          <?php if ($block1_prod_description): ?>
            <p class="info">
              <?php echo esc_html($block1_prod_description); ?>
            </p>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if ($block2_prod_title): ?>
        <div class="sec3-block4-box2">

          <p><?php echo esc_html($block2_prod_title); ?></p>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">

          <?php if ($block2_prod_description): ?>
            <p class="info">
              <?php echo esc_html($block2_prod_description); ?>
            </p>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if ($block3_prod_title): ?>
        <div class="sec3-block4-box3">

          <p><?php echo esc_html($block3_prod_title); ?></p>

          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/right_arrow.svg" alt="right icon">

          <?php if ($block3_prod_description): ?>
            <p class="info">
              <?php echo esc_html($block3_prod_description); ?>
            </p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>