<footer>
  <div class="FooterContainer">
    <div class="FooterBlock1">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo site_url(); ?>/wp-content/uploads/2026/02/footer-logo.png" alt="Coleren Logo">
      </a>

    </div>
    <div class="FooterBlock2">
      <?php
      wp_nav_menu([
        'theme_location' => 'footer',
        'container'      => 'nav',
        'container_class' => 'footer-nav',
        'menu_class'     => 'menu-footer',
      ]);
      ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>