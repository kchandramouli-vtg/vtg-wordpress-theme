<?php
/**
 * Template Name: Industry - Food Security
 */
get_header();
vtg_page_hero(array(
    'title'=>'Food Security &amp; <em>Biodiversity</em>',
    'intro'=>'Precision agriculture and biodiversity analytics.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Food Security')),
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
