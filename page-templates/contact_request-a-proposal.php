<?php
/**
 * Template Name: Contact - Request a Proposal
 */
get_header();
vtg_page_hero(array(
    'title'=>'Request a <em>Proposal</em>',
    'intro'=>'Tell us about your challenge.',
    'breadcrumbs'=>array(array('label'=>'Contact','url'=>'/contact/'),array('label'=>'Request a Proposal')),
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
