<?php
require_once get_template_directory() . '/sentry-init.php';

// Theme setup: register menu
add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary-menu' => __('Top Menu', 'nrc')
    ]);
});

// Load Bootstrap + custom styles
add_action('wp_enqueue_scripts', function () {
    $uri  = get_template_directory_uri();
    $dir  = get_template_directory();

    // Always load Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    
    // Load Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], '5.3.2', true);
    
    // Load Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    
    // Load Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Source+Sans+3:wght@400;600&family=Poppins:wght@400;600&display=swap');

    // Load index.css only on front page
    if (is_front_page() || is_home()) {
        wp_enqueue_style(
            'nrc-index-style',
            "$uri/assets/css/index.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/index.css"),
            'all'
        );
    }

    // Load about.css only on about page template
    if (is_page_template(['about.php'])) {
        wp_enqueue_style(
            'nrc-about-style',
            "$uri/assets/css/about.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/about.css"),
            'all'
        );
    }

    // Load naat-rang.css only on naat-rang page template
    if (is_page_template('naat-rang.php')) {
        wp_enqueue_style(
            'nrc-naat-rang-style',
            "$uri/assets/css/naat-rang.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/naat-rang.css"),
            'all'
        );
    }

    // Load research.css only on research page template
    if (is_page_template('research.php')) {
        wp_enqueue_style(
            'nrc-research-style',
            "$uri/assets/css/research.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/research.css"),
            'all'
        );
    }

    // Load articles.css only on Articles page template
    if (is_page_template('articles.php')) {
        wp_enqueue_style(
            'nrc-articles-style',
            "$uri/assets/css/articles.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/articles.css"),
            'all'
        );
    }

    // Load authors.css only on Authors page template
    if (is_page_template('authors.php')) {
        wp_enqueue_style(
            'nrc-authors-style',
            "$uri/assets/css/authors.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/authors.css"),
            'all'
        );
    }

    // Load books.css only on books page template
    if (is_page_template('books.php')) {
        wp_enqueue_style(
            'nrc-books-style',
            "$uri/assets/css/books.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/books.css"),
            'all'
        );
    }

    // Load programs.css only on programs page template
    if (is_page_template('programs.php')) {
        wp_enqueue_style(
            'nrc-programs-style',
            "$uri/assets/css/programs.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/programs.css"),
            'all'
        );
    }

    // Load founder.css only on founder page template
    if (is_page_template('founder.php')) {
        wp_enqueue_style(
            'nrc-founder-style',
            "$uri/assets/css/founder.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/founder.css"),
            'all'
        );
    }

    // Load team.css only on team page template
    if (is_page_template('team.php')) {
        wp_enqueue_style(
            'nrc-team-style',
            "$uri/assets/css/team.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/team.css"),
            'all'
        );
    }

    // News & Events page
    if (is_page('news-events')) {
        wp_enqueue_style(
            'nrc-news-events-style',
            "$uri/assets/css/page-news-events.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/page-news-events.css"),
            'all'
        );
    }

    // Load contact.css only on contact page template
    if (is_page_template('contact.php')) {
        wp_enqueue_style(
            'nrc-contact-style',
            "$uri/assets/css/contact.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/contact.css"),
            'all'
        );
    }

    // Load testimonials.css on homepage (index.php), blog (home.php), and programs template
    if (is_front_page() || is_home() || is_page_template('programs.php')) {
        wp_enqueue_style(
            'nrc-testimonials-style',
            "$uri/assets/css/testimonials.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/testimonials.css"),
            'all'
        );
    }

    // Load cta-section.css on About, Authors, and Team page templates
    if (is_page_template('about.php') || is_page_template('authors.php') || is_page_template('team.php')) {
        wp_enqueue_style(
            'nrc-cta-section-style',
            "$uri/assets/css/cta-section.css",
            ['bootstrap-css'],
            filemtime("$dir/assets/css/cta-section.css"),
            'all'
        );
    }

    // Always load footer CSS
    wp_enqueue_style(
        'nrc-footer-style',
        "$uri/assets/css/footer.css",
        ['bootstrap-css'],
        filemtime("$dir/assets/css/footer.css"),
        'all'
    );
});

