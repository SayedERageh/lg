@extends('layouts.app')

@section('content')

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


    {{-- Page Hero --}}
    <section class="product-detail-hero">

        <div class="container">

            <div class="product-detail-breadcrumb">

                <a href="{{ route('home') }}">
                    {{ $isArabic ? 'الرئيسية' : 'HOME' }}
                </a>

                <i class="bi bi-chevron-left"></i>

                <a href="{{ route('products') }}">
                    {{ $isArabic ? 'المنتجات' : 'PRODUCTS' }}
                </a>

                <i class="bi bi-chevron-left"></i>

                <span>{{ $productName }}</span>

            </div>

        </div>

    </section>


    {{-- Product Details --}}
    <section class="product-detail-section section-padding">

        <div class="container">

            <div class="row g-5 align-items-start">

                {{-- Product Image --}}
                <div class="col-lg-6">

                    <div class="product-detail-image">

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $productName }}"
                            >

                        @else

                            <div class="product-detail-placeholder">

                                <i class="bi bi-box-seam"></i>

                            </div>

                        @endif

                    </div>

                </div>


                {{-- Product Info --}}
                <div class="col-lg-6">

                    <div class="product-detail-content">

                        <span class="product-detail-kicker">
                            {{ $isArabic ? 'منتج من منتجاتنا' : 'OUR PRODUCT' }}
                        </span>


                        <h1>
                            {{ $productName }}
                        </h1>


                        @if($productDescription)

                            <div class="product-detail-description">

                                {!! nl2br(e($productDescription)) !!}

                            </div>

                        @endif


                        {{-- Price --}}
                        @if($product->price)

                            <div class="product-detail-price">

                                <span>
                                    {{ number_format($product->price, 0) }}
                                </span>

                                <small>
                                    {{ $isArabic ? 'جنيه' : 'EGP' }}
                                </small>

                            </div>

                        @else

                            <div class="product-detail-inquiry">

                                <i class="bi bi-tag"></i>

                                <span>
                                    {{ $isArabic
                                        ? 'للاستفسار عن السعر تواصل معنا'
                                        : 'Contact us for price' }}
                                </span>

                            </div>

                        @endif


                        {{-- WhatsApp --}}
                        <a
                            href="{{ $whatsappUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="product-detail-whatsapp"
                        >

                            <i class="bi bi-whatsapp"></i>

                            <span>
                                {{ $isArabic
                                    ? 'استفسر عن المنتج عبر واتساب'
                                    : 'Inquire via WhatsApp' }}
                            </span>

                        </a>


                        {{-- Contact --}}
                        @if($company->phone)

                            <a
                                href="tel:{{ $company->phone }}"
                                class="product-detail-phone"
                            >

                                <i class="bi bi-telephone"></i>

                                <span>
                                    {{ $isArabic
                                        ? 'أو اتصل بنا'
                                        : 'Or call us' }}
                                </span>

                                <strong>
                                    {{ $company->phone }}
                                </strong>

                            </a>

                        @endif


                        {{-- Product Features --}}
                        <div class="product-detail-features">

                            <div class="product-feature">

                                <div class="product-feature-icon">
                                    <i class="bi bi-award"></i>
                                </div>

                                <div>
                                    <strong>
                                        {{ $isArabic
                                            ? 'جودة عالية'
                                            : 'High Quality' }}
                                    </strong>

                                    <span>
                                        {{ $isArabic
                                            ? 'منتجات موثوقة لمزارع الدواجن'
                                            : 'Reliable products for poultry farms' }}
                                    </span>
                                </div>

                            </div>


                            <div class="product-feature">

                                <div class="product-feature-icon">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <div>
                                    <strong>
                                        {{ $isArabic
                                            ? 'توفير وتوريد'
                                            : 'Supply & Delivery' }}
                                    </strong>

                                    <span>
                                        {{ $isArabic
                                            ? 'مخزون واسع وسرعة في التوريد'
                                            : 'Wide stock and fast supply' }}
                                    </span>
                                </div>

                            </div>


                            <div class="product-feature">

                                <div class="product-feature-icon">
                                    <i class="bi bi-headset"></i>
                                </div>

                                <div>
                                    <strong>
                                        {{ $isArabic
                                            ? 'دعم ما بعد البيع'
                                            : 'After-Sales Support' }}
                                    </strong>

                                    <span>
                                        {{ $isArabic
                                            ? 'دعم ومتابعة مستمرة'
                                            : 'Continuous support and follow-up' }}
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- Other Products --}}
    @if(isset($products) && $products->where('id', '!=', $product->id)->isNotEmpty())

        <section class="related-products section-padding">

            <div class="container">

                <div class="section-heading text-center">

                    <span class="section-kicker">
                        {{ $isArabic ? 'منتجات أخرى' : 'OTHER PRODUCTS' }}
                    </span>

                    <h2 class="section-title">
                        {{ $isArabic
                            ? 'منتجات قد تهمك'
                            : 'You May Also Like' }}
                    </h2>

                </div>


                <div class="products-grid">

                    @foreach($products->where('id', '!=', $product->id)->take(3) as $relatedProduct)

                        @php
                            $relatedName = $isArabic
                                ? $relatedProduct->name_ar
                                : $relatedProduct->name_en;
                        @endphp

                        <article class="product-card">

                            <a
                                href="{{ route('products.show', $relatedProduct->slug) }}"
                                class="product-image"
                            >

                                @if($relatedProduct->image)

                                    <img
                                        src="{{ asset('storage/' . $relatedProduct->image) }}"
                                        alt="{{ $relatedName }}"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="product-placeholder">
                                        <i class="bi bi-box-seam"></i>
                                    </div>

                                @endif

                            </a>


                            <div class="product-content">

                                <h3>

                                    <a href="{{ route('products.show', $relatedProduct->slug) }}">
                                        {{ $relatedName }}
                                    </a>

                                </h3>

                                <a
                                    href="{{ route('products.show', $relatedProduct->slug) }}"
                                    class="product-details-link"
                                >
                                    {{ $isArabic
                                        ? 'عرض التفاصيل'
                                        : 'View Details' }}

                                    <i class="bi bi-arrow-left"></i>
                                </a>

                            </div>

                        </article>

                    @endforeach

                </div>

            </div>

        </section>

    @endif
