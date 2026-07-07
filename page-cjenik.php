<?php

/**
 * Pricing Page Template
 *
 * Template Name: Cjenik
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

$mv_brand = array(
    'name'        => 'Mavros Agency',
    'url'         => home_url('/'),
    'email'       => 'hello@mavrosagency.com',
    'phone'       => '+385953700095',
    'phone_label' => '095 370 0095',
    'city'        => 'Zagreb',
    'country'     => 'Hrvatska',
    'whatsapp'    => 'https://wa.me/385953700095',
    'formspree'   => 'https://formspree.io/f/mqenglow',
);

/**
 * Pricing packages.
 *
 * HOW TO EDIT PRICES:
 * Change the "price" and "price_note" values below.
 *
 * Use "od" pricing because every real project depends on:
 * - number of pages
 * - existing content
 * - photography/assets
 * - integrations
 * - SEO scope
 * - deadline
 *
 * Later, these packages can become WooCommerce / EDD products.
 */
$mv_packages = array(
    array(
        'id'          => 'mockup-audit',
        'label'       => 'Low risk start',
        'title'       => 'Besplatni mockup / audit',
        'price'       => '0 €',
        'price_note'  => 'bez obveze',
        'description' => 'Za biznise koji žele prvo vidjeti smjer prije nego odluče hoće li krenuti u projekt.',
        'best_for'    => 'Ako imaš staru stranicu, nemaš web ili nisi sigurna što ti treba.',
        'features'    => array(
            'Kratka analiza trenutnog dojma',
            '1 prijedlog boljeg hero dijela',
            'Smjer za boje, layout ili strukturu',
            'Procjena treba li nova stranica ili redizajn',
            'Odgovor najčešće unutar 24h',
        ),
        'not_included' => array(
            'Gotov dizajn cijele stranice',
            'Kodiranje stranice',
            'Detaljna SEO strategija',
        ),
        'cta' => 'Zatraži besplatni mockup',
    ),
    array(
        'id'          => 'web-start',
        'label'       => 'Najčešći početak',
        'title'       => 'Web Start',
        'price'       => 'od 450 €',
        'price_note'  => 'jednostavna prezentacijska stranica',
        'description' => 'Za male biznise koji trebaju profesionalnu, jasnu i responzivnu web stranicu bez nepotrebne kompleksnosti.',
        'best_for'    => 'Kafići, saloni, obrti, majstori, mali servisi i lokalne usluge.',
        'features'    => array(
            'Custom dizajn početne stranice',
            'WordPress implementacija bez page buildera',
            'Mobile-first responzivni layout',
            'Kontakt forma ili WhatsApp CTA',
            'Osnovni SEO setup',
            'Osnovna optimizacija slika',
            'Povezivanje društvenih mreža',
        ),
        'not_included' => array(
            'Profesionalna fotografija',
            'Napredni booking sustav',
            'Web shop',
        ),
        'cta' => 'Želim Web Start',
    ),
    array(
        'id'          => 'web-pro',
        'label'       => 'Najbolji omjer',
        'title'       => 'Web Pro',
        'price'       => 'od 750 €',
        'price_note'  => 'više sekcija, bolja struktura, jači funnel',
        'description' => 'Za biznise koji žele ozbiljniji nastup, jasniji prodajni tok i stranicu koja može rasti kroz vrijeme.',
        'best_for'    => 'Biznisi koji žele više upita, bolju prezentaciju usluga i jači prvi dojam.',
        'features'    => array(
            'Custom WordPress stranica',
            'UX/UI struktura i korisnički tok',
            'Do 5 ključnih sekcija ili podstranica',
            'Portfolio, galerija ili prikaz usluga',
            'FAQ sekcija za uklanjanje prigovora',
            'SEO title, meta description i osnovni schema markup',
            'Formspree forma ili drugi dogovoreni kontakt sustav',
            'Osnovna sigurnosna i performance priprema',
        ),
        'not_included' => array(
            'Shop funkcionalnost',
            'Veliki copywriting paket',
            'Mjesečno održavanje',
        ),
        'cta' => 'Želim Web Pro',
        'featured' => true,
    ),
    array(
        'id'          => 'brand-web',
        'label'       => 'Kompletan sustav',
        'title'       => 'Brand + Web System',
        'price'       => 'od 1.200 €',
        'price_note'  => 'web, vizualni sustav i digitalni materijali',
        'description' => 'Za biznise koji osim stranice trebaju i dosljedan vizualni identitet kroz web, social, print i osnovne poslovne materijale.',
        'best_for'    => 'Novi biznisi, rebrand, saloni, studiji, klubovi, eventi i uslužni brendovi.',
        'features'    => array(
            'Vizualni smjer i mini brand system',
            'Boje, tipografija i osnovna pravila korištenja',
            'Custom WordPress web',
            'UX/UI struktura i CTA logika',
            'Digitalni asseti za social media',
            'Osnovni print materijali po dogovoru',
            'SEO i GEO osnovna struktura',
            'Launch priprema',
        ),
        'not_included' => array(
            'Velika brand knjiga',
            'Produkcija fotografija',
            'Plaćeno oglašavanje',
        ),
        'cta' => 'Želim Brand + Web',
    ),
);

