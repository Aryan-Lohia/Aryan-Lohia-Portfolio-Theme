<?php
/**
 * Strengths Section
 * Converted from components/sections/strengths-section.tsx
 * 
 * @package My_Portfolio
 */

// Get strengths from ACF
$strengths = portfolio_get_field('strengths');

// Default strengths if ACF not set up
if (!$strengths) {
    $strengths = array(
        array('strength_number' => '01', 'strength_title' => 'Mental Event Pre-visualization', 'strength_description' => 'I see the entire event unfold before it happens—every detail, every moment mapped out.'),
        array('strength_number' => '02', 'strength_title' => 'Crisis-proof Planning', 'strength_description' => 'Anticipate problems before they arise with backup plans for every scenario.'),
        array('strength_number' => '03', 'strength_title' => 'Stage & Technical Operations', 'strength_description' => 'Seamless coordination of lighting, sound, and stage elements for flawless execution.'),
        array('strength_number' => '04', 'strength_title' => 'Guest & Celebrity Handling', 'strength_description' => 'White-glove treatment ensuring VIP comfort and perfect timing for every appearance.'),
        array('strength_number' => '05', 'strength_title' => 'High-pressure Calmness', 'strength_description' => 'Stay composed when stakes are highest—calm leadership in chaos.'),
        array('strength_number' => '06', 'strength_title' => 'On-ground Team Leadership', 'strength_description' => 'Rally teams with clear direction, empowering everyone to deliver their best.')
    );
}
?>

<section class="relative py-24 px-4 bg-black overflow-hidden">
    <!-- Animated background accents -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-400/5 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-white/3 rounded-full blur-3xl animate-pulse" style="animation-delay: 1000ms;"></div>
    
    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-yellow-400 text-sm font-bold tracking-wider uppercase border border-yellow-400/30 px-4 py-2 rounded-full">Core Strengths</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Why Teams Trust Me
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                The skills that transform good events into unforgettable experiences
            </p>
        </div>

        <!-- Strengths grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($strengths as $index => $strength) : 
                $number = is_array($strength) ? $strength['strength_number'] : get_sub_field('strength_number');
                $title = is_array($strength) ? $strength['strength_title'] : get_sub_field('strength_title');
                $description = is_array($strength) ? $strength['strength_description'] : get_sub_field('strength_description');
            ?>
                <div class="strength-card group relative p-8 rounded-2xl border border-gray-800 bg-gradient-to-br from-gray-900/80 to-gray-950/80 hover:border-yellow-400/50 transition-all duration-500 hover:shadow-2xl hover:shadow-yellow-400/10 cursor-pointer backdrop-blur-sm">
                    <!-- Corner accent -->
                    <div class="corner-accent absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-yellow-400/20 to-transparent rounded-bl-3xl rounded-tr-2xl transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                    
                    <!-- Number -->
                    <div class="flex items-start justify-between mb-4">
                        <span class="text-6xl font-bold transition-colors duration-300 text-gray-800 group-hover:text-yellow-400">
                            <?php echo esc_html($number); ?>
                        </span>
                        <div class="w-2 h-2 rounded-full transition-all duration-300 bg-white/20 group-hover:bg-yellow-400 group-hover:scale-150"></div>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        <?php echo esc_html($title); ?>
                    </h3>

                    <!-- Description -->
                    <p class="text-sm text-gray-400 leading-relaxed transition-all duration-300 group-hover:text-gray-300">
                        <?php echo esc_html($description); ?>
                    </p>

                    <!-- Bottom line accent -->
                    <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-yellow-400 to-white transition-all duration-500 w-0 group-hover:w-full"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

