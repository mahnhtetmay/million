@extends('layouts.app')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets/images/background/page-title-bg.png')}});">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Our Milestones</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Our Milestones</li>
            </ul>
        </div>
    </div>
</section>
<section class="about-section-four" style="background-color: white;">
    <div class="bg bg-pattern-1"></div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="sec-title v2 text-center">
                <span class="sub-title" style="color:goldenrod; font-size:24px;">Our Milestones</span>
               
                    <h6 style="color:black; font-size:18px;">"Since our establishment in 2010, 
                        we've embarked on an exciting journey of growth and innovation.These milestones reflect our dedication to progress and our journey towards a brighter future.Delivering Hapiness at every step......"
                    </h6>
               
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-12 col-lg-12">
                <div class="inner-column">
                    <span class="icon-dots bounce-x"></span>
                    <figure class="image-1 overlay-anim wow fadeInUp"><img
                            src="{{ asset('assets/data/business3.png') }}" alt="" width: 100%; height: 250px;
                            background-size: top; object-fit: cover></figure>
                    {{-- <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure> --}}
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection