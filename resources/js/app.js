
import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // =========================================
    // HEADER: LIQUID GLASS ON SCROLL
    // =========================================
    const header = document.querySelector('[data-header]');

    const updateHeader = () => {
        if (!header) return;

        header.classList.toggle('scrolled', window.scrollY > 24);
        header.classList.toggle('is-scrolled', window.scrollY > 24);
    };

    updateHeader();

    window.addEventListener('scroll', updateHeader, {
        passive: true,
    });

    // =========================================
    // MOBILE NAVIGATION: SINGLE EVENT HANDLER
    // =========================================
    const menuButton = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');

    if (menuButton && mobileMenu) {
        const openIcon = menuButton.querySelector('[data-menu-icon-open]');
        const closeIcon = menuButton.querySelector('[data-menu-icon-close]');
        const buttonText = menuButton.querySelector('[data-menu-button-text]');

        const setMenuState = (open) => {
            mobileMenu.classList.toggle('hidden', !open);

            mobileMenu.setAttribute('aria-hidden', String(!open));
            menuButton.setAttribute('aria-expanded', String(open));
            menuButton.setAttribute(
                'aria-label',
                open ? 'Close navigation menu' : 'Open navigation menu'
            );

            if (open) {
                mobileMenu.removeAttribute('inert');
            } else {
                mobileMenu.setAttribute('inert', '');
            }

            openIcon?.classList.toggle('hidden', open);
            closeIcon?.classList.toggle('hidden', !open);

            if (buttonText) {
                buttonText.textContent = open ? 'Close' : 'Menu';
            }
        };

        // Set the correct initial state
        setMenuState(false);

        // Open / close menu
        menuButton.addEventListener('click', () => {
            const isOpen =
                menuButton.getAttribute('aria-expanded') === 'true';

            setMenuState(!isOpen);
        });

        // Close after clicking a navigation link
        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                setMenuState(false);
            });
        });

        // Close with Escape
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                setMenuState(false);
            }
        });

        // Close when switching to desktop layout
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                setMenuState(false);
            }
        });
    } else {
        console.warn(
            'Mobile navigation requires [data-menu-toggle] and [data-mobile-menu].'
        );
    }

    // =========================================
    // REVEAL ELEMENTS ON SCROLL
    // =========================================
    const revealElements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.08,
            }
        );

        revealElements.forEach((element) => {
            observer.observe(element);
        });
    } else {
        revealElements.forEach((element) => {
            element.classList.add('visible');
        });
    }

    // =========================================
    // DYNAMIC COPYRIGHT YEAR
    // =========================================
    document.querySelectorAll('[data-year]').forEach((element) => {
        element.textContent = new Date().getFullYear();
    });
});