// Swiper assets for books
function enqueue_swiper_assets() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

// Sentry test
add_action('init', function () {
    if (function_exists('\Sentry\captureMessage')) {
        \Sentry\captureMessage('Test Sentry error from local!');
    }
});

// Register Research Submission Post Type
function register_research_submission_post_type() {
    $labels = array(
        'name'                  => 'Research Submissions',
        'singular_name'         => 'Research Submission',
        'menu_name'             => 'Research Submissions',
        'name_admin_bar'        => 'Research Submission',
        'archives'              => 'Research Archives',
        'attributes'            => 'Research Attributes',
        'parent_item_colon'     => 'Parent Research:',
        'all_items'             => 'All Submissions',
        'add_new_item'          => 'Add New Research',
        'add_new'               => 'Add New',
        'new_item'              => 'New Research',
        'edit_item'             => 'Edit Research',
        'update_item'           => 'Update Research',
        'view_item'             => 'View Research',
        'view_items'            => 'View Research',
        'search_items'          => 'Search Research',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into research',
        'uploaded_to_this_item' => 'Uploaded to this research',
        'items_list'            => 'Research list',
        'items_list_navigation' => 'Research list navigation',
        'filter_items_list'     => 'Filter research list',
    );
    
    $args = array(
        'label'                 => 'Research Submission',
        'description'           => 'Research submissions from users',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'custom-fields'),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-book-alt',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'capabilities'          => array(
            'create_posts' => 'manage_options',
        ),
        'map_meta_cap'          => true,
        'rewrite'               => array(
            'slug' => 'research',
            'with_front' => false,
        ),
    );
    
    register_post_type('research_submission', $args);
}
add_action('init', 'register_research_submission_post_type', 0);

// Flush rewrite rules on theme activation
function research_submission_flush_rewrite_rules() {
    register_research_submission_post_type();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'research_submission_flush_rewrite_rules');

// Modify query to show only published research on frontend
function modify_research_submission_query($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_post_type_archive('research_submission') || $query->get('post_type') == 'research_submission') {
            $query->set('post_status', 'publish');
        }
    }
}
add_action('pre_get_posts', 'modify_research_submission_query');

// AJAX Handler for Research Submission - FIXED VERSION
add_action('wp_ajax_submit_research', 'handle_research_submission_ajax');
add_action('wp_ajax_nopriv_submit_research', 'handle_research_submission_ajax');

