<?php
/**
 * Portfolio Section
 * Converted from components/sections/portfolio-section.tsx
 * 
 * @package My_Portfolio
 */

// Get portfolio projects from ACF repeater
$projects = portfolio_get_field('portfolio_projects');

// Default projects if ACF not set up yet
if (!$projects) {
    $projects = array(
        array(
            'project_title' => 'TEDx SMIT 2023',
            'project_role' => 'Licensee & Main Organizer',
            'project_stats' => array(
                array('stat' => '300 paid attendees'),
                array('stat' => 'Celebrities & ISRO Deputy Chief'),
                array('stat' => 'Mazitar, Sikkim')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/tedx-conference-event.jpg',
            'project_link' => 'https://www.ted.com/tedx/events/55864'
        ),
        array(
            'project_title' => 'SMIT Global Alumni Meet 2023',
            'project_role' => 'President, SMIT Alumni Association',
            'project_stats' => array(
                array('stat' => '300 top alumni'),
                array('stat' => 'Courtyard by Marriott'),
                array('stat' => 'Bangalore')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/alumni-gathering-conference.jpg',
            'project_link' => 'https://www.smitalumni.in/events/event/310779.dz'
        ),
        array(
            'project_title' => 'Kaalrav 2024 – Cultural & Technical Fest',
            'project_role' => 'Head of Stage Ops & Celebrity Management',
            'project_stats' => array(
                array('stat' => 'Artists: Mantra, Twin Strings, Rajat Chauhan, DJ Aerro, M Sonic')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/music-festival-stage-performance.jpg',
            'project_link' => 'https://www.instagram.com/kaalrav/?hl=en'
        ),
        array(
            'project_title' => 'NEXIS School of Business',
            'project_role' => 'Lead Organizer (2025–Present)',
            'project_stats' => array(
                array('stat' => '100+ workshops'),
                array('stat' => '1000+ participants'),
                array('stat' => 'Siliguri, Dooars & Sikkim')
            ),
            'project_image' => get_template_directory_uri() . '/assets/images/business-workshop-training-seminar.jpg',
            'project_link' => 'https://nexisschool.com'
        )
    );
}
?>

<section id="portfolio" class="relative py-24 px-4 bg-gray-950 overflow-hidden">
    <!-- Animated accent elements -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-yellow-400 rounded-full blur-3xl opacity-10 animate-pulse"></div>
    <div class="absolute bottom-20 left-10 w-40 h-40 bg-white rounded-full blur-3xl opacity-5 animate-pulse" style="animation-delay: 700ms;"></div>
    
    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white animate-fade-in">
                Portfolio
                <span class="inline-block w-3 h-3 bg-yellow-400 rounded-full ml-2 animate-pulse"></span>
            </h2>
            <p class="text-gray-300 text-lg">Major events & initiatives that shaped the industry</p>
        </div>

        <!-- Grid of projects -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($projects as $project) : 
                $title = is_array($project) ? $project['project_title'] : get_sub_field('project_title');
                $role = is_array($project) ? $project['project_role'] : get_sub_field('project_role');
                $stats = is_array($project) ? $project['project_stats'] : get_sub_field('project_stats');
                $image = is_array($project) ? $project['project_image'] : get_sub_field('project_image');
                $link = is_array($project) ? $project['project_link'] : get_sub_field('project_link');
                
                $image_url = is_array($image) ? $image['url'] : $image;
            ?>
                <div class="group relative overflow-hidden rounded-xl border border-gray-700 bg-gray-900/50 backdrop-blur-sm hover:border-yellow-400/50 transition-all duration-300 cursor-pointer hover:shadow-lg hover:shadow-yellow-400/10">
                    <!-- Image -->
                    <div class="relative h-64 overflow-hidden bg-gray-800">
                        <img src="<?php echo esc_url($image_url); ?>" 
                             alt="<?php echo esc_attr($title); ?>" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-6 relative z-10">
                        <h3 class="text-2xl font-bold mb-2 text-white"><?php echo esc_html($title); ?></h3>
                        <p class="text-gray-300 font-medium mb-4"><?php echo esc_html($role); ?></p>

                        <!-- Stats -->
                        <div class="space-y-2 mb-4">
                            <?php if ($stats) : 
                                foreach ($stats as $stat_item) : 
                                    $stat = is_array($stat_item) ? $stat_item['stat'] : $stat_item;
                            ?>
                                <div class="flex items-center text-gray-400 text-sm">
                                    <span class="w-1.5 h-1.5 bg-gray-500 rounded-full mr-2"></span>
                                    <?php echo esc_html($stat); ?>
                                </div>
                            <?php endforeach; endif; ?>
                        </div>

                        <!-- Hover effect -->
                        <?php if ($link) : ?>
                            <div class="project-link">
                                <a href="<?php echo esc_url($link); ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer"
                                   class="font-semibold hover:text-yellow-400 transition-colors text-sm text-white inline-flex items-center gap-2 group">
                                    View Details 
                                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

