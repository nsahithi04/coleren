<?php
/*
Template Name: Solutions Page
*/

get_header();

//section 1
$solBtn     = get_field('solbtn');
$prodBtn    = get_field('prodbtn');
$solBtnName     = get_field('solutionbtn');
$prodBtnName    = get_field('productbtn');

$sol_sec1_heading = get_field('sol_sec1_heading');
$sol_sec1_desc    = get_field('sol_sec1_desc');

$sol_sec1_bg      = get_field('sol_sec1_bg');
$sol_sec1_tab_bg  = get_field('sol_sec1_tab_bg');
$sol_sec1_mob_bg  = get_field('sol_sec1_mob_bg');


//sol1
$sol1_title        = get_field('sol1_title');
$sol1_desc         = get_field('sol1_desc');
$sol1_subtitle     = get_field('sol1_subtitle');
$sol1_sub_desc     = get_field('sol1_sub_desc');

$sol1_block1_title = get_field('sol1_block1_title');
$sol1_block1_desc  = get_field('sol1_block1_desc');
$sol1_block1_bg    = get_field('sol1_block1_bg');

$sol1_block2_title = get_field('sol1_block2_title');
$sol1_block2_desc  = get_field('sol1_block2_desc');
$sol1_block2_bg    = get_field('sol1_block2_bg');

$sol1_block3_title = get_field('sol1_block3_title');
$sol1_block3_desc  = get_field('sol1_block3_desc');
$sol1_block3_bg    = get_field('sol1_block3_bg');

$sol1_block4_title = get_field('sol1_block4_title');
$sol1_block4_desc  = get_field('sol1_block4_desc');
$sol1_block4_bg    = get_field('sol1_block4_bg');

$sol1_block5_title = get_field('sol1_block5_title');
$sol1_block5_desc  = get_field('sol1_block5_desc');
$sol1_block5_bg    = get_field('sol1_block5_bg');

//sol2
$sol2_title        = get_field('sol2_title');
$sol2_desc         = get_field('sol2_desc');
$sol2_subtitle     = get_field('sol2_subtitle');
$sol2_sub_desc     = get_field('sol2_sub_desc');

$sol2_block1_title = get_field('sol2_block1_title');
$sol2_block1_desc  = get_field('sol2_block1_desc');
$sol2_block1_bg    = get_field('sol2_block1_bg');

$sol2_block2_title = get_field('sol2_block2_title');
$sol2_block2_desc  = get_field('sol2_block2_desc');
$sol2_block2_bg    = get_field('sol2_block2_bg');

$sol2_block3_title = get_field('sol2_block3_title');
$sol2_block3_desc  = get_field('sol2_block3_desc');
$sol2_block3_bg    = get_field('sol2_block3_bg');

$sol2_block4_title = get_field('sol2_block4_title');
$sol2_block4_desc  = get_field('sol2_block4_desc');
$sol2_block4_bg    = get_field('sol2_block4_bg');

$sol2_block5_title = get_field('sol2_block5_title');
$sol2_block5_desc  = get_field('sol2_block5_desc');
$sol2_block5_bg    = get_field('sol2_block5_bg');


//sol3
$sol3_title        = get_field('sol3_title');
$sol3_desc         = get_field('sol3_desc');
$sol3_subtitle     = get_field('sol3_subtitle');
$sol3_sub_desc     = get_field('sol3_sub_desc');

$sol3_block1_title = get_field('sol3_block1_title');
$sol3_block1_desc  = get_field('sol3_block1_desc');
$sol3_block1_bg    = get_field('sol3_block1_bg');

$sol3_block2_title = get_field('sol3_block2_title');
$sol3_block2_desc  = get_field('sol3_block2_desc');
$sol3_block2_bg    = get_field('sol3_block2_bg');

$sol3_block3_title = get_field('sol3_block3_title');
$sol3_block3_desc  = get_field('sol3_block3_desc');
$sol3_block3_bg    = get_field('sol3_block3_bg');

