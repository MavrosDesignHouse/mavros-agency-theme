<?php

/**
 * Front Page Template
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Mavros Agency front page data.
 * Keep this file scalable:
 * - project data can later move to CPT "projects"
 * - services can later move to CPT "services"
 * - shop links can later point to WooCommerce or Easy Digital Downloads
 * - schema stays here until replaced by a dedicated SEO layer
 */

$mv_brand = array(
    'name'        => 'Mavros Agency',
    'url'         => home_url('/'),
    'email'       => 'hello@mavrosagency.com',
    'phone'       => '+385953700095',
    'phone_label' => '095 370 0095',
    'city'        => 'Zagreb',
    'country'     => 'Hrvatska',
    'instagram'   => 'https://www.instagram.com/mavros.agency',
    'facebook'    => 'https://www.facebook.com/mavrosagency',
    'tiktok'      => 'https://www.tiktok.com/@mavros.agency',
    'whatsapp'    => 'https://wa.me/385953700095',
    'formspree'   => 'https://formspree.io/f/mqenglow',
);

$mv_assets = array(
    'hero_desktop' => 'https://mavrosagency.com/wp-content/uploads/2026/06/Snimka-zaslona-2026-06-25-160122.png',
    'hero_phone'   => 'https://mavrosagency.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-11_00_20-PM.png',
    'hero_alt'     => 'Primjer web dizajn prikazan na desktop i mobilnom uređaju',
    'portrait'     => 'https://mavrosagency.com/wp-content/uploads/2026/06/Untitled-design-33.png',
    'placeholder'  => 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1600&q=85',
);



/**
 * Portfolio projects.
 *
 * HOW TO ADD A NEW PROJECT:
 * Add a new array item below with the same structure.
 *
 * IMPORTANT:
 * The "category" value controls the portfolio filter.
 * If you use an existing category, no extra code is needed.
 *
 * Existing categories:
 * - web-branding
 * - identity
 * - local-business
 * - ui
 * - print
 *
 * If you create a new category, for example:
 * 'category' => 'shop',
 *
 * then you must also add a matching filter button in the Radovi section:
 * <button type="button" data-project-filter="shop">Shop</button>
 *
 * Later, this array can be moved into a Custom Post Type called "projects",
 * so projects can be added from the WordPress admin instead of editing PHP.
 */


$mv_projects = array(
    array(
        'id'             => 'nk-zet',
        'title'          => 'NK ZET',
        'subtitle'       => 'Sportski identitet, web smjer i digitalni sustav za lokalni nogometni klub.',
        'category'       => 'web-branding',
        'category_label' => 'Web + Branding',
        'industry'       => 'Sportski klub',
        'year'           => '2025',
        'location'       => 'Zagreb',
        'problem'        => 'Klub je trebao suvremeniji digitalni nastup, jasnije predstavljanje i vizuale koji mogu nositi rebrand.',
        'solution'       => 'Postavljen je sportski web smjer, vizualni sustav i digitalni materijali koji izgledaju ozbiljnije prema članovima, roditeljima i sponzorima.',
        'tags'           => array('Rebranding', 'Web dizajn', 'Sportski klub', 'Social assets'),
        'cover'          => 'https://mavrosagency.com/wp-content/uploads/2026/06/Frame-24-1-scaled.png',
        'images'         => array(
            'https://mavrosagency.com/wp-content/uploads/2026/06/Frame-24-1-scaled.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/iPhone-16-17-Pro-2-1.png',
            'https://mavrosagency.com/wp-content/uploads/2026/05/black-and-white-minimalist-desktop-mockup-instagram-post-1-mnlJ3JKJGkSbOlLe.avif',
        ),
        'behance'        => '',
    ),
    array(
        'id'             => 'velvet-needle',
        'title'          => 'Velvet Needle',
        'subtitle'       => 'Dark-luxe tattoo studio bez generičke gothic estetike.',
        'category'       => 'identity',
        'category_label' => 'Brand Identity',
        'industry'       => 'Tattoo studio',
        'year'           => '2026',
        'location'       => 'Croatia',
        'problem'        => 'Tattoo studio je trebao tamni, luksuzni identitet koji ne izgleda kao generički gothic template.',
        'solution'       => 'Izgrađen je vizualni sustav za logo, merch, naljepnice, signage i digitalnu prezentaciju s jasnim premium tonom.',
        'tags'           => array('Logo system', 'Merch', 'Stickers', 'Signage'),
        'cover'          => 'https://mavrosagency.com/wp-content/uploads/2026/06/VELVET-4.png',
        'images'         => array(
            'https://mavrosagency.com/wp-content/uploads/2026/06/VELVET-4.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/VELVET-7.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/MacBook-Pro-16_-1-21-scaled.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/VELVET-5.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/VELVET-6.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-11_00_20-PM.png',
        ),
        'behance'        => '',
    ),
    array(
        'id'             => 'tamara-servis',
        'title'          => 'Tamara Servis za čišćenje',
        'subtitle'       => 'Web stranica, vizuali i lokalna prisutnost za uslužni biznis.',
        'category'       => 'local-business',
        'category_label' => 'Local Business',
        'industry'       => 'Uslužni biznis',
        'year'           => '2026',
        'location'       => 'Zagreb / Istra',
        'problem'        => 'Biznis je trebao jasniju prezentaciju usluga, povjerenje i lokalnu vidljivost bez oslanjanja samo na preporuke.',
        'solution'       => 'Postavljena je WordPress stranica, Google profil, SEO struktura i vizuali za profesionalniji prvi dojam.',
        'tags'           => array('WordPress', 'Google profil', 'SEO setup', 'Print assets'),
        'cover'          => 'https://mavrosagency.com/wp-content/uploads/2026/06/tfjghj.png',
        'images'         => array(
            'https://mavrosagency.com/wp-content/uploads/2026/06/MacBook-Pro-16_-2-2-1-scaled.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/CISCENJE-STANOVA-I-KUCA.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/CISCENJE-STANOVA-I-KUCA-1.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/tfjghj.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/Subscribe-4.png',
        ),
        'behance'        => '',
    ),
    array(
        'id'             => 'klik-previse',
        'title'          => 'Klik Previše',
        'subtitle'       => 'Web stranica, HTML banner, key visual, posteri i kampanjski vizuali.',
        'category'       => 'ui',
        'category_label' => 'UX/UI + Campaign',
        'industry'       => 'Campaign system',
        'year'           => '2025',
        'location'       => 'Zagreb / Hrvatska',
        'problem'        => 'Kampanja je trebala jasan vizualni sistem koji brzo prenosi poruku i može se širiti kroz više formata.',
        'solution'       => 'Složeni su web, digitalni banneri, key visual i print materijali s konzistentnim vizualnim jezikom.',
        'tags'           => array('UI system', 'Posters', 'Mobile screens', 'Campaign visuals'),
        'cover'          => 'https://mavrosagency.com/wp-content/uploads/2026/06/Street-Poster-1.png',
        'images'         => array(
            'https://mavrosagency.com/wp-content/uploads/2026/06/Street-Poster-1.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/Street-Poster.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/MacBook-Pro-16_-2-2.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/Frames.png',
            'https://mavrosagency.com/wp-content/uploads/2026/05/klikprevise_mockup_laptop_realview_blue.png',
        ),
        'behance'        => '',
    ),
    array(
        'id'             => 'sindikalne-igre',
        'title'          => '36. Sindikalne igre',
        'subtitle'       => 'Promo poster i vizualni smjer za organizaciju rekreativnog eventa.',
        'category'       => 'print',
        'category_label' => 'Print + Event',
        'industry'       => 'Event',
        'year'           => '2026',
        'location'       => 'Savica, Zagreb',
        'problem'        => 'Event je trebao plakat i vizual koji odmah komunicira energiju, lokaciju i sportski karakter.',
        'solution'       => 'Razvijen je promo vizual s jasnom hijerarhijom, ilustrativnim pristupom i formatima spremnim za objavu.',
        'tags'           => array('Graphic Design', 'Event brand', 'Visual system', 'Illustration'),
        'cover'          => 'https://mavrosagency.com/wp-content/uploads/2026/05/ChatGPT-Image-May-3-2026-02_19_25-PM.png',
        'images'         => array(
            'https://mavrosagency.com/wp-content/uploads/2026/05/ChatGPT-Image-May-3-2026-02_19_25-PM.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/e4f4692486726631.69f73d7d69cd4.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/Snimka-zaslona-2026-06-13-195200.png',
        ),
        'behance'        => '',
    ),
    array(
        'id'             => 'mavros-agency-system',
        'title'          => 'Mavros Agency System',
        'subtitle'       => 'Vlastiti digitalni identitet, web sustav i konverzijski framework.',
        'category'       => 'web-branding',
        'category_label' => 'Web + Branding',
        'industry'       => 'Agency system',
        'year'           => '2026',
        'location'       => 'Zagreb',
        'problem'        => 'Mavros je trebao sustav koji može nositi portfolio, lead magnete, buduće landing stranice i kasniji shop.',
        'solution'       => 'Postavljen je skalabilan WordPress front-end s jasnom arhitekturom, SEO slojem i komponentama spremnima za rast.',
        'tags'           => array('Editorial web', 'Conversion UX', 'Design system', 'Motion'),
        'cover'          => 'https://mavrosagency.com/wp-content/uploads/2026/06/4-1.png',
        'images'         => array(
            'https://mavrosagency.com/wp-content/uploads/2026/06/4-1.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/1-1.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/5-1.png',
            'https://mavrosagency.com/wp-content/uploads/2026/06/3-1.png',
        ),
        'behance'        => '',
    ),
);

