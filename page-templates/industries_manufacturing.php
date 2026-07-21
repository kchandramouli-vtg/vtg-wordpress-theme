<?php
/**
 * Template Name: Industry - Manufacturing
 */
get_header();
vtg_page_hero(array(
    'title'=>'Manufacturing &amp; <em>Industry 5.0</em>',
    'intro'=>'Digital twins and predictive maintenance.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Manufacturing')),
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
