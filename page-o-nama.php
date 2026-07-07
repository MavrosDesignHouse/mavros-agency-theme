<?php

/**
 * About Page Template
 *
 * Template Name: O nama
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

$mv_brand = array(
    'name'        => 'Mavros Agency',
    'founder'     => 'Ana Jozić',
    'url'         => home_url('/'),
    'email'       => 'hello@mavrosagency.com',
    'phone'       => '+385953700095',
    'phone_label' => '095 370 0095',
    'city'        => 'Zagreb',
    'country'     => 'Hrvatska',
    'whatsapp'    => 'https://wa.me/385953700095',
);

/**
 * About page image system.
 *
 * Sve slike za O nama stranicu drži ovdje.
 * Ako kasnije zamijeniš sliku u Media Libraryju, promijeni samo URL ispod.
 */
$mv_about_assets = array(
    'ana_portrait'       => 'https://mavrosagency.com/wp-content/uploads/2026/06/me01.png',
    'business_cards'     => 'https://mavrosagency.com/wp-content/uploads/2026/06/me02.png',
    'desk_workspace'     => 'https://mavrosagency.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-24-2026-11_37_03-PM.png',
    'hand_laptop'        => 'https://mavrosagency.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-24-2026-11_45_24-PM-e1782337563489.png',
    'phone_in_hand'      => 'https://mavrosagency.com/wp-content/uploads/2026/06/me05.png',
    'stationery'         => 'https://mavrosagency.com/wp-content/uploads/2026/06/me06.png',
    'business_card_macro' => 'https://mavrosagency.com/wp-content/uploads/2026/06/06d174f8-2355-44df-aa5b-9fb7bd769a51.png',
);

$mv_about_principles = array(
    array(
        'number' => '01',
        'title'  => 'Prvi dojam nije dekoracija.',
        'text'   => 'Web stranica mora odmah objasniti tko si, što radiš i zašto ti netko može vjerovati. Dizajn nije samo lijepa površina, nego način da biznis izgleda ozbiljnije prije prvog poziva.',
    ),
    array(
        'number' => '02',
        'title'  => 'Mali biznisi ne trebaju generički web.',
        'text'   => 'Kafić, salon, klub, apartman ili servis nemaju isti problem. Zato struktura, ton, CTA i vizualni smjer moraju odgovarati stvarnom načinu na koji klijenti donose odluke.',
    ),
    array(
        'number' => '03',
        'title'  => 'Sve mora izgledati povezano.',
        'text'   => 'Web, vizitke, social objave, galerija, cjenik i kontakt ne smiju djelovati kao pet različitih stvari. Mavros gradi sustav, ne samo jednu stranicu.',
    ),
);

$mv_about_process = array(
    array(
        'label' => 'Prvo',
        'title' => 'Razumijem biznis.',
        'text'  => 'Ne krećem od layouta, nego od pitanja što klijent treba postići. Više upita, bolji dojam, jasnije usluge, bolju prezentaciju ili profesionalniji nastup.',
    ),
    array(
        'label' => 'Zatim',
        'title' => 'Slažem strukturu.',
        'text'  => 'Definiram sekcije, poruke, CTA, hijerarhiju i korisnički tok. Tek tada dizajn dobiva smisao.',
    ),
    array(
        'label' => 'Na kraju',
        'title' => 'Gradim digitalni sustav.',
        'text'  => 'Dizajn se pretvara u WordPress stranicu, responzivni layout, kontakt formu, SEO osnovu i vizualni sustav koji se može širiti.',
    ),
);

$mv_about_facts = array(
    'Web dizajn',
    'WordPress',
    'UX/UI',
    'Branding',
    'Digitalni materijali',
    'Lokalni SEO setup',
    'Zagreb + remote',
);

$mv_meta_description = 'O Mavros Agency studiju i Ani Jozić. Web dizajn, WordPress, UX/UI, branding i digitalni materijali za male biznise u Zagrebu i Hrvatskoj.';

