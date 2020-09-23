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
        <div class="block-header">
            <h3 class="block-header__title">{{$category}}</h3>
            <div class="block-header__divider"></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-mobile-grid-columns="2" data-with-features="false">
                            <div class="products-list__body">
                                @foreach($results as $subCategory)
                                    <div class="products-list__item">
                                        <div class="post-card post-card--layout--grid post-card--size--nl text-center">
                                            <div class="post-card__image">
                                                <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category))}}/{{strtolower(str_replace(' ', '-', $subCategory['Name']))}}">
                                                    <img src="{{$subCategory['Image_URL__c']}}" alt="{{$subCategory['Name']}}">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__name text-center">
                                                    <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category))}}/{{strtolower(str_replace(' ', '-', $subCategory['Name']))}}">{{$subCategory['Name']}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                            
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection