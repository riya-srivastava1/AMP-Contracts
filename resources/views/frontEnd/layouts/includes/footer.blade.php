<footer>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-3 ">
                    <div class="logo">

                            <img src="{{ asset('assets/images/amp-logo.webp') }}" alt="logo">

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="look-forwards">
                        <p>We look forward to your extended patronage in providing you the total “Internal and External
                            Electrical Installation Works”.</p>
                    </div>

                </div>
                @foreach ($contactUs as $contact)
                    <div class="col-lg-3">
                        <div class="contacts">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/mail.svg') }}" alt="mail">
                                    <span>{{ $contact->email }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/call.svg') }}" alt="call">
                                    <span>{{ $contact->contact_number }}</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/call.svg') }}" alt="call">
                                    <span>{{ $contact->secondary_contact_number }}</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-9 ">
                    <div class="footer-links ">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="company common">
                                    <h6>Company</h6>
                                    <ul>
                                        <li>
                                            <a href="{{ route('about.us') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('projects') }}">Projects</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="support common">
                                    <h6>Support</h6>
                                    <ul>
                                        <li>
                                            <a href="{{ route('contact.us') }}">Contact Us</a>

                                        </li>
                                        <li>
                                            Terms of Use
                                        </li>
                                        <li>
                                            Cookie Policy
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="empty common">
                                    <h6><!-- this needs to be here empty--></h6>
                                    <ul>
                                        <li>
                                           Site Map
                                        </li>
                                        <li>
                                            Modern Slavery Statement
                                        </li>
                                        <li>
                                            Payment Guide for Suppliers
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="newsletter ">
                                    <h6>Recieve our newsletter</h6>
                                    <form action="{{ route('news.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" required
                                                placeholder="Enter your e-mail">
                                            <span style="color:red">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <a href="{{ route('news.store') }}" class="common-btn">
                                                <button type="submit"><small>Send Email</small></button>
                                            </a>
                                        </div>
                                    </form>
                                    @foreach ($SocialMedias as $SocialMedia)
                                        <div class="links">
                                            @if ($SocialMedia->linkdin_url)
                                                <a href="{{ $SocialMedia->linkdin_url }}">
                                                    <img src="{{ asset('assets/images/linkedin.svg') }}"
                                                        alt="li">
                                                </a>
                                            @endif
                                            @if ($SocialMedia->twitter_url)
                                                <a href="{{ $SocialMedia->twitter_url }}">
                                                    <img src="{{ asset('assets/images/twit.svg') }}" alt="tw">
                                                </a>
                                            @endif
                                            @if ($SocialMedia->facebook_url)
                                                <a href="{{ $SocialMedia->facebook_url }}">
                                                    <img src="{{ asset('assets/images/fb.svg') }}" alt="fb">
                                                </a>
                                            @endif
                                            @if ($SocialMedia->instagram_url)
                                                <a href="{{ $SocialMedia->instagram_url }}">
                                                    <img src="{{ asset('assets/images/insta.svg') }}" alt="insta">
                                                </a>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($contactUs as $contact)
                    <div class="col-lg-3 ">
                        <div class="head office">
                            <h6>Head Office</h6>
                            <p>{{ $contact->head_office }}</p>
                        </div>

                        <div class="cp office">
                            <h6>Corporate Office</h6>
                            <p>{{ $contact->corporate_office }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="copyrights col-lg-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>
                                    <img src="{{ asset('assets/images/copyright.svg') }}" alt="cp">
                                    <span>All Right Reserve AMP Contracts Pvt. Ltd.</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="powered-by">
                                <p>
                                    <span>Powered
                                        By</span>
                                    <a href="https://www.hexabells.com/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none">
                                            <path
                                                d="M6.17507 13.6961L6.18911 10.0438L7.50421 8.72492L8.8091 10.0335L8.79598 13.6788L7.47757 15.0019L6.17507 13.6961ZM0 7.52103L7.52104 0L14.9986 7.47757L11.3042 11.172L7.5215 7.38924L3.69206 11.2164L0 7.52103Z"
                                                fill="#979797"/>
                                        </svg>
                                        <b>HEXABELLS</b>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
