<?php
get_header();
$section = vtg_get_section_sidebar();
$has_sidebar = !empty($section);
vtg_page_hero(array(
    'breadcrumbs' => $has_sidebar ? array(
        array('label'=>$section['label'],'url'=>$section['url']),
        array('label'=>get_the_title()),
    ) : array(array('label'=>get_the_title())),
));
?>
<div class="vtg-container">
  <div class="vtg-inner-layout<?php echo $has_sidebar?'':' vtg-inner-layout--full'; ?>">
    <?php if ($has_sidebar) vtg_render_sidebar(); ?>
    <div class="vtg-inner-content">
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
      <?php vtg_page_cta(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
