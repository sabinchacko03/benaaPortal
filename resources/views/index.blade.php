@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- .block-slideshow -->
<div class="block-slideshow block-slideshow--layout--full block">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-3 d-none d-lg-block"></div>-->
            <div class="col-12">
                <div class="block-slideshow__body">
                    <div class="owl-carousel">
                        <a class="block-slideshow__slide" href="">
                            <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('{{asset('public/images/banners/banner1.jpg')}}')"></div>
                            <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('{{asset('public/images/slider1-mob.jpg')}}')"></div>
                            <div class="block-slideshow__slide-content">
                                <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products</div>
                                <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                <div class="block-slideshow__slide-button">
                                    <span class="btn btn-primary btn-lg">Shop Now</span>
                                </div>
                            </div>
                        </a>
                        <a class="block-slideshow__slide" href="">
                            <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('{{asset('public/images/banners/banner2.jpg')}}')"></div>
                            <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-2-mobile.jpg')"></div>
                            <div class="block-slideshow__slide-content">
                                <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools</div>
                                <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                <div class="block-slideshow__slide-button">
                                    <span class="btn btn-primary btn-lg">Shop Now</span>
                                </div>
                            </div>
                        </a>
                        <a class="block-slideshow__slide" href="">
                            <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('{{asset('public/images/banners/banner3.jpg')}}')"></div>
                            <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('images/slides/slide-3-mobile.jpg')"></div>
                            <div class="block-slideshow__slide-content">
                                <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis molestie.</div>
                                <div class="block-slideshow__slide-button">
                                    <span class="btn btn-primary btn-lg">Shop Now</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-slideshow / end -->
<!-- .block-features -->
<div class="block block-features block-features--layout--classic">
    <div class="container">
        <div class="block-features__list">
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                    <use xlink:href="{{asset('public/images/sprite.svg#fi-free-delivery-48')}}"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">Free Shipping</div>
                    <div class="block-features__subtitle">For orders from $50</div>
                </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                    <use xlink:href="{{asset('public/images/sprite.svg#fi-24-hours-48')}}"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">Support 24/7</div>
                    <div class="block-features__subtitle">Call us anytime</div>
                </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                    <use xlink:href="{{asset('public/images/sprite.svg#fi-payment-security-48')}}"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">100% Safety</div>
                    <div class="block-features__subtitle">Only secure payments</div>
                </div>
            </div>
            <div class="block-features__divider"></div>
            <div class="block-features__item">
                <div class="block-features__icon">
                    <svg width="48px" height="48px">
                    <use xlink:href="{{asset('public/images/sprite.svg#fi-tag-48')}}"></use>
                    </svg>
                </div>
                <div class="block-features__content">
                    <div class="block-features__title">Hot Offers</div>
                    <div class="block-features__subtitle">Discounts up to 90%</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-features / end -->
<!-- .block-products-carousel -->

<!-- .block-products-carousel / end -->
<!-- .block-banner -->

<!-- .block-banner / end -->
<!-- .block-categories -->
<div class="block block--highlighted block-categories block-categories--layout--classic">
    <div class="container">
        <div class="block-header">
            <h3 class="block-header__title">Popular Categories</h3>
            <div class="block-header__divider"></div>
        </div>
        <div class="block-categories__list" id="categoryDiv">
            <div class="block-categories__item category-card category-card--layout--classic">
                <div class="category-card__body">
                    <div class="category-card__image">
                        <a href=""><img src="{{asset('public/images/categories/category-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__name">
                            <a href="">Power Tools</a>
                        </div>
                        <ul class="category-card__links">
                            <li><a href="">Screwdrivers</a></li>
                            <li><a href="">Milling Cutters</a></li>
                            <li><a href="">Sanding Machines</a></li>
                            <li><a href="">Wrenches</a></li>
                            <li><a href="">Drills</a></li>
                        </ul>
                        <div class="category-card__all">
                            <a href="">Show All</a>
                        </div>
                        <div class="category-card__products">
                            572 Products
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-categories__item category-card category-card--layout--classic">
                <div class="category-card__body">
                    <div class="category-card__image">
                        <a href=""><img src="images/categories/category-2.jpg" alt=""></a>
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__name">
                            <a href="">Hand Tools</a>
                        </div>
                        <ul class="category-card__links">
                            <li><a href="">Screwdrivers</a></li>
                            <li><a href="">Hammers</a></li>
                            <li><a href="">Spanners</a></li>
                            <li><a href="">Handsaws</a></li>
                            <li><a href="">Paint Tools</a></li>
                        </ul>
                        <div class="category-card__all">
                            <a href="">Show All</a>
                        </div>
                        <div class="category-card__products">
                            134 Products
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-categories__item category-card category-card--layout--classic">
                <div class="category-card__body">
                    <div class="category-card__image">
                        <a href=""><img src="images/categories/category-4.jpg" alt=""></a>
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__name">
                            <a href="">Machine Tools</a>
                        </div>
                        <ul class="category-card__links">
                            <li><a href="">Lathes</a></li>
                            <li><a href="">Milling Machines</a></li>
                            <li><a href="">Grinding Machines</a></li>
                            <li><a href="">CNC Machines</a></li>
                            <li><a href="">Sharpening Machines</a></li>
                        </ul>
                        <div class="category-card__all">
                            <a href="">Show All</a>
                        </div>
                        <div class="category-card__products">
                            301 Products
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-categories__item category-card category-card--layout--classic">
                <div class="category-card__body">
                    <div class="category-card__image">
                        <a href=""><img src="images/categories/category-3.jpg" alt=""></a>
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__name">
                            <a href="">Power Machinery</a>
                        </div>
                        <ul class="category-card__links">
                            <li><a href="">Generators</a></li>
                            <li><a href="">Compressors</a></li>
                            <li><a href="">Winches</a></li>
                            <li><a href="">Plasma Cutting</a></li>
                            <li><a href="">Electric Motors</a></li>
                        </ul>
                        <div class="category-card__all">
                            <a href="">Show All</a>
                        </div>
                        <div class="category-card__products">
                            79 Products
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-categories__item category-card category-card--layout--classic">
                <div class="category-card__body">
                    <div class="category-card__image">
                        <a href=""><img src="images/categories/category-5.jpg" alt=""></a>
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__name">
                            <a href="">Measurement</a>
                        </div>
                        <ul class="category-card__links">
                            <li><a href="">Tape Measure</a></li>
                            <li><a href="">Theodolites</a></li>
                            <li><a href="">Thermal Imagers</a></li>
                            <li><a href="">Calipers</a></li>
                            <li><a href="">Levels</a></li>
                        </ul>
                        <div class="category-card__all">
                            <a href="">Show All</a>
                        </div>
                        <div class="category-card__products">
                            366 Products
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-categories__item category-card category-card--layout--classic">
                <div class="category-card__body">
                    <div class="category-card__image">
                        <a href=""><img src="images/categories/category-6.jpg" alt=""></a>
                    </div>
                    <div class="category-card__content">
                        <div class="category-card__name">
                            <a href="">Clothes and PPE</a>
                        </div>
                        <ul class="category-card__links">
                            <li><a href="">Winter Workwear</a></li>
                            <li><a href="">Summer Workwear</a></li>
                            <li><a href="">Helmets</a></li>
                            <li><a href="">Belts and Bags</a></li>
                            <li><a href="">Work Shoes</a></li>
                        </ul>
                        <div class="category-card__all">
                            <a href="">Show All</a>
                        </div>
                        <div class="category-card__products">
                            81 Products
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .block-categories / end -->


<script src="{{ asset('public/js/app.js') }}" defer></script>

@endsection