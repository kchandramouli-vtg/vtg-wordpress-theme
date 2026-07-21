<?php
/**
 * Template Name: Product - NexusFlow
 */
get_header();
$p = vtg_get_products()['nexusflow'];
vtg_page_hero(array(
    'title' => 'NexusFlow',
    'intro' => $p['tagline'],
    'breadcrumbs' => array(array('label'=>'Products','url'=>'/products/'),array('label'=>'NexusFlow')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('products'); ?>
    <div class="vtg-inner-content">
      <div class="vtg-product-hero-img">
        <img src="<?php echo VTG_URI; ?>/assets/images/products/<?php echo $p['img']; ?>" alt="NexusFlow">
      </div>
      <p><?php echo $p['desc']; ?></p>

      <div class="vtg-product-specs">
        <div class="vtg-product-spec"><dt>Cluster</dt><dd>Cross-cutting</dd></div>
        <div class="vtg-product-spec"><dt>Deployment</dt><dd>Cloud / Edge / Hybrid</dd></div>
        <div class="vtg-product-spec"><dt>Integration</dt><dd>REST APIs, NexusFlow</dd></div>
      </div>

      <?php // WordPress editor content appears here ?>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>

      <?php vtg_page_cta('Interested in NexusFlow?', 'Contact us to discuss how NexusFlow can address your operational challenges.'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
