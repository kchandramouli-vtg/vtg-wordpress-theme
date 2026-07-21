<?php
/**
 * Template Name: Industry - Healthcare
 */
get_header();
vtg_page_hero(array(
    'title'=>'Healthcare &amp; <em>Life Sciences</em>',
    'intro'=>'AI-powered clinical training and decision-support.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Healthcare')),
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