$mv_clients = array(
    'NK ZET',
    'Tamara Servis',
    'Velvet Needle',
    'Klik Previše',
    'Mavros Systems',
    'Event visuals',
);

$mv_industries = array(
    'cafes' => array(
        'label'       => 'Kafići i restorani',
        'title'       => 'Da gost odmah zna gdje si, što nudiš i kako rezervirati.',
        'text'        => 'Struktura za meni, lokaciju, radno vrijeme, galeriju, Google profil, rezervacije i brze upite s mobitela.',
        'points'      => array('Meni i ponuda', 'Google Maps signali', 'Rezervacije i kontakt', 'Fotografije prostora'),
        'cta'         => 'Želim bolju prezentaciju lokala',
    ),
    'salons' => array(
        'label'       => 'Saloni i beauty',
        'title'       => 'Vizual koji izgleda uredno, premium i dovoljno uvjerljivo za prvi booking.',
        'text'        => 'Web i vizuali za usluge, cjenik, tretmane, radove, recenzije, Instagram poveznice i upite bez dugog objašnjavanja.',
        'points'      => array('Cjenik usluga', 'Prije i poslije', 'Booking CTA', 'Premium visual system'),
        'cta'         => 'Želim web za salon',
    ),
    'auto' => array(
        'label'       => 'Auto servisi i detailing',
        'title'       => 'Web koji gradi povjerenje prije nego korisnik nazove.',
        'text'        => 'Jasne usluge, lokacija, radno vrijeme, galerija radova, Google signali i struktura koja pokazuje stručnost bez pretjerivanja.',
        'points'      => array('Usluge i cijene', 'Lokacija i kontakt', 'Galerija radova', 'Lokalni SEO'),
        'cta'         => 'Želim ozbiljniji auto web',
    ),
    'apartments' => array(
        'label'       => 'Apartmani i najam',
        'title'       => 'Vlastita stranica koja smanjuje ovisnost o platformama.',
        'text'        => 'Prezentacija smještaja, direktni upiti, galerija, lokacija, pravila boravka i struktura koja pomaže gostu donijeti odluku.',
        'points'      => array('Direktni upiti', 'Galerija smještaja', 'Lokacija', 'SEO za destinaciju'),
        'cta'         => 'Želim direktne upite',
    ),
    'clubs' => array(
        'label'       => 'Sportski klubovi',
        'title'       => 'Klub koji izgleda spremno za članove, roditelje i sponzore.',
        'text'        => 'Web sustav za upise, vijesti, trenere, rasporede, sponzore, galerije i klupski identitet koji nije složen usput.',
        'points'      => array('Upisi članova', 'Sponzori', 'Rasporedi', 'Klupski identitet'),
        'cta'         => 'Želim web za klub',
    ),
    'craft' => array(
        'label'       => 'Majstori i obrti',
        'title'       => 'Mala firma može izgledati ozbiljno bez velike agencijske cijene.',
        'text'        => 'Jednostavna, brza i jasna stranica za usluge, područje rada, fotografije, preporuke i upite preko telefona ili WhatsAppa.',
        'points'      => array('Usluge', 'Područje rada', 'WhatsApp CTA', 'Povjerenje'),
        'cta'         => 'Želim web za obrt',
    ),
);

