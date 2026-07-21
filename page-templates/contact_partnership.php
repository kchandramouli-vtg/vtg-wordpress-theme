<?php
/**
 * Template Name: Contact - Partnership
 */
get_header();
vtg_page_hero(array(
    'title'=>'<em>Partnership</em> Opportunities',
    'intro'=>'Collaborate with Venaka on R&amp;D.',
    'breadcrumbs'=>array(array('label'=>'Contact','url'=>'/contact/'),array('label'=>'Partnership')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('contact'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
