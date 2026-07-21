<?php
/**
 * Template Name: Capability - MLOps
 */
get_header();
vtg_page_hero(array(
    'title'=>'MLOps <em>Deployments</em>',
    'intro'=>'Making AI dependable through operational engineering.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'MLOps Deployments')),
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
