import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('[data-header]');
    const menu = document.querySelector('[data-mobile-menu]');
    const toggle = document.querySelector('[data-menu-toggle]');
    const close = document.querySelector('[data-menu-close]');

    const updateHeader = () => header?.classList.toggle('scrolled', window.scrollY > 24);
    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    toggle?.addEventListener('click', () => {
        const opened = menu?.classList.toggle('hidden') === false;
        toggle.setAttribute('aria-expanded', String(opened));
    });
    close?.addEventListener('click', () => {
        menu?.classList.add('hidden');
        toggle?.setAttribute('aria-expanded', 'false');
    });
    menu?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        menu.classList.add('hidden');
        toggle?.setAttribute('aria-expanded', 'false');
    }));

    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        }), { threshold: 0.08 });
        revealEls.forEach(el => observer.observe(el));
    } else revealEls.forEach(el => el.classList.add('visible'));

    document.querySelectorAll('[data-year]').forEach(el => el.textContent = new Date().getFullYear());
});
