<section class="services-section section-padding">

           
@php
    $servicesSection = $homeSections->get('services');
@endphp

<div class="container">

    <div class="row align-items-end section-header-row">

        <div class="col-lg-7">

            <div class="section-heading">

                @if($servicesSection?->subtitle)
                    <span class="section-kicker">
                        {{ $servicesSection->subtitle }}
                    </span>
                @endif

                @if($servicesSection?->title)
                    <h2 class="section-title text-white">
                        {{ $servicesSection->title }}
                    </h2>
                @endif

            </div>

        </div>

        <div class="col-lg-5">

            @if($servicesSection?->description)
                <p class="section-intro text-light">
                    {!! nl2br(e($servicesSection->description)) !!}
                </p>
            @endif

        </div>

    </div>


    <div class="row g-4 services-grid">

        @forelse($services as $service)

            <div class="col-md-6 col-xl-3">

                <article class="service-card">

                    <div class="service-image">

                        @if($service->image)

                            <img
                                src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $service->title }}"
                                loading="lazy"
                            >

                        @else

                            <div class="service-image-placeholder">
                                <i class="bi bi-building-gear"></i>
                            </div>

                        @endif

                        <div class="service-image-overlay"></div>

                        <span class="service-number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>

                    <div class="service-content">

                        <div class="service-icon">

                            @if($service->icon)
                                <i class="{{ $service->icon }}"></i>
                            @else
                                <i class="bi bi-gear-wide-connected"></i>
                            @endif

                        </div>

                        <h3>
                            {{ $service->title }}
                        </h3>

                        @if($service->shortDescription)

                            <p>
                                {{ $service->shortDescription }}
                            </p>

                        @endif

                <a
    href="{{ route('services.show', ['slug' => $service->slug]) }}"
    class="service-link"
>
    {{ $servicesSection?->button_text
        ?: (app()->getLocale() === 'ar'
            ? 'عرض الخدمة'
            : 'VIEW SERVICE') }}

    <i class="bi bi-arrow-up-left"></i>
</a>
                    </div>

                </article>

            </div>

        @empty

            <div class="col-12">

                <div class="empty-content">
                    {{ app()->getLocale() === 'ar'
                        ? 'لا توجد خدمات متاحة حاليًا.'
                        : 'No services available at the moment.' }}
                </div>

            </div>

        @endforelse

    </div>

</div>
           

</section>
