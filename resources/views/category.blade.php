@extends('layouts.app')

@section('title', '800Benaa | '.$category)

@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    @if(count($results) > 0)
                    <h3 class="title">Products in '{{$category}}'</h3>
                    @else
                    <h3 class="title">No Products in '{{$category}}'</h3>
                    @endif
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <div class="row">
                            @foreach($results as $product)
                            <div class="col-md-3">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{ asset('public/img/product01.png') }}" alt="">
                                        <div class="product-label">
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">{{$product['Name']}}</a></h3>

                                    </div>
                                </div>    
                            </div>
                            @endforeach
                        </div>
                        <div id="slick-nav-1" class="products-slick-nav"></div>
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection