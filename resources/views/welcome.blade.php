@extends('layouts.app')
@section('content')


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
