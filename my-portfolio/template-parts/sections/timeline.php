<?php
/**
 * Timeline Section
 * Converted from components/sections/timeline-section.tsx
 * 
 * @package My_Portfolio
 */

// Get timeline events from ACF
$events = portfolio_get_field('timeline_events');

// Default events if ACF not set up
if (!$events) {
    $events = array(
        array(
            'event_title' => 'Early Event Involvement',
            'event_role' => 'Event Coordinator',
            'event_impact' => 'Started journey in event management, building foundational skills in operations and logistics.',
            'event_image' => get_template_directory_uri() . '/assets/images/early-event-coordination.jpg',
            'event_year' => '2020'
        ),
        array(
            'event_title' => 'TEDx SMIT 2023',
            'event_role' => 'Lead Organizer & Licensee',
            'event_impact' => 'Brought TEDx to Sikkim, managing 300+ attendees with celebrity speakers and ISRO officials.',
            'event_image' => get_template_directory_uri() . '/assets/images/tedx-event-conference.jpg',
            'event_year' => '2023'
        ),
        array(
            'event_title' => 'Stage Ops & Celebrity Management',
            'event_role' => 'Head of Operations',
            'event_impact' => 'Managed complex logistics for high-profile speakers and performers at scale.',
            'event_image' => get_template_directory_uri() . '/assets/images/stage-operations-event-management.jpg',
            'event_year' => '2023'
        ),
        array(
            'event_title' => 'NEXIS School of Business',
            'event_role' => 'Lead Organizer',
            'event_impact' => '100+ workshops across Siliguri, Dooars & Sikkim, impacting 1000+ participants.',
            'event_image' => get_template_directory_uri() . '/assets/images/business-workshop-seminar.jpg',
            'event_year' => '2024-2025'
        )
    );
}
?>

<section id="timeline" class="relative py-24 px-4 bg-black">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">Journey & Story</h2>
            <p class="text-gray-300 text-lg">From early involvement to leading 1000+ person events</p>
        </div>

        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-gray-400 to-gray-700"></div>

            <!-- Events -->
            <div class="space-y-12">
                <?php foreach ($events as $index => $event) : 
                    $title = is_array($event) ? $event['event_title'] : get_sub_field('event_title');
                    $role = is_array($event) ? $event['event_role'] : get_sub_field('event_role');
                    $impact = is_array($event) ? $event['event_impact'] : get_sub_field('event_impact');
                    $image = is_array($event) ? $event['event_image'] : get_sub_field('event_image');
                    $year = is_array($event) ? $event['event_year'] : get_sub_field('event_year');
                    
                    $image_url = is_array($image) ? $image['url'] : $image;
                    $is_left = $index % 2 === 0;
                ?>
                    <div class="timeline-event" data-event-id="<?php echo $index; ?>">
                        <div class="flex flex-col <?php echo $is_left ? 'md:flex-row' : 'md:flex-row-reverse'; ?> gap-8 items-center">
                            <!-- Content -->
                            <div class="flex-1">
                                <div class="bg-gray-900 border border-gray-700 rounded-xl p-6 backdrop-blur-sm hover:border-gray-600 transition-colors">
                                    <div class="text-gray-400 font-semibold text-sm mb-2"><?php echo esc_html($year); ?></div>
                                    <h3 class="text-2xl font-bold mb-2 text-white"><?php echo esc_html($title); ?></h3>
                                    <p class="text-gray-200 font-medium mb-3"><?php echo esc_html($role); ?></p>
                                    <p class="text-gray-300 leading-relaxed"><?php echo esc_html($impact); ?></p>
                                </div>
                            </div>

                            <!-- Timeline dot -->
                            <div class="flex-shrink-0">
                                <div class="w-6 h-6 bg-black rounded-full border-4 border-black shadow-lg shadow-black/50"></div>
                            </div>

                            <!-- Image -->
                            <div class="flex-1">
                                <div class="rounded-xl overflow-hidden border border-gray-700 h-64 bg-gray-900">
                                    <img src="<?php echo esc_url($image_url); ?>" 
                                         alt="<?php echo esc_attr($title); ?>" 
                                         class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

