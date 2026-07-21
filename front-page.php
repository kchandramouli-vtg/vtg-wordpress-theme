<?php get_header(); ?>

<!-- HERO -->
<section class="vtg-hero">
  <div class="vtg-hero__grid"></div>
  <div class="vtg-hero__glow"></div>
  <div class="vtg-hero__glow vtg-hero__glow--2"></div>
  <div class="vtg-container">
    <div class="vtg-hero__content vtg-fade-up">
      <div class="vtg-hero__badge">Applied AI Research &amp; Development</div>
      <h1>Translating Advanced Research Into <em>Deployable AI</em></h1>
      <p>Venaka TReLeaf delivers AI-driven services, software platforms, and the Nexus product suite across industry, public sector, and mission-led ecosystems.</p>
      <div class="vtg-hero__actions">
        <a href="<?php echo home_url('/contact/book-a-call/'); ?>" class="vtg-btn vtg-btn--primary">Book a Call &rarr;</a>
        <a href="<?php echo home_url('/products/'); ?>" class="vtg-btn vtg-btn--outline">Explore the Nexus Suite</a>
      </div>
    </div>
    <div class="vtg-hero__stats vtg-fade-up" style="animation-delay:0.2s">
      <div><div class="vtg-hero__stat-value">11</div><div class="vtg-hero__stat-label">Nexus Products</div></div>
      <div><div class="vtg-hero__stat-value">9</div><div class="vtg-hero__stat-label">Industry Verticals</div></div>
      <div><div class="vtg-hero__stat-value">TRL 2&ndash;9</div><div class="vtg-hero__stat-label">Full Innovation Lifecycle</div></div>
      <div><div class="vtg-hero__stat-value">EU</div><div class="vtg-hero__stat-label">Horizon Europe Delivery</div></div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="vtg-section vtg-section--warm" id="about">
  <div class="vtg-container">
    <div class="vtg-about-grid">
      <div class="vtg-fade-up">
        <div class="vtg-section__label">About Venaka TReLeaf</div>
        <h2>Where Research Excellence Meets <em>Engineering Delivery</em></h2>
        <p>Venaka is an applied R&amp;D organisation that designs, builds, and deploys AI-driven services, software platforms, and mobile solutions across multiple industrial sectors and public-service contexts.</p>
        <p>Our work spans the full innovation lifecycle &mdash; from discovery and feasibility through prototyping, piloting, and production deployment. We combine rigorous R&amp;D methods with strong engineering discipline to deliver AI that is measurable in outcomes.</p>
        <a href="<?php echo home_url('/about/'); ?>" class="vtg-btn vtg-btn--primary" style="margin-top:16px;">Learn More &rarr;</a>
      </div>
      <div class="vtg-about-visual vtg-fade-up" style="animation-delay:0.15s">
        <div class="vtg-about-visual__grid"></div>
        <div style="position:relative;z-index:2;">
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
            <div style="background:rgba(16,185,129,0.08);border:1px solid rgba(16,185,129,0.15);border-radius:12px;padding:20px;">
              <div style="font-size:24px;margin-bottom:6px;">&#x1F52C;</div>
              <div style="font-size:12px;font-weight:600;color:#fff;margin-bottom:4px;">Computer Vision</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.4);">ViTs, detection, segmentation</div>
            </div>
            <div style="background:rgba(6,182,212,0.08);border:1px solid rgba(6,182,212,0.15);border-radius:12px;padding:20px;">
              <div style="font-size:24px;margin-bottom:6px;">&#x2728;</div>
              <div style="font-size:12px;font-weight:600;color:#fff;margin-bottom:4px;">Generative AI</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.4);">RAG, agentic workflows</div>
            </div>
            <div style="background:rgba(139,92,246,0.08);border:1px solid rgba(139,92,246,0.15);border-radius:12px;padding:20px;">
              <div style="font-size:24px;margin-bottom:6px;">&#x1F30D;</div>
              <div style="font-size:12px;font-weight:600;color:#fff;margin-bottom:4px;">Digital Twins</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.4);">Geospatial GIS platforms</div>
            </div>
            <div style="background:rgba(59,130,246,0.08);border:1px solid rgba(59,130,246,0.15);border-radius:12px;padding:20px;">
              <div style="font-size:24px;margin-bottom:6px;">&#x26A1;</div>
              <div style="font-size:12px;font-weight:600;color:#fff;margin-bottom:4px;">Edge AI</div>
              <div style="font-size:11px;color:rgba(255,255,255,0.4);">IoT deployment, on-device</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- R&D APPROACH -->
