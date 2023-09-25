@extends('layouts.app')
@section('content')
{{-- Our Business Group --}}
    <section class="project-section-eight" style="background-image: url({{ asset('assets/data/about-bg3.png') }})">
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
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/b5.png') }}"
                                        alt=""></a></figure>
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
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/b10.png') }}"
                                        alt=""></a></figure>
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
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/b8.png') }}"
                                        alt=""></a></figure>
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
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/b9.png') }}"
                                        alt=""></a></figure>
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

{{-- About Us --}}
    <section class="testimonial-section-eight">
        <div class="auto-container">
            <div class="sec-title light v3 text-center">
                <span class="sub-title">About Us</span>
                <h2>What they do?</h2>
            </div>

            <div class="">
                <!-- Testimonial Block -->
                <div class="testimonial-block-eight">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="image-box">
                                <figure class="thumb"><img src="{{ asset('assets/data/m1.jpg') }}" alt=""
                                        style="width:350px; height:100%;"></figure>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 class="name"> Mr.Chookiat Bauphang</h4>
                                <span class="designation">CHAIRMAN</span>
                                <div class="text">Chairman บริษัท Million House (ประเทศไทย จำกัด)
                                    -กรรมการผู้จัดการ บริษัท ลิขสิทธิ์ เซนเตอร์ จำกัด
                                    -กรรมกาผู้จัดการ บริษัท เอ็ม พี ทรี (ประเทศไทย) จำกัด
                                    -เป็นผู้ดำเนินธุรกิจนำเข้าแรงงานจากพม่าเข้ามาทำงานในประเทศไทย
                                    ดำเนินธุรกิจด้านนี้-ตั้งแต่ปี 2554 ต่อเนื่องมาจนถึงปัจจุบัน
                                    -เป็นผู้มีส่วนในการผู้ผลักดันให้ใช้แรงงานต่างด้าวถูกกฎหมาย ในประเทศไทย
                                    -เป็นเจ้าของคอนเทนต์ไพร์ไวเดอร์
                                    -เป็นผู้มีส่วนในการจัดตั้งสมาคมช่วยเหลือผู้ใช้แรงงานชาวพม่าในประเทศไทย
                                    -เป็นผู้นำศิลปินน้องร้อง นักแสดง ดารา ชาวพม่ามาแสดงคอนคอนเสิร์ตในประเทศไทย
                                    และเดินสายแสดงโชว์ในจังหวัดต่าง ๆในประเทศไทยและ
                                    เป็นเจ้าของลิขสิทธิ์เพลงพม่าในประเทศไทย
                                    ปัจจุบันยังดำเนินธุรกิจประเภทนี้อย่างต่อเนื่อง</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block-eight" style="background-color: black;">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="image-box">
                                <figure class="thumb"><img src="{{ asset('assets/data/m2.jpg') }}" alt=""
                                        style="width:390px; height:320px;;"></figure>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 class="name"> Mr.Million Tun</h4>
                                <span class="designation">CEO</span>
                                <div class="text">ประธานบริหารบริษัท โกเด้น ซี เมียนมา จำกัด ในประเทศพม่า
                                    เป็นบริษัทจัดหางานในระดับต้น ๆ ของประเทศพม่า
                                    ประกอบธุรกิจส่งแรงงานชาวพม่าไปทำงานในประเทศต่าง อาทิ ญี่ปุ่น, มาเลเซีย, สิงคโปร์, และ
                                    ประเทศไทย เป็นต้น สำหรับประเทศไทย
                                    ทางบริษัทฯได้ส่งแรงงานชาวพม่าเข้ามาทำงานในประเทศไทยแล้วไม่น้อยกว่า 100,000 คน ในเวลา 20
                                    ปี
                                    ความสำเร็จของเราในวันนี้ ส่วนหนึ่งเป็นเพราะความมุ่งมั่น
                                    ทุมเทและจริงใจในวิชาชีพและภารกิจที่สำคัญนี้
                                    เรามุ่งมั่นที่จะรักษาคุณภาพและมาตรฐานแรงงานชาวพม่าที่เราได้คัดเลือกและส่งให้ตามที่ผู้ประกอบการต้องการ
                                    จากความมุ่งมั่นและพยายามดังกล่าว เราจึงได้รับความไว้วางใจจากผู้ประกอบการรายใหญ่ ๆ
                                    ในประเทศไทย ตัดสินใจเลือกใช้บริการของเรา อาทิ CP………เป็นต้น
                                    และเพื่อให้การบริหารจัดการและเป็นผู้นำด้านธุระกิจส่งแรงงานชาวพม่าเข้ามาทำงานในประเทศไทย
                                    เราจึงได้ทำ MOU กับบริษัทคู่ค้าในประเทศไทยที่มีคุณภาพและได้มาตรฐาน
                                    เพื่อรองรับการบริหารงานเพื่อธุรกิจขอท่าน เราขอเป็นส่วนหนึ่งในความสำเร็จของท่าน
                                    ท่านมีปัญาหาด้านแรงงาน ท่านใช้บริการเรา ธุรกิจของท่านคือบริการของเรา.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block-eight">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="image-box">
                                <figure class="thumb"><img src="{{ asset('assets/data/m3.jpg') }}" alt=""
                                        style="width:350px; height:300px;"></figure>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 class="name"> Mr. Asdang Methakasejthikul @jimmy</h4>
                                <span class="designation">MD</span>
                                <div class="text">MD บริษัท Million House (ประเทศไทย)
                                    - เป็นบริษัทคู่ค้ากับบริษัทจัดหางานในพม่าหลายบริษัท
                                    - เป็นผู้นำเข้าแรงงานจากพม่าเป็นรายแรก ๆ หลังจากมีMOU
                                    - มีประสบการณ์การนำเข้าแรงงานจากพม่ามากกว่า 10 ปี
                                    - สามารถสื่อสารได้ทั้งภาษาไทยและภาษาพม่าได้เป็นอย่างดี
                                    - นอกจากจะดำเนินธุรกิจด้านการนำเข้าแรงงานจากพม่าแลัว
                                    ยังร่วมมือกับนักธุรกิจไทยเพื่อลงทุนอื่น ๆ อาทิ ด้านการรักษาสุขภาพ การท่องเที่ยว
                                    อสังหารมทรพย์
                                    และบันเทิง เป็นต้น
                                    มุ่งมั่น จริงจัง และจริงใจ ในการบริหารงาน ทุกภารกิจของเรา</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- About Company --}}
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

    <section class="about-section-four" >
        <div class="bg bg-pattern-1"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                

                <!-- Image Column -->
                <div class="image-column col-xl-12 col-lg-12">
                    <div class="inner-column">
                        <span class="icon-dots bounce-x"></span>
                        <figure class="image-1 overlay-anim wow fadeInUp"><img
                                src="{{ asset('assets/data/business5.png') }}" alt="" width: 100%; height: 250px;
                                background-size: top; object-fit: cover></figure>
                        {{-- <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision, Mission and Values --}}
    {{-- <section class="process-section-four  " style="background-image: url({{ asset('assets/data/bg4.png') }})">
        <div class="auto-container">
            <div class="sec-title v2 text-center">
                <span class="sub-title">Million House's Strategy</span>
                <h2>Transforming challenges <br>into opportunities</h2>
            </div>

            <div class="row">
                <!-- Service Block four-->
                <div class="process-block-four col-lg-4 col-sm-6 wow fadeInUp">
                    <div class="inner-box">
                        <i class="icon flaticon-puzzle" style="color:#063d78;"></i>
                        <span class="count">01</span>
                        <h4 class="title" style="color:#063d78; font-weight:bold;"><a href="" >OUR VISION</a></h4>
                        <div class="text">Our vision is to create a global network of companies that lead by example, shaping industries through innovation and sustainable practices, leaving a positive legacy for future generations. </div>
                    </div>
                </div>

                <!-- Service Block four-->
                <div class="process-block-four col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <i class="icon flaticon-cog"></i>
                        <span class="count">02</span>
                        <h4 class="title" style="color:#063d78; font-weight:bold;"><a href="">OUR MISSION</a></h4>
                        <div class="text">
                            We are committed to creating cutting-edge solutions and services across our diverse portfolio of companies, driven by a passion for excellence, sustainability, and customer satisfaction.
                        </div>
                    </div>
                </div>

                <!-- Service Block four-->
                <div class="process-block-four col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <i class="icon flaticon-stats"></i>
                        <span class="count">03</span>
                        <h4 class="title" style="color:#063d78; font-weight:bold;"><a href="">OUR VALUES</a></h4>
                        <div class="text">
                            <i class="fa fa-check"  style="color:#063d78;" >  </i> Integrity:<br>
                            <i class="fa fa-check"  style="color:#063d78;">  </i>Collaboration:<br>
                            <i class="fa fa-check"  style="color:#063d78;">  </i>Innovation:<br>
                            <i class="fa fa-check"  style="color:#063d78;">  </i>Sustainability:<br>
                            <i class="fa fa-check"  style="color:#063d78;"> </i> Excellence:
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
  

    <section class="services-section-three" style="background-color: #fafafa;">
        <div class="auto-container">
            <div class="sec-title v2 text-center">
                <span class="sub-title">Best Service</span>
                <h2>Transforming challenges <br>into opportunities</h2>
            </div>
    
            <div class="row">
                <!-- service Block -->
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box" >
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{asset('assets/data/vision6.jpeg')}}" alt="" ></a></figure>
                            <span class="icon flaticon-diploma"></span>
                        </div>
                        <div class="content-box" >
                            <h4 class="title"><a href="" style="color:black;">Our Vision</a></h4>
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
                    <div class="inner-box" style="background-color: black">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{asset('assets/data/mission3.jpeg')}}" alt="" ></a></figure>
                            <span class="icon flaticon-target"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="">Our Mission</a></h4>
                            <div class="text">We are committed to creating services across our diverse portfolio of companies, driven by a passion for excellence, sustainability, and customer satisfaction.</div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box" style="background-color: black">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{asset('assets/data/values5.jpeg')}}" alt=""></a></figure>
                            <span class="icon flaticon-approved"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="">Our Mission</a></h4>
                            <div class="text">It is a long established fact that a reader jki will be distracted by the readable contentjli of a page when looking at its layout.</div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box" style="background-color: black">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{asset('assets/data/goal2.png')}}" alt=""></a></figure>
                            <span class="icon flaticon-approved"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="">Accelerate Ace</a></h4>
                            <div class="text">It is a long established fact that a reader jki will be distracted by the readable contentjli of a page when looking at its layout.</div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- ISO Certificates --}}
    <section class="services-section" style="background-image: url({{ asset('assets/data/bg5.png') }})">
        <div class="auto-container">
            <div class="sec-title light">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="sub-title">ISO Certificates</span>
                        <h2>Helping you achieve your <br>financial goals</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="text">Lorem ipsum dolor sit amet consectetur. Praesent sit idr massa. Scelerisque
                            vivamus varius tortor suspendisse commodo eget aliquam conset sit. In iaculis mattis aliquam
                            turpis lectus sagittis erat pharetra.</div>
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
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">ISO
                                    CERTIFICATES </span></a>
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
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">ISO
                                    CERTIFICATES </span></a>

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
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">ISO
                                    CERTIFICATES </span></a>

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
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">ISO
                                    CERTIFICATES </span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     {{-- Counter --}}
    <section class="fun-fact-section-three">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-flag" style="font-size:40px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="2004">0</span></div>
                                <h6 class="counter-title">Founded</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-users" style="font-size:40px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="100">0</span>+</div>
                                <h6 class="counter-title">Team Members</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-buildings" style="font-size:40px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span></div>
                                <h6 class="counter-title">Companies</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="900ms">
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

    {{-- Teams --}}
    <section class="team-section-nine" style="background-color: #32323a;">    
        <div class="auto-container">
            <div class="sec-title v3 text-center">
                <span class="sub-title" style="color:white">Best Team</span>
                <h2 style="color:white">Making Your Business design <br>Dreams a Reality</h2>
            </div>

            <div class="row">
                <!-- Team block nine -->
                <div class="team-block-nine col-lg-3 col-sm-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-team-details.html"><img src="{{asset('assets/images/resource/team9-1.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="page-team-details.html">Albert Flores</a></h4>
                            <span class="designation">Web Designer</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- Team block Four -->
                <div class="team-block-nine col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-team-details.html"><img src="{{asset('assets/images/resource/team9-2.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="page-team-details.html">Jerome Bell</a></h4>
                            <span class="designation">Marketing Coordinator</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team block nine -->
                <div class="team-block-nine col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-team-details.html"><img src="{{asset('assets/images/resource/team9-3.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="page-team-details.html">Eleanor Pena</a></h4>
                            <span class="designation">President of Sales</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Countries --}}
    <section class="testimonial-section-five" style="background-color: #fafafa;">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <span class="sub-title" style="color:black;">Our Business</span>
                <h2 style="color:black;">Supplying Myanmar Workers to:</h2>
            </div>

            <div class="carousel-outer">
                <div class="three-items-carousel owl-carousel disable-navs default-dots-three">
                    <!-- Testimonial Block five -->
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/tflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Thailand</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Testimonial Block five -->
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/mflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Malaysia</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/sflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Singapore</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/jflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Japan</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    {{-- Partnership --}}
    <section class="testimonial-section ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our Partnerships</span>
                <h2>Navigating digital with precision <br>and purpose</h2>
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
   
   {{-- Newsletter short --}}
    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="row">
                <!-- content-column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-lg-2">
                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title light">
                            <span class="sub-title">newsLetter</span>
                            <h2>Subscribe To Our <br>Newsletter</h2>
                            <div class="text">It is a long established fact that a reader will be distracted by the <br>readable content of a page when looking at its layout</div>
                        </div>

                        <div class="subscribe-form-two">
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="text" name="Phone" placeholder="Enter Your Email" required>
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Subscribe</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- image-column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow zoomIn"><a href="#"><img src="{{asset('assets/images/resource/pana.png')}}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    {{-- Update News --}}
    <section class="news-section-ten pt-0">
        <div class="auto-container">
            <div class="sec-title v3 text-center">
                <span class="sub-title">blog and news</span>
                <h2>Innovative solutions for a <br>better tomorrow</h2>
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
                                        src="{{ asset('assets/images/resource/news10-1.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">28 May 2023</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Tech Solutions</a></h4>
                            <div class="text">It is a long established fact that a reader will lil be distracted by the
                                readable content of ahjkli page when looking at its layout.</div>
                            <a href="" class=" read-more"><span class="btn-title">Read More <i
                                        class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        src="{{ asset('assets/images/resource/news10-2.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">28 May 2023</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Digital Marketing</a></h4>
                            <div class="text">It is a long established fact that a reader will lil be distracted by the
                                readable content of ahjkli page when looking at its layout.</div>
                            <a href="" class=" read-more"><span class="btn-title">Read More <i
                                        class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        src="{{ asset('assets/images/resource/news10-3.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">28 May 2023</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Web Development</a></h4>
                            <div class="text">It is a long established fact that a reader will lil be distracted by the
                                readable content of ahjkli page when looking at its layout.</div>
                            <a href="" class=" read-more"><span class="btn-title">Read More <i
                                        class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img
                                        src="{{ asset('assets/images/resource/news10-3.jpg') }}" alt=""></a>
                            </figure>
                            <span class="date">28 May 2023</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Comments</li>
                            </ul>
                            <h4 class="title"><a href="">Web Development</a></h4>
                            <div class="text">It is a long established fact that a reader will lil be distracted by the
                                readable content of ahjkli page when looking at its layout.</div>
                            <a href="" class=" read-more"><span class="btn-title">Read More <i
                                        class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
