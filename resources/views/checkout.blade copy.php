@extends('layouts.app')

@section('title', '800Benaa | Checkout')

@section('content')
<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                        </svg>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="">Breadcrumb</a>
                        <svg class="breadcrumb-arrow" width="6px" height="9px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                        </svg>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
        <div class="page-header__title">
            <h1>Checkout</h1>
        </div>
    </div>
    </div>
    <div class="checkout block">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{URL::to('/submitcheckout')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">Returning customer? <a href="">Click here to login</a></div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">                        
                            <h3 class="card-title">Billing details</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">First Name *</label>
                                    <input type="text" class="form-control" id="checkout-first-name" placeholder="First Name" name="firstname" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Last Name *</label>
                                    <input type="text" class="form-control" id="checkout-last-name" placeholder="Last Name" name="lastname" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-company-name">Company Name <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="checkout-company-name" placeholder="Company Name" name="company">
                            </div>
                            <div class="form-group">
                                <label for="checkout-country">Country</label>
                                <select id="checkout-country" class="form-control form-control-select2" name="country">
                                    <option value="uae" selected>United Arab Emirates</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="checkout-state">Region *</label>
                                <input type="text" class="form-control" id="checkout-state" required name="region">
                            </div>
                            <div class="form-group">
                                <label for="checkout-street-address">Street Address</label>
                                <input type="text" class="form-control" id="checkout-street-address" placeholder="Street Address" name="street">
                            </div>
                            <div class="form-group">
                                <label for="checkout-address">Apartment, suite, unit etc. <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="checkout-address" name="apartment">
                            </div>                         
                            <div class="form-group">
                                <label for="checkout-postcode">Postcode / ZIP</label>
                                <input type="text" class="form-control" id="checkout-postcode" name="postcode">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-email">Email address *</label>
                                    <input type="email" class="form-control" id="checkout-email" placeholder="Email address" name="email" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-phone">Phone *</label>
                                    <input type="text" class="form-control" id="checkout-phone" placeholder="Phone" name="phone" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox" id="checkout-create-account">
                                            <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <label class="form-check-label" for="checkout-create-account">Create an account?</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Your Order</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                @if(count(\Cart::content()) > 0)
                                    @foreach(\Cart::content() as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->subtotal}}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <h3>Cart is empty!</h3>
                                @endif
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>AED {{\Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td>AED {{\Cart::tax()}}</td>
                                    </tr>
                                    <!-- <tr>
                                        <th>Shipping</th>
                                        <td>$25.00</td>
                                    </tr> -->
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>AED {{\Cart::total()}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Cash on delivery</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pay with cash upon delivery.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Credit Card</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">
                                                Pay using Credit via Network Payment Solutions.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox" id="checkout-terms" name="terms">
                                            <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="{{asset('public/images/sprite.svg#check-9x7')}}"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <label class="form-check-label" for="checkout-terms">
                                        I have read and agree to the website <a target="_blank" href="terms-and-conditions.html">terms and conditions</a>*
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                            <div class="text-center">
                                <button type="submit" name="submit" value="quote" class="btn btn-primary btn-md mt-3">Get Your Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection