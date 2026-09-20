@php
    $isArabic = app()->getLocale() === 'ar';

    $productsSection = $homeSections->get('products');

    $pageTitle = $isArabic
        ? 'منتجاتنا'
        : 'Our Products';

    $pageSubtitle = $isArabic
        ? 'اكتشف مجموعة منتجاتنا وحلولنا'
        : 'Explore our products and solutions';

    $whatsappNumber = '201025509311';
@endphp


<section class="products-page">

    {{-- =========================================================
        HERO
    ========================================================== --}}
    <div class="products-hero">

        <div class="container">

            <div class="products-hero-content">

                <span class="products-kicker">
                    {{ $isArabic ? 'منتجاتنا' : 'OUR PRODUCTS' }}
                </span>

                <h1>
                    {{ $pageTitle }}
                </h1>

                <p>
                    {{ $pageSubtitle }}
                </p>

            </div>

        </div>

    </div>


    {{-- =========================================================
        PRODUCTS CONTENT
    ========================================================== --}}
    <div class="container products-container">

        {{-- Section Heading --}}
        <div class="products-heading">

            <div>

                @if($productsSection?->subtitle)

                    <span class="section-kicker">
                        {{ $productsSection->subtitle }}
                    </span>

                @endif

                <h2>
                    @if($productsSection?->title)
                        {{ $productsSection->title }}
                    @else
                        {{ $isArabic ? 'تصفح منتجاتنا' : 'Browse Our Products' }}
                    @endif
                </h2>

            </div>


            <div class="products-count">

                <strong id="productsCount">
                    {{ $products->count() }}
                </strong>

                <span>
                    {{ $isArabic ? 'منتج' : 'Products' }}
                </span>

            </div>

        </div>


        {{-- =====================================================
            FILTER BAR
        ====================================================== --}}
        <div class="products-toolbar">


            {{-- Categories --}}
            <div class="categories-filter">

                <button
                    type="button"
                    class="category-filter-btn active"
                    data-category="all"
                >

                    <i class="bi bi-grid"></i>

                    <span>
                        {{ $isArabic ? 'الكل' : 'All' }}
                    </span>

                </button>


                @foreach($categories as $category)

                    @php
                        $categoryName = $isArabic
                            ? $category->name_ar
                            : $category->name_en;
                    @endphp

                    <button
                        type="button"
                        class="category-filter-btn"
                        data-category="{{ $category->id }}"
                    >

                        <i class="bi bi-box"></i>

                        <span>
                            {{ $categoryName }}
                        </span>

                    </button>

                @endforeach

            </div>


            {{-- Search --}}
            <div class="products-search">

                <i class="bi bi-search search-icon"></i>

                <input
                    type="search"
                    id="productSearch"
                    placeholder="{{ $isArabic ? 'ابحث عن منتج...' : 'Search for a product...' }}"
                    autocomplete="off"
                >

                <button
                    type="button"
                    id="clearSearch"
                    class="clear-search"
                    aria-label="{{ $isArabic ? 'مسح البحث' : 'Clear search' }}"
                >

                    <i class="bi bi-x"></i>

                </button>

            </div>

        </div>


        {{-- =====================================================
            PRODUCTS GRID
        ====================================================== --}}
        <div
            class="products-grid products-page-grid"
            id="productsGrid"
        >

            @foreach($products as $product)

                @php

                    $productName = $isArabic
                        ? $product->name_ar
                        : $product->name_en;

                    $productDescription = $isArabic
                        ? $product->description_ar
                        : $product->description_en;

                    $categoryName = '';

                    if ($product->category) {
                        $categoryName = $isArabic
                            ? $product->category->name_ar
                            : $product->category->name_en;
                    }

                    $message = $isArabic
                        ? "السلام عليكم، أريد الاستفسار عن المنتج: {$productName}"
                        : "Hello, I would like to inquire about: {$productName}";

                    $whatsappUrl =
                        'https://wa.me/' .
                        $whatsappNumber .
                        '?text=' .
                        urlencode($message);

                @endphp


                <article
                    class="product-card product-filter-item"
                    data-category="{{ $product->category_id ?? '' }}"
                    data-search="{{ strtolower(
                        $productName . ' ' .
                        ($productDescription ?? '') . ' ' .
                        $categoryName
                    ) }}"
                >

                    {{-- Image --}}
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


                    {{-- Content --}}
                    <div class="product-content">

                        {{-- Category --}}
                        @if($categoryName)

                            <div class="product-category">

                                <i class="bi bi-tag"></i>

                                {{ $categoryName }}

                            </div>

                        @endif


                        {{-- Name --}}
                        <h3>

                            <a href="{{ route('products.show', $product->slug) }}">

                                {{ $productName }}

                            </a>

                        </h3>


                        {{-- Description --}}
                        @if($productDescription)

                            <p class="product-description">

                                {{ Str::limit(strip_tags($productDescription), 125) }}

                            </p>

                        @endif


                        {{-- Footer --}}
                        <div class="product-footer">

                            @if($product->price)

                                <div class="product-price">

                                    <strong>
                                        {{ number_format($product->price, 0) }}
                                    </strong>

                                    <span>
                                        {{ $isArabic ? 'جنيه' : 'EGP' }}
                                    </span>

                                </div>

                            @else

                                <div class="product-price product-price-inquiry">

                                    {{ $isArabic ? 'السعر عند الطلب' : 'Price on request' }}

                                </div>

                            @endif


                            <a
                                href="{{ $whatsappUrl }}"
                                target="_blank"
                                rel="noopener"
                                class="product-whatsapp"
                            >

                                <i class="bi bi-whatsapp"></i>

                                <span>
                                    {{ $isArabic ? 'استفسر' : 'Inquire' }}
                                </span>

                            </a>

                        </div>

                    </div>

                </article>

            @endforeach


            {{-- Empty Result --}}
            <div
                class="products-empty"
                id="productsEmpty"
                style="display: none;"
            >

                <div class="products-empty-icon">

                    <i class="bi bi-search"></i>

                </div>

                <h3>
                    {{ $isArabic ? 'لم يتم العثور على منتجات' : 'No products found' }}
                </h3>

                <p>
                    {{ $isArabic
                        ? 'جرب البحث بكلمة أخرى أو اختر قسمًا مختلفًا.'
                        : 'Try another search or choose a different category.'
                    }}
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =============================================================
    PRODUCTS FILTER CSS
============================================================= --}}
<style>
/* =========================================================
   PRODUCTS PAGE — RED / WHITE BRAND
========================================================= */

.products-page {
    background: var(--tabarak-light);
    color: var(--tabarak-text);
}

/* =========================================================
   HERO
========================================================= */

.products-hero {
    position: relative;
    min-height: 390px;
    display: flex;
    align-items: center;
    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            var(--tabarak-blue-dark) 0%,
            var(--tabarak-blue) 100%
        );

    margin-bottom: 70px;
}

.products-hero::before {
    content: "";
    position: absolute;
    inset: 0;

    background:
        radial-gradient(
            circle at 85% 20%,
            rgba(255,255,255,.18),
            transparent 35%
        ),
        radial-gradient(
            circle at 15% 90%,
            rgba(255,255,255,.12),
            transparent 35%
        );

    pointer-events: none;
}

.products-hero-content {
    position: relative;
    z-index: 2;
    max-width: 850px;
    padding: 80px 0;
}

.products-kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    color: rgba(255,255,255,.88);

    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;

    margin-bottom: 18px;
}

.products-kicker::before {
    content: "";

    width: 35px;
    height: 2px;

    background: currentColor;
}

.products-hero h1 {
    margin: 0 0 18px;

    color: #fff;

    font-size: clamp(42px, 6vw, 72px);
    font-weight: 800;
    line-height: 1.1;
}

.products-hero p {
    margin: 0;

    color: rgba(255,255,255,.88);

    font-size: 18px;
    line-height: 1.9;

    max-width: 650px;
}


/* =========================================================
   HEADING
========================================================= */

.products-heading {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;

    gap: 30px;
    margin-bottom: 35px;
}

.products-heading h2 {
    margin: 8px 0 0;

    color: var(--tabarak-text);

    font-size: clamp(30px, 4vw, 46px);
    font-weight: 800;
    line-height: 1.2;
}

.products-count {
    display: flex;
    align-items: baseline;

    gap: 8px;

    white-space: nowrap;

    color: var(--tabarak-muted);
}

.products-count strong {
    color: var(--tabarak-blue);

    font-size: 30px;
    font-weight: 800;
}


/* =========================================================
   TOOLBAR
========================================================= */

.products-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 25px;
    margin-bottom: 45px;
    padding: 18px;

    background: var(--tabarak-white);

    border: 1px solid var(--tabarak-border);
    border-radius: 18px;

    box-shadow: 0 10px 35px rgba(38,38,38,.06);
}


/* =========================================================
   CATEGORY FILTER
========================================================= */

.categories-filter {
    display: flex;
    align-items: center;

    gap: 8px;
    flex-wrap: wrap;
}

.category-filter-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    min-height: 44px;
    padding: 0 17px;

    border: 1px solid var(--tabarak-border);

    background: var(--tabarak-white);
    color: var(--tabarak-muted);

    border-radius: 10px;

    font-size: 14px;
    font-weight: 600;

    cursor: pointer;

    transition:
        background .25s ease,
        color .25s ease,
        border-color .25s ease,
        transform .25s ease;
}

