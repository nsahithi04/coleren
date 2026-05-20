# Coleren WordPress Theme

A custom WordPress theme built for the Coleren website.

## Requirements

- WordPress 5.0+
- PHP 7.4+
- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) plugin
- [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/) plugin

## Installation

1. Copy the `coleren` folder into `wp-content/themes/`.
2. In the WordPress admin, go to **Appearance > Themes** and activate **Coleren**.
3. Install and activate the Contact Form 7 and ACF plugins.

## Theme Structure

```
coleren/
├── assets/
│   ├── css/          # Page-specific stylesheets
│   ├── js/           # JavaScript files
│   └── icons/        # SVG icons and images
├── home-sections/    # Modular homepage sections (section-1 to section-5)
├── functions.php     # Asset enqueuing, menus, theme support, form handling
├── header.php        # Site header
├── footer.php        # Site footer
├── home.php          # Homepage template
├── blog.php          # Blog listing page
├── blog-item.php     # Single blog post template
├── single.php        # Single post fallback
├── solutions.php     # Solutions page template
├── contact.php       # Contact page template
└── index.php         # Default fallback template
```

## Page Templates

| Template | Slug |
|---|---|
| `home.php` | Home page |
| `blog.php` | Blog listing |
| `solutions.php` | Solutions |
| `contact.php` | Contact |

## Navigation Menus

Three menu locations are registered:

- **Primary** — main navigation
- **Footer** — footer links
- **Dropdown** — dropdown navigation

Assign menus under **Appearance > Menus**.

## Custom Fields (ACF)

The homepage sections are driven by ACF fields. Key fields used in Section 1:

| Field Key | Description |
|---|---|
| `highlight_button` | Small green badge text above the heading |
| `section_1_heading` | Main hero heading |
| `section_1_description` | Hero description text |
| `signup_button` | CTA button (link object) |
| `section_1_background` | Desktop background image URL |
| `sec1_mobile_bg` | Mobile background image URL |
| `sec1_tab_bg` | Tablet background image URL |

## Contact Form & Database

Form submissions are saved to a custom database table via a Contact Form 7 hook in `functions.php`.

- **Contact form** (CF7 ID `401`) → saves to `contact_messages` table (`full_name`, `email`, `phone`, `message`)
- **Beta signup form** (CF7 ID `506`) → saves to `beta_signups` table (`email`)

Mail sending is disabled; all submissions go directly to the database.

## Local Development

This theme is developed using [XAMPP](https://www.apachefriends.org/) as the local server.

1. Start Apache and MySQL in the XAMPP control panel.
2. Open `http://localhost/wordpress` in your browser.
3. Edit theme files in `wp-content/themes/coleren/`.
