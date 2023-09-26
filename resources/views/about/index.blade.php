@extends('layouts.app')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets/images/background/page-title-bg.png')}});">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<section class="about-section-four" style="background-image: url({{ asset('assets/data/ab-bg.png') }})">
    <div class="bg bg-pattern-1"></div>
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="600ms">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="sub-title" style="color:black;">About Company</span>
                        <h3 style="color:#063d78;">Million House Thailand</h3>
                        <div class="text" style="color:black;">
                            เรยีนผูป้ระกอบการ/นายจา้ง/เจา้ของธรุกจิ/ในประเทศไทย
                            ดว้ยบรษิทัGOLDENSEAMYANMARCO.,LTD.โดยMR.MILLION(มลิเลย่ีน)ประธานบรหิารเป็น
                            บรษิ ทั จดั หางานทถ่ี กู ตอ้ งตามกฎหมายของประเทศสหภาพเมยี นมาร ์ ไดร้ บั การจดทะเบยี นเมอ่ื
                            ปี พ.ศ. 2547 (ค.ศ.2004)
                            ใบอนุญาตเลขท่ี063/2004เรามปีระสบการณใ์นการจดัสง่คนงานชาวเมยีนมารไ์ปทางานใน
                            ประเทศตา่งๆเป็นเวลานับ10ปีเชน่ ประเทศญป่ีุ่น,สงิคโปร์,มาเลเซยี และประเทศไทย
                            นอกจากการจดัสง่คนงานเพอ่ืไปทางานกบันายจา้งสถานประกอบการตา่งๆแลว้เรายงัเป็นบรษิทัฯทไ่ีด้ จดั
                            สง่ นักศกึ ษาบุคลากรชาวพม่าเพอ่ื ไปศกึ ษาดงู าน ฝึกอบรมในสถานศกึ ษาของประเทศตา่ งๆ
                            มากมายสาหรบั การจดั สง่แรงงานชาวเมยี นมารใ์หเ้ขา้มาทางานกบั นายจา้งในประเทศไทยน้ันเราไดป้
                            ฏบิ ตั ติ ามกฎหมายทท่ี ง้ัสอง
                            ประเทศกาหนดและตามบนัทกึขอ้ตกลงความเขา้ใจระหวา่งกนัของทางการไทยกบัทางการสหภาพเมยีนมาร์ (MOU)
                            {{-- เราจะคดัเลอืกแรงงานชาวเมยีนมารท์ม่ีคีวามรคู้วามสามารถประสบการณแ์ละฝีมอืตรงตามความตอ้งการ ของนายจา้งและทส่ีาคญักอ่นสง่แรงงานชาวเมยีนมารใ์หก้บันายจา้งในประเทศไทยในงานเราชาวเมยีนมาร์เหลา่ นีจ้ะไดร้บัการอบรมดา้นภาษาวฒันธรรมประเพณีวนิัยการทางานและการปฏบิตัตินตอ่นายจา้งในประเทศไทย กอ่นสง่ใหแ้กน่ ายจา้ง
                        เราจงึ เป็นบรษิ ทั จดั หางานประเทศเมยี นมารท์ ส่ี ามารถสอ่ื สารดว้ ยภาษาไทยและภาษาองั กฤษกบั ทา่ นได้ โดยตรงเรามบี รษิ ทั คสู่ ญั ญาทม่ี คี ณุ ภาพในประเทศไทย
                        เรามคี วามมุ่งม่นั ทจ่ี ะเป็นบรษิ ทั จดั หางานมอื อาชพี ในประเทศสหภาพเมยี นมารห์ ากทา่ นมปี ัญหาดา้ น
                        แรงงานหรอืตอ้งการแรงงานชาวเมยีนมารพ์ม่าทม่ีคีุณภาพตรงตามความตอ้งการทา่นปรกึษากบัเราไดโ้ดย
                        ตรงเรายนิดรีบัใชท้า่นชว่ยเหลอืทา่นอยา่งมติรภาพเรามศีูนยป์ระสานงานในประเทศไทยเราดใีจและภมูใิจเป็น
                        ่่่
                        อยา่ งยงิ หากไดเ้ป็นสว่ นหนึงในกจิ การของทา่ นและขอเป็นสว่ นหนึงในความสาเรจ็ ของทา่ น
                        ่
                        หากทา่ นมปี ัญหาดา้ นแรงงาน ปรกึ ษาเราไดเ้ ราขอเป็ นสว่ นหนึงในความสาเรจ็ ของทา่ น
                        ขอแสดงความนับถอื<br>
                        MR.MILLION<br>
                        ประธานบรหิาร<br>
                        GOLDEN SEA MYANMAR CO.,LTD. --}}
                        </div>
                    </div>
                    {{-- <div class="row">
                    <div class="info-block-four col-lg-6 col-md-6 col-sm-12"> 
                        <div class="inner">
                            <div class="icon-box" style="background-color: gold;"><i class="icon flaticon-puzzle"></i></div>
                            <h4 class="title">Cyber Security</h4>
                            <div class="text">It is a long established fact that a reader will be</div>
                        </div>
                    </div>
                    <div class="info-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="icon-box" style="background-color: gold;"><i class="icon flaticon-production"></i></div>
                            <h4 class="title">Our Mission</h4>
                            <div class="text">It is a long established fact that a reader will be</div>
                        </div>
                    </div>
                </div> --}}
                    <div class="btn-box">
                        <a href="" class="theme-btn btn-style-one"><span class="btn-title">Read More
                                <i class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-xl-6 col-lg-6">
                <div class="inner-column">
                    <span class="icon-dots bounce-x"></span>
                    <figure class="image-1 overlay-anim wow fadeInUp"><img
                            src="{{ asset('assets/data/aboutus.png') }}" alt="" width: 100%; height: 250px;
                            background-size: top; object-fit: cover></figure>
                    {{-- <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure> --}}
                    <div class="exp-box">
                        <div class="inner" style="background-color: gold;">
                            <div class="icon-box">
                                <span class="icon fa fa-award"></span>
                                <h2 class="title">2004</h2>
                            </div>
                            <p class="text">Established</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-section ">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">Our Partnerships</span>
            <h3>Who's Hiring With Us </h3>
        </div>


        <style>
            .box-shadow {
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
        </style>

        <div class="row">

            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p1.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>


            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p2.jpeg') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>

            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p3.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>

            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p3.jpeg') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p4.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p5.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p6.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p7.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p8.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p9.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p10.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p11.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p12.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p13.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>
            <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                    <figure class="thumb">
                        <img src="{{ asset('assets/data/p15.png') }}" alt=""
                            style="width: 100%; height: 100px; object-fit: contain;">
                    </figure>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection