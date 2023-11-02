@extends('frontEnd.layouts.main')
@section('content')

{{-- <link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}" /> --}}
    <section class="about-us">
        <div class="content">
            <div class="row">
                <div class="col-xl-7 col-lg-5">
                    <div class="image">
                        <img src="{{ asset('assets/images/about/about-us.svg') }}" alt="about">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7">
                    <div class="text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="heading">
                                    <h1>AMP Contracts
                                        Private Limited
                                        is India’s leading
                                        Electrical
                                        Contracting
                                        Company</h1>

                                    <a href="{{ route('projects') }}" class="common-btn">
                                        <button>View All Projects</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="desc">
                                    <p>It has built for itself an enviable reputation of a one-stop Electrical solution
                                    provider for all Electrical needs. AMP CONTRACTS design expertise, world-class
                                    products and exceptional project execution capabilities have helped the Company
                                    sustain leadership position in past years. It is no wonder then that AMP CONTRACTS
                                    has been associated with the most prestigious projects and installations in the
                                    country.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section class="experience">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('assets/images/about/meeting.svg') }}" alt="svg">
                    </div>
                    <div class="col-lg-7 align-self-lg-start col-xl-8">
                        <div class="text">
                            <p>Our experience encompasses wide discipline in the field of electrical engineering from
                                execution of infrastructure facilities for entire Electrical Systems. The company had
                                been associated with several prestigious projects in the past.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="team-heading">We are equipped with a professional
                        engineering team handling every aspect of project.</h2>
                    <p class="team-paragraph">During this period of growth, AMP CONTRACTS has established a strong
                        relationship with their clients and earned appreciation for it's approach of detailed
                        engineering, designing, drawing, implementation, energy & safety audit, operation & maintenance.
                    </p>
                </div>
            </div>
            <div class="members">
                <div class="row ">
                    @foreach ($testimonial as $testimonial)
                        <div class="col-lg-2 col-md-3 col-sm-6 p-sm-0">
                            <div class="custom-column mx-auto mx-sm-0">
                                <div class="image">
                                    <img src="{{ asset($testimonial->image) ?? '' }}" alt="mem1">
                                    <img src="{{ asset('assets/images/shape-small.svg') }}" alt="shape" class="shape">
                                </div>
                                <div class="text">
                                    <p class="name">{{ $testimonial->name }}</p>
                                    <p class="role">{{ $testimonial->designation }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <section class="research">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            <p>AMP CONTRACTS engineering and project expertise gathered across over 2 years of
                                experience in the field of Electrification.</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="left">
                            <h6>Research & Development</h6>
                            <p>At the forefront of our engineering expertise lies our advanced R&D capability. A strong
                                understanding of design along with superior manufacturing capabilities gives us an
                                unmatched competitive lead. No wonder then, that we are associated with the most
                                prestigious names and installations, making us the undisputed market leader in India.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="projects">
                                        <h6>Projects</h6>
                                        <p>AMP CONTRACTS is not just a manufacturing and marketing company. Installation
                                            at site is key aspect of our services. Hence, project management skills are
                                            an integral part of AMP CONTRACTS strengths.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h6><!-- mandatory for layout--></h6>
                                    <div class="desc">
                                        <p>
                                            AMP CONTRACTS takes on projects at any level – turnkey, green-field, or
                                            parts thereof–and our installation team functions in tandem with other
                                            agencies to ensure completion as schedule.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
