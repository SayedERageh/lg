
@php
    $productsSection = $homeSections->get('products');
@endphp

<section class="products-section section-padding">

    <div class="container">

        {{-- Section Header --}}
        <div class="row align-items-end section-header-row">

            <div class="col-lg-7">

                <div class="section-heading">

                    @if($productsSection?->subtitle)

                        <span class="section-kicker">
                            {{ $productsSection->subtitle }}
                        </span>

                    @endif

                    @if($productsSection?->title)

                        <h2 class="section-title">
                            {{ $productsSection->title }}
                        </h2>

                    @endif

                </div>

            </div>

        </div>


        {{-- Products --}}
        <div class="products-grid">

            @foreach($products as $product)

                @php

                    $isArabic = app()->getLocale() === 'ar';

                    $productName = $isArabic
                        ? $product->name_ar
                        : $product->name_en;

                    $productDescription = $isArabic
                        ? $product->description_ar
                        : $product->description_en;

                    $whatsappNumber = '201025509311';

                    $message = $isArabic
                        ? "السلام عليكم، أريد الاستفسار عن المنتج: {$productName}"
                        : "Hello, I would like to inquire about: {$productName}";

                    $whatsappUrl =
                        'https://wa.me/' .
                        $whatsappNumber .
                        '?text=' .
                        urlencode($message);

                @endphp


                <article class="product-card">

                    {{-- Product Image --}}
                    <a
                        href="{{ route('products.show', $product->slug) }}"
                        class="product-image"
                    >

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $productName }}"
                                loading="lazy"
                            >

                        @else

                            <div class="product-placeholder">

                                <i class="bi bi-box-seam"></i>

                            </div>

                        @endif


                        <div class="product-overlay">

                            <span class="product-view">

                                <i class="bi bi-arrow-up-left"></i>

                            </span>

                        </div>

                    </a>


                    {{-- Product Content --}}
                    <div class="product-content">

                        <h3>

                            <a href="{{ route('products.show', $product->slug) }}">

                                {{ $productName }}

                            </a>

                        </h3>


                        @if($productDescription)

                            <p class="product-description">

                                {{ Str::limit($productDescription, 110) }}

                            </p>

                        @endif


                        <div class="product-footer">

                            @if($product->price)

                                <span class="product-price">

                                    {{ number_format($product->price, 0) }}

                                    {{ $isArabic ? 'جنيه' : 'EGP' }}

                                </span>

                            @endif


                            <a
                                href="{{ $whatsappUrl }}"
                                target="_blank"
                                rel="noopener"
                                class="product-whatsapp"
                            >

                                <i class="bi bi-whatsapp"></i>

                                {{ $isArabic ? 'اطلب عبر واتساب' : 'Order via WhatsApp' }}

                            </a>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

