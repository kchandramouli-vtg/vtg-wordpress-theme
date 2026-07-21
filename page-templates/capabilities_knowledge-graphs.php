<?php
/**
 * Template Name: Capability - Knowledge Graphs
 */
get_header();
vtg_page_hero(array(
    'title'=>'Knowledge <em>Graphs</em>',
    'intro'=>'Connected, queryable knowledge for analytics and AI.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Knowledge Graphs')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('capabilities'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
