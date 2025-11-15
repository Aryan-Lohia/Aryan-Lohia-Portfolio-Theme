<?php
/**
 * Testimonials Section
 * Converted from components/sections/testimonials-section.tsx
 * 
 * @package My_Portfolio
 */

// Get testimonials from ACF
$testimonials = portfolio_get_field('testimonials');

// Default testimonials if ACF not set up
if (!$testimonials) {
    $testimonials = array(
        array(
            'testimonial_name' => 'Prof. Dr. G L Sharma',
            'testimonial_role' => 'Director',
            'testimonial_company' => 'Sikkim Manipal Institute of Technology',
            'testimonial_quote' => "Aryan's vision transformed TEDx into an unforgettable experience. Their attention to detail is unmatched."
        ),
        array(
            'testimonial_name' => 'Prof. Dr. N K Bhattacharya',
            'testimonial_role' => 'Faculty Head',
            'testimonial_company' => 'SMIT Alumni Association',
            'testimonial_quote' => 'The alumni meet was seamlessly executed. Aryan managed everything with calm precision.'
        ),
        array(
            'testimonial_name' => 'Namrata Parbat',
            'testimonial_role' => 'Student Council President',
            'testimonial_company' => 'Kaalrav Festival',
            'testimonial_quote' => 'Working with Aryan on Kaalrav was incredible. He is a born manager.'
        ),
        array(
            'testimonial_name' => 'Ritesh Agarwal',
            'testimonial_role' => 'Founder, Director',
            'testimonial_company' => 'NEXIS School of Business',
            'testimonial_quote' => 'Aryan helped scaled NEXIS from an idea to impact. Truly exceptional leadership.'
        )
    );
}
?>

<section class="relative py-24 px-4 bg-gray-900">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">Testimonials</h2>
            <p class="text-gray-300 text-lg">What people say about working with Aryan</p>
        </div>

        <!-- Testimonial carousel -->
        <div class="max-w-3xl mx-auto">
            <div class="relative bg-gray-800/50 rounded-2xl p-8 md:p-12 border border-gray-700 min-h-64 flex flex-col justify-center testimonial-container">
                <?php foreach ($testimonials as $index => $testimonial) : 
                    $name = is_array($testimonial) ? $testimonial['testimonial_name'] : get_sub_field('testimonial_name');
                    $role = is_array($testimonial) ? $testimonial['testimonial_role'] : get_sub_field('testimonial_role');
                    $company = is_array($testimonial) ? $testimonial['testimonial_company'] : get_sub_field('testimonial_company');
                    $quote = is_array($testimonial) ? $testimonial['testimonial_quote'] : get_sub_field('testimonial_quote');
                    $active = $index === 0 ? 'active' : '';
                ?>
                    <div class="testimonial-item <?php echo $active; ?>" data-index="<?php echo $index; ?>" style="<?php echo $index === 0 ? '' : 'display:none;'; ?>">
                        <!-- Quote mark -->
                        <div class="text-6xl text-gray-700/40 mb-4">"</div>

                        <!-- Testimonial text -->
                        <p class="text-xl md:text-2xl font-light text-white mb-8 leading-relaxed">
                            <?php echo esc_html($quote); ?>
                        </p>

                        <!-- Author info -->
                        <div class="flex items-center gap-4">
                            <div>
                                <p class="font-semibold text-white"><?php echo esc_html($name); ?></p>
                                <p class="text-sm text-gray-400"><?php echo esc_html($role); ?>, <?php echo esc_html($company); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Navigation dots -->
                <div class="flex gap-2 mt-8 justify-center">
                    <?php foreach ($testimonials as $index => $testimonial) : ?>
                        <button onclick="switchTestimonial(<?php echo $index; ?>)" 
                                class="testimonial-dot w-2 h-2 rounded-full transition-all duration-300 <?php echo $index === 0 ? 'bg-gray-400 w-8' : 'bg-gray-600 hover:bg-gray-500'; ?>" 
                                data-index="<?php echo $index; ?>">
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

