/**
 * Main Theme JavaScript
 * Converted from Next.js client-side functionality
 * 
 * @package My_Portfolio
 */

(function() {
    'use strict';

    // ===== Sticky Navbar Functionality =====
    function initStickyNavbar() {
        const navbar = document.getElementById('sticky-navbar');
        if (!navbar) return;

        function handleScroll() {
            const scrollPosition = window.scrollY;
            const shouldShow = scrollPosition > window.innerHeight * 0.8;
            
            if (shouldShow) {
                navbar.classList.remove('-translate-y-full', 'opacity-0');
                navbar.classList.add('translate-y-0', 'opacity-100');
            } else {
                navbar.classList.add('-translate-y-full', 'opacity-0');
                navbar.classList.remove('translate-y-0', 'opacity-100');
            }
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Initial check
    }

    // ===== Hero Section Fade-in Animation =====
    function initHeroAnimation() {
        const heroContent = document.querySelector('.hero-content');
        const heroImage = document.querySelector('.hero-image');
        
        if (heroContent || heroImage) {
            setTimeout(() => {
                if (heroContent) {
                    heroContent.classList.add('opacity-100', 'translate-y-0');
                    heroContent.classList.remove('opacity-0', 'translate-y-10');
                }
                if (heroImage) {
                    heroImage.classList.add('opacity-100', 'translate-y-0');
                    heroImage.classList.remove('opacity-0', 'translate-y-10');
                }
            }, 100);
        }
    }

    // ===== Timeline Intersection Observer =====
    function initTimelineObserver() {
        const timelineEvents = document.querySelectorAll('.timeline-event');
        if (timelineEvents.length === 0) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        }, { threshold: 0.3 });

        timelineEvents.forEach(event => {
            event.classList.add('transform', 'transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
            observer.observe(event);
        });
    }

    // ===== Testimonial Carousel =====
    let currentTestimonialIndex = 0;
    let testimonialAutoplayInterval = null;

    function switchTestimonial(index) {
        const items = document.querySelectorAll('.testimonial-item');
        const dots = document.querySelectorAll('.testimonial-dot');
        
        if (items.length === 0) return;

        // Hide all items
        items.forEach(item => item.style.display = 'none');
        
        // Show selected item
        if (items[index]) {
            items[index].style.display = 'block';
        }

        // Update dots
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-gray-400', 'w-8');
                dot.classList.remove('bg-gray-600');
            } else {
                dot.classList.remove('bg-gray-400', 'w-8');
                dot.classList.add('bg-gray-600');
            }
        });

        currentTestimonialIndex = index;
    }

    function initTestimonialCarousel() {
        const testimonialItems = document.querySelectorAll('.testimonial-item');
        if (testimonialItems.length === 0) return;

        // Auto-play
        testimonialAutoplayInterval = setInterval(() => {
            const nextIndex = (currentTestimonialIndex + 1) % testimonialItems.length;
            switchTestimonial(nextIndex);
        }, 5000);

        // Stop autoplay on manual interaction
        const dots = document.querySelectorAll('.testimonial-dot');
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(testimonialAutoplayInterval);
            });
        });
    }

    // Make switchTestimonial available globally for onclick handlers
    window.switchTestimonial = switchTestimonial;

    // ===== Portfolio Hover Effects =====
    function initPortfolioHoverEffects() {
        const projectCards = document.querySelectorAll('.group');
        projectCards.forEach(card => {
            const link = card.querySelector('.project-link');
            if (link) {
                card.addEventListener('mouseenter', () => {
                    link.classList.add('translate-y-0', 'opacity-100');
                    link.classList.remove('translate-y-4', 'opacity-0');
                });
                card.addEventListener('mouseleave', () => {
                    link.classList.add('translate-y-4', 'opacity-0');
                    link.classList.remove('translate-y-0', 'opacity-100');
                });
            }
        });
    }

    // ===== Initialize Everything on DOM Ready =====
    function init() {
        initStickyNavbar();
        initHeroAnimation();
        initTimelineObserver();
        initTestimonialCarousel();
        initPortfolioHoverEffects();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();

