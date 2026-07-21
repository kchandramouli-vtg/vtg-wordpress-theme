<?php
/**
 * Template Name: Product - NexusCurate
 */
get_header();
$p = vtg_get_products()['nexuscurate'];
vtg_page_hero(array(
    'title' => 'NexusCurate',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusCurate')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusCurate?', 'Contact us to explore how NexusCurate can bring provenance-secured GenAI to your cultural heritage collections.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
