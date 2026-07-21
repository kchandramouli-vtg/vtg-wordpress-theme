<?php
/**
 * Template Name: Capability - Computer Vision
 */
get_header();
vtg_page_hero(array(
    'title'=>'Computer <em>Vision</em>',
    'intro'=>'End-to-end vision pipelines from data to deployment.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Computer Vision')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('capabilities'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
