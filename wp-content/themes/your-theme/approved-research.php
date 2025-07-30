<?php
/* Template Name: Approved Research List */

get_header();
?>

<style>
/* Approved Research Page Styles - Cool-toned Islamic Theme */

/* Import Islamic-friendly fonts */
@import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Scheherazade+New:wght@400;700&family=Noto+Nastaliq+Urdu:wght@400;700&display=swap');

/* CSS Variables for cool-toned Islamic theme */
:root {
  --primary-blue: #1e3a8a;
  --secondary-blue: #3b82f6;
  --accent-teal: #0d9488;
  --light-teal: #a7f3d0;
  --cool-gray: #f8fafc;
  --warm-white: #fefefe;
  --text-dark: #1e293b;
  --text-medium: #475569;
  --text-light: #64748b;
  --border-teal: #14b8a6;
  --shadow-blue: rgba(30, 58, 138, 0.15);
  --shadow-teal: rgba(13, 148, 136, 0.2);
  --font-arabic: 'Amiri', 'Scheherazade New', serif;
  --font-english: 'Libre Baskerville', serif;
  --font-urdu: 'Noto Nastaliq Urdu', 'Amiri', serif;
  --font-body: 'Georgia', serif;
  --gradient-cool: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
  --gradient-hero: linear-gradient(135deg, #1e3a8a 0%, #3730a3 50%, #0d9488 100%);
}

/* Base Styles */
.approved-research-page {
  background: var(--gradient-cool);
  color: var(--text-dark);
  font-family: var(--font-body);
  line-height: 1.8;
  position: relative;
  min-height: 100vh;
  padding: 60px 20px;
}

.approved-research-page::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: 
    radial-gradient(circle at 20% 30%, rgba(13, 148, 136, 0.04) 0%, transparent 50%),
    radial-gradient(circle at 80% 70%, rgba(30, 58, 138, 0.04) 0%, transparent 50%);
  pointer-events: none;
  z-index: -1;
}

/* Hero Section */
.research-hero {
  text-align: center;
  margin-bottom: 60px;
  position: relative;
}

.hero-ornament {
  margin: 0 auto 30px;
  width: 80px;
  height: 80px;
  color: var(--accent-teal);
  background: rgba(13, 148, 136, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 25px var(--shadow-teal);
  transition: all 0.3s ease;
}

.hero-ornament:hover {
  transform: scale(1.05);
  box-shadow: 0 12px 35px var(--shadow-teal);
}

.hero-ornament svg {
  width: 40px;
  height: 40px;
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.research-hero h1 {
  font-family: var(--font-english);
  font-size: 3rem;
  font-weight: 700;
  color: var(--primary-blue);
  margin: 0 0 20px 0;
  position: relative;
  padding-bottom: 20px;
}

.research-hero h1::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 120px;
  height: 4px;
  background: linear-gradient(90deg, transparent 0%, var(--accent-teal) 50%, transparent 100%);
  border-radius: 2px;
}

.research-hero .arabic-title {
  font-family: var(--font-arabic);
  font-size: 1.5rem;
  color: var(--accent-teal);
  display: block;
  margin-bottom: 15px;
  font-weight: 400;
  direction: rtl;
}

.research-hero p {
  font-size: 1.2rem;
  color: var(--text-medium);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.7;
}

/* Research Container */
.research-container {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
}

.research-wrapper {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  border-radius: 24px;
  box-shadow: 
    0 25px 50px var(--shadow-blue),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
  padding: 60px 50px;
  border: 1px solid rgba(13, 148, 136, 0.2);
  position: relative;
  overflow: hidden;
}

.research-wrapper::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, var(--accent-teal) 0%, var(--primary-blue) 50%, var(--accent-teal) 100%);
}

/* Language Filter */
.language-filter {
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-bottom: 40px;
  flex-wrap: wrap;
}

.filter-button {
  padding: 12px 24px;
  border: 2px solid var(--accent-teal);
  background: transparent;
  color: var(--accent-teal);
  border-radius: 25px;
  font-family: var(--font-english);
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 1rem;
  position: relative;
  overflow: hidden;
}