$mv_addons = array(
    array(
        'title' => 'Dodatna podstranica',
        'price' => 'od 80 €',
        'text'  => 'Za usluge, o nama, galeriju, cjenik, FAQ ili landing stranicu.',
    ),
    array(
        'title' => 'Mini vizualni identitet',
        'price' => 'od 250 €',
        'text'  => 'Logo smjer, boje, tipografija i osnovni vizualni elementi.',
    ),
    array(
        'title' => 'Social media paket',
        'price' => 'od 120 €',
        'text'  => 'Set objava, story vizuali, coveri ili launch materijali.',
    ),
    array(
        'title' => 'Print materijali',
        'price' => 'od 80 €',
        'text'  => 'Vizitka, letak, poster, cjenik ili jednostavni promo materijal.',
    ),
    array(
        'title' => 'Osnovni lokalni SEO setup',
        'price' => 'od 150 €',
        'text'  => 'Meta podaci, lokalni keywordi, schema i struktura za Google.',
    ),
    array(
        'title' => 'Priprema za shop',
        'price' => 'po dogovoru',
        'text'  => 'Arhitektura za WooCommerce, EDD, digitalne proizvode ili katalog.',
    ),
);

$mv_pricing_faq = array(
    array(
        'question' => 'Zašto su cijene prikazane kao “od”?',
        'answer'   => 'Zato što stvarna cijena ovisi o količini sadržaja, broju sekcija, postojećim materijalima, funkcionalnostima i roku. Cjenik daje realan početni okvir, a konačna ponuda se definira nakon kratkog razgovora.',
    ),
    array(
        'question' => 'Moram li platiti sve odjednom?',
        'answer'   => 'Ne nužno. Za veće projekte moguće je dogovoriti plaćanje u fazama, najčešće avans za početak i ostatak prije objave stranice.',
    ),
    array(
        'question' => 'Što ako još nemam tekstove i fotografije?',
        'answer'   => 'Možemo krenuti od strukture i osnovnog sadržaja. Ako nemaš profesionalne fotografije, mogu predložiti privremeno rješenje, ali za najbolji rezultat uvijek preporučujem stvarne slike biznisa.',
    ),
    array(
        'question' => 'Je li hosting uključen?',
        'answer'   => 'Hosting i domena najčešće nisu uključeni u cijenu izrade jer ovise o davatelju usluge. Mogu pomoći oko odabira, postavljanja i tehničke pripreme.',
    ),
    array(
        'question' => 'Može li se kasnije dodati shop?',
        'answer'   => 'Da. Stranicu možemo od početka postaviti tako da kasnije podrži WooCommerce, Easy Digital Downloads, digitalne proizvode ili katalog.',
    ),
    array(
        'question' => 'Dobivam li pristup WordPressu?',
        'answer'   => 'Da. Nakon objave možeš dobiti pristup WordPress administraciji i osnovne upute za uređivanje sadržaja, ovisno o dogovoru.',
    ),
);

