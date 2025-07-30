<?php
/* Template Name: Urdu Research Submission Form */

get_header(); 
?>

<style>
/* Urdu Research Submission Page Styles - Cool-toned Islamic Theme */
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
  --font-urdu: 'Noto Nastaliq Urdu', 'Amiri', 'Scheherazade New', serif;
  --font-arabic: 'Amiri', 'Scheherazade New', serif;
  --font-english: 'Libre Baskerville', serif;
  --font-body: 'Noto Nastaliq Urdu', 'Amiri', serif;
  --gradient-cool: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
  --gradient-hero: linear-gradient(135deg, #1e3a8a 0%, #3730a3 50%, #0d9488 100%);
}

.research-submission-page {
  background: var(--gradient-cool);
  color: var(--text-dark);
  font-family: var(--font-body);
  line-height: 1.8;
  direction: rtl;
  position: relative;
  min-height: 100vh;
  padding: 60px 20px;
}

.research-submission-page::before {
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

.research-hero {
  text-align: center;
  margin-bottom: 40px;
  padding-top: 2rem;
  position: relative;
}

.hero-ornament {
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
  margin: 0 auto 30px;
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
  font-family: var(--font-urdu);
  font-size: 3rem;
  font-weight: 700;
  color: var(--primary-blue);
  margin: 0 0 20px 0;
  position: relative;
  padding-bottom: 20px;
  direction: rtl;
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

.research-hero .english-title {
  font-family: var(--font-english);
  font-size: 1.5rem;
  color: var(--accent-teal);
  display: block;
  padding-top: 1rem;
  margin-bottom: 15px;
  font-weight: 400;
  direction: ltr;
}

.research-hero p {
  font-size: 1.2rem;
  color: var(--text-medium);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.7;
  font-family: var(--font-urdu);
  direction: rtl;
}

.research-form-container {
  max-width: 800px;
  margin: 0 auto;
  position: relative;
}

.research-form-wrapper {
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
  transition: all 0.3s ease;
  direction: rtl;
}

.research-form-wrapper:hover {
  transform: translateY(-5px);
  box-shadow: 
    0 35px 70px var(--shadow-teal),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

.research-form-wrapper::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, var(--accent-teal) 0%, var(--primary-blue) 50%, var(--accent-teal) 100%);
}

.form-header {
  text-align: center;
  margin-bottom: 40px;
  position: relative;
}

.form-header-ornament {
  margin: 0 auto 20px;
  width: 60px;
  height: 60px;
  color: var(--accent-teal);
  background: rgba(13, 92, 148, 0.1);
  margin-bottom: 2rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form-header-ornament svg {
  width: 30px;
  height: 30px;
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
}

.research-form-wrapper h2 {
  font-family: var(--font-urdu);
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--primary-blue);
  margin: 0 0 15px 0;
  position: relative;
  direction: rtl;
}

.form-subtitle {
  font-size: 1.1rem;
  color: var(--text-medium);
  margin: 0;
  font-style: italic;
  font-family: var(--font-urdu);
  direction: rtl;
}

.form-group {
  margin-bottom: 30px;
  position: relative;
  direction: rtl;
}

.research-form-wrapper label {
  font-family: var(--font-urdu);
  font-weight: 600;
  display: block;
  margin-bottom: 10px;
  color: var(--text-dark);
  font-size: 1.1rem;
  position: relative;
  text-align: right;
}

.label-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-left: 8px;
  margin-right: 0;
  color: var(--accent-teal);
  vertical-align: middle;
}

.research-form-wrapper input[type="text"],
.research-form-wrapper input[type="email"],
.research-form-wrapper input[type="file"],
.research-form-wrapper input[type="date"],
.research-form-wrapper textarea,
.research-form-wrapper select {
  width: 100%;
  padding: 15px 18px;
  border: 2px solid rgba(13, 148, 136, 0.2);
  border-radius: 12px;
  font-size: 1rem;
  font-family: var(--font-urdu);
  background: rgba(255, 255, 255, 0.9);
  color: var(--text-dark);
  transition: all 0.3s ease;
  box-sizing: border-box;
  text-align: right;
  direction: rtl;
}

