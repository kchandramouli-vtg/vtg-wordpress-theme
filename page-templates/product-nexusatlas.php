<?php
/**
 * Template Name: Product - NexusAtlas
 */
get_header();
$p = vtg_get_products()['nexusatlas'];
vtg_page_hero(array(
    'title' => 'NexusAtlas',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusAtlas')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusAtlas?', 'Contact us to discuss how NexusAtlas can support your geospatial and climate-resilience operations.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
