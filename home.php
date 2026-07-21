<?php
/**
 * Blog / Posts Page Template
 * WordPress automatically uses this when a page is set as the "Posts page"
 * in Settings → Reading.
 */
get_header();

vtg_page_hero(array(
    'title' => 'News',
    'intro' => 'Latest updates, project milestones, and announcements from Venaka TReLeaf.',
    'breadcrumbs' => array(
        array('label' => 'Insights', 'url' => '/insights/'),
        array('label' => 'News'),
    ),
));
?>

<div class="vtg-container">
  <div class="vtg-inner-layout">

    <?php vtg_render_sidebar('insights'); ?>

    <div class="vtg-inner-content">

      <?php if (have_posts()) : ?>

        <?php $first = true; ?>
        <?php while (have_posts()) : the_post(); ?>

          <?php if ($first) : $first = false; ?>
            <!-- Featured / Latest Post -->
            <article class="vtg-news-featured vtg-fade-up">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="vtg-news-featured__img">
                  <?php the_post_thumbnail('large'); ?>
                </a>
              <?php endif; ?>
              <div class="vtg-news-featured__body">
                <div class="vtg-news-meta">
                  <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                  <?php foreach (get_the_category() as $cat) : ?>
                    <span class="vtg-news-tag"><?php echo esc_html($cat->name); ?></span>
                  <?php endforeach; ?>
                </div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo wp_trim_words(get_the_excerpt(), 40); ?></p>
                <a href="<?php the_permalink(); ?>" class="vtg-news-link">Read more &rarr;</a>
              </div>
            </article>

            <?php
            // Check if there are more posts for the grid
            if ($wp_query->post_count > 1) :
            ?>
            <div class="vtg-news-grid">
            <?php endif; ?>

          <?php else : ?>
            <!-- Grid Post -->
            <article class="vtg-news-card vtg-fade-up">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="vtg-news-card__img">
                  <?php the_post_thumbnail('medium_large'); ?>
                </a>
              <?php else : ?>
                <a href="<?php the_permalink(); ?>" class="vtg-news-card__img vtg-news-card__img--empty">
                  <span>&#x1F4F0;</span>
                </a>
              <?php endif; ?>
              <div class="vtg-news-card__body">
                <div class="vtg-news-meta">
                  <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('j F Y'); ?></time>
                </div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                <a href="<?php the_permalink(); ?>" class="vtg-news-link">Read more &rarr;</a>
              </div>
            </article>
          <?php endif; ?>

        <?php endwhile; ?>

        <?php if ($wp_query->post_count > 1) : ?>
        </div><!-- .vtg-news-grid -->
        <?php endif; ?>

        <!-- Pagination -->
        <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav class="vtg-news-pagination">
          <?php echo paginate_links(array(
              'prev_text' => '&larr; Newer',
              'next_text' => 'Older &rarr;',
          )); ?>
        </nav>
        <?php endif; ?>

      <?php else : ?>

        <div class="vtg-news-empty">
          <div class="vtg-news-empty__icon">&#x1F4F0;</div>
          <h2>No news articles yet</h2>
          <p>Check back soon for updates from the Venaka TReLeaf team.</p>
        </div>

      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