$mv_services = array(
    array(
        'number' => '01',
        'title'  => 'Web dizajn i WordPress razvoj',
        'text'   => 'Custom WordPress tema bez page builder kaosa, s čistim front-endom, jasnim sekcijama i responzivnim layoutom.',
    ),
    array(
        'number' => '02',
        'title'  => 'UX/UI struktura',
        'text'   => 'Wireframe, korisnički tok, CTA logika, mobile-first struktura i sadržaj koji posjetitelja vodi prema upitu.',
    ),
    array(
        'number' => '03',
        'title'  => 'Vizualni identitet',
        'text'   => 'Logo, boje, tipografija, social vizuali, poslovni materijali i sustav koji izgleda dosljedno na svim kanalima.',
    ),
    array(
        'number' => '04',
        'title'  => 'Lokalni SEO setup',
        'text'   => 'Osnovna struktura za Google, schema markup, meta copy, lokalni signali i sadržaj koji odgovara na stvarna pitanja kupaca.',
    ),
    array(
        'number' => '05',
        'title'  => 'Digitalni i print asseti',
        'text'   => 'Posteri, letci, cjenici, banneri, kampanjski vizuali, profile slike, coveri i materijali spremni za objavu.',
    ),
    array(
        'number' => '06',
        'title'  => 'Launch support',
        'text'   => 'Postavljanje forme, osnovna zaštita, optimizacija slika, povezivanje alata i priprema stranice za stvarne korisnike.',
    ),
);

$mv_process = array(
    array(
        'number' => '01',
        'title'  => 'Audit i smjer',
        'text'   => 'Pogledam tvoj trenutni web, Google prisutnost, konkurenciju i ono što posjetitelju trenutno nije jasno.',
    ),
    array(
        'number' => '02',
        'title'  => 'Mockup bez obveze',
        'text'   => 'Dobivaš konkretan vizualni smjer. Ne apstraktno obećanje, nego prvi prikaz kako bi stranica mogla izgledati.',
    ),
    array(
        'number' => '03',
        'title'  => 'Dizajn, razvoj i objava',
        'text'   => 'Nakon potvrde gradim stranicu, postavljam ključne tehničke stvari i pripremam je za objavu.',
    ),
);

$mv_faq = array(
    array(
        'question' => 'Koliko traje izrada web stranice?',
        'answer'   => 'Manja prezentacijska stranica najčešće se može složiti u 2 do 3 tjedna nakon što su dogovoreni sadržaj, smjer i osnovni materijali.',
    ),
    array(
        'question' => 'Moram li imati gotov tekst prije početka?',
        'answer'   => 'Ne moraš. Dovoljno je da znaš što nudiš, kome se obraćaš i što želiš da posjetitelj napravi. Tekst možemo zajedno strukturirati.',
    ),
    array(
        'question' => 'Radiš li samo web stranice?',
        'answer'   => 'Ne. Moguće je raditi samo dizajn, vizualni identitet, digitalne materijale, print materijale, SEO setup ili kompletan web od dizajna do objave.',
    ),
    array(
        'question' => 'Što ako već imam staru stranicu?',
        'answer'   => 'Tada prvo gledamo što treba zadržati, što treba ukloniti i gdje stranica gubi povjerenje, brzinu ili jasne upite.',
    ),
    array(
        'question' => 'Radiš li s malim lokalnim biznisima?',
        'answer'   => 'Da. Fokus je upravo na manjim biznisima u Hrvatskoj koji trebaju profesionalniji nastup bez velikog agencijskog procesa.',
    ),
    array(
        'question' => 'Može li se kasnije dodati shop?',
        'answer'   => 'Da. Stranicu možemo postaviti tako da kasnije podrži WooCommerce, Easy Digital Downloads, digitalne proizvode, upite ili jednostavan katalog.',
    ),
);

$mv_meta_description = 'Mavros Agency je web dizajn studio iz Zagreba za male biznise u Hrvatskoj. Custom WordPress, UX/UI, branding, lokalni SEO i digitalni materijali.';
$mv_keywords = array(
    'web dizajn Zagreb',
    'izrada web stranica Zagreb',
    'WordPress web stranica',
    'web dizajn za male biznise',
    'UX UI dizajn Hrvatska',
    'branding Zagreb',
    'lokalni SEO',
    'Mavros Agency',
);

$mv_schema_projects = array_map(
    static function ($project, $index) {
        return array(
            '@type'    => 'ListItem',
            'position' => $index + 1,
            'name'     => $project['title'],
            'url'      => home_url('/#radovi'),
            'image'    => $project['cover'],
        );
    },
    $mv_projects,
    array_keys($mv_projects)
);

$mv_schema_faq = array_map(
    static function ($item) {
        return array(
            '@type'          => 'Question',
            'name'           => $item['question'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => $item['answer'],
            ),
        );
    },
    $mv_faq
);

