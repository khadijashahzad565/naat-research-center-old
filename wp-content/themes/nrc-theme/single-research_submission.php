<?php
/* Single Research Submission Template */

get_header();
?>

<style>
/* Single Research Submission Page Styles - Cool-toned Islamic Theme */
@import url('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Scheherazade+New:wght@400;700&family=Noto+Nastaliq+Urdu:wght@400;700&display=swap');

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
  --font-urdu: 'Noto Nastaliq Urdu', 'Amiri', serif;
  --font-english: 'Libre Baskerville', serif;
  --font-body: 'Georgia', serif;
  --gradient-cool: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
  --gradient-hero: linear-gradient(135deg, #1e3a8a 0%, #3730a3 50%, #0d9488 100%);
}

.single-research-page {
  background: var(--gradient-cool);
  color: var(--text-dark);
  font-family: var(--font-body);
  line-height: 1.8;
  position: relative;
  min-height: 100vh;
  padding: 60px 20px;
}

.single-research-page::before {
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

/* Breadcrumb */
.breadcrumb-nav {
  max-width: 1200px;
  margin: 0 auto 40px;
  padding: 0 20px;
}

.breadcrumb {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.9rem;
  color: var(--text-medium);
  background: rgba(255, 255, 255, 0.8);
  padding: 12px 20px;
  border-radius: 12px;
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 15px rgba(13, 148, 136, 0.1);
}

.breadcrumb a {
  color: var(--accent-teal);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.breadcrumb a:hover {
  color: var(--primary-blue);
}

.breadcrumb-separator {
  color: var(--text-light);
  margin: 0 4px;
}

/* Research Container */
.research-container {
  max-width: 1000px;
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

/* Research Header */
.research-header {
  text-align: center;
  margin-bottom: 50px;
  position: relative;
}

.research-header-ornament {
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
}

.research-header-ornament svg {
  width: 40px;
  height: 40px;
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.research-title {
  font-family: var(--font-english);
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--primary-blue);
  margin: 0 0 20px 0;
  line-height: 1.3;
}

.research-title.urdu {
  font-family: var(--font-urdu);
  direction: rtl;
  font-size: 2.8rem;
}

.research-meta {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
  margin-top: 30px;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 8px;
  color: var(--text-medium);
  font-size: 1rem;
}

.meta-item svg {
  width: 18px;
  height: 18px;
  color: var(--accent-teal);
}

.meta-item strong {
  color: var(--text-dark);
  font-weight: 600;
}

.language-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 16px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 600;
  text-align: center;
}

.language-badge.english {
  background: linear-gradient(135deg, #3b82f6, #2563eb);
  color: white;
}

.language-badge.urdu {
  background: linear-gradient(135deg, #0d9488, #0f766e);
  color: white;
  font-family: var(--font-urdu);
}

/* Research Content */
.research-content {
  margin-bottom: 40px;
}

.content-section {
  margin-bottom: 40px;
}

.section-title {
  font-family: var(--font-english);
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--primary-blue);
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 2px solid rgba(13, 148, 136, 0.2);
  position: relative;
}

.section-title.urdu {
  font-family: var(--font-urdu);
  direction: rtl;
  text-align: right;
}

.section-title::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 60px;
  height: 2px;
  background: var(--accent-teal);
  border-radius: 1px;
}

.section-title.urdu::after {
  left: auto;
  right: 0;
}

.research-description {
  font-size: 1.1rem;
  line-height: 1.8;
  color: var(--text-medium);
  text-align: justify;
  white-space: pre-line;
}

.research-description.urdu {
  font-family: var(--font-urdu);
  direction: rtl;
  text-align: right;
  font-size: 1.2rem;
}

/* Download Section */
.download-section {
  background: linear-gradient(135deg, rgba(13, 148, 136, 0.05) 0%, rgba(30, 58, 138, 0.05) 100%);
  padding: 30px;
  border-radius: 16px;
  border: 1px solid rgba(13, 148, 136, 0.2);
  text-align: center;
  margin-bottom: 40px;
}

.download-title {
  font-family: var(--font-english);
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--primary-blue);
  margin-bottom: 15px;
}

.download-title.urdu {
  font-family: var(--font-urdu);
  direction: rtl;
}

.download-btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  background: var(--gradient-hero);
  color: white;
  padding: 15px 30px;
  border: none;
  border-radius: 12px;
  font-size: 1.1rem;
  font-weight: 600;
  font-family: var(--font-english);
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px var(--shadow-blue);
  position: relative;
  overflow: hidden;
}

.download-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 35px var(--shadow-teal);
  color: white;
  text-decoration: none;
}

.download-btn svg {
  width: 20px;
  height: 20px;
}

.download-btn.urdu {
  font-family: var(--font-urdu);
}

.file-info {
  margin-top: 15px;
  font-size: 0.9rem;
  color: var(--text-light);
}

/* Author Info */
.author-section {
  background: rgba(255, 255, 255, 0.8);
  padding: 30px;
  border-radius: 16px;
  border: 1px solid rgba(13, 148, 136, 0.2);
  margin-bottom: 40px;
}