function handle_research_submission_ajax() {
    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    try {
        // Log the start of the function
        error_log('Research submission AJAX handler started');
        
        // Include required WordPress files
        if (!function_exists('wp_handle_upload')) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
        }
        if (!function_exists('wp_generate_attachment_metadata')) {
            require_once(ABSPATH . 'wp-admin/includes/image.php');
        }
        if (!function_exists('media_handle_upload')) {
            require_once(ABSPATH . 'wp-admin/includes/media.php');
        }
        
        // Log received data
        error_log('POST data: ' . print_r($_POST, true));
        error_log('FILES data: ' . print_r($_FILES, true));
        
        // Verify nonce for security
        if (!isset($_POST['research_nonce'])) {
            error_log('Nonce not provided');
            wp_send_json_error(array(
                'message' => 'Security verification failed. Nonce not provided.',
                'status' => 'error'
            ));
            return;
        }
        
        if (!wp_verify_nonce($_POST['research_nonce'], 'submit_research')) {
            error_log('Nonce verification failed');
            wp_send_json_error(array(
                'message' => 'Security verification failed. Please refresh the page and try again.',
                'status' => 'error'
            ));
            return;
        }
        
        // Sanitize and validate input
        $title = isset($_POST['research_title']) ? sanitize_text_field($_POST['research_title']) : '';
        $category = isset($_POST['research_category']) ? sanitize_text_field($_POST['research_category']) : '';
        $content = isset($_POST['research_content']) ? sanitize_textarea_field($_POST['research_content']) : '';
        $author = isset($_POST['author_name']) ? sanitize_text_field($_POST['author_name']) : '';
        $email = isset($_POST['author_email']) ? sanitize_email($_POST['author_email']) : '';
        $date = isset($_POST['submission_date']) ? sanitize_text_field($_POST['submission_date']) : '';
        $language = isset($_POST['research_language']) ? sanitize_text_field($_POST['research_language']) : 'english';
        
        // Log sanitized data
        error_log("Sanitized data - Title: $title, Category: $category, Author: $author, Email: $email, Language: $language");
        
        // Basic validation
        if (empty($title) || empty($content) || empty($author) || empty($email) || empty($date)) {
            error_log('Required fields missing');
            wp_send_json_error(array(
                'message' => 'All fields are required. Please fill in all the form fields.',
                'status' => 'error'
            ));
            return;
        }
        
        // Validate email
        if (!is_email($email)) {
            error_log('Invalid email format');
            wp_send_json_error(array(
                'message' => 'Please enter a valid email address.',
                'status' => 'error'
            ));
            return;
        }
        
        // Validate language
        if (!in_array($language, ['english', 'urdu'])) {
            error_log('Invalid language');
            wp_send_json_error(array(
                'message' => 'Please select a valid language.',
                'status' => 'error'
            ));
            return;
        }
        
        // File validation
        if (empty($_FILES['research_file']['name'])) {
            error_log('No file uploaded');
            wp_send_json_error(array(
                'message' => 'Please upload a PDF file.',
                'status' => 'error'
            ));
            return;
        }
        
        // Validate file type and size
        $file = $_FILES['research_file'];
        
        // Check for upload errors
        if ($file['error'] !== UPLOAD_ERR_OK) {
            error_log('File upload error: ' . $file['error']);
            wp_send_json_error(array(
                'message' => 'File upload failed. Error code: ' . $file['error'],
                'status' => 'error'
            ));
            return;
        }
        
        $file_type = $file['type'];
        $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
        error_log("File details - Type: $file_type, Extension: $file_extension, Size: " . $file['size']);
        
        if ($file_type !== 'application/pdf' || $file_extension !== 'pdf') {
            error_log('Invalid file type');
            wp_send_json_error(array(
                'message' => 'Only PDF files are allowed.',
                'status' => 'error'
            ));
            return;
        }
        
        if ($file['size'] > 10 * 1024 * 1024) {
            error_log('File too large');
            wp_send_json_error(array(
                'message' => 'File size must be less than 10MB.',
                'status' => 'error'
            ));
            return;
        }
        
        // Create the post
        $post_data = array(
            'post_title'   => $title,
            'post_content' => $content,
            'post_type'    => 'research_submission',
            'post_status'  => 'pending',
            'post_author'  => get_current_user_id() ?: 1,
        );
        
        error_log('Creating post with data: ' . print_r($post_data, true));
        
        $post_id = wp_insert_post($post_data);
        
        if (is_wp_error($post_id)) {
            error_log('Post creation failed: ' . $post_id->get_error_message());
            wp_send_json_error(array(
                'message' => 'Failed to create research submission: ' . $post_id->get_error_message(),
                'status' => 'error'
            ));
            return;
        }
        
        if (!$post_id) {
            error_log('Post creation returned false');
            wp_send_json_error(array(
                'message' => 'Failed to create research submission post.',
                'status' => 'error'
            ));
            return;
        }
        
        error_log("Post created successfully with ID: $post_id");
        
        // Save custom fields
        update_post_meta($post_id, 'author_name', $author);
        update_post_meta($post_id, 'author_email', $email);
        update_post_meta($post_id, 'submission_date', $date);
        update_post_meta($post_id, 'research_detail', $content);
        update_post_meta($post_id, 'research_category', $category);
        update_post_meta($post_id, 'research_language', $language);
        
        error_log('Custom fields saved');

        // Handle file upload using WordPress functions
        $upload_overrides = array(
            'test_form' => false,
            'mimes' => array('pdf' => 'application/pdf')
        );
        
        $movefile = wp_handle_upload($file, $upload_overrides);
        
        if (!$movefile || isset($movefile['error'])) {
            error_log('File upload failed: ' . ($movefile['error'] ?? 'Unknown error'));
            // Delete the post if file upload fails
            wp_delete_post($post_id, true);
            wp_send_json_error(array(
                'message' => 'File upload failed: ' . ($movefile['error'] ?? 'Unknown error'),
                'status' => 'error'
            ));
            return;
        }
        
        error_log('File uploaded successfully: ' . print_r($movefile, true));
        
        // Create attachment
        $attachment_data = array(
            'post_mime_type' => $movefile['type'],
            'post_title'     => sanitize_file_name($file['name']),
            'post_content'   => '',
            'post_status'    => 'inherit',
            'post_parent'    => $post_id
        );
        
        $attach_id = wp_insert_attachment($attachment_data, $movefile['file'], $post_id);
        
        if (!is_wp_error($attach_id) && $attach_id) {
            $attach_data = wp_generate_attachment_metadata($attach_id, $movefile['file']);
            wp_update_attachment_metadata($attach_id, $attach_data);
            update_post_meta($post_id, 'research_file', $attach_id);
            error_log("Attachment created with ID: $attach_id");
        } else {
            error_log('Attachment creation failed');
        }
        
        // Send email notifications
        send_research_submission_emails($post_id, $title, $author, $email, $date, $content, $category, $language);
        
        error_log('Email notifications sent');
        
        // Send success response
        wp_send_json_success(array(
            'message' => 'Thank you for submitting your research. We will review it shortly and contact you via email.',
            'status' => 'success',
            'post_id' => $post_id
        ));
        
    } catch (Exception $e) {
        error_log('Research submission AJAX exception: ' . $e->getMessage());
        error_log('Stack trace: ' . $e->getTraceAsString());
        
        wp_send_json_error(array(
            'message' => 'An unexpected error occurred. Please try again. Error: ' . $e->getMessage(),
            'status' => 'error'
        ));
    } catch (Error $e) {
        error_log('Research submission AJAX fatal error: ' . $e->getMessage());
        error_log('Stack trace: ' . $e->getTraceAsString());
        
        wp_send_json_error(array(
            'message' => 'A system error occurred. Please try again. Error: ' . $e->getMessage(),
            'status' => 'error'
        ));
    }
}

