@extends('layouts.app')
@section('content')
{{-- <section class="about-section-four">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="sub-title">About Company</span>
                        <h2>Empowering your financial <br>freedom</h2>
                        <div class="text">It is a long established fact that a reader will be distracted by the readablejk content of a page when looking at its layout. Lorem Ipsum simply dummyjl text</div>
                    </div>
                    <div class="row">
                        <div class="info-block-four col-lg-6 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="icon-box"><i class="icon flaticon-puzzle"></i></div>
                                <h4 class="title">Cyber Security</h4>
                                <div class="text">It is a long established fact that a reader will be</div>
                            </div>
                        </div>
                        <div class="info-block-four col-lg-6 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="icon-box"><i class="icon flaticon-production"></i></div>
                                <h4 class="title">Our Mission</h4>
                                <div class="text">It is a long established fact that a reader will be</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <div class="auther-info">
                            <figure class="thumb"><img src="{{asset('assets/images/resource/about-thumb4-1.jpg')}}" alt=""></figure>
                            <h4 class="title">Eleanor Pena</h4>
                            <span class="designation">Web Designer</span>
                        </div>
                        <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Get Started <i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-6 col-lg-6">
                <div class="inner-column">
                    <span class="icon-dots bounce-x"></span>
                    <figure class="image-1 overlay-anim wow fadeInUp"><img src="{{asset('assets/images/resource/about4-1.jpg')}}" alt=""></figure>
                    <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure>
                    <div class="exp-box">
                        <div class="inner" style="background-color: gold;">
                            <div class="icon-box">
                                <span class="icon fa fa-award"></span>
                                <h2 class="title">230+</h2>
                            </div>
                            <p class="text">Project Complete</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="fun-fact-section-two pull-down">
    <div class="auto-container">
        <div class="fact-counter">
            <div class="row">
                <!-- Counter block-->
                <div class="counter-block-two col-md-3 col-sm-6 wow fadeInUp">
                    <div class="inner">
                        <div class="content">
                            <i class="fa fa-flag" style="font-size:40px;"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="2004">0</span></div>
                            <h6 class="counter-title">Founded</h6>
                        </div>
                    </div>
                </div>

                <!--Counter block-->
                <div class="counter-block-two col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner">
                        <div class="content">
                            <i class="fa fa-users" style="font-size:40px;"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="100">0</span>+</div>
                            <h6 class="counter-title">Team Members</h6>
                        </div>
                    </div>
                </div>

                <!--Counter block-->
                <div class="counter-block-two col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner">
                        <div class="content">
                            <i class="fa fa-buildings" style="font-size:40px;"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span></div>
                            <h6 class="counter-title">Companies</h6>
                        </div>
                    </div>
                </div>

                <!--Counter block-->
                <div class="counter-block-two col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner">
                        <div class="content">
                            <i class="fa fa-award" style="font-size:50px;"></i>
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span></div>
                            <h6 class="counter-title">Certificates</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project-section-eight">
    <div class="auto-container">
        <div class="sec-title light v3 text-center">
            <span class="sub-title">Our Business Group</span>
            <h2>Roadway to Corporate <br>Sustainability</h2>
        </div>

        <div class="row">
            <!-- Team block -->
             <!-- Travels -->
             <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/b5.png')}}" alt=""></a></figure>
                        {{-- <div class="info-box" style="background-color:gold;">
                            <h4 class="title"><a href="" >Travels & Tours</a></h4>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Real Estate -->
            <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/b10.png')}}" alt=""></a></figure>
                        {{-- <div class="info-box" style="background-color:gold;">
                            <h4 class="title"><a href="">Entertainment</a></h4>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Employment-->
            <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/b8.png')}}" alt=""></a></figure>
                        {{-- <div class="info-box" style="background-color:gold;">
                            <h4 class="title"><a href="">Overseas Employment Agency</a></h4>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Entertainment-->
            <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{asset('assets/data/b9.png')}}" alt=""></a></figure>
                        {{-- <div class="info-box" style="background-color:gold;">
                            <h4 class="title"><a href="">Real Estate </a></h4>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            
            <!-- Team block -->
            
        </div>
    </div>
</section>

@endsection