.category-filter-btn:hover {
    transform: translateY(-2px);

    border-color: var(--tabarak-blue);

    color: var(--tabarak-blue);

    background: var(--tabarak-light-blue);
}

.category-filter-btn.active {
    background: var(--tabarak-blue);

    border-color: var(--tabarak-blue);

    color: var(--tabarak-white);

    box-shadow:
        0 8px 20px rgba(253,49,46,.20);
}


/* =========================================================
   SEARCH
========================================================= */

.products-search {
    position: relative;

    flex: 0 0 300px;

    display: flex;
    align-items: center;
}

.products-search input {
    width: 100%;
    height: 50px;

    padding: 0 48px 0 45px;

    border: 1px solid var(--tabarak-border);
    border-radius: 12px;

    outline: none;

    background: var(--tabarak-light);
    color: var(--tabarak-text);

    font-size: 14px;

    transition: .25s ease;
}

.products-search input:focus {
    background: var(--tabarak-white);

    border-color: var(--tabarak-blue);

    box-shadow:
        0 0 0 4px rgba(253,49,46,.10);
}

.search-icon {
    position: absolute;

    left: 17px;

    z-index: 2;

    color: var(--tabarak-muted);

    pointer-events: none;
}

.clear-search {
    position: absolute;

    right: 10px;

    width: 32px;
    height: 32px;

    border: 0;
    border-radius: 50%;

    background: transparent;
    color: var(--tabarak-muted);

    cursor: pointer;

    display: none;
    align-items: center;
    justify-content: center;
}

.clear-search:hover {
    background: var(--tabarak-light-blue);
    color: var(--tabarak-blue);
}


/* =========================================================
   PRODUCTS GRID
========================================================= */

.products-page-grid {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 30px;
}


/* =========================================================
   PRODUCT CARD
========================================================= */

.product-filter-item {
    min-width: 0;

    background: var(--tabarak-white);

    border: 1px solid var(--tabarak-border);
    border-radius: 18px;

    overflow: hidden;

    box-shadow:
        0 10px 35px rgba(38,38,38,.055);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}

.product-filter-item:hover {
    transform: translateY(-7px);

    border-color: rgba(253,49,46,.20);

    box-shadow:
        0 22px 55px rgba(38,38,38,.12);
}


/* =========================================================
   PRODUCT IMAGE
========================================================= */

.product-filter-item .product-image {
    position: relative;

    display: block;

    height: 310px;

    overflow: hidden;

    background: var(--tabarak-light);
}

.product-filter-item .product-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform .5s ease;
}

.product-filter-item:hover .product-image img {
    transform: scale(1.06);
}


/* IMAGE OVERLAY */

.product-overlay {
    position: absolute;

    inset: 0;

    display: flex;
    align-items: flex-end;
    justify-content: flex-end;

    padding: 20px;

    background:
        linear-gradient(
            to top,
            rgba(165,0,52,.28),
            transparent 40%
        );

    opacity: 0;

    transition: opacity .3s ease;
}

.product-filter-item:hover .product-overlay {
    opacity: 1;
}

.product-view {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 48px;
    height: 48px;

    border-radius: 50%;

    background: var(--tabarak-white);

    color: var(--tabarak-blue);

    font-size: 18px;

    box-shadow:
        0 8px 20px rgba(0,0,0,.12);
}

.product-placeholder {
    width: 100%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;

    color: var(--tabarak-blue);

    font-size: 55px;

    background: var(--tabarak-light-blue);
}


/* =========================================================
   CONTENT
========================================================= */

.product-filter-item .product-content {
    padding: 24px;
}

.product-category {
    display: flex;
    align-items: center;

    gap: 7px;
    margin-bottom: 10px;

    color: var(--tabarak-blue);

    font-size: 12px;
    font-weight: 700;
}

.product-category i {
    font-size: 11px;
}

.product-filter-item h3 {
    margin: 0 0 12px;

    font-size: 21px;
    line-height: 1.45;
    font-weight: 750;
}

.product-filter-item h3 a {
    color: var(--tabarak-text);

    text-decoration: none;

    transition: color .2s ease;
}

.product-filter-item h3 a:hover {
    color: var(--tabarak-blue);
}

.product-filter-item .product-description {
    min-height: 55px;

    margin: 0 0 22px;

    color: var(--tabarak-muted);

    font-size: 14px;
    line-height: 1.8;
}


/* =========================================================
   FOOTER
========================================================= */

.product-filter-item .product-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 15px;

    padding-top: 18px;

    border-top: 1px solid var(--tabarak-border);
}


/* =========================================================
   PRICE
========================================================= */

.product-price {
    display: flex;
    align-items: baseline;

    gap: 5px;

    color: var(--tabarak-text);
}

.product-price strong {
    font-size: 21px;
    font-weight: 800;
}