// Enhanced email notification function
function send_research_submission_emails($post_id, $title, $author, $email, $date, $content, $category = '', $language = 'english') {
    $site_name = get_bloginfo('name');
    $admin_email = get_option('admin_email');
    
    // Email to admin
    if ($admin_email) {
        $admin_subject = 'New Research Submission Received - ' . $site_name;
        $admin_message = "Assalamualaikum,\n\n";
        $admin_message .= "A new research submission has been received on " . $site_name . ":\n\n";
        $admin_message .= "Title: " . $title . "\n";
        $admin_message .= "Author: " . $author . "\n";
        $admin_message .= "Email: " . $email . "\n";
        $admin_message .= "Category: " . $category . "\n";
        $admin_message .= "Language: " . ucfirst($language) . "\n";
        $admin_message .= "Submission Date: " . $date . "\n\n";
        $admin_message .= "Content:\n" . $content . "\n\n";
        $admin_message .= "You can review this submission in the WordPress admin panel at:\n";
        $admin_message .= admin_url('post.php?post=' . $post_id . '&action=edit') . "\n\n";
        $admin_message .= "Regards,\n" . $site_name;
        
        $admin_headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . $site_name . ' <' . $admin_email . '>'
        );
        
        wp_mail($admin_email, $admin_subject, $admin_message, $admin_headers);
    }
    
    // Confirmation email to submitter
    $user_subject = 'Research Submission Confirmation - ' . $site_name;
    $user_message = "Assalamualaikum " . $author . ",\n\n";
    $user_message .= "Thank you for submitting your research to " . $site_name . ".\n\n";
    $user_message .= "We have received your submission:\n";
    $user_message .= "Title: " . $title . "\n";
    $user_message .= "Category: " . $category . "\n";
    $user_message .= "Language: " . ucfirst($language) . "\n";
    $user_message .= "Submission Date: " . $date . "\n\n";
    $user_message .= "Your research is now under review by our academic committee. ";
    $user_message .= "We will contact you via email once the review process is complete.\n\n";
    $user_message .= "If you have any questions, please feel free to contact us.\n\n";
    $user_message .= "Regards,\n" . $site_name . "\n";
    $user_message .= "Email: " . $admin_email;
    
    $user_headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $site_name . ' <' . $admin_email . '>'
    );
    
    wp_mail($email, $user_subject, $user_message, $user_headers);
}

