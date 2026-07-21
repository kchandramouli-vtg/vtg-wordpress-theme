<?php
/**
 * Template Name: Careers - Hiring Process
 */
get_header();
vtg_page_hero(array(
    'title'=>'Hiring <em>Process</em>',
    'intro'=>'Transparent and focused on potential.',
    'breadcrumbs'=>array(array('label'=>'Careers','url'=>'/careers/'),array('label'=>'Hiring Process')),
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
