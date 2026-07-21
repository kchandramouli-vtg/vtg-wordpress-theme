<?php
/**
 * Template Name: Product - NexusScout
 */
get_header();
$p = vtg_get_products()['nexusscout'];
vtg_page_hero(array(
    'title' => 'NexusScout',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusScout')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusScout?', 'Contact us to discuss how NexusScout can bring AI-powered pest intelligence to your agricultural operations.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