$mv_meta_description = 'Cjenik Mavros Agency usluga za web dizajn, WordPress razvoj, UX/UI, branding, lokalni SEO i digitalne materijale za male biznise u Zagrebu i Hrvatskoj.';
$mv_keywords = array(
    'cjenik web dizajn Zagreb',
    'izrada web stranice cijena',
    'WordPress stranica cijena',
    'web dizajn za male biznise',
    'Mavros Agency cjenik',
    'branding cijena Zagreb',
    'lokalni SEO cijena',
);

$mv_schema_offers = array_map(
    static function ($package) {
        return array(
            '@type'       => 'Offer',
            'name'        => $package['title'],
            'description' => $package['description'],
            'price'       => preg_replace('/[^0-9]/', '', $package['price']) ?: '0',
            'priceCurrency' => 'EUR',
            'availability'  => 'https://schema.org/InStock',
            'itemOffered'   => array(
                '@type' => 'Service',
                'name'  => $package['title'],
            ),
        );
    },
    $mv_packages
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
    $mv_pricing_faq
);

$mv_schema = array(
    '@context' => 'https://schema.org',
    '@graph'   => array(
        array(
            '@type'       => 'WebPage',
            '@id'         => get_permalink() . '#webpage',
            'url'         => get_permalink(),
            'name'        => 'Cjenik web dizajna i WordPress usluga | Mavros Agency',
            'description' => $mv_meta_description,
            'inLanguage'  => 'hr-HR',
            'keywords'    => implode(', ', $mv_keywords),
        ),
        array(
            '@type'       => 'ProfessionalService',
            '@id'         => home_url('/#business'),
            'name'        => $mv_brand['name'],
            'url'         => $mv_brand['url'],
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
            ),
        ),
        array(
            '@type'           => 'OfferCatalog',
            '@id'             => get_permalink() . '#pricing',
            'name'            => 'Mavros Agency cjenik',
            'itemListElement' => $mv_schema_offers,
        ),
        array(
            '@type'      => 'FAQPage',
            '@id'        => get_permalink() . '#faq',
            'mainEntity' => $mv_schema_faq,
        ),
    ),
);

add_filter(
    'pre_get_document_title',
    static function () {
        return 'Cjenik web dizajna i WordPress usluga | Mavros Agency';
    }
);

