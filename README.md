# VTG Venaka TReLeaf — WordPress Theme v3.0
## Complete Website with Nexus Product Suite

### Quick Install
1. WordPress Admin → Appearance → Themes → Add New → Upload → select `vtg-theme-v3.zip`
2. Activate the theme
3. Settings → Permalinks → select **Post name** → Save
4. Settings → Reading → Static page → set Homepage

---

## Complete Sitemap (63 pages)

### Home (front-page.php — automatic)
The homepage includes: Hero, About, R&D Approach, Nexus Product Suite (11 products with images), Capabilities grid, Industries, R&D, and CTA sections.

### About (5 pages)
| Page Title | Parent | Template |
|---|---|---|
| About | — | Section — About (Landing) |
| Vision and Mission | About | About - Vision & Mission |
| What We Do | About | About - What We Do |
| Team | About | About - Team |
| Partners | About | About - Partners |

### Products — Nexus Suite (12 pages)
| Page Title | Parent | Template | Image |
|---|---|---|---|
| Products | — | Section — Products (Landing) | — |
| NexusFlow | Products | Product - NexusFlow | ✅ nexusflow.png |
| NexusTrust | Products | Product - NexusTrust | ✅ nexustrust.png |
| NexusAtlas | Products | Product - NexusAtlas | ✅ nexusatlas.png |
| NexusEarth | Products | Product - NexusEarth | ✅ nexusearth.png |
| NexusGrid | Products | Product - NexusGrid | ✅ nexusgrid.png |
| NexusCare | Products | Product - NexusCare | ✅ nexuscare.png |
| NexusCurate | Products | Product - NexusCurate | ✅ nexuscurate.png |
| NexusGuard | Products | Product - NexusGuard | ✅ nexusguard.png |
| NexusPlace | Products | Product - NexusPlace | ✅ nexusplace.png |
| NexusScout | Products | Product - NexusScout | ✅ nexusscout.png |
| NexusBiome | Products | Product - NexusBiome | ✅ nexusbiome.png |

### Capabilities (10 pages)
| Page Title | Parent | Template |
|---|---|---|
| Capabilities | — | Section — Capabilities (Landing) |
| Computer Vision | Capabilities | Capability - Computer Vision |
| Data Engineering | Capabilities | Capability - Data Engineering |
| Digital Twins | Capabilities | Capability - Digital Twins |
| Generative AI | Capabilities | Capability - Generative AI |
| Knowledge Graphs | Capabilities | Capability - Knowledge Graphs |
| MLOps Deployments | Capabilities | Capability - MLOps |
| Mobile and Web | Capabilities | Capability - Mobile & Web |
| Edge AI for IoT | Capabilities | Capability - Edge AI |
| Applied Research | Capabilities | Capability - Applied Research |

### Industries (10 pages)
| Page Title | Parent | Template |
|---|---|---|
| Industries | — | Section — Industries (Landing) |
| Healthcare | Industries | Industry - Healthcare |
| Creative and Cultural Heritage | Industries | Industry - Cultural Heritage |
| Public Safety and Security | Industries | Industry - Public Safety |
| Transportation and Mobility | Industries | Industry - Transportation |
| Energy and Carbon Monitoring | Industries | Industry - Energy |
| Manufacturing and Industry 5.0 | Industries | Industry - Manufacturing |
| Environment and Climate | Industries | Industry - Environment |
| Food Security and Biodiversity | Industries | Industry - Food Security |
| Interdisciplinary AI Research | Industries | Industry - AI Research |

### Research & Development (6 pages)
| Page Title | Parent | Template |
|---|---|---|
| Research and Development | — | Section — R&D (Landing) |
| Research Themes | Research and Development | R&D - Research Themes |
| Laboratory Testbeds | Research and Development | R&D - Laboratory Testbeds |
| Trusted AI | Research and Development | R&D - Trusted AI |
| Tools and Datasets | Research and Development | R&D - Tools & Datasets |
| Publications | Research and Development | R&D - Publications |

