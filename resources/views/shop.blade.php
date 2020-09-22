@extends('layouts.app')

@section('title', '800Benaa | Shop')

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
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div>
        <div class="page-header__title">
            <h1>Shop</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="block">
                <div class="posts-view">
                    <div class="posts-view__list posts-list posts-list--layout--grid2">
                        <div class="posts-list__body">
                            @foreach($categories as $category)
                                <div class="posts-list__item">
                                    <div class="post-card post-card--layout--grid post-card--size--nl">
                                        <div class="post-card__image">
                                            <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category['Name']))}}">
                                                <img src="{{$category['Image_URL__c']}}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-card__info">
                                            <div class="post-card__name text-center">
                                                <a href="{{URL::to('/')}}/product/{{strtolower(str_replace(' ', '-', $category['Name']))}}">{{$category['Name']}}</a>
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
@endsection