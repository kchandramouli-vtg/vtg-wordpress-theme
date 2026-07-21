<?php
/**
 * Template Name: Capability - Generative AI
 */
get_header();
vtg_page_hero(array(
    'title'=>'Generative <em>AI</em>',
    'intro'=>'Knowledge-grounded generation and agentic workflows.',
    'breadcrumbs'=>array(array('label'=>'Capabilities','url'=>'/capabilities/'),array('label'=>'Generative AI')),
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
