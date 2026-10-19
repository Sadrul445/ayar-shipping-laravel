@extends('layouts.app')
@section('title', 'Job Vacancies – Ayar Shipping Services')
@section('content')
    <section class="bg-[#001a3d] pb-14 pt-36 text-white">
        <div class="wrap">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-red-300">Career opportunities</p>
            <h1 class="mt-4 text-5xl">Job vacancies</h1>
            <p class="mt-4 text-white/70">Browse currently published openings.</p>
        </div>
    </section>
    <section class="sec">
        <div class="wrap">
            @if ($vacancies->isEmpty())
                <div class="crd p-8">
                    <h2 class="text-2xl">No open positions right now</h2>
                    <p class="mut mt-3">Please check again later or send your enquiry to our team.</p><a
                        class="btn btn-red mt-5" href="{{ route('contact') }}">Contact us</a>
                </div>
            @else<div class="grid gap-5 md:grid-cols-2">
                    @foreach ($vacancies as $vacancy)
                        <article class="crd p-6">
                            <div class="flex flex-wrap justify-between gap-3"><span
                                    class="rounded-full bg-blue-50 px-3 py-1 text-xs font-bold text-[#002a5c]">{{ $vacancy->employment_type }}</span>
                                @if ($vacancy->closing_date)
                                    <span class="mut text-xs">Closes {{ $vacancy->closing_date->format('d M Y') }}</span>
                                @endif
                            </div>
                            <h2 class="mt-4 text-2xl">{{ $vacancy->title }}</h2>
                            <p class="mut mt-2 text-sm">{{ $vacancy->vessel_type ?: 'Maritime role' }} ·
                                {{ $vacancy->location ?: 'Location to be confirmed' }}</p>
                            <p class="mut mt-4 leading-7">{{ \Illuminate\Support\Str::limit($vacancy->description, 220) }}
                            </p><a class="btn btn-red mt-5" href="{{ route('vacancies.show', $vacancy) }}">View details
                                →</a>
                        </article>
                    @endforeach
                </div>
                <div class="mt-8">{{ $vacancies->links() }}</div>
            @endif
        </div>
    </section>
@endsection
