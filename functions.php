<?php
if (!defined('ABSPATH')) exit;
define('VTG_VERSION', '3.0.0');
define('VTG_URI', get_template_directory_uri());

function vtg_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-list','gallery','caption','style','script'));
    add_theme_support('custom-logo', array('height'=>100,'width'=>300,'flex-height'=>true,'flex-width'=>true));
    register_nav_menus(array('primary'=>'Primary Menu','footer'=>'Footer Menu'));
}
add_action('after_setup_theme', 'vtg_setup');

function vtg_enqueue_assets() {
    wp_enqueue_style('vtg-fonts','https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&family=Instrument+Serif:ital@0;1&display=swap',array(),null);
    wp_enqueue_style('vtg-style', get_stylesheet_uri(), array('vtg-fonts'), VTG_VERSION);
    wp_enqueue_style('vtg-inner', VTG_URI.'/assets/css/inner-pages.css', array('vtg-style'), VTG_VERSION);
    wp_enqueue_style('vtg-light', VTG_URI.'/assets/css/light-theme.css', array('vtg-style', 'vtg-inner'), VTG_VERSION);
    wp_enqueue_script('vtg-main', VTG_URI.'/assets/js/main.js', array(), VTG_VERSION, true);
}
add_action('wp_enqueue_scripts', 'vtg_enqueue_assets');

function vtg_dequeue_block_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'vtg_dequeue_block_styles', 100);

function vtg_body_classes($c) { if (is_front_page()) $c[]='vtg-home'; return $c; }
add_filter('body_class', 'vtg_body_classes');

/* ========== SITEMAP ========== */
function vtg_get_sitemap() {
    return array(
        'about' => array('label'=>'About','url'=>'/about/','children'=>array(
            array('label'=>'Vision &amp; Mission','url'=>'/about/vision-and-mission/'),
            array('label'=>'What We Do','url'=>'/about/what-we-do/'),
            array('label'=>'Team','url'=>'/about/team/'),
            array('label'=>'Partners','url'=>'/about/partners/'),
        )),
        'products' => array('label'=>'Products','url'=>'/products/','children'=>array(
            array('label'=>'NexusFlow','url'=>'/products/nexusflow/'),
            array('label'=>'NexusTrust','url'=>'/products/nexustrust/'),
            array('label'=>'NexusAtlas','url'=>'/products/nexusatlas/'),
	    array('label'=>'NexusScholar', 'url'=> '/products/nexusscholar'),
            array('label'=>'NexusEarth','url'=>'/products/nexusearth/'),
            array('label'=>'NexusGrid','url'=>'/products/nexusgrid/'),
            array('label'=>'NexusCare','url'=>'/products/nexuscare/'),
            array('label'=>'NexusCurate','url'=>'/products/nexuscurate/'),
            array('label'=>'NexusGuard','url'=>'/products/nexusguard/'),
            array('label'=>'NexusPlace','url'=>'/products/nexusplace/'),
            array('label'=>'NexusScout','url'=>'/products/nexusscout/'),
            array('label'=>'NexusBiome','url'=>'/products/nexusbiome/'),
        )),
	'projects' => array('label'=>'Projects','url'=>'/projects/','children'=>array(
            array('label'=>'SILVANUS','url'=>'/projects/silvanus/'),
            array('label'=>'TERRA','url'=>'/projects/terra/'),
            array('label'=>'X-ALFY','url'=>'/projects/x-alfy/'),
            array('label'=>'Past Projects','url'=>'/projects/past-projects/'),
        )),
        'capabilities' => array('label'=>'Capabilities','url'=>'/capabilities/','children'=>array(
            array('label'=>'Computer Vision','url'=>'/capabilities/computer-vision/'),
            array('label'=>'Data Engineering','url'=>'/capabilities/data-engineering/'),
            array('label'=>'Digital Twins','url'=>'/capabilities/digital-twins/'),
            array('label'=>'Generative AI','url'=>'/capabilities/generative-ai/'),
            array('label'=>'Knowledge Graphs','url'=>'/capabilities/knowledge-graphs/'),
            array('label'=>'MLOps Deployments','url'=>'/capabilities/mlops-deployments/'),
            array('label'=>'Mobile &amp; Web','url'=>'/capabilities/mobile-and-web/'),
            array('label'=>'Edge AI for IoT','url'=>'/capabilities/edge-ai/'),
            array('label'=>'Applied Research','url'=>'/capabilities/applied-research/'),
        )),
        'industries' => array('label'=>'Industries','url'=>'/industries/','children'=>array(
            array('label'=>'Healthcare','url'=>'/industries/healthcare/'),
            array('label'=>'Cultural Heritage','url'=>'/industries/creative-heritage/'),
            array('label'=>'Public Safety','url'=>'/industries/public-safety/'),
            array('label'=>'Transportation','url'=>'/industries/transportation/'),
            array('label'=>'Energy','url'=>'/industries/energy/'),
            array('label'=>'Manufacturing','url'=>'/industries/manufacturing/'),
            array('label'=>'Environment','url'=>'/industries/environment/'),
            array('label'=>'Food Security','url'=>'/industries/food-security/'),
            array('label'=>'AI Research','url'=>'/industries/ai-research/'),
        )),
        'research' => array('label'=>'R&amp;D','url'=>'/research/','children'=>array(
            array('label'=>'Research Themes','url'=>'/research/themes/'),
            array('label'=>'Laboratory Testbeds','url'=>'/research/testbeds/'),
            array('label'=>'Trusted AI','url'=>'/research/trusted-ai/'),
            array('label'=>'Tools &amp; Datasets','url'=>'/research/tools-datasets/'),
            array('label'=>'Publications','url'=>'/research/publications/'),
        )),
        'insights' => array('label'=>'Insights','url'=>'/insights/','children'=>array(
            array('label'=>'News','url'=>'/insights/news/'),
            array('label'=>'Whitepapers','url'=>'/insights/whitepapers/'),
            array('label'=>'Events','url'=>'/insights/events/'),
            array('label'=>'Articles','url'=>'/insights/articles/'),
        )),
        'careers' => array('label'=>'Careers','url'=>'/careers/','children'=>array(
            array('label'=>'Cultural Values','url'=>'/careers/cultural-values/'),
            array('label'=>'Hiring Process','url'=>'/careers/hiring-process/'),
            array('label'=>'Open Roles','url'=>'/careers/open-roles/'),
            array('label'=>'Research Internships','url'=>'/careers/internships/'),
        )),
        'contact' => array('label'=>'Contact','url'=>'/contact/','children'=>array(
            array('label'=>'Book a Call','url'=>'/contact/book-a-call/'),
            array('label'=>'Media','url'=>'/contact/media/'),
            array('label'=>'Partnership','url'=>'/contact/partnership/'),
            array('label'=>'Request a Proposal','url'=>'/contact/request-a-proposal/'),
        )),
    );
}

