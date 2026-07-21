<?php
/**
 * Template Name: About - Partners
 */
get_header();
vtg_page_hero(array(
    'title'=>'Partner <em>Ecosystem</em>',
    'intro'=>'Multi-actor partnerships for taking AI from prototype to deployment.',
    'breadcrumbs'=>array(array('label'=>'About','url'=>'/about/'),array('label'=>'Partners')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('about'); ?>
    <div class="vtg-inner-content">
      <div class="vtg-feature-grid"><div class="vtg-feature-item"><h4>Universities &amp; HEIs</h4><p>Scientific depth, rigour, and validation capability.</p></div><div class="vtg-feature-item"><h4>SMEs &amp; Tech Companies</h4><p>Innovation speed and niche expertise.</p></div><div class="vtg-feature-item"><h4>Earth Observation</h4><p>Copernicus, climate services, and EO analytics.</p></div><div class="vtg-feature-item"><h4>Public Authorities</h4><p>Requirements, pilots, and adoption pathways.</p></div><div class="vtg-feature-item"><h4>Security &amp; Justice</h4><p>Forensics, law enforcement, evidentiary constraints.</p></div><div class="vtg-feature-item"><h4>Critical Infrastructure</h4><p>Cyber-physical security and lifecycle governance.</p></div><div class="vtg-feature-item"><h4>Innovation Accelerators</h4><p>Market readiness and exploitation pathways.</p></div></div>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
