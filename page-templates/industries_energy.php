<?php
/**
 * Template Name: Industry - Energy
 */
get_header();
vtg_page_hero(array(
    'title'=>'Energy &amp; Carbon <em>Monitoring</em>',
    'intro'=>'Critical infrastructure and cyber-physical security.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Energy')),
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