$mv_schema = array(
    '@context' => 'https://schema.org',
    '@graph'   => array(
        array(
            '@type'       => 'AboutPage',
            '@id'         => get_permalink() . '#aboutpage',
            'url'         => get_permalink(),
            'name'        => 'O nama | Mavros Agency',
            'description' => $mv_meta_description,
            'inLanguage'  => 'hr-HR',
            'isPartOf'    => array(
                '@id' => home_url('/#website'),
            ),
        ),
        array(
            '@type'     => 'ProfessionalService',
            '@id'       => home_url('/#business'),
            'name'      => $mv_brand['name'],
            'url'       => $mv_brand['url'],
            'email'     => $mv_brand['email'],
            'telephone' => $mv_brand['phone'],
            'founder'   => array(
                '@type' => 'Person',
                'name'  => $mv_brand['founder'],
            ),
            'address'   => array(
                '@type'           => 'PostalAddress',
                'addressLocality' => $mv_brand['city'],
                'addressCountry'  => 'HR',
            ),
            'areaServed' => array(
                array('@type' => 'City', 'name' => 'Zagreb'),
                array('@type' => 'Country', 'name' => 'Hrvatska'),
            ),
        ),
        array(
            '@type' => 'Person',
            '@id'   => home_url('/#ana-jozic'),
            'name'  => $mv_brand['founder'],
            'jobTitle' => 'Founder, web designer and UX/UI designer',
            'worksFor' => array(
                '@id' => home_url('/#business'),
            ),
        ),
    ),
);

add_filter(
    'pre_get_document_title',
    static function () {
        return 'O nama | Mavros Agency';
    }
);

