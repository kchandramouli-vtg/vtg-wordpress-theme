<?php
/**
 * Template Name: Insights - Whitepapers
 */
get_header();
vtg_page_hero(array(
    'title'=>'<em>Whitepapers</em>',
    'intro'=>'In-depth technical publications.',
    'breadcrumbs'=>array(array('label'=>'Insights','url'=>'/insights/'),array('label'=>'Whitepapers')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('insights'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
