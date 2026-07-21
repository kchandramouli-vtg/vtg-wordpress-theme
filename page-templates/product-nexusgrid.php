<?php
/**
 * Template Name: Product - NexusGrid
 */
get_header();
$p = vtg_get_products()['nexusgrid'];
vtg_page_hero(array(
    'title' => 'NexusGrid',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusGrid')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusGrid?', 'Contact us to discuss how NexusGrid can provide a geospatial digital twin for your energy infrastructure.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
