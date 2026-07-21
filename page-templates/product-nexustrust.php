<?php
/**
 * Template Name: Product - NexusTrust
 */
get_header();
$p = vtg_get_products()['nexustrust'];
vtg_page_hero(array(
    'title' => 'NexusTrust',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusTrust')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>

      <?php vtg_page_cta('Interested in NexusTrust?', 'Contact us to discuss how NexusTrust can provide assurance and governance for your AI deployments.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