$sol3_block4_title = get_field('sol3_block4_title');
$sol3_block4_desc  = get_field('sol3_block4_desc');
$sol3_block4_bg    = get_field('sol3_block4_bg');

$sol3_block5_title = get_field('sol3_block5_title');
$sol3_block5_desc  = get_field('sol3_block5_desc');
$sol3_block5_bg    = get_field('sol3_block5_bg');

?>

<style>
  :root {

    --sol-sec1-bg: url('<?php echo esc_url($sol_sec1_bg); ?>');
    --sol-sec1-tab-bg: url('<?php echo esc_url($sol_sec1_tab_bg); ?>');
    --sol-sec1-mob-bg: url('<?php echo esc_url($sol_sec1_mob_bg); ?>');

    /* ===== sol1 ===== */
    --sol1-block1-bg: url('<?php echo esc_url($sol1_block1_bg); ?>');
    --sol1-block2-bg: url('<?php echo esc_url($sol1_block2_bg); ?>');
    --sol1-block3-bg: url('<?php echo esc_url($sol1_block3_bg); ?>');
    --sol1-block4-bg: url('<?php echo esc_url($sol1_block4_bg); ?>');
    --sol1-block5-bg: url('<?php echo esc_url($sol1_block5_bg); ?>');

    /* ===== sol2 ===== */
    --sol2-block1-bg: url('<?php echo esc_url($sol2_block1_bg); ?>');
    --sol2-block2-bg: url('<?php echo esc_url($sol2_block2_bg); ?>');
    --sol2-block3-bg: url('<?php echo esc_url($sol2_block3_bg); ?>');
    --sol2-block4-bg: url('<?php echo esc_url($sol2_block4_bg); ?>');
    --sol2-block5-bg: url('<?php echo esc_url($sol2_block5_bg); ?>');

    /* ===== sol3 ===== */
    --sol3-block1-bg: url('<?php echo esc_url($sol3_block1_bg); ?>');
    --sol3-block2-bg: url('<?php echo esc_url($sol3_block2_bg); ?>');
    --sol3-block3-bg: url('<?php echo esc_url($sol3_block3_bg); ?>');
    --sol3-block4-bg: url('<?php echo esc_url($sol3_block4_bg); ?>');
    --sol3-block5-bg: url('<?php echo esc_url($sol3_block5_bg); ?>');

  }
</style>



<section class="sol-sec1">
  <div class="sol-type-btns">

    <?php
    $current_id = acf_get_current_url();

    if ($solBtn):
      $sol_class = ($solBtn === $current_id) ? 'active-sol' : 'inactive-sol';
    ?>
      <a href="<?php echo esc_url($solBtn); ?>"
        class="<?php echo esc_attr($sol_class); ?>">
        <?php echo esc_html($solBtnName); ?>
      </a>
    <?php endif; ?>

    <?php
    if ($prodBtn):
      $prod_class = ($prodBtn === $current_id) ? 'active-sol' : 'inactive-sol';
    ?>
      <a href="<?php echo esc_url($prodBtn); ?>"
        class="<?php echo esc_attr($prod_class); ?>">
        <?php echo esc_html($prodBtnName); ?>
      </a>
    <?php endif; ?>

  </div>

  <?php if ($sol_sec1_heading): ?>
    <div class="sol-sec1-title"><?php echo esc_html($sol_sec1_heading); ?></div>
  <?php endif; ?>

  <?php if ($sol_sec1_desc): ?>
    <div class="sol-sec1-desc"><?php echo esc_html($sol_sec1_desc); ?></div>
  <?php endif; ?>
</section>