.filter-button:hover,
.filter-button.active {
  background: var(--accent-teal);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 8px 25px var(--shadow-teal);
}

.filter-button.loading {
  opacity: 0.7;
  cursor: not-allowed;
}

.filter-button .loading-spinner {
  display: none;
  width: 16px;
  height: 16px;
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  border-top-color: currentColor;
  animation: spin 1s linear infinite;
  margin-right: 8px;
}

.filter-button.loading .loading-spinner {
  display: inline-block;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

/* Stats Section */
.research-stats {
  background: var(--gradient-hero);
  color: white;
  padding: 30px 40px;
  border-radius: 16px;
  margin-bottom: 40px;
  text-align: center;
  position: relative;
  overflow: hidden;
  box-shadow: 0 15px 35px var(--shadow-blue);
}

.research-stats::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: 
    url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><defs><pattern id="stats-pattern" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="15" cy="15" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="60" height="60" fill="url(%23stats-pattern)"/></svg>');
  opacity: 0.3;
}

.stats-content {
  position: relative;
  z-index: 2;
}

.stats-number {
  font-size: 2.5rem;
  font-weight: 700;
  font-family: var(--font-english);
  margin-bottom: 10px;
  color: var(--light-teal);
}

.stats-label {
  font-size: 1.1rem;
  opacity: 0.9;
  font-weight: 500;
}

/* Research Table */
.research-table-container {
  overflow-x: auto;
  border-radius: 16px;
  box-shadow: 0 8px 25px var(--shadow-blue);
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(5px);
  border: 1px solid rgba(13, 148, 136, 0.2);
}

.research-table {
  width: 100%;
  border-collapse: collapse;
  font-family: var(--font-body);
  background: transparent;
}

.research-table thead {
  background: var(--gradient-hero);
  color: white;
}

.research-table th {
  padding: 20px 15px;
  text-align: left;
  font-family: var(--font-english);
  font-weight: 600;
  font-size: 1.1rem;
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
  position: relative;
}

.research-table th:first-child {
  border-top-left-radius: 16px;
}

.research-table th:last-child {
  border-top-right-radius: 16px;
}

.research-table tbody tr {
  border-bottom: 1px solid rgba(13, 148, 136, 0.1);
  transition: all 0.3s ease;
  cursor: pointer;
}

.research-table tbody tr:hover {
  background: linear-gradient(135deg, rgba(167, 243, 208, 0.1) 0%, rgba(255, 255, 255, 0.95) 100%);
  transform: scale(1.01);
  box-shadow: 0 4px 15px var(--shadow-teal);
}

.research-table tbody tr:last-child {
  border-bottom: none;
}

.research-table td {
  padding: 20px 15px;
  vertical-align: top;
  color: var(--text-medium);
  font-size: 1rem;
  line-height: 1.6;
}

.research-title {
  font-family: var(--font-english);
  font-weight: 600;
  color: var(--primary-blue);
  font-size: 1.1rem;
  margin-bottom: 5px;
  transition: color 0.3s ease;
}

.research-table tbody tr:hover .research-title {
  color: var(--accent-teal);
}

