<?php
/**
 * Template Name: Product - NexusGuard
 */
get_header();
$p = vtg_get_products()['nexusguard'];
vtg_page_hero(array(
    'title' => 'NexusGuard',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusGuard')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusGuard?', 'Contact us to discuss how NexusGuard can support your public safety and security operations with governance-ready AI.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