$mv_schema = array(
    '@context' => 'https://schema.org',
    '@graph'   => array(
        array(
            '@type'       => 'ProfessionalService',
            '@id'         => home_url('/#business'),
            'name'        => $mv_brand['name'],
            'url'         => $mv_brand['url'],
            'image'       => $mv_assets['hero_desktop'],
            'logo'        => 'https://staging.mavrosagency.com/wp-content/uploads/2026/06/MAVROS_AGENCy_logos-18.png',
            'description' => $mv_meta_description,
            'email'       => $mv_brand['email'],
            'telephone'   => $mv_brand['phone'],
            'priceRange'  => '€€',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'addressLocality' => $mv_brand['city'],
                'addressCountry'  => 'HR',
            ),
            'areaServed'  => array(
                array('@type' => 'City', 'name' => 'Zagreb'),
                array('@type' => 'Country', 'name' => 'Hrvatska'),
                array('@type' => 'Place', 'name' => 'Online'),
            ),
            'sameAs'      => array(
                $mv_brand['instagram'],
                $mv_brand['facebook'],
                $mv_brand['tiktok'],
            ),
            'knowsAbout'  => array(
                'Web dizajn',
                'WordPress razvoj',
                'UX/UI dizajn',
                'Brand identity',
                'Lokalni SEO',
                'Google Business Profile',
                'Digitalni materijali',
                'Dizajn za male biznise',
            ),
            'contactPoint' => array(
                array(
                    '@type'             => 'ContactPoint',
                    'contactType'       => 'customer support',
                    'email'             => $mv_brand['email'],
                    'telephone'         => $mv_brand['phone'],
                    'availableLanguage' => array('Croatian', 'English'),
                ),
            ),
        ),
        array(
            '@type'      => 'WebSite',
            '@id'        => home_url('/#website'),
            'url'        => home_url('/'),
            'name'       => $mv_brand['name'],
            'inLanguage' => 'hr-HR',
            'publisher'  => array('@id' => home_url('/#business')),
        ),
        array(
            '@type'       => 'WebPage',
            '@id'         => home_url('/#webpage'),
            'url'         => home_url('/'),
            'name'        => 'Web dizajn za male biznise Zagreb | Mavros Agency',
            'description' => $mv_meta_description,
            'inLanguage'  => 'hr-HR',
            'isPartOf'    => array('@id' => home_url('/#website')),
            'about'       => array('@id' => home_url('/#business')),
            'keywords'    => implode(', ', $mv_keywords),
        ),
        array(
            '@type'           => 'OfferCatalog',
            '@id'             => home_url('/#offers'),
            'name'            => 'Mavros Agency usluge',
            'itemListElement' => array(
                array(
                    '@type'       => 'Offer',
                    'itemOffered' => array('@type' => 'Service', 'name' => 'Web dizajn i WordPress razvoj'),
                ),
                array(
                    '@type'       => 'Offer',
                    'itemOffered' => array('@type' => 'Service', 'name' => 'UX/UI dizajn'),
                ),
                array(
                    '@type'       => 'Offer',
                    'itemOffered' => array('@type' => 'Service', 'name' => 'Vizualni identitet'),
                ),
                array(
                    '@type'       => 'Offer',
                    'itemOffered' => array('@type' => 'Service', 'name' => 'Lokalni SEO setup'),
                ),
            ),
        ),
        array(
            '@type'           => 'ItemList',
            '@id'             => home_url('/#project-list'),
            'name'            => 'Mavros Agency radovi',
            'itemListElement' => $mv_schema_projects,
        ),
        array(
            '@type'      => 'FAQPage',
            '@id'        => home_url('/#faq-schema'),
            'mainEntity' => $mv_schema_faq,
        ),
    ),
);

add_filter(
    'pre_get_document_title',
    static function () {
        return 'Web dizajn za male biznise Zagreb | Mavros Agency';
    }
);