.research-description {
  color: var(--text-light);
  font-size: 0.95rem;
  line-height: 1.5;
  margin-top: 8px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.author-name {
  font-weight: 600;
  color: var(--text-dark);
}

.submission-date {
  color: var(--text-medium);
  font-size: 0.95rem;
}

/* Language badges */
.language-badge {
  display: inline-block;
  padding: 4px 12px;
  border-radius: 12px;
  font-size: 0.85rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.language-badge.english {
  background: linear-gradient(135deg, #3b82f6, #1e40af);
  color: white;
}

.language-badge.urdu {
  background: linear-gradient(135deg, #0d9488, #0f766e);
  color: white;
  font-family: var(--font-urdu);
  text-transform: none;
  letter-spacing: normal;
}

/* Click indicator */
.click-indicator {
  position: relative;
}

.click-indicator::after {
  content: '→';
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--accent-teal);
  font-weight: bold;
  opacity: 0;
  transition: all 0.3s ease;
}

.research-table tbody tr:hover .click-indicator::after {
  opacity: 1;
  right: 5px;
}

/* Empty State */
.empty-state {
  text-align: center;
  padding: 80px 40px;
  color: var(--text-medium);
}

.empty-state-icon {
  margin: 0 auto 30px;
  width: 100px;
  height: 100px;
  color: var(--accent-teal);
  background: rgba(13, 148, 136, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.7;
}

.empty-state-icon svg {
  width: 50px;
  height: 50px;
}

.empty-state h3 {
  font-family: var(--font-english);
  font-size: 1.8rem;
  color: var(--primary-blue);
  margin: 0 0 15px 0;
}

.empty-state p {
  font-size: 1.1rem;
  line-height: 1.6;
  max-width: 400px;
  margin: 0 auto;
}

/* Loading state */
.loading-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.loading-overlay.show {
  opacity: 1;
  visibility: visible;
}

.loading-spinner-large {
  width: 60px;
  height: 60px;
  border: 4px solid rgba(13, 148, 136, 0.2);
  border-radius: 50%;
  border-top-color: var(--accent-teal);
  animation: spin 1s linear infinite;
}

/* Responsive Design */
@media (max-width: 768px) {
  .approved-research-page {
    padding: 40px 15px;
  }
  
  .research-hero h1 {
    font-size: 2.2rem;
  }
  
  .research-wrapper {
    padding: 40px 30px;
  }
  
  .research-table-container {
    border-radius: 12px;
  }
  
  .research-table th,
  .research-table td {
    padding: 15px 10px;
  }
  
  .research-table th {
    font-size: 1rem;
  }
  
  .research-title {
    font-size: 1rem;
  }
  
  .research-stats {
    padding: 25px 20px;
  }
  
  .stats-number {
    font-size: 2rem;
  }
  
  .language-filter {
    gap: 10px;
  }
  
  .filter-button {
    padding: 10px 20px;
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  .approved-research-page {
    padding: 30px 10px;
  }
  
  .research-hero h1 {
    font-size: 1.8rem;
  }
  
  .research-wrapper {
    padding: 30px 20px;
  }
  
  .research-table th,
  .research-table td {
    padding: 12px 8px;
    font-size: 0.9rem;
  }
  
  .research-title {
    font-size: 0.95rem;
  }
  
  .research-description {
    font-size: 0.85rem;
  }
  
  .language-filter {
    flex-direction: column;
    align-items: center;
  }
  
  .filter-button {
    width: 100%;
    max-width: 200px;
  }
}

/* Print Styles */
@media print {
  .approved-research-page {
    background: white !important;
  }
  
  .research-wrapper,
  .research-table-container {
    box-shadow: none !important;
    border: 1px solid #ccc !important;
    page-break-inside: avoid;
  }
  
  .research-stats {
    background: white !important;
    color: black !important;
    border: 2px solid #333 !important;
  }
  
  .research-table thead {
    background: #f5f5f5 !important;
    color: black !important;
  }
  
  .language-filter {
    display: none !important;
  }
}

/* Accessibility Improvements */
@media (prefers-reduced-motion: reduce) {
  .research-table tbody tr,
  .click-indicator::after,
  .filter-button,
  .loading-overlay {
    transition: none;
  }
  
  .loading-spinner,
  .loading-spinner-large {
    animation: none;
  }
}

/* High contrast mode support */
@media (prefers-contrast: high) {
  :root {
    --primary-blue: #000;
    --secondary-blue: #333;
    --accent-teal: #000;
    --text-dark: #000;
    --text-medium: #333;
    --border-teal: #000;
  }
}

/* Pagination Styles */
.pagination-wrapper {
  margin-top: 50px;
  display: flex;
  justify-content: center;
}

.pagination-wrapper .page-numbers {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
  gap: 8px;
  align-items: center;
}

.pagination-wrapper .page-numbers li {
  margin: 0;
}

.pagination-wrapper .page-numbers a,
.pagination-wrapper .page-numbers span {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 44px;
  height: 44px;
  padding: 8px 12px;
  font-family: var(--font-english);
  font-size: 1rem;
  font-weight: 600;
  text-decoration: none;
  border-radius: 12px;
  transition: all 0.3s ease;
  border: 2px solid transparent;
  background: rgba(255, 255, 255, 0.9);
  color: var(--text-medium);
  box-shadow: 0 4px 15px rgba(13, 148, 136, 0.1);
  backdrop-filter: blur(5px);
}

.pagination-wrapper .page-numbers a:hover {
  background: var(--accent-teal);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 8px 25px var(--shadow-teal);
  border-color: var(--accent-teal);
}

.pagination-wrapper .page-numbers .current {
  background: var(--gradient-hero);
  color: white;
  border-color: var(--primary-blue);
  box-shadow: 0 8px 25px var(--shadow-blue);
  transform: translateY(-2px);
}

.pagination-wrapper .page-numbers .prev,
.pagination-wrapper .page-numbers .next {
  padding: 8px 16px;
  gap: 8px;
  font-weight: 500;
  min-width: auto;
}

.pagination-wrapper .page-numbers .prev svg,
.pagination-wrapper .page-numbers .next svg {
  width: 18px;
  height: 18px;
  transition: transform 0.3s ease;
}

.pagination-wrapper .page-numbers .prev:hover svg {
  transform: translateX(-2px);
}

.pagination-wrapper .page-numbers .next:hover svg {
  transform: translateX(2px);
}

.pagination-wrapper .page-numbers .dots {
  background: transparent;
  color: var(--text-light);
  box-shadow: none;
  cursor: default;
  border: none;
}

.pagination-wrapper .page-numbers .dots:hover {
  background: transparent;
  transform: none;
  box-shadow: none;
}

/* Responsive Pagination */
@media (max-width: 768px) {
  .pagination-wrapper .page-numbers {
    gap: 4px;
  }
  
  .pagination-wrapper .page-numbers a,
  .pagination-wrapper .page-numbers span {
    min-width: 36px;
    height: 36px;
    font-size: 0.9rem;
    padding: 6px 8px;
  }
  
  .pagination-wrapper .page-numbers .prev,
  .pagination-wrapper .page-numbers .next {
    padding: 6px 12px;
  }
  
  .pagination-wrapper .page-numbers .prev svg,
  .pagination-wrapper .page-numbers .next svg {
    width: 16px;
    height: 16px;
  }
}

@media (max-width: 480px) {
  .pagination-wrapper .page-numbers {
    flex-wrap: wrap;
    justify-content: center;
    gap: 6px;
  }
  
  .pagination-wrapper .page-numbers a,
  .pagination-wrapper .page-numbers span {
    min-width: 32px;
    height: 32px;
    font-size: 0.85rem;
    padding: 4px 6px;
  }
  
  .pagination-wrapper .page-numbers .prev,
  .pagination-wrapper .page-numbers .next {
    padding: 4px 10px;
    font-size: 0.8rem;
  }
}
</style>

<main class="approved-research-page">
  <!-- Hero Section -->
  <section class="research-hero">
    <h1>
      <span class="arabic-title">منظور شدہ تحقیقی مقالات</span>
      Approved Research Submissions
    </h1>
    <p>Explore our collection of scholarly works and research contributions in the field of Naat literature and Islamic studies.</p>
  </section>

  <!-- Research Container -->
  <section class="research-container">
    <div class="research-wrapper">
      <!-- Language Filter -->
      <div class="language-filter">
        <button class="filter-button active" data-language="all">
          <span class="loading-spinner"></span>
          All Research
        </button>
        <button class="filter-button" data-language="english">
          <span class="loading-spinner"></span>
          English
        </button>
        <button class="filter-button" data-language="urdu">
          <span class="loading-spinner"></span>
          اردو (Urdu)
        </button>
      </div>

      <!-- Loading Overlay -->
      <div class="loading-overlay" id="loading-overlay">
        <div class="loading-spinner-large"></div>
      </div>

      <!-- Research Content Container -->
      <div id="research-content">
        <?php
        $args = array(
            'post_type'      => 'research_submission',
            'post_status'    => 'publish',
            'posts_per_page' => 10,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
        );

        $query = new WP_Query($args);
        $total_posts = $query->found_posts;

        if ($query->have_posts()) :
        ?>
          <!-- Stats Section -->
          <div class="research-stats">
            <div class="stats-content">
              <div class="stats-number" id="stats-number"><?php echo $total_posts; ?></div>
              <div class="stats-label">Published Research Papers</div>
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
                    $language = get_post_meta(get_the_ID(), 'research_language', true);
                    
                    // Fallback if language field doesn't exist
                    if (empty($language)) {
                        $language = 'english'; // Default to English
                    }
                    
                    // Truncate research content to 1-2 lines (approximately 100-120 characters)
                    $short_description = wp_trim_words($research_detail, 18, '...');
                ?>
                <tr onclick="window.location.href='<?php echo get_permalink(); ?>'" style="cursor: pointer;" data-language="<?php echo esc_attr(strtolower($language)); ?>">
                  <td>
                    <div class="research-title"><?php the_title(); ?></div>
                  </td>
                  <td>
                    <div class="author-name"><?php echo esc_html($author); ?></div>
                  </td>
                  <td>
                    <span class="language-badge <?php echo esc_attr(strtolower($language)); ?>">
                      <?php echo $language === 'urdu' ? 'اردو' : 'English'; ?>
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
                'current'   => max(1, get_query_var('paged')),
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
            <h3>No Research Available</h3>
            <p>کوئی تحقیقی مقالہ ابھی تک منظور نہیں ہوا۔<br>No research submissions have been published yet.</p>
          </div>

        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<script>
// WordPress AJAX URL
const ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';

// Language filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-button');
    const loadingOverlay = document.getElementById('loading-overlay');
    const researchContent = document.getElementById('research-content');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const language = this.getAttribute('data-language');
            
            // Don't do anything if this button is already active
            if (this.classList.contains('active')) {
                return;
            }
            
            // Update active state
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.remove('loading');
            });
            this.classList.add('active', 'loading');
            
            // Show loading overlay
            loadingOverlay.classList.add('show');
            
            // Prepare form data
            const formData = new FormData();
            formData.append('action', 'filter_research_by_language');
            formData.append('language', language);
            formData.append('page', 1);
            formData.append('nonce', '<?php echo wp_create_nonce('filter_research_nonce'); ?>');
            
            // Send AJAX request
            fetch(ajaxUrl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Update the content
                    researchContent.innerHTML = data.data.html;
                    
                    // Re-attach click handlers for new content
                    attachRowClickHandlers();
                } else {
                    console.error('Filter failed:', data);
                    // Show error message or fallback
                }
            })
            .catch(error => {
                console.error('Filter error:', error);
                // Show error message or fallback
            })
            .finally(() => {
                // Hide loading overlay and remove loading state
                loadingOverlay.classList.remove('show');
                this.classList.remove('loading');
            });
        });
    });
    
    // Function to attach click handlers to table rows
    function attachRowClickHandlers() {
        const tableRows = document.querySelectorAll('.research-table tbody tr[onclick]');
        tableRows.forEach(row => {
            // Remove inline onclick and add event listener
            const url = row.getAttribute('onclick').match(/window\.location\.href='([^']+)'/);
            if (url && url[1]) {
                row.removeAttribute('onclick');
                row.addEventListener('click', function() {
                    window.location.href = url[1];
                });
            }
        });
    }
    
    // Initial attachment of click handlers
    attachRowClickHandlers();
});
</script>

<?php get_footer(); ?>