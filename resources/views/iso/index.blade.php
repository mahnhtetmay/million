@extends('layouts.app')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets/images/background/page-title-bg.png')}});">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Our Approval Licenses</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Our Approval Licenses</li>
            </ul>
        </div>
    </div>
</section>
<section class="services-section" style="background-image: url({{ asset('assets/data/bg5.png') }})">
    <div class="auto-container">
        <div class="sec-title light">
            <div class="row">
                <div class="col-lg-6">
                    <span class="sub-title">Our approval licenses</span>
                    <h3 style="color:white;">OUR  <br>APPROVAL LICENSES</h3>
                </div>
                <div class="col-lg-6">
                    <div class="text">
                        We always try the best for our customers.These certifications and awards reflect our unwavering commitment to quality, excellence, and environmental responsibility, ensuring our customers can trust in the value we deliver.
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- News Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{ asset('assets/data/iso1.png') }}"
                                    alt=""></a></figure>
                        {{-- <span><img src="{{asset('assets/data/logo2.jpg')}}" alt="" style="width:60px;height:60px;"></span> --}}
                        <span class="icon flaticon-diploma"></span>
                    </div>
                    <div class="content-box">
                        {{-- <h4 class="title" style="background-color:black;height:50px;line-height:-5px;"><a href="" style="line-height: -2px;">Cash Flow</a></h4> --}}
                        {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                        <a href="" class="theme-btn btn-style-two light"><span class="btn-title">
                            Company
                                License </span></a>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{ asset('assets/data/cer2.png') }}"
                                    alt=""></a></figure>
                        <span class="icon flaticon-diploma"></span>
                    </div>
                    <div class="content-box">
                        <a href="" class="theme-btn btn-style-two light"><span class="btn-title">Company
                                License </span></a>

                        {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                        {{-- <a href="" class="theme-btn btn-style-two light"><span class="btn-title">Read More </span></a> --}}
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{ asset('assets/data/cer3.png') }}"
                                    alt=""></a></figure>
                        <span class="icon flaticon-diploma"></span>
                    </div>
                    <div class="content-box">
                        {{-- <h4 class="title"><a href="">Money Wise</a></h4> --}}
                        {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                        <a href="" class="theme-btn btn-style-two light"><span class="btn-title">
                            Company
                                License </span></a>

                    </div>
                </div>
            </div>
            <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{ asset('assets/data/cer4.png') }}"
                                    alt=""></a></figure>
                        <span class="icon flaticon-diploma"></span>
                    </div>
                    <div class="content-box">
                        {{-- <h4 class="title"><a href="">Money Wise</a></h4> --}}
                        {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                        <a href="" class="theme-btn btn-style-two light"><span class="btn-title">
                            Company
                                License </span></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection