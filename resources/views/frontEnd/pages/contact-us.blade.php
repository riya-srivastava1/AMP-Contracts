@extends('frontEnd.layouts.main')
@section('content')

{{-- <link rel="stylesheet" href="{{ asset('assets/css/backup/contact.css') }}" /> --}}

<section class="contact">
    <div class="container">
        <div class="content">
            <div class="row ">
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="assets/images/contact/contact-img.svg" alt="img">
                </div>

                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="form-part">
                        <div class="text">
                            <h6>Get in Touch With Us</h6>
                            <p>Feel free to get in touch with any enquiries and one of our friendly members of staff
                                will get back
                                to you as soon as possible, we are here to help !</p>
                        </div>

                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="company" placeholder="Company" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="E-mail" required>
                                        <span style="color:red">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="contact_number" placeholder="Contact Number" oninput="validateContactNumber()" required>
                                        <span style="color:red">
                                            @error('contact_number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="subject_line" placeholder="Subject Line" required>
                                        <span style="color:red">
                                            @error('subject_line')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <a href="javascript:void(0)" class="common-btn">
                                            <button type="submit">Submit</button>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
