<?php
/**
 * Template Name: Capability - Applied Research
 */
get_header();
vtg_page_hero(array(
    'title'=>'Applied Research <em>Prototyping</em>',
    'intro'=>'From scientific advances to deployable technology.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Applied Research')),
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
