<?php
/* Template Name: Research Debug */

// Only allow administrators to access this debug page
if (!current_user_can('manage_options')) {
    wp_die('You do not have permission to access this page.');
}

get_header();
?>

<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: #f1f1f1;
    margin: 0;
    padding: 20px;
}

.debug-container {
    max-width: 1200px;
    margin: 0 auto;
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.debug-section {
    margin-bottom: 30px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.debug-section h2 {
    margin-top: 0;
    color: #333;
    border-bottom: 2px solid #0073aa;
    padding-bottom: 10px;
}

.debug-item {
    margin-bottom: 15px;
    padding: 10px;
    background: #f9f9f9;
    border-left: 4px solid #0073aa;
}

.debug-item strong {
    color: #333;
    display: inline-block;
    width: 200px;
}

.status-ok {
    color: #46b450;
    font-weight: bold;
}

.status-error {
    color: #dc3232;
    font-weight: bold;
}

.status-warning {
    color: #ffb900;
    font-weight: bold;
}

.code-block {
    background: #2d3748;
    color: #e2e8f0;
    padding: 15px;
    border-radius: 5px;
    font-family: 'Courier New', monospace;
    font-size: 14px;
    overflow-x: auto;
    margin: 10px 0;
}

.test-form {
    background: #f0f8ff;
    padding: 20px;
    border-radius: 5px;
    border: 1px solid #0073aa;
}

.test-result {
    margin-top: 15px;
    padding: 10px;
    border-radius: 5px;
}

.test-result.success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.test-result.error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table th,
table td {
    padding: 8px 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table th {
    background: #f1f1f1;
    font-weight: bold;
}

.action-button {
    background: #0073aa;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    text-decoration: none;
    display: inline-block;
}

.action-button:hover {
    background: #005a87;
    color: white;
}

.action-button.danger {
    background: #dc3232;
}

.action-button.danger:hover {
    background: #a02622;
}
</style>

<div class="debug-container">
    <h1>Research Submission System Debug</h1>
    <p>This debug page helps troubleshoot issues with the research submission system.</p>

    <!-- System Status -->
    <div class="debug-section">
        <h2>System Status</h2>
        
        <div class="debug-item">
            <strong>WordPress Version:</strong>
            <?php echo get_bloginfo('version'); ?>
        </div>
        
        <div class="debug-item">
            <strong>PHP Version:</strong>
            <?php echo PHP_VERSION; ?>
        </div>
        
        <div class="debug-item">
            <strong>Active Theme:</strong>
            <?php echo wp_get_theme()->get('Name'); ?>
        </div>
        
        <div class="debug-item">
            <strong>Upload Directory:</strong>
            <?php 
            $upload_dir = wp_upload_dir();
            echo $upload_dir['basedir'];
            if (is_writable($upload_dir['basedir'])) {
                echo ' <span class="status-ok">✓ Writable</span>';
            } else {
                echo ' <span class="status-error">✗ Not Writable</span>';
            }
            ?>
        </div>
        
        <div class="debug-item">
            <strong>Max Upload Size:</strong>
            <?php echo size_format(wp_max_upload_size()); ?>
        </div>
        
        <div class="debug-item">
            <strong>Max Execution Time:</strong>
            <?php echo ini_get('max_execution_time'); ?> seconds
        </div>
        
        <div class="debug-item">
            <strong>Memory Limit:</strong>
            <?php echo ini_get('memory_limit'); ?>
        </div>
    </div>

    <!-- Post Type Status -->
    <div class="debug-section">
        <h2>Research Post Type Status</h2>
        
        <?php
        $post_type_exists = post_type_exists('research_submission');
        ?>
        
        <div class="debug-item">
            <strong>Post Type Registered:</strong>
            <?php if ($post_type_exists): ?>
                <span class="status-ok">✓ research_submission post type exists</span>
            <?php else: ?>
                <span class="status-error">✗ research_submission post type not found</span>
            <?php endif; ?>
        </div>
        
        <?php if ($post_type_exists): ?>
            <?php
            $post_type_object = get_post_type_object('research_submission');
            $total_posts = wp_count_posts('research_submission');
            ?>
            
            <div class="debug-item">
                <strong>Post Type Settings:</strong>
                <ul>
                    <li>Public: <?php echo $post_type_object->public ? 'Yes' : 'No'; ?></li>
                    <li>Show UI: <?php echo $post_type_object->show_ui ? 'Yes' : 'No'; ?></li>
                    <li>Has Archive: <?php echo $post_type_object->has_archive ? 'Yes' : 'No'; ?></li>
                </ul>
            </div>
            
            <div class="debug-item">
                <strong>Post Counts:</strong>
                <ul>
                    <li>Published: <?php echo $total_posts->publish; ?></li>
                    <li>Pending: <?php echo $total_posts->pending; ?></li>
                    <li>Draft: <?php echo $total_posts->draft; ?></li>
                    <li>Trash: <?php echo $total_posts->trash; ?></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <!-- AJAX Handler Status -->
    <div class="debug-section">
        <h2>AJAX Handler Status</h2>
        
        <div class="debug-item">
            <strong>AJAX URL:</strong>
            <?php echo admin_url('admin-ajax.php'); ?>
        </div>
        
        <div class="debug-item">
            <strong>Handler Registration:</strong>
            <?php
            // Check if AJAX handlers are registered
            global $wp_filter;
            $logged_in_handler = isset($wp_filter['wp_ajax_submit_research']);
            $public_handler = isset($wp_filter['wp_ajax_nopriv_submit_research']);
            ?>
            
            <ul>
                <li>Logged-in users: <?php echo $logged_in_handler ? '<span class="status-ok">✓ Registered</span>' : '<span class="status-error">✗ Not Registered</span>'; ?></li>
                <li>Public users: <?php echo $public_handler ? '<span class="status-ok">✓ Registered</span>' : '<span class="status-error">✗ Not Registered</span>'; ?></li>
            </ul>
        </div>
    </div>

    <!-- Recent Submissions -->
    <div class="debug-section">
        <h2>Recent Submissions (Last 10)</h2>
        
        <?php
        $recent_submissions = get_posts(array(
            'post_type' => 'research_submission',
            'post_status' => array('publish', 'pending', 'draft'),
            'numberposts' => 10,
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        
        if ($recent_submissions): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Author</th>
                        <th>Language</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recent_submissions as $post): ?>
                        <tr>
                            <td><?php echo $post->ID; ?></td>
                            <td><?php echo esc_html($post->post_title); ?></td>
                            <td><?php echo $post->post_status; ?></td>
                            <td><?php echo esc_html(get_post_meta($post->ID, 'author_name', true)); ?></td>
                            <td><?php echo esc_html(get_post_meta($post->ID, 'research_language', true) ?: 'Not Set'); ?></td>
                            <td><?php echo get_the_date('Y-m-d H:i', $post); ?></td>
                            <td>
                                <a href="<?php echo admin_url('post.php?post=' . $post->ID . '&action=edit'); ?>" class="action-button">Edit</a>
                                <?php if ($post->post_status === 'publish'): ?>
                                    <a href="<?php echo get_permalink($post->ID); ?>" class="action-button">View</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No submissions found.</p>
        <?php endif; ?>
    </div>

    <!-- Test AJAX Connection -->
    <div class="debug-section">
        <h2>Test AJAX Connection</h2>
        
        <div class="test-form">
            <p>Click the button below to test the AJAX connection to the research submission handler:</p>
            <button id="test-ajax" class="action-button">Test AJAX Connection</button>
            <div id="ajax-result"></div>
        </div>
    </div>

    <!-- Error Logs -->
    <div class="debug-section">
        <h2>Recent Error Logs</h2>
        
        <div class="debug-item">
            <strong>Error Log Location:</strong>
            <?php 
            $error_log = ini_get('error_log');
            echo $error_log ?: 'Default system log';
            ?>
        </div>
        
        <div class="debug-item">
            <strong>WordPress Debug:</strong>
            <?php echo defined('WP_DEBUG') && WP_DEBUG ? '<span class="status-ok">Enabled</span>' : '<span class="status-warning">Disabled</span>'; ?>
        </div>
        
        <div class="debug-item">
            <strong>WordPress Debug Log:</strong>
            <?php echo defined('WP_DEBUG_LOG') && WP_DEBUG_LOG ? '<span class="status-ok">Enabled</span>' : '<span class="status-warning">Disabled</span>'; ?>
        </div>
        
        <?php if (defined('WP_DEBUG_LOG') && WP_DEBUG_LOG): ?>
            <div class="debug-item">
                <strong>Debug Log File:</strong>
                <?php 
                $debug_log = WP_CONTENT_DIR . '/debug.log';
                if (file_exists($debug_log) && is_readable($debug_log)) {
                    echo $debug_log;
                    echo ' <a href="#" id="view-debug-log" class="action-button">View Recent Entries</a>';
                } else {
                    echo 'Not found or not readable';
                }
                ?>
            </div>
            
            <div id="debug-log-content" style="display: none;">
                <h3>Recent Debug Log Entries (Last 50 lines)</h3>
                <div class="code-block" id="debug-log-text">
                    Loading...
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Troubleshooting Steps -->
    <div class="debug-section">
        <h2>Troubleshooting Steps</h2>
        
        <div class="debug-item">
            <strong>Common Issues:</strong>
            <ol>
                <li><strong>Form not submitting:</strong> Check browser console for JavaScript errors</li>
                <li><strong>File upload fails:</strong> Check file size limits and upload directory permissions</li>
                <li><strong>AJAX errors:</strong> Check WordPress error logs and ensure handlers are registered</li>
                <li><strong>Database issues:</strong> Verify post type is registered and database tables exist</li>
                <li><strong>Email not sending:</strong> Check WordPress mail configuration</li>
            </ol>
        </div>
        
        <div class="debug-item">
            <strong>Quick Fixes:</strong>
            <ul>
                <li><a href="<?php echo admin_url('options-permalink.php'); ?>" class="action-button">Flush Permalinks</a></li>
                <li><a href="#" id="clear-debug-log" class="action-button danger">Clear Debug Log</a></li>
                <li><a href="<?php echo admin_url('edit.php?post_type=research_submission'); ?>" class="action-button">View All Submissions</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Test AJAX connection
    document.getElementById('test-ajax').addEventListener('click', function() {
        const button = this;
        const resultDiv = document.getElementById('ajax-result');
        
        button.disabled = true;
        button.textContent = 'Testing...';
        resultDiv.innerHTML = '';
        
        const formData = new FormData();
        formData.append('action', 'submit_research');
        formData.append('test_mode', '1');
        
        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            resultDiv.innerHTML = '<div class="test-result success"><strong>Success:</strong> AJAX endpoint is reachable. Response: ' + data.substring(0, 200) + '...</div>';
        })
        .catch(error => {
            resultDiv.innerHTML = '<div class="test-result error"><strong>Error:</strong> ' + error.message + '</div>';
        })
        .finally(() => {
            button.disabled = false;
            button.textContent = 'Test AJAX Connection';
        });
    });
    
    // View debug log
    const viewLogBtn = document.getElementById('view-debug-log');
    if (viewLogBtn) {
        viewLogBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const logContent = document.getElementById('debug-log-content');
            const logText = document.getElementById('debug-log-text');
            
            if (logContent.style.display === 'none') {
                logContent.style.display = 'block';
                this.textContent = 'Hide Log';
                
                // Load debug log content via AJAX
                fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=get_debug_log')
                .then(response => response.text())
                .then(data => {
                    logText.textContent = data || 'No recent entries found.';
                })
                .catch(error => {
                    logText.textContent = 'Error loading log: ' + error.message;
                });
            } else {
                logContent.style.display = 'none';
                this.textContent = 'View Recent Entries';
            }
        });
    }
    
    // Clear debug log
    const clearLogBtn = document.getElementById('clear-debug-log');
    if (clearLogBtn) {
        clearLogBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to clear the debug log?')) {
                fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=clear_debug_log', {
                    method: 'POST'
                })
                .then(response => response.text())
                .then(data => {
                    alert('Debug log cleared.');
                })
                .catch(error => {
                    alert('Error clearing log: ' + error.message);
                });
            }
        });
    }
});
</script>

<?php get_footer(); ?>