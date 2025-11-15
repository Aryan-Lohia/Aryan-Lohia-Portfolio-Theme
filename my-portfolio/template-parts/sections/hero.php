<?php
/**
 * Hero Section
 * Converted from components/sections/hero-section.tsx
 * 
 * @package My_Portfolio
 */

// Get ACF fields with defaults
$hero_title = portfolio_get_field('hero_title', 'Aryan Lohia');
$hero_role = portfolio_get_field('hero_role', 'Event Management & Operations Lead');
$hero_subtitle = portfolio_get_field('hero_subtitle', 'The behind-the-scenes force who makes your event look effortless.');
$hero_description = portfolio_get_field('hero_description', 'With 4+ years in event operations, I orchestrate tech sessions and large-scale events with precision. I pre-visualize every moment from the first attendee through the final curtain—ensuring nothing\'s left to chance. Because great events don\'t just happen; they\'re executed flawlessly.');
$hero_image = portfolio_get_field('hero_image');
$hero_image_url = $hero_image ? $hero_image['url'] : get_template_directory_uri() . '/assets/images/professional-event-manager-portrait.jpg';

// Social media links
$linkedin_url = portfolio_get_field('linkedin_url', 'https://www.linkedin.com/in/aryan-lohia');
$instagram_url = portfolio_get_field('instagram_url', 'https://www.instagram.com/kaalrav/?hl=en');
$twitter_url = portfolio_get_field('twitter_url', '');
?>

<section class="relative min-h-screen w-full bg-black flex items-center justify-center px-4 overflow-hidden hero-section">
    <!-- Animated background elements -->
    <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 1000ms;"></div>
    
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fillRule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-repeat: repeat;"></div>
    
    <!-- Social Links - Top Right Corner -->
    <div class="absolute top-8 right-8 z-20 flex flex-col gap-4">
        <?php if ($linkedin_url) : ?>
            <a href="<?php echo esc_url($linkedin_url); ?>" 
               target="_blank" 
               rel="noopener noreferrer"
               class="group flex items-center justify-center w-12 h-12 bg-gray-900/80 backdrop-blur-sm border border-gray-700 rounded-full hover:border-yellow-400 hover:bg-yellow-400/10 transition-all duration-300 hover:scale-110"
               aria-label="LinkedIn Profile">
                <svg class="w-5 h-5 text-gray-300 group-hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>
        <?php endif; ?>
        
        <?php if ($instagram_url) : ?>
            <a href="<?php echo esc_url($instagram_url); ?>" 
               target="_blank" 
               rel="noopener noreferrer"
               class="group flex items-center justify-center w-12 h-12 bg-gray-900/80 backdrop-blur-sm border border-gray-700 rounded-full hover:border-yellow-400 hover:bg-yellow-400/10 transition-all duration-300 hover:scale-110"
               aria-label="Instagram Profile">
                <svg class="w-5 h-5 text-gray-300 group-hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
        <?php endif; ?>
        
        <?php if ($twitter_url) : ?>
            <a href="<?php echo esc_url($twitter_url); ?>" 
               target="_blank" 
               rel="noopener noreferrer"
               class="group flex items-center justify-center w-12 h-12 bg-gray-900/80 backdrop-blur-sm border border-gray-700 rounded-full hover:border-yellow-400 hover:bg-yellow-400/10 transition-all duration-300 hover:scale-110"
               aria-label="Twitter Profile">
                <svg class="w-5 h-5 text-gray-300 group-hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
        <?php endif; ?>
    </div>
    
    <div class="relative z-10 max-w-6xl mx-auto w-full">
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-16">
            <div class="w-full lg:w-1/2 hero-content">
                <!-- Main title -->
                <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight text-pretty text-left text-white">
                    <?php echo esc_html($hero_title); ?> <span class="text-white"><br/>
                    <span class="text-yellow-400"><?php echo esc_html($hero_role); ?></span></span>
                </h1>

                <!-- Subline -->
                <p class="text-lg md:text-xl text-gray-200 mb-4 font-light text-balance text-left">
                    <?php echo esc_html($hero_subtitle); ?>
                </p>

                <!-- Intro paragraph -->
                <p class="text-sm md:text-base text-gray-300 max-w-xl mb-8 leading-relaxed text-left">
                    <?php echo esc_html($hero_description); ?>
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 text-left">
                    <a href="#portfolio" class="px-6 py-2.5 bg-yellow-400 hover:bg-yellow-300 text-black font-semibold rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-yellow-400/50 hover:scale-105 w-fit text-sm">
                        View Portfolio
                    </a>
                    <a href="#cta" class="px-6 py-2.5 border-2 border-white text-white hover:bg-white hover:text-black font-semibold rounded-lg transition-all duration-300 w-fit text-sm">
                        Book Me
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-1/2 hero-image">
                <div class="relative mx-auto max-w-md aspect-square rounded-2xl overflow-hidden border-4 border-yellow-400 bg-gray-900 flex items-center justify-center shadow-2xl shadow-yellow-400/20 hover:shadow-yellow-400/40 transition-all duration-300">
                    <img src="<?php echo esc_url($hero_image_url); ?>" 
                         alt="<?php echo esc_attr($hero_title); ?> - Event Manager" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border border-yellow-400/50 rounded-full flex items-start justify-center p-2">
            <div class="w-1 h-2 bg-yellow-400 rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

