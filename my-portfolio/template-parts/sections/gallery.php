<?php
/**
 * Gallery Section
 * Converted from components/sections/gallery-section.tsx
 * 
 * @package My_Portfolio
 */

// Get gallery images from ACF
$gallery = portfolio_get_field('gallery_images');

// Default gallery if ACF not set up
if (!$gallery) {
    $base_url = get_template_directory_uri() . '/assets/images/';
    $gallery = array(
        array('id' => 1, 'url' => $base_url . 'tedx-conference-event.jpg', 'alt' => 'TEDx SMIT Conference Stage', 'tall' => true),
        array('id' => 2, 'url' => $base_url . 'alumni-gathering-conference.jpg', 'alt' => 'Alumni Meet Gathering', 'tall' => false),
        array('id' => 3, 'url' => $base_url . 'music-festival-stage-performance.jpg', 'alt' => 'Kaalrav Festival Stage', 'tall' => true),
        array('id' => 4, 'url' => $base_url . 'business-workshop-seminar.jpg', 'alt' => 'NEXIS Workshop Session', 'tall' => false),
        array('id' => 5, 'url' => $base_url . 'business-workshop-training-seminar.jpg', 'alt' => 'Business Training', 'tall' => false),
        array('id' => 6, 'url' => $base_url . 'stage-operations-event-management.jpg', 'alt' => 'Stage Operations', 'tall' => true),
        array('id' => 7, 'url' => $base_url . 'tedx-event-conference.jpg', 'alt' => 'TEDx Event Setup', 'tall' => false),
        array('id' => 8, 'url' => $base_url . 'early-event-coordination.jpg', 'alt' => 'Event Coordination', 'tall' => false),
    );
}
?>

<section class="relative py-24 px-4 bg-black overflow-hidden">
    <!-- Animated background accents -->
    <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-yellow-400/5 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-1/3 left-1/4 w-80 h-80 bg-white/3 rounded-full blur-3xl animate-pulse" style="animation-delay: 1000ms;"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="text-yellow-400 text-sm font-bold tracking-wider uppercase border border-yellow-400/30 px-4 py-2 rounded-full">Visual Stories</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                Gallery
            </h2>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Behind the scenes and spotlight moments from events that made an impact
            </p>
        </div>

        <!-- Modern masonry-style gallery grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-[200px]">
            <?php foreach ($gallery as $index => $item) : 
                $image_url = is_array($item) ? (isset($item['url']) ? $item['url'] : $item['sizes']['large']) : wp_get_attachment_image_url($item, 'large');
                $alt = is_array($item) ? (isset($item['alt']) ? $item['alt'] : '') : get_post_meta($item, '_wp_attachment_image_alt', true);
                $tall = is_array($item) && isset($item['tall']) ? $item['tall'] : ($index % 3 === 0);
                $row_span = $tall ? 'row-span-2' : 'row-span-1';
            ?>
                <div class="gallery-item group relative rounded-2xl overflow-hidden border-2 border-gray-800 hover:border-yellow-400 cursor-pointer transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl hover:shadow-yellow-400/20 <?php echo $row_span; ?>">
                    <img src="<?php echo esc_url($image_url); ?>" 
                         alt="<?php echo esc_attr($alt); ?>" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300"></div>
                    
                    <!-- Hover content -->
                    <div class="absolute inset-0 flex items-center justify-center transition-all duration-300 opacity-0 group-hover:opacity-100">
                        <div class="text-center transform transition-transform duration-300 group-hover:scale-110">
                            <div class="w-12 h-12 mx-auto mb-2 rounded-full bg-yellow-400/20 backdrop-blur-sm border-2 border-yellow-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                            <p class="text-white text-xs font-semibold"><?php echo esc_html($alt); ?></p>
                        </div>
                    </div>

                    <!-- Corner accent -->
                    <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-bl from-yellow-400/40 to-transparent transition-opacity duration-300 opacity-0 group-hover:opacity-100"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom CTA -->
        <div class="mt-16 text-center">
            <p class="text-gray-400 mb-6">Want to see more from our events?</p>
            <a href="https://www.instagram.com/kaalrav/?hl=en" 
               target="_blank" 
               rel="noopener noreferrer"
               class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-yellow-400 to-white text-black font-semibold rounded-lg hover:shadow-lg hover:shadow-yellow-400/50 transition-all duration-300 hover:scale-105">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                Follow on Instagram
            </a>
        </div>
    </div>
</section>

