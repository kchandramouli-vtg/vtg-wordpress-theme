<?php
/**
 * Template Name: Industry - AI Research
 */
get_header();
vtg_page_hero(array(
    'title'=>'Interdisciplinary AI <em>Research</em>',
    'intro'=>'Cross-domain analytics and knowledge discovery.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'AI Research')),
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
