@extends('layouts.app')

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
                    <li class="breadcrumb-item">
                        <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $details['Product2']['Portal_Category__r']['Name']))}}">{{$details['Product2']['Portal_Category__r']['Name']}}</a>
                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                        <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                        </svg>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $details['Product2']['Portal_Category__r']['Name']))}}/{{$details['Product2']['Portal_Subcategory__r']['Name']}}">{{$details['Product2']['Portal_Subcategory__r']['Name']}}</a>
                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                        <use xlink:href="{{asset('public/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                        </svg>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$details['Name']}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="block">
    <div class="container">
        <div class="product product--layout--standard" data-layout="standard">
            <div class="product__content">
                <!-- .product__gallery -->
                <div class="product__gallery">
                    <div class="product-gallery">
                        <div class="product-gallery__featured">
                            <button class="product-gallery__zoom">
                                <svg width="24px" height="24px">
                                <use xlink:href="images/sprite.svg#zoom-in-24"></use>
                                </svg>
                            </button>
                            <div class="owl-carousel" id="product-image">
                                <div class="product-image product-image--location--gallery">
                                    <a href="{{$details['Product2']['Default_Image_URL__c']}}" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                        <img class="product-image__img" src="{{$details['Product2']['Default_Image_URL__c']}}" alt="">
                                    </a>
                                </div>                                
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- .product__gallery / end -->
                <!-- .product__info -->                
                <div class="product__info">
                    <div class="product__wishlist-compare">
                        <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Wishlist">
                            <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#wishlist-16"></use>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip" data-placement="right" title="Compare">
                            <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#compare-16"></use>
                            </svg>
                        </button>
                    </div>
                    <h1 class="product__name">{{$details['Name']}}</h1>                    
                    <div class="product__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh
                        lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.
                    </div>
                    <ul class="product__features">
                        <li>Speed: 750 RPM</li>
                        <li>Power Source: Cordless-Electric</li>
                        <li>Battery Cell Type: Lithium</li>
                        <li>Voltage: 20 Volts</li>
                        <li>Battery Capacity: 2 Ah</li>
                    </ul>
                    <ul class="product__meta">
                        <li class="product__meta-availability">Availability: <span class="text-success">In Stock</span></li>
                        <li>Brand: <a href="">Wakita</a></li>
                        <li>SKU: 83690/32</li>
                    </ul>
                </div>
                <!-- .product__info / end -->
                <!-- .product__sidebar -->
                <div class="product__sidebar">
                    <div class="product__availability">
                        Availability: <span class="text-success">In Stock</span>
                    </div>
                    <div class="product__prices">
                        AED {{$details['UnitPrice']}}
                    </div>
                    <!-- .product__options -->
                    <form class="product__options" action="{{URL::to('/addtocart')}}" method="POST">
                        @csrf                                                
                        <div class="form-group product__option">
                            <label class="product__option-label" for="product-quantity">Quantity</label>
                            <div class="product__actions">
                                <div class="product__actions-item">
                                    <div class="input-number product__quantity">
                                        <input id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1" name="quantity">
                                        <input type="hidden" name="id" value="{{$details['Id']}}" />
                                        <input type="hidden" name="name" value="{{$details['Name']}}" />
                                        <input type="hidden" name="price" value="{{$details['UnitPrice']}}" />
                                        <input type="hidden" name="image" value="{{$details['Product2']['Default_Image_URL__c']}}" />
                                        <input type="hidden" name="link" value="{{URL::to('/')}}/product/{{$details['Product2']['Portal_Category__c']}}/{{$details['Product2']['Portal_Subcategory__c']}}/{{$details['Id']}}" />
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </div>
                                <div class="product__actions-item product__actions-item--addtocart">
                                    <button class="btn btn-primary btn-lg">Add to cart</button>
                                </div>                                
                            </div>
                        </div>
                    </form>
                    <!-- .product__options / end -->
                </div>
                <!-- .product__end -->
                <div class="product__footer">
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection