document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const navContainer = document.querySelector('.nav-container');
    const navLinks = document.querySelectorAll('.nav-links a');
    
    if (menuBtn && navContainer) {
        // Ensure the menu is closed on page load
        navContainer.classList.remove('active');
        document.body.classList.remove('menu-open');
        
        menuBtn.addEventListener('click', function(event) {
            // Stop event from propagating to document
            event.stopPropagation();
            
            // Toggle menu
            navContainer.classList.toggle('active');
            document.body.classList.toggle('menu-open');
            
            // Toggle the menu button appearance
            const bars = this.querySelectorAll('.bar');
            bars.forEach(bar => bar.classList.toggle('active'));
        });
    }
    
    // Section navigation code
    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            // Only if it's a hash link
            const href = this.getAttribute('href');
            
            // Extract the hash part
            const hashIndex = href.indexOf('#');
            if (hashIndex === -1) return; // No hash, do normal navigation
            
            const targetId = href.substring(hashIndex);
            if (targetId === '#') return; // Just '#', do normal navigation
            
            // Get the target element
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Prevent default navigation
                event.preventDefault();
                
                // First close the mobile menu
                if (navContainer && navContainer.classList.contains('active')) {
                    navContainer.classList.remove('active');
                    document.body.classList.remove('menu-open');
                    
                    if (menuBtn) {
                        const bars = menuBtn.querySelectorAll('.bar');
                        bars.forEach(bar => bar.classList.remove('active'));
                    }
                }
                
                // Give a short delay for the menu to close
                setTimeout(() => {
                    // Calculate position with navbar offset
                    const navbarHeight = document.querySelector('.navbar').offsetHeight || 0;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                    
                    // Scroll to the target
                    window.scrollTo({
                        top: targetPosition - navbarHeight - 20, // Extra padding
                        behavior: 'smooth'
                    });
                }, 100);
            }
        });
    });
}); 