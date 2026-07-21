<?php
/**
 * Template Name: Product - NexusCare
 */
get_header();
$p = vtg_get_products()['nexuscare'];
vtg_page_hero(array(
    'title' => 'NexusCare',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusCare')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusCare?', 'Contact us to discuss how NexusCare can support your clinical monitoring and care-coordination needs.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
