<?php
/**
 * Front page template.
 *
 * @package Mavros_Agency
 */

get_header();

get_template_part( 'template-parts/sections/hero' );
get_template_part( 'template-parts/sections/problem' );
get_template_part( 'template-parts/sections/services' );
get_template_part( 'template-parts/sections/bundles' );
get_template_part( 'template-parts/sections/portfolio' );
get_template_part( 'template-parts/sections/process' );
get_template_part( 'template-parts/sections/why-mavros' );
get_template_part( 'template-parts/sections/pricing' );
get_template_part( 'template-parts/sections/faq' );
get_template_part( 'template-parts/sections/contact' );

get_footer();
