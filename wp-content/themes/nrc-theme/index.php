<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */

get_header();
?>

<div class="container">
    <div class="content-area" style="padding: 2rem 0;">
        
        <?php if (have_posts()) : ?>
            
            <div class="posts-container">
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <time class="entry-date published" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </time>
                                </span>
                                
                                <span class="byline">
                                    by <?php the_author(); ?>
                                </span>
                            </div>
                        </header>
                        
                        <div class="entry-content">
                            <?php
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 30, '...');
                            }
                            ?>
                        </div>
                        
                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                Read More →
                            </a>
                        </footer>
                    </article>
                    
                <?php endwhile; ?>
                
                <div class="pagination">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>
                
            </div>
            
        <?php else : ?>
            
            <div class="no-posts">
                <h2>Nothing Found</h2>
                <p>It looks like nothing was found at this location. Maybe try a search?</p>
                <?php get_search_form(); ?>
            </div>
            
        <?php endif; ?>
        
    </div>
</div>

<style>
.post-item {
    background: #fff;
    padding: 2rem;
    margin-bottom: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(13, 148, 136, 0.1);
}

.entry-title {
    margin: 0 0 1rem 0;
    font-size: 1.5rem;
    color: #1e3a8a;
}

.entry-title a {
    text-decoration: none;
    color: inherit;
    transition: color 0.3s ease;
}

.entry-title a:hover {
    color: #0d9488;
}

.entry-meta {
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #666;
}

.entry-meta span {
    margin-right: 1rem;
}

.entry-content {
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.read-more {
    color: #0d9488;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: #1e3a8a;
}

.no-posts {
    text-align: center;
    padding: 4rem 2rem;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
}

.no-posts h2 {
    color: #1e3a8a;
    margin-bottom: 1rem;
}

.pagination {
    margin-top: 3rem;
    text-align: center;
}

.pagination .nav-links {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.pagination a,
.pagination span {
    padding: 0.5rem 1rem;
    background: #fff;
    border: 2px solid rgba(13, 148, 136, 0.2);
    border-radius: 8px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
}

.pagination a:hover,
.pagination .current {
    background: #0d9488;
    color: #fff;
    border-color: #0d9488;
}

@media (max-width: 768px) {
    .post-item {
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .entry-title {
        font-size: 1.3rem;
    }
    
    .entry-meta span {
        display: block;
        margin-right: 0;
        margin-bottom: 0.5rem;
    }
}
</style>

<?php get_footer(); ?>