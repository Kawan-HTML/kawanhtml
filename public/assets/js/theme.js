document.addEventListener('DOMContentLoaded', function() {
    console.log('Document loaded');

    // Theme functionality
    function setTheme(theme) {
        console.log('Setting theme to:', theme);
        document.body.className = theme;
        localStorage.setItem('theme', theme);
        updateNavbarClasses(theme);
    }

    function updateNavbarClasses(theme) {
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            console.log('Updating navbar classes for theme:', theme);
            navbar.classList.remove('navbar-light', 'navbar-dark', 'bg-light');
            if (theme === 'dark' || (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                navbar.classList.add('navbar-dark');
            } else {
                navbar.classList.add('navbar-light', 'bg-light');
            }
        } else {
            console.log('Navbar element not found');
        }
    }

    // Set initial theme
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);

    // Theme toggle event listeners
    const themeToggles = document.querySelectorAll('[data-theme-toggle]');
    console.log('Theme toggles found:', themeToggles.length);
    themeToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Theme toggle clicked');
            setTheme(this.dataset.themeToggle);
        });
    });

    // Prevent view source
    document.onkeydown = function(e) {
        if (e.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    };

    console.log('Theme script fully initialized');
});