.research-form-wrapper select {
  padding-right: 18px;
  padding-left: 40px;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%230d9488' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6,9 12,15 18,9'%3e%3c/polyline%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: 12px center;
  background-size: 16px;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.research-form-wrapper select option {
  padding: 10px 15px;
  text-align: right;
  direction: rtl;
  font-family: var(--font-urdu);
  background: white;
  color: var(--text-dark);
}

.research-form-wrapper select optgroup {
  font-weight: bold;
  font-family: var(--font-urdu);
  color: var(--primary-blue);
  background: #f8fafc;
  padding: 8px 15px;
  text-align: right;
  direction: rtl;
}

.research-form-wrapper select optgroup option {
  font-weight: normal;
  padding-right: 25px;
  background: white;
  color: var(--text-dark);
}

.research-form-wrapper input:focus,
.research-form-wrapper textarea:focus,
.research-form-wrapper select:focus {
  border-color: var(--accent-teal);
  outline: none;
  background: white;
  box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.1);
  transform: translateY(-2px);
}

.research-form-wrapper textarea {
  resize: vertical;
  min-height: 120px;
  line-height: 1.6;
}

.research-form-wrapper input[type="email"],
.research-form-wrapper input[type="date"] {
  direction: ltr;
  text-align: left;
}

.file-upload-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  width: 100%;
}

.research-form-wrapper input[type="file"] {
  position: relative;
  z-index: 2;
  background: transparent;
  cursor: pointer;
  direction: rtl;
}

.research-form-wrapper input[type="file"]::-webkit-file-upload-button {
  background: var(--accent-teal);
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  margin-left: 15px;
  margin-right: 0;
  transition: background-color 0.3s ease;
  font-family: var(--font-urdu);
}

.research-form-wrapper input[type="file"]::-webkit-file-upload-button:hover {
  background: var(--primary-blue);
}

.submit-wrapper {
  text-align: center;
  margin-top: 40px;
  position: relative;
}

.submit-ornament {
  margin: 0 auto 20px;
  width: 100px;
  height: 20px;
  color: var(--accent-teal);
  opacity: 0.7;
}

.submit-ornament svg {
  width: 100%;
  height: 100%;
}

.research-form-wrapper input[type="submit"] {
  background: var(--gradient-hero);
  color: white;
  padding: 18px 40px;
  border: none;
  border-radius: 12px;
  font-size: 1.1rem;
  font-weight: 700;
  font-family: var(--font-urdu);
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px var(--shadow-blue);
  position: relative;
  overflow: hidden;
}

.research-form-wrapper input[type="submit"]:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 35px var(--shadow-teal);
}

.research-form-wrapper input[type="submit"]:active {
  transform: translateY(-1px);
}

.research-form-wrapper input[type="submit"]:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
  backdrop-filter: blur(5px);
  z-index: 99999;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.modal-overlay.show {
  opacity: 1;
  visibility: visible;
}

.modal-content {
  background: white;
  border-radius: 20px;
  padding: 40px;
  max-width: 500px;
  width: 90%;
  text-align: center;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
  transform: scale(0.8) translateY(50px);
  transition: all 0.3s ease;
  position: relative;
  direction: rtl;
  font-family: var(--font-urdu);
}

.modal-overlay.show .modal-content {
  transform: scale(1) translateY(0);
}

.modal-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto 20px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
}

.modal-icon.success {
  background: linear-gradient(135deg, var(--accent-teal), #0f766e);
  color: white;
}

.modal-icon.error {
  background: linear-gradient(135deg, #dc2626, #b91c1c);
  color: white;
}

.modal-title {
  font-family: var(--font-urdu);
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--text-dark);
  margin: 0 0 15px 0;
}

.modal-message {
  font-size: 1.1rem;
  color: var(--text-medium);
  line-height: 1.6;
  margin: 0 0 30px 0;
  font-family: var(--font-urdu);
}

.modal-button {
  background: var(--gradient-hero);
  color: white;
  padding: 12px 30px;
  border: none;
  border-radius: 10px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: var(--font-urdu);
}

.modal-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px var(--shadow-blue);
}

.toast-container {
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 99999;
  pointer-events: none;
  direction: rtl;
}