add_action(
    'wp_head',
    static function () use ($mv_meta_description, $mv_keywords, $mv_schema) {
?>
    <meta name="description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta name="keywords" content="<?php echo esc_attr(implode(', ', $mv_keywords)); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Cjenik web dizajna i WordPress usluga | Mavros Agency">
    <meta property="og:description" content="<?php echo esc_attr($mv_meta_description); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cjenik web dizajna i WordPress usluga | Mavros Agency">
    <meta name="twitter:description" content="<?php echo esc_attr($mv_meta_description); ?>">

    <script type="application/ld+json">
        <?php echo wp_json_encode($mv_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
<?php
    },
    1
);

get_header();
?>

<main id="primary" class="mv-page mv-pricing-page" data-mv-page>

    <section class="mv-pricing-hero" id="cjenik">
        <div class="mv-container mv-pricing-hero__inner">
            <div class="mv-pricing-hero__copy mv-reveal">
                <p class="mv-eyebrow">Cjenik</p>

                <h1 class="mv-pricing-hero__title mv-split">
                    Cijene za web, vizualni sustav i digitalne materijale.
                </h1>

                <p>
                    Cijene su postavljene kao realan početni okvir. Svaki projekt se finalno procjenjuje prema opsegu, sadržaju, funkcionalnostima i roku, ali cilj je da odmah znaš u kojem se rangu nalaziš.
                </p>

                <div class="mv-pricing-hero__actions">
                    <a class="mv-btn mv-btn--primary" href="#pricing-contact">
                        Zatraži procjenu
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="mv-btn mv-btn--secondary" href="#paketi">
                        Pogledaj pakete
                    </a>
                </div>
            </div>

            <aside class="mv-pricing-hero__note mv-reveal" aria-label="Napomena o cijenama">
                <span>Važno</span>
                <p>
                    Ako nisi sigurna koji paket ima smisla, pošalji kratki opis. Prvi mockup ili audit može biti najbolji početak.
                </p>
            </aside>
        </div>
    </section>

    <section class="mv-pricing-packages" id="paketi" aria-labelledby="mv-pricing-packages-title">
        <div class="mv-container">
            <div class="mv-section-head mv-reveal">
                <p class="mv-eyebrow">Paketi</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-pricing-packages-title">
                    Od brzog prvog smjera do kompletnog web i brand sustava.
                </h2>

                <p>
                    Paketi nisu zaključane kutije. Služe kao početna struktura da brzo vidiš što ti treba i koliko okvirno može koštati.
                </p>
            </div>

            <div class="mv-pricing-grid">
                <?php foreach ($mv_packages as $package) : ?>
                    <article class="mv-price-card mv-reveal <?php echo !empty($package['featured']) ? 'is-featured' : ''; ?>">
                        <?php if (!empty($package['featured'])) : ?>
                            <span class="mv-price-card__badge">Preporuka</span>
                        <?php endif; ?>

                        <div class="mv-price-card__top">
                            <span class="mv-price-card__label">
                                <?php echo esc_html($package['label']); ?>
                            </span>

                            <h3>
                                <?php echo esc_html($package['title']); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($package['description']); ?>
                            </p>
                        </div>

                        <div class="mv-price-card__price">
                            <strong><?php echo esc_html($package['price']); ?></strong>
                            <span><?php echo esc_html($package['price_note']); ?></span>
                        </div>

                        <div class="mv-price-card__best">
                            <span>Najbolje za</span>
                            <p><?php echo esc_html($package['best_for']); ?></p>
                        </div>

                        <div class="mv-price-card__list">
                            <span>Uključeno</span>

                            <ul>
                                <?php foreach ($package['features'] as $feature) : ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="mv-price-card__list mv-price-card__list--muted">
                            <span>Nije uključeno</span>

                            <ul>
                                <?php foreach ($package['not_included'] as $item) : ?>
                                    <li><?php echo esc_html($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <a
                            class="mv-btn <?php echo !empty($package['featured']) ? 'mv-btn--primary' : 'mv-btn--secondary'; ?>"
                            href="#pricing-contact"
                            data-contact-intent="<?php echo esc_attr($package['cta']); ?>">
                            <?php echo esc_html($package['cta']); ?>
                            <span aria-hidden="true">↗</span>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="mv-pricing-addons" id="dodaci" aria-labelledby="mv-pricing-addons-title">
        <div class="mv-container">
            <div class="mv-pricing-addons__head mv-reveal">
                <p class="mv-eyebrow">Dodaci</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-pricing-addons-title">
                    Dodatne stvari koje često trebaju uz web.
                </h2>
            </div>

            <div class="mv-addons-grid">
                <?php foreach ($mv_addons as $addon) : ?>
                    <article class="mv-addon-card mv-reveal">
                        <h3><?php echo esc_html($addon['title']); ?></h3>
                        <strong><?php echo esc_html($addon['price']); ?></strong>
                        <p><?php echo esc_html($addon['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="mv-pricing-compare" id="usporedba" aria-labelledby="mv-pricing-compare-title">
        <div class="mv-container">
            <div class="mv-section-head mv-section-head--center mv-reveal">
                <p class="mv-eyebrow">Kako odlučiti</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-pricing-compare-title">
                    Ako ne znaš što odabrati, kreni od problema koji trenutno imaš.
                </h2>
            </div>

            <div class="mv-compare-grid">
                <article class="mv-compare-card mv-reveal">
                    <span>01</span>
                    <h3>Nemam web</h3>
                    <p>
                        Najčešće je dovoljan Web Start ili Web Pro, ovisno o tome trebaš li samo jasan prvi dojam ili ozbiljniji funnel.
                    </p>
                </article>

                <article class="mv-compare-card mv-reveal">
                    <span>02</span>
                    <h3>Imam staru stranicu</h3>
                    <p>
                        Kreni s auditom. Ako stranica ima dobru osnovu, možda ne treba sve raditi ispočetka.
                    </p>
                </article>

                <article class="mv-compare-card mv-reveal">
                    <span>03</span>
                    <h3>Treba mi i vizualni identitet</h3>
                    <p>
                        Tada ima smisla Brand + Web System, jer se web, social, print i logo smjer rade kao jedan sustav.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="mv-pricing-faq" id="pricing-faq" aria-labelledby="mv-pricing-faq-title">
        <div class="mv-container mv-pricing-faq__inner">
            <div class="mv-pricing-faq__copy mv-reveal">
                <p class="mv-eyebrow">FAQ</p>

                <h2 class="mv-section-title mv-tick-title" id="mv-pricing-faq-title">
                    Pitanja o cijeni, plaćanju i opsegu.
                </h2>
            </div>

            <div class="mv-faq" data-faq>
                <?php foreach ($mv_pricing_faq as $index => $item) : ?>
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

    <section class="mv-pricing-contact" id="pricing-contact" aria-labelledby="mv-pricing-contact-title">
        <div class="mv-container mv-pricing-contact__inner">
            <div class="mv-pricing-contact__copy mv-reveal">
                <p class="mv-eyebrow">Procjena projekta</p>

                <h2 class="mv-section-title" id="mv-pricing-contact-title">
                    Pošalji što trebaš i vratit ću ti realan okvir.
                </h2>

                <p>
                    Napiši imaš li web, trebaš li novu stranicu, redizajn, vizualni identitet ili samo audit. Ako imaš link, pošalji ga odmah.
                </p>

                <div class="mv-contact__links">
                    <a href="mailto:<?php echo esc_attr($mv_brand['email']); ?>">
                        <?php echo esc_html($mv_brand['email']); ?>
                    </a>

                    <a href="<?php echo esc_url($mv_brand['whatsapp']); ?>" target="_blank" rel="noopener">
                        WhatsApp: <?php echo esc_html($mv_brand['phone_label']); ?>
                    </a>
                </div>
            </div>

            <form
                class="mv-form mv-reveal"
                action="<?php echo esc_url($mv_brand['formspree']); ?>"
                method="POST"
                data-mv-form>
                <input type="hidden" name="_subject" value="Upit za cijenu s Mavros Agency cjenika">
                <input type="text" name="_gotcha" tabindex="-1" autocomplete="off" class="mv-hp-field" aria-hidden="true">

                <div class="mv-form__row">
                    <label for="pricing-name">Ime</label>
                    <input id="pricing-name" name="name" type="text" autocomplete="name" placeholder="Tvoje ime" required>
                </div>

                <div class="mv-form__row">
                    <label for="pricing-business">Biznis</label>
                    <input id="pricing-business" name="business" type="text" autocomplete="organization" placeholder="Naziv biznisa ili projekta">
                </div>

                <div class="mv-form__row">
                    <label for="pricing-email">Email</label>
                    <input id="pricing-email" name="email" type="email" autocomplete="email" placeholder="tvoj@email.com" required>
                </div>

                <div class="mv-form__row">
                    <label for="pricing-package">Paket koji te zanima</label>
                    <select id="pricing-package" name="package_interest" required>
                        <option value="">Odaberi opciju</option>
                        <?php foreach ($mv_packages as $package) : ?>
                            <option value="<?php echo esc_attr($package['title']); ?>">
                                <?php echo esc_html($package['title'] . ' | ' . $package['price']); ?>
                            </option>
                        <?php endforeach; ?>
                        <option value="Nisam sigurna">Nisam sigurna, trebam savjet</option>
                    </select>
                </div>

                <div class="mv-form__row">
                    <label for="pricing-message">Poruka</label>
                    <textarea id="pricing-message" name="message" placeholder="Napiši što radiš, imaš li postojeću stranicu i što želiš postići." required></textarea>
                </div>

                <button class="mv-btn mv-btn--primary mv-form__submit" type="submit">
                    Pošalji za procjenu
                    <span aria-hidden="true">↗</span>
                </button>

                <p class="mv-form__note" data-form-note>
                    Odgovor stiže što prije, najčešće unutar 24 sata. Podaci se koriste samo za odgovor na upit.
                </p>
            </form>
        </div>
    </section>

</main>

<?php
get_footer();
?>