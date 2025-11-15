<?php
/**
 * Sticky Navbar Component
 * Converted from components/sticky-navbar.tsx
 * 
 * @package My_Portfolio
 */
?>

<nav id="sticky-navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 -translate-y-full opacity-0">
    <div class="bg-black/80 backdrop-blur-md border-b border-yellow-400/20 shadow-lg shadow-black/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo/Name -->
                <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="flex items-center space-x-2 group">
                    <span class="text-xl font-bold text-white group-hover:text-yellow-400 transition-colors">
                        <?php bloginfo('name'); ?>
                    </span>
                    <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                </button>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <button onclick="document.getElementById('portfolio').scrollIntoView({ behavior: 'smooth' })" 
                            class="text-gray-300 hover:text-yellow-400 transition-colors text-sm font-medium">
                        Portfolio
                    </button>
                    <button onclick="document.getElementById('timeline').scrollIntoView({ behavior: 'smooth' })" 
                            class="text-gray-300 hover:text-yellow-400 transition-colors text-sm font-medium">
                        Experience
                    </button>
                    <button onclick="document.getElementById('cta').scrollIntoView({ behavior: 'smooth' })" 
                            class="text-gray-300 hover:text-yellow-400 transition-colors text-sm font-medium">
                        Contact
                    </button>
                </div>

                <!-- CTA Button -->
                <div class="flex items-center space-x-4">
                    <?php 
                    $whatsapp_number = portfolio_get_field('cta_whatsapp_number', '917864955155');
                    $whatsapp_link = "https://api.whatsapp.com/send?phone={$whatsapp_number}&text=Hi%20Aryan!%20I%27d%20like%20to%20discuss%20an%20event%20opportunity.";
                    ?>
                    <a href="<?php echo esc_url($whatsapp_link); ?>" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="hidden sm:flex items-center gap-2 px-4 py-2 bg-yellow-400 hover:bg-yellow-300 text-black font-semibold rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-yellow-400/30 hover:scale-105 text-sm">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Let's Talk
                    </a>
                    
                    <!-- Mobile menu button -->
                    <button onclick="document.getElementById('cta').scrollIntoView({ behavior: 'smooth' })" 
                            class="md:hidden p-2 text-yellow-400 hover:text-yellow-300 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Yellow accent line -->
    <div class="h-0.5 bg-gradient-to-r from-transparent via-yellow-400 to-transparent"></div>
</nav>