.toast {
  background: white;
  border-radius: 12px;
  padding: 20px 25px;
  margin-bottom: 10px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  border-right: 5px solid var(--accent-teal);
  border-left: none;
  display: flex;
  align-items: center;
  gap: 15px;
  min-width: 350px;
  transform: translateX(-100%);
  transition: all 0.3s ease;
  pointer-events: auto;
  position: relative;
  direction: rtl;
  font-family: var(--font-urdu);
}

.toast.show {
  transform: translateX(0);
}

.toast.success {
  border-right-color: var(--accent-teal);
}

.toast.error {
  border-right-color: #dc2626;
}

.toast-icon {
  width: 24px;
  height: 24px;
  flex-shrink: 0;
}

.toast-icon.success {
  color: var(--accent-teal);
}

.toast-icon.error {
  color: #dc2626;
}

.toast-content {
  flex: 1;
}

.toast-title {
  font-weight: 600;
  color: var(--text-dark);
  margin: 0 0 5px 0;
  font-size: 1rem;
}

.toast-message {
  color: var(--text-medium);
  margin: 0;
  font-size: 0.9rem;
  line-height: 1.4;
}

.toast-close {
  background: none;
  border: none;
  color: var(--text-light);
  cursor: pointer;
  padding: 0;
  width: 20px;
  height: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: color 0.3s ease;
}

.toast-close:hover {
  color: var(--text-dark);
}

.success-animation {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 99999;
  pointer-events: none;
}

.checkmark {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  display: block;
  stroke-width: 3;
  stroke: var(--accent-teal);
  stroke-miterlimit: 10;
  box-shadow: inset 0px 0px 0px var(--accent-teal);
  animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
  position: relative;
}