// Add custom columns to research submissions admin list
function add_research_submission_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = $columns['title'];
    $new_columns['research_category'] = 'Category';
    $new_columns['research_language'] = 'Language';
    $new_columns['author_name'] = 'Author';
    $new_columns['author_email'] = 'Email';
    $new_columns['submission_date'] = 'Submitted';
    $new_columns['research_file'] = 'File';
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_research_submission_posts_columns', 'add_research_submission_columns');

// Populate custom columns
function populate_research_submission_columns($column, $post_id) {
    switch ($column) {
        case 'author_name':
            echo esc_html(get_post_meta($post_id, 'author_name', true));
            break;
            
        case 'research_category':
            echo esc_html(get_post_meta($post_id, 'research_category', true));
            break;

        case 'research_language':
            $language = get_post_meta($post_id, 'research_language', true);
            if ($language === 'urdu') {
                echo '<span style="color: #0d9488; font-weight: 600;">اردو</span>';
            } elseif ($language === 'english') {
                echo '<span style="color: #3b82f6; font-weight: 600;">English</span>';
            } else {
                echo '<span style="color: #6b7280;">Not Set</span>';
            }
            break;

        case 'author_email':
            $email = get_post_meta($post_id, 'author_email', true);
            if ($email) {
                echo '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
            }
            break;
            
        case 'submission_date':
            echo esc_html(get_post_meta($post_id, 'submission_date', true));
            break;
            
        case 'research_file':
            $file_id = get_post_meta($post_id, 'research_file', true);
            if ($file_id) {
                $file_url = wp_get_attachment_url($file_id);
                if ($file_url) {
                    echo '<a href="' . esc_url($file_url) . '" target="_blank">Download PDF</a>';
                }
            }
            break;
    }
}
add_action('manage_research_submission_posts_custom_column', 'populate_research_submission_columns', 10, 2);

// Make custom columns sortable
function make_research_submission_columns_sortable($columns) {
    $columns['author_name'] = 'author_name';
    $columns['author_email'] = 'author_email';
    $columns['submission_date'] = 'submission_date';
    $columns['research_language'] = 'research_language';
    
    return $columns;
}
add_filter('manage_edit-research_submission_sortable_columns', 'make_research_submission_columns_sortable');