### Insights (5 pages)
| Page Title | Parent | Template |
|---|---|---|
| Insights | — | Section — Insights (Landing) |
| News | Insights | Insights - News |
| Whitepapers | Insights | Insights - Whitepapers |
| Events | Insights | Insights - Events |
| Articles | Insights | Insights - Articles |

### Careers (5 pages)
| Page Title | Parent | Template |
|---|---|---|
| Careers | — | Section — Careers (Landing) |
| Cultural Values | Careers | Careers - Cultural Values |
| Hiring Process | Careers | Careers - Hiring Process |
| Open Roles | Careers | Careers - Open Roles |
| Research Internships | Careers | Careers - Research Internships |

### Contact (5 pages)
| Page Title | Parent | Template |
|---|---|---|
| Contact | — | Section — Contact (Landing) |
| Book a Call | Contact | Contact - Book a Call |
| Media | Contact | Contact - Media |
| Partnership | Contact | Contact - Partnership |
| Request a Proposal | Contact | Contact - Request a Proposal |

---

## Design System

### Dark-First Aesthetic
Unlike v2 (green on white), v3 uses a **dark-mode-first** design inspired by high-tech AI companies:
- **Dark Navy** (#0F172A) — backgrounds
- **Emerald Green** (#10B981) — primary accent, CTAs, highlights
- **Cyan** (#06B6D4) — secondary accent
- **Slate** (#64748B) — body text on dark backgrounds
- **Warm White** (#F8FAFC) — light sections

### Typography
- **Display**: Instrument Serif (editorial, distinctive headings)
- **Body**: DM Sans (clean, modern body text)

### Key Features
- Dark glassmorphism header with blur backdrop
- Animated grid patterns and glow effects on hero
- Product cards with actual screenshots from the portfolio document
- Responsive dropdown navigation
- Scroll-triggered fade-up animations
- Sticky sidebar navigation on inner pages
- All 11 Nexus product images included in theme

---

## Editing Content

### Via WordPress Editor (recommended for additions)
Edit any page → add content in the editor → it appears below template content

### Via PHP Files (for template changes)
Edit files in `wp-content/themes/vtg-theme/page-templates/`

### Product Data
Product descriptions are in `functions.php` → `vtg_get_products()`

### Navigation
Menu structure is in `functions.php` → `vtg_get_sitemap()`

---

## Theme File Structure (83 files)

```
vtg-theme/
├── style.css                          ← Complete dark-mode styles
├── functions.php                      ← Sitemap, products, helpers
├── header.php                         ← Dark glassmorphism header
├── footer.php                         ← 5-column dark footer
├── front-page.php                     ← Homepage (11 sections)
├── page.php                           ← Generic with auto-sidebar
├── single.php / index.php / 404.php
├── screenshot.png
├── assets/
│   ├── css/inner-pages.css
│   ├── js/main.js
│   └── images/
│       ├── vtg-logo.png
│       └── products/                  ← 11 product screenshots
│           ├── nexusflow.png
│           ├── nexustrust.png
│           ├── nexusatlas.png
│           ├── nexusearth.png
│           ├── nexusgrid.png
│           ├── nexuscare.png
│           ├── nexuscurate.png
│           ├── nexusguard.png
│           ├── nexusplace.png
│           ├── nexusscout.png
│           └── nexusbiome.png
├── template-parts/
│   └── page-hero.php
└── page-templates/                    ← 56 page templates
    ├── product-nexusflow.php ... (11 product pages)
    ├── section-about.php ... (8 landing pages)
    ├── vision-and-mission.php ... (4 about pages)
    ├── capabilities_*.php ... (9 capability pages)
    ├── industries_*.php ... (9 industry pages)
    ├── research_*.php ... (5 R&D pages)
    ├── insights_*.php ... (4 insights pages)
    ├── careers_*.php ... (4 career pages)
    └── contact_*.php ... (4 contact pages)
```

## Requirements
- WordPress 6.0+
- PHP 7.4+
- No plugins required