function vtg_render_nav() {
    $sitemap = vtg_get_sitemap();
    $home = home_url();
    echo '<a href="'.esc_url($home).'">Home</a>';
    foreach ($sitemap as $section) {
        $has = !empty($section['children']);
        echo '<div class="vtg-nav__item'.($has?' vtg-nav__item--has-children':'').'">';
        echo '<a href="'.esc_url($home.$section['url']).'">'.$section['label'].'</a>';
        if ($has) {
            echo '<div class="vtg-nav__dropdown">';
            foreach ($section['children'] as $child)
                echo '<a href="'.esc_url($home.$child['url']).'">'.$child['label'].'</a>';
            echo '</div>';
        }
        echo '</div>';
    }
}

function vtg_get_section_sidebar() {
    $sitemap = vtg_get_sitemap();
    $current = $_SERVER['REQUEST_URI'] ?? '';
    foreach ($sitemap as $key => $section) {
        if (strpos($current, $section['url']) === 0) return $section;
    }
    return null;
}

function vtg_render_sidebar($key = null) {
    $section = null;
    if ($key) { $sm = vtg_get_sitemap(); $section = $sm[$key] ?? null; }
    else $section = vtg_get_section_sidebar();
    if (!$section || empty($section['children'])) return;
    $home = home_url(); $cur = rtrim($_SERVER['REQUEST_URI'] ?? '', '/');
    echo '<aside class="vtg-sidebar"><div class="vtg-sidebar__label">'.strip_tags($section['label']).'</div><nav class="vtg-sidebar__nav">';
    foreach ($section['children'] as $child) {
        $active = (rtrim($child['url'],'/')===$cur) ? ' vtg-sidebar__active' : '';
        echo '<a href="'.esc_url($home.$child['url']).'" class="'.$active.'">'.$child['label'].'</a>';
    }
    echo '</nav></aside>';
}

