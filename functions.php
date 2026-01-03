<?php

add_theme_support('post-thumbnails');

/**
 * Create custom database table for form submissions
 */
function create_form_submissions_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'form_submissions';
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        full_name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        phone varchar(100) NOT NULL,
        location varchar(255) DEFAULT NULL,
        message text DEFAULT NULL,
        form_type varchar(100) DEFAULT 'contact_form',
        form_data longtext DEFAULT NULL,
        ip_address varchar(45) DEFAULT NULL,
        user_agent text DEFAULT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP,
        status varchar(20) DEFAULT 'new',
        PRIMARY KEY (id),
        KEY email (email),
        KEY submitted_at (submitted_at),
        KEY status (status)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

/**
 * Check and create table on theme activation or if it doesn't exist
 */
function check_form_submissions_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_submissions';
    
    // Check if table exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        create_form_submissions_table();
    }
}

// Create table on theme activation
add_action('after_switch_theme', 'create_form_submissions_table');

// Check table exists on admin init (for manual creation if needed)
add_action('admin_init', 'check_form_submissions_table');

// Create table immediately if it doesn't exist (on first load)
check_form_submissions_table();

/**
 * Get form submissions from database
 * 
 * @param array $args Optional arguments for query
 * @return array Array of submission objects
 */
function get_form_submissions($args = array()) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_submissions';
    
    // Default arguments
    $defaults = array(
        'limit' => 50,
        'offset' => 0,
        'status' => '',
        'orderby' => 'submitted_at',
        'order' => 'DESC'
    );
    
    $args = wp_parse_args($args, $defaults);
    
    $where = '1=1';
    if (!empty($args['status'])) {
        $where .= $wpdb->prepare(' AND status = %s', $args['status']);
    }
    
    $orderby = sanitize_sql_orderby($args['orderby'] . ' ' . $args['order']);
    if (!$orderby) {
        $orderby = 'submitted_at DESC';
    }
    
    $limit = absint($args['limit']);
    $offset = absint($args['offset']);
    
    $query = "SELECT * FROM $table_name WHERE $where ORDER BY $orderby LIMIT $limit OFFSET $offset";
    
    return $wpdb->get_results($query);
}

/**
 * Get total count of form submissions
 * 
 * @param string $status Optional status filter
 * @return int Count of submissions
 */
function get_form_submissions_count($status = '') {
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_submissions';
    
    if (!empty($status)) {
        return $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM $table_name WHERE status = %s",
            $status
        ));
    }
    
    return $wpdb->get_var("SELECT COUNT(*) FROM $table_name");
}

/**
 * Enqueue AJAX form handler script
 */
