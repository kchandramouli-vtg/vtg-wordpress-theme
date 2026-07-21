<?php
/**
 * Template Name: R&D - Trusted AI
 */
get_header();
vtg_page_hero(array(
    'title'=>'Trusted <em>AI</em>',
    'intro'=>'Explainability, provenance, and governance.',
    'breadcrumbs'=>array(array('label'=>'R&amp;D','url'=>'/research/'),array('label'=>'Trusted AI')),
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