.checkmark__circle {
  stroke-dasharray: 166;
  stroke-dashoffset: 166;
  stroke-width: 3;
  stroke-miterlimit: 10;
  stroke: var(--accent-teal);
  fill: white;
  animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark__check {
  transform-origin: 50% 50%;
  stroke-dasharray: 48;
  stroke-dashoffset: 48;
  animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes scale {
  0%, 100% {
    transform: none;
  }
  50% {
    transform: scale3d(1.1, 1.1, 1);
  }
}

@keyframes fill {
  100% {
    box-shadow: inset 0px 0px 0px 60px var(--accent-teal);
  }
}

.small-text {
  color: var(--text-light);
  font-size: 0.9rem;
  margin-top: 5px;
  display: block;
  text-align: right;
  direction: rtl;
}

/* Error states for form validation */
.form-group.error input,
.form-group.error textarea,
.form-group.error select {
  border-color: #dc2626;
  box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}

.error-message {
  color: #dc2626;
  font-size: 0.9rem;
  margin-top: 5px;
  display: none;
  text-align: right;
  direction: rtl;
  font-family: var(--font-urdu);
}

.form-group.error .error-message {
  display: block;
}

/* Loading spinner */
.loading-spinner {
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 3px solid rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
  margin-left: 10px;
}

@keyframes spin {
  to { transform: rotate(360deg); }
}

@media (max-width: 768px) {
  .research-submission-page {
    padding: 40px 15px;
  }
  
  .research-hero h1 {
    font-size: 2.2rem;
  }
  
  .research-form-wrapper {
    padding: 40px 30px;
  }
  
  .research-form-wrapper h2 {
    font-size: 1.8rem;
  }
  
  .modal-content {
    padding: 30px 20px;
  }
  
  .toast {
    min-width: auto;
    margin: 0 10px 10px 10px;
  }
  
  .toast-container {
    left: 0;
    right: 0;
  }
}

@media (max-width: 480px) {
  .research-submission-page {
    padding: 30px 10px;
  }
  
  .research-hero h1 {
    font-size: 1.8rem;
  }
  
  .research-form-wrapper {
    padding: 30px 20px;
  }
  
  .research-form-wrapper h2 {
    font-size: 1.6rem;
  }
  
  .research-form-wrapper input[type="submit"] {
    padding: 15px 30px;
    font-size: 1rem;
  }
}

@media print {
  .research-submission-page {
    background: white !important;
  }
  
  .research-form-wrapper {
    box-shadow: none !important;
    border: 1px solid #ccc !important;
  }
  
  .modal-overlay,
  .toast-container {
    display: none !important;
  }
}

@media (prefers-reduced-motion: reduce) {
  .research-form-wrapper,
  .research-form-wrapper input,
  .research-form-wrapper textarea,
  .modal-overlay,
  .modal-content,
  .toast,
  .checkmark {
    transition: none;
    animation: none;
  }
}

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

<main class="research-submission-page">
  <section class="research-hero">
    <h1>
      اپنا تحقیقی کام جمع کرائیں
    </h1>
    <p>نعتیہ ادب اور اسلامی علوم کی دنیا میں اپنی علمی خدمات کا اشتراک کریں۔ آپ کی تحقیق کا جائزہ ہماری علمی کمیٹی لے گی۔</p>
  </section>

  <section class="research-form-container">
    <div class="research-form-wrapper">
      <div class="form-header">
        <div class="form-header-ornament">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
          </svg>
        </div>
        <h2>تحقیقی مقالہ جمع کرنے کا فارم</h2>
        <p class="form-subtitle">براہ کرم نیچے دی گئی تمام ضروری معلومات بھریں</p>
      </div>

      <form method="post" enctype="multipart/form-data" id="research-form">
        <?php wp_nonce_field('submit_research', 'research_nonce'); ?>
        
        <!-- Hidden language field -->
        <input type="hidden" name="research_language" value="urdu">
        
        <div class="form-group">
          <label for="research_title">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
            </svg>
            تحقیق کا عنوان *
          </label>
          <input type="text" name="research_title" id="research_title" required 
                 placeholder="اپنی تحقیق کا عنوان درج کریں" maxlength="200">
          <div class="error-message">براہ کرم تحقیق کا عنوان درج کریں</div>
        </div>

        <!-- Categories - Fixed Structure -->
        <div class="form-group">
          <label for="research_category">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
            </svg>
            تحقیق کی قسم *
          </label>
          <select name="research_category" id="research_category" required>
            <option value="">ایک قسم منتخب کریں</option>

            <optgroup label="شعری کتب">
              <option value="Hamd">حمد و مناجات</option>
              <option value="Naat">نعت</option>
              <option value="Mathnawi">مثنوی</option>
              <option value="Manaqib">مناقب و سلام</option>
              <option value="Marsiya">مرثیہ</option>
            </optgroup>

            <optgroup label="نثری کتب">
              <option value="Tadqiq">تحقیق</option>
              <option value="Tanqeed">تنقید</option>
              <option value="TadqiqTanqeed">تحقیق و تنقید</option>
              <option value="Tazkira">تذکرے</option>
              <option value="Mazaameen">مضامین</option>
            </optgroup>

            <optgroup label="رسائل">
              <option value="NaatRang">نعت رنگ</option>
              <option value="Conference">کانفرنس</option>
            </optgroup>
          </select>
          <div class="error-message">براہ کرم ایک قسم منتخب کریں</div>
        </div>
        <!-- Categories End -->

        <div class="form-group">
          <label for="research_content">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14,2 14,8 20,8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
            </svg>
            تحقیق کی تفصیلات *
          </label>
          <textarea name="research_content" id="research_content" required 
                    placeholder="اپنی تحقیقی کام، طریقہ کار، اور نتائج کی تفصیلی وضاحت فراہم کریں..."
                    maxlength="5000"></textarea>
          <div class="error-message">براہ کرم تحقیق کی تفصیلات فراہم کریں</div>
        </div>

        <div class="form-group">
          <label for="author_name">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
              <circle cx="12" cy="7" r="4"/>
            </svg>
            مصنف کا نام *
          </label>
          <input type="text" name="author_name" id="author_name" required 
                 placeholder="اپنا مکمل نام درج کریں" maxlength="100">
          <div class="error-message">براہ کرم اپنا نام درج کریں</div>
        </div>

        <div class="form-group">
          <label for="author_email">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
            ای میل ایڈریس *
          </label>
          <input type="email" name="author_email" id="author_email" required 
                 placeholder="اپنا ای میل ایڈریس درج کریں" maxlength="100">
          <div class="error-message">براہ کرم صحیح ای میل ایڈریس درج کریں</div>
        </div>

        <div class="form-group">
          <label for="submission_date">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            جمع کرنے کی تاریخ *
          </label>
          <input type="date" name="submission_date" id="submission_date" required 
                 max="<?php echo date('Y-m-d'); ?>"
                 value="<?php echo date('Y-m-d'); ?>">
          <div class="error-message">براہ کرم تاریخ منتخب کریں</div>
        </div>

        <div class="form-group">
          <label for="research_file">
            <svg class="label-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14,2 14,8 20,8"/>
            </svg>
            تحقیق اپ لوڈ کریں (PDF) *
          </label>
          <div class="file-upload-wrapper">
            <input type="file" name="research_file" id="research_file" 
                   accept=".pdf" required>
          </div>
          <small class="small-text">
            زیادہ سے زیادہ فائل کا سائز: ۱۰ میگا بائٹ۔ صرف PDF فائلز کی اجازت ہے۔
          </small>
          <div class="error-message">براہ کرم PDF فائل اپ لوڈ کریں</div>
        </div>

        <div class="submit-wrapper">
          <div class="submit-ornament">
            <svg viewBox="0 0 100 20" fill="currentColor">
              <path d="M10 10 Q25 5, 40 10 Q55 15, 70 10 Q85 5, 90 10"/>
              <circle cx="50" cy="10" r="1.5"/>
            </svg>
          </div>
          <input type="submit" value="تحقیق جمع کریں" id="submit-btn">
        </div>
      </form>
    </div>
  </section>
</main>

<div class="toast-container" id="toast-container"></div>

<div class="modal-overlay" id="modal-overlay">
  <div class="modal-content">
    <div class="modal-icon" id="modal-icon">
      <span id="modal-icon-content">✓</span>
    </div>
    <h3 class="modal-title" id="modal-title">کامیابی!</h3>
    <p class="modal-message" id="modal-message">آپ کی تحقیق کامیابی سے جمع کر دی گئی ہے۔</p>
    <button class="modal-button" onclick="closeModal()">جاری رکھیں</button>
  </div>
</div>

<div class="success-animation" id="success-animation" style="display: none;">
  <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
    <circle class="checkmark__circle" fill="none" cx="26" cy="26" r="25"/>
    <path class="checkmark__check" fill="none" d="m14.1 27.2l7.1 7.2 16.7-16.8"/>
  </svg>
</div>

<script>
// Make sure WordPress AJAX URL is available
const ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';

class NotificationSystem {
  constructor() {
    this.toastContainer = document.getElementById('toast-container');
    this.modal = document.getElementById('modal-overlay');
  }

  showToast(type, title, message, duration = 5000) {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    
    const iconSvg = type === 'success' 
      ? '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
      : '<svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
    
    toast.innerHTML = `
      <div class="toast-icon ${type}">${iconSvg}</div>
      <div class="toast-content">
        <div class="toast-title">${title}</div>
        <div class="toast-message">${message}</div>
      </div>
      <button class="toast-close" onclick="this.parentElement.remove()">×</button>
    `;
    
    this.toastContainer.appendChild(toast);
    
    setTimeout(() => toast.classList.add('show'), 100);
    
    setTimeout(() => {
      if (toast.parentNode) {
        toast.classList.remove('show');
        setTimeout(() => {
          if (toast.parentNode) {
            toast.remove();
          }
        }, 300);
      }
    }, duration);
  }

  showModal(type, title, message) {
    const modal = this.modal;
    const icon = document.getElementById('modal-icon');
    const iconContent = document.getElementById('modal-icon-content');
    const titleEl = document.getElementById('modal-title');
    const messageEl = document.getElementById('modal-message');
    
    icon.className = `modal-icon ${type}`;
    iconContent.textContent = type === 'success' ? '✓' : '✕';
    titleEl.textContent = title;
    messageEl.textContent = message;
    
    modal.classList.add('show');
  }

  showSuccessAnimation() {
    const animation = document.getElementById('success-animation');
    animation.style.display = 'block';
    
    setTimeout(() => {
      animation.style.display = 'none';
    }, 2000);
  }
}

const notifications = new NotificationSystem();

// Form validation functions
function validateField(field) {
  const formGroup = field.closest('.form-group');
  const value = field.value.trim();
  let isValid = true;
  
  // Remove previous error state
  formGroup.classList.remove('error');
  
  // Check if field is required and empty
  if (field.hasAttribute('required') && !value) {
    isValid = false;
  }
  
  // Email validation
  if (field.type === 'email' && value) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(value)) {
      isValid = false;
    }
  }
  
  // File validation
  if (field.type === 'file' && field.files.length > 0) {
    const file = field.files[0];
    if (file.type !== 'application/pdf') {
      isValid = false;
      notifications.showToast('error', 'غلط فائل', 'براہ کرم صرف PDF فائل منتخب کریں۔');
    } else if (file.size > 10 * 1024 * 1024) {
      isValid = false;
      notifications.showToast('error', 'فائل بہت بڑی', 'فائل کا سائز ۱۰ میگا بائٹ سے کم ہونا ضروری ہے۔');
    }
  }
  
  if (!isValid) {
    formGroup.classList.add('error');
  }
  
  return isValid;
}

