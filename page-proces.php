<?php

/**
 * Template Name: Proces
 * Template Post Type: page
 *
 * Mavros Agency — animated process page.
 * Pair this template with mavros-process.css and mavros-process.js.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

/* --------------------------------------------------------------
   DATA — four process paths.
   First path ("branding") is active by default.
   -------------------------------------------------------------- */

$mav_process_tracks = array(

    'branding' => array(
        'number'  => '01',
        'label'   => 'Branding',
        'title'   => 'Branding',
        'summary' => 'Logo, vizualni identitet, vizitke, letci, brošure, cjenici i osnovni brand sustav.',
        'steps'   => array(
            array(
                'number'      => '01',
                'title'       => 'Smjer brenda',
                'description' => 'Prvo definiramo što brend mora komunicirati i kako želi izgledati prije nego što nacrtamo i jedan piksel.',
                'work'        => 'Analiziramo djelatnost, konkurenciju, ciljne klijente i ton koji brend treba imati.',
                'need'        => 'Kratak opis posla, postojeće materijale i primjere koji vam se sviđaju.',
                'result'      => 'Jasan kreativni smjer i vizualnu atmosferu prije dizajna.',
            ),
            array(
                'number'      => '02',
                'title'       => 'Vizualni koncept',
                'description' => 'Iz smjera radimo konkretan vizualni prijedlog: boje, tipografiju i prvi dojam brenda.',
                'work'        => 'Kreiramo moodboard, paletu, tipografski sustav i početne kompozicije.',
                'need'        => 'Feedback na smjer: što pojačati, omekšati ili izbjeći.',
                'result'      => 'Vizualni koncept koji postaje temelj za sve materijale.',
            ),
            array(
                'number'      => '03',
                'title'       => 'Logo i identitet',
                'description' => 'Gradimo logo i sustav koji radi na vizitki, ekranu i velikom formatu jednako dobro.',
                'work'        => 'Dizajniramo logo, varijacije, boje, fontove i osnovna pravila upotrebe.',
                'need'        => 'Odluku o finalnom smjeru i sadržaj za materijale.',
                'result'      => 'Konzistentan brand kit spreman za širenje.',
            ),
            array(
                'number'      => '04',
                'title'       => 'Materijali',
                'description' => 'Dizajniramo konkretne materijale koji prodaju, objašnjavaju i ostavljaju profesionalan dojam.',
                'work'        => 'Radimo vizitke, letke, brošure, cjenike i osnovne social vizuale.',
                'need'        => 'Točne podatke, tekstove, cijene i kontakte za tisak ili objavu.',
                'result'      => 'Spremne dizajne za print i digitalnu upotrebu.',
            ),
            array(
                'number'      => '05',
                'title'       => 'Predaja sustava',
                'description' => 'Sve pakiramo tako da se može koristiti odmah, bez kaosa s verzijama i formatima.',
                'work'        => 'Pripremamo eksportirane datoteke, print-ready verzije i upute za korištenje.',
                'need'        => 'Zadnju provjeru podataka prije finalnog izvoza.',
                'result'      => 'Uredan paket materijala spreman za daljnji razvoj.',
            ),
        ),
    ),

    'web' => array(
        'number'  => '02',
        'label'   => 'Web stranica',
        'title'   => 'Web stranica',
        'summary' => 'Struktura stranice, UX/UI dizajn, development, osnovni SEO setup i priprema za objavu.',
        'steps'   => array(
            array(
                'number'      => '01',
                'title'       => 'Cilj stranice',
                'description' => 'Definiramo što stranica mora raditi: privući upit, objasniti uslugu ili pripremiti prodaju.',
                'work'        => 'Mapiramo usluge, publiku, prednosti i glavne konverzijske točke.',
                'need'        => 'Opis usluga, cilj stranice, kontakt podatke i primjere konkurencije.',
                'result'      => 'Jasan plan što web mora sadržavati i kamo vodi posjetitelja.',
            ),
            array(
                'number'      => '02',
                'title'       => 'Struktura i sadržaj',
                'description' => 'Stranicu slažemo kao putanju, ne kao nasumičan niz sekcija.',
                'work'        => 'Radimo arhitekturu sadržaja, raspored sekcija, CTA logiku i navigaciju.',
                'need'        => 'Potvrdu glavnih usluga i prioriteta te osnovne tekstove.',
                'result'      => 'Strukturu stranice koja ima ritam, argument i cilj.',
            ),
            array(
                'number'      => '03',
                'title'       => 'UX/UI dizajn',
                'description' => 'Dizajniramo stranicu kao iskustvo: hijerarhija, mobilni prikaz i konverzije rade zajedno.',
                'work'        => 'Radimo desktop i mobile layout, hero, sekcije, kartice i forme.',
                'need'        => 'Feedback na dizajn prije razvoja, dok su promjene brze.',
                'result'      => 'Finalni UI smjer spreman za development.',
            ),
            array(
                'number'      => '04',
                'title'       => 'Development',
                'description' => 'Dizajn pretvaramo u funkcionalnu stranicu s čistom strukturom i responzivnim ponašanjem.',
                'work'        => 'Kodiramo template, sekcije, responzivu, animacije i forme.',
                'need'        => 'Pristup hostingu ili dogovor oko postavljanja na server.',
                'result'      => 'Funkcionalnu stranicu spremnu za testiranje.',
            ),
            array(
                'number'      => '05',
                'title'       => 'Testiranje',
                'description' => 'Prije objave provjeravamo ono što korisnici vide i ono što se događa iza stranice.',
                'work'        => 'Testiramo mobitel, desktop, forme, brzinu i osnovne SEO elemente.',
                'need'        => 'Finalnu potvrdu sadržaja, kontakt podataka i domene.',
                'result'      => 'Stranicu spremnu za javnu objavu bez poludovršenog dojma.',
            ),
            array(
                'number'      => '06',
                'title'       => 'Objava',
                'description' => 'Objavu radimo kontrolirano, tako da prijelaz izgleda profesionalno.',
                'work'        => 'Radimo završnu objavu, provjeru nakon launcha i čišćenje sitnih problema.',
                'need'        => 'Potvrdu termina objave i završnih pristupa.',
                'result'      => 'Stranicu javno dostupnu i spremnu za promociju.',
            ),
        ),
    ),

    'redizajn' => array(
        'number'  => '03',
        'label'   => 'Redizajn',
        'title'   => 'Redizajn',
        'summary' => 'Audit postojeće stranice, novi vizualni smjer, bolja struktura, moderni UI i tehnička optimizacija.',
        'steps'   => array(
            array(
                'number'      => '01',
                'title'       => 'Audit postojeće stranice',
                'description' => 'Gledamo što stranica radi dobro, gdje gubi korisnika i zašto djeluje slabije nego posao jest.',
                'work'        => 'Analiziramo strukturu, prvi dojam, navigaciju, mobilni prikaz i tehničke probleme.',
                'need'        => 'Link postojeće stranice i objašnjenje što vam najviše smeta.',
                'result'      => 'Jasnu listu problema i prioriteta prije redizajna.',
            ),
            array(
                'number'      => '02',
                'title'       => 'Što ostaje, što odlazi',
                'description' => 'Ne bacamo sve automatski — zadržavamo ono što ima smisla, uklanjamo ono što stvara slab dojam.',
                'work'        => 'Razdvajamo sadržaj i funkcionalnosti na korisno, popravljivo i nepotrebno.',
                'need'        => 'Informaciju što mora ostati zbog poslovanja ili navika klijenata.',
                'result'      => 'Čist plan redizajna bez nepotrebnog rušenja svega.',
            ),
            array(
                'number'      => '03',
                'title'       => 'Nova struktura',
                'description' => 'Najveći pomak je često u tome da stranica konačno kaže prave stvari pravim redom.',
                'work'        => 'Preslagujemo sekcije, navigaciju, hijerarhiju i CTA mjesta.',
                'need'        => 'Potvrdu glavnih usluga i akcija koje korisnik treba napraviti.',
                'result'      => 'Novu arhitekturu lakšu za čitanje i uvjerljiviju za kontakt.',
            ),
            array(
                'number'      => '04',
                'title'       => 'Novi vizualni smjer',
                'description' => 'Stranici dajemo jači, moderniji i vjerodostojniji karakter bez gubitka identiteta.',
                'work'        => 'Definiramo novu paletu, tipografiju, kartice, gumbe i vizualni ritam.',
                'need'        => 'Feedback treba li djelovati premium, tehnički, toplo ili energično.',
                'result'      => 'Vizualni smjer koji staru stranicu pretvara u ozbiljniji nastup.',
            ),
            array(
                'number'      => '05',
                'title'       => 'Redizajn i development',
                'description' => 'Novi dizajn pretvaramo u stranicu uz kontrolu da se ne izgube važne funkcije.',
                'work'        => 'Kodiramo nove dijelove, migriramo sadržaj, slike, forme i linkove.',
                'need'        => 'Pristup hostingu, WordPressu i sadržaju koji se prenosi.',
                'result'      => 'Novu verziju stranice u stagingu ili spremnu za objavu.',
            ),
            array(
                'number'      => '06',
                'title'       => 'Testiranje i objava',
                'description' => 'Provjeravamo da redizajn ne izgleda dobro samo na jednom ekranu, pa objavljujemo.',
                'work'        => 'Testiramo prikaze, forme, brzinu i SEO, zatim radimo kontroliranu objavu.',
                'need'        => 'Finalnu provjeru i potvrdu termina objave.',
                'result'      => 'Moderniju, jasniju stranicu spremnu za promociju.',
            ),
        ),
    ),

    'full-launch' => array(
        'number'  => '04',
        'label'   => 'Full launch',
        'title'   => 'Full launch',
        'summary' => 'Branding, web, digitalni materijali, launch vizuali, osnovni sadržaj i priprema za javnu objavu.',
        'steps'   => array(
            array(
                'number'      => '01',
                'title'       => 'Strategija nastupa',
                'description' => 'Postavljamo cjelovitu sliku: kako brend, web i materijali zajedno grade nastup na tržištu.',
                'work'        => 'Definiramo poziciju, poruke, ciljnu publiku i redoslijed lansiranja.',
                'need'        => 'Opis posla, ciljeve nastupa i okvirni termin objave.',
                'result'      => 'Jasnu launch strategiju s prioritetima.',
            ),
            array(
                'number'      => '02',
                'title'       => 'Brand sustav',
                'description' => 'Gradimo identitet koji funkcionira na svim dodirnim točkama nastupa.',
                'work'        => 'Radimo logo, paletu, tipografiju, UI stil i pravila brenda.',
                'need'        => 'Feedback na smjer i sadržaj koji ide na materijale.',
                'result'      => 'Kompletan brand sustav spreman za web i print.',
            ),
            array(
                'number'      => '03',
                'title'       => 'Web stranica',
                'description' => 'Dizajniramo i razvijamo stranicu kao centralno mjesto nastupa.',
                'work'        => 'Radimo strukturu, UX/UI, development i osnovni SEO setup.',
                'need'        => 'Potvrdu sadržaja, usluga i kontakt podataka.',
                'result'      => 'Funkcionalnu stranicu spremnu za launch.',
            ),
            array(
                'number'      => '04',
                'title'       => 'Digitalni materijali',
                'description' => 'Pripremamo vizuale koji prate launch na svim kanalima.',
                'work'        => 'Radimo social vizuale, launch grafike, bannere i osnovne predloške.',
                'need'        => 'Listu kanala i poruke koje želite naglasiti.',
                'result'      => 'Set digitalnih materijala usklađenih s brendom.',
            ),
            array(
                'number'      => '05',
                'title'       => 'Launch priprema',
                'description' => 'Slažemo sve dijelove i provjeravamo da je nastup spreman za javnost.',
                'work'        => 'Testiramo web, materijale, forme, linkove i tehničke detalje.',
                'need'        => 'Finalnu potvrdu sadržaja, domene i termina.',
                'result'      => 'Spreman, usklađen i istestiran nastup.',
            ),
            array(
                'number'      => '06',
                'title'       => 'Predaja i podrška',
                'description' => 'Lansiramo, predajemo sustav i ostajemo dostupni za prve korake nakon objave.',
                'work'        => 'Objavljujemo, predajemo pristupe i pružamo osnovnu podršku.',
                'need'        => 'Potvrdu da sve radi i povratnu informaciju nakon launcha.',
                'result'      => 'Gotov nastup i jasnu bazu za daljnji rast.',
            ),
        ),
    ),
);