// Handle sorting
function research_submission_orderby($query) {
    if (!is_admin()) {
        return;
    }
    
    $orderby = $query->get('orderby');
    
    if ('author_name' == $orderby) {
        $query->set('meta_key', 'author_name');
        $query->set('orderby', 'meta_value');
    } elseif ('author_email' == $orderby) {
        $query->set('meta_key', 'author_email');
        $query->set('orderby', 'meta_value');
    } elseif ('submission_date' == $orderby) {
        $query->set('meta_key', 'submission_date');
        $query->set('orderby', 'meta_value');
    } elseif ('research_language' == $orderby) {
        $query->set('meta_key', 'research_language');
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'research_submission_orderby');

// Add meta boxes for research submission details
function add_research_submission_meta_boxes() {
    add_meta_box(
        'research-submission-details',
        'Submission Details',
        'research_submission_details_callback',
        'research_submission',
        'normal',
        'high'
    );
    
    add_meta_box(
        'research-language-meta-box',
        'Research Language',
        'research_language_meta_box_callback',
        'research_submission',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'add_research_submission_meta_boxes');

function research_submission_details_callback($post) {
    $author_name = get_post_meta($post->ID, 'author_name', true);
    $category = get_post_meta($post->ID, 'research_category', true);
    $author_email = get_post_meta($post->ID, 'author_email', true);
    $submission_date = get_post_meta($post->ID, 'submission_date', true);
    $file_id = get_post_meta($post->ID, 'research_file', true);
    $file_url = $file_id ? wp_get_attachment_url($file_id) : '';
    
    echo '<table class="form-table">';
    echo '<tr><th><label>Author Name:</label></th><td>' . esc_html($author_name) . '</td></tr>';
    echo '<tr><th><label>Category:</label></th><td>' . esc_html($category) . '</td></tr>';
    echo '<tr><th><label>Author Email:</label></th><td><a href="mailto:' . esc_attr($author_email) . '">' . esc_html($author_email) . '</a></td></tr>';
    echo '<tr><th><label>Submission Date:</label></th><td>' . esc_html($submission_date) . '</td></tr>';
    if ($file_url) {
        echo '<tr><th><label>Research File:</label></th><td><a href="' . esc_url($file_url) . '" target="_blank" class="button">Download PDF</a></td></tr>';
    }
    echo '</table>';
}

function research_language_meta_box_callback($post) {
    wp_nonce_field('save_research_language_meta_box_data', 'research_language_meta_box_nonce');
    
    $value = get_post_meta($post->ID, 'research_language', true);
    
    echo '<label for="research_language_field">Select Language:</label> ';
    echo '<select id="research_language_field" name="research_language_field" style="width: 100%; margin-top: 10px;">';
    echo '<option value="">Select Language</option>';
    echo '<option value="english"' . selected($value, 'english', false) . '>English</option>';
    echo '<option value="urdu"' . selected($value, 'urdu', false) . '>اردو (Urdu)</option>';
    echo '</select>';
    
    echo '<p style="margin-top: 10px; font-style: italic; color: #666;">Set the language for this research submission to enable filtering on the frontend.</p>';
}

function save_research_language_meta_box_data($post_id) {
    if (!isset($_POST['research_language_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['research_language_meta_box_nonce'], 'save_research_language_meta_box_data')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (!isset($_POST['research_language_field'])) {
        return;
    }

    $language = sanitize_text_field($_POST['research_language_field']);
    
    if (in_array($language, ['english', 'urdu', ''])) {
        update_post_meta($post_id, 'research_language', $language);
    }
}
add_action('save_post', 'save_research_language_meta_box_data');

// Add admin notice for new submissions
function research_submission_admin_notices() {
    $screen = get_current_screen();
    if ($screen->id === 'edit-research_submission') {
        $pending_count = wp_count_posts('research_submission')->pending;
        if ($pending_count > 0) {
            echo '<div class="notice notice-info is-dismissible">';
            echo '<p><strong>You have ' . $pending_count . ' pending research submission(s) to review.</strong></p>';
            echo '</div>';
        }
    }
}
add_action('admin_notices', 'research_submission_admin_notices');

// Custom archive template redirect
function redirect_research_archive_to_approved_page() {
    if (is_post_type_archive('research_submission')) {
        wp_redirect(home_url('/approved-research/'));
        exit;
    }
}
add_action('template_redirect', 'redirect_research_archive_to_approved_page');

add_filter( 'wp_get_attachment_url', function( $url ) {
    return str_replace(
        'https://nrc-books.blr1.digitaloceanspaces.com',
        'https://nrc-books.blr1.cdn.digitaloceanspaces.com',
        $url
    );
});

// AJAX handler for language filtering
add_action('wp_ajax_filter_research_by_language', 'handle_research_language_filter');
add_action('wp_ajax_nopriv_filter_research_by_language', 'handle_research_language_filter');

function handle_research_language_filter() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'filter_research_nonce')) {
        wp_die('Security check failed');
    }
    
    $language = sanitize_text_field($_POST['language']);
    $page = intval($_POST['page']) ?: 1;
    
    $args = array(
        'post_type'      => 'research_submission',
        'post_status'    => 'publish',
        'posts_per_page' => 10,
        'orderby'        => 'date',  
        'order'          => 'DESC',
        'paged'          => $page,
    );
    
    // Add language meta query if not "all"
    if ($language !== 'all') {
        $args['meta_query'] = array(
            'relation' => 'OR',
            array(
                'key'     => 'research_language',
                'value'   => $language,
                'compare' => '='
            ),
            // Include posts where language is not set but default would be the selected language
            array(
                'key'     => 'research_language',
                'compare' => 'NOT EXISTS'
            )
        );
        
        // If filtering for English, include posts without language set (assuming default is English)
        if ($language === 'english') {
            $args['meta_query'] = array(
                'relation' => 'OR',
                array(
                    'key'     => 'research_language',
                    'value'   => 'english',
                    'compare' => '='
                ),
                array(
                    'key'     => 'research_language',
                    'compare' => 'NOT EXISTS'
                ),
                array(
                    'key'     => 'research_language',
                    'value'   => '',
                    'compare' => '='
                )
            );
        } else {
            // For Urdu, only show explicitly set Urdu posts
            $args['meta_query'] = array(
                array(
                    'key'     => 'research_language',
                    'value'   => 'urdu',
                    'compare' => '='
                )
            );
        }
    }
    
    $query = new WP_Query($args);
    $total_posts = $query->found_posts;
    
    ob_start();
    
    if ($query->have_posts()) :
    ?>
        <!-- Stats Section -->
        <div class="research-stats">
            <div class="stats-content">
                <div class="stats-number" id="stats-number"><?php echo $total_posts; ?></div>
                <div class="stats-label">
                    <?php 
                    if ($language === 'english') {
                        echo 'English Research Papers';
                    } elseif ($language === 'urdu') {
                        echo 'Urdu Research Papers';
                    } else {
                        echo 'Published Research Papers';
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Research Table -->
        <div class="research-table-container">
            <table class="research-table">
                <thead>
                    <tr>
                        <th>Research Title</th>
                        <th>Author Name</th>
                        <th>Language</th>
                        <th>Submission Date</th>
                        <th>Research Description</th>
                        <th class="click-indicator"></th>
                    </tr>
                </thead>
                <tbody id="research-tbody">
                    <?php while ($query->have_posts()) : $query->the_post();
                        $author = get_post_meta(get_the_ID(), 'author_name', true);
                        $date = get_post_meta(get_the_ID(), 'submission_date', true);
                        $research_detail = get_post_meta(get_the_ID(), 'research_detail', true);
                        $post_language = get_post_meta(get_the_ID(), 'research_language', true);
                        
                        // Fallback if language field doesn't exist
                        if (empty($post_language)) {
                            $post_language = 'english'; // Default to English
                        }
                        
                        // Truncate research content
                        $short_description = wp_trim_words($research_detail, 18, '...');
                    ?>
                    <tr onclick="window.location.href='<?php echo get_permalink(); ?>'" style="cursor: pointer;" data-language="<?php echo esc_attr(strtolower($post_language)); ?>">
                        <td>
                            <div class="research-title"><?php the_title(); ?></div>
                        </td>
                        <td>
                            <div class="author-name"><?php echo esc_html($author); ?></div>
                        </td>
                        <td>
                            <span class="language-badge <?php echo esc_attr(strtolower($post_language)); ?>">
                                <?php echo $post_language === 'urdu' ? 'اردو' : 'English'; ?>
                            </span>
                        </td>   
                        <td>
                            <div class="submission-date"><?php echo esc_html($date); ?></div>
                        </td>
                        <td class="click-indicator">
                            <div class="research-description"><?php echo esc_html($short_description); ?></div>
                        </td>
                    </tr>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-wrapper" id="pagination-wrapper">
            <?php
            $pagination_links = paginate_links(array(
                'total'     => $query->max_num_pages,
                'current'   => $page,
                'format'    => '?paged=%#%',
                'show_all'  => false,
                'end_size'  => 1,
                'mid_size'  => 2,
                'prev_next' => true,
                'prev_text' => '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg> Previous',
                'next_text' => 'Next <svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>',
                'type'      => 'list',
            ));
            
            if ($pagination_links) {
                echo $pagination_links;
            }
            ?>
        </div>
    <?php else : ?>
        
        <div class="empty-state">
            <div class="empty-state-icon">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h3>No Research Found</h3>
            <p>
                <?php 
                if ($language === 'english') {
                    echo 'کوئی انگریزی تحقیقی مقالہ دستیاب نہیں۔<br>No English research submissions found.';
                } elseif ($language === 'urdu') {
                    echo 'کوئی اردو تحقیقی مقالہ دستیاب نہیں۔<br>No Urdu research submissions found.';
                } else {
                    echo 'کوئی تحقیقی مقالہ ابھی تک منظور نہیں ہوا۔<br>No research submissions have been published yet.';
                }
                ?>
            </p>
        </div>

    <?php endif;
    
    $html = ob_get_clean();
    
    wp_send_json_success(array(
        'html' => $html,
        'total_posts' => $total_posts
    ));
}

// ADD BULK ACTION TO SET LANGUAGE FOR EXISTING POSTS
add_filter('bulk_actions-edit-research_submission', 'research_submission_bulk_actions');

function research_submission_bulk_actions($bulk_actions) {
    $bulk_actions['set_language_english'] = 'Set Language to English';
    $bulk_actions['set_language_urdu'] = 'Set Language to Urdu';
    return $bulk_actions;
}

add_filter('handle_bulk_actions-edit-research_submission', 'research_submission_bulk_action_handler', 10, 3);

function research_submission_bulk_action_handler($redirect_to, $action, $post_ids) {
    if ($action === 'set_language_english') {
        foreach ($post_ids as $post_id) {
            update_post_meta($post_id, 'research_language', 'english');
        }
        $redirect_to = add_query_arg('bulk_language_updated', count($post_ids), $redirect_to);
    } elseif ($action === 'set_language_urdu') {
        foreach ($post_ids as $post_id) {
            update_post_meta($post_id, 'research_language', 'urdu');
        }
        $redirect_to = add_query_arg('bulk_language_updated', count($post_ids), $redirect_to);
    }
    
    return $redirect_to;
}

add_action('admin_notices', 'research_submission_bulk_action_admin_notice');

function research_submission_bulk_action_admin_notice() {
    if (!empty($_REQUEST['bulk_language_updated'])) {
        $count = intval($_REQUEST['bulk_language_updated']);
        printf(
            '<div id="message" class="updated notice is-dismissible"><p>' .
            _n('Language updated for %s research submission.', 'Language updated for %s research submissions.', $count) .
            '</p></div>',
            $count
        );
    }
}

// Add debug logging for AJAX requests
add_action('wp_ajax_submit_research', function() {
    error_log('AJAX submit_research action triggered for logged in user');
}, 1);

add_action('wp_ajax_nopriv_submit_research', function() {
    error_log('AJAX submit_research action triggered for non-logged in user');
}, 1);

// Increase upload limits for research files
add_filter('upload_size_limit', function($size) {
    return 10 * 1024 * 1024; // 10MB
});

// Allow PDF uploads
add_filter('upload_mimes', function($mimes) {
    $mimes['pdf'] = 'application/pdf';
    return $mimes;
});