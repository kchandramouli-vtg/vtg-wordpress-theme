<?php
/**
 * Template Name: Industry - Cultural Heritage
 */
get_header();
vtg_page_hero(array(
    'title'=>'Creative &amp; Cultural <em>Heritage</em>',
    'intro'=>'Semantic discovery and AI-driven narratives.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Cultural Heritage')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('industries'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
