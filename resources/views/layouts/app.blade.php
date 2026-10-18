<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ayar Shipping Services — crew recruitment and maritime services.">
    <title>@yield('title', 'Ayar Shipping Services – Crew Recruiting')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header
    data-header
    class="site-header fixed inset-x-0 top-0 z-50 text-white"
>
    <div class="wrap flex h-[72px] items-center justify-between gap-4">
        <!-- Logo -->
        <a
            href="{{ route('home') }}"
            class="flex min-w-0 shrink-0 items-center gap-2.5"
            aria-label="Ayar Shipping Services home"
        >
            <svg viewBox="0 0 40 40" class="h-9 w-9 shrink-0 sm:h-10 sm:w-10" aria-hidden="true">
                <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5"/>
                <path d="M9 24h22l-3 6H12z" fill="currentColor"/>
                <path d="M15 24v-6h10v6M20 18v-4" stroke="currentColor" stroke-width="2" fill="none"/>
                <path d="M8 33q3-2 6 0t6 0 6 0 6 0" stroke="#d9473c" stroke-width="2" fill="none"/>
            </svg>

            <span class="min-w-0 leading-tight">
                <b class="block truncate text-xs font-extrabold sm:text-[15px]">
                    Ayar Shipping Services
                </b>
                <small class="mt-1 block text-[9px] tracking-[.14em] opacity-75 sm:text-[10px] sm:tracking-[.18em]">
                    CREW RECRUITING
                </small>
            </span>
        </a>

        <!-- Desktop navigation -->
        <nav
            class="hidden items-center gap-5 text-sm font-semibold lg:flex"
            aria-label="Main navigation"
        >
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('home') }}#about">About Us</a>
            <a class="nav-link" href="{{ route('home') }}#services">Services</a>
            <a class="nav-link" href="{{ route('vacancies.index') }}">Job Vacancies</a>
            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            <a class="btn btn-red !py-2.5" href="{{ route('applications.create') }}">
                Apply for Crew Job
            </a>
        </nav>

        <!-- Mobile menu button -->
        <button
            type="button"
            data-menu-toggle
            aria-controls="mobileNavigation"
            aria-expanded="false"
            aria-label="Open navigation menu"
            class="mobile-menu-button inline-flex h-11 shrink-0 items-center justify-center gap-2 rounded-xl border border-white/30 px-3 text-sm font-semibold text-white lg:hidden"
        >
            <svg data-menu-icon-open viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5" aria-hidden="true">
                <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
            <svg data-menu-icon-close viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden h-5 w-5" aria-hidden="true">
                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18"/>
            </svg>
            {{-- <span data-menu-button-text>Menu</span> --}}
        </button>
    </div>

    <!-- Mobile navigation panel -->
    <nav
        id="mobileNavigation"
        data-mobile-menu
        class="mobile-navigation hidden lg:hidden"
        aria-label="Mobile navigation"
        aria-hidden="true"
        inert
    >
        <div class="mx-auto max-w-7xl px-5 pb-5 pt-3 sm:px-6">
            <a class="mobile-nav-link" href="{{ route('home') }}">Home</a>
            <a class="mobile-nav-link" href="{{ route('home') }}#about">About Us</a>
            <a class="mobile-nav-link" href="{{ route('home') }}#services">Services</a>
            <a class="mobile-nav-link" href="{{ route('vacancies.index') }}">Job Vacancies</a>
            <a class="mobile-nav-link" href="{{ route('contact') }}">Contact Us</a>

            <a
                class="mobile-apply-button"
                href="{{ route('applications.create') }}"
            >
                Apply for Crew Job <span aria-hidden="true">→</span>
            </a>
        </div>
    </nav>
</header>


<main>@yield('content')</main>
<footer class="bg-[#001a3d] py-12 text-white">
    <div class="wrap grid gap-8 md:grid-cols-3">
        <div><div class="text-lg font-extrabold">Ayar Shipping Services</div><p class="mt-3 max-w-sm text-sm leading-6 text-white/65">Crew recruiting and maritime services. Please verify company information and current vacancies before publishing.</p></div>
        <div><h3 class="font-bold">Quick links</h3><div class="mt-3 grid gap-2 text-sm text-white/70"><a href="{{ route('vacancies.index') }}">Job vacancies</a><a href="{{ route('applications.create') }}">Apply for a crew job</a><a href="{{ route('contact') }}">Contact us</a></div></div>
        <div><h3 class="font-bold">Contact</h3><p class="mt-3 text-sm text-white/70">Add Ayar's verified office address, email and telephone here before launch.</p></div>
    </div>
    <div class="wrap mt-8 border-t border-white/15 pt-5 text-xs text-white/50">© <span data-year></span> Ayar Shipping Services. All rights reserved.</div>
</footer>
@if(session('success'))
<div role="status" class="fixed bottom-5 right-5 z-50 max-w-sm rounded-xl bg-emerald-700 px-5 py-4 text-white shadow-xl">{{ session('success') }}</div>
@endif
</body>
</html>
