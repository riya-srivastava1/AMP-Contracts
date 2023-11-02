@extends('frontEnd.layouts.main')
@section('content')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}?v={{ time() }}" /> --}}

    <section class="hero-section">
        <div class="container">
            <div class="content">
                <div class="overlay-text">
                    <span>India’s leading</span>
                    <div class="punchline">
                        <h3>Electrical <br>
                            Contracting <br>
                            Company
                        </h3>
                        <p>
                            <span>Design </span>
                            <span>Supply</span>
                            <span>Erection</span>
                            <span>Testing & Commissioning</span>
                            <span>Maintenance</span>
                        </p>

                        <a href="{{ route('contact.us') }}" class="quote common-btn">
                            <button>Get Quote</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="clients">
        <div class="owl-carousel client">
            <div class="owl-slide">
                <img src="{{ asset('assets/images/client1.webp') }}" alt="client1">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client2.webp') }}" alt="client2">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client3.webp') }}" alt="client3">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client5.webp') }}" alt="client4">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client6.webp') }}" alt="client5">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client7.webp') }}" alt="client6">
            </div>


            <div class="owl-slide">
                <img src="{{ asset('assets/images/client9.webp') }}" alt="client8">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client10.webp') }}" alt="client9">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client11.webp') }}" alt="client10">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client1.webp') }}" alt="client1">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client2.webp') }}" alt="client2">
            </div>

            <div class="owl-slide">
                <img src="{{ asset('assets/images/client5.webp') }}" alt="client4">
            </div>
        </div>
    </section>

    <section class="design ">
        <div class="sidebar">
            <h4>Design &
                Engineering
                and Electrical
                Contracting
                Capabilities</h4>

            <p>AMP Contracts has the capability to design contemporary and energy efficient systems for Electrical
                Distribution (HT, LT and internals) and Building Management.</p>

            <a href="{{ route('services') }}" class='service common-btn'>
                <button>Service and Solution</button>
            </a>
        </div>


        <div class="sideContent">
            <div class="topbar">
                <div class="title">
                    <h6 class="bold">Electrical System Design</h6>
                </div>
                <div class="controls">
                    <!-- contains controls for slider -->
                    <div class="owl-control prev">
                        <img src="{{ asset('assets/images/cheveron.svg') }}" alt="prev">
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                    <div class="owl-control next">
                        <img src="{{ asset('assets/images/cheveron.svg') }}" alt="next">
                    </div>
                </div>
            </div>
            <div class="mainSlider">
                <div class="owl-carousel main">
                    @foreach ($sliders as $slider)
                        <div class="owl-slide">
                            <div class="single">
                                <div class="image">
                                    <img src="{{ asset($slider->image_url) ?? '' }}" alt="{{ $slider->alt_tag }}">
                                </div>
                            </div>

                            <div class="text">
                                <p title="{{ $slider->image_description }}">
                                    {{    Str::limit( $slider->image_description, 500) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="service-offerings">
                <div class="title-bar">
                    <h6>Service Offerings</h6>
                    <p>AMP CONTRACTS offers customized design and engineering services which enables our clients to achieve
                        high
                        levels of system operation efficiency. Our repertoire of services includes-</p>
                </div>

                <div class="service-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="draft-tab" data-bs-toggle="tab" data-bs-target="#draft"
                                type="button" role="tab" aria-controls="draft" aria-selected="true">Drafting &
                                Detailing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="desing-tab" data-bs-toggle="tab" data-bs-target="#design"
                                type="button" role="tab" aria-controls="desing" aria-selected="false">Design
                                Development</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="manual-tab" data-bs-toggle="tab" data-bs-target="#manual"
                                type="button" role="tab" aria-controls="manual" aria-selected="false">Construction
                                Documentation and O&M
                                manuals</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other"
                                type="button" role="tab" aria-controls="other" aria-selected="false">Other
                                Services</button>
                        </li>
                    </ul>
                </div>



                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  " id="draft" role="tabpanel" aria-labelledby="draft-tab">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="image">
                                    <img src="{{ asset('assets/images/slider4.webp') }}" alt="thumb">
                                </div>

                            </div>
                            <div class="col-xl-7 ">
                                <div class="text">
                                    <ul>
                                        <li>Coordinated system layout drawings with drawing detailing and interference check
                                            including shop
                                            drawings</li>
                                        <li>Schematic layouts & loop drawings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="image">
                                    <img src="{{ asset('assets/images/slider4.webp') }}" alt="thumb">
                                </div>

                            </div>
                            <div class="col-xl-7 ">
                                <div class="text">
                                    <ul>
                                        <li>Equipment selection/ sizing and finalization of specifications</li>
                                        <li> Preparation of construction/ shop drawings in coordination with building
                                            structures/ interior
                                            layouts& other
                                            services</li>
                                        <li> Development from Design schematics into double line shop drawings covering
                                            electrical,
                                            mechanical and
                                            plumbing.</li>
                                        <li> Bill of Materials for variable materials/ items with specifications</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="manual" role="tabpanel" aria-labelledby="manual-tab">

                        <div class="row">
                            <div class="col-xl-5">
                                <div class="image">
                                    <img src="{{ asset('assets/images/slider4.webp') }}" alt="thumb">
                                </div>

                            </div>
                            <div class="col-xl-7 ">
                                <div class="text">
                                    <ul>
                                        <li>Preparation of RFQ and detailed specifications of plant equipment /materials
                                        </li>
                                        <li>Tender evaluation (if-required) of plant equipment / materials</li>
                                        <li>Preparation of installation/ commissioning check documents</li>
                                        <li>Operation Qualification – Performance Qualification</li>
                                        <li>Preparation of O&M manuals based on spare parts list &Equipment
                                            details provided by vendors</li>
                                        <li>Preparation of as-built drawings based on site modifications</li>
                                        <li>Electrical, equipment and process load data with locations</li>
                                        <li>Design criteria and technical parameters/guidelines for the application</li>
                                        <li>Schematic/ conceptual layout drawings</li>
                                        <li>Design codes/ industry practices to be followed</li>
                                        <li>Technical specifications and approved makes of material and equipment</li>
                                        <li>Critical Power requirements – Critical System requirements</li>
                                        <li>Critical Process requirements</li>
                                        <li>Operation criteria and maintenance criteria of the systems</li>
                                        <li>Quality Assurance Plan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="image">
                                    <img src="{{ asset('assets/images/slider4.webp') }}" alt="thumb">
                                </div>

                            </div>
                            <div class="col-xl-7 ">
                                <div class="text">
                                    <ul>
                                        <li>Competent to make 2D & 3D coordinated drawings as per client standards including
                                            interference
                                            check</li>
                                        <li>Use of advanced software’s helps achieve qualitative edge and accuracy– Adopt
                                            client’s
                                            proprietary or bought
                                            out tools as part of our deliverables</li>
                                        <li> Design/Drafting software for electrical</li>
                                        <li>Diligently follow Quality Control procedures, CMMI& ISO</li>
                                        <li>World-class infrastructure supporting high-speed Networking &Security as well
                                            real-time
                                            collaboration with
                                            clients</li>
                                        <li>Skilled manpower proficient in using design / drafting software’s.</li>
                                        <li>Financial capability to scale the engagement and make additional investments
                                        </li>
                                        <li> Shrink timelines leading to reduced overall cost.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contracts">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left">
                            <span>Projects</span>
                            <h4>@AMP Contracts </h4>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="right">
                            <p>At AMP CONTRACTS we offers you a one-stop solution for all your Electrical projects. We have
                                executed
                                several prestigious electrical contracting projects. Some of the projects executed are
                                listed under
                                Major Contracts in this binder.</p>
                            <a href="{{ route('projects') }}" class="view-all">
                                <span>View all projects</span>
                                <img src="{{ asset('assets/images/cheveron.svg') }}" alt="chev">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="market">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h5>Market we serve</h5>
                    <p>AMP CONTRACTS has the capability to design contemporary and energy efficient systems for Electrical
                        Distribution (HT, LT and internals) and Building Management.</p>
                </div>

                <div class="box0"></div>
                <div class="box1 box">
                    <img src="{{ asset('assets/images/box1.svg') }}" alt="cap">
                    <span>Commercial Offices</span>
                </div>

                <div class="box2 box">
                    <img src="{{ asset('assets/images/box2.svg') }}" alt="cap">
                    <span>Hospitality</span>
                </div>

                <div class="box3 box">
                    <img src="{{ asset('assets/images/box3.svg') }}" alt="cap">
                    <span>Data Centres</span>
                </div>

                <div class="box4 box">
                    <img src="{{ asset('assets/images/box4.svg') }}" alt="cap">
                    <span>Industrial</span>
                </div>

                <div class="box5 box">
                    <img src="{{ asset('assets/images/box5.svg') }}" alt="cap">
                    <span>Manufacturing</span>
                </div>

                <div class="box6 box">
                    <img src="{{ asset('assets/images/box6.svg') }}" alt="cap">
                    <span>Residential</span>
                </div>

                <div class="box7 box">
                    <img src="{{ asset('assets/images/box7.svg') }}" alt="cap">
                    <span>Healthcare</span>
                </div>

                <div class="box8 box">
                    <img src="{{ asset('assets/images/box8.svg') }}" alt="cap">
                    <span>Biotechnology</span>
                </div>

                <div class="box9 box">
                    <img src="{{ asset('assets/images/box9.svg') }}" alt="cap">
                    <span>Pharmaceuticals</span>
                </div>

                <div class="box10 box">
                    <img src="{{ asset('assets/images/box10.svg') }}" alt="cap">
                    <span>Educational</span>
                </div>

                <div class="box11 box">
                    <img src="{{ asset('assets/images/box11.svg') }}" alt="cap">
                    <span>Retail</span>
                </div>
            </div>
        </div>
    </section>

    <section class="quality">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left">
                            <h5>Quality Policy</h5>
                            <p>Our mission is to design, engineer and execute electrical contracting projects on time to
                                customer
                                needs with world class product and services. This shall be achieved by:</p>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="right">
                            <div class="row">
                                <div class="col-lg-9 order-lg-1 order-2">
                                    <div class="text">
                                        <ul>
                                            <li>Executing the project on the committed time.</li>
                                            <li>Continually improving quality standards in engineering, sales, procurement
                                                and construction.
                                            </li>
                                            <li>Establishing a quality management system from selling to post commissioning
                                                care.</li>
                                            <li>Giving prompt, capable and courteous responses to internal and external
                                                customers.</li>
                                            <li>Building a people culture through involvement, recognition and appreciation.
                                            </li>
                                            <li>Developing, supporting and training our business associates to enhance
                                                quality standards.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 order-lg-2 order-1">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/qp.webp') }}" alt="qp">
                                        <img src="{{ asset('assets/images/shape-small.svg') }}" alt="shape"
                                            class="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="focus">
        <img src="{{ asset('assets/images/shape.webp') }}" alt="shape" class="shape">

        <div class="object ">
            <button class="head" data-bs-toggle="collapse" data-bs-target="#collapse-body" aria-expanded="false"
                aria-controls="collapse-body">
                <p>With regard to Health and Safety objectives, AMP CONTRACTS</p>
                <img src="{{ asset('assets/images/cheveron.svg') }}" alt="chev">
            </button>

            <div class="body collapse" id="collapse-body">
                <ul>
                    <li>Complies with the requirements of all relevant statutory, regulatory and other provisions.</li>
                    <li>Creates safety awareness to protect all stake holders from foreseeable work hazards and risks
                        through
                        campaigns and training programmes among Employees, Business Associates and Clients.</li>
                    <li>Works with major suppliers, Business Associates and customers to facilitate their Health & Safety
                        Performance improvement and also make it obligatory for them to follow the project site safety
                        rules,
                        procedures, systems and safe practices.</li>
                    <li>Ensures that appropriate resources are available to fully implement Health& Safety Policy and
                        continuously
                        review the policy’s relevance with respect to legal and business development</li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <h6>EHS Focus</h6>
                <p>In AMP CONTRACTS , the Environment, Health and Safety (EHS) of Employees and all the Stake holders
                    associated
                    with our project sites is of utmost importance to us. Safety is therefore an integral part of all our
                    work
                    activities. We believe that accidents and risk to health are preventable through the active involvement
                    of all
                    the stakeholders, thereby creating a safe, healthy and accident-free work place.</p>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="bg"></div>
        <div class="text">
            <h6>AMP CONTRACTS is not just a manufacturing
                and marketing company. Installation at site is
                key aspect of our services.</h6>
            <a href="{{ route('about.us') }}">
                <span>About us</span>
                <img src="{{ asset('assets/images/cheveron.svg') }}" alt="chev">
            </a>
        </div>
    </section>
@endsection