function validateForm(form) {
  const requiredFields = form.querySelectorAll('[required]');
  let isValid = true;
  
  requiredFields.forEach(field => {
    if (!validateField(field)) {
      isValid = false;
    }
  });
  
  return isValid;
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('research-form');
    const submitBtn = document.getElementById('submit-btn');
    const fileInput = document.getElementById('research_file');
    
    // Real-time validation
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
      input.addEventListener('blur', () => validateField(input));
      input.addEventListener('input', () => {
        const formGroup = input.closest('.form-group');
        if (formGroup.classList.contains('error')) {
          validateField(input);
        }
      });
    });
    
    // File input change handler
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                if (file.type !== 'application/pdf') {
                    notifications.showToast('error', 'غلط فائل', 'براہ کرم صرف PDF فائل منتخب کریں۔');
                    this.value = '';
                    return;
                }
                
                if (file.size > 10 * 1024 * 1024) {
                    notifications.showToast('error', 'فائل بہت بڑی', 'فائل کا سائز ۱۰ میگا بائٹ سے کم ہونا ضروری ہے۔');
                    this.value = '';
                    return;
                }
                
                notifications.showToast('success', 'فائل منتخب ہوئی', 'PDF فائل کامیابی سے منتخب ہوئی۔');
            }
        });
    }
    
    // Form submission handler
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            console.log('Form submission started');
            
            // Validate form
            if (!validateForm(form)) {
                notifications.showToast('error', 'توثیق کی خرابی', 'براہ کرم تمام ضروری خانے صحیح طریقے سے بھریں۔');
                return;
            }
            
            // Disable submit button and show loading state
            submitBtn.disabled = true;
            const originalValue = submitBtn.value;
            submitBtn.innerHTML = '<span class="loading-spinner"></span>جمع کیا جا رہا ہے...';
            
            // Prepare form data
            const formData = new FormData(form);
            formData.append('action', 'submit_research');
            
            console.log('Sending AJAX request to:', ajaxUrl);
            
            // Send AJAX request
            fetch(ajaxUrl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(response => {
                console.log('Response status:', response.status);
                console.log('Response headers:', response.headers);
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    return response.text().then(text => {
                        console.error('Non-JSON response:', text);
                        throw new Error('Server returned non-JSON response');
                    });
                }
                
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                
                if (data.success) {
                    notifications.showSuccessAnimation();
                    
                    setTimeout(() => {
                        notifications.showModal('success', 'کامیابی!', data.data.message || 'آپ کی تحقیق کامیابی سے جمع ہو گئی۔');
                    }, 1500);
                    
                    // Reset form
                    form.reset();
                    document.getElementById('submission_date').value = '<?php echo date('Y-m-d'); ?>';
                    
                    // Remove any error states
                    form.querySelectorAll('.form-group.error').forEach(group => {
                        group.classList.remove('error');
                    });
                    
                } else {
                    console.error('Submission failed:', data);
                    notifications.showModal('error', 'خرابی!', data.data?.message || 'آپ کی تحقیق جمع کرنے میں خرابی پیش آئی۔');
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                notifications.showModal('error', 'خرابی!', 'کچھ غلط ہو گیا۔ براہ کرم اپنا انٹرنیٹ کنکشن چیک کریں اور دوبارہ کوشش کریں۔');
            })
            .finally(() => {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalValue;
            });
        });
    }
});

function closeModal() {
    document.getElementById('modal-overlay').classList.remove('show');
}

// Modal event listeners
document.getElementById('modal-overlay').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Prevent form submission on Enter key (except in textarea)
document.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA') {
        e.preventDefault();
    }
});
</script>

<?php get_footer(); ?>