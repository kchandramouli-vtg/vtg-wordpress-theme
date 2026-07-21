<?php
/**
 * Template Name: Careers - Open Roles
 */
get_header();
vtg_page_hero(array(
    'title'=>'Open <em>Roles</em>',
    'intro'=>'Current opportunities.',
    'breadcrumbs'=>array(array('label'=>'Careers','url'=>'/careers/'),array('label'=>'Open Roles')),
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
