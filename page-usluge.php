<?php

/**
 * Services page template.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$services = array(
    array(
        'number' => '01',
        'title'  => 'Web dizajn',
        'label'  => 'Struktura / UI / UX',
        'text'   => 'Dizajn modernih web stranica s jasnom hijerarhijom, dobrim prvim dojmom i logičnim korisničkim tokom.',
    ),
    array(
        'number' => '02',
        'title'  => 'WordPress izrada',
        'label'  => 'Custom frontend',
        'text'   => 'Izrada responzivnih WordPress stranica, custom sekcija, čistog frontenda i strukture koju možeš kasnije uređivati.',
    ),
    array(
        'number' => '03',
        'title'  => 'Redizajn web stranice',
        'label'  => 'Bolji prvi dojam',
        'text'   => 'Pretvaranje zastarjelih stranica u moderniji, jasniji i ozbiljniji digitalni nastup.',
    ),
    array(
        'number' => '04',
        'title'  => 'Vizualni identitet',
        'label'  => 'Brand sistem',
        'text'   => 'Boje, tipografija, logo smjer, vizualni elementi i osnovna pravila za dosljedan izgled branda.',
    ),
    array(
        'number' => '05',
        'title'  => 'Print materijali',
        'label'  => 'Vizitke / letci / brošure',
        'text'   => 'Dizajn vizitki, letaka, brošura, postera i promotivnih materijala koji prate vizualni identitet.',
    ),
    array(
        'number' => '06',
        'title'  => 'Launch asseti',
        'label'  => 'Objava / priprema',
        'text'   => 'Digitalni materijali za lansiranje, social vizuali, osnovni SEO setup, analytics i priprema za objavu.',
    ),
    array(
        'number' => '07',
        'title'  => 'Landing stranice',
        'label'  => 'Kampanje / ponude',
        'text'   => 'Fokusirane stranice za jednu uslugu, ponudu, event ili kampanju s jasnim CTA-om i sadržajem koji vodi korisnika.',
    ),
    array(
        'number' => '08',
        'title'  => 'Content & copy podrška',
        'label'  => 'Tekst / struktura / ton',
        'text'   => 'Pomoć oko naslova, sekcija, mikrocopyja i strukture sadržaja da stranica zvuči profesionalno i jasno.',
    ),
);
?>

<main id="primary" class="mav-page mav-services-page">

    <section class="mav-services-hero">
        <div class="mav-services-shell">
            <div class="mav-services-hero__content">
                <p class="mav-services-kicker">
                    Mavros Agency / Usluge
                </p>

                <h1>
                    Usluge koje pretvaraju prvi dojam u ozbiljan brand.
                </h1>

                <p>
                    Web stranice, redizajn, vizualni identitet i digitalni materijali za biznise koji žele izgledati moderno, jasno i profesionalno.
                </p>

                <div class="mav-services-hero__actions">
                    <a href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>" class="mav-services-btn mav-services-btn--primary">
                        Pošalji brief
                    </a>

                    <a href="<?php echo esc_url(home_url('/#mv-radovi')); ?>" class="mav-services-btn mav-services-btn--secondary">
                        Pogledaj radove
                    </a>
                </div>
            </div>

            <div class="mav-services-hero__side" aria-hidden="true">
                <span>WEB</span>
                <span>BRAND</span>
                <span>IDENTITY</span>
                <span>PRINT</span>
            </div>
        </div>
    </section>

    <section class="mav-services-scroll-section" data-services-scroll>
        <div class="mav-services-scroll-shell">
            <div class="mav-services-scroll-title" data-services-scroll-title>
                <p>Scroll showcase</p>
                <h2>Sve što trebaš za ozbiljan digitalni nastup.</h2>
                <span>
                    Od prve strukture do gotove stranice, vizuala i materijala koji mogu živjeti na webu, društvenim mrežama i u printu.
                </span>
            </div>

            <div class="mav-services-device" data-services-scroll-card>
                <div class="mav-services-device__top">
                    <div>
                        <span>Mavros service system</span>
                        <strong>Usluge</strong>
                    </div>

                    <em>08</em>
                </div>

                <div class="mav-services-device__screen">
                    <?php foreach ($services as $service) : ?>
                        <article class="mav-services-device-row">
                            <span class="mav-services-device-row__number">
                                <?php echo esc_html($service['number']); ?>
                            </span>

                            <div>
                                <small>
                                    <?php echo esc_html($service['label']); ?>
                                </small>

                                <h3>
                                    <?php echo esc_html($service['title']); ?>
                                </h3>

                                <p>
                                    <?php echo esc_html($service['text']); ?>
                                </p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mav-services-grid-section">
        <div class="mav-services-shell">
            <div class="mav-services-section-heading">
                <p>Detaljno</p>
                <h2>Što možeš naručiti.</h2>
                <span>
                    Usluge se mogu raditi zasebno ili kao cjelina, ovisno o tome trebaš li samo jednu stvar ili kompletan vizualni sustav.
                </span>
            </div>

            <div class="mav-services-grid">
                <?php foreach ($services as $service) : ?>
                    <article class="mav-service-tile">
                        <span>
                            <?php echo esc_html($service['number']); ?>
                        </span>

                        <small>
                            <?php echo esc_html($service['label']); ?>
                        </small>

                        <h3>
                            <?php echo esc_html($service['title']); ?>
                        </h3>

                        <p>
                            <?php echo esc_html($service['text']); ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="mav-services-process-section">
        <div class="mav-services-shell">
            <div class="mav-services-section-heading">
                <p>Proces</p>
                <h2>Bez kaosa. Bez pogađanja.</h2>
                <span>
                    Proces je jednostavan: prvo shvatimo što trebaš, zatim gradimo vizualni smjer i tek onda ulazimo u izvedbu.
                </span>
            </div>

            <div class="mav-services-process">
                <article>
                    <span>01</span>
                    <h3>Brief</h3>
                    <p>Napišeš što imaš, što želiš i što trenutno ne funkcionira.</p>
                </article>

                <article>
                    <span>02</span>
                    <h3>Smjer</h3>
                    <p>Definiramo strukturu, stil, ton i glavne ciljeve stranice ili vizuala.</p>
                </article>

                <article>
                    <span>03</span>
                    <h3>Dizajn</h3>
                    <p>Radimo layout, sekcije, vizualni sistem i elemente koji nose prvi dojam.</p>
                </article>

                <article>
                    <span>04</span>
                    <h3>Izrada</h3>
                    <p>Stranicu ili materijale pripremamo za stvarno korištenje, ne samo za screenshot.</p>
                </article>

                <article>
                    <span>05</span>
                    <h3>Lansiranje</h3>
                    <p>Finalna provjera, responsive detalji, osnovna priprema za objavu i predaja.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="mav-services-cta-section">
        <div class="mav-services-shell">
            <div class="mav-services-cta">
                <p>Nisi sigurna što ti treba?</p>

                <h2>
                    Pošalji ono što imaš. Mi ćemo ti reći što ima najviše smisla.
                </h2>

                <a href="<?php echo esc_url(home_url('/#mv-kontakt')); ?>" class="mav-services-btn mav-services-btn--primary">
                    Pošalji brief
                </a>
            </div>
        </div>
    </section>

    <section class="mav-services-faq-section">
        <div class="mav-services-shell">
            <div class="mav-services-section-heading">
                <p>FAQ</p>
                <h2>Prije nego pošalješ brief.</h2>
            </div>

            <div class="mav-services-faq">
                <article>
                    <h3>Koliko traje izrada web stranice?</h3>
                    <p>Ovisi o opsegu. Manja landing stranica može biti brža, a kompletan web s više sekcija i sadržaja traži više planiranja.</p>
                </article>

                <article>
                    <h3>Moram li imati gotov tekst?</h3>
                    <p>Ne moraš. Možeš poslati grube informacije, a strukturu i tekst možemo zajedno očistiti kroz proces.</p>
                </article>

                <article>
                    <h3>Radite li samo dizajn ili i izradu?</h3>
                    <p>Možemo raditi samo vizualni smjer, ali i kompletnu izradu stranice u WordPressu.</p>
                </article>

                <article>
                    <h3>Mogu li naručiti samo vizitke ili print?</h3>
                    <p>Da. Print materijali mogu biti zasebna usluga ili dio većeg vizualnog identiteta.</p>
                </article>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
