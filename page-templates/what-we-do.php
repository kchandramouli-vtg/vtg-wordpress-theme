<?php
/**
 * Template Name: About - What We Do
 */
get_header();
vtg_page_hero(array(
    'title'=>'What We <em>Do</em>',
    'intro'=>'Applied R&amp;D bridging research excellence and engineering delivery.',
    'breadcrumbs'=>array(array('label'=>'About','url'=>'/about/'),array('label'=>'What We Do')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('about'); ?>
    <div class="vtg-inner-content">
      <p>Venaka designs, builds, and deploys AI-driven services, software platforms, and mobile solutions. Our work sits at the intersection of research excellence and engineering delivery.</p><div class="vtg-feature-grid"><div class="vtg-feature-item"><h4>Problem Framing</h4><p>Define operational problems, constraints, and success criteria.</p></div><div class="vtg-feature-item"><h4>Data-Centric Engineering</h4><p>Data quality, provenance, and governance as first-class concerns.</p></div><div class="vtg-feature-item"><h4>Model Development</h4><p>Robustness and operational readiness in real conditions.</p></div><div class="vtg-feature-item"><h4>Deployment Engineering</h4><p>MLOps, monitoring, auditability, and continuous improvement.</p></div></div>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