$mav_contact_url = home_url('/kontakt/');
$mav_default_track = 'branding';
?>

<main
    id="primary"
    class="site-main mav-process-page"
    data-mav-process-page
    data-default-track="<?php echo esc_attr($mav_default_track); ?>">

    <!-- ==========================================================
         SECTION 1 — HERO
         ========================================================== -->
    <section class="mav-process-hero" aria-labelledby="mav-process-title">
        <div class="mav-process-shell mav-process-hero__grid">
            <div class="mav-process-hero__content">
                <p class="mav-process-kicker">MAVROS SYSTEM / PROJECT FLOW / 04 PATHS</p>

                <h1 id="mav-process-title" class="mav-process-hero__title">
                    Proces koji se <span>prilagođava</span> projektu.
                </h1>

                <p class="mav-process-hero__lead">
                    Ne treba svaki projekt isti put. Branding, web i redizajn kreću s različitim
                    pitanjima, različitom količinom informacija i različitim ciljem. Zato proces
                    nije fiksna lista — odaberete smjer, a sustav se posloži oko njega.
                </p>

                <div class="mav-process-hero__actions">
                    <a class="mv-btn mv-btn--primary" href="#mav-process-options">Odaberi proces</a>
                    <a class="mv-btn mv-btn--secondary" href="<?php echo esc_url($mav_contact_url); ?>">Pošalji upit</a>
                </div>

                <ul class="mav-process-hero__meta" aria-hidden="true">
                    <li><span>SYS</span> Mavros Flow Engine</li>
                    <li><span>VER</span> 04 / Adaptive</li>
                    <li><span>OUT</span> Branding · Web · Launch</li>
                </ul>
            </div>

            <div class="mav-process-hero__visual" aria-hidden="true">
                <div class="mav-process-hero-card mav-process-hero-card--one">
                    <span>01 / Structure</span>
                    <strong>Jasno prije estetike.</strong>
                    <small>Svaki projekt prvo dobiva smjer, zatim dizajn.</small>
                </div>
                <div class="mav-process-hero-card mav-process-hero-card--two">
                    <span>02 / System</span>
                    <strong>Vizual koji se širi.</strong>
                    <small>Logo, web i print rade kao isti brand.</small>
                </div>
                <div class="mav-process-hero-card mav-process-hero-card--three">
                    <span>03 / Launch</span>
                    <strong>Spremno za objavu.</strong>
                    <small>Bez poludovršenih ekrana i kaosa s formatima.</small>
                </div>
                <span class="mav-process-hero-grid-line" aria-hidden="true"></span>
            </div>
        </div>
    </section>

    <!-- ==========================================================
         SECTION 2 — FOUR OPTIONS + ROUTE LINE
         ========================================================== -->
    <section id="mav-process-options" class="mav-process-option-section" aria-labelledby="mav-process-options-title">
        <div class="mav-process-shell">
            <div class="mav-process-section-heading">
                <p>SELECT PROJECT PATH / 04 OPTIONS</p>
                <h2 id="mav-process-options-title">Koji proces ti treba?</h2>
                <span>
                    Odaberi tip projekta. Sustav će ti odmah pokazati točan flow i provesti te
                    kroz svaki korak kao kroz projektnu rutu.
                </span>
            </div>

            <div class="mav-process-option-grid" role="tablist" aria-label="Odabir procesa">
                <?php
                $mav_first = true;
                foreach ($mav_process_tracks as $key => $track) :
                    $is_active = ($key === $mav_default_track);
                ?>
                    <button
                        type="button"
                        class="mav-process-option-card<?php echo $is_active ? ' is-active' : ''; ?>"
                        role="tab"
                        id="mav-option-<?php echo esc_attr($key); ?>"
                        aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"
                        aria-controls="mav-track-<?php echo esc_attr($key); ?>"
                        data-process-option="<?php echo esc_attr($key); ?>">

                        <span class="mav-process-option-circle" aria-hidden="true"></span>

                        <span class="mav-process-option-num"><?php echo esc_html($track['number']); ?></span>
                        <span class="mav-process-option-cat"><?php echo esc_html($track['label']); ?></span>
                        <span class="mav-process-option-title"><?php echo esc_html($track['title']); ?></span>
                        <span class="mav-process-option-desc"><?php echo esc_html($track['summary']); ?></span>

                        <span class="mav-process-option-flag" aria-hidden="true">SELECTED PATH</span>
                    </button>
                <?php
                    $mav_first = false;
                endforeach;
                ?>
            </div>

            <!-- Animated neon route that leads down to the selected process -->
            <div class="mav-process-route-line is-active" data-process-route aria-hidden="true">
                <span class="mav-process-route-line__label">FOLLOW THE SELECTED PROCESS</span>
                <span class="mav-process-route-line__track">
                    <span class="mav-process-route-line__pulse"></span>
                </span>
                <span class="mav-process-route-line__dot mav-process-route-line__dot--1"></span>
                <span class="mav-process-route-line__dot mav-process-route-line__dot--2"></span>
                <span class="mav-process-route-line__dot mav-process-route-line__dot--3"></span>
                <span class="mav-process-route-line__arrow"></span>
            </div>
        </div>
    </section>

    <!-- ==========================================================
         SECTION 3 — SCROLL PROCESS (tablet unfolds per step)
         ========================================================== -->
    <section id="mav-process-scroll" class="mav-process-scroll-section" aria-label="Detaljni proces rada">

        <?php foreach ($mav_process_tracks as $key => $track) : ?>
            <div
                class="mav-process-track<?php echo ($key === $mav_default_track) ? ' is-active' : ''; ?>"
                id="mav-track-<?php echo esc_attr($key); ?>"
                role="tabpanel"
                aria-labelledby="mav-option-<?php echo esc_attr($key); ?>"
                data-process-track="<?php echo esc_attr($key); ?>"
                <?php echo ($key === $mav_default_track) ? '' : 'hidden'; ?>>

                <?php foreach ($track['steps'] as $index => $step) : ?>
                    <section
                        class="mav-process-step-section"
                        data-process-step
                        data-step-index="<?php echo esc_attr((string) $index); ?>">

                        <div class="mav-process-step-inner">

                            <header class="mav-process-step-header" data-process-step-header>
                                <p class="mav-process-step-header__kicker">
                                    <?php echo esc_html($track['title']); ?>
                                    <span aria-hidden="true">/</span>
                                    <?php echo esc_html($step['number']); ?>
                                </p>
                                <h3 class="mav-process-step-header__title"><?php echo esc_html($step['title']); ?></h3>
                            </header>

                            <article class="mav-process-device" data-process-device>
                                <div class="mav-process-device-inner">

                                    <div class="mav-process-device-topbar">
                                        <span class="mav-process-device-topbar__dot"></span>
                                        <span class="mav-process-device-topbar__dot"></span>
                                        <span class="mav-process-device-topbar__dot"></span>
                                        <span class="mav-process-device-topbar__label">
                                            STEP <?php echo esc_html($step['number']); ?> / <?php echo esc_html($track['label']); ?>
                                        </span>
                                    </div>

                                    <div class="mav-process-device-body">
                                        <div class="mav-process-device-head">
                                            <span class="mav-process-device-step-num"><?php echo esc_html($step['number']); ?></span>
                                            <div class="mav-process-device-head__text">
                                                <h4><?php echo esc_html($step['title']); ?></h4>
                                                <p><?php echo esc_html($step['description']); ?></p>
                                            </div>
                                        </div>

                                        <div class="mav-process-device-output">
                                            <div class="mav-process-device-output__col">
                                                <span class="mav-process-device-output__label">Što radimo</span>
                                                <p><?php echo esc_html($step['work']); ?></p>
                                            </div>
                                            <div class="mav-process-device-output__col">
                                                <span class="mav-process-device-output__label">Što trebamo od vas</span>
                                                <p><?php echo esc_html($step['need']); ?></p>
                                            </div>
                                            <div class="mav-process-device-output__col">
                                                <span class="mav-process-device-output__label">Što dobivate</span>
                                                <p><?php echo esc_html($step['result']); ?></p>
                                            </div>
                                        </div>

                                        <div class="mav-process-device-footer" aria-hidden="true">
                                            <span>MAVROS SYSTEM</span>
                                            <span>PROJECT FLOW</span>
                                            <span>SELECTED PATH</span>
                                        </div>
                                    </div>

                                    <span class="mav-process-device-glow" aria-hidden="true"></span>
                                </div>
                            </article>

                        </div>
                    </section>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- ==========================================================
         SECTION 4 — FINAL CTA
         ========================================================== -->
    <section class="mav-process-final-cta" aria-labelledby="mav-process-cta-title">
        <div class="mav-process-shell mav-process-final-cta__inner">
            <p class="mav-process-kicker">MAVROS SYSTEM / NEXT STEP</p>
            <h2 id="mav-process-cta-title">Niste sigurni koji proces vam treba?</h2>
            <p class="mav-process-final-cta__text">
                Pošaljite nam što trenutno imate i što želite postići. Predložit ćemo najlogičniji put.
            </p>
            <a class="mv-btn mv-btn--primary mav-process-final-cta__btn" href="<?php echo esc_url($mav_contact_url); ?>">
                Pošalji upit
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
