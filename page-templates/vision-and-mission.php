<?php
/**
 * Template Name: About - Vision & Mission
 */
get_header();
vtg_page_hero(array(
    'title'=>'Vision &amp; <em>Mission</em>',
    'intro'=>'Where we are heading and what drives us every day.',
    'breadcrumbs'=>array(array('label'=>'About','url'=>'/about/'),array('label'=>'Vision &amp; Mission')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('about'); ?>
    <div class="vtg-inner-content">
      <h2>Our Vision</h2><p>Venaka\'s vision is to become a trusted, impact-led R&amp;D organisation that makes advanced AI useful, accountable, and widely adoptable across industrial sectors and public services.</p><h2>Our Mission</h2><p>To translate cutting-edge research in computer vision, machine learning, and data engineering into deployable AI services and products that address real operational needs.</p><div class="vtg-callout"><p>Venaka exists to accelerate responsible innovation. We embed good governance practices into our engineering.</p></div>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
