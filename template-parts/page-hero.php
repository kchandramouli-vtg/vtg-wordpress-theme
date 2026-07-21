<?php
$theme = $args['theme'] ?? 'dark';
$title = $args['title'] ?? get_the_title();
$intro = $args['intro'] ?? '';
$crumbs = $args['breadcrumbs'] ?? array();
$home = home_url();
?>
<section class="vtg-hero" style="min-height:auto;padding:160px 0 60px;">
  <div class="vtg-hero__grid"></div>
  <div class="vtg-hero__glow"></div>
  <div class="vtg-container" style="position:relative;z-index:2;">
    <?php if (!empty($crumbs)) : ?>
    <nav style="display:flex;align-items:center;gap:8px;font-size:12px;font-weight:500;color:rgba(255,255,255,0.35);margin-bottom:20px;">
      <a href="<?php echo $home; ?>" style="transition:color 0.2s;">Home</a>
      <?php foreach ($crumbs as $c) : ?>
        <span>&rsaquo;</span>
        <?php if (!empty($c['url'])) : ?><a href="<?php echo esc_url($home.$c['url']); ?>"><?php echo $c['label']; ?></a>
        <?php else : ?><span><?php echo $c['label']; ?></span><?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <?php endif; ?>
    <h1 style="font-family:var(--font-display);font-size:clamp(34px,4vw,50px);color:#fff;font-weight:400;max-width:700px;margin-bottom:18px;"><?php echo $title; ?></h1>
    <?php if ($intro) : ?><p style="font-size:17px;color:rgba(255,255,255,0.5);line-height:1.75;max-width:620px;"><?php echo $intro; ?></p><?php endif; ?>
  </div>
</section>
