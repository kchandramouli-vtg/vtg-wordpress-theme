<?php
/**
 * Template Name: Capability - Digital Twins
 */
get_header();
vtg_page_hero(array(
    'title'=>'Digital <em>Twins</em>',
    'intro'=>'AI-enabled representations for simulation and decision support.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Digital Twins')),
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
