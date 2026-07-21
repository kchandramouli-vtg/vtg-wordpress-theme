<?php
/**
 * Template Name: Industry - Transportation
 */
get_header();
vtg_page_hero(array(
    'title'=>'Transportation &amp; <em>Mobility</em>',
    'intro'=>'Situational awareness and intelligent systems.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Transportation')),
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
