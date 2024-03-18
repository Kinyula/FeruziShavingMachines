{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FeruziShavingMachines</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Haircutting machine og Tz</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">
                <img src="{{ asset('assets/img/logo3.png') }}" alt="" class="nav__logo-img">
            </a>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__menu-top">
                    <a href="index.html" class="nav__menu-logo">
                        <img src="{{ asset('assets/img/logo3.png') }}" alt="">
                    </a>

                    <div class="nav__close" id="nav-close">
                        <i class="fi fi-rs-cross-small"></i>
                    </div>
                </div>
                <div class="header__search">
                    <input type="text" placeholder="after search close" class="form__input" id="search-input"
                        name="search-input">

                </div>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ asset('shop') }}" class="nav__link">shop</a>
                    </li>

                    <li class="nav__item">
                        <a href="https://instagram.com/haircutting_machine_og_tz?igshid=OGQ5ZDc2ODk2ZA=="
                            class="nav__link">about us</a>
                    </li>

                    <li class="nav__item">
                        <a href="https://wa.me/c/255717706299" class="nav__link">view products</a>
                    </li>
                </ul>
            </div>

            <div class="header__user-actions">

                <div class="header__action-btn nav__toggle" id="nav-toggle">
                    <img src="{{ asset('assets/img/menu-burger.svg') }}" alt="">
                </div>
            </div>

        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section--lg">
            <div class="home__container container grid">
                <div class="home__content">
                    <span class="home__subtitle">hot promotion</span>
                    <h1 class="home__title">Salon Equipments <span>Greatest Collection</span>
                    </h1>
                    <p class="home__description">Buy now and get free delivery
                    </p>
                    <a href="{{ asset('shop') }}" class="btn">shop now</a>
                </div>


            </div>
        </section>

        <!--=============== CATEGORIES ===============-->
        <section class="categories container section">
            <h3 class="section__title"><span>Other</span> categories</h3>


            <div class="categories__container swiper">

                @foreach ($categoryImages as $category_image)
                    <div class="swiper-wrapper">
                        <a href="{{ asset('shop') }}" class="category__item swiper-slide">
                            <img src="{{ asset('storage/product_images/' . $category_image->product_image) }}"
                                alt="" class="category__img">

                            <h3 class="category__title">{{ $category_image->product_category->category_name }}</h3>
                        </a>

                    </div>
                    <div class="swiper-button-next">
                        <i class="fi fi-rs-angle-small-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fi fi-rs-angle-small-left"></i>
                    </div>
                @endforeach


            </div>
        </section>

        <!--=============== PRODUCTS ===============-->
        <section class="products section container">
            <div class="tab__btns">
                <span class="tab__btn active-tab">featured</span>
            </div>

            <div class="tab__items">
                <div class="tab__item  active-tab">
                    <div class="products__container grid">
                        @foreach ($categoryImages as $product)
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="{{ asset('shop') }}" class="product__images">
                                        <img src="{{ asset('storage/product_images/' . $product->product_image) }}"
                                            alt="" class="product__img default">

                                        <img src="{{ asset('assets/img/wmark_ng130.webp') }}" alt=""
                                            class="product__img hover">
                                    </a>
                                </div>

                                <div class="product__content">
                                    <span
                                        class="product__category">{{ $product->product_category->category_name }}</span>
                                    <a href="{{ asset('shop') }}">
                                        <h3 class="product__title">{{ $product->product_name }}</h3>
                                    </a>

                                    <div class="product__price flex">
                                        <span class="new__price">{{ $product->price->new_price }}/=</span>
                                        <span class="old__price">{{ $product->price->old_price }}/=</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <!--=============== SHOWCASE ===============-->
        <section class="showcase section">
            <div class="showcase__container container grid">
                @foreach ($SalonClothings as $salon_clothing)
                    <div class="showcase__wrapper">

                        <h3 class="section__title">{{ $salon_clothing->product_category->category_name }}</h3>

                        <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $salon_clothing->product_image) }}"
                                    alt="" class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title">{{ $salon_clothing->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">Tzs {{ $salon_clothing->price->new_price }}/=</span>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('assets/img/barber_gown.jpg') }}" alt=""
                                    class="showcase__img">
                            </a>



                        </div> --}}

                @foreach ($Blades as $blade)
                    <div class="showcase__wrapper">
                        <h3 class="section__title">{{ $blade->product_category->category_name }}</h3>

                        <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $blade->product_image) }}"
                                    alt="" class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title">{{ $blade->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">Tzs {{ $blade->price->new_price }}/=</span>

                                </div>
                            </div>
                        </div>
                @endforeach


                <div class="showcase__wrapper">
                    <h3 class="section__title">Bags and holder</h3>

                    @foreach ($Holders as $holder)
                        <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $holder->product_image) }}"
                                    alt="" class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title"> {{ $holder->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">Tzs {{ $holder->price->new_price }}/=</span>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($Bag as $bag)
                        <div class="showcase__item">


                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $bag->product_image) }}" alt=""
                                    class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title">{{ $bag->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">Tzs {{ $bag->price->new_price }}/=</span>

                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="showcase__wrapper">
                    <h3 class="section__title">Brush and gloves</h3>

                    @foreach ($Brush as $brush)
                        <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $brush->product_image) }}"
                                    alt="" class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title">{{ $brush->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">TZs {{ $brush->price->new_price }}/=</span>

                                </div>
                            </div>
                        </div>
                    @endforeach


                    @foreach ($Gloves as $glove)
                        <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $glove->product_image) }}"
                                    alt="" class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title">{{ $glove->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">Tzs {{ $glove->price->new_price }}</span>
                                    <p>pcs100</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($Sponge as $sponge)
                        <div class="showcase__item">
                            <a href="{{ asset('shop') }}" class="showcase__img-box">
                                <img src="{{ asset('storage/product_images/' . $sponge->product_image) }}"
                                    alt="" class="showcase__img">
                            </a>

                            <div class="showcase__content">
                                <a href="{{ asset('shop') }}">
                                    <h4 class="showcase__title">{{ $sponge->product_name }}</h4>
                                </a>

                                <div class="showcase__price flex">
                                    <span class="new__price">Tzs {{ $sponge->price->new_price }}/=</span>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>

    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
        <div class="footer__container grid">
            <div class="footer__content">
                <a href="{{ asset('/') }}" class="footer__logo">
                    <img src="{{ asset('assets/img/logo3.png') }}" alt="" class="footer__logo-img">
                </a>

                <h4 class="footer__subtitle">Contact</h4>

                <p class="footer__description">
                    <span>Address:</span> haircutting machine tz
                </p>

                <p class="footer__description">
                    <span>phone:</span>
                    @foreach ($phoneNumber as $number)
                    <span style="color: red;font-weight:bold">Or</span>
                    {{$number->phone_numbers}}

                    <br>

                    @endforeach

                </p>

                <p class="footer__description">
                    <span>24 Hours:</span> Mon-Sun
                </p>

                <a href="{{ asset('login') }}"> Admin login</a>

                <div class="footer__social">
                    <h4 class="footer__subtitle">Follow Me</h4>

                    <div class="footer__social-links flex">
                        <a href="">
                            <img src="assets/img/icon-facebook.svg" alt="" class="footer__social-icon">
                        </a>





                            <img src="assets/img/WhatsApp-Logo.wine.svg" alt=""
                                class="footer__social-icon tsup">
                        </a>

                        <a href="https://instagram.com/haircutting_machine_og_tz?igshid=OGQ5ZDc2ODk2ZA==">
                            <img src="assets/img/icon-instagram.svg" alt="" class="footer__social-icon">
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Address</h3>

                <ul class="footer__links">
                    <li><a href="https://www.instagram.com/haircutting_machine_og_tz?igshid=OGQ5ZDc2ODk2ZA=="
                            class="footer__link">About us</a></li>
                    <li><a href="https://wa.link/ysxwd8" class="footer__link">Contact us</a></li>
                    <li><a href="{{ asset('shop') }}" class="footer__link">buy from Us</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Secured Payment Method</h3>

                <img src="assets/img/payment-method.png" alt="" class="payment__img">
                <p>you can pay with any method for any information contact us</p>
            </div>
        </div>

        <div class="footer__bottom">
            <p class="copyright">&copy; 2023 Evara. All rights Reserved</p>
            <a href="https://wa.link/9qb4pr"><span class="designer">Designed by Victor .Z. Kinyula</span></a>
        </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
