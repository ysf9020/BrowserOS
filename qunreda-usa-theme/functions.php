<?php
/**
 * QUNREDA USA Theme Functions
 * 
 * @package QUNREDA_USA
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function qunreda_usa_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'qunreda-usa'),
        'footer' => __('Footer Menu', 'qunreda-usa'),
    ));
    
    // Add image sizes
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('product-thumbnail', 400, 300, true);
    add_image_size('team-member', 300, 300, true);
}
add_action('after_setup_theme', 'qunreda_usa_setup');

/**
 * Enqueue scripts and styles
 */
function qunreda_usa_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('qunreda-usa-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('qunreda-usa-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    
    // Enqueue main JavaScript
    wp_enqueue_script('qunreda-usa-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('qunreda-usa-script', 'qunreda_usa_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('qunreda_usa_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'qunreda_usa_scripts');

/**
 * Register widget areas
 */
function qunreda_usa_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area 1', 'qunreda-usa'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in the footer.', 'qunreda-usa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget Area 2', 'qunreda-usa'),
        'id' => 'footer-2',
        'description' => __('Add widgets here to appear in the footer.', 'qunreda-usa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget Area 3', 'qunreda-usa'),
        'id' => 'footer-3',
        'description' => __('Add widgets here to appear in the footer.', 'qunreda-usa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'qunreda_usa_widgets_init');

/**
 * Custom page templates
 */
function qunreda_usa_page_templates($templates) {
    $templates['page-wholesale.php'] = __('Wholesale Partnership Page', 'qunreda-usa');
    $templates['page-about.php'] = __('About Us Page', 'qunreda-usa');
    $templates['page-products.php'] = __('Products Page', 'qunreda-usa');
    $templates['page-contact.php'] = __('Contact Page', 'qunreda-usa');
    $templates['page-privacy.php'] = __('Privacy Policy Page', 'qunreda-usa');
    return $templates;
}
add_filter('theme_page_templates', 'qunreda_usa_page_templates');

/**
 * Handle wholesale application form submission
 */
function qunreda_usa_handle_wholesale_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'qunreda_usa_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $company_name = sanitize_text_field($_POST['company_name']);
    $website = esc_url_raw($_POST['website']);
    $contact_name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $business_type = sanitize_text_field($_POST['business_type']);
    $markets_served = sanitize_text_field($_POST['markets_served']);
    $experience = sanitize_text_field($_POST['experience']);
    $monthly_volume = sanitize_text_field($_POST['monthly_volume']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Prepare email content
    $subject = 'New Wholesale Partnership Application - ' . $company_name;
    $email_content = "
    New wholesale partnership application received:
    
    Company Name: {$company_name}
    Website: {$website}
    Contact Person: {$contact_name}
    Email: {$email}
    Phone: {$phone}
    Business Type: {$business_type}
    Markets Served: {$markets_served}
    Experience: {$experience}
    Expected Monthly Volume: {$monthly_volume}
    
    Message:
    {$message}
    ";
    
    // Send email
    $to = get_option('admin_email');
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $email_content, $headers);
    
    if ($sent) {
        wp_send_json_success('Application submitted successfully! We will contact you within 24 hours.');
    } else {
        wp_send_json_error('Failed to submit application. Please try again or contact us directly.');
    }
}
add_action('wp_ajax_wholesale_application', 'qunreda_usa_handle_wholesale_form');
add_action('wp_ajax_nopriv_wholesale_application', 'qunreda_usa_handle_wholesale_form');

/**
 * Handle contact form submission
 */
function qunreda_usa_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'qunreda_usa_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Prepare email content
    $email_subject = 'New Contact Form Submission - ' . $subject;
    $email_content = "
    New contact form submission received:
    
    Name: {$first_name} {$last_name}
    Email: {$email}
    Phone: {$phone}
    Company: {$company}
    Subject: {$subject}
    
    Message:
    {$message}
    ";
    
    // Send email
    $to = get_option('admin_email');
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $email_subject, $email_content, $headers);
    
    if ($sent) {
        wp_send_json_success('Message sent successfully! We will get back to you within 24 hours.');
    } else {
        wp_send_json_error('Failed to send message. Please try again or contact us directly.');
    }
}
add_action('wp_ajax_contact_form', 'qunreda_usa_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'qunreda_usa_handle_contact_form');

/**
 * Add custom meta boxes for page templates
 */
function qunreda_usa_add_meta_boxes() {
    add_meta_box(
        'qunreda_usa_page_options',
        'Page Options',
        'qunreda_usa_page_options_callback',
        'page',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'qunreda_usa_add_meta_boxes');

function qunreda_usa_page_options_callback($post) {
    wp_nonce_field('qunreda_usa_save_meta_box', 'qunreda_usa_meta_box_nonce');
    
    $hero_title = get_post_meta($post->ID, '_hero_title', true);
    $hero_subtitle = get_post_meta($post->ID, '_hero_subtitle', true);
    $hide_header = get_post_meta($post->ID, '_hide_header', true);
    
    echo '<p><label for="hero_title">Hero Title:</label><br>';
    echo '<input type="text" id="hero_title" name="hero_title" value="' . esc_attr($hero_title) . '" style="width: 100%;"></p>';
    
    echo '<p><label for="hero_subtitle">Hero Subtitle:</label><br>';
    echo '<textarea id="hero_subtitle" name="hero_subtitle" style="width: 100%; height: 60px;">' . esc_textarea($hero_subtitle) . '</textarea></p>';
    
    echo '<p><label><input type="checkbox" name="hide_header" value="1" ' . checked($hide_header, '1', false) . '> Hide Page Header</label></p>';
}

function qunreda_usa_save_meta_box($post_id) {
    if (!isset($_POST['qunreda_usa_meta_box_nonce']) || !wp_verify_nonce($_POST['qunreda_usa_meta_box_nonce'], 'qunreda_usa_save_meta_box')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['hero_title'])) {
        update_post_meta($post_id, '_hero_title', sanitize_text_field($_POST['hero_title']));
    }
    
    if (isset($_POST['hero_subtitle'])) {
        update_post_meta($post_id, '_hero_subtitle', sanitize_textarea_field($_POST['hero_subtitle']));
    }
    
    $hide_header = isset($_POST['hide_header']) ? '1' : '0';
    update_post_meta($post_id, '_hide_header', $hide_header);
}
add_action('save_post', 'qunreda_usa_save_meta_box');

/**
 * Custom excerpt length
 */
function qunreda_usa_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'qunreda_usa_excerpt_length');

/**
 * Custom excerpt more
 */
function qunreda_usa_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'qunreda_usa_excerpt_more');

/**
 * Add custom body classes
 */
function qunreda_usa_body_classes($classes) {
    if (is_page_template('page-wholesale.php')) {
        $classes[] = 'wholesale-page';
    }
    
    if (is_page_template('page-products.php')) {
        $classes[] = 'products-page';
    }
    
    return $classes;
}
add_filter('body_class', 'qunreda_usa_body_classes');

/**
 * Security enhancements
 */
function qunreda_usa_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'qunreda_usa_security_headers');

/**
 * Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Custom login logo
 */
function qunreda_usa_login_logo() {
    echo '<style type="text/css">
        #login h1 a {
            background-image: url(' . get_template_directory_uri() . '/assets/images/logo.png) !important;
            background-size: contain !important;
            width: 300px !important;
            height: 80px !important;
        }
    </style>';
}
add_action('login_head', 'qunreda_usa_login_logo');

/**
 * Custom login logo URL
 */
function qunreda_usa_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'qunreda_usa_login_logo_url');

/**
 * Custom login logo title
 */
function qunreda_usa_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter('login_headertext', 'qunreda_usa_login_logo_url_title');