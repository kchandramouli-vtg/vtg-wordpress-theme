<?php
/**
 * Template Name: R&D - Research Themes
 */
get_header();
vtg_page_hero(array(
    'title'=>'Research <em>Themes</em>',
    'intro'=>'Climate resilience, multimodal AI, and trusted AI.',
    'breadcrumbs'=>array(array('label'=>'R&amp;D','url'=>'/research/'),array('label'=>'Research Themes')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('research'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
