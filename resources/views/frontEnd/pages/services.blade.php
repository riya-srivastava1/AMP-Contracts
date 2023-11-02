@extends('frontEnd.layouts.main')
@section('content')

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}" /> --}}

    <section class="services">
        <div class="container">
            <div class="content">
                <h6 class="service-heading"><span>AMP Contracts </span>offers you a single window approach for all your
                    project building requirements of Electrical Utilities</h6>

                <div class="service-boxes">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service1.svg" alt="1">
                                </div>
                                <p>HT & LT Substations (Indoor & Outdoor)</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-1 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service2.svg" alt="2">
                                </div>
                                <p>HT, LT Panels & Switchgears</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service3.svg" alt="3">
                                </div>
                                <p>Generator sets including Acoustics and
                                    Auxiliaries</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service4.svg" alt="4">
                                </div>
                                <p>Power & Distribution Transformers
                                    (Oil Filled & Dry Type)</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service5.svg" alt="5">
                                </div>
                                <p>Internal Electrification covering Distribution and Sub Distribution Panels, DBs, Power &
                                    Lighting Wiring, Illumination with Accessories, UPS Systems and other related works</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service6.svg" alt="6">
                                </div>
                                <p>External Lighting Covering Street, Pathway,
                                    Landscape, Facade & Arena Lighting</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service7.svg" alt="7">
                                </div>
                                <p>Integrated Building Management Systems.</p>
                            </div>
                        </div>


                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service8.svg" alt="8">
                                </div>
                                <p>Structures Cabling System</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service9.svg" alt="9">
                                </div>
                                <p>Security System</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service10.svg" alt="10">
                                </div>
                                <p>Bus Trucking & Rising Main</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 text-center text-sm-start">
                            <div class="service-box">
                                <div class="image">
                                    <img src="assets/images/service/service11.svg" alt="11">
                                </div>
                                <p>Load Sanction and approval for central
                                    authority</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantage">
        <div class="sidebar">
            <p>The advantages of adding electrical utilities contracting services to our repertoire for the customers
                engaging
                us are:</p>

            <a href="{{ route('projects') }}" class='service common-btn'>
                <button>View all projects</button>
            </a>
        </div>


        <div class="sideContent">
            <div class="pro-cards">
                <!-- !!the position of these two divs below is intended to be here exactly!! -->
                <div class="overlay absolute "></div>
                <div class="overlay sticky hide"></div>

                <div class="card-item first">
                    <p>AMP CONTRACTS is a professionally managed company with over 12 years of experience. It has immense
                        expertise in Electrical design, engineering, delivery, project installation and Commissioning along
                        with
                        connected electrical works in varied applications viz. Industrial, Commercial, IT, Software and
                        Bio-Tech
                        Technology Parks.</p>
                </div>

                <div class="card-item">
                    <p>AMP CONTRACTS has strategic tie-ups with manufacturers of control panels for the design and supply of
                        PCC,
                        MCC, sub-distribution panels and custom panels required in such electrical projects.</p>
                </div>


                <div class="card-item">
                    <p>We have unmatched engineering expertise in system design and engineering and has ƒa well- documented
                        procedure for “Professional Management of Project Sites”, ensuring high standards for quality of
                        site work.
                    </p>
                </div>

                <div class="card-item">
                    <p>We have technically qualified and competent managers for major liaising works with Power Supply
                        Utilities
                        Department (for execution of service line works and release of Power supply and CEIG authorities
                        (for issue
                        of Safety Certificates & Service Clearance as per the Statutory Acts.)</p>
                </div>

                <div class="card-item">
                    <p>AMP CONTRACTS has a vast pool of project managers, project engineers, safety engineers, planning
                        engineers
                        and highly skilled and dedicated Business Associates in both mechanical and electrical streams.
                        Further, AMP
                        CONTRACTS ’s After-Sales-Service team provides commissioning, maintenance and break down related
                        services in
                        both electrical and mechanical streams.</p>
                </div>

                <div class="card-item">
                    <p class="py-5"></p>
                </div>

            </div>
        </div>
    </section>

    <section class="contracts">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="left">
                            <span>Projects</span>
                            <h4>@AMP Contracts </h4>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="right">
                            <p>Enlist our name in the “Electrical Contracting Services” list and further request you to
                                issue us the
                                “ELECTRICAL TENDERS” which will receive our best and prompt attention.</p>
                            <a href="{{ route('contact.us') }}" class="view-all">
                                <span>Contact Us</span>
                                <img src="assets/images/cheveron.svg" alt="chev">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let proCards = document.querySelector('.pro-cards');
        let absoluteOverlay = document.querySelector('.overlay.absolute');
        let stickyOverlay = document.querySelector('.overlay.sticky');

        document.addEventListener('DOMContentLoaded', (e) => {
            if (window.innerWidth > 992) {
                window.addEventListener('scroll', function(e) {
                    let rect = proCards.getBoundingClientRect();
                    if (rect.top <= 60) {
                        absoluteOverlay.classList.add('hide');
                        stickyOverlay.classList.remove('hide');

                    }
                    if (rect.top > -140) {
                        absoluteOverlay.classList.remove('hide');
                        stickyOverlay.classList.add('hide');
                    }
                    if (rect.bottom < window.innerHeight) {

                        absoluteOverlay.classList.remove('hide');
                        stickyOverlay.classList.add('hide');
                    }
                })
            }
        })
    </script>
@endsection
