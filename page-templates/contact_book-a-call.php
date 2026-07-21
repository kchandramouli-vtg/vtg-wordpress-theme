<?php
/**
 * Template Name: Contact - Book a Call
 */
get_header();
vtg_page_hero(array(
    'title'=>'Book a <em>Call</em>',
    'intro'=>'Schedule a conversation with our team.',
    'breadcrumbs'=>array(array('label'=>'Contact','url'=>'/contact/'),array('label'=>'Book a Call')),
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