.product-price span {
    color: var(--tabarak-muted);

    font-size: 12px;
}

.product-price-inquiry {
    font-size: 13px;
    font-weight: 700;
}


/* =========================================================
   WHATSAPP
========================================================= */

.product-whatsapp {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 7px;

    min-height: 42px;

    padding: 0 14px;

    border-radius: 9px;

    background: #168c4b;

    color: #fff;

    text-decoration: none;

    font-size: 12px;
    font-weight: 700;

    transition: .25s ease;
}

.product-whatsapp:hover {
    background: #11753d;

    color: #fff;

    transform: translateY(-2px);
}


/* =========================================================
   EMPTY STATE
========================================================= */

.products-empty {
    grid-column: 1 / -1;

    text-align: center;

    padding: 90px 20px;
}

.products-empty-icon {
    width: 75px;
    height: 75px;

    margin: 0 auto 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: var(--tabarak-light-blue);

    color: var(--tabarak-blue);

    font-size: 28px;
}

.products-empty h3 {
    margin-bottom: 8px;

    font-size: 24px;

    color: var(--tabarak-text);
}

.products-empty p {
    margin: 0;

    color: var(--tabarak-muted);
}


/* =========================================================
   RTL
========================================================= */

html[dir="rtl"] .products-search input {
    padding-right: 45px;
    padding-left: 48px;
}

html[dir="rtl"] .search-icon {
    right: 17px;
    left: auto;
}

html[dir="rtl"] .clear-search {
    left: 10px;
    right: auto;
}

html[dir="rtl"] .products-kicker::before {
    order: 2;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .products-page-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 991px) {

    .products-toolbar {
        flex-direction: column;
        align-items: stretch;
    }

    .categories-filter {
        width: 100%;
    }

    .products-search {
        flex-basis: auto;
        width: 100%;
    }

}

@media (max-width: 767px) {

    .products-hero {
        min-height: 320px;
        margin-bottom: 45px;
    }

    .products-hero-content {
        padding: 60px 0;
    }

    .products-hero h1 {
        font-size: 42px;
    }

    .products-hero p {
        font-size: 15px;
    }

    .products-heading {
        align-items: flex-start;
        flex-direction: column;

        margin-bottom: 25px;
    }

    .products-toolbar {
        padding: 14px;

        border-radius: 14px;

        margin-bottom: 30px;
    }

    .category-filter-btn {
        flex: 1 1 auto;
    }

    .products-page-grid {
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .product-filter-item .product-image {
        height: 280px;
    }

}

@media (max-width: 480px) {

    .products-hero h1 {
        font-size: 36px;
    }

    .categories-filter {
        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

    .category-filter-btn {
        width: 100%;
    }

    .product-filter-item .product-content {
        padding: 20px;
    }

    .product-filter-item .product-footer {
        align-items: flex-start;
        flex-direction: column;
    }

    .product-whatsapp {
        width: 100%;
    }

}
</style>


{{-- =============================================================
    PRODUCTS FILTER JS
============================================================= --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('productSearch');

    const clearSearch = document.getElementById('clearSearch');

    const products = document.querySelectorAll('.product-filter-item');

    const categoryButtons =
        document.querySelectorAll('.category-filter-btn');

    const productsEmpty =
        document.getElementById('productsEmpty');

    const productsCount =
        document.getElementById('productsCount');


    let activeCategory = 'all';


    function filterProducts() {

        const searchValue =
            searchInput.value
                .trim()
                .toLowerCase();


        let visibleCount = 0;


        products.forEach(function (product) {

            const category =
                product.dataset.category || '';

            const searchText =
                product.dataset.search || '';


            const categoryMatch =
                activeCategory === 'all' ||
                category === activeCategory;


            const searchMatch =
                searchValue === '' ||
                searchText.includes(searchValue);


            if (categoryMatch && searchMatch) {

                product.style.display = '';

                visibleCount++;

            } else {

                product.style.display = 'none';

            }

        });


        productsCount.textContent = visibleCount;


        if (visibleCount === 0) {

            productsEmpty.style.display = 'block';

        } else {

            productsEmpty.style.display = 'none';

        }


        if (searchValue.length > 0) {

            clearSearch.style.display = 'flex';

        } else {

            clearSearch.style.display = 'none';

        }

    }


    categoryButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            categoryButtons.forEach(function (btn) {

                btn.classList.remove('active');

            });


            this.classList.add('active');


            activeCategory =
                this.dataset.category;


            filterProducts();

        });

    });


    searchInput.addEventListener(
        'input',
        filterProducts
    );


    clearSearch.addEventListener(
        'click',
        function () {

            searchInput.value = '';

            searchInput.focus();

            filterProducts();

        }
    );


    filterProducts();

});

</script>
   