<section class="vtg-section vtg-section--dark" id="approach">
  <div class="vtg-container">
    <div class="vtg-section__label">Our Approach</div>
    <div class="vtg-section__title">From Problem Framing to <em>Deployable Capability</em></div>
    <div class="vtg-section__intro">Structured technology roadmaps that move innovation from research exploration to production-ready assets.</div>
    <div class="vtg-approach-grid">
      <?php
      $steps = array(
        array('01','Discovery &amp; Feasibility','Requirements capture, data audit, baseline models, risk assessment, initial architecture. TRL 2-3.'),
        array('02','Prototype &amp; Integration','Model improvements, system prototyping, human-in-the-loop workflows, validation. TRL 4-5.'),
        array('03','Pilot &amp; Validation','Deployment in pilot setting, monitoring, stakeholder training, field feedback. TRL 6-7.'),
        array('04','Production &amp; Scaling','Performance hardening, compliance documentation, cost optimisation, multi-site rollout. TRL 8-9.'),
      );
      foreach ($steps as $i => $s) : ?>
        <div class="vtg-approach-card vtg-fade-up" style="animation-delay:<?php echo $i*0.1; ?>s">
          <div class="vtg-approach-card__num"><?php echo $s[0]; ?></div>
          <h3><?php echo $s[1]; ?></h3>
          <p><?php echo $s[2]; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- NEXUS PRODUCT SUITE -->
<section class="vtg-section vtg-section--navy" id="products">
  <div class="vtg-container">
    <div class="vtg-products-header">
      <div class="vtg-section__label">The Nexus Product Suite</div>
      <div class="vtg-section__title">11 Products Across the <em>Horizon Europe</em> Landscape</div>
      <div class="vtg-section__intro">From agentic AI orchestration to geospatial digital twins, each Nexus product addresses a specific operational challenge with deployment-ready technology.</div>
    </div>

    <?php
    $products = vtg_get_products();
    $featured = array('nexusflow','nexusatlas');
    $home = home_url();
    ?>

    <!-- Featured products -->
    <div class="vtg-products-featured">
      <?php foreach ($featured as $slug) : $p = $products[$slug]; ?>
      <a href="<?php echo esc_url($home.'/products/'.$slug.'/'); ?>" class="vtg-product-card vtg-product-card--featured vtg-fade-up">
        <div class="vtg-product-card__img">
          <img src="<?php echo VTG_URI; ?>/assets/images/products/<?php echo $p['img']; ?>" alt="<?php echo esc_attr($p['name']); ?>">
        </div>
        <div class="vtg-product-card__body">
          <span class="vtg-product-card__cluster"><?php echo esc_html($p['cluster']); ?></span>
          <h3><?php echo esc_html($p['name']); ?></h3>
          <p><?php echo esc_html($p['tagline']); ?></p>
          <span class="vtg-product-card__link">Explore <?php echo esc_html($p['name']); ?> &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <!-- Product grid -->
    <div class="vtg-products-grid">
      <?php foreach ($products as $slug => $p) :
        if (in_array($slug, $featured)) continue;
      ?>
      <a href="<?php echo esc_url($home.'/products/'.$slug.'/'); ?>" class="vtg-product-card vtg-fade-up">
        <div class="vtg-product-card__img">
          <img src="<?php echo VTG_URI; ?>/assets/images/products/<?php echo $p['img']; ?>" alt="<?php echo esc_attr($p['name']); ?>">
        </div>
        <div class="vtg-product-card__body">
          <span class="vtg-product-card__cluster"><?php echo esc_html($p['cluster']); ?></span>
          <h3><?php echo esc_html($p['name']); ?></h3>
          <p><?php echo esc_html($p['tagline']); ?></p>
          <span class="vtg-product-card__link">Learn more &rarr;</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CAPABILITIES -->
