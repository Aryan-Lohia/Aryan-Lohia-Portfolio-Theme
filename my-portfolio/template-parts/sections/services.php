<?php
/**
 * Services Section
 * Converted from components/sections/services-section.tsx
 * 
 * @package My_Portfolio
 */

// Get services from ACF
$services = portfolio_get_field('services');

// Default services if ACF not set up
if (!$services) {
    $services = array(
        array('service_title' => 'Event Strategy & Planning', 'service_description' => 'End-to-end event conceptualization and meticulous planning that turns vision into reality', 'service_icon' => '📋'),
        array('service_title' => 'Stage & Technical Direction', 'service_description' => 'Flawless execution of complex technical requirements with precision and expertise', 'service_icon' => '🎬'),
        array('service_title' => 'Tech Session Hosting', 'service_description' => 'Engaging facilitation of technical talks and workshops that inspire and educate', 'service_icon' => '💻'),
        array('service_title' => 'Guest & Speaker Management', 'service_description' => 'Seamless coordination of high-profile guests ensuring perfect timing and comfort', 'service_icon' => '🎤'),
        array('service_title' => 'Brand Experience & Flow Design', 'service_description' => 'Creating memorable, coherent event experiences that leave lasting impressions', 'service_icon' => '✨'),
        array('service_title' => 'On-ground Operations & Team Control', 'service_description' => 'Real-time management and team coordination when execution matters most', 'service_icon' => '⚡')
    );
}
?>

<section class="relative py-24 px-4 bg-gray-900 overflow-hidden">
    <!-- Animated background accents -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-yellow-400/5 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-white/3 rounded-full blur-3xl animate-pulse" style="animation-delay: 1000ms;"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-yellow-400 text-sm font-bold tracking-wider uppercase border border-yellow-400/30 px-4 py-2 rounded-full">What I Offer</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Services
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Comprehensive event management solutions tailored to your needs
            </p>
        </div>

        <!-- Services grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($services as $index => $service) : 
                $title = is_array($service) ? $service['service_title'] : get_sub_field('service_title');
                $description = is_array($service) ? $service['service_description'] : get_sub_field('service_description');
                $icon = is_array($service) ? $service['service_icon'] : get_sub_field('service_icon');
                $color_class = $index % 2 === 0 ? 'from-yellow-400/20 to-yellow-400/5' : 'from-white/20 to-white/5';
            ?>
                <div class="service-card group relative p-8 rounded-2xl bg-gradient-to-br <?php echo $color_class; ?> backdrop-blur-sm border border-gray-800 hover:border-yellow-400/50 transition-all duration-500 cursor-pointer hover:scale-105 hover:shadow-2xl hover:shadow-yellow-400/10">
                    <!-- Glowing corner effect -->
                    <div class="absolute -top-px -right-px w-24 h-24 bg-gradient-to-bl from-yellow-400/30 via-yellow-400/10 to-transparent rounded-bl-full rounded-tr-2xl transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br <?php echo $color_class; ?> border-2 border-gray-700 group-hover:border-yellow-400 flex items-center justify-center text-3xl transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                            <?php echo $icon; ?>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 rounded-full bg-white/20 group-hover:bg-yellow-400 transition-all duration-300"></div>
                    </div>

                    <!-- Content -->
                    <h3 class="text-xl font-bold mb-3 transition-colors duration-300 text-white group-hover:text-yellow-400">
                        <?php echo esc_html($title); ?>
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        <?php echo esc_html($description); ?>
                    </p>

                    <!-- Hover indicator line -->
                    <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-yellow-400 via-white to-yellow-400 transition-all duration-500 rounded-b-2xl w-0 group-hover:w-full"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

