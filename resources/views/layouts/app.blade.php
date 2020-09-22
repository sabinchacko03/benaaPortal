<!DOCTYPE html>
<html lang="en" dir="ltr">    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="{{asset('public/images/favicon.png')}}">
        <!-- fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
        <!-- css -->
        <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/vendor/owl-carousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/vendor/photoswipe/photoswipe.css')}}">
        <link rel="stylesheet" href="{{asset('public/vendor/photoswipe/default-skin/default-skin.css')}}">
        <link rel="stylesheet" href="{{asset('public/vendor/select2/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <!-- font - fontawesome -->
        <link rel="stylesheet" href="{{asset('public/vendor/fontawesome/css/all.min.css')}}">
        <!-- font - stroyka -->
        <link rel="stylesheet" href="{{asset('public/fonts/stroyka/stroyka.css')}}">
    </head>
    <body>
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
                <div class="mobile-header__panel">
                    <div class="container">
                        <div class="mobile-header__body">
                            <button class="mobile-header__menu-button">
                                <svg width="18px" height="14px">
                                    <use xlink:href="{{asset('public/images/sprite.svg#menu-18x14')}}"></use>
                                </svg>
                            </button>
                            <a class="mobile-header__logo" href="<?= URL::to('/') ?>">
                                <!-- mobile-logo -->
                                <img src="{{asset('public/images/Benaa_Logo.png')}}" alt="800Benaa" />
                                <!-- mobile-logo / end -->
                            </a>
                            <div class="search search--location--mobile-header mobile-header__search">
                                <div class="search__body">
                                    <form class="search__form" action="{{ url('search')}}" method="GET">
                                        <input class="search__input" name="searchKey" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                        <button class="search__button search__button--type--submit" type="submit">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#search-20')}}"></use>
                                            </svg>
                                        </button>
                                        <button class="search__button search__button--type--close" type="button">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#cross-20')}}"></use>
                                            </svg>
                                        </button>
                                        <div class="search__border"></div>
                                    </form>
                                    <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                                </div>
                            </div>
                            <div class="mobile-header__indicators">
                                <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                                    <button class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#search-20')}}"></use>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="indicator indicator--mobile d-sm-flex d-none">
                                    <a href="wishlist.html" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#heart-20')}}"></use>
                                            </svg>
                                            <span class="indicator__value">0</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="indicator indicator--mobile">
                                    <a href="{{URL::to('/cart')}}" class="indicator__button">
                                        <span class="indicator__area">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#cart-20')}}"></use>
                                            </svg>
                                            <span class="indicator__value">{{\Cart::count()}}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <header class="site__header d-lg-block d-none">
            <div class="site-header">
                <!-- .topbar -->
                <div class="site-header__topbar topbar">
                    <div class="topbar__container container">
                        <div class="topbar__row">
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="about-us.html">About Us</a>
                            </div>
                            <div class="topbar__item topbar__item--link">
                                <a class="topbar-link" href="contact-us.html">Contact Us</a>
                            </div>
                            <div class="topbar__spring"></div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        My Account
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>                                    
                                </div>
                            </div>
                            <div class="topbar__item">
                                <div class="topbar-dropdown">
                                    <button class="topbar-dropdown__btn" type="button">
                                        Currency: <span class="topbar__item-value">AED</span>
                                        <svg width="7px" height="5px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                        </svg>
                                    </button>                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- .topbar / end -->
                <div class="site-header__middle container">
                    <div class="site-header__logo">
                        <a href="<?= URL::to('/') ?>">
                            <!-- logo -->
                            <img src="{{asset('public/images/Benaa_Logo.png')}}" alt="800Benaa" />
                            <!-- logo / end -->
                        </a>
                    </div>
                    <div class="site-header__search">
                        <div class="search search--location--header ">
                            <div class="search__body">
                                <form class="search__form" action="{{ url('search')}}" method="GET">
                                    <select class="search__categories" aria-label="Category" id="categorySearchList" style="text-transform: capitalize;">
                                    </select>
                                    <input class="search__input" name="searchKey" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                    <button class="search__button search__button--type--submit" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="{{asset('public/images/sprite.svg#search-20')}}"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                                <div class="search__suggestions suggestions suggestions--location--header"></div>
                            </div>
                        </div>
                    </div>
                    <div class="site-header__phone">
                        <div class="site-header__phone-title">Customer Service</div>
                        <div class="site-header__phone-number">800-23622</div>
                    </div>
                </div>
                <div class="site-header__nav-panel">
                    <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
                    <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                        <div class="nav-panel__container container">
                            <div class="nav-panel__row">
                                <div class="nav-panel__departments">
                                    <!-- .departments -->                                    
                                    <!-- .departments / end -->
                                </div>
                                <!-- .nav-links -->
                                <div class="nav-panel__nav-links nav-links">
                                    <ul class="nav-links__list">
                                        <li class="nav-links__item">
                                            <a class="nav-links__item-link" href="<?= URL::to('/') ?>">
                                                <div class="nav-links__item-body">
                                                    Home
                                                </div>
                                            </a>                                            
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="">
                                                <div class="nav-links__item-body">
                                                    Categories
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-down-9x6')}}"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="nav-links__submenu nav-links__submenu--type--megamenu nav-links__submenu--size--nl">
                                                <!-- .megamenu -->
                                                <div class="megamenu ">
                                                    <div class="megamenu__body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Power Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Engravers</a></li>
                                                                            <li class="megamenu__item"><a href="">Wrenches</a></li>
                                                                            <li class="megamenu__item"><a href="">Wall Chaser</a></li>
                                                                            <li class="megamenu__item"><a href="">Pneumatic Tools</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Machine Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Thread Cutting</a></li>
                                                                            <li class="megamenu__item"><a href="">Chip Blowers</a></li>
                                                                            <li class="megamenu__item"><a href="">Sharpening Machines</a></li>
                                                                            <li class="megamenu__item"><a href="">Pipe Cutters</a></li>
                                                                            <li class="megamenu__item"><a href="">Slotting machines</a></li>
                                                                            <li class="megamenu__item"><a href="">Lathes</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Hand Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Screwdrivers</a></li>
                                                                            <li class="megamenu__item"><a href="">Handsaws</a></li>
                                                                            <li class="megamenu__item"><a href="">Knives</a></li>
                                                                            <li class="megamenu__item"><a href="">Axes</a></li>
                                                                            <li class="megamenu__item"><a href="">Multitools</a></li>
                                                                            <li class="megamenu__item"><a href="">Paint Tools</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item  megamenu__item--with-submenu ">
                                                                        <a href="">Garden Equipment</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="">Motor Pumps</a></li>
                                                                            <li class="megamenu__item"><a href="">Chainsaws</a></li>
                                                                            <li class="megamenu__item"><a href="">Electric Saws</a></li>
                                                                            <li class="megamenu__item"><a href="">Brush Cutters</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .megamenu / end -->
                                            </div>
                                        </li>
                                        <li class="nav-links__item">
                                            <a class="nav-links__item-link" href="shop">
                                                <div class="nav-links__item-body">
                                                    Shop
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>                                           
                                        </li>
                                        <li class="nav-links__item  nav-links__item--has-submenu ">
                                            <a class="nav-links__item-link" href="account-login.html">
                                                <div class="nav-links__item-body">
                                                    Account
                                                    <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                    </svg>
                                                </div>
                                            </a>                                            
                                        </li>                                                                                                                   
                                    </ul>
                                </div>
                                <!-- .nav-links / end -->
                                <div class="nav-panel__indicators">                                    
                                    <div class="indicator indicator--trigger--click">
                                        <a href="cart.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="{{asset('public/images/sprite.svg#cart-20')}}"></use>
                                                </svg>
                                                <span class="indicator__value">{{\Cart::count()}}</span>
                                            </span>
                                        </a>
                                        <div class="indicator__dropdown">
                                            <!-- .dropcart -->
                                            <div class="dropcart dropcart--style--dropdown">
                                                <div class="dropcart__body">
                                                    <form method="post" action="{{URL::to('/deleteitem')}}">
                                                    @csrf
                                                        <div class="dropcart__products-list">
                                                            @if(count(\Cart::content()) > 0)
                                                            @foreach(\Cart::content() as $items)
                                                                <input type="hidden" name="rowId" value="{{$items->rowId}}" />
                                                                <div class="dropcart__product">
                                                                    <div class="product-image dropcart__product-image">
                                                                        <a href="{{$items->options->link}}" class="product-image__body">
                                                                            <img class="product-image__img" src="{{$items->options->image}}" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="dropcart__product-info">
                                                                        <div class="dropcart__product-name"><a href="{{$items->options->link}}">{{ucwords(strtolower($items->name))}}</a></div>
                                                                        <!-- <ul class="dropcart__product-options">
                                                                            <li>Color: Yellow</li>
                                                                            <li>Material: Aluminium</li>
                                                                        </ul> -->
                                                                        <div class="dropcart__product-meta">
                                                                            <span class="dropcart__product-quantity">{{$items->qty}}</span> ×
                                                                            <span class="dropcart__product-price">{{$items->price}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" name="submit" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon" value="delete">
                                                                        <svg width="10px" height="10px">
                                                                            <use xlink:href="{{asset('public/images/sprite.svg#cross-10')}}"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                            @else
                                                                <h3>No Products in Cart!</h3>
                                                            @endif
                                                        </div>
                                                    </form>
                                                    <div class="dropcart__totals">

                                                        <table>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td>AED {{\Cart::subtotal()}}</td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <th>Shipping</th>
                                                                <td>Not Calculated</td>
                                                            </tr> -->
                                                            <tr>
                                                                <th>Tax</th>
                                                                <td>AED {{\Cart::tax()}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total</th>
                                                                <td>AED {{\Cart::total()}}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="dropcart__buttons">
                                                        <a class="btn btn-secondary" href="{{URL::to('/cart')}}">View Cart</a>
                                                        <a class="btn btn-primary" href="{{URL::to('/checkout')}}">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .dropcart / end -->
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="site__body">
        <!-- desktop site__header / end -->

<!--        <nav id="navigation">
            <div class="container">
                <div id="responsive-nav">
                    <ul class="main-nav nav navbar-nav">
                        <li class="active"><a href="<?= URL::to('/') ?>">Home</a></li>
                        <li><a href="#">Hot Deals</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
            </div>
        </nav>-->

        <!-- SECTION -->
        <!--<div class="section">-->
        @yield('content')
        <!--</div>-->
        
        </div>
        <!-- site__footer -->
        <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">Contact Us</h5>
                                    <div class="footer-contacts__text">
                                        Please contact us for more information about our products.
                                    </div>
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i>Plot 2125 - Nadd Al Hamar</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i> sales@800benaa.com</li>
                                        <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> 800-23622</li>
                                        <li><i class="footer-contacts__icon far fa-clock"></i> Sat-Thur 7.00am - 4:00pm</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-3">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">Information</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">About Us</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Delivery Information</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Privacy Policy</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>                            
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="site-footer__widget footer-newsletter">
                                    <h5 class="footer-newsletter__title">Newsletter</h5>
                                    <div class="footer-newsletter__text">
                                        Don’t miss any offers! Join our newsletter for the latest offers and news
                                    </div>
                                    <form action="" class="footer-newsletter__form">
                                        <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                        <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                        <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                    </form>
                                    <div class="footer-newsletter__text footer-newsletter__text--social">
                                        Follow us on social networks
                                    </div>
                                    <!-- social-links -->
                                    <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                        <ul class="social-links__list">
                                            <!-- <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--youtube" href="" target="_blank">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>    -->
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--facebook" href="https://www.facebook.com/800benaa" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <!-- <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--twitter" href="" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li> -->
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--instagram" href="https://www.instagram.com/800benaa" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- social-links / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                            <p>© Copyright <script type="text/javascript">document.write(new Date().getFullYear())</script> <a class="topbar__item-value" href="#">800Benaa</a>. All Rights Reserved.</p>
                            <!-- copyright / end -->
                        </div>
                        <div class="site-footer__payments">
                            <img src="images/payments.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <svg width="13px" height="8px">
                                    <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-up-13x8')}}"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="{{asset('public/images/sprite.svg#cross-20')}}"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="<?= URL::to('/') ?>" class="mobile-links__item-link">Home</a>
                        </div>                        
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="" class="mobile-links__item-link">Categories</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Power Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Engravers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Wrenches</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Wall Chaser</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Pneumatic Tools</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Machine Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Thread Cutting</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Chip Blowers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Sharpening Machines</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Pipe Cutters</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Slotting machines</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Lathes</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="shop" class="mobile-links__item-link">Shop</a>
                        </div>                        
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="account-login.html" class="mobile-links__item-link">Account</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-down-12x7')}}"></use>
                                </svg>
                            </button>
                        </div>                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->
    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- photoswipe / end -->
    <!-- js -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('public/vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('public/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('public/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('public/js/number.js') }}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script src="{{ asset('public/js/header.js') }}"></script>
    <script src="{{ asset('public/vendor/svg4everybody/svg4everybody.min.js') }}"></script>
    <script>
        svg4everybody();
    </script>
</body>

</html>