add_action(
    'wp_head',
    static function () use ($mv_meta_description, $mv_schema) {
?>
    <meta name="description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="O nama | Mavros Agency">
    <meta property="og:description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:image" content="https://mavrosagency.com/wp-content/uploads/2026/06/me01.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="O nama | Mavros Agency">
    <meta name="twitter:description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta name="twitter:image" content="https://mavrosagency.com/wp-content/uploads/2026/06/me01.png">

    <script type="application/ld+json">
        <?php echo wp_json_encode($mv_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
<?php
    },
    1
);

get_header();
?>

<main id="primary" class="mv-page mv-about-page" data-mv-page>

    <!-- ABOUT HERO -->
    <section class="mv-about-hero" id="o-nama" aria-labelledby="mv-about-hero-title">
        <div class="mv-container mv-about-hero__inner">
            <div class="mv-about-hero__copy mv-reveal">
                <p class="mv-eyebrow">O Mavros Agencyju</p>

                <h1 class="mv-about-hero__title mv-split" id="mv-about-hero-title">
                    Dizajn studio za biznise koji žele izgledati ozbiljnije prije prvog kontakta.
                </h1>

                <p>
                    Mavros Agency je mali web i brand studio iz Zagreba koji gradi web stranice, vizualne sustave i digitalne materijale za lokalne biznise. Ideja je jednostavna: dobar biznis ne smije izgledati slučajno.
                </p>

                <div class="mv-about-hero__actions">
                    <a class="mv-btn mv-btn--primary mv-magnetic" href="<?php echo esc_url(home_url('/#kontakt')); ?>">
                        Pošalji mi svoj biznis
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="mv-btn mv-btn--secondary mv-magnetic" href="<?php echo esc_url(home_url('/radovi/')); ?>">
                        Pogledaj radove
                    </a>
                </div>
            </div>

            <div class="mv-about-hero__media mv-reveal">
                <figure class="mv-about-hero__portrait">
                    <img
                        src="<?php echo esc_url($mv_about_assets['ana_portrait']); ?>"
                        alt="Ana Jozić, osnivačica Mavros Agencyja"
                        loading="eager"
                        decoding="async">
                </figure>

                <figure class="mv-about-hero__card mv-about-hero__card--one">
                    <img
                        src="<?php echo esc_url($mv_about_assets['business_cards']); ?>"
                        alt="Mavros Agency vizitke"
                        loading="lazy"
                        decoding="async">
                </figure>

                <figure class="mv-about-hero__card mv-about-hero__card--two">
                    <img
                        src="<?php echo esc_url($mv_about_assets['business_card_macro']); ?>"
                        alt="Close-up crne Mavros Agency vizitke"
                        loading="lazy"
                        decoding="async">
                </figure>
            </div>
        </div>
    </section>

    <!-- ABOUT INTRO -->
    <section class="mv-about-intro" aria-labelledby="mv-about-intro-title">
        <div class="mv-container">
            <div class="mv-about-intro__inner">
                <div class="mv-about-intro__sticky mv-reveal">
                    <p class="mv-eyebrow">Tko stoji iza studija</p>

                    <h2 class="mv-section-title mv-tick-title" id="mv-about-intro-title">
                        Mavros je osoban studio, ali ne izgleda amaterski.
                    </h2>
                </div>

                <div class="mv-about-intro__text mv-reveal">
                    <p>
                        Ja sam Ana Jozić, dizajnerica i developerica iza Mavros Agencyja. Radim s malim biznisima kojima ne treba ogromna agencija, ali im treba ozbiljan digitalni nastup.
                    </p>

                    <p>
                        U praksi to znači da ne radim samo “lijepu stranicu”. Gledam kako netko dolazi do tvog biznisa, što prvo vidi, gdje klikne, što mu nije jasno i što ga može uvjeriti da pošalje upit.
                    </p>

                    <p>
                        Mavros postoji za vlasnike koji znaju da njihov posao vrijedi, ali im trenutni web, vizuali ili online prisutnost to ne pokazuju dovoljno dobro.
                    </p>

                    <div class="mv-about-intro__facts">
                        <?php foreach ($mv_about_facts as $fact) : ?>
                            <span><?php echo esc_html($fact); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IMAGE BAND -->
    <section class="mv-about-image-band" aria-label="Mavros Agency studio materijali">
        <div class="mv-container">
            <div class="mv-about-image-band__grid">
                <figure class="mv-reveal">
                    <img
                        src="<?php echo esc_url($mv_about_assets['desk_workspace']); ?>"
                        alt="Mavros Agency radni stol i workspace"
                        loading="lazy"
                        decoding="async">
                </figure>

                <figure class="mv-reveal">
                    <img
                        src="<?php echo esc_url($mv_about_assets['phone_in_hand']); ?>"
                        alt="Mobitel s Mavros Agency prikazom"
                        loading="lazy"
                        decoding="async">
                </figure>

                <figure class="mv-reveal">
                    <img
                        src="<?php echo esc_url($mv_about_assets['stationery']); ?>"
                        alt="Mavros Agency brand stationery i materijali"
                        loading="lazy"
                        decoding="async">
                </figure>
            </div>
        </div>
    </section>

    <!-- PRINCIPLES -->
    <section class="mv-about-principles" id="principi" aria-labelledby="mv-about-principles-title">
        <div class="mv-container">
            <div class="mv-section-head mv-section-head--center mv-reveal">
                <p class="mv-eyebrow">Principi</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-about-principles-title">
                    Tri stvari koje vodim kroz svaki projekt.
                </h2>
            </div>

            <div class="mv-about-principles__grid">
                <?php foreach ($mv_about_principles as $principle) : ?>
                    <article class="mv-about-principle-card mv-reveal">
                        <span><?php echo esc_html($principle['number']); ?></span>
                        <h3><?php echo esc_html($principle['title']); ?></h3>
                        <p><?php echo esc_html($principle['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- METHOD -->
    <section class="mv-about-method" id="metoda" aria-labelledby="mv-about-method-title">
        <div class="mv-container mv-about-method__inner">
            <div class="mv-about-method__copy mv-reveal">
                <p class="mv-eyebrow">Kako radim</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-about-method-title">
                    Nema kaosa, nema generičkog templatea, nema pogađanja.
                </h2>

                <p>
                    Proces je namjerno jednostavan. Prvo definiramo što stranica mora postići. Zatim se slaže struktura, vizualni smjer i sadržaj. Tek nakon toga se dizajn pretvara u funkcionalnu WordPress stranicu.
                </p>

                <a class="mv-btn mv-btn--secondary" href="<?php echo esc_url(home_url('/#proces')); ?>">
                    Pogledaj proces
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="mv-about-method__steps">
                <?php foreach ($mv_about_process as $step) : ?>
                    <article class="mv-about-method-step mv-reveal">
                        <span><?php echo esc_html($step['label']); ?></span>
                        <h3><?php echo esc_html($step['title']); ?></h3>
                        <p><?php echo esc_html($step['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- WORKSPACE STORY -->
    <section class="mv-about-workspace" aria-labelledby="mv-about-workspace-title">
        <div class="mv-container mv-about-workspace__inner">
            <figure class="mv-about-workspace__image mv-reveal">
                <img
                    src="<?php echo esc_url($mv_about_assets['hand_laptop']); ?>"
                    alt="Rad na laptopu u Mavros Agency stilu"
                    loading="lazy"
                    decoding="async">
            </figure>

            <div class="mv-about-workspace__copy mv-reveal">
                <p class="mv-eyebrow">Detalji su dio dojma</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-about-workspace-title">
                    Svaki klik, kartica i ekran moraju pripadati istom sustavu.
                </h2>

                <p>
                    Dobar vizualni identitet nije samo logo. To je način na koji izgleda tvoja početna stranica, objava na Instagramu, vizitka, cjenik, galerija, forma i poruka koju šalješ klijentu.
                </p>

                <p>
                    Zato Mavros spaja web dizajn, UX razmišljanje, WordPress development i vizualne materijale u jedan jasan sistem.
                </p>
            </div>
        </div>
    </section>

    <!-- STUDIO VALUES -->
    <section class="mv-about-values" aria-labelledby="mv-about-values-title">
        <div class="mv-container">
            <div class="mv-about-values__inner mv-reveal">
                <p class="mv-eyebrow">Mavros pristup</p>

                <h2 class="mv-section-title" id="mv-about-values-title">
                    Studio kvaliteta bez agencijske distance.
                </h2>

                <div class="mv-about-values__grid">
                    <article>
                        <span>01</span>
                        <h3>Direktno</h3>
                        <p>Radiš s osobom koja stvarno dizajnira, piše, slaže strukturu i razumije projekt.</p>
                    </article>

                    <article>
                        <span>02</span>
                        <h3>Precizno</h3>
                        <p>Svaka sekcija ima razlog. Svaki CTA ima cilj. Svaki vizual mora podržati poruku.</p>
                    </article>

                    <article>
                        <span>03</span>
                        <h3>Skalabilno</h3>
                        <p>Stranica se može širiti kroz case studyje, cjenik, shop, blog, katalog ili dodatne landing stranice.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="mv-about-cta" id="about-contact" aria-labelledby="mv-about-cta-title">
        <div class="mv-container">
            <div class="mv-about-cta__inner mv-reveal">
                <div>
                    <p class="mv-eyebrow">Počnimo jednostavno</p>

                    <h2 class="mv-section-title" id="mv-about-cta-title">
                        Ne trebaš imati savršen brief. Dovoljan je link, ideja ili problem.
                    </h2>

                    <p>
                        Pošalji mi čime se baviš, imaš li postojeću stranicu i što ti trenutno ne izgleda dovoljno dobro. Ako ima smisla, mogu krenuti od besplatnog mockupa ili audita.
                    </p>
                </div>

                <div class="mv-about-cta__actions">
                    <a class="mv-btn mv-btn--primary" href="<?php echo esc_url(home_url('/#kontakt')); ?>">
                        Zatraži besplatni mockup
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="mv-btn mv-btn--secondary" href="<?php echo esc_url(home_url('/cjenik/')); ?>">
                        Pogledaj cjenik
                    </a>

                    <a class="mv-btn mv-btn--secondary" href="<?php echo esc_url($mv_brand['whatsapp']); ?>" target="_blank" rel="noopener">
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>