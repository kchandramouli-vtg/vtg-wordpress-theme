<?php
/**
 * Template Name: Careers - Cultural Values
 */
get_header();
vtg_page_hero(array(
    'title'=>'Cultural <em>Values</em>',
    'intro'=>'What drives us as a team.',
    'breadcrumbs'=>array(array('label'=>'Careers','url'=>'/careers/'),array('label'=>'Cultural Values')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('careers'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