<section class="solution-info">
  <div class="part1">
    <?php if ($sol1_title): ?>
      <div class="sol-title">
        <?php echo esc_html($sol1_title); ?>
      </div>
    <?php endif; ?>

    <?php if ($sol1_desc): ?>
      <div class="sol-desc">
        <?php echo esc_html($sol1_desc); ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="part2">
    <?php if ($sol1_subtitle): ?>
      <div class="sol-subtitle">
        <?php echo esc_html($sol1_subtitle); ?>
      </div>
    <?php endif; ?>

    <?php if ($sol1_sub_desc): ?>
      <div class="sol-subdesc">
        <?php echo esc_html($sol1_sub_desc); ?>
      </div>
    <?php endif; ?>

    <div class="sol-blocks">
      <img class="left" src="<?php echo get_template_directory_uri(); ?>/assets/icons/left.svg" alt="left icon">
      <div class="slider">

        <?php if ($sol1_block1_title || $sol1_block1_desc): ?>
          <div class="sol-block1">
            <?php if ($sol1_block1_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol1_block1_title); ?></p>
            <?php endif; ?>
            <?php if ($sol1_block1_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol1_block1_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol1_block2_title || $sol1_block2_desc): ?>
          <div class="sol-block2">
            <?php if ($sol1_block2_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol1_block2_title); ?></p>
            <?php endif; ?>
            <?php if ($sol1_block2_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol1_block2_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol1_block3_title || $sol1_block3_desc): ?>
          <div class="sol-block3">
            <?php if ($sol1_block3_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol1_block3_title); ?></p>
            <?php endif; ?>
            <?php if ($sol1_block3_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol1_block3_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol1_block4_title || $sol1_block4_desc): ?>
          <div class="sol-block4">
            <?php if ($sol1_block4_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol1_block4_title); ?></p>
            <?php endif; ?>
            <?php if ($sol1_block4_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol1_block4_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol1_block5_title || $sol1_block5_desc): ?>
          <div class="sol-block5">
            <?php if ($sol1_block5_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol1_block5_title); ?></p>
            <?php endif; ?>
            <?php if ($sol1_block5_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol1_block5_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <img class="right" src="<?php echo get_template_directory_uri(); ?>/assets/icons/right.svg" alt="right icon">
    </div>
    <div class="slider-nav">
      <span class="dot" data-index="0"></span>
      <span class="dot" data-index="1"></span>
      <span class="dot" data-index="2"></span>
      <span class="dot" data-index="3"></span>
      <span class="dot" data-index="4"></span>
    </div>

  </div>
</section>


<section class="solution-info">
  <div class="part1">
    <?php if ($sol2_title): ?>
      <div class="sol-title">
        <?php echo esc_html($sol2_title); ?>
      </div>
    <?php endif; ?>

    <?php if ($sol2_desc): ?>
      <div class="sol-desc">
        <?php echo esc_html($sol2_desc); ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="part2">
    <?php if ($sol2_subtitle): ?>
      <div class="sol-subtitle">
        <?php echo esc_html($sol2_subtitle); ?>
      </div>
    <?php endif; ?>

    <?php if ($sol2_sub_desc): ?>
      <div class="sol-subdesc">
        <?php echo esc_html($sol2_sub_desc); ?>
      </div>
    <?php endif; ?>

    <div class="sol-blocks">
      <img class="left" src="<?php echo get_template_directory_uri(); ?>/assets/icons/left.svg" alt="left icon">
      <div class="slider">

        <?php if ($sol2_block1_title || $sol2_block1_desc): ?>
          <div class="sol-block1">
            <?php if ($sol2_block1_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol2_block1_title); ?></p>
            <?php endif; ?>
            <?php if ($sol2_block1_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol2_block1_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol2_block2_title || $sol2_block2_desc): ?>
          <div class="sol-block2">
            <?php if ($sol2_block2_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol2_block2_title); ?></p>
            <?php endif; ?>
            <?php if ($sol2_block2_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol2_block2_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol2_block3_title || $sol2_block3_desc): ?>
          <div class="sol-block3">
            <?php if ($sol2_block3_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol2_block3_title); ?></p>
            <?php endif; ?>
            <?php if ($sol2_block3_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol2_block3_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol2_block4_title || $sol2_block4_desc): ?>
          <div class="sol-block4">
            <?php if ($sol2_block4_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol2_block4_title); ?></p>
            <?php endif; ?>
            <?php if ($sol2_block4_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol2_block4_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol2_block5_title || $sol2_block5_desc): ?>
          <div class="sol-block5">
            <?php if ($sol2_block5_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol2_block5_title); ?></p>
            <?php endif; ?>
            <?php if ($sol2_block5_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol2_block5_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <img class="right" src="<?php echo get_template_directory_uri(); ?>/assets/icons/right.svg" alt="right icon">
    </div>
    <div class="slider-nav">
      <span class="dot" data-index="0"></span>
      <span class="dot" data-index="1"></span>
      <span class="dot" data-index="2"></span>
      <span class="dot" data-index="3"></span>
      <span class="dot" data-index="4"></span>
    </div>

  </div>
</section>


<section class="solution-info">
  <div class="part1">
    <?php if ($sol3_title): ?>
      <div class="sol-title">
        <?php echo esc_html($sol3_title); ?>
      </div>
    <?php endif; ?>

    <?php if ($sol3_desc): ?>
      <div class="sol-desc">
        <?php echo esc_html($sol3_desc); ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="part2">
    <?php if ($sol3_subtitle): ?>
      <div class="sol-subtitle">
        <?php echo esc_html($sol3_subtitle); ?>
      </div>
    <?php endif; ?>

    <?php if ($sol3_sub_desc): ?>
      <div class="sol-subdesc">
        <?php echo esc_html($sol3_sub_desc); ?>
      </div>
    <?php endif; ?>

    <div class="sol-blocks">
      <img class="left" src="<?php echo get_template_directory_uri(); ?>/assets/icons/left.svg" alt="left icon">
      <div class="slider">

        <?php if ($sol3_block1_title || $sol3_block1_desc): ?>
          <div class="sol-block1">
            <?php if ($sol3_block1_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol3_block1_title); ?></p>
            <?php endif; ?>
            <?php if ($sol3_block1_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol3_block1_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol3_block2_title || $sol3_block2_desc): ?>
          <div class="sol-block2">
            <?php if ($sol3_block2_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol3_block2_title); ?></p>
            <?php endif; ?>
            <?php if ($sol3_block2_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol3_block2_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol3_block3_title || $sol3_block3_desc): ?>
          <div class="sol-block3">
            <?php if ($sol3_block3_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol3_block3_title); ?></p>
            <?php endif; ?>
            <?php if ($sol3_block3_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol3_block3_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol3_block4_title || $sol3_block4_desc): ?>
          <div class="sol-block4">
            <?php if ($sol3_block4_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol3_block4_title); ?></p>
            <?php endif; ?>
            <?php if ($sol3_block4_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol3_block4_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($sol3_block5_title || $sol3_block5_desc): ?>
          <div class="sol-block5">
            <?php if ($sol3_block5_title): ?>
              <p class="sol-block-title"><?php echo esc_html($sol3_block5_title); ?></p>
            <?php endif; ?>
            <?php if ($sol3_block5_desc): ?>
              <p class="sol-block-desc"><?php echo esc_html($sol3_block5_desc); ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <img class="right" src="<?php echo get_template_directory_uri(); ?>/assets/icons/right.svg" alt="right icon">
    </div>
    <div class="slider-nav">
      <span class="dot" data-index="0"></span>
      <span class="dot" data-index="1"></span>
      <span class="dot" data-index="2"></span>
      <span class="dot" data-index="3"></span>
      <span class="dot" data-index="4"></span>
    </div>

  </div>
</section>


<?php get_template_part('home-sections/section', '5'); ?>

<?php get_footer(); ?>