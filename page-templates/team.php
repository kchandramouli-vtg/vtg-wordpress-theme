<?php
/**
 * Template Name: About - Team
 */
get_header();
vtg_page_hero(array(
    'title'=>'Our <em>Team</em>',
    'intro'=>'A multidisciplinary team combining strategic leadership and applied AI engineering.',
    'breadcrumbs'=>array(array('label'=>'About','url'=>'/about/'),array('label'=>'Team')),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout">
    <?php vtg_render_sidebar('about'); ?>
    <div class="vtg-inner-content">
      <div class="vtg-feature-grid"><div class="vtg-feature-item"><h4>Prof. Ebroul Izquierdo</h4><p><strong>CEO</strong> &mdash; Overall strategic direction and long-term research priorities.</p></div><div class="vtg-feature-item"><h4>Dr. Krishna Chandramouli</h4><p><strong>CTO</strong> &mdash; Technical vision and applied R&amp;D agenda.</p></div><div class="vtg-feature-item"><h4>Dr. Tomas Piatrik</h4><p><strong>DCEO</strong> &mdash; Executive leadership and operational coordination.</p></div><div class="vtg-feature-item"><h4>Dr. Richard Orjesek</h4><p><strong>Head of Innovation</strong> &mdash; Translating opportunities into pilots and collaborations.</p></div><div class="vtg-feature-item"><h4>Dr. Maros Cavojsky</h4><p><strong>Head of Software</strong> &mdash; Software engineering and technical implementation.</p></div><div class="vtg-feature-item"><h4>Mrs. Anna Romanowska</h4><p><strong>Communications</strong> &mdash; Outreach, partner engagement, and dissemination.</p></div></div><div class="vtg-callout"><p>Founded <strong>September 2019</strong> with <strong>30+ years</strong> of collective experience in AI and engineering solutions.</p></div>
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
