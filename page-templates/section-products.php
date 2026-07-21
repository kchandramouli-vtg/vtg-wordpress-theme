<?php
/**
 * Template Name: Section - The Nexus Product Suite (Landing)
 */
get_header();
vtg_page_hero(array('title'=>'The Nexus Product Suite','intro'=>'11 products spanning healthcare, security, energy, environment, agriculture and beyond.','breadcrumbs'=>array(array('label'=>'The Nexus Product Suite'))));
$sitemap = vtg_get_sitemap();
$children = $sitemap['products']['children'] ?? array();
$home = home_url();
$icons = array('&#x2699;','&#x1F6E1;','&#x1F30D;','&#x1F6F0;','&#x26A1;','&#x1F3E5;','&#x1F3DB;','&#x1F6E1;','&#x1F916;','&#x1F33E;','&#x1F33F;');
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