function vtg_page_hero($args = array()) {
    $d = array('theme'=>'dark','title'=>get_the_title(),'intro'=>'','breadcrumbs'=>array());
    $args = wp_parse_args($args, $d);
    get_template_part('template-parts/page-hero', null, $args);
}

function vtg_page_cta($t='Ready to discuss your project?', $p='') {
    if (!$p) $p = 'Get in touch to explore how Venaka can help translate your challenges into deployable AI solutions.';
    echo '<div class="vtg-page-cta"><h3>'.esc_html($t).'</h3><p>'.esc_html($p).'</p>';
    echo '<a href="'.esc_url(home_url('/contact/book-a-call/')).'" class="vtg-btn vtg-btn--primary">Book a Call &rarr;</a></div>';
}

/* Product data */
function vtg_get_products() {
    return array(
        'nexusflow' => array('name'=>'NexusFlow','cluster'=>'Cross-cutting','tagline'=>'Agentic AI orchestration that turns heterogeneous data into actionable, evidence-based insight.','desc'=>'VTG\'s core Agentic AI capability - the intelligent orchestration layer that transforms heterogeneous data sources into coordinated, actionable insight.','img'=>'nexusflow.png'),
        'nexustrust' => array('name'=>'NexusTrust','cluster'=>'AI & Robotics','tagline'=>'Trustworthiness assurance for reliable, explainable and ethically aligned AI operation.','desc'=>'VTG\'s trustworthiness assurance capability providing monitoring, evaluation and governance for reliable AI.','img'=>'nexustrust.png'),
        'nexusatlas' => array('name'=>'NexusAtlas','cluster'=>'Climate & Environment','tagline'=>'Multi-layered geospatial digital twin for environmental and climate-resilience operations.','desc'=>'VTG\'s flagship geospatial digital-twin platform providing multi-layered GIS visualisation and decision support.','img'=>'nexusatlas.png'),
        'nexusearth' => array('name'=>'NexusEarth','cluster'=>'Space','tagline'=>'End-to-end Earth Observation platform from satellite acquisition to operational intelligence.','desc'=>'VTG\'s Earth Observation intelligence platform transforming multi-source satellite imagery into operational insight.','img'=>'nexusearth.png'),
        'nexusgrid' => array('name'=>'NexusGrid','cluster'=>'Energy','tagline'=>'Geospatial digital twin for modern energy systems and distributed energy resources.','desc'=>'A geospatial digital twin for modern energy systems through a multi-layered GIS platform.','img'=>'nexusgrid.png'),
        'nexuscare' => array('name'=>'NexusCare','cluster'=>'Health','tagline'=>'Real-time clinical monitoring and care-coordination for pre-clinical and primary care.','desc'=>'Real-time clinical monitoring integrating wearable vital-sign streams and EHR-linked medical context.','img'=>'nexuscare.png'),
        'nexuscurate' => array('name'=>'NexusCurate','cluster'=>'Culture','tagline'=>'Blockchain-secured provenance and rights for cultural heritage and AI-generated creative arts.','desc'=>'Enabling cultural institutions to embrace generative AI while preserving attribution chains.','img'=>'nexuscurate.png'),
        'nexusguard' => array('name'=>'NexusGuard','cluster'=>'Security','tagline'=>'Pattern-based multi-camera person tracking for public safety operations.','desc'=>'Multi-source pattern-based person tracking combining computer vision with agentic AI.','img'=>'nexusguard.png'),
        'nexusplace' => array('name'=>'NexusPlace','cluster'=>'AI & Robotics','tagline'=>'Hybrid AI for safe, efficient placement of physically constrained objects in bounded spaces.','desc'=>'Hybrid AI providing perception and decision layer for detecting and placing objects in bounded spaces.','img'=>'nexusplace.png'),
        'nexusscout' => array('name'=>'NexusScout','cluster'=>'Farm to Fork','tagline'=>'AI-enabled field scouting for early pest detection and integrated pest management.','desc'=>'AI-enabled mobile application supporting early detection and management of crop pests.','img'=>'nexusscout.png'),
        'nexusbiome' => array('name'=>'NexusBiome','cluster'=>'Biodiversity','tagline'=>'Citizen-science biodiversity engagement and regional biodiversity-index intelligence.','desc'=>'Mobile-and-web platform engaging citizens while building structured biodiversity intelligence.','img'=>'nexusbiome.png'),
    );
}