<section class="vtg-section vtg-section--warm" id="capabilities">
  <div class="vtg-container">
    <div class="vtg-section__label">Core Capabilities</div>
    <div class="vtg-section__title" style="color:var(--vtg-dark);">From Research Methods to <em>Operational Systems</em></div>
    <div class="vtg-section__intro">Nine core technical domains that underpin every Nexus product and client engagement.</div>
    <div class="vtg-caps-grid">
      <?php
      $caps = array(
        array('&#x1F441;','Computer Vision','End-to-end vision pipelines from data preparation to deployment, including ViTs and hybrid architectures.','/capabilities/computer-vision/'),
        array('&#x2728;','Generative AI','RAG, agentic workflows, domain-specific LLM adaptation, and knowledge-grounded generation.','/capabilities/generative-ai/'),
        array('&#x25C8;','Data Engineering','Pipelines, storage, metadata, governance, and interoperability as the backbone of applied AI.','/capabilities/data-engineering/'),
        array('&#x1F30D;','Digital Twins','AI-enabled representations of real-world assets for simulation, forecasting, and decision support.','/capabilities/digital-twins/'),
        array('&#x2B21;','Knowledge Graphs','Connected, queryable knowledge powering analytics and trustworthy Graph-RAG systems.','/capabilities/knowledge-graphs/'),
        array('&#x2699;','MLOps Deployments','The operational layer that makes AI dependable with CI/CD, monitoring, and governance.','/capabilities/mlops-deployments/'),
        array('&#x1F4F1;','Mobile &amp; Web','User-facing platforms that translate AI capabilities into real usability and adoption.','/capabilities/mobile-and-web/'),
        array('&#x26A1;','Edge AI for IoT','Intelligence at the point of data capture with low-latency, privacy-preserving operation.','/capabilities/edge-ai/'),
        array('&#x25B3;','Applied Research','Converting scientific advances into deployable, measurable, adoption-ready technology.','/capabilities/applied-research/'),
      );
      foreach ($caps as $i => $c) : ?>
      <a href="<?php echo home_url($c[3]); ?>" class="vtg-cap-card vtg-fade-up" style="animation-delay:<?php echo $i*0.05; ?>s">
        <div class="vtg-cap-card__icon"><?php echo $c[0]; ?></div>
        <h3><?php echo $c[1]; ?></h3>
        <p><?php echo $c[2]; ?></p>
        <span class="vtg-cap-card__link">Learn more &rarr;</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section class="vtg-section vtg-section--dark" id="industries">
  <div class="vtg-container">
    <div class="vtg-section__label">Industries</div>
    <div class="vtg-section__title">Sector <em>Expertise</em></div>
    <div class="vtg-section__intro">AI-driven solutions across high-impact sectors aligned to Horizon Europe clusters.</div>
    <div class="vtg-industries-grid">
      <?php
      $inds = array(
        array('&#x1F3E5;','Healthcare &amp; Life Sciences','/industries/healthcare/'),
        array('&#x1F3DB;','Creative &amp; Cultural Heritage','/industries/creative-heritage/'),
        array('&#x1F6E1;','Public Safety &amp; Security','/industries/public-safety/'),
        array('&#x1F684;','Transportation &amp; Mobility','/industries/transportation/'),
        array('&#x26A1;','Energy &amp; Carbon Monitoring','/industries/energy/'),
        array('&#x1F3ED;','Manufacturing &amp; Industry 5.0','/industries/manufacturing/'),
        array('&#x1F33F;','Environment &amp; Climate','/industries/environment/'),
        array('&#x1F33E;','Food Security &amp; Biodiversity','/industries/food-security/'),
        array('&#x1F52C;','Interdisciplinary AI Research','/industries/ai-research/'),
      );
      foreach ($inds as $ind) : ?>
      <a href="<?php echo home_url($ind[2]); ?>" class="vtg-industry-pill vtg-fade-up">
        <span class="vtg-industry-pill__icon"><?php echo $ind[0]; ?></span>
        <span><?php echo $ind[1]; ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section class="vtg-section vtg-section--warm" id="projects-section">
  <div class="vtg-container">
    <div class="vtg-section__label">EU-Funded Projects</div>
    <div class="vtg-section__title" style="color:var(--vtg-dark);">Research &amp; Innovation <em>In Action</em></div>
    <div class="vtg-section__intro">Active Horizon Europe and H2020 projects where Venaka TReLeaf leads AI/ML development and technical delivery.</div>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:32px;">

      <!-- SILVANUS -->
      <a href="<?php echo home_url('/projects/silvanus/'); ?>" class="vtg-fade-up" style="background:#fff;border-radius:18px;padding:0;overflow:hidden;border:1px solid rgba(0,0,0,0.06);transition:all 0.3s ease;display:flex;flex-direction:column;text-decoration:none;">
        <div style="background:linear-gradient(145deg,#0C2E1E,#1A7F52);padding:28px 24px;position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:30px 30px;"></div>
          <div style="position:relative;z-index:2;">
            <span style="display:inline-block;font-size:9px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:3px 10px;border-radius:20px;background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.7);margin-bottom:12px;">Horizon 2020</span>
            <div style="font-family:var(--font-display);font-size:24px;color:#fff;font-weight:400;">SILVANUS</div>
            <div style="font-size:12px;color:rgba(255,255,255,0.5);margin-top:6px;">GA 101037247</div>
          </div>
        </div>
        <div style="padding:22px 24px;flex:1;display:flex;flex-direction:column;">
          <div style="font-size:14px;color:var(--vtg-dark);font-weight:600;margin-bottom:8px;">Integrated Wildfire Management Platform</div>
          <p style="font-size:13px;color:var(--vtg-slate);line-height:1.6;flex:1;margin:0 0 14px;">Climate-resilient forest management — wildfire risk assessment, biodiversity monitoring, and multi-agency coordination across European pilot sites.</p>
          <div style="font-size:11px;color:var(--vtg-green);font-weight:600;margin-bottom:10px;">VTG Role: Technical Lead — AI/ML Toolkit</div>
          <div style="display:flex;flex-wrap:wrap;gap:4px;">
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusAtlas</span>
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusBiome</span>
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusFlow</span>
          </div>
        </div>
      </a>

      <!-- TERRA -->
      <a href="<?php echo home_url('/projects/terra/'); ?>" class="vtg-fade-up" style="background:#fff;border-radius:18px;padding:0;overflow:hidden;border:1px solid rgba(0,0,0,0.06);transition:all 0.3s ease;display:flex;flex-direction:column;text-decoration:none;">
        <div style="background:linear-gradient(145deg,#0E3B5C,#1D6FB5);padding:28px 24px;position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:30px 30px;"></div>
          <div style="position:relative;z-index:2;">
            <span style="display:inline-block;font-size:9px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:3px 10px;border-radius:20px;background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.7);margin-bottom:12px;">Horizon Europe</span>
            <div style="font-family:var(--font-display);font-size:24px;color:#fff;font-weight:400;">TERRA</div>
            <div style="font-size:12px;color:rgba(255,255,255,0.5);margin-top:6px;">GA 101189962</div>
          </div>
        </div>
        <div style="padding:22px 24px;flex:1;display:flex;flex-direction:column;">
          <div style="font-size:14px;color:var(--vtg-dark);font-weight:600;margin-bottom:8px;">Copernicus Environmental Monitoring</div>
          <p style="font-size:13px;color:var(--vtg-slate);line-height:1.6;flex:1;margin:0 0 14px;">Coastline detection, erosion forecasting, flood risk assessment, and water pollution analysis using Earth Observation and AI.</p>
          <div style="font-size:11px;color:var(--vtg-green);font-weight:600;margin-bottom:10px;">VTG Role: WP Lead — AI/ML Toolkit</div>
          <div style="display:flex;flex-wrap:wrap;gap:4px;">
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusEarth</span>
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusAtlas</span>
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusScholar</span>
          </div>
        </div>
      </a>

      <!-- X-ALFY -->
      <a href="<?php echo home_url('/projects/x-alfy/'); ?>" class="vtg-fade-up" style="background:#fff;border-radius:18px;padding:0;overflow:hidden;border:1px solid rgba(0,0,0,0.06);transition:all 0.3s ease;display:flex;flex-direction:column;text-decoration:none;">
        <div style="background:linear-gradient(145deg,#3D2E0F,#8B6914);padding:28px 24px;position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:30px 30px;"></div>
          <div style="position:relative;z-index:2;">
            <span style="display:inline-block;font-size:9px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:3px 10px;border-radius:20px;background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.7);margin-bottom:12px;">Horizon Europe</span>
            <div style="font-family:var(--font-display);font-size:24px;color:#fff;font-weight:400;">X-ALFY</div>
            <div style="font-size:12px;color:rgba(255,255,255,0.5);margin-top:6px;">Forestry 5.0</div>
          </div>
        </div>
        <div style="padding:22px 24px;flex:1;display:flex;flex-direction:column;">
          <div style="font-size:14px;color:var(--vtg-dark);font-weight:600;margin-bottom:8px;">AI-Based XR Tools for Forestry</div>
          <p style="font-size:13px;color:var(--vtg-slate);line-height:1.6;flex:1;margin:0 0 14px;">Extended reality and AI-driven analytics for sustainable forest management, professional training, and operational decision-making.</p>
          <div style="font-size:11px;color:var(--vtg-green);font-weight:600;margin-bottom:10px;">VTG Role: AI/ML &amp; Geospatial Analytics</div>
          <div style="display:flex;flex-wrap:wrap;gap:4px;">
            <span style="font-size:10px;padding:3px 8px;border-radius:12px;background:var(--vtg-green-faint);color:var(--vtg-green);">NexusAtlas</span>
          </div>
        </div>
      </a>

    </div>

    <!-- Past projects link + View all -->
    <div style="display:flex;justify-content:center;gap:16px;margin-top:12px;">
      <a href="<?php echo home_url('/projects/'); ?>" class="vtg-btn vtg-btn--primary">All Projects &rarr;</a>
      <a href="<?php echo home_url('/projects/past-projects/'); ?>" class="vtg-btn vtg-btn--outline" style="color:var(--vtg-dark);border-color:rgba(0,0,0,0.1);">Past Projects</a>
    </div>

  </div>
