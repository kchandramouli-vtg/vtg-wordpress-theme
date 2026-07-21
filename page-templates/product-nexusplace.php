<?php
/**
 * Template Name: Product - NexusPlace
 */
get_header();
$p = vtg_get_products()['nexusplace'];
vtg_page_hero(array(
    'title' => 'NexusPlace',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusPlace')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusPlace?', 'Contact us to discuss how NexusPlace can bring explainable hybrid AI to your robotic and industrial placement operations.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
