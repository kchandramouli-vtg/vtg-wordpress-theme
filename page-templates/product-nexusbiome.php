<?php
/**
 * Template Name: Product - NexusBiome
 */
get_header();
$p = vtg_get_products()['nexusbiome'];
vtg_page_hero(array(
    'title' => 'NexusBiome',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusBiome')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusBiome?', 'Contact us to discuss how NexusBiome can power citizen-science biodiversity monitoring for your region or programme.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
