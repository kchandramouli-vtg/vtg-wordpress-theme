<?php
/**
 * Template Name: Section - Industries We Serve (Landing)
 */
get_header();
vtg_page_hero(array('title'=>'Industries We Serve','intro'=>'AI-driven solutions across high-impact sectors aligned to Horizon Europe clusters.','breadcrumbs'=>array(array('label'=>'Industries We Serve'))));
$sitemap = vtg_get_sitemap();
$children = $sitemap['industries']['children'] ?? array();
$home = home_url();
$icons = array('&#x1F3E5;','&#x1F3DB;','&#x1F6E1;','&#x1F684;','&#x26A1;','&#x1F3ED;','&#x1F33F;','&#x1F33E;','&#x1F52C;');
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
