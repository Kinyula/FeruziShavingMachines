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
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>Haircutting machines og Tz</title>
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
                    <a href="{{ asset('shop') }}" class="nav__menu-logo">
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
                        <a href="{{ asset('/') }}" class="nav__link active-link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ asset('shop') }}" class="nav__link">shop</a>
                    </li>

                    <li class="nav__item">
                        <a href="https://instagram.com/haircutting_machine_og_tz?igshid=OGQ5ZDc2ODk2ZA=="
                            class="nav__link">about us</a>
                    </li>

                    <li class="nav__item">
                        <a href="https://wa.me/c/{{ $phoneNumber->phone_numbers }}" class="nav__link">view products</a>
                    </li>
                </ul>
            </div>

            <div class="header__user-actions">

                <div class="header__action-btn nav__toggle" id="nav-toggle">
                    <img src="assets/img/menu-burger.svg" alt="">
                </div>
            </div>

        </nav>
    </header>
    <!--=============== MAIN ===============-->
    <main class="main">

        <!--=============== PRODUCTS ===============-->
        <section class="products section--lg container">
            <a href="https://wa.me/c/{{ $phoneNumber->phone_numbers }}">
                <p class="total__products">view <span> here </span> all products</p>
            </a>

            <div class="products__container grid" id="product-list">
                @foreach ($productImages as $product)
                    <div class="product__item">
                        <div class="product__banner">
                            <a href="https://wa.link/ysxwd8"
                                class="product__images">
                                <img src="{{ asset('storage/product_images/' . $product->product_image) }}"
                                    alt="" class="product__img default">

                                <img src="assets/img/wmark ng130.webp" alt="" class="product__img hover">
                            </a>
                        </div>

                        <div class="product__content">
                            <span class="product__category">{{ $product->product_category->category_name }}</span>
                            <a href="https://wa.link/ysxwd8">
                                <h3 class="product__title">{{ $product->product_name }}</h3>
                            </a>

                            <div class="product__price flex">
                                <span class="new__price">Tzs {{ $product->price->new_price }}/=</span>
                                <span class="old__price">Tzs {{ $product->price->old_price }}/=</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <ul class="pagination">
                <li><a href="https://instagram.com/haircutting_machine_og_tz?igshid=OGQ5ZDc2ODk2ZA=="
                        class="pagination__link">...</a></li>
            </ul>
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
        <div class="footer__container grid">
            <div class="footer__content">
                <a href="{{asset('shop')}}" class="footer__logo">
                    <img src="{{asset('assets/img/logo3.png')}}" alt="" class="footer__logo-img">
                </a>

                <h4 class="footer__subtitle">Contact</h4>

                <p class="footer__description">
                    <span>Address:</span> haircutting machine tz
                </p>

                <p class="footer__description">
                    <span>phone:</span>{{ $phoneNumber->phone_numbers }}
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

                        <a href="https://wa.me/c/{{ $phoneNumber->phone_numbers }}">
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
