<?php

/**
 * Template Name: Redesign Page
 * Redesign page template.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$redesign_points = array(
    array(
        'number' => '01',
        'title'  => 'Prvi dojam',
        'text'   => 'Stranica mora odmah izgledati kao ozbiljan biznis, ne kao stari template koji nitko nije dirao godinama.',
    ),
    array(
        'number' => '02',
        'title'  => 'Struktura',
        'text'   => 'Sadržaj mora voditi korisnika kroz jasan tok: tko si, što nudiš, zašto ti vjerovati i što napraviti dalje.',
    ),
    array(
        'number' => '03',
        'title'  => 'Mobilni prikaz',
        'text'   => 'Većina ljudi prvo vidi stranicu na mobitelu. Ako tamo puca hijerarhija, puca i prvi dojam.',
    ),
    array(
        'number' => '04',
        'title'  => 'CTA logika',
        'text'   => 'Gumbi, kontakt i idući koraci moraju biti jasni. Korisnik ne bi trebao razmišljati gdje kliknuti.',
    ),
    array(
        'number' => '05',
        'title'  => 'Vizualni sustav',
        'text'   => 'Boje, tipografija, kartice, slike i razmaci trebaju izgledati kao dio istog branda.',
    ),
    array(
        'number' => '06',
        'title'  => 'Povjerenje',
        'text'   => 'Redizajn mora pojačati dojam profesionalnosti, sigurnosti i jasnoće prije nego korisnik uopće pošalje upit.',
    ),
);

$logo_cards = array(
    array(
        'label' => 'Before',
        'title' => 'Logo bez sustava',
        'text'  => 'Stari logo često postoji samo kao slika bez jasnih pravila, varijanti, prostora i primjene.',
    ),
    array(
        'label' => 'After',
        'title' => 'Logo kao dio identiteta',
        'text'  => 'Novi logo mora imati jasnu konstrukciju, verzije za tamnu i svijetlu pozadinu, favicon i primjenu na webu.',
    ),
    array(
        'label' => 'System',
        'title' => 'Primjena u stvarnom svijetu',
        'text'  => 'Logo nije dovoljan sam. Treba raditi na webu, vizitki, social objavi, dokumentu i mobilnom prikazu.',
    ),
);

$process = array(
    array('01', 'Audit', 'Pregled stare stranice, strukture, vizuala, sadržaja i mobilnog prikaza.'),
    array('02', 'Smjer', 'Definiramo što mora ostati, što se mora ukloniti i kakav dojam stranica treba ostaviti.'),
    array('03', 'Vizualni sistem', 'Postavljamo boje, tipografiju, komponente, layout i osnovni brand ritam.'),
    array('04', 'Dizajn', 'Radimo nove sekcije, mockupe, hijerarhiju i ključne ekrane.'),
    array('05', 'Izrada', 'Pretvaramo dizajn u funkcionalnu WordPress stranicu ili pripremamo assete za implementaciju.'),
    array('06', 'Launch', 'Testiramo responzivnost, brzinu, linkove, forme i finalni dojam prije objave.'),
);
?>

<main id="primary" class="mav-page mav-redesign-page">

    <section class="mav-redesign-hero" id="redesign-hero">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-hero__content mv-reveal">
                <p class="mav-redesign-kicker">Mavros Agency / Redizajn</p>

                <h1>
                    Stara stranica ne mora izgledati kao stari biznis.
                </h1>

                <p>
                    Redizajniramo web stranice, logotipe i vizualne sustave za biznise koji su prerasli svoj trenutni izgled.
                    Cilj nije samo “ljepše”. Cilj je jasnije, ozbiljnije, modernije i uvjerljivije.
                </p>

                <div class="mav-redesign-hero__actions">
                    <a class="mav-redesign-btn mav-redesign-btn--primary" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                        Pošalji staru stranicu
                    </a>

                    <a class="mav-redesign-btn mav-redesign-btn--secondary" href="#redesign-before-after">
                        Pogledaj prije / poslije
                    </a>
                </div>
            </div>

            <div class="mav-redesign-hero__visual mv-reveal" aria-hidden="true">
                <div class="mav-redesign-hero-card mav-redesign-hero-card--old">
                    <span>OLD SITE</span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <strong>Template look</strong>
                </div>

                <div class="mav-redesign-hero-card mav-redesign-hero-card--new">
                    <span>NEW SYSTEM</span>
                    <div></div>
                    <div></div>
                    <div></div>
                    <strong>Clear brand</strong>
                </div>
            </div>

        </div>
    </section>

    <section class="mav-redesign-motion-section" id="redesign-motion" data-redesign-motion>
        <div class="mav-redesign-motion-shell">

            <div class="mav-redesign-motion-title" data-redesign-motion-title>
                <p>Motion audit</p>
                <h2>Iz stare stranice u novi vizualni sustav.</h2>
                <span>
                    Velika pozadinska slika predstavlja staru stranicu: prenatrpanu, nejasnu i zastarjelu.
                    Manji frame ulazi u kadar kao nova verzija: fokusirana, moderna i spremna za korisnika.
                </span>
            </div>

            <div class="mav-redesign-motion-stage" data-redesign-motion-stage>
                <div class="mav-redesign-old-site" data-redesign-old>
                    <div class="mav-redesign-browser-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                        <em>old-business-site.test</em>
                    </div>

                    <div class="mav-redesign-old-layout">
                        <div class="mav-redesign-old-sidebar">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>

                        <div class="mav-redesign-old-content">
                            <div class="mav-redesign-old-hero"></div>

                            <div class="mav-redesign-old-lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="mav-redesign-old-grid">
                                <b></b>
                                <b></b>
                                <b></b>
                                <b></b>
                                <b></b>
                                <b></b>
                            </div>
                        </div>
                    </div>

                    <div class="mav-redesign-old-label">
                        <span>BEFORE</span>
                        <strong>Zastarjela struktura</strong>
                    </div>
                </div>

                <div class="mav-redesign-new-site" data-redesign-new>
                    <div class="mav-redesign-new-top">
                        <span></span>
                        <em>NEW / 2026</em>
                    </div>

                    <div class="mav-redesign-new-hero">
                        <p>MODERN WEB SYSTEM</p>
                        <h3>Clear, premium, conversion-ready.</h3>
                    </div>

                    <div class="mav-redesign-new-grid">
                        <article>
                            <span>01</span>
                            <strong>Brand</strong>
                        </article>

                        <article>
                            <span>02</span>
                            <strong>UX</strong>
                        </article>

                        <article>
                            <span>03</span>
                            <strong>Mobile</strong>
                        </article>
                    </div>

                    <div class="mav-redesign-new-footer">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="redesign-before-after" class="mav-redesign-before-after-section">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-section-heading mv-reveal">
                <p>Before / After</p>
                <h2>Ne mijenja se samo izgled. Mijenja se osjećaj.</h2>
                <span>
                    Redizajn mora odmah pokazati razliku: bolji ritam, bolji kontrast, jasniji CTA i stranica koja izgleda kao da brand zna što radi.
                </span>
            </div>

            <div class="mv-compare mav-redesign-compare mv-reveal" data-compare data-start="52" aria-label="Usporedba web stranice prije i poslije redizajna">
                <div class="mv-compare__frame">
                    <img
                        class="mv-compare__image mv-compare__image--before"
                        src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1800&q=85"
                        alt="Primjer stare web stranice prije redizajna"
                        draggable="false">

                    <div class="mv-compare__after" data-compare-after>
                        <img
                            class="mv-compare__image mv-compare__image--after"
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1800&q=85"
                            alt="Primjer moderne web stranice nakon redizajna"
                            draggable="false">
                    </div>

                    <div class="mv-compare__label mv-compare__label--before">Prije</div>
                    <div class="mv-compare__label mv-compare__label--after">Poslije</div>

                    <button class="mv-compare__handle" type="button" data-compare-handle aria-label="Pomakni slider za usporedbu prije i poslije">
                        <span class="mv-compare__line"></span>
                        <span class="mv-compare__knob">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M10 7L5 12L10 17" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter" />
                                <path d="M14 7L19 12L14 17" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section class="mav-redesign-breakdown-section" id="redesign-breakdown">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-section-heading mv-reveal">
                <p>Što se mijenja</p>
                <h2>Redizajn nije novi sloj boje preko starog problema.</h2>
                <span>
                    Prije nego diramo vizuale, gledamo gdje stranica gubi povjerenje, ritam i jasnoću.
                </span>
            </div>

            <div class="mav-redesign-point-grid">
                <?php foreach ($redesign_points as $point) : ?>
                    <article class="mav-redesign-point mv-reveal">
                        <span><?php echo esc_html($point['number']); ?></span>
                        <h3><?php echo esc_html($point['title']); ?></h3>
                        <p><?php echo esc_html($point['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section class="mav-logo-redesign-section" id="logo-redesign">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-section-heading mv-reveal">
                <p>Logo redesign</p>
                <h2>Ako logo izgleda staro, cijeli brand izgleda staro.</h2>
                <span>
                    Logo redesign može biti suptilan ili kompletan, ali mora riješiti stvarni problem: čitljivost, profesionalnost, primjenu i dosljednost.
                </span>
            </div>

            <div class="mav-logo-lab mav-logo-lab--image-placeholders mv-reveal">
                <div class="mav-logo-lab__left">
                    <p>Before</p>

                    <div class="mav-logo-image-card mav-logo-image-card--before">
                        <img
                            src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=85"
                            alt="Stara web stranica prije redizajna"
                            loading="lazy">

                        <div class="mav-logo-image-card__overlay">
                            <span>Old visual direction</span>
                            <strong>BEFORE</strong>
                        </div>
                    </div>

                    <small>Neujednačeno, generički, teško primjenjivo.</small>
                </div>

                <div class="mav-logo-lab__center" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="mav-logo-lab__right">
                    <p>After</p>

                    <div class="mav-logo-image-card mav-logo-image-card--after">
                        <img
                            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85"
                            alt="Nova moderna web stranica nakon redizajna"
                            loading="lazy">

                        <div class="mav-logo-image-card__overlay">
                            <span>New brand system</span>
                            <strong>AFTER</strong>
                        </div>
                    </div>

                    <small>Čist vizual, jasna tipografija, bolja primjena.</small>
                </div>
            </div>

            <div class="mav-logo-card-grid">
                <?php foreach ($logo_cards as $card) : ?>
                    <article class="mav-logo-card mv-reveal">
                        <span><?php echo esc_html($card['label']); ?></span>
                        <h3><?php echo esc_html($card['title']); ?></h3>
                        <p><?php echo esc_html($card['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section class="mav-visual-system-section" id="visual-system">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-section-heading mv-reveal">
                <p>Visual system</p>
                <h2>Stranica treba sustav, ne samo lijepu sliku.</h2>
                <span>
                    Nakon redizajna brand treba imati vizualni jezik koji se može koristiti na više mjesta:
                    web, social, prezentacije, print, digitalne kampanje i launch materijali.
                </span>
            </div>

            <div class="mav-system-board mav-system-board--interactive mv-reveal">

                <div class="mav-system-board__hero">
                    <div class="mav-system-board__hero-image">
                        <img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=85"
                            alt="Brand board workspace preview"
                            loading="lazy">
                    </div>

                    <div class="mav-system-board__hero-content">
                        <p>Brand board</p>

                        <h3>
                            Colors / Type / UI / Print / Digital
                        </h3>

                        <div class="mav-system-palette" aria-hidden="true">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="mav-system-components" data-system-menu>
                    <article class="mav-system-component is-active" data-preview="palette" tabindex="0">
                        <small>01</small>
                        <span>Paleta boja</span>
                        <em>Primary / accent / contrast</em>
                    </article>

                    <article class="mav-system-component" data-preview="type" tabindex="0">
                        <small>02</small>
                        <span>Tipografija</span>
                        <em>Hierarchy / readability</em>
                    </article>

                    <article class="mav-system-component" data-preview="cta" tabindex="0">
                        <small>03</small>
                        <span>CTA stil</span>
                        <em>Buttons / hover / focus</em>
                    </article>

                    <article class="mav-system-component" data-preview="cards" tabindex="0">
                        <small>04</small>
                        <span>Kartice</span>
                        <em>Services / pricing / cases</em>
                    </article>

                    <article class="mav-system-component" data-preview="icons" tabindex="0">
                        <small>05</small>
                        <span>Ikone</span>
                        <em>Minimal / technical / sharp</em>
                    </article>

                    <article class="mav-system-component" data-preview="photos" tabindex="0">
                        <small>06</small>
                        <span>Fotografije</span>
                        <em>Editorial / crop / mood</em>
                    </article>

                    <article class="mav-system-component" data-preview="grid" tabindex="0">
                        <small>07</small>
                        <span>Grid</span>
                        <em>Desktop / tablet / mobile</em>
                    </article>

                    <article class="mav-system-component" data-preview="social" tabindex="0">
                        <small>08</small>
                        <span>Social asseti</span>
                        <em>Launch / posts / campaigns</em>
                    </article>

                    <article class="mav-system-component" data-preview="print" tabindex="0">
                        <small>09</small>
                        <span>Print</span>
                        <em>Business cards / flyers</em>
                    </article>

                    <article class="mav-system-component" data-preview="motion" tabindex="0">
                        <small>10</small>
                        <span>Motion</span>
                        <em>Scroll / reveal / interaction</em>
                    </article>
                </div>

                <div class="mav-system-preview" data-system-preview>

                    <article class="mav-system-preview-card is-active" data-preview-panel="palette">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1500&q=85"
                                alt="Color palette preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Color system</p>
                            <h3>Paleta boja</h3>
                            <small>Primary / contrast / accent / neutral / hover states</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--palette" aria-hidden="true">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="type">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=1500&q=85"
                                alt="Typography preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Type system</p>
                            <h3>Tipografija</h3>
                            <small>H1 / H2 / body / labels / editorial scale</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--type">
                            <strong>Aa</strong>
                            <span>Montserrat / brutalist editorial hierarchy</span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="cta">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=1500&q=85"
                                alt="CTA style preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>CTA system</p>
                            <h3>CTA stil</h3>
                            <small>Primary / secondary / hover / conversion focus</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--cta">
                            <span>Kontaktirajte nas</span>
                            <span>Vidi paket</span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="cards">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=1500&q=85"
                                alt="UI cards preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>UI components</p>
                            <h3>Kartice</h3>
                            <small>Services / pricing / work previews / feature blocks</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--cards" aria-hidden="true">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="icons">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=1500&q=85"
                                alt="Icon system preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Icon language</p>
                            <h3>Ikone</h3>
                            <small>Geometric / sharp / minimal / technical labels</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--icons" aria-hidden="true">
                            <span>✦</span>
                            <span>↗</span>
                            <span>⌁</span>
                            <span>□</span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="photos">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=1500&q=85"
                                alt="Photography direction preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Photo direction</p>
                            <h3>Fotografije</h3>
                            <small>Contrast / cinematic crop / dark overlay / brand mood</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--photo-strip" aria-hidden="true">
                            <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=500&q=80" alt="" loading="lazy">
                            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=500&q=80" alt="" loading="lazy">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=500&q=80" alt="" loading="lazy">
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="grid">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?auto=format&fit=crop&w=1500&q=85"
                                alt="Layout grid preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Layout logic</p>
                            <h3>Grid</h3>
                            <small>Desktop / laptop / tablet / mobile layout system</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--grid" aria-hidden="true">
                            <span></span><span></span><span></span>
                            <span></span><span></span><span></span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="social">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1618005198919-d3d4b5a92ead?auto=format&fit=crop&w=1500&q=85"
                                alt="Social asset preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Social asset</p>
                            <h3>Launch visual</h3>
                            <small>Instagram / campaigns / announcement graphics / carousels</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--social">
                            <strong>LAUNCH<br>VISUAL</strong>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="print">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?auto=format&fit=crop&w=1500&q=85"
                                alt="Print design preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Print system</p>
                            <h3>Print</h3>
                            <small>Business cards / flyers / stickers / launch materials</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--print" aria-hidden="true">
                            <span></span>
                            <span></span>
                        </div>
                    </article>

                    <article class="mav-system-preview-card" data-preview-panel="motion">
                        <div class="mav-preview-image">
                            <img
                                src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=1500&q=85"
                                alt="Motion interaction preview"
                                loading="lazy">
                        </div>

                        <div class="mav-system-preview-card__text">
                            <p>Motion system</p>
                            <h3>Motion</h3>
                            <small>Scroll reveals / hover states / interactive transitions</small>
                        </div>

                        <div class="mav-preview-mini-board mav-preview-mini-board--motion" aria-hidden="true">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </article>

                </div>
            </div>

        </div>
    </section>

    <section class="mav-redesign-audit-section" id="redesign-audit">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-audit mv-reveal">
                <div>
                    <p>Audit checklist</p>
                    <h2>Trebaš redizajn ako...</h2>
                </div>

                <ul>
                    <li>stranica izgleda starije od tvog stvarnog biznisa</li>
                    <li>na mobitelu djeluje zbijeno, sitno ili neozbiljno</li>
                    <li>ne postoji jasan CTA ili kontakt put</li>
                    <li>boje, fontovi i slike ne izgledaju kao jedan brand</li>
                    <li>ljudi često pitaju informacije koje bi web trebao objasniti</li>
                    <li>imaš dobar biznis, ali web to ne pokazuje</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="mav-redesign-process-section" id="redesign-process">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-section-heading mv-reveal">
                <p>Proces</p>
                <h2>Kako izgleda redizajn.</h2>
                <span>
                    Proces je napravljen tako da prvo očistimo problem, zatim izgradimo novi vizualni smjer i tek onda idemo u finalnu izvedbu.
                </span>
            </div>

            <div class="mav-redesign-process">
                <?php foreach ($process as $step) : ?>
                    <article class="mv-reveal">
                        <span><?php echo esc_html($step[0]); ?></span>
                        <h3><?php echo esc_html($step[1]); ?></h3>
                        <p><?php echo esc_html($step[2]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section class="mav-redesign-final-cta-section" id="redesign-contact">
        <div class="mav-redesign-shell">

            <div class="mav-redesign-final-cta mv-reveal">
                <p>Pošalji staru stranicu</p>

                <h2>
                    Reći ćemo ti što ne radi, što treba ostati i što bi imalo najveći vizualni učinak.
                </h2>

                <a class="mav-redesign-btn mav-redesign-btn--primary" href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>">
                    Zatraži redizajn audit
                </a>
            </div>

        </div>
    </section>

</main>

<script>
    (function() {
        function initMavrosVisualSystemPreview() {
            var boards = document.querySelectorAll(".mav-system-board--interactive");

            if (!boards.length) {
                return;
            }

            boards.forEach(function(board) {
                var items = board.querySelectorAll("[data-preview]");
                var panels = board.querySelectorAll("[data-preview-panel]");

                if (!items.length || !panels.length) {
                    return;
                }

                function activatePreview(previewKey) {
                    items.forEach(function(item) {
                        item.classList.toggle("is-active", item.dataset.preview === previewKey);
                    });

                    panels.forEach(function(panel) {
                        panel.classList.toggle("is-active", panel.dataset.previewPanel === previewKey);
                    });
                }

                items.forEach(function(item) {
                    var previewKey = item.dataset.preview;

                    item.addEventListener("mouseenter", function() {
                        activatePreview(previewKey);
                    });

                    item.addEventListener("focus", function() {
                        activatePreview(previewKey);
                    });

                    item.addEventListener("click", function() {
                        activatePreview(previewKey);
                    });
                });
            });
        }

        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", initMavrosVisualSystemPreview);
        } else {
            initMavrosVisualSystemPreview();
        }
    })();
</script>

<?php
get_footer();
