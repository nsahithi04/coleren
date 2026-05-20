<?php
/*
Template Name: blog item page
*/
get_header();

// Section 1 – Blog
$sec1_blog_title = get_field('sec1_blog_title');
$sec1_blog_desc = get_field('sec1_blog_desc');
$sec1_blog_img = get_field('sec1_blog_img');

// Blog images
$img1_blog = get_field('img1_blog');
$img2_blog = get_field('img2_blog');
$img3_blog = get_field('img3_blog');
$img4_blog = get_field('img4_blog');

?>

<style>
  :root {
    --sec1-blog-img: url('<?php echo esc_url($sec1_blog_img); ?>');
    --img1-blog: url('<?php echo esc_url($img1_blog); ?>');
    --img2-blog: url('<?php echo esc_url($img2_blog); ?>');
    --img3-blog: url('<?php echo esc_url($img3_blog); ?>');
    --img4-blog: url('<?php echo esc_url($img4_blog); ?>');
  }
</style>

<section class="blog-sec1 blog-items-sec1">
  <p class="blog-title"> <?php echo esc_html($sec1_blog_title); ?></p>
  <p class="blog-desc"><?php echo esc_html($sec1_blog_desc); ?></p>
</section>

<section class="blog-item-sec1">
  <div class="one top">
    <h3>Overview</h3>
    <p>Automation is undergoing a fundamental transformation. For years, software focused on speeding up tasks: logging data, triggering workflows, and reducing manual effort. Useful, yes—but limited. Today, we’re entering a new phase: the agentic shift, where systems don’t just execute instructions but actively reason, decide, and act on behalf of users.</p>
    <p>This shift is redefining how products are built, how teams work, and what we expect from technology itself.</p>
    <div> <img src="<?php echo esc_url($img1_blog); ?>" alt="blog img">
      <p>Automation is undergoing a fundamental transformation.</p>
    </div>
  </div>
</section>

<section class="blog-item-sec1">
  <div class="one two">
    <h3>From Tools to Agents</h3>
    <p>Traditional automation follows predefined rules. If X happens, do Y. While powerful at scale, this model breaks down in complex, fast-changing environments—like sales, customer support, operations, or product management—where context matters and no two situations are exactly the same.</p>
    <p>Agentic systems change that dynamic.</p>
    <p>Instead of waiting for explicit instructions, agentic software:</p>
    <ul>
      <li>Interprets goals rather than rigid rules</li>
      <li>Evaluates context and constraints in real time</li>
      <li>Chooses actions dynamically</li>
      <li>Learns from outcomes and adapts over time</li>
    </ul>
    <p>In short, these systems behave less like tools and more like digital collaborators.</p>
  </div>
</section>

<section class="blog-item-sec1">
  <div class="one two">
    <h3>What “Agentic” Really Means</h3>
    <p>The term agentic refers to a system’s ability to act with a degree of autonomy in pursuit of an objective. This doesn’t mean replacing humans or acting without oversight. It means delegation at a higher level.</p>
    <p>Rather than telling software how to do something step by step, users define what they want to achieve:</p>
    <ul>
      <li>“Move deals forward efficiently”</li>
      <li>“Improve conversion rates”</li>
      <li>“Reduce churn risk”</li>
      <li>“Respond to customers faster”</li>
    </ul>
    <p>The system then determines the best sequence of actions to achieve that outcome—surfacing recommendations, taking action when permitted, and escalating when human judgment is needed.</p>
    <div> <img src="<?php echo esc_url($img2_blog); ?>" alt="blog img">
      <p>The system then determines the best sequence of actions to achieve that outcome</p>
    </div>
  </div>
</section>

<?php get_template_part('home-sections/section', '5'); ?>

<?php get_footer(); ?>