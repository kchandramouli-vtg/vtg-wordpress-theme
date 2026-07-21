<?php
/**
 * Template Name: Capability - Mobile & Web
 */
get_header();
vtg_page_hero(array(
    'title'=>'Mobile &amp; Web <em>Platforms</em>',
    'intro'=>'User-facing platforms translating AI into usability.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Mobile &amp; Web')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('capabilities'); ?>
    <div class="vtg-inner-content">
      
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
