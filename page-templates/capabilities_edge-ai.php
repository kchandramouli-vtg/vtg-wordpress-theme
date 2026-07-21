<?php
/**
 * Template Name: Capability - Edge AI
 */
get_header();
vtg_page_hero(array(
    'title'=>'Edge AI for <em>IoT</em>',
    'intro'=>'Intelligence at the point of data capture.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Edge AI for IoT')),
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
