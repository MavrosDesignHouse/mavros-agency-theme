<?php

/**
 * Template Name: Velvet Needle Case Study
 * Template Post Type: page
 *
 * Custom case study template for /velvet-needle-case-study/.
 * Upload images to WordPress Media Library, copy their URLs,
 * and paste them into the $vn_images array below.
 *
 * @package Mavros_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

$vn_images = array(
    // Replace the empty strings with your WordPress Media Library URLs.
    'logo_black'    => '', // Velvet Needle logo on black
    'logo_white'    => '', // Velvet Needle logo on white
    'website_hero'  => '', // Website hero / landing preview
    'website_full'  => '', // Full homepage screenshot
    'merch'         => '', // T-shirt / tote / merch mockup
    'signage'       => '', // Illuminated sign mockup
    'stickers'      => '', // Sticker pack mockup
    'business_card' => '', // Business card mockup
);

if (!function_exists('mavros_vn_case_image')) {
    function mavros_vn_case_image($images, $key, $alt = '')
    {
        $src = isset($images[$key]) ? trim($images[$key]) : '';

        if (!empty($src)) {
            echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" loading="lazy" decoding="async">';
            return;
        }

        echo '<div class="vn-img-placeholder"><span>' . esc_html($alt) . '<br>Dodaj WP image URL u polje: ' . esc_html($key) . '</span></div>';
    }
}

get_header();
?>

<main id="primary" class="vn-case-study">


    <!-- ================= HERO ================= -->
    <header class="vn-hero">
        <div class="vn-hero-bg">
            <div class="vn-ghost">VELVET<br />NEEDLE</div>
            <div class="vn-laser" style="width:60%;top:30%;right:0;transform:rotate(-8deg)"></div>
            <div class="vn-laser" style="width:42%;top:72%;left:0;transform:rotate(6deg);background:linear-gradient(90deg,var(--vn-magenta),transparent)"></div>
            <div class="vn-hero-star vn-star spin"><svg style="width:100%;height:auto" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#CC0441" points="100,4 116,84 196,100 116,116 100,196 84,116 4,100 84,84"></polygon>
                    <polygon fill="#FF1B5E" opacity="0.55" points="100,30 108,92 170,100 108,108 100,170 92,108 30,100 92,92"></polygon>
                </svg></div>
        </div>
        <div class="vn-wrap vn-hero-inner">
            <div class="vn-ey" style="color:var(--vn-magenta)"><span class="n">CASE STUDY</span>  ·  TATTOO STUDIO BRAND</div>
            <h1>VELVET<br /><span class="l2">NEEDLE</span></h1>
            <div class="vn-hero-meta">
                <p class="vn-hero-sub">A tattoo studio identity built beyond the expected. Bold, editorial, premium.</p>
                <div class="vn-tags">
                    <span class="vn-tag on">Brand Identity</span>
                    <span class="vn-tag">Web Design</span>
                    <span class="vn-tag">Merch</span>
                    <span class="vn-tag">Environmental</span>
                    <span class="vn-tag">Art Direction</span>
                </div>
            </div>
            <div class="vn-scroll"><span class="bar"></span> Scroll to explore</div>
        </div>
    </header>


    <div class="vn-divider"></div>


    <!-- ================= OVERVIEW + CHALLENGE ================= -->
    <section class="vn-sec">
        <div class="vn-wrap vn-grid2">
            <div class="vn-rv">
                <div class="vn-ey"><span class="n">01</span> Overview</div>
                <h2 class="vn-h2">A studio<br />that breaks<br />the <span class="m">cliché.</span></h2>
                <p class="vn-lead">Velvet Needle is a conceptual tattoo studio brand built to challenge the visual clichés so often tied to the industry. Instead of leaning on generic gothic motifs, the identity combines bold typography, a magenta-black palette, and editorial composition to feel modern, expressive, and premium across every touchpoint, digital and physical.</p>
            </div>
            <div class="vn-rv">
                <div class="vn-ey"><span class="n">02</span> The Challenge</div>
                <p class="vn-body" style="font-size:18px;line-height:1.7;margin-bottom:34px">Create a tattoo identity that feels <strong>distinctive without falling into overused gothic or biker aesthetics.</strong> Keep the edge and intensity of tattoo culture, but translate it into a sharper, cleaner, more contemporary system that works across web, signage, merch, and print.</p>
                <dl class="vn-meta-list">
                    <div class="vn-meta-row">
                        <dt>Studio</dt>
                        <dd>Velvet Needle · Zagreb, Croatia</dd>
                    </div>
                    <div class="vn-meta-row">
                        <dt>Sector</dt>
                        <dd>Tattoo &amp; piercing studio</dd>
                    </div>
                    <div class="vn-meta-row">
                        <dt>Scope</dt>
                        <dd>Identity · Web · Merch · Signage · Print</dd>
                    </div>
                    <div class="vn-meta-row">
                        <dt>Role</dt>
                        <dd>Brand &amp; web design, art direction</dd>
                    </div>
                    <div class="vn-meta-row">
                        <dt>Year</dt>
                        <dd>2024</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= CONCEPT / DIRECTION ================= -->
    <section class="vn-sec">
        <div class="vn-wrap">
            <div class="vn-rv">
                <div class="vn-ey"><span class="n">03</span> Concept &amp; Direction</div>
                <p class="vn-statement">Tattoo culture, reframed through a bold <span class="m">editorial</span> lens.</p>
            </div>
            <div class="vn-vs vn-rv">
                <div class="no">
                    <h4>// Not this</h4>
                    <ul>
                        <li>Gothic / blackletter type</li>
                        <li>Skull-heavy imagery</li>
                        <li>Distressed grunge textures</li>
                        <li>Predictable dark cliché</li>
                    </ul>
                </div>
                <div class="yes">
                    <h4>// But this</h4>
                    <ul>
                        <li>Heavy condensed display type</li>
                        <li>Vivid magenta signature</li>
                        <li>Editorial, high-contrast layout</li>
                        <li>Modern, premium, recognizable</li>
                    </ul>
                </div>
            </div>
            <div class="vn-kw vn-rv">
                <span><b>01</b>Bold</span>
                <span><b>02</b>Editorial</span>
                <span><b>03</b>Modern</span>
                <span><b>04</b>Expressive</span>
                <span><b>05</b>Premium</span>
                <span><b>06</b>Personal</span>
                <span><b>07</b>Sharp</span>
                <span><b>08</b>Magnetic</span>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= LOGO SYSTEM ================= -->
    <section class="vn-sec">
        <div class="vn-wrap">
            <div class="vn-rv" style="max-width:720px">
                <div class="vn-ey"><span class="n">04</span> Logo System</div>
                <h2 class="vn-h2">The <span class="m">mark.</span></h2>
                <p class="vn-lead">Heavy condensed typography locked with a minimal tattoo-needle symbol. Attitude balanced with clarity. The result is bold, memorable, and versatile across digital, print, signage, and merch.</p>
            </div>
            <div class="vn-logos vn-rv">
                <div class="vn-logo-cell on-black"><span class="tag">Primary / on black</span><?php mavros_vn_case_image($vn_images, 'logo_black', 'Velvet Needle logo on black'); ?></div>
                <div class="vn-logo-cell on-white"><span class="tag">Inverse / on white</span><?php mavros_vn_case_image($vn_images, 'logo_white', 'Velvet Needle logo on white'); ?></div>
            </div>
            <div class="vn-logo-note vn-rv">
                <div>
                    <h5>Needle Icon</h5>
                    <p>The cartridge-needle drop works as a standalone graphic: a clean, ownable symbol.</p>
                </div>
                <div>
                    <h5>VN Star Badge</h5>
                    <p>Monogram paired with the magenta starburst for compact, stamp-style use.</p>
                </div>
                <div>
                    <h5>Lockups</h5>
                    <p>Stacked, horizontal, and circular badge variations cover every placement.</p>
                </div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= COLOR ================= -->
    <section class="vn-sec">
        <div class="vn-wrap">
            <div class="vn-rv" style="max-width:720px">
                <div class="vn-ey"><span class="n">05</span> Color Palette</div>
                <h2 class="vn-h2">One <span class="m">signature</span> colour.</h2>
                <p class="vn-lead">A vivid magenta carries the entire emotional weight of the brand. Paired with deep black and soft white, it builds a high-contrast identity that reads intense, modern, and instantly recognizable.</p>
            </div>
            <div class="vn-colors vn-rv">
                <div class="vn-sw mag"><span class="role">Primary</span><span class="name">Velvet<br />Magenta</span><span class="hex">#CC0441</span></div>
                <div class="vn-sw blk"><span class="role">Base</span><span class="name">Deep<br />Black</span><span class="hex">#08070A</span></div>
                <div class="vn-sw wht"><span class="role">Contrast</span><span class="name">Soft<br />White</span><span class="hex">#F4EFF1</span></div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= TYPOGRAPHY ================= -->
    <section class="vn-sec">
        <div class="vn-wrap">
            <div class="vn-rv" style="max-width:720px">
                <div class="vn-ey"><span class="n">06</span> Typography</div>
                <h2 class="vn-h2">Type that <span class="m">hits.</span></h2>
                <p class="vn-lead">Large condensed headlines create instant impact; clean supporting text keeps everything contemporary and legible; mono labels add an editorial, system-like structure.</p>
            </div>
            <div class="vn-type vn-rv">
                <div class="vn-type-row">
                    <div class="lab"><b>Display</b>Anton · Condensed Heavy</div>
                    <div>
                        <div class="vn-spec-display">EXPERT <em>TATTOOS</em> &amp; PIERCINGS</div>
                        <div class="vn-glyphs">AÁBCČĆDĐEFG · 0123456789 · &amp;?!</div>
                    </div>
                </div>
                <div class="vn-type-row">
                    <div class="lab"><b>Body</b>Archivo · 500–700</div>
                    <div>
                        <div class="vn-spec-body">Custom tattoos. Fine line precision. A premium studio experience built around you.</div>
                    </div>
                </div>
                <div class="vn-type-row">
                    <div class="lab"><b>Utility</b>Space Mono · Labels</div>
                    <div>
                        <div class="vn-spec-mono">PRECISION · ART · EXPRESSION · TRUE TO THE ART</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= GRAPHIC LANGUAGE ================= -->
    <section class="vn-sec">
        <div class="vn-wrap vn-graphic">
            <div class="vn-rv">
                <div class="vn-ey"><span class="n">07</span> Graphic Language</div>
                <h2 class="vn-h2">A system,<br />not a <span class="m">logo.</span></h2>
                <p class="vn-body" style="margin-top:24px;font-size:17px;line-height:1.7">The identity extends well beyond the mark: sharp magenta accents, oversized geometric star forms, layered linework, and bold framing build a visual system that feels energetic, expressive, and distinctly non-generic.</p>
                <div class="vn-gl-list">
                    <div><b>Starburst</b> the magenta signature mark</div>
                    <div><b>Lasers</b> angular high-energy line accents</div>
                    <div><b>Framing</b> bold cropping &amp; large black space</div>
                    <div><b>Overlays</b> magenta-toned tattoo imagery</div>
                </div>
            </div>
            <div class="vn-rv">
                <div class="vn-graphic-canvas">
                    <div class="vn-laser" style="width:80%;top:24%;left:-10%;transform:rotate(28deg)"></div>
                    <div class="vn-laser" style="width:70%;bottom:20%;right:-8%;transform:rotate(-18deg);background:linear-gradient(90deg,var(--vn-magenta),transparent)"></div>
                    <div class="vn-star spin" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:58%"><svg style="width:100%;height:auto" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <polygon fill="#CC0441" points="100,4 116,84 196,100 116,116 100,196 84,116 4,100 84,84"></polygon>
                            <polygon fill="#FF1B5E" opacity="0.55" points="100,30 108,92 170,100 108,108 100,170 92,108 30,100 92,92"></polygon>
                        </svg></div>
                    <div style="position:absolute;bottom:22px;left:24px;font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.2em;color:var(--vn-faint)">GRAPHIC ELEMENT / 01</div>
                </div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= WEBSITE ================= -->
    <section class="vn-sec">
        <div class="vn-wrap">
            <div class="vn-rv" style="max-width:760px">
                <div class="vn-ey"><span class="n">08</span> Website Design</div>
                <h2 class="vn-h2">Portfolio <span class="m">&amp;</span> conversion in one.</h2>
                <p class="vn-lead">The site works as both a portfolio and a booking tool. It showcases the studio's work, reinforces the brand atmosphere, and guides visitors toward booking with strong visual hierarchy and clear calls to action.</p>
            </div>
            <div class="vn-board full vn-rv" style="margin-top:30px">
                <?php mavros_vn_case_image($vn_images, 'website_hero', 'Velvet Needle website hero'); ?>
                <div class="vn-cap"><span>velvetneedle.studio · hero</span><span>Desktop · 1728px</span></div>
            </div>
            <div class="vn-split rev vn-rv" style="margin-top:90px">
                <div class="vn-frame">
                    <div class="vn-frame-bar"><i></i><i></i><i></i><span class="url">velvetneedle.studio</span></div>
                    <div class="vn-frame-scroll"><?php mavros_vn_case_image($vn_images, 'website_full', 'Velvet Needle full homepage'); ?></div>
                </div>
                <div>
                    <h2 class="vn-h2" style="font-size:clamp(30px,3.5vw,46px)">Built to <span class="m">book.</span></h2>
                    <ul class="vn-points">
                        <li><span>01</span> Strong first impression, full-bleed hero with magenta key visual</li>
                        <li><span>02</span> Work-first portfolio grid with artist tagging</li>
                        <li><span>03</span> Social proof &amp; live studio presence</li>
                        <li><span>04</span> Flash designs carousel for browsing</li>
                        <li><span>05</span> Clear, repeated booking CTA throughout</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= MERCH ================= -->
    <section class="vn-sec">
        <div class="vn-wrap vn-split">
            <div class="vn-board vn-rv"><?php mavros_vn_case_image($vn_images, 'merch', 'Velvet Needle merch, tee and tote'); ?></div>
            <div class="vn-rv">
                <div class="vn-ey"><span class="n">09</span> Merch</div>
                <h2 class="vn-h2">A <span class="m">wearable</span> brand.</h2>
                <p class="vn-body" style="margin-top:24px;font-size:17px;line-height:1.7">Merchandise pushes the identity into wearable assets, positioning Velvet Needle not just as a tattoo studio, but as a cultural brand with its own visual presence on the street.</p>
                <div class="vn-cap" style="margin-top:30px"><span>Tee · Tote</span><span>Apparel / 2024</span></div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= SIGNAGE ================= -->
    <section class="vn-sec">
        <div class="vn-wrap vn-split rev">
            <div class="vn-rv">
                <div class="vn-ey"><span class="n">10</span> Signage</div>
                <h2 class="vn-h2">Owns the <span class="m">street.</span></h2>
                <p class="vn-body" style="margin-top:24px;font-size:17px;line-height:1.7">Environmental branding plants the identity in physical space with a lit blade sign that makes the studio feel established, immersive, and instantly recognizable from the outside.</p>
                <div class="vn-cap" style="margin-top:30px"><span>Illuminated blade sign</span><span>Environmental / 2024</span></div>
            </div>
            <div class="vn-board vn-rv"><?php mavros_vn_case_image($vn_images, 'signage', 'Velvet Needle illuminated sign'); ?></div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= STICKERS + CARD ================= -->
    <section class="vn-sec">
        <div class="vn-wrap">
            <div class="vn-rv" style="max-width:720px">
                <div class="vn-ey"><span class="n">11</span> Sticker &amp; Print System</div>
                <h2 class="vn-h2">Small format,<br />big <span class="m">attitude.</span></h2>
                <p class="vn-lead">A collectible, community-oriented layer, built for packaging, studio surfaces, giveaways, and social culture. The business card carries the same system into the hand.</p>
            </div>
            <div class="vn-split vn-rv" style="margin-top:40px;align-items:stretch">
                <div class="vn-board"><?php mavros_vn_case_image($vn_images, 'stickers', 'Velvet Needle sticker pack'); ?><div class="vn-cap"><span>Sticker pack · 5 variations</span><span>Print / 2024</span></div>
                </div>
                <div class="vn-board"><?php mavros_vn_case_image($vn_images, 'business_card', 'Velvet Needle business card'); ?><div class="vn-cap"><span>Business card · front &amp; back</span><span>Print / 2024</span></div>
                </div>
            </div>
        </div>
    </section>


    <div class="vn-divider"></div>


    <!-- ================= CLOSING ================= -->
    <section class="vn-close">
        <div class="vn-wrap vn-rv">
            <div class="vn-star spin" style="display:inline-block;width:64px;color:var(--vn-magenta)"><svg style="width:100%;height:auto" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#CC0441" points="100,4 116,84 196,100 116,116 100,196 84,116 4,100 84,84"></polygon>
                    <polygon fill="#FF1B5E" opacity="0.55" points="100,30 108,92 170,100 108,108 100,170 92,108 30,100 92,92"></polygon>
                </svg></div>
            <h2>Velvet Needle turns tattoo culture into a <span class="m">bold, contemporary</span> visual experience.</h2>
            <div class="tagline">Bold · Personal · Modern</div>
            <div class="vn-barcode" id="vnBarcode"></div>
        </div>
    </section>


    <footer class="vn-foot vn-wrap">
        <div>Velvet Needle · Brand Identity &amp; Web Design</div>
        <div>Zagreb, Croatia</div>
        <div>Design by <b>Mavros Agency</b></div>
    </footer>
</main>

<?php
get_footer();