add_action(
    'wp_head',
    static function () use ($mv_meta_description, $mv_keywords, $mv_schema, $mv_assets) {
?>
    <meta name="description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta name="keywords" content="<?php echo esc_attr(implode(', ', $mv_keywords)); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Web dizajn za male biznise Zagreb | Mavros Agency">
    <meta property="og:description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:image" content="<?php echo esc_url($mv_assets['hero_desktop']); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web dizajn za male biznise Zagreb | Mavros Agency">
    <meta name="twitter:description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($mv_assets['hero_desktop']); ?>">

    <script type="application/ld+json">
        <?php echo wp_json_encode($mv_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
<?php
    },
    1
);

get_header();
?>

<main id="primary" class="mv-page" data-mv-page>

    <!-- 01 HERO -->
    <section class="mv-section mv-hero" id="hero" aria-labelledby="mv-hero-title">
        <div class="mv-container mv-hero__inner">
            <div class="mv-hero__copy">
                <p class="mv-eyebrow mv-reveal">
                    Web dizajn studio iz Zagreba
                </p>

                <h1 class="mv-hero__title mv-split" id="mv-hero-title">
                    Stranica koja tvoj mali biznis čini ozbiljnijim prije prvog poziva.
                </h1>

                <p class="mv-hero__lead mv-reveal">
                    Mavros Agency gradi custom WordPress stranice, UX/UI strukturu, vizualne sustave i lokalni SEO setup za biznise koji žele bolji prvi dojam, jasnije upite i manje objašnjavanja.
                </p>

                <div class="mv-hero__actions mv-reveal">
                    <a class="mv-btn mv-btn--primary mv-magnetic" href="#kontakt">
                        Pokaži mi kako bi moja stranica izgledala
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="mv-btn mv-btn--secondary mv-magnetic" href="<?php echo esc_url(home_url('/cjenik/')); ?>">
                        Pogledaj cjenik
                    </a>

                    <a class="mv-btn mv-btn--ghost mv-magnetic" href="#radovi">
                        Pogledaj radove
                    </a>
                </div>

                <ul class="mv-hero__trust mv-reveal" aria-label="Mavros Agency ključne prednosti">
                    <li>Besplatni prvi mockup</li>
                    <li>Bez page builder kaosa</li>
                    <li>Odgovor u 24h</li>
                </ul>
            </div>

            <div class="mv-hero__visual mv-reveal" aria-label="Prikaz Mavros Agency web sustava">
                <div class="mv-hero-card">
                    <div class="mv-hero-card__bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <figure class="mv-hero-card__screen">
                        <img
                            src="<?php echo esc_url($mv_assets['hero_desktop']); ?>"
                            alt="<?php echo esc_attr($mv_assets['hero_alt']); ?>"
                            loading="eager"
                            decoding="async">
                    </figure>

                    <div class="mv-hero-card__meta">
                        <span>Custom WordPress</span>
                        <span>UX/UI</span>
                        <span>Local SEO</span>
                    </div>
                </div>

                <div class="mv-hero-phone" aria-hidden="true">
                    <img
                        src="<?php echo esc_url($mv_assets['hero_phone']); ?>"
                        alt=""
                        loading="eager"
                        decoding="async">
                </div>
            </div>
        </div>

        <div class="mv-hero__nav-row mv-reveal" aria-label="Brzi linkovi">
            <div class="mv-container mv-hero__nav-inner">
                <a href="#usluge">Usluge</a>
                <a href="#proces">Proces</a>
                <a href="#radovi">Radovi</a>
                <a href="#audit">Besplatni audit</a>
                <a href="#kontakt">Kontakt</a>
            </div>
        </div>
    </section>

    <!-- 02 SOCIAL PROOF -->
    <section class="mv-section mv-proof-strip" id="dokaz" aria-labelledby="mv-proof-strip-title">
        <div class="mv-container">
            <h2 class="mv-sr-only" id="mv-proof-strip-title">Odabrani projekti i sustavi</h2>

            <p class="mv-proof-strip__label mv-reveal">
                Projekti, vizuali i sustavi u razvoju
            </p>

            <div class="mv-proof-strip__logos mv-reveal" aria-label="Primjeri Mavros Agency projekata">
                <?php foreach ($mv_clients as $client) : ?>
                    <span><?php echo esc_html($client); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 03 SCROLL DEVICE SHOWCASE -->
    <section class="mv-section mv-device-showcase" id="showcase" data-device-showcase aria-labelledby="mv-showcase-title">
        <div class="mv-container mv-device-showcase__inner">
            <div class="mv-device-showcase__copy">
                <p class="mv-eyebrow mv-reveal">
                    Mobile first, ali ne mobile only
                </p>

                <h2 class="mv-section-title mv-tick-title" id="mv-showcase-title">
                    Web mora izgledati dobro kad netko skrola, uspoređuje i odlučuje u hodu.
                </h2>

                <div class="mv-device-steps" aria-label="Prikaz web sustava kroz scroll">
                    <article
                        class="mv-device-step is-active"
                        data-device-stage
                        data-stage="0"
                        data-laptop="<?php echo esc_url($mv_projects[0]['cover']); ?>"
                        data-phone="<?php echo esc_url($mv_projects[0]['images'][1]); ?>">
                        <span>01</span>
                        <h3>Prvi dojam</h3>
                        <p>Hero, CTA i jasna rečenica moraju odmah objasniti kome pomažeš i zašto ti se može vjerovati.</p>
                    </article>

                    <article
                        class="mv-device-step"
                        data-device-stage
                        data-stage="1"
                        data-laptop="<?php echo esc_url($mv_projects[2]['images'][0]); ?>"
                        data-phone="<?php echo esc_url($mv_projects[2]['cover']); ?>">
                        <span>02</span>
                        <h3>Jasna ponuda</h3>
                        <p>Usluge, lokacija, kontakt i vizualni dokazi moraju biti postavljeni tako da korisnik ne traži ručno.</p>
                    </article>

                    <article
                        class="mv-device-step"
                        data-device-stage
                        data-stage="2"
                        data-laptop="<?php echo esc_url($mv_projects[5]['cover']); ?>"
                        data-phone="<?php echo esc_url($mv_projects[5]['images'][1]); ?>">
                        <span>03</span>
                        <h3>Skaliranje</h3>
                        <p>Stranica se gradi kao sustav. Kasnije može dobiti case study stranice, usluge, shop, blog ili landing stranice.</p>
                    </article>
                </div>
            </div>

            <div class="mv-devices mv-reveal" aria-label="Animirani prikaz desktop i mobilne verzije">
                <figure class="mv-device mv-device--laptop">
                    <div class="mv-device__chrome">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img
                        src="<?php echo esc_url($mv_projects[0]['cover']); ?>"
                        alt="Desktop prikaz Mavros projekta"
                        data-device-laptop
                        loading="lazy"
                        decoding="async">
                </figure>

                <figure class="mv-device mv-device--phone">
                    <img
                        src="<?php echo esc_url($mv_projects[0]['images'][1]); ?>"
                        alt="Mobilni prikaz Mavros projekta"
                        data-device-phone
                        loading="lazy"
                        decoding="async">
                </figure>
            </div>
        </div>
    </section>

    <!-- 04 SERVICES AND INDUSTRIES -->
    <section class="mv-section mv-services" id="usluge" aria-labelledby="mv-services-title">
        <div class="mv-container">
            <div class="mv-section-head mv-reveal">
                <p class="mv-eyebrow">Što dobivaš</p>
                <h2 class="mv-section-title mv-tick-title" id="mv-services-title">
                    Ne treba ti “još jedna web stranica”. Treba ti sustav koji pomaže kupcu odlučiti.
                </h2>
                <p>
                    Fokus je na dizajnu, WordPress razvoju, jasnoj komunikaciji, lokalnoj vidljivosti i assetima koji biznis čine ozbiljnijim na svakom dodiru s kupcem.
                </p>
            </div>

            <div class="mv-services__grid">
                <?php foreach ($mv_services as $service) : ?>
                    <article class="mv-service-card mv-reveal">
                        <span><?php echo esc_html($service['number']); ?></span>
                        <h3><?php echo esc_html($service['title']); ?></h3>
                        <p><?php echo esc_html($service['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="mv-industries" id="industrije" data-industry-tabs>
                <div class="mv-industries__intro mv-reveal">
                    <p class="mv-eyebrow">Po industriji</p>
                    <h3>
                        Pronađi se brzo. Svaki mali biznis ima drugačiji razlog zašto mu web treba sada.
                    </h3>
                </div>

                <div class="mv-industries__tabs mv-reveal" role="tablist" aria-label="Industrijski filter">
                    <?php $mv_industry_index = 0; ?>
                    <?php foreach ($mv_industries as $key => $industry) : ?>
                        <button
                            class="<?php echo 0 === $mv_industry_index ? 'is-active' : ''; ?>"
                            type="button"
                            role="tab"
                            data-industry-trigger="<?php echo esc_attr($key); ?>"
                            aria-selected="<?php echo 0 === $mv_industry_index ? 'true' : 'false'; ?>">
                            <?php echo esc_html($industry['label']); ?>
                        </button>
                        <?php $mv_industry_index++; ?>
                    <?php endforeach; ?>
                </div>

                <div class="mv-industries__panels mv-reveal">
                    <?php $mv_panel_index = 0; ?>
                    <?php foreach ($mv_industries as $key => $industry) : ?>
                        <article
                            class="mv-industry-panel <?php echo 0 === $mv_panel_index ? 'is-active' : ''; ?>"
                            data-industry-panel="<?php echo esc_attr($key); ?>">
                            <div>
                                <span><?php echo esc_html(str_pad((string) ($mv_panel_index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
                                <h4><?php echo esc_html($industry['title']); ?></h4>
                                <p><?php echo esc_html($industry['text']); ?></p>
                            </div>

                            <ul>
                                <?php foreach ($industry['points'] as $point) : ?>
                                    <li><?php echo esc_html($point); ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <a class="mv-inline-cta" href="#kontakt" data-contact-intent="<?php echo esc_attr($industry['cta']); ?>">
                                <?php echo esc_html($industry['cta']); ?>
                                <span aria-hidden="true">↗</span>
                            </a>
                        </article>
                        <?php $mv_panel_index++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 05 PROCESS -->
    <section class="mv-section mv-process" id="proces" aria-labelledby="mv-process-title">
        <div class="mv-container">
            <div class="mv-section-head mv-section-head--center mv-reveal">
                <p class="mv-eyebrow">Kako radim</p>
                <h2 class="mv-section-title mv-tick-title" id="mv-process-title">
                    Tri koraka, bez konfuzije i bez velikog agencijskog procesa.
                </h2>
            </div>

            <div class="mv-process__grid">
                <?php foreach ($mv_process as $step) : ?>
                    <article class="mv-process-card mv-reveal">
                        <span><?php echo esc_html($step['number']); ?></span>
                        <h3><?php echo esc_html($step['title']); ?></h3>
                        <p><?php echo esc_html($step['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="mv-process__note mv-reveal">
                <p>
                    Tipičan mali web može biti spreman za objavu u 2 do 3 tjedna nakon potvrde smjera, sadržaja i osnovnih materijala.
                </p>
            </div>
        </div>
    </section>



    <!-- PRICING CTA -->
    <section class="mv-section mv-front-pricing-cta" id="cjenik-preview" aria-labelledby="mv-front-pricing-title">
        <div class="mv-container">
            <div class="mv-front-pricing-cta__inner mv-reveal">
                <div class="mv-front-pricing-cta__copy">
                    <p class="mv-eyebrow">Cjenik</p>

                    <h2 class="mv-section-title" id="mv-front-pricing-title">
                        Želiš prvo vidjeti okvir cijene prije nego pošalješ upit?
                    </h2>

                    <p>
                        Cjenik daje realan početni okvir za web, WordPress, UX/UI, vizualni identitet, lokalni SEO i dodatne digitalne materijale. Ako ne znaš što odabrati, kreni od besplatnog mockupa ili audita.
                    </p>
                </div>

                <div class="mv-front-pricing-cta__actions">
                    <a class="mv-btn mv-btn--primary" href="<?php echo esc_url(home_url('/cjenik/')); ?>">
                        Pogledaj cjenik
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="mv-btn mv-btn--secondary" href="#kontakt">
                        Zatraži procjenu
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- 06 WORK -->
    <section class="mv-section mv-work" id="radovi" aria-labelledby="mv-work-title">
        <div class="mv-container">
            <div class="mv-work__head mv-reveal">
                <div>
                    <p class="mv-eyebrow">Radovi</p>
                    <h2 class="mv-section-title mv-tick-title" id="mv-work-title">
                        Od weba do identiteta, sve mora izgledati kao da pripada istom ozbiljnom biznisu.
                    </h2>
                </div>

                <p>
                    Radovi su složeni kao skalabilan portfolio. Kasnije svaki projekt može dobiti vlastitu case study stranicu s URL-om, galerijom, SEO opisom i detaljnim procesom.
                </p>
            </div>



            <?php
            /**
             * Portfolio filters.
             *
             * Each button uses data-project-filter.
             * That value must match the "category" value inside $mv_projects.
             *
             * Example:
             * Button:  data-project-filter="web-branding"
             * Project: 'category' => 'web-branding'
             *
             * To add a new category, add both:
             * 1. New project category in $mv_projects
             * 2. New button below with the same filter value
             *
             * Example for future shop projects:
             * <button type="button" data-project-filter="shop">Shop</button>
             */
            ?>
            <div class="mv-work__filters mv-reveal" aria-label="Filtriranje radova">
                <button class="is-active" type="button" data-project-filter="all">Svi</button>
                <button type="button" data-project-filter="web-branding">Web + Branding</button>
                <button type="button" data-project-filter="identity">Identity</button>
                <button type="button" data-project-filter="local-business">Local business</button>
                <button type="button" data-project-filter="ui">UX/UI</button>
                <button type="button" data-project-filter="print">Print</button>
            </div>

            <div class="mv-work__grid" data-project-grid>
                <?php foreach ($mv_projects as $index => $project) : ?>
                    <?php $project_json = wp_json_encode($project, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

                    <article
                        class="mv-project-card mv-reveal"
                        data-project-card
                        data-project-index="<?php echo esc_attr($index); ?>"
                        data-project-category="<?php echo esc_attr($project['category']); ?>"
                        data-project='<?php echo esc_attr($project_json); ?>'>
                        <button class="mv-project-card__button" type="button" aria-label="<?php echo esc_attr('Otvori projekt ' . $project['title']); ?>">
                            <span class="mv-project-card__index">
                                <?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                            </span>

                            <span class="mv-project-card__image">
                                <img
                                    src="<?php echo esc_url($project['cover']); ?>"
                                    alt="<?php echo esc_attr($project['title']); ?>"
                                    loading="lazy"
                                    decoding="async">
                            </span>

                            <span class="mv-project-card__content">
                                <span class="mv-project-card__category">
                                    <?php echo esc_html($project['category_label']); ?>
                                </span>

                                <strong>
                                    <?php echo esc_html($project['title']); ?>
                                </strong>

                                <span>
                                    <?php echo esc_html($project['subtitle']); ?>
                                </span>
                            </span>

                            <span class="mv-project-card__hover">
                                Pogledaj projekt
                                <span aria-hidden="true">↗</span>
                            </span>
                        </button>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="mv-work__load mv-reveal" data-project-load-wrap>
                <button class="mv-btn mv-btn--secondary" type="button" data-project-load-more>
                    Učitaj još radova
                    <span aria-hidden="true">↓</span>
                </button>

                <p data-project-count>
                    Prikazano 6 od <?php echo esc_html(count($mv_projects)); ?> radova.
                </p>
            </div>

            <div class="mv-work__foot mv-reveal">
                <a class="mv-btn mv-btn--secondary" href="#kontakt">
                    Želim ovakav projekt
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>

        <div class="mv-project-modal" data-project-modal aria-hidden="true">
            <div class="mv-project-modal__backdrop" data-modal-close></div>

            <div class="mv-project-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="mv-modal-title">
                <button class="mv-project-modal__close" type="button" data-modal-close aria-label="Zatvori projekt">
                    ×
                </button>

                <div class="mv-project-modal__media">
                    <img
                        data-modal-main-image
                        src="<?php echo esc_url($mv_assets['placeholder']); ?>"
                        alt=""
                        loading="lazy"
                        decoding="async">
                </div>

                <div class="mv-project-modal__body">
                    <div class="mv-project-modal__meta">
                        <span data-modal-category>Project</span>
                        <span data-modal-year>2026</span>
                        <span data-modal-location>Zagreb</span>
                    </div>

                    <h3 id="mv-modal-title" data-modal-title>Project title</h3>
                    <p data-modal-subtitle>Project subtitle</p>

                    <div class="mv-project-modal__before-after">
                        <article>
                            <span>Problem</span>
                            <p data-modal-problem></p>
                        </article>

                        <article>
                            <span>Rješenje</span>
                            <p data-modal-solution></p>
                        </article>
                    </div>

                    <div class="mv-project-modal__tags" data-modal-tags></div>
                    <div class="mv-project-modal__thumbs" data-modal-thumbs></div>

                    <div class="mv-project-modal__actions">
                        <a class="mv-btn mv-btn--primary" href="#kontakt" data-modal-cta>
                            Želim sličan projekt
                            <span aria-hidden="true">↗</span>
                        </a>

                        <a class="mv-btn mv-btn--secondary" href="#" target="_blank" rel="noopener" data-modal-behance hidden>
                            Pogledaj Behance
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- INSTAGRAM FEED -->
    <section class="mv-section mv-instagram" id="instagram" aria-labelledby="mv-instagram-title">
        <div class="mv-container">
            <div class="mv-instagram__head mv-reveal">
                <div>
                    <p class="mv-eyebrow">Instagram</p>

                    <h2 class="mv-section-title mv-tick-title" id="mv-instagram-title">
                        Najnoviji vizuali, procesi i projekti iz studija.
                    </h2>
                </div>

                <a
                    class="mv-btn mv-btn--secondary"
                    href="https://www.instagram.com/mavros.agency"
                    target="_blank"
                    rel="noopener">
                    Prati na Instagramu
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="mv-instagram__feed mv-reveal">
                <?php if (shortcode_exists('instagram-feed')) : ?>
                    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                <?php else : ?>
                    <div class="mv-instagram__fallback">
                        <p>
                            Instagram feed trenutno nije povezan. Nakon povezivanja profila, ovdje će se automatski prikazivati najnoviji postovi.
                        </p>

                        <a
                            class="mv-btn mv-btn--primary"
                            href="https://www.instagram.com/mavros.agency"
                            target="_blank"
                            rel="noopener">
                            Otvori Instagram
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <!-- 07 TRUST -->
    <section class="mv-section mv-trust" id="povjerenje" aria-labelledby="mv-trust-title">
        <div class="mv-container">
            <div class="mv-section-head mv-reveal">
                <p class="mv-eyebrow">Zašto ovaj pristup radi</p>
                <h2 class="mv-section-title mv-tick-title" id="mv-trust-title">
                    Mali biznis ne treba kompliciran web. Treba jasan razlog da mu kupac vjeruje.
                </h2>
            </div>

            <div class="mv-trust__grid">
                <article class="mv-trust-card mv-reveal">
                    <span>“</span>
                    <h3>Manje trenja</h3>
                    <p>
                        Posjetitelj odmah vidi tko si, što nudiš, gdje si, kako te kontaktirati i zašto bi baš tebe uzeo u obzir.
                    </p>
                </article>

                <article class="mv-trust-card mv-reveal">
                    <span>“</span>
                    <h3>Više ozbiljnosti</h3>
                    <p>
                        Vizualni sustav, dobra tipografija, fotografije, struktura i brzina stvaraju dojam da je i usluga uređena.
                    </p>
                </article>

                <article class="mv-trust-card mv-reveal">
                    <span>“</span>
                    <h3>Lokalna jasnoća</h3>
                    <p>
                        Zagreb, kvart, područje rada, Google profil i specifične usluge pomažu ljudima da te pronađu kada već traže rješenje.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- 08 ABOUT -->
    <section class="mv-section mv-about" id="o-meni" aria-labelledby="mv-about-title">
        <div class="mv-container mv-about__inner">
            <div class="mv-about__media mv-reveal">
                <img
                    src="<?php echo esc_url($mv_assets['portrait']); ?>"
                    alt="Mavros Agency vizualni smjer i radni prostor"
                    loading="lazy"
                    decoding="async">
            </div>

            <div class="mv-about__copy mv-reveal">
                <p class="mv-eyebrow">O Mavrosu</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-about-title">
                    Studio pristup za biznise koji nisu ogromni, ali žele izgledati ozbiljno.
                </h2>

                <p>
                    Mavros Agency vodim iz Zagreba s fokusom na male lokalne biznise koji često nemaju vremena, budžet ili tim za veliki digitalni proces. Zato stranica mora biti jasna, lijepa, tehnički čista i dovoljno jednostavna da vlasnik zna što se događa.
                </p>

                <p>
                    Radim web dizajn, WordPress razvoj, UX/UI strukturu, vizualne sustave i digitalne materijale koji podržavaju prvi dojam. Cilj nije prodati složenost. Cilj je napraviti web koji izgleda profesionalno i pomaže korisniku da napravi sljedeći korak.
                </p>

                <div class="mv-about__facts">
                    <span>Custom WordPress</span>
                    <span>UX/UI background</span>
                    <span>Zagreb + Hrvatska</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 09 AUDIT CTA -->
    <section class="mv-section mv-audit" id="audit" aria-labelledby="mv-audit-title">
        <div class="mv-container mv-audit__inner">
            <div class="mv-audit__copy mv-reveal">
                <p class="mv-eyebrow">Besplatni audit</p>

                <h2 class="mv-section-title" id="mv-audit-title">
                    Imaš staru stranicu? Pošalji link i reći ću ti što najviše ruši prvi dojam.
                </h2>

                <p>
                    Audit je dobar prvi korak ako nisi sigurna treba li ti potpuno nova stranica ili samo bolja struktura, vizual i jasniji CTA.
                </p>
            </div>

            <div class="mv-audit__card mv-reveal">
                <span>Dobivaš</span>
                <ul>
                    <li>3 najveća problema na stranici</li>
                    <li>1 prijedlog za bolji hero i CTA</li>
                    <li>Procjenu treba li redizajn ili manji popravak</li>
                </ul>

                <a class="mv-btn mv-btn--primary" href="#kontakt">
                    Zatraži audit
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 10 FAQ -->
    <section class="mv-section mv-faq-section" id="faq" aria-labelledby="mv-faq-title">
        <div class="mv-container mv-faq-section__inner">
            <div class="mv-faq-section__copy mv-reveal">
                <p class="mv-eyebrow">FAQ</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-faq-title">
                    Pitanja koja vlasnici najčešće imaju prije nego pošalju upit.
                </h2>
            </div>

            <div class="mv-faq" data-faq>
                <?php foreach ($mv_faq as $index => $item) : ?>
                    <article class="mv-faq__item mv-reveal <?php echo 0 === $index ? 'is-open' : ''; ?>">
                        <button
                            type="button"
                            aria-expanded="<?php echo 0 === $index ? 'true' : 'false'; ?>">
                            <span><?php echo esc_html($item['question']); ?></span>
                            <strong aria-hidden="true">+</strong>
                        </button>

                        <div class="mv-faq__answer">
                            <p><?php echo esc_html($item['answer']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 11 CONTACT -->
    <section class="mv-section mv-contact" id="kontakt" aria-labelledby="mv-contact-title">
        <div class="mv-container mv-contact__inner">
            <div class="mv-contact__copy mv-reveal">
                <p class="mv-eyebrow">Kontakt</p>

                <h2 class="mv-section-title" id="mv-contact-title">
                    Pošalji mi smjer, link ili problem. Ne trebaš imati savršen brief.
                </h2>

                <p>
                    Najbrži početak je kratak opis biznisa i što želiš postići. Ako već imaš stranicu, pošalji link. Ako nemaš, napiši što radiš i za koga.
                </p>

                <div class="mv-contact__links">
                    <a href="mailto:<?php echo esc_attr($mv_brand['email']); ?>">
                        <?php echo esc_html($mv_brand['email']); ?>
                    </a>

                    <a href="<?php echo esc_url($mv_brand['whatsapp']); ?>" target="_blank" rel="noopener">
                        WhatsApp: <?php echo esc_html($mv_brand['phone_label']); ?>
                    </a>

                    <a href="<?php echo esc_url($mv_brand['instagram']); ?>" target="_blank" rel="noopener">
                        Instagram: @mavros.agency
                    </a>
                </div>
            </div>

            <form
                class="mv-form mv-reveal"
                action="<?php echo esc_url($mv_brand['formspree']); ?>"
                method="POST"
                data-mv-form>
                <input type="hidden" name="_subject" value="Novi upit s Mavros Agency stranice">
                <input type="text" name="_gotcha" tabindex="-1" autocomplete="off" class="mv-hp-field" aria-hidden="true">

                <div class="mv-form__row">
                    <label for="mv-name">Ime</label>
                    <input id="mv-name" name="name" type="text" autocomplete="name" placeholder="Tvoje ime" required>
                </div>

                <div class="mv-form__row">
                    <label for="mv-business">Biznis</label>
                    <input id="mv-business" name="business" type="text" autocomplete="organization" placeholder="Naziv biznisa ili projekta">
                </div>

                <div class="mv-form__row">
                    <label for="mv-email">Email</label>
                    <input id="mv-email" name="email" type="email" autocomplete="email" placeholder="tvoj@email.com" required>
                </div>

                <div class="mv-form__row">
                    <label for="mv-type">Što trebaš?</label>
                    <select id="mv-type" name="project_type" required>
                        <option value="">Odaberi opciju</option>
                        <option value="Besplatni mockup">Besplatni mockup</option>
                        <option value="Besplatni audit">Besplatni audit stare stranice</option>
                        <option value="Nova web stranica">Nova web stranica</option>
                        <option value="Redizajn postojeće stranice">Redizajn postojeće stranice</option>
                        <option value="Vizualni identitet">Vizualni identitet</option>
                        <option value="Digitalni ili print materijali">Digitalni ili print materijali</option>
                        <option value="Nisam sigurna">Nisam sigurna, trebam savjet</option>
                    </select>
                </div>

                <div class="mv-form__row">
                    <label for="mv-message">Poruka</label>
                    <textarea id="mv-message" name="message" placeholder="Napiši što radiš, imaš li postojeću stranicu i što želiš poboljšati." required></textarea>
                </div>

                <button class="mv-btn mv-btn--primary mv-form__submit" type="submit">
                    Pošalji upit
                    <span aria-hidden="true">↗</span>
                </button>

                <p class="mv-form__note" data-form-note>
                    Odgovor stiže što prije, najčešće unutar 24 sata. Podaci se koriste samo za odgovor na upit.
                </p>
            </form>
        </div>
    </section>

    <!-- 12 FUTURE READY NOTE -->
    <section class="mv-section mv-future" id="future-ready" aria-labelledby="mv-future-title">
        <div class="mv-container mv-future__inner">
            <p class="mv-eyebrow mv-reveal">Future ready</p>

            <h2 class="mv-section-title mv-reveal" id="mv-future-title">
                Stranica je pripremljena za rast: case study stranice, usluge, blog, landing stranice i kasniji shop.
            </h2>

            <div class="mv-future__grid">
                <article class="mv-reveal">
                    <span>01</span>
                    <h3>Case studies</h3>
                    <p>Svaki projekt već ima podatke koji se kasnije mogu prebaciti u custom post type.</p>
                </article>

                <article class="mv-reveal">
                    <span>02</span>
                    <h3>Usluge</h3>
                    <p>Svaka usluga može dobiti svoju SEO landing stranicu za specifične upite i industrije.</p>
                </article>

                <article class="mv-reveal">
                    <span>03</span>
                    <h3>Shop</h3>
                    <p>Arhitektura podržava kasnije dodavanje digitalnih proizvoda, predložaka ili kataloga.</p>
                </article>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>