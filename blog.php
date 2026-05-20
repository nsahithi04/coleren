<?php
/*
Template Name: Blog page
*/
get_header();
// ===== Blog Cards (bc1 – bc6) =====

$read_link = get_field('read_link');
$sec2_title = get_field('blog_sec2_title');

// ===== Blog Section =====
$blog_greenbtn      = get_field('blog_greenbtn');
$blog_heading       = get_field('blog_heading');
$blog_desc          = get_field('blog_desc');

$blog_sec1_bg       = get_field('blog_sec1_bg');
$blog_sec1_tab_bg   = get_field('blog_sec1_tab_bg');
$blog_sec1_mob_bg   = get_field('blog_sec1_mob_bg');

?>
<style>
  :root {

    /* ===== Blog Section Backgrounds ===== */
    --blog-sec1-bg: url('<?php echo esc_url($blog_sec1_bg); ?>');
    --blog-sec1-tab-bg: url('<?php echo esc_url($blog_sec1_tab_bg); ?>');
    --blog-sec1-mob-bg: url('<?php echo esc_url($blog_sec1_mob_bg); ?>');

    /* ===== Blog Cards Images ===== */
    --bc1-img: url('<?php echo esc_url($bc1_img); ?>');
    --bc2-img: url('<?php echo esc_url($bc2_img); ?>');
    --bc3-img: url('<?php echo esc_url($bc3_img); ?>');
    --bc4-img: url('<?php echo esc_url($bc4_img); ?>');
    --bc5-img: url('<?php echo esc_url($bc5_img); ?>');
    --bc6-img: url('<?php echo esc_url($bc6_img); ?>');

  }
</style>

<section class="blog-sec1">
  <?php if ($blog_greenbtn): ?>
    <div class="greenButton2">
      <?php echo esc_html($blog_greenbtn); ?>
    </div>
  <?php endif; ?>

  <?php if ($blog_heading): ?>
    <p class="blog-title"><?php echo esc_html($blog_heading); ?></p>
  <?php endif; ?>

  <?php if ($blog_desc): ?>
    <p class="blog-desc"><?php echo esc_html($blog_desc); ?></p>
  <?php endif; ?>

</section>

<section class="blog-sec2">

  <?php if ($sec2_title): ?>
    <p class="blog-sec2-title"><?php echo esc_html($sec2_title); ?></p>
  <?php endif; ?>

  <div class="blog-container">


    <?php
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => -1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post(); ?>

        <div class="blog-item one">

          <!-- Image -->
          <div class="blog-img-wrap">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
              </a>
            <?php endif; ?>
          </div>

          <!-- Title -->
          <p class="blog-card-title">
            <?php the_title(); ?>
          </p>

          <!-- Description / Excerpt -->
          <div class="blog-card-desc">
            <?php the_excerpt(); ?>
          </div>

          <!-- Bottom row -->
          <div class="blog-bottom">

            <!-- Read more -->
            <a href="<?php the_permalink(); ?>" class="blog-card-link">
              Read more
            </a>

            <!-- Read time (optional, example text) -->
            <p class="blog-card-readtime">
              <?php echo wp_strip_all_tags(get_the_date()); ?>
            </p>

          </div>

        </div>

    <?php endwhile;
      wp_reset_postdata();
    endif;
    ?>
  </div>

</section>

<?php get_template_part('home-sections/section', '5'); ?>
<?php get_footer(); ?>