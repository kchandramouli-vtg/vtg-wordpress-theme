<?php
/**
 * Template Name: Section - About Venaka (Landing)
 */
get_header();
vtg_page_hero(array('title'=>'About Venaka','intro'=>'An applied R&amp;D organisation delivering AI-driven services and the Nexus product suite.','breadcrumbs'=>array(array('label'=>'About Venaka'))));
$sitemap = vtg_get_sitemap();
$children = $sitemap['about']['children'] ?? array();
$home = home_url();
$icons = array('&#x1F52D;','&#x1F3AF;','&#x1F465;','&#x1F91D;');
?>
<div class="vtg-container">
  <div class="vtg-inner-layout vtg-inner-layout--full">
    <div class="vtg-inner-content">
      <div class="vtg-section-grid">
        <?php foreach ($children as $i => $child) : ?>
        <a href="<?php echo esc_url($home.$child['url']); ?>" class="vtg-section-card vtg-fade-up">
          <div style="font-size:28px;margin-bottom:12px;"><?php echo $icons[$i] ?? '&#x25C8;'; ?></div>
          <h3><?php echo $child['label']; ?></h3>
          <span class="vtg-section-card__link">Learn more &rarr;</span>
        </a>
        <?php endforeach; ?>
      </div>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