.author-title {
  font-family: var(--font-english);
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--primary-blue);
  margin-bottom: 20px;
}

.author-title.urdu {
  font-family: var(--font-urdu);
  direction: rtl;
  text-align: right;
}

.author-info {
  display: flex;
  align-items: center;
  gap: 20px;
}

.author-avatar {
  width: 60px;
  height: 60px;
  background: var(--gradient-hero);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1.5rem;
  font-weight: 700;
  font-family: var(--font-english);
}

.author-details h4 {
  font-family: var(--font-english);
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
  margin: 0 0 5px 0;
}

.author-details h4.urdu {
  font-family: var(--font-urdu);
  direction: rtl;
}

.author-details p {
  color: var(--text-medium);
  margin: 0;
  font-size: 1rem;
}

/* Navigation */
.research-navigation {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 50px;
  padding-top: 30px;
  border-top: 1px solid rgba(13, 148, 136, 0.2);
}

.nav-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: rgba(255, 255, 255, 0.9);
  color: var(--text-medium);
  padding: 12px 20px;
  border: 2px solid rgba(13, 148, 136, 0.2);
  border-radius: 12px;
  font-family: var(--font-english);
  font-weight: 500;
  text-decoration: none;
  transition: all 0.3s ease;
  backdrop-filter: blur(5px);
}

.nav-btn:hover {
  background: var(--accent-teal);
  color: white;
  border-color: var(--accent-teal);
  transform: translateY(-2px);
  box-shadow: 0 8px 20px var(--shadow-teal);
  text-decoration: none;
}

.nav-btn svg {
  width: 18px;
  height: 18px;
}

.nav-btn.urdu {
  font-family: var(--font-urdu);
}

/* Error/Not Found State */
.not-found-state {
  text-align: center;
  padding: 80px 40px;
  color: var(--text-medium);
}

.not-found-icon {
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

.not-found-icon svg {
  width: 50px;
  height: 50px;
}

.not-found-state h2 {
  font-family: var(--font-english);
  font-size: 2rem;
  color: var(--primary-blue);
  margin: 0 0 15px 0;
}

.not-found-state p {
  font-size: 1.1rem;
  line-height: 1.6;
  max-width: 400px;
  margin: 0 auto 30px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .single-research-page {
    padding: 40px 15px;
  }
  
  .research-wrapper {
    padding: 40px 30px;
  }
  
  .research-title {
    font-size: 2rem;
  }
  
  .research-title.urdu {
    font-size: 2.2rem;
  }
  
  .research-meta {
    flex-direction: column;
    gap: 15px;
  }
  
  .author-info {
    flex-direction: column;
    text-align: center;
  }
  
  .research-navigation {
    flex-direction: column;
    gap: 15px;
  }
  
  .breadcrumb {
    flex-wrap: wrap;
    gap: 4px;
  }
}

@media (max-width: 480px) {
  .single-research-page {
    padding: 30px 10px;
  }
  
  .research-wrapper {
    padding: 30px 20px;
  }
  
  .research-title {
    font-size: 1.8rem;
  }
  
  .research-title.urdu {
    font-size: 2rem;
  }
  
  .download-btn {
    padding: 12px 24px;
    font-size: 1rem;
  }
  
  .nav-btn {
    padding: 10px 16px;
    font-size: 0.9rem;
  }
}

/* Print Styles */
@media print {
  .single-research-page {
    background: white !important;
  }
  
  .research-wrapper {
    box-shadow: none !important;
    border: 1px solid #ccc !important;
  }
  
  .breadcrumb-nav,
  .research-navigation,
  .download-section {
    display: none !important;
  }
  
  .research-title {
    color: black !important;
  }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
  .research-wrapper,
  .download-btn,
  .nav-btn {
    transition: none;
  }
}

/* High contrast mode */
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
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); 
    // Get custom fields
    $author_name = get_post_meta(get_the_ID(), 'author_name', true);
    $author_email = get_post_meta(get_the_ID(), 'author_email', true);
    $submission_date = get_post_meta(get_the_ID(), 'submission_date', true);
    $research_detail = get_post_meta(get_the_ID(), 'research_detail', true);
    $research_category = get_post_meta(get_the_ID(), 'research_category', true);
    $research_language = get_post_meta(get_the_ID(), 'research_language', true);
    $research_file = get_post_meta(get_the_ID(), 'research_file', true);
    
    // Default to English if language not set
    if (empty($research_language)) {
        $research_language = 'english';
    }
    
    $is_urdu = ($research_language === 'urdu');
    $lang_class = $is_urdu ? 'urdu' : 'english';
    
    // Get file URL
    $file_url = $research_file ? wp_get_attachment_url($research_file) : '';
?>

