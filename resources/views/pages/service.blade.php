@extends('layouts.app')

@section('content')

    {{-- Service Hero --}}
    <section
        class="service-detail-hero"
        @if($service->image)
            style="background-image: linear-gradient(90deg, rgba(3, 18, 35, .92), rgba(3, 18, 35, .55)), url('{{ asset('storage/' . $service->image) }}');"
        @endif
    >
        <div class="container">
            <div class="service-hero-content">

                <span class="service-hero-kicker">
                    {{ app()->getLocale() === 'ar' ? 'خدماتنا' : 'OUR SERVICES' }}
                </span>

                <div class="service-hero-icon">
                    <i class="{{ $service->icon ?: 'bi bi-building-gear' }}"></i>
                </div>

                <h1>{{ $service->title }}</h1>

                @if($service->shortDescription)
                    <p>{{ $service->shortDescription }}</p>
                @endif

                <div class="service-hero-line"></div>

            </div>
        </div>
    </section>


    {{-- Service Content --}}
    <section class="service-detail-section section-padding">
        <div class="container">

            <div class="row g-5 align-items-start">

                {{-- Main Content --}}
                <div class="col-lg-8">

                    <div class="service-detail-content">

                        <span class="section-kicker">
                            {{ app()->getLocale() === 'ar'
                                ? 'تفاصيل الخدمة'
                                : 'SERVICE DETAILS' }}
                        </span>

                        <h2 class="service-detail-title">
                            {{ $service->title }}
                        </h2>

                        @if($service->shortDescription)
                            <p class="service-lead">
                                {{ $service->shortDescription }}
                            </p>
                        @endif

                        <div class="service-description">
                            {!! $service->description !!}
                        </div>

                    </div>

                </div>


                {{-- Sidebar --}}
                <div class="col-lg-4">

                    <aside class="service-sidebar">

                        @if($service->image)
                            <div class="service-sidebar-image">
                                <img
                                    src="{{ asset('storage/' . $service->image) }}"
                                    alt="{{ $service->title }}"
                                >
                            </div>
                        @endif

                        <div class="service-contact-card">

                            <div class="service-contact-icon">
                                <i class="bi bi-headset"></i>
                            </div>

                            <span class="service-contact-kicker">
                                {{ app()->getLocale() === 'ar'
                                    ? 'هل تحتاج إلى هذه الخدمة؟'
                                    : 'NEED THIS SERVICE?' }}
                            </span>

                            <h3>
                                {{ app()->getLocale() === 'ar'
                                    ? 'تحدث مع فريقنا'
                                    : 'Talk To Our Team' }}
                            </h3>

                            <p>
                                {{ app()->getLocale() === 'ar'
                                    ? 'تواصل معنا لمناقشة متطلبات مشروعك والحصول على الحل المناسب.'
                                    : 'Contact our team to discuss your project requirements and find the right solution.' }}
                            </p>

                            <a
                                href="{{ route('contact') }}"
                                class="service-contact-btn"
                            >
                                {{ app()->getLocale() === 'ar'
                                    ? 'تواصل معنا'
                                    : 'CONTACT US' }}

                                <i class="bi bi-arrow-up-left"></i>
                            </a>

                        </div>

                    </aside>

                </div>

            </div>

        </div>
    </section>


    {{-- Other Services --}}
    @if($services->count() > 1)

        <section class="related-services-section section-padding">

            <div class="container">

                <div class="section-heading text-center mb-5">

                    <span class="section-kicker">
                        {{ app()->getLocale() === 'ar'
                            ? 'خدمات أخرى'
                            : 'OTHER SERVICES' }}
                    </span>

                    <h2 class="section-title">
                        {{ app()->getLocale() === 'ar'
                            ? 'استكشف خدماتنا'
                            : 'Explore Our Services' }}
                    </h2>

                </div>

                <div class="row g-4">

                    @foreach($services->where('id', '!=', $service->id)->take(3) as $item)

                        <div class="col-md-6 col-lg-4">

                            <article class="related-service-card">

                                @if($item->image)

                                    <div class="related-service-image">

                                        <img
                                            src="{{ asset('storage/' . $item->image) }}"
                                            alt="{{ $item->title }}"
                                            loading="lazy"
                                        >

                                        <div class="related-service-overlay"></div>

                                    </div>

                                @endif

                                <div class="related-service-content">

                                    <div class="related-service-icon">
                                        <i class="{{ $item->icon ?: 'bi bi-gear-wide-connected' }}"></i>
                                    </div>

                                    <h3>
                                        {{ $item->title }}
                                    </h3>

                                    @if($item->shortDescription)
                                        <p>
                                            {{ $item->shortDescription }}
                                        </p>
                                    @endif

                                    <a
                                        href="{{ route('services.show', $item->slug) }}"
                                        class="related-service-link"
                                    >
                                        {{ app()->getLocale() === 'ar'
                                            ? 'اكتشف الخدمة'
                                            : 'EXPLORE SERVICE' }}

                                        <i class="bi bi-arrow-up-left"></i>
                                    </a>

                                </div>

                            </article>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>

    @endif


    {{-- CTA --}}
    @include('components.home.cta')


@endsection


@push('styles')

<style>

.service-detail-hero {
    min-height: 560px;
    display: flex;
    align-items: center;
    position: relative;
    background-color: #061b2d;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}

.service-detail-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            135deg,
            rgba(0, 157, 220, .16),
            transparent 45%
        );
    pointer-events: none;
}

.service-hero-content {
    position: relative;
    z-index: 2;
    max-width: 850px;
    padding: 100px 0;
}

