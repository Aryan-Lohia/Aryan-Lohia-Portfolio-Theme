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
?>

<section class="relative min-h-screen w-full bg-black flex items-center justify-center px-4 overflow-hidden hero-section">
    <!-- Animated background elements -->
    <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 1000ms;"></div>
    
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fillRule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-repeat: repeat;"></div>
    
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

