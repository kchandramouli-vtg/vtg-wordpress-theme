<?php
/**
 * Template Name: Capability - Data Engineering
 */
get_header();
vtg_page_hero(array(
    'title'=>'Data <em>Engineering</em>',
    'intro'=>'The backbone of applied AI systems.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Data Engineering')),
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
