
<?php

function load_css()
{
  wp_register_style('common-hf', get_template_directory_uri() . '/assets/css/common-hf.css', array(), false, 'all');
  wp_register_style('home', get_template_directory_uri() . '/assets/css/home.css', array(), false, 'all');
  wp_register_style('solution', get_template_directory_uri() . '/assets/css/solutions.css', array(), false, 'all');
  wp_register_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), false, 'all');
  wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), false, 'all');

  wp_enqueue_style('common-hf');
  wp_enqueue_style('home');
  wp_enqueue_style('solution');
  wp_enqueue_style('blog');
  wp_enqueue_style('contact');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
  wp_register_script('commonjs', get_template_directory_uri() . '/assets/js/common.js', array(), false, true);
  wp_register_script('homejs', get_template_directory_uri() . '/assets/js/home.js', array(), false, true);
  wp_register_script('soljs', get_template_directory_uri() . '/assets/js/solutions.js', array(), false, true);

  wp_enqueue_script('homejs');
  wp_enqueue_script('commonjs');
  wp_enqueue_script('soljs');
}

add_action('wp_enqueue_scripts', 'load_js');

function theme_register_menus()
{
  register_nav_menus([
    'primary' => __('Primary Menu', 'textdomain'),
    'footer'  => __('Footer Menu', 'coleren'),
    'dropdown'  => __('drop down', 'coleren'),
  ]);
}
add_action('after_setup_theme', 'theme_register_menus');


function coleren_theme_setup()
{
  add_theme_support('custom-logo');
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'coleren_theme_setup');

function mytheme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');

add_action('wpcf7_before_send_mail', 'save_forms_to_db');

function save_forms_to_db($contact_form) {

    global $wpdb;

    $form_id = $contact_form->id();
    $submission = WPCF7_Submission::get_instance();

    if (!$submission) return;

    $data = $submission->get_posted_data();

    // CONTACT FORM
    if ($form_id == 401) {

        $wpdb->insert(
            'contact_messages',
            array(
                'full_name' => sanitize_text_field($data['your-name']),
                'email'     => sanitize_email($data['your-email']),
                'phone'     => sanitize_text_field($data['phone-number']),
                'message'   => sanitize_textarea_field($data['your-message']),
            )
        );
    }

    // BETA SIGNUP
    if ($form_id == 506) {

        $wpdb->insert(
            'beta_signups',
            array(
                'email' => sanitize_email($data['your-email']),
            )
        );
    }
}

add_filter('wpcf7_skip_mail', '__return_true');
