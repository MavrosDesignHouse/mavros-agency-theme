# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

A custom WordPress theme for **Mavros Agency** — a Zagreb-based web design studio targeting small local businesses in Croatia. The theme has no build step or package manager; it is deployed directly to a WordPress installation via SFTP.

**WordPress requirements:** 6.0+, PHP 8.0+

## Deployment workflow

Files are edited locally and uploaded to the live server via SFTP (VS Code extension configured in `.vscode/sftp.json`, which is gitignored). There is no build process, no Webpack, no npm. CSS and JS are written and delivered as plain files.

**Live site:** `https://mavrosagency.com`
**Staging site:** `https://staging.mavrosagency.com`

## Theme architecture

### Entry points
- `functions.php` — enqueues assets, registers theme support, hooks. **Note:** contains a duplicate nested `mavros_agency_enqueue_assets()` function (known issue — the outer function handles `get_stylesheet_directory`, the inner uses `get_template_directory`; one is dead code).
- `inc/setup.php` — theme setup, nav menus, custom image sizes
- `inc/enqueue.php` — (scaffolded, not used; `functions.php` currently handles enqueueing)
- `inc/cpt.php` — registers `case_study` CPT with slug `/portfolio/`
- `inc/security.php` — security headers, removes WP version from `<head>`
- `inc/schema.php` — (scaffolded for future schema consolidation)

### Page templates
All page templates follow the naming convention `page-{slug}.php`:
- `front-page.php` — homepage (single large file; all page data is defined as PHP arrays at the top)
- `page-cjenik.php` — pricing page
- `page-o-nama.php` — about page
- `page-proces.php` — process page (loads additional `assets/css/mavros-process.css` and `assets/js/mavros-process.js`)
- `page-radovi.php` — portfolio archive
- `page-usluge.php`, `page-redizajn.php` — service landing pages
- `page-velvet-needle-case-study.php`, `page-obsidian-detailing-case-study.php` — individual case studies

### Data pattern
Content that could eventually live in a CPT or WooCommerce is currently stored as PHP arrays directly in `front-page.php`:
- `$mv_projects` — portfolio items (category, cover image, images array, tags, problem/solution)
- `$mv_services`, `$mv_industries`, `$mv_process`, `$mv_faq` — section content
- `$mv_brand` — contact info, social links, Formspree endpoint
- `$mv_schema` — full JSON-LD schema graph (ProfessionalService, WebSite, FAQPage, ItemList)

When adding a new portfolio project, add to `$mv_projects` and ensure the `category` value matches a `data-project-filter` button in the work section.

### Assets
- `assets/css/main.css` — all global styles (no preprocessor)
- `assets/js/main.js` — all global JS interactions (vanilla JS IIFE, no framework)
- Page-specific assets: `assets/css/mavros-process.css`, `assets/js/mavros-process.js` (loaded conditionally via `is_page_template()`)

### JS architecture (`main.js`)
Vanilla JS IIFE with named `init*` functions for each component:
- `initHeader()` — scroll state, sticky behaviour
- `initDrawer()` — mobile nav drawer
- `initSmoothScroll()` — hash-link scroll with header offset
- `initProjectGrid()` — portfolio filter + load-more + modal
- `initIndustryTabs()` — services/industry tab switcher
- `initFAQ()` — accordion
- `initDeviceShowcase()` — scroll-driven device mockup switcher
- `initGSAP()` — GSAP ScrollTrigger reveal animations (`.mv-reveal`, `.mv-split`)
- `initMagneticButtons()` — magnetic hover on `.mv-magnetic` elements
- `initContactForm()` — Formspree form submit with feedback state

GSAP (3.12.5) and ScrollTrigger are loaded from CDN and registered via `wp_enqueue_script` with proper dependencies. `prefersReducedMotion` is checked globally and disables GSAP animations.

### CSS naming
BEM-style with `mv-` prefix:
- Block: `mv-hero`, `mv-services`, `mv-work`, etc.
- State: `is-active`, `is-open`, `is-scrolled`
- JS hooks: `data-mv-header`, `data-project-card`, `data-modal-close`, etc.

### Template parts
`template-parts/` holds reusable component and section partials (not yet wired into most pages — pages are currently self-contained).

## Key conventions

- All PHP output uses `esc_html()`, `esc_url()`, `esc_attr()` — maintain this throughout.
- Navigation links in `header.php` use `data-mv-section-link` to drive JS-powered smooth scroll on the homepage; on other pages they navigate normally.
- Instagram feed uses the `[instagram-feed feed=1]` shortcode (Smash Balloon plugin); falls back to a static CTA block if the plugin isn't active.
- WooCommerce shop link is conditionally shown in header/footer when `class_exists('WooCommerce')`.
- Contact form posts to Formspree (`https://formspree.io/f/mqenglow`); honeypot field is `_gotcha`.
