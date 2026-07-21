<?php
/**
 * Template Name: R&D - Publications
 */
get_header();
vtg_page_hero(array(
    'title'=>'<em>Publications</em>',
    'intro'=>'Peer-reviewed research and technical reports.',
    'breadcrumbs'=>array(array('label'=>'R&amp;D','url'=>'/research/'),array('label'=>'Publications')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('research'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
