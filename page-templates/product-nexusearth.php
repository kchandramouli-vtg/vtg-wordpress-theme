<?php
/**
 * Template Name: Product - NexusEarth
 */
get_header();
$p = vtg_get_products()['nexusearth'];
vtg_page_hero(array(
    'title' => 'NexusEarth',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusEarth')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusEarth?', 'Contact us to discuss how NexusEarth can deliver operational intelligence from satellite imagery for your domain.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
