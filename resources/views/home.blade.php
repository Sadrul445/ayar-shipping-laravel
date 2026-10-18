@extends('layouts.app')
@section('title', 'Ayar Shipping Services – Crew Recruiting')
@section('content')
    {{-- <section
        class="relative flex min-h-[720px] items-center overflow-hidden bg-[#001a3d] pb-16 pt-32 text-white md:min-h-[790px]">
        <div class="absolute inset-0 opacity-25"
            style="background:radial-gradient(ellipse at 80% 20%,#2d6a9d 0,transparent 42%),linear-gradient(130deg,#001a3d,#002a5c 65%,#00122d)">
        </div>
        <div class="wrap relative grid items-center gap-12 md:grid-cols-[1.15fr_.85fr]">
            <div class="reveal">
                <span
                    class="inline-flex rounded-full border border-white/20 bg-white/5 px-4 py-2 text-xs font-bold uppercase tracking-[.2em] text-white/75">Maritime
                    talent & services</span>
                <h1 class="mt-7 max-w-3xl text-5xl leading-[1.02] sm:text-6xl lg:text-7xl">Connecting skilled seafarers with
                    <span class="text-red-400">opportunity.</span>
                </h1>
                <p class="mt-6 max-w-xl text-lg leading-8 text-white/70">A crew recruitment experience designed to help
                    seafarers explore opportunities and connect with the recruitment team.</p>
                <div class="mt-8 flex flex-wrap gap-3"><a class="btn btn-red" href="{{ route('applications.create') }}">Apply
                        for Crew Job <span aria-hidden="true">→</span></a><a class="btn btn-white"
                        href="{{ route('vacancies.index') }}">Explore vacancies</a></div>
                <div class="mt-12 grid max-w-xl grid-cols-3 gap-4 border-t border-white/20 pt-6 text-sm">
                    <div><b class="block text-2xl">Crew</b><span class="text-white/60">Recruitment</span></div>
                    <div><b class="block text-2xl">Marine</b><span class="text-white/60">Services</span></div>
                    <div><b class="block text-2xl">Global</b><span class="text-white/60">Opportunities</span></div>
                </div>
            </div>
            <div class="reveal relative">
                <div class="absolute -inset-4 rounded-[2rem] border border-white/10"></div>
                <div
                    class="relative overflow-hidden rounded-[1.5rem] border border-white/20 bg-white/5 p-5 shadow-2xl backdrop-blur">
                    <svg viewBox="0 0 520 390" class="w-full" role="img"
                        aria-label="Illustration of a container ship at sea">
                        <defs>
                            <linearGradient id="sky" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0" stop-color="#1d5d91" />
                                <stop offset="1" stop-color="#b5d6ec" />
                            </linearGradient>
                        </defs>
                        <rect width="520" height="390" rx="18" fill="url(#sky)" />
                        <circle cx="408" cy="74" r="30" fill="#fff" opacity=".65" />
                        <path d="M0 265q55-18 110 0t110 0 110 0 110 0 110 0 110 0v125H0z" fill="#0b4976" />
                        <path d="M48 225h420l-45 52H94z" fill="#071d39" />
                        <path d="M92 277h326l-8 10H100z" fill="#b8332a" />
                        @foreach ([['x' => 104, 'y' => 174, 'c' => '#c9473c'], ['x' => 151, 'y' => 174, 'c' => '#e8eef7'], ['x' => 198, 'y' => 174, 'c' => '#2f6fb5'], ['x' => 245, 'y' => 174, 'c' => '#c9473c'], ['x' => 292, 'y' => 174, 'c' => '#e8eef7'], ['x' => 151, 'y' => 132, 'c' => '#2f6fb5'], ['x' => 198, 'y' => 132, 'c' => '#c9473c'], ['x' => 245, 'y' => 132, 'c' => '#e8eef7']] as $box)
                            <rect x="{{ $box['x'] }}" y="{{ $box['y'] }}" width="43" height="38"
                                rx="2" fill="{{ $box['c'] }}" />
                        @endforeach
                        <rect x="352" y="135" width="54" height="90" fill="#f3f6fa" />
                        <rect x="363" y="113" width="32" height="22" fill="#f3f6fa" />
                        <path d="M358 153h42M358 166h42" stroke="#0b1f3d" stroke-width="4" />
                        <path d="M0 315q28-10 56 0t56 0 56 0 56 0 56 0 56 0 56 0 56 0 56 0 56 0 56 0" stroke="#8bc9ee"
                            stroke-width="3" fill="none" opacity=".6" />
                    </svg>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <div>
                            <p class="font-bold">Your next chapter at sea</p>
                            <p class="mt-1 text-sm text-white/60">Explore roles and submit your profile</p>
                        </div><span class="grid h-11 w-11 place-items-center rounded-full bg-[#b8332a] text-xl">↗</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="hero-video">
        <!-- Background video -->

        <video class="hero-video__media" autoplay muted loop playsinline preload="auto">
            <source src="{{ asset('videos/home-video.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>


        <!-- Dark overlay for readable text -->
        <div class="hero-video__overlay"></div>

        <!-- Hero content -->
        <div class="hero-video__content">
            <span class="hero-eyebrow">AYAR SHIPPING SERVICES</span>

            <h1>
                Wherever your vessel calls,
                <span>we connect you to opportunity.</span>
            </h1>

            <p>
                Marine services and crew recruitment designed to connect
                skilled seafarers with opportunities around the world.
            </p>

            <div class="hero-actions">
                <a href="{{ url('/apply') }}" class="hero-btn hero-btn--primary">
                    Apply for Crew Job <span aria-hidden="true">→</span>
                </a>

                <a href="{{ url('/vacancies') }}" class="hero-btn hero-btn--light">
                    Explore Vacancies
                </a>
            </div>

            <div class="hero-highlights">
                <div>
                    <strong>Crew</strong>
                    <span>Recruitment</span>
                </div>
                <div>
                    <strong>Marine</strong>
                    <span>Services</span>
                </div>
                <div>
                    <strong>Global</strong>
                    <span>Opportunities</span>
                </div>
            </div>
        </div>

        <div class="hero-scroll" aria-hidden="true">
            <span></span>
            <small>SCROLL TO EXPLORE</small>
        </div>
    </section>

    <section id="about" class="sec bg-white">
        <div class="wrap grid items-center gap-12 md:grid-cols-2">
            <div class="reveal">
                <p class="text-sm font-bold uppercase tracking-[.18em] text-[#b8332a]">About Ayar</p>
                <h2 class="mt-4 text-4xl md:text-5xl">A focused approach to maritime services.</h2>
            </div>
            <div class="reveal">
                <p class="leading-8 text-slate-600">Ayar Shipping Services' website introduces crew recruiting and maritime
                    service lines. Use this section to add the company's approved history, credentials, operating locations
                    and verified figures.</p><a href="{{ route('contact') }}"
                    class="mt-6 inline-flex font-bold text-[#002a5c] underline underline-offset-4">Talk to our team →</a>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="services-container">

            <div class="services-heading">
                <span class="services-eyebrow">WHAT WE DO</span>
                <h2>Marine services, <span>made simple.</span></h2>
                <p>
                    Reliable maritime support and professional services
                    for vessels, shipowners and seafarers.
                </p>
            </div>

            <div class="service-grid">

                <!-- Card 1 -->
                <article class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/crew-management.jpg') }}"
                            alt="Crew management and maritime professionals" loading="lazy">
                        <span class="service-number">01</span>
                    </div>

                    <div class="service-body">
                        <span class="service-label">PEOPLE &amp; TALENT</span>
                        <h3>Crew Management</h3>
                        <p>
                            Connect qualified seafarers with suitable
                            opportunities and crew recruitment support.
                        </p>
                        <a href="{{ url('/apply') }}" class="service-link">
                            Explore opportunities <span>↗</span>
                        </a>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/shipping-agency.jpg') }}" alt="Shipping agency and port operations"
                            loading="lazy">
                        <span class="service-number">02</span>
                    </div>

                    <div class="service-body">
                        <span class="service-label">VESSEL SUPPORT</span>
                        <h3>Shipping Agency</h3>
                        <p>
                            Professional agency assistance for vessel
                            coordination and port-related requirements.
                        </p>
                        <a href="{{ url('/contact') }}" class="service-link">
                            Discuss your needs <span>↗</span>
                        </a>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="service-card">
                    <div class="service-image">
                        <img src="{{ asset('images/ship-chandler.jpg') }}" alt="Ship chandler and marine supplies"
                            loading="lazy">
                        <span class="service-number">03</span>
                    </div>

                    <div class="service-body">
                        <span class="service-label">MARINE SUPPLIES</span>
                        <h3>Ship Chandler</h3>
                        <p>
                            Marine supply support to help vessels prepare
                            for their operational requirements.
                        </p>
                        <a href="{{ url('/contact') }}" class="service-link">
                            Learn more <span>↗</span>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="sec bg-[#002a5c] text-white">
        <div class="wrap grid items-center gap-10 md:grid-cols-[1fr_.8fr]">
            <div class="reveal">
                <p class="text-sm font-bold uppercase tracking-[.18em] text-red-300">Crew recruitment</p>
                <h2 class="mt-4 text-4xl md:text-5xl">Ready for your next voyage?</h2>
                <p class="mt-5 max-w-xl leading-7 text-white/70">Browse available roles and submit your CV with relevant
                    supporting documents. Applications are saved securely in the local application storage and recorded in
                    MySQL.</p>
                <div class="mt-7 flex flex-wrap gap-3"><a class="btn btn-red"
                        href="{{ route('applications.create') }}">Apply for Crew Job →</a><a
                        class="btn border border-white/30 text-white" href="{{ route('vacancies.index') }}">View
                        vacancies</a></div>
            </div>
            <div class="reveal rounded-2xl border border-white/15 bg-white/5 p-7">
                <h3 class="text-xl">Before you apply</h3>
                <ul class="mt-4 space-y-3 text-sm leading-6 text-white/75">
                    <li>✓ Updated CV or resume (PDF)</li>
                    <li>✓ Relevant maritime certificates</li>
                    <li>✓ Current contact details and availability</li>
                    <li>✓ Additional documents, if requested</li>
                </ul>
                <p class="mt-5 text-xs text-white/50">Confirm the actual application requirements with Ayar before
                    publishing.</p>
            </div>
        </div>
    </section>
    <section id="vacancies" class="sec">
        <div class="wrap">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[.18em] text-[#b8332a]">Opportunities</p>
                    <h2 class="mt-3 text-4xl md:text-5xl">Latest job vacancies</h2>
                </div><a class="font-bold underline underline-offset-4" href="{{ route('vacancies.index') }}">View all
                    vacancies →</a>
            </div>
            @if ($vacancies->isEmpty())
                <div class="crd mt-8 p-8">
                    <p class="mut">No active vacancies have been published yet. Please check again later.</p>
                </div>
            @else
                <div class="mt-8 grid gap-4 md:grid-cols-3">
                    @foreach ($vacancies as $vacancy)
                        <article class="crd reveal p-6"><span
                                class="rounded-full bg-blue-50 px-3 py-1 text-xs font-bold text-[#002a5c]">{{ $vacancy->employment_type }}</span>
                            <h3 class="mt-4 text-xl">{{ $vacancy->title }}</h3>
                            <p class="mut mt-2 text-sm">{{ $vacancy->vessel_type ?: 'Maritime role' }} ·
                                {{ $vacancy->location ?: 'Location to be confirmed' }}</p>
                            <p class="mut mt-4 line-clamp-3 leading-6">{{ $vacancy->description }}</p><a
                                class="mt-5 inline-block font-bold text-[#b8332a]"
                                href="{{ route('vacancies.show', $vacancy) }}">View details →</a>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    <section class="bg-white py-16">
        <div class="wrap flex flex-col items-start justify-between gap-6 md:flex-row md:items-center">
            <div>
                <h2 class="text-3xl">Have a question?</h2>
                <p class="mut mt-2">Contact our team for information about services and recruitment.</p>
            </div><a class="btn btn-red" href="{{ route('contact') }}">Contact Ayar →</a>
        </div>
    </section>
@endsection
