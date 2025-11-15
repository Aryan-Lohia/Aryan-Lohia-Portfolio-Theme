<?php
/**
 * Front Page Template
 * Maps to Next.js pages/index.js
 * 
 * @package My_Portfolio
 */

get_header();
?>

<main class="min-h-screen bg-black text-white">
    <?php 
    // All sections as per Next.js home page
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/timeline');
    get_template_part('template-parts/sections/portfolio');
    get_template_part('template-parts/sections/strengths');
    get_template_part('template-parts/sections/services');
    get_template_part('template-parts/sections/gallery');
    get_template_part('template-parts/sections/testimonials');
    get_template_part('template-parts/sections/cta');
    ?>
</main>

<?php get_footer(); ?>

