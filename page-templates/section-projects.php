<?php
/**
 * Template Name: Section - Projects (Landing)
 */
get_header();

vtg_page_hero(array(
    'title' => 'EU-Funded Projects',
    'intro' => 'Active Horizon Europe and H2020 projects where Venaka TReLeaf leads AI/ML development and technical delivery.',
    'breadcrumbs' => array(array('label' => 'Projects')),
));

$home = home_url();
?>

<div class="vtg-container">
  <div class="vtg-inner-layout vtg-inner-layout--full">
    <div class="vtg-inner-content">

      <!-- Active Projects -->
      <div class="vtg-section__label" style="margin-top:0;">Active Projects</div>

      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin:24px 0 48px;">

        <!-- SILVANUS -->
        <a href="<?php echo esc_url($home.'/projects/silvanus/'); ?>" class="vtg-product-card vtg-fade-up" style="text-decoration:none;">
          <div class="vtg-product-card__img" style="background:linear-gradient(145deg,#0C2E1E,#1A7F52);display:flex;align-items:flex-end;padding:24px;">
            <div style="position:relative;z-index:2;">
              <span class="vtg-product-card__cluster" style="background:rgba(255,255,255,0.12);color:rgba(255,255,255,0.8);">Horizon 2020</span>
              <div style="font-family:var(--font-display);font-size:28px;color:#fff;margin-top:8px;">SILVANUS</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.5);margin-top:4px;">GA 101037247</div>
            </div>
          </div>
          <div class="vtg-product-card__body">
            <h3 style="font-size:16px !important;">Integrated Wildfire Management Platform</h3>
            <p>Climate-resilient forest management — wildfire risk assessment, biodiversity monitoring, and multi-agency coordination across European pilot sites.</p>
            <div style="font-size:11px;color:var(--vtg-green);font-weight:600;margin-bottom:10px;">Technical Lead — AI/ML Toolkit</div>
            <div style="display:flex;flex-wrap:wrap;gap:4px;margin-bottom:12px;">
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusAtlas</span>
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusBiome</span>
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusFlow</span>
            </div>
            <span class="vtg-product-card__link">Learn more &rarr;</span>
          </div>
        </a>

        <!-- TERRA -->
        <a href="<?php echo esc_url($home.'/projects/terra/'); ?>" class="vtg-product-card vtg-fade-up" style="text-decoration:none;">
          <div class="vtg-product-card__img" style="background:linear-gradient(145deg,#0E3B5C,#1D6FB5);display:flex;align-items:flex-end;padding:24px;">
            <div style="position:relative;z-index:2;">
              <span class="vtg-product-card__cluster" style="background:rgba(255,255,255,0.12);color:rgba(255,255,255,0.8);">Horizon Europe</span>
              <div style="font-family:var(--font-display);font-size:28px;color:#fff;margin-top:8px;">TERRA</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.5);margin-top:4px;">GA 101189962</div>
            </div>
          </div>
          <div class="vtg-product-card__body">
            <h3 style="font-size:16px !important;">Copernicus Environmental Monitoring</h3>
            <p>Coastline detection, erosion forecasting, flood risk assessment, and water pollution analysis using Earth Observation and AI.</p>
            <div style="font-size:11px;color:var(--vtg-green);font-weight:600;margin-bottom:10px;">WP Lead — AI/ML Toolkit</div>
            <div style="display:flex;flex-wrap:wrap;gap:4px;margin-bottom:12px;">
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusEarth</span>
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusAtlas</span>
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusScholar</span>
            </div>
            <span class="vtg-product-card__link">Learn more &rarr;</span>
          </div>
        </a>

        <!-- X-ALFY -->
        <a href="<?php echo esc_url($home.'/projects/x-alfy/'); ?>" class="vtg-product-card vtg-fade-up" style="text-decoration:none;">
          <div class="vtg-product-card__img" style="background:linear-gradient(145deg,#3D2E0F,#8B6914);display:flex;align-items:flex-end;padding:24px;">
            <div style="position:relative;z-index:2;">
              <span class="vtg-product-card__cluster" style="background:rgba(255,255,255,0.12);color:rgba(255,255,255,0.8);">Horizon Europe</span>
              <div style="font-family:var(--font-display);font-size:28px;color:#fff;margin-top:8px;">X-ALFY</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.5);margin-top:4px;">Forestry 5.0</div>
            </div>
          </div>
          <div class="vtg-product-card__body">
            <h3 style="font-size:16px !important;">AI-Based XR Tools for Forestry</h3>
            <p>Extended reality and AI-driven analytics for sustainable forest management, training, and operational decision-making.</p>
            <div style="font-size:11px;color:var(--vtg-green);font-weight:600;margin-bottom:10px;">AI/ML &amp; Geospatial Analytics</div>
            <div style="display:flex;flex-wrap:wrap;gap:4px;margin-bottom:12px;">
              <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusAtlas</span>
            </div>
            <span class="vtg-product-card__link">Learn more &rarr;</span>
          </div>
        </a>

      </div>

      <!-- Past Projects -->
      <div class="vtg-section__label">Past &amp; Legacy Projects</div>

      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:24px 0 40px;">

        <?php
        $past = array(
            array('LASIE', 'Forensic analysis framework for heterogeneous data sources', 'Security', 'NexusGuard'),
            array('MAGNETO', 'Knowledge representation and augmented intelligence for law enforcement', 'Security', 'NexusGuard · NexusFlow'),
            array('DEFENDER', 'Critical energy infrastructure protection as cyber-physical systems', 'Energy', 'NexusGrid'),
        );
        foreach ($past as $i => $proj) :
        ?>
        <div class="vtg-cap-card vtg-fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
          <div style="font-size:11px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--vtg-green);margin-bottom:10px;"><?php echo $proj[2]; ?></div>
          <h3 style="margin-bottom:6px !important;"><?php echo $proj[0]; ?></h3>
          <p style="margin-bottom:10px !important;"><?php echo $proj[1]; ?></p>
          <div style="display:flex;flex-wrap:wrap;gap:4px;">
            <?php foreach (explode(' · ', $proj[3]) as $tag) : ?>
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);"><?php echo $tag; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>

      </div>

      <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

      <?php vtg_page_cta('Interested in collaborating?', 'We are always looking for new partnerships across the Horizon Europe landscape.'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