<style>
    /* ==========================================
   Product Details
========================================== */

.product-detail-hero {
    padding: 35px 0;
    background: #f8fafc;
    border-bottom: 1px solid #e9eef2;
}

.product-detail-breadcrumb {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    color: #94a3b8;
    font-size: 14px;
}

.product-detail-breadcrumb a {
    color: #198754;
    text-decoration: none;
    font-weight: 600;
}

.product-detail-breadcrumb i {
    font-size: 11px;
    color: #cbd5e1;
}

.product-detail-breadcrumb span {
    color: #64748b;
}


/* Image */

.product-detail-image {
    width: 100%;
    height: 520px;
    overflow: hidden;
    border-radius: 22px;
    background: #f1f5f9;
    border: 1px solid #e5e7eb;
    box-shadow: 0 15px 40px rgba(0, 0, 0, .07);
}

.product-detail-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.product-detail-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-detail-placeholder i {
    font-size: 100px;
    color: #94a3b8;
}


/* Content */

.product-detail-content {
    padding: 15px 0;
}

.product-detail-kicker {
    display: inline-block;
    margin-bottom: 15px;
    color: #198754;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1px;
}

.product-detail-content h1 {
    margin: 0 0 25px;
    color: #172033;
    font-size: clamp(32px, 4vw, 48px);
    line-height: 1.3;
    font-weight: 800;
}

.product-detail-description {
    color: #64748b;
    font-size: 17px;
    line-height: 2;
    margin-bottom: 25px;
}


/* Price */

.product-detail-price {
    display: flex;
    align-items: baseline;
    gap: 8px;
    margin-bottom: 25px;
    color: #198754;
}

.product-detail-price span {
    font-size: 32px;
    font-weight: 800;
}

.product-detail-price small {
    font-size: 15px;
    font-weight: 700;
}

.product-detail-inquiry {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 25px;
    padding: 15px 18px;
    background: #f0fdf4;
    border: 1px solid #dcfce7;
    border-radius: 10px;
    color: #166534;
    font-weight: 600;
}

.product-detail-inquiry i {
    font-size: 20px;
}


/* WhatsApp */

.product-detail-whatsapp {
    width: 100%;
    min-height: 58px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    padding: 15px 25px;

    border-radius: 11px;

    background: #198754;
    color: #fff !important;

    font-size: 16px;
    font-weight: 700;

    text-decoration: none !important;

    transition: .3s ease;
}

.product-detail-whatsapp:hover {
    background: #146c43;
    transform: translateY(-2px);
    color: #fff !important;
}

.product-detail-whatsapp i {
    font-size: 23px;
}


/* Phone */

.product-detail-phone {
    margin-top: 12px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;

    min-height: 50px;

    border: 1px solid #e2e8f0;
    border-radius: 10px;

    color: #475569;
    text-decoration: none;

    font-size: 14px;

    transition: .3s ease;
}

.product-detail-phone:hover {
    border-color: #198754;
    color: #198754;
}

.product-detail-phone i {
    color: #198754;
}


/* Features */

.product-detail-features {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #e5e7eb;

    display: flex;
    flex-direction: column;
    gap: 20px;
}

.product-feature {
    display: flex;
    align-items: center;
    gap: 15px;
}

.product-feature-icon {
    width: 48px;
    height: 48px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: #eef8f3;
    color: #198754;

    font-size: 21px;
}

.product-feature strong {
    display: block;
    margin-bottom: 3px;
    color: #172033;
    font-size: 15px;
}

.product-feature span {
    display: block;
    color: #64748b;
    font-size: 13px;
}


/* Related Products */

.related-products {
    background: #f8fafc;
}

.related-products .section-heading {
    margin-bottom: 40px;
}

.product-details-link {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    color: #198754;
    text-decoration: none;

    font-size: 14px;
    font-weight: 700;
}

.product-details-link:hover {
    color: #146c43;
}

.product-details-link i {
    transition: transform .3s ease;
}

.product-details-link:hover i {
    transform: translateX(-4px);
}


/* Responsive */

@media (max-width: 991px) {

    .product-detail-image {
        height: 450px;
    }

}

@media (max-width: 575px) {

    .product-detail-hero {
        padding: 25px 0;
    }

    .product-detail-image {
        height: 320px;
        border-radius: 15px;
    }

    .product-detail-content h1 {
        font-size: 30px;
    }

    .product-detail-description {
        font-size: 15px;
    }

    .product-detail-price span {
        font-size: 27px;
    }

}
</style>
@endsection
