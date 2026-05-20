<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <style>
      :root {
        --blog-item-bg: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>');
      }
    </style>

    <section
      class=" blog-title-wrap">
      <p class="blog-title">
        <?php the_title(); ?>
      </p>
    </section>

    <section class="blog-item-post">

      <div class="blog-item-content">
        <?php the_content(); ?>
      </div>

    </section>

<?php endwhile;
endif; ?>

<?php get_template_part('home-sections/section', '5'); ?>

<?php get_footer(); ?>