.service-hero-kicker {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    color: #55c8f5;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 25px;
}

.service-hero-kicker::before {
    content: "";
    width: 45px;
    height: 2px;
    background: #55c8f5;
}

.service-hero-icon {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, .1);
    border: 1px solid rgba(255, 255, 255, .18);
    color: #55c8f5;
    font-size: 30px;
    margin-bottom: 25px;
    backdrop-filter: blur(10px);
}

.service-hero-content h1 {
    color: #fff;
    font-size: clamp(42px, 6vw, 76px);
    font-weight: 800;
    line-height: 1.05;
    margin: 0 0 25px;
    max-width: 900px;
}

.service-hero-content p {
    color: rgba(255,255,255,.82);
    font-size: 19px;
    line-height: 1.9;
    max-width: 720px;
    margin: 0;
}

.service-hero-line {
    width: 90px;
    height: 4px;
    background: #55c8f5;
    margin-top: 35px;
}


/* Details */

.service-detail-section {
    background: #fff;
}

.service-detail-content {
    max-width: 850px;
}

.service-detail-title {
    color: #06213a;
    font-size: clamp(34px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.2;
    margin: 15px 0 25px;
}

.service-lead {
    color: #536273;
    font-size: 19px;
    line-height: 1.9;
    border-left: 4px solid #55c8f5;
    padding-left: 25px;
    margin-bottom: 35px;
}

.service-description {
    color: #526170;
    font-size: 17px;
    line-height: 2;
}

.service-description h2,
.service-description h3,
.service-description h4 {
    color: #06213a;
    font-weight: 800;
    margin-top: 35px;
    margin-bottom: 15px;
}

.service-description p {
    margin-bottom: 20px;
}

.service-description ul,
.service-description ol {
    padding-left: 25px;
    margin-bottom: 25px;
}

.service-description li {
    margin-bottom: 10px;
}

.service-description a {
    color: #008ec4;
}


/* Sidebar */

.service-sidebar {
    position: sticky;
    top: 110px;
}

.service-sidebar-image {
    height: 300px;
    overflow: hidden;
    margin-bottom: 25px;
}

.service-sidebar-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
}

.service-sidebar-image:hover img {
    transform: scale(1.05);
}

.service-contact-card {
    background: #06213a;
    padding: 40px;
    position: relative;
    overflow: hidden;
}

.service-contact-card::before {
    content: "";
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: rgba(85, 200, 245, .12);
    right: -60px;
    top: -60px;
}

.service-contact-icon {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #55c8f5;
    color: #06213a;
    font-size: 23px;
    margin-bottom: 25px;
}

.service-contact-kicker {
    color: #55c8f5;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
}

.service-contact-card h3 {
    color: #fff;
    font-size: 27px;
    font-weight: 800;
    margin: 12px 0 15px;
}

.service-contact-card p {
    color: rgba(255,255,255,.68);
    line-height: 1.8;
    margin-bottom: 25px;
}

.service-contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: #55c8f5;
    color: #06213a;
    padding: 14px 22px;
    font-size: 13px;
    font-weight: 800;
    text-decoration: none;
    transition: .3s ease;
}

.service-contact-btn:hover {
    background: #fff;
    color: #06213a;
}


/* Related */

.related-services-section {
    background: #f3f7fa;
}

.related-service-card {
    background: #fff;
    height: 100%;
    overflow: hidden;
    border: 1px solid #e7edf2;
    transition: transform .35s ease, box-shadow .35s ease;
}

.related-service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(6, 33, 58, .12);
}

.related-service-image {
    height: 240px;
    position: relative;
    overflow: hidden;
}

.related-service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
}

.related-service-card:hover .related-service-image img {
    transform: scale(1.06);
}

.related-service-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(6, 33, 58, .65),
        transparent 60%
    );
}

.related-service-content {
    padding: 30px;
}

.related-service-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eaf8fd;
    color: #0098cf;
    font-size: 22px;
    margin-bottom: 20px;
}

.related-service-content h3 {
    color: #06213a;
    font-size: 23px;
    font-weight: 800;
    margin-bottom: 12px;
}

.related-service-content p {
    color: #697785;
    line-height: 1.8;
    margin-bottom: 20px;
}

.related-service-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #008ec4;
    font-size: 13px;
    font-weight: 800;
    text-decoration: none;
}

.related-service-link:hover {
    color: #06213a;
}


/* RTL */

html[dir="rtl"] .service-lead {
    border-left: 0;
    border-right: 4px solid #55c8f5;
    padding-left: 0;
    padding-right: 25px;
}

html[dir="rtl"] .service-hero-kicker::before {
    display: none;
}

html[dir="rtl"] .service-hero-kicker::after {
    content: "";
    width: 45px;
    height: 2px;
    background: #55c8f5;
}

html[dir="rtl"] .service-description ul,
html[dir="rtl"] .service-description ol {
    padding-left: 0;
    padding-right: 25px;
}


/* Mobile */

@media (max-width: 991px) {

    .service-detail-hero {
        min-height: 500px;
    }

    .service-hero-content {
        padding: 80px 0;
    }

    .service-sidebar {
        position: static;
    }

}

@media (max-width: 767px) {

    .service-detail-hero {
        min-height: 460px;
    }

    .service-hero-content h1 {
        font-size: 42px;
    }

    .service-hero-content p {
        font-size: 16px;
    }

    .service-contact-card {
        padding: 30px;
    }

    .service-detail-title {
        font-size: 34px;
    }

    .service-lead {
        font-size: 17px;
    }

}

</style>

@endpush