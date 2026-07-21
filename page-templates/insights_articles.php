<?php
/**
 * Template Name: Insights - Articles
 */
get_header();
vtg_page_hero(array(
    'title'=>'<em>Articles</em>',
    'intro'=>'Thought leadership and analysis.',
    'breadcrumbs'=>array(array('label'=>'Insights','url'=>'/insights/'),array('label'=>'Articles')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('insights'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
