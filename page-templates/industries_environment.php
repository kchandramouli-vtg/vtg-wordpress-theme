<?php
/**
 * Template Name: Industry - Environment
 */
get_header();
vtg_page_hero(array(
    'title'=>'Environment &amp; <em>Climate</em>',
    'intro'=>'Monitoring, wildfire management, coastal protection.',
    'breadcrumbs'=>array(array('label'=>'Industries','url'=>'/industries/'),array('label'=>'Environment')),
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
