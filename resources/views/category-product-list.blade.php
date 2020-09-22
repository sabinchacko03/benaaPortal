@extends('layouts.app')

@section('title', '800Benaa | '.$category)

@section('content')
<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{URL::to('/')}}">Home</a>
                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                        <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                        </svg>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$category}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block block--highlighted block-categories block-categories--layout--classic">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">{{$category}}</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="products-view__list products-list" data-layout="grid-4-full" data-with-features="false" data-mobile-grid-columns="2">
                    <div class="products-list__body">
                        @if(count($results) > 0)
                        @foreach($results as $product)
                        <div class="products-list__item">
                            <div class="product-card product-card--hidden-actions ">
                                <button class="product-card__quickview" type="button">
                                    <svg width="16px" height="16px">
                                    <use xlink:href="images/sprite.svg#quickview-16"></use>
                                    </svg>
                                    <span class="fake-svg-icon"></span>
                                </button>
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image product-image">
                                    <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category))}}/{{strtolower(str_replace(' ', '-', $product['Name']))}}" class="product-image__body">
                                        <img class="product-image__img" src="{{$product['Product2']['Default_Image_URL__c']}}" alt="">
                                    </a>
                                </div>
                                <div class="product-card__info">
                                    <div class="product-card__name">
                                        <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category))}}/{{strtolower(str_replace(' ', '-', $product['Name']))}}">{{$product['Name']}}</a>
                                    </div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                    <svg class="rating__star " width="13px" height="12px">
                                                    <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge ">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">
                                        Availability: <span class="text-success">In Stock</span>
                                    </div>
                                    <div class="product-card__prices">
                                        AED {{$product['UnitPrice']}}
                                    </div>
                                    <form action="{{URL::to('/addtocart')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product['Id']}}" />
                                        <input type="hidden" name="name" value="{{$product['Name']}}" />
                                        <input type="hidden" name="price" value="{{$product['UnitPrice']}}" />
                                        <input type="hidden" name="image" value="{{$product['Product2']['Default_Image_URL__c']}}" />
                                        <input type="hidden" name="link" value="{{URL::to('/')}}/product/{{$category}}/{{$category}}/{{$product['Id']}}" />


                                        <div class="product-card__buttons">
                                            <button class="btn btn-primary product-card__addtocart" type="submit">Add To Cart</button>
                                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>                            
                        @endforeach                        
                    </div>
                </div>
                @else
                <h2>No Products</h2>
                @endif
            </div>
            <div id="slick-nav-1" class="products-slick-nav"></div>
        </div>
        {{$results->links()}}
    </div>
</div>

@endsection