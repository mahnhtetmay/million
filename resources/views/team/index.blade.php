@extends('layouts.app')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets/images/background/page-title-bg.png')}});">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Leadership Team</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Leadership Team</li>
            </ul>
        </div>
    </div>
</section>
<section class="news-section-ten  py-3" style="background-color: white;">
    <div class="auto-container">
        <div class="sec-title v3 text-center"><br>
            <span class="sub-title" style="color:#09096e;font-size:24px;">BOARD OF DIRECTORS</span>
            <h2 ></h2>
            {{-- <a href="news-grid.html" class="theme-btn btn-style-one read-more"><span class="btn-title">more blogs <i
                        class="fa fa-arrow-right"></i></span></a> --}}
        </div>

        <!-- news slider -->
        <div class="row">
            <!-- News Block -->
            <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img
                                    src="{{ asset('assets/data/team1.png') }}" alt=""></a>
                        </figure>
                        {{-- <span class="date">Million House</span> --}}
                    </div>
                    <div class="content-box">
                        <ul class="post-meta">
                            <li style="color:darkblue; font-size:16px;font-weight:bold"><i class="fa fa-user"></i>Mr.Chookiat Bauphang</li>
                            {{-- <li><i class="fa fa-comments"></i>Comments</li> --}}
                        </ul>
                        <h6 class="title"><a href="" style="font-size:14px;">Chairman</a></h6>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                    </div>
                </div>
            </div>
            <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img
                                    src="{{ asset('assets/data/team2.png') }}" alt=""></a>
                        </figure>
                        {{-- <span class="date">Million House</span> --}}
                    </div>
                    <div class="content-box">
                        <ul class="post-meta">
                            <li style="color:darkblue; font-size:16px;font-weight:bold;"><i class="fa fa-user"></i>Mr.Million Tun</li>
                            {{-- <li><i class="fa fa-comments"></i>Comments</li> --}}
                        </ul>
                        <h6 class="title"><a href="" style="font-size:14px;">Chief Executive Officer (CEO)</a></h6>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                    </div>
                </div>
            </div>
            <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img
                                    src="{{ asset('assets/data/team3.png') }}" alt=""></a>
                        </figure>
                        {{-- <span class="date">Million House</span> --}}
                    </div>
                    <div class="content-box">
                        <ul class="post-meta">
                            <li style="color:darkblue; font-size:16px;font-weight:bold"><i class="fa fa-user"></i>Mr. Asdang Methakasejthikul </li>
                            {{-- <li><i class="fa fa-comments"></i>Comments</li> --}}
                        </ul>
                        <h6 class="title"><a href="" style="font-size:14px;">Managing Director</a></h6>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                    </div>
                </div>
            </div>
            <!-- News Block -->
           
        </div>
    </div>
</section>
@endsection