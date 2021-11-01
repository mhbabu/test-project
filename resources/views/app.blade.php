<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME','Application') }} | @yield('title','Service Booking')</title>

    <!-- favicon -->
    <link rel=icon href="{{ asset('/assets/favicons.ico') }}" sizes="16x16" type="image/icon">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- LineAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/toastr/css/toastr.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- preloader area end -->
<!-- Header area Starts -->
<header class="header-style-01">
    <!-- Menu area Starts -->
    <nav class="navbar navbar-area navbar-two navbar-expand-lg navbar-bg-1">
        <div class="container container-two nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="multistep_form.html" class="logo">
                        <img src="assets/img/logo-02.png" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li><a href="#0">Home</a></li>
                    <li><a href="#0">About</a></li>
                    <li><a href="#0">Service List</a></li>
                    <li><a href="#0">Dashboard</a></li>
                    <li><a href="multistep_form.html">multistep Form</a></li>
                    <li><a href="#0">Blog</a></li>
                    <li><a href="#0">contact</a></li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul>
                    <li>
                        <a href="#">
                            <div class="info-bar-item">
                                <div class="cart-icon icon">
                                    <i class="las la-shopping-cart"></i>
                                    <div class="cart-list style-02">
                                        <span class="single-list"> Cart One </span>
                                        <span class="single-list"> Cart Two </span>
                                        <span class="single-list"> Cart Three </span>
                                        <span class="single-list"> Cart Four </span>
                                        <span class="single-list"> Cart Five </span>
                                    </div>
                                </div>
                                <div class="notification-icon icon">
                                    <i class="las la-bell"></i>
                                    <span class="notification-number style-02"> 4 </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="info-bar-item-two">
                                <div class="author-thumb">
                                    <img src="assets/img/author-nav.jpg" alt="">
                                </div>
                                <div class="author-nav-content">
                                    <span class="title"> Alex Jerin </span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Menu area end -->
