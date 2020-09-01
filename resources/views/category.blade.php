@extends('layouts.app')

@section('title', '800Benaa | '.$category)

@section('content')
<div class="block block-products block-products--layout--large-first" data-mobile-grid-columns="2">
    <div class="container">
        <div class="block block--highlighted block-categories block-categories--layout--classic">
            <div class="container">
                <div class="block-header">
                    <h3 class="block-header__title">{{$category}}</h3>
                    <div class="block-header__divider"></div>
                </div>
                <div class="block-categories__list">
                    @if(count($results) > 0)
                    @foreach($results as $subCategory)                        
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image">
                                <a href="{{URL::to('/')}}/product/{{$category}}/{{$subCategory['Id']}}"><img src="{{asset('public/images/categories/category-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name">
                                    <a href="{{URL::to('/')}}/product/{{$category}}/{{$subCategory['Id']}}">{{$subCategory['Name']}}</a>
                                </div>
                                <div class="category-card__products">
                                    572 Products
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h2>No Products</h2>
                    @endif
                </div>
            </div>
        </div>            
    </div>
    <!-- /row -->
</div>
@endsection