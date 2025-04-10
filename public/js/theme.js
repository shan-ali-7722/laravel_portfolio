document.addEventListener('DOMContentLoaded', function() {
    // Theme toggle
    const themeBtns = document.querySelectorAll('.theme-btn');
    const storedTheme = localStorage.getItem('theme') || 'system';
    
    // Set the initial theme
    setTheme(storedTheme);
    
    // Set active class on the current theme button
    themeBtns.forEach(btn => {
        if (btn.dataset.theme === storedTheme) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
        
        // Add click event listener
        btn.addEventListener('click', function() {
            const theme = this.dataset.theme;
            setTheme(theme);
            
            // Save theme preference to localStorage
            localStorage.setItem('theme', theme);
            
            // Update active button
            themeBtns.forEach(btn => {
                if (btn.dataset.theme === theme) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        });
    });
    
    // Function to set the theme
    function setTheme(theme) {
        if (theme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
        } else if (theme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
        } else if (theme === 'system') {
            // Check system preference
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }
            
            // Listen for changes in system preference
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                if (localStorage.getItem('theme') === 'system') {
                    document.documentElement.setAttribute('data-theme', e.matches ? 'dark' : 'light');
                }
            });
        }
    }
}); 