function enqueue_ajax_form_handler() {
    wp_enqueue_script(
        'ajax-form-handler',
        get_template_directory_uri() . '/assets/js/ajax-form-handler.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // Localize script with AJAX URL and nonce
    wp_localize_script('ajax-form-handler', 'ajaxurl', admin_url('admin-ajax.php'));
    wp_localize_script('ajax-form-handler', 'ajaxFormNonce', wp_create_nonce('ajax_form_nonce'));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_form_handler');

/**
 * Handle AJAX form submission
 */
function handle_ajax_form_submission() {
    // Verify nonce (check both 'nonce' and '_ajax_nonce' parameters)
    $nonce = isset($_POST['nonce']) ? $_POST['nonce'] : (isset($_POST['_ajax_nonce']) ? $_POST['_ajax_nonce'] : '');
    if (!wp_verify_nonce($nonce, 'ajax_form_nonce')) {
        wp_send_json_error(array(
            'message' => 'Security check failed. Please refresh the page and try again.'
        ));
    }

    // Get form data
    $form_data = array();
    
    // Collect all POST data except WordPress-specific fields
    foreach ($_POST as $key => $value) {
        if ($key !== 'action' && $key !== 'nonce' && $key !== '_wp_http_referer') {
            $form_data[sanitize_text_field($key)] = sanitize_text_field($value);
        }
    }

    // Validate required fields
    $required_fields = array('full_name', 'phone', 'email_address', 'location');
    $errors = array();

    // Check for required fields (flexible matching)
    $has_name = false;
    $has_phone = false;
    $has_email = false;
    $has_location = false;

    foreach ($form_data as $key => $value) {
        $key_lower = strtolower($key);
        if (strpos($key_lower, 'name') !== false && !empty($value)) {
            $has_name = true;
        }
        if (strpos($key_lower, 'phone') !== false && !empty($value)) {
            $has_phone = true;
        }
        if (strpos($key_lower, 'email') !== false && !empty($value)) {
            if (is_email($value)) {
                $has_email = true;
            } else {
                $errors[] = 'Please enter a valid email address.';
            }
        }
        if (strpos($key_lower, 'location') !== false && !empty($value)) {
            $has_location = true;
        }
    }

    if (!$has_name) {
        $errors[] = 'Name is required.';
    }
    if (!$has_phone) {
        $errors[] = 'Phone is required.';
    }
    if (!$has_email) {
        $errors[] = 'Valid email address is required.';
    }
    if (!$has_location) {
        $errors[] = 'Location is required.';
    }

    // If there are errors, return them
    if (!empty($errors)) {
        wp_send_json_error(array(
            'message' => implode(' ', $errors)
        ));
    }

    // Prepare email
    $to = get_option('admin_email'); // Default to admin email
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    
    // Build email message
    $message = "New form submission from " . get_bloginfo('name') . "\n\n";
    $message .= "Form Details:\n";
    $message .= "----------------\n\n";
    
    foreach ($form_data as $key => $value) {
        if (!empty($value)) {
            $label = ucwords(str_replace('_', ' ', $key));
            $message .= $label . ": " . $value . "\n";
        }
    }
    
    $message .= "\n";
    $message .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
    $message .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

    // Email headers
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>'
    );

    // Save to database table
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_submissions';
    
    // Ensure table exists
    check_form_submissions_table();
    
    // Extract common fields
    $full_name = '';
    $email = '';
    $phone = '';
    $location = '';
    $message = '';
    $form_type = isset($form_data['form_type']) ? sanitize_text_field($form_data['form_type']) : 'contact_form';
    
    // Find name field
    foreach ($form_data as $key => $value) {
        $key_lower = strtolower($key);
        if (strpos($key_lower, 'name') !== false && empty($full_name)) {
            $full_name = sanitize_text_field($value);
        }
        if (strpos($key_lower, 'email') !== false && empty($email)) {
            $email = sanitize_email($value);
        }
        if (strpos($key_lower, 'phone') !== false && empty($phone)) {
            $phone = sanitize_text_field($value);
        }
        if (strpos($key_lower, 'location') !== false && empty($location)) {
            $location = sanitize_text_field($value);
        }
        if (strpos($key_lower, 'message') !== false && empty($message)) {
            $message = sanitize_textarea_field($value);
        }
    }
    
    // Get IP address and user agent
    $ip_address = isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field($_SERVER['REMOTE_ADDR']) : '';
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? sanitize_text_field($_SERVER['HTTP_USER_AGENT']) : '';
    
    // Store all form data as JSON
    $form_data_json = json_encode($form_data);
    
    // Insert into database
    $insert_result = $wpdb->insert(
        $table_name,
        array(
            'full_name' => $full_name,
            'email' => $email,
            'phone' => $phone,
            'location' => $location,
            'message' => $message,
            'form_type' => $form_type,
            'form_data' => $form_data_json,
            'ip_address' => $ip_address,
            'user_agent' => $user_agent,
            'submitted_at' => current_time('mysql'),
            'status' => 'new'
        ),
        array(
            '%s', // full_name
            '%s', // email
            '%s', // phone
            '%s', // location
            '%s', // message
            '%s', // form_type
            '%s', // form_data
            '%s', // ip_address
            '%s', // user_agent
            '%s', // submitted_at
            '%s'  // status
        )
    );
    
    // Try to send email
    $email_sent = wp_mail($to, $subject, $message, $headers);
    
    // Send response (success even if email fails, as long as DB save succeeded)
    if ($insert_result !== false) {
        wp_send_json_success(array(
            'message' => 'Thank you! Your message has been sent successfully. We will get back to you soon.',
            'submission_id' => $wpdb->insert_id
        ));
    } else {
        // Log error if database insert fails
        error_log('Form submission database error: ' . $wpdb->last_error);
        wp_send_json_error(array(
            'message' => 'Sorry, there was an error saving your message. Please try again or contact us directly.'
        ));
    }
}
add_action('wp_ajax_submit_contact_form', 'handle_ajax_form_submission');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_ajax_form_submission');