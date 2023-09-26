@extends('layouts.app')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets/images/background/page-title-bg.png')}});">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Million's Strategy</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Million's Strategy</li>
            </ul>
        </div>
    </div>
</section>
<section class="about-section-four" style="background-color:white;">
    <div class=""></div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="sec-title v2 text-center">
                <span class="sub-title" style="color:goldenrod; font-size:24px;">Our Strategy</span>
               
                    <h6 style="color:black; font-size:18px;">"Since our establishment in 2010, 
                        we've embarked on an exciting journey of growth and innovation.These milestones reflect our dedication to progress and our journey towards a brighter future.Delivering Hapiness at every step......"
                    </h6>
               
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-12 col-lg-12">
                <div class="inner-column">
                    <span class="icon-dots bounce-x"></span>
                    <figure class="image-1 overlay-anim wow fadeInUp"><img
                            src="{{ asset('assets/data/strategy.png') }}" alt="" width: 100%; height: 250px;
                            background-size: top; object-fit: cover></figure>
                    {{-- <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure> --}}
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-section-three" >
    <div class="auto-container">
        <div class="sec-title v2 text-center">
            <span class="sub-title" style="color:#09043d; font-size:24px;">Our Business Strategy</span>
            <h2></h2>
            <span>Our values lie at the heart of the organisation and mark the genesis of our vision and mission that steer the Corporation’s business and operations. We believe that performance is multi-faceted and needs to be assessed quantitatively and qualitatively, incorporating all the stakeholders and aspects impacted with reference to the current business dynamics.</span>
        </div>

        <div class="row">
            <!-- service Block -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box" >
                    <div class="image-box">
                        <figure class="image">
                            <a href=""><img src="{{asset('assets/data/vision6.jpeg')}}" alt=""  style="width: 100%;background-size:contain;object-fit:contain;">
                            </a>
                        </figure>
                        <span class="icon flaticon-target"></span>
                    </div>
                    <div class="content-box" >
                        <h4 class="title"><a href="" style="color:#09096e;font-weight:bold;">Our Vision</a></h4>
                        <div class="text">Our vision is to create a global network of companies that lead by  shaping industries through innovation and sustainable practices, leaving a positive legacy for future generations.
                            
                        </div>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>

                    </div>
                </div>
            </div>

            <!-- service Block -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box" >
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/mission3.jpeg')}}" alt="" ></a></figure>
                        <span class="icon flaticon-target"></span>
                    </div>
                    <div class="content-box">
                        <h4 class="title" style="color:#09096e;font-weight:bold;"><a href="">Our Mission</a></h4>
                        <div class="text">We are committed to creating services across our diverse portfolio of companies, driven by a passion for excellence, sustainability, and customer satisfaction.</div>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>

                    </div>
                </div>
            </div>

            <!-- service Block -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box" >
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/values5.jpeg')}}" alt=""></a></figure>
                        <span class="icon flaticon-target"></span>
                    </div>
                    <div class="content-box">
                        <h4 class="title"><a href="" style="color:#09096e;font-weight:bold;">Our Values</a></h4>
                        <div class="text">
                            <i class="fa fa-check" style="color:gold;"></i> Integrity <br>
                            <i class="fa fa-check" style="color:gold;"></i> Innovation<br>
                            <i class="fa fa-check" style="color:gold;"></i> Customer-Centric<br>
                            <i class="fa fa-check" style="color:gold;"></i> Sustainability<br>
                            <i class="fa fa-check" style="color:gold;"></i> Collaboration<br>
                            <i class="fa fa-check" style="color:gold;"></i> Excellence
                            
                        </div>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>

                    </div>
                </div>
            </div>
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box" >
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/goal2.png')}}" alt=""></a></figure>
                        <span class="icon flaticon-target"></span>
                    </div>
                    <div class="content-box">
                        <h4 class="title"><a href="" style="color:#09096e;font-weight:bold;">Our Goals</a></h4>
                        <div class="text">
                            To deliver a professional, elite & swift no nonsense service to all our clients and candidates.
                            An organisation is recognised by its value system which celibrates the behaviour of its employees and their professional endeavours and engagements. 
                        </div>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection