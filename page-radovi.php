<?php

/**
 * Template Name: Radovi Page
 * Portfolio / work page template.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$work_categories = array(
    'all'      => 'Sve',
    'web'      => 'Web dizajn',
    'brand'    => 'Branding',
    'ui'       => 'UX/UI',
    'social'   => 'Social asseti',
    'print'    => 'Print',
    'concept'  => 'Koncepti',
    'redesign' => 'Redizajn',
);

$projects = array(
    array(
        'number'      => '01',
        'title'       => 'Lustra',
        'category'    => 'Luxury e-commerce',
        'filter'      => 'web brand ui concept',
        'badge'       => 'Concept project',
        'status'      => 'Koncept',
        'description' => 'Luxury e-commerce koncept s fokusom na premium product storytelling, elegantnu tipografiju, editorial slike i mobilni shopping flow.',
        'tags'        => array('UX/UI', 'E-commerce', 'Luxury brand', 'Mobile flow'),
        'cover'       => 'https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?auto=format&fit=crop&w=1400&q=85',
        'images'      => array(
            'https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=1800&q=85',
        ),
    ),
    array(
        'number'      => '02',
        'title'       => 'Tamaru',
        'category'    => 'Cleaning service redesign',
        'filter'      => 'web brand redesign',
        'badge'       => 'Client proposal',
        'status'      => 'Prijedlog za klijenta',
        'description' => 'Vizualni prijedlog za uslužni obrt s jasnim before/after principom, clean service positioningom, lokalnim karakterom i vizualnim sustavom koji djeluje uredno, pouzdano i profesionalno.',
        'tags'        => array('Web redesign', 'Local business', 'Service page', 'Visual system'),
        'cover'       => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=1400&q=85',
        'images'      => array(
            'https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1563453392212-326f5e854473?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1603712725038-e9334ae8f39f?auto=format&fit=crop&w=1800&q=85',
        ),
    ),
    array(
        'number'      => '03',
        'title'       => 'NK Zet',
        'category'    => 'Sports identity',
        'filter'      => 'brand web print social',
        'badge'       => 'Client proposal',
        'status'      => 'Prijedlog za klijenta',
        'description' => 'Sportski vizualni sustav za lokalni nogometni klub: logo primjene, digitalni asseti, print materijali i web direction za moderniji nastup prema igračima, roditeljima i zajednici.',
        'tags'        => array('Branding', 'Sports', 'Print', 'Social assets'),
        'cover'       => 'https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?auto=format&fit=crop&w=1400&q=85',
        'images'      => array(
            'https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1511886929837-354d827aae26?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1522778119026-d647f0596c20?auto=format&fit=crop&w=1800&q=85',
        ),
    ),
    array(
        'number'      => '02',
        'title'       => 'VELVET NEEDLE',
        'category'    => 'Tattoo studio branding',
        'filter'      => 'brand web print identity social',
        'badge'       => 'Case study',
        'status'      => 'Branding + Web Design',
        'description' => 'Vizualni identitet za lokalni, moderni tattoo studio. Projekt izbjegava generičku gothic estetiku i gradi suvremeniji, čišći i prepoznatljiviji brand sustav kroz logo, web dizajn, print materijale, naljepnice, signage i merch. Fokus je bio na tome da studio djeluje moderno, profesionalno i dovoljno upečatljivo da se razlikuje od tipičnih tattoo vizuala.',
        'tags'        => array(
            'Logo Design',
            'Web Design',
            'Brand Identity',
            'Print',
            'Merch',
            'Signage'
        ),
        'cover'       => 'https://mavrosagency.com/wp-content/uploads/2026/06/MacBook-Pro-16_-1-21-scaled.png',
        'images'      => array(
            'https://mavrosagency.com/wp-content/uploads/2026/06/MacBook-Pro-16_-1-21-scaled.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/VELVET-3.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-11_00_20-PM.png',
        ),
        'case_url'    => home_url('/velvet-needle-case-study/'),
    ),
    array(
        'number'      => '05',
        'title'       => 'Mavros System',
        'category'    => 'Agency identity',
        'filter'      => 'brand social web concept',
        'badge'       => 'Internal concept',
        'status'      => 'Interni koncept',
        'description' => 'Eksperimentalni Mavros Agency vizualni sustav s brutalist gridom, neon zelenim akcentima, velikom tipografijom, mockup pristupom i high-impact social prezentacijom.',
        'tags'        => array('Brand system', 'Social campaign', 'Editorial UI', 'Launch visuals'),
        'cover'       => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=1400&q=85',
        'images'      => array(
            'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=1800&q=85',
            'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=1800&q=85',
        ),

    ),
);
?>

<main id="primary" class="mav-page mav-work-page">

    <section class="mav-work-hero" id="radovi-hero" data-nav-label="Radovi">
        <div class="mav-work-shell">

            <div class="mav-work-hero__top mv-reveal">
                <div>
                    <p class="mav-work-kicker">Mavros Agency / Radovi</p>

                    <h1>
                        Selected work, concepts and client proposals.
                    </h1>
                </div>

                <div class="mav-work-hero__side-copy">
                    <span>
                        Portfolio stranica prikazuje web, brand, UX/UI, print i digitalne vizuale kroz sistematičan pregled projekata.
                        Svaki projekt se otvara u overlay s kolekcijom slika, tagovima, opisom i statusom.
                    </span>

                    <a class="mav-work-btn mav-work-btn--primary" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                        Zatraži sličan projekt
                    </a>
                </div>
            </div>



            <div class="mav-work-inline-cta mv-reveal">
                <p>Imaš projekt koji ne spada čisto u jednu kategoriju?</p>

                <a class="mav-work-btn mav-work-btn--secondary" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                    Pošalji ideju za projekt
                </a>
            </div>



            <div class="mav-work-hero-grid mv-reveal">
                <?php foreach ($projects as $index => $project) : ?>
                    <article
                        class="mav-work-hero-card mav-work-project-trigger"
                        tabindex="0"
                        role="button"
                        aria-label="<?php echo esc_attr('Otvori projekt ' . $project['title']); ?>"
                        data-project='<?php echo esc_attr(wp_json_encode($project)); ?>'>
                        <div class="mav-work-hero-card__image">
                            <img
                                src="<?php echo esc_url($project['cover']); ?>"
                                alt="<?php echo esc_attr($project['title']); ?>"
                                loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>">
                        </div>

                        <div class="mav-work-hero-card__content">
                            <div class="mav-work-hero-card__meta">
                                <span><?php echo esc_html($project['number']); ?></span>
                                <small><?php echo esc_html($project['category']); ?></small>
                            </div>

                            <h2><?php echo esc_html($project['title']); ?></h2>

                            <div class="mav-work-hero-card__bottom">
                                <p><?php echo esc_html($project['status']); ?></p>
                                <em>Open</em>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section class="mav-work-category-section" id="radovi-kategorije" data-nav-label="Kategorije">
        <div class="mav-work-shell">

            <div class="mav-work-section-heading mv-reveal">
                <p>Project types</p>

                <h2>
                    Filter by visual system.
                </h2>

                <span>
                    Kategorije su zamišljene kao geometrijski izbor. Na hover se pretvaraju u Mavros zelenu,
                    a klik filtrira projekte ispod.
                </span>
            </div>

            <div class="mav-work-category-grid mv-reveal" data-work-filters>
                <?php
                $category_index = 1;
                foreach ($work_categories as $key => $label) :
                ?>
                    <button
                        class="mav-work-category<?php echo $key === 'all' ? ' is-active' : ''; ?>"
                        type="button"
                        data-filter="<?php echo esc_attr($key); ?>">
                        <small><?php echo esc_html(str_pad((string) $category_index, 2, '0', STR_PAD_LEFT)); ?></small>
                        <span><?php echo esc_html($label); ?></span>
                    </button>
                <?php
                    $category_index++;
                endforeach;
                ?>
            </div>

        </div>
    </section>

    <section class="mav-work-list-section" id="radovi-lista" data-nav-label="Index">
        <div class="mav-work-shell">

            <div class="mav-work-section-heading mv-reveal">
                <p>Project index</p>

                <h2>
                    Radovi koji se mogu širiti.
                </h2>

                <span>
                    Ovo je početna portfolio struktura. Kasnije samo dodaješ prave slike, opise, tagove,
                    status projekta i dodatne galerije.
                </span>
            </div>

            <div class="mav-work-project-grid mv-reveal" data-work-grid>
                <?php foreach ($projects as $project) : ?>
                    <article
                        class="mav-work-project-card mav-work-project-trigger"
                        tabindex="0"
                        role="button"
                        aria-label="<?php echo esc_attr('Otvori projekt ' . $project['title']); ?>"
                        data-categories="<?php echo esc_attr($project['filter']); ?>"
                        data-project='<?php echo esc_attr(wp_json_encode($project)); ?>'>
                        <div class="mav-work-project-card__visual">
                            <img
                                src="<?php echo esc_url($project['cover']); ?>"
                                alt="<?php echo esc_attr($project['title']); ?>"
                                loading="lazy">
                        </div>

                        <div class="mav-work-project-card__content">
                            <div class="mav-work-project-card__top">
                                <span><?php echo esc_html($project['number']); ?></span>
                                <small><?php echo esc_html($project['badge']); ?></small>
                            </div>

                            <h3><?php echo esc_html($project['title']); ?></h3>

                            <p>
                                <?php echo esc_html($project['description']); ?>
                            </p>

                            <div class="mav-work-project-card__tags">
                                <?php foreach (array_slice($project['tags'], 0, 3) as $tag) : ?>
                                    <em><?php echo esc_html($tag); ?></em>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>


            <div class="mav-work-inline-cta mav-work-inline-cta--after-grid mv-reveal">
                <p>Želiš ovakav vizualni smjer za svoj brand, web ili prijedlog za klijenta?</p>

                <a class="mav-work-btn mav-work-btn--primary" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                    Kontaktiraj Mavros Agency
                </a>
            </div>


        </div>
    </section>

    <section class="mav-work-future-section" id="radovi-future" data-nav-label="Dalje">
        <div class="mav-work-shell">

            <div class="mav-work-future-grid mv-reveal">
                <article>
                    <p>Next section</p>
                    <h2>Case study breakdown</h2>
                    <span>
                        Ovdje kasnije možemo dodati dublji prikaz procesa: problem, cilj, dizajn odluke, rezultat.
                    </span>
                </article>

                <article>
                    <p>Next section</p>
                    <h2>Before / after archive</h2>
                    <span>
                        Ovdje može ići velika galerija redizajna s before/after sliderima za stvarne projekte.
                    </span>
                </article>

                <article>
                    <p>Next section</p>
                    <h2>Brand boards</h2>
                    <span>
                        Ovdje možemo prikazati social-media-ready brand prezentacije, mockupe i vizualne sustave.
                    </span>
                </article>
            </div>

            <div class="mav-work-final-cta mv-reveal">
                <p>Ready when you are</p>

                <h2>
                    Imaš web, brand ili ideju koja treba izgledati ozbiljnije?
                </h2>

                <span>
                    Pošalji nam što trenutno imaš. Može biti stara stranica, Instagram profil, logo, skica, brief ili samo ideja.
                </span>

                <a class="mav-work-btn mav-work-btn--primary" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                    Idemo na kontakt
                </a>
            </div>

        </div>
    </section>

    <div class="mav-work-overlay" id="mav-work-overlay" hidden>
        <button
            class="mav-work-overlay__backdrop"
            type="button"
            data-work-close
            aria-label="Zatvori projekt"></button>

        <div class="mav-work-overlay__panel" role="dialog" aria-modal="true" aria-label="Detalji projekta">
            <div class="mav-work-overlay__topbar">
                <div>
                    <span data-work-overlay-number>01</span>
                    <small data-work-overlay-category>Category</small>
                </div>

                <button
                    class="mav-work-overlay__close"
                    type="button"
                    data-work-close
                    aria-label="Zatvori projekt">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6 6L18 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square"></path>
                        <path d="M18 6L6 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square"></path>
                    </svg>
                </button>
            </div>

            <div class="mav-work-overlay__body">
                <div class="mav-work-overlay__media">
                    <div class="mav-work-overlay__main-image">
                        <img data-work-overlay-image src="" alt="">
                    </div>

                    <div class="mav-work-overlay__thumbs" data-work-overlay-thumbs></div>
                </div>

                <aside class="mav-work-overlay__content">
                    <div class="mav-work-overlay__badge" data-work-overlay-badge>
                        Concept project
                    </div>

                    <h2 data-work-overlay-title>
                        Project title
                    </h2>

                    <p data-work-overlay-description>
                        Project description.
                    </p>

                    <div class="mav-work-overlay__tags" data-work-overlay-tags></div>


                    <a class="mav-work-overlay__cta" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                        Želim sličan projekt
                    </a>


                    <div class="mav-work-overlay__details">
                        <article>
                            <span>Status</span>
                            <strong data-work-overlay-status>Koncept</strong>
                        </article>

                        <article>
                            <span>Deliverables</span>
                            <strong>Visual system / UI / assets</strong>
                        </article>

                        <article>
                            <span>Use</span>
                            <strong>Portfolio / proposal / launch</strong>
                        </article>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</main>

<?php
get_footer();