</header>
<!-- Header area end -->
<!-- Location Overview area starts -->
<section class="location-overview-area padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{url('success') }}" method="post" id="msform" class="msform">
                    @csrf
                    <ul class="overview-list step-list">
                        <li class="list active" id="account">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">1</span> Location </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">2</span> Service </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">3</span> Date & Time </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">4</span> Information </a>
                        </li>
                        <li class="list">
                            <a class="list-click" href="javascript:void(0)"> <span class="list-number">5</span> Confirmation </a>
                        </li>
                    </ul>
                    <!-- Location -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="overview-list-all">
                            <div class="overview-location">
                                <div class="single-location active margin-top-30">
                                    <span class="location"> New York, </span>
                                    <span class="location"> New York </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Los Angeles, </span>
                                    <span class="location"> California </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Chicago, </span>
                                    <span class="location"> New York </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Houston, </span>
                                    <span class="location"> Texas </span>
                                </div>
                                <div class="single-location margin-top-30">
                                    <span class="location"> Phoenix, </span>
                                    <span class="location"> Arizona </span>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Map Starts -->
                        <div class="contact-map-area padding-top-100">
                            <div class="container">
                                <div class="contact-map">
                                    <span class="select-location"> Select Current Location </span>
                                    <iframe src="https://maps.google.com/maps?q=23.8283,90.4115&hl=es;z=14&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Map end -->
                        <input type="hidden" name="country" value="{{ $location->countryName }}" />
                        <input type="hidden" name="country_code" value="{{ $location->countryCode }}" />
                        <input type="hidden" name="city_name" value="{{ $location->cityName }}" />
                        <input type="hidden" name="latitude" value="{{ $location->latitude }}" />
                        <input type="hidden" name="longitude" value="{{ $location->longitude }}" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <!-- Service -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="row">
                            <div class="col-lg-8 margin-top-30">
                                <div class="service-overview-wrapper padding-bottom-30">
                                    <div class="overview-author overview-author-border">
                                        <div class="overview-flex-author">
                                            <div class="overview-thumb">
                                                <img src="assets/img/service/overview1.jpg" alt="">
                                            </div>
                                            <div class="overview-contents">
                                                <h4 class="overview-title"> <a href="javascript:void(0)"> Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h4>
                                                <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overview-single padding-top-40">
                                        <h4 class="title"> What's Included </h4>
                                        <div class="include-contents margin-top-30">
                                            <div class="single-include">
                                                <ul class="include-list">
                                                    <li class="lists">
                                                        <div class="list-single">
                                                            <span class="rooms"> 3 Bed Room </span>
                                                        </div>
                                                        <div class="list-single">
                                                            <span class="values"> $30 </span>
                                                            <span class="value-input"> <input class="three-bed-room" name="three_bedroom" type="number" value="0"> </span>
                                                            <input type="hidden" value="0" class="three-bed-total">
                                                        </div>
                                                    </li>
                                                    <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                </ul>
                                            </div>
                                            <div class="single-include">
                                                <ul class="include-list">
                                                    <li class="lists">
                                                        <div class="list-single">
                                                            <span class="rooms"> 2 Bed Room </span>
                                                        </div>
                                                        <div class="list-single">
                                                            <span class="values"> $20 </span>
                                                            <span class="value-input"> <input class="two-bed-room" name="two_bedroom" type="number" value="0"> </span>
                                                            <input type="hidden" value="0" class="two-bed-total">
                                                        </div>
                                                    </li>
                                                    <input type="hidden" name="price total-cost" value="0" />
                                                    <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="overview-single padding-top-60">--}}
{{--                                        <h4 class="title"> Upgrade your order with extras </h4>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-lg-6 margin-top-30">--}}
{{--                                                <div class="overview-extra">--}}
{{--                                                    <div class="checkbox-inlines">--}}
{{--                                                        <input class="check-input" type="checkbox" id="check4">--}}
{{--                                                        <label class="checkbox-label" for="check4"> Kitchen Cleaning </label>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="overview-extra-flex-content">--}}
{{--                                                        <div class="list-single">--}}
{{--                                                            <span class="values"> $25 </span>--}}
{{--                                                            <span class="value-input"> <input type="text" value="3"> </span>--}}
{{--                                                        </div>--}}
{{--                                                        <span class="price-value"> $50 </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="overview-single padding-top-60">
                                        <h4 class="title"> Benifits of the Package: </h4>
                                        <ul class="overview-benefits margin-top-30">
                                            <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                            <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                            <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 margin-top-30">
                                <div class="service-overview-summery">
                                    <h4 class="title"> Booking Summery </h4>
                                    <div class="overview-summery-contents">
                                        <div class="single-summery">
                                            <span class="summery-title"> Appointment Package Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Bed Room</span>
                                                        <span class="room-count three-bed-count">0</span>
                                                        <span class="value-count three-bed-value">$ 0</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Bath Room</span>
                                                        <span class="room-count two-bed-count">0</span>
                                                        <span class="value-count two-bed-value">$ 0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-summery">
{{--                                            <span class="summery-title"> Extra Service </span>--}}
                                            <div class="summery-list-all">
{{--                                                <ul class="summery-list">--}}
{{--                                                    <li class="list">--}}
{{--                                                        <span class="rooms"> Kitchen</span>--}}
{{--                                                        <span class="room-count">1</span>--}}
{{--                                                        <span class="value-count">$50</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="list">--}}
{{--                                                        <span class="rooms"> Fridge</span>--}}
{{--                                                        <span class="room-count">1</span>--}}
{{--                                                        <span class="value-count">$20</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="list">--}}
{{--                                                        <span class="rooms"> Garden</span>--}}
{{--                                                        <span class="room-count">1</span>--}}
{{--                                                        <span class="value-count">$60</span>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> <strong>Total</strong></span>
                                                        <span class="value-count total-amount">$0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-appoinment btn-bg-1"> Continue </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Date & Time -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="date-overview">
                            <div class="single-date-overview margin-top-30">
                                <h4 class="date-time-title"> Available on December 20201 </h4>
                                <ul class="date-time-list margin-top-20">
                                    @php
                                        $currentDate = new DateTime(date('Y-m-d', strtotime(\Carbon\Carbon::now())));
                                        $endDate   = new DateTime(date("Y-m-d", strtotime('+ 6 days .')));
                                    @endphp
                                    @for($date = $currentDate; $date <= $endDate; $date->modify('+1 day'))
                                    <li class="list"> <a href="javascript:void(0)" class="date"> {{ $date->format("d M, Y - l") }} </a> </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="single-date-overview margin-top-30">
                                <h4 class="date-time-title"> Available schedule on 06 September, 2021 </h4>
                                <ul class="date-time-list margin-top-20">
                                    <li class="list"> <a href="javascript:void(0)" class="time"> 10.00AM-11.00AM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)" class="time"> 12.00AM-01.00PM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)" class="time"> 04.00AM-05.00AM </a> </li>
                                    <li class="list"> <a href="javascript:void(0)" class="time"> 06.00AM-07.00AM </a> </li>
                                </ul>
                            </div>
                            <div class="btn-wrapper margin-top-30">
                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1">Book Appoinmnent</a>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Information -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="Info-overview padding-top-30">
                            <h3 class="date-time-title"> Booking Information </h3>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Name* </label>
                                    <input class="form--control customer-name" type="text" name="name" placeholder="Type Your Name">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Your Email* </label>
                                    <input class="form--control customer-email" type="email" name="email" placeholder="Type Your Email">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Phone Number* </label>
                                    <input class="form--control customer-phone" name="phone" type="tel" placeholder="Type Your Number">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Your City* </label>
                                    <input class="form--control" name="city" type="text" value="{{ $location->cityName }}">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Area* </label>
                                    <input class="form--control customer-area" name="area" type="text" placeholder="Type Your Area">
                                </div>
                                <div class="single-info-input">
                                    <label class="info-title"> Post Code* </label>
                                    <input class="form--control customer-postcode" name="postcode" type="tel" placeholder="Type Post Code">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Your Address* </label>
                                    <input class="form--control customer-address" name="address" type="text" placeholder="Type Your Address">
                                </div>
                            </div>
                            <div class="single-info-overview margin-top-30">
                                <div class="single-info-input">
                                    <label class="info-title"> Order Note* </label>
                                    <textarea class="form--control textarea--form customer-notes" name="notes" placeholder="Type Order Note"></textarea>
                                </div>
                            </div>
                            <div class="btn-wrapper margin-top-35">
                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1">Continue</a>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Confirmation -->
                    <fieldset class="padding-top-50 padding-bottom-100">
                        <div class="confirm-overview padding-top-30">
                            <div class="overview-author overview-author-border">
                                <div class="overview-flex-author">
                                    <div class="overview-thumb confirm-thumb">
                                        <img src="assets/img/service/overview1.jpg" alt="">
                                    </div>
                                    <div class="overview-contents">
                                        <h2 class="overview-title confirm-title"> <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h2>
                                        <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="confirm-overview-left margin-top-30">
                                    <div class="single-confirm-overview">
                                        <div class="single-confirm margin-top-30">
                                            <h3 class="titles"> Location </h3>
                                            <span class="details"> {{ $location->cityName }}, </span>
                                            <span class="details"> {{ $location->countryName }} </span>
                                        </div>
                                        <div class="single-confirm margin-top-30">
                                            <h3 class="titles"> Date & Time </h3>
                                            <span class="details booking-date"> - </span>
                                            <span class="details booking-time"> - </span>
                                        </div>
                                    </div>
                                    <div class="booking-info padding-top-60">
                                        <h2 class="title"> Booking Information </h2>
                                        <div class="booking-details">
                                            <ul class="booking-list">
                                                <li class="lists">
                                                    <span class="list-span"> Name: </span>
                                                    <span class="list-strong set-name">-</span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Email: </span>
                                                    <span class="list-strong set-email"> - </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Phone: </span>
                                                    <span class="list-strong set-phone">-</span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> City: </span>
                                                    <span class="list-strong set-city"> {{ $location->cityName }} </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Area: </span>
                                                    <span class="list-strong set-area"> - </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Post Code: </span>
                                                    <span class="list-strong set-postcode"> - </span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Address: </span>
                                                    <span class="list-strong set-address">-</span>
                                                </li>
                                                <li class="lists">
                                                    <span class="list-span"> Order Note: </span>
                                                    <span class="list-strong set-notes">-</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 margin-top-60">
                                <div class="service-overview-summery">
                                    <h4 class="title"> Booking Summery </h4>
                                    <div class="overview-summery-contents">
                                        <div class="single-summery">
                                            <span class="summery-title"> Appointment Package Service </span>
                                            <div class="summery-list-all">
                                                <ul class="summery-list">
                                                    <li class="list">
                                                        <span class="rooms"> Bed Room</span>
                                                        <span class="room-count three-bed-count">0</span>
                                                        <span class="value-count three-bed-value">$ 0</span>
                                                    </li>
                                                    <li class="list">
                                                        <span class="rooms"> Bath Room</span>
                                                        <span class="room-count two-bed-count">0</span>
                                                        <span class="value-count two-bed-value">$ 0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-summery">
                                            {{--                                            <span class="summery-title"> Extra Service </span>--}}
                                            <div class="summery-list-all">
                                                {{--                                                <ul class="summery-list">--}}
                                                {{--                                                    <li class="list">--}}
                                                {{--                                                        <span class="rooms"> Kitchen</span>--}}
                                                {{--                                                        <span class="room-count">1</span>--}}
                                                {{--                                                        <span class="value-count">$50</span>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                    <li class="list">--}}
                                                {{--                                                        <span class="rooms"> Fridge</span>--}}
                                                {{--                                                        <span class="room-count">1</span>--}}
                                                {{--                                                        <span class="value-count">$20</span>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                    <li class="list">--}}
                                                {{--                                                        <span class="rooms"> Garden</span>--}}
                                                {{--                                                        <span class="room-count">1</span>--}}
                                                {{--                                                        <span class="value-count">$60</span>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                </ul>--}}
                                                <ul class="summery-result-list">
                                                    <li class="result-list">
                                                        <span class="rooms"> <strong>Total</strong></span>
                                                        <span class="value-count total-amount">$0</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="confirm-bottom-content">
                                            <div class="confirm-payment payment-border">
                                                <div class="single-checkbox">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check1">
                                                        <label class="checkbox-label" for="check1"> Cash Payment </label>
                                                    </div>
                                                </div>
                                                <div class="single-checkbox">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox" id="check2">
                                                        <label class="checkbox-label" for="check2"> <img src="assets/img/service/payment.png" alt=""> </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox-inlines bottom-checkbox">
                                                <input class="check-input" type="checkbox" id="check3">
                                                <label class="checkbox-label" for="check3"> I have read and agree to the website <a href="javascript:void(0)"> terms and
                                                        conditions * </a> </label>
                                            </div>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-appoinment btn-bg-1"> Continue </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="action-button"><i class="mdi mdi-content-save"></i> Submit</button>
{{--                        <input type="button" name="submit" class="next action-button" value="Submit" /> --}}
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <!-- Successful Complete -->
                    <fieldset class="padding-top-80 padding-bottom-100">
                        <div class="form-card successful-card">
                            <h2 class="title-step"> SUCCESS ! </h2>
                            <div class="succcess-icon">
                                <i class="las la-check"></i>
                            </div>
                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                            <div class="btn-wrapper text-center margin-top-35">
                                <a href="multistep_form.html" class="cmn-btn btn-bg-1"> Back To Home</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Location Overview area end -->
<!-- footer area start -->
<footer class="footer-area section-bg-2">
    <div class="footer-top padding-top-100 padding-bottom-70">
        <div class="container container-two">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget style-02">
                        <div class="about_us_widget">
                            <a href="multistep_form.html" class="footer-logo"> <img src="assets/img/logo-02.png" alt="footer logo"></a>
                        </div>
                        <div class="footer-inner">
                            <p class="footer-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget style-02">
                        <h6 class="widget-title">Category</h6>
                        <div class="footer-inner">
                            <ul class="footer-link-list">
                                <li class="list"><a href="#">Cleaning</a></li>
                                <li class="list"><a href="#">House Move</a></li>
                                <li class="list"><a href="#">Electric</a></li>
                                <li class="list"><a href="#">Painting</a></li>
                                <li class="list"><a href="#">Salon & Spa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget style-02">
                        <h6 class="widget-title">Store Info</h6>
                        <div class="footer-inner">
                            <ul class="footer-link-address">
                                <li class="list"><span class="address"> <i class="las la-map-marker-alt"></i> 41/1, Hilton Mall, NY City </span></li>
                                <li class="list"> <span class="address"> <a href="tel:+012-78901234"> <i class="las la-mobile-alt"></i> +012-78901234</a> </span></li>
                                <li class="list"> <span class="address"> <a href="mailto:help@mail.com"> <i class="las la-envelope"></i> help@mail.com</a> </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget style-02">
                        <h6 class="widget-title">Get In Touch</h6>
                        <div class="footer-inner">
                            <p class="subscribe-para"> Sign up to our mailing list now! </p>
                            <form class="subscribe-form" action="#">
                                <div class="widget-form-single">
                                    <input class="form--control" type="text" name="email" placeholder="Your mail here">
                                    <button type="submit"> <i class="lab la-telegram-plane"></i> </button>
                                </div>
                            </form>
                            <div class="footer-socials style-02">
                                <ul class="footer-social-list">
                                    <li class="lists">
                                        <a class="facebook" href="#0"> <i class="lab la-facebook-f"></i> </a>
                                    </li>
                                    <li class="lists">
                                        <a class="twitter" href="#0"> <i class="lab la-twitter"></i> </a>
                                    </li>
                                    <li class="lists">
                                        <a class="instagram" href="#0"> <i class="lab la-instagram"></i> </a>
                                    </li>
                                    <li class="lists">
                                        <a class="youtube" href="#0"> <i class="lab la-youtube"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area style-02 copyright-border">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <ul class="copyright-list">
                        <li class="list">
                            <a href="#0"> Privacy Policy </a>
                        </li>
                        <li class="list">
                            <a href="#0"> Terms & Conditions </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="copyright-contents">
                        <span> All copyright (C) 2021 Reserved </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="copyright-payment">
                        <ul class="payment-list">
                            <li class="list">
                                <a href="#0"> <img src="assets/img/footer/c1.png" alt=""> </a>
                            </li>
                            <li class="list">
                                <a href="#0"> <img src="assets/img/footer/c2.png" alt=""> </a>
                            </li>
                            <li class="list">
                                <a href="#0"> <img src="assets/img/footer/c3.png" alt=""> </a>
                            </li>
                            <li class="list">
                                <a href="#0"> <img src="assets/img/footer/c4.png" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->



<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- jquery Migrate -->
<script src="{{ asset('assets/js/jquery-migrate-1.4.1.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- wow -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

@if(session()->has('success'))
    {!! Toastr::success(session('success'), 'Success'); !!}
@endif

@if(session()->has('warning'))
    {!! Toastr::warning(session('warning'), 'Warning'); !!}
@endif

@if(session()->has('error'))
    {!! Toastr::error(session('error'), 'Error'); !!}
@endif

@if(session()->has('info'))
    {!! Toastr::info(session('info'), 'Info'); !!}
@endif

{!! Toastr::message() !!}

<script type="text/javascript">
    $(document).ready(function () {
        /**********************************
         THREE BED ROOM CALCULATION HERE
         **********************************/
       $('.three-bed-room').on('change',function (){
         let value = parseInt($(this).val());
           if(!value || value <= 0){
               $(this).val(0);
               value = 0;
           }

         $('.three-bed-count').html(value);
         $('.three-bed-value').html(value ? `$ ${value * 30}` : `$ 0`);
         $('.three-bed-total').val(value ? `${value * 30}` : 0);
       });

        /**********************************
         TWO BED ROOM CALCULATION HERE
         **********************************/
        $('.two-bed-room').on('change',function (){
            let value = parseInt($(this).val());

            if(!value || value <= 0){
                $(this).val(0);
                value = 0;
            }

            $('.two-bed-count').html(value);
            $('.two-bed-value').html(value ? `$ ${value * 20}` : 0);
            $('.two-bed-total').val(value ? `${value * 20}` : 0);
        });

        /**********************************
         TOTAL CALCULATION START HERE
         **********************************/
        $('.three-bed-room, .two-bed-room').on('change',function (){
            const total = parseInt($('.three-bed-total').val()) + parseInt($('.two-bed-total').val());
            $('.total-amount').html(`$ ${total}`);
        });

        /**********************************************
         BOOKING INFORMATION DATA FORM FORM INPUT
         **********************************************/
        $('.customer-name, .customer-email, .customer-phone, .customer-area, .customer-postcode, .customer-address, .customer-notes').on('change', function (){
            let parentDiv = $(this).parent();
            $('.set-name').html(parentDiv.find('.customer-name').val());
            $('.set-email').html(parentDiv.find('.customer-email').val());
            $('.set-phone').html(parentDiv.find('.customer-phone').val());
            // $('.set-city').html(parentDiv.find(".customer-city option:selected").text());
            $('.set-area').html(parentDiv.find('.customer-area').val());
            $('.set-postcode').html(parentDiv.find('.customer-postcode').val());
            $('.set-address').html(parentDiv.find('.customer-address').val());
            $('.set-notes').html(parentDiv.find('.customer-notes').val());
        });

        /**********************************************
         BOOKING DATE AND TIME SCRIPTING START HERE
         **********************************************/

        $('.date').on('click', function (){
            $('.booking-date').html($(this).text());
        })

        $('.time').on('click', function (){
            $('.booking-time').html($(this).text());
        })

    });
</script>

</body>

</html>
