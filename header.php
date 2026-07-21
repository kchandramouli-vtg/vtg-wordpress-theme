<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="vtg-header" id="vtg-header">
  <div class="vtg-header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="vtg-logo">
      <?php if (has_custom_logo()) :
        $lid = get_theme_mod('custom_logo');
        $lurl = wp_get_attachment_image_url($lid, 'full');
      ?>
        <img src="<?php echo esc_url($lurl); ?>" alt="<?php bloginfo('name'); ?>">
      <?php else : ?>
        <img src="<?php echo VTG_URI; ?>/assets/images/VTG_Logo.svg" alt="Venaka TReLeaf">
      <?php endif; ?>
    </a>
    <nav class="vtg-nav" id="vtg-nav"><?php vtg_render_nav(); ?></nav>
    <button class="vtg-mobile-toggle" id="vtg-mobile-toggle" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="content">