</section>

<!-- R&D -->
<section class="vtg-section vtg-section--warm" id="research">
  <div class="vtg-container">
    <div class="vtg-section__label">Research &amp; Development</div>
    <div class="vtg-section__title" style="color:var(--vtg-dark);">Driving Applied AI <em>Innovation</em></div>
    <div class="vtg-section__intro">Shaping the future of AI through focused research themes, tools, and publications.</div>
    <div class="vtg-rd-grid">
      <?php
      $rds = array(
        array('Research Themes','Climate resilience, multimodal AI, and trusted AI as our core research directions.','/research/themes/'),
        array('Laboratory Testbeds','Controlled environments for validating AI systems before real-world deployment.','/research/testbeds/'),
        array('Trusted AI','Explainability, provenance, governance-by-design, and responsible deployment.','/research/trusted-ai/'),
        array('Publications','Peer-reviewed research, conference papers, and technical reports from our team.','/research/publications/'),
      );
      foreach ($rds as $rd) : ?>
      <a href="<?php echo home_url($rd[2]); ?>" class="vtg-rd-card vtg-fade-up">
        <h3><?php echo $rd[0]; ?></h3>
        <p><?php echo $rd[1]; ?></p>
        <span class="vtg-rd-card__link">Explore &rarr;</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="vtg-cta-section">
  <div class="vtg-container" style="position:relative;z-index:2;">
    <h2>Ready to Deploy <em>Trusted AI</em>?</h2>
    <p>Partners engage Venaka when they need research and engineering, tightly integrated.</p>
    <div class="vtg-hero__actions">
      <a href="<?php echo home_url('/contact/book-a-call/'); ?>" class="vtg-btn vtg-btn--primary">Book a Call &rarr;</a>
      <a href="<?php echo home_url('/contact/request-a-proposal/'); ?>" class="vtg-btn vtg-btn--outline">Request a Proposal</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