<main class="single-research-page">
  <!-- Breadcrumb -->
  <nav class="breadcrumb-nav">
    <div class="breadcrumb">
      <a href="<?php echo home_url(); ?>">Home</a>
      <span class="breadcrumb-separator">/</span>
      <a href="<?php echo home_url('/approved-research/'); ?>">Research</a>
      <span class="breadcrumb-separator">/</span>
      <span><?php echo wp_trim_words(get_the_title(), 5, '...'); ?></span>
    </div>
  </nav>

  <!-- Research Container -->
  <section class="research-container">
    <article class="research-wrapper">
      
      <!-- Research Header -->
      <header class="research-header">
        <div class="research-header-ornament">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
          </svg>
        </div>
        
        <h1 class="research-title <?php echo $lang_class; ?>"><?php the_title(); ?></h1>
        
        <div class="research-meta">
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
              <circle cx="12" cy="7" r="4"/>
            </svg>
            <span><strong><?php echo $is_urdu ? 'مصنف:' : 'Author:'; ?></strong> <?php echo esc_html($author_name); ?></span>
          </div>
          
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            <span><strong><?php echo $is_urdu ? 'تاریخ:' : 'Date:'; ?></strong> <?php echo esc_html($submission_date); ?></span>
          </div>
          
          <div class="meta-item">
            <span class="language-badge <?php echo $lang_class; ?>">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
              </svg>
              <?php echo $is_urdu ? 'اردو' : 'English'; ?>
            </span>
          </div>
          
          <?php if ($research_category) : ?>
          <div class="meta-item">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
            </svg>
            <span><strong><?php echo $is_urdu ? 'قسم:' : 'Category:'; ?></strong> <?php echo esc_html($research_category); ?></span>
          </div>
          <?php endif; ?>
        </div>
      </header>

      <!-- Research Content -->
      <div class="research-content">
        <div class="content-section">
          <h2 class="section-title <?php echo $lang_class; ?>">
            <?php echo $is_urdu ? 'تحقیق کی تفصیلات' : 'Research Details'; ?>
          </h2>
          <div class="research-description <?php echo $lang_class; ?>">
            <?php echo wp_kses_post(nl2br($research_detail)); ?>
          </div>
        </div>
      </div>

      <!-- Download Section -->
      <?php if ($file_url) : ?>
      <div class="download-section">
        <h3 class="download-title <?php echo $lang_class; ?>">
          <?php echo $is_urdu ? 'تحقیقی مقالہ ڈاؤن لوڈ کریں' : 'Download Research Paper'; ?>
        </h3>
        <a href="<?php echo esc_url($file_url); ?>" class="download-btn <?php echo $lang_class; ?>" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14,2 14,8 20,8"/>
            <path d="m12 18-4-4m8 0-4 4m0-8v8"/>
          </svg>
          <?php echo $is_urdu ? 'PDF ڈاؤن لوڈ کریں' : 'Download PDF'; ?>
        </a>
        <div class="file-info">
          <?php echo $is_urdu ? 'PDF فارمیٹ میں دستیاب' : 'Available in PDF format'; ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- Author Section -->
      <div class="author-section">
        <h3 class="author-title <?php echo $lang_class; ?>">
          <?php echo $is_urdu ? 'مصنف کی معلومات' : 'Author Information'; ?>
        </h3>
        <div class="author-info">
          <div class="author-avatar">
            <?php echo strtoupper(substr($author_name, 0, 1)); ?>
          </div>
          <div class="author-details">
            <h4 class="<?php echo $lang_class; ?>"><?php echo esc_html($author_name); ?></h4>
            <p>
              <?php echo $is_urdu ? 'تحقیقی مقالہ نگار' : 'Research Author'; ?>
              <?php if ($author_email) : ?>
                • <a href="mailto:<?php echo esc_attr($author_email); ?>"><?php echo esc_html($author_email); ?></a>
              <?php endif; ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <nav class="research-navigation">
        <a href="<?php echo home_url('/approved-research/'); ?>" class="nav-btn <?php echo $lang_class; ?>">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
          </svg>
          <?php echo $is_urdu ? 'واپس فہرست میں' : 'Back to List'; ?>
        </a>
        
        <?php
        // Get next/previous posts
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        ?>
        
        <div style="display: flex; gap: 15px;">
          <?php if ($prev_post) : ?>
          <a href="<?php echo get_permalink($prev_post); ?>" class="nav-btn <?php echo $lang_class; ?>">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
            </svg>
            <?php echo $is_urdu ? 'پچھلا' : 'Previous'; ?>
          </a>
          <?php endif; ?>
          
          <?php if ($next_post) : ?>
          <a href="<?php echo get_permalink($next_post); ?>" class="nav-btn <?php echo $lang_class; ?>">
            <?php echo $is_urdu ? 'اگلا' : 'Next'; ?>
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
            </svg>
          </a>
          <?php endif; ?>
        </div>
      </nav>

    </article>
  </section>
</main>

<?php endwhile; else : ?>

<main class="single-research-page">
  <section class="research-container">
    <div class="research-wrapper">
      <div class="not-found-state">
        <div class="not-found-icon">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h2>Research Not Found</h2>
        <p>تحقیقی مقالہ موجود نہیں۔<br>The requested research submission could not be found.</p>
        <a href="<?php echo home_url('/approved-research/'); ?>" class="nav-btn">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
          </svg>
          Back to Research List
        </a>
      </div>
    </div>
  </section>
</main>

<?php endif; ?>

<?php get_footer(); ?>