/**
 * Animations for Portfolio Homepage
 * This script handles all animations for sections and timeline elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Section animations
    const sections = document.querySelectorAll('section');
    
    function checkSections() {
        const triggerBottom = window.innerHeight * 0.85;
        
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            
            if (sectionTop < triggerBottom) {
                section.classList.add('appear');
            }
        });
    }
    
    // Timeline item animations
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    function checkTimeline() {
        const triggerBottom = window.innerHeight * 0.8;
        
        timelineItems.forEach(item => {
            const itemTop = item.getBoundingClientRect().top;
            
            if (itemTop < triggerBottom) {
                item.classList.add('appear');
            }
        });
    }
    
    // Add floating icons to hero section
    function addFloatingIcons() {
        const heroSection = document.querySelector('.hero');
        if (heroSection) {
            const icons = [
                'fab fa-laravel',
                'fab fa-vuejs',
                'fas fa-code',
                'fas fa-laptop-code',
                'fas fa-database',
                'fas fa-server'
            ];
            
            for (let i = 0; i < 6; i++) {
                const iconElement = document.createElement('i');
                iconElement.className = `${icons[i]} floating-icon floating-icon-${i+1}`;
                heroSection.appendChild(iconElement);
            }
        }
    }
    
    // Initialize all animations
    function initAnimations() {
        addFloatingIcons();
        checkSections();
        checkTimeline();
    }
    
    // Add event listeners
    window.addEventListener('scroll', checkSections);
    window.addEventListener('scroll', checkTimeline);
    
    // Add scroll event to handle floating icons
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const heroHeight = document.querySelector('.hero')?.offsetHeight || 0;
        
        // Fade out floating icons as user scrolls down
        const floatingIcons = document.querySelectorAll('.floating-icon');
        if (floatingIcons.length > 0 && heroHeight > 0) {
            floatingIcons.forEach(icon => {
                const opacity = Math.max(0.15 - (scrollPosition / heroHeight) * 0.3, 0);
                icon.style.opacity = opacity;
            });
        }
    });
    
    // Run on initial load
    initAnimations();
}); 