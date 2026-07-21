<?php
/**
 * Template Name: Section - Join Venaka (Landing)
 */
get_header();
vtg_page_hero(array('title'=>'Join Venaka','intro'=>'Help us translate advanced research into deployable AI that makes a real-world difference.','breadcrumbs'=>array(array('label'=>'Join Venaka'))));
$sitemap = vtg_get_sitemap();
$children = $sitemap['careers']['children'] ?? array();
$home = home_url();
$icons = array('&#x1F331;','&#x1F4CB;','&#x1F4BC;','&#x1F393;');
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
