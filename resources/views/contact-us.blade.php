@extends('layouts.app')

@section('title', '800Benaa | Contact Us')

@section('content')

<div class="block-map block">
    <!-- <div class="block-map__body">
        <iframe src='https://maps.google.com/maps?q=Holbrook-Palmer%20Park&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe>
    </div> -->
</div>
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
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
        <div class="page-header__title">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>
<div class="block">
    <div class="container">
        <div class="card mb-0">
            <div class="card-body contact-us">
                <div class="contact-us__container">
                    <div class="row">
                        <!-- <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                            <h4 class="contact-us__header card-title">Our Address</h4>
                            <div class="contact-us__address">
                                <p>
                                Customers are our Assets. We always appreciate to be closer and open to our Customers
You can submit the query here, you can make a call to us,you can send us email or you can have direct chat with our support team
                                </p>
                                <p>
                                    <strong>Opening Hours</strong><br>
                                    Monday to Friday: 8am-8pm<br>
                                    Saturday: 8am-6pm<br>
                                    Sunday: 10am-4pm
                                </p>
                                <p>
                                    <strong>Comment</strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non
                                    tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div> -->
                        <div class="col-12 col-lg-12">
                            <h4 class="contact-us__header card-title">Leave us a Message</h4>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="form-name">Your Name</label>
                                        <input type="text" id="form-name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="form-email">Email</label>
                                        <input type="email" id="form-email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form-subject">Subject</label>
                                    <input type="text" id="form-subject" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <label for="form-message">Message</label>
                                    <textarea id="form-message" class="form-control" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection