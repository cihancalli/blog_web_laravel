@extends('frontend.person.layouts.master')
@section('titlePerson','Privacy Policy')
@section('bodyClassPerson','')
@section('contentPerson')
    <!-- Privacy content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Privacy form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class=" mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h1 class="fw-bolder">
                        Privacy Policy
                    </h1>

                    <h2>Introduction</h2>
                    <p>
                        Cihan Calli is committed to protecting the privacy of its users. This Privacy Policy explains
                        how <a
                            href="{{route("home")}}">{{route("home")}}</a> ("Company", "we", "us") collects and uses personal information through its
                        website located at <a
                            href="{{route("home")}}">{{route("home")}}</a> ("Website"). This Privacy Policy also explains how
                        we protect your personal information and your choices and rights regarding your information.
                    </p>
                    <h2>Information We Collect</h2>
                    <p>
                        When you visit the Website or send us a message, we may collect a variety of personal
                        information from you, including:
                    </p>
                    <ul>
                        <li>Your name and surname</li>
                        <li>Your email address</li>
                        <li>Your phone number</li>
                        <li>The content of your message</li>
                    </ul>

                    <h2>How We Use Your Information</h2>
                    <p>We may use the information we collect for the following purposes:</p>
                    <ul>
                        <li>To respond to your questions and requests</li>
                        <li>To improve the Website and our services</li>
                        <li>To send you marketing and advertising materials</li>
                    </ul>

                    <h2>Who We Share Your Information With</h2>
                    <p>
                        We will not share your personal information with third parties except as required by law or as
                        described below. We may share your personal information with:
                    </p>
                    <ul>
                        <li>Our service providers: We use third-party service providers to help us operate the Website
                            and
                            our services. We may provide these service providers with access to personal information
                            that is
                            necessary for them to perform their functions.
                        </li>
                        <li>Legal obligations: We may share your personal information with third parties if we believe
                            it is
                            necessary to comply with the law or a court order, or to protect our legal rights or
                            property.
                        </li>
                    </ul>

                    <h2>Cookies and Other Tracking Technologies</h2>
                    <p>
                        We use cookies and other tracking technologies on the Website to personalize your experience and
                        to analyze Website usage. Cookies are small text files that are stored on your computer or
                        device. Tracking technologies include other technologies such as pixels and web beacons.

                        We may use cookies and other tracking technologies for the following purposes:
                    </p>
                    <ul>
                        <li>To remember your preferences and to keep you logged in</li>
                        <li>To optimize the Website and our services</li>
                        <li>To provide you with interest-based advertising</li>
                    </ul>
                    <p>
                        You have choices about how we use cookies and other tracking technologies. Most web browsers
                        allow you to choose whether to accept or reject cookies and to see which cookies are stored. You
                        can find more information about cookies in the help section of your web browser.
                    </p>

                    <h2>Security of Your Personal Information</h2>
                    <p>
                        We take technical and administrative security measures to protect your personal information from
                        unauthorized access, use, or disclosure. Our security measures include:
                    </p>
                    <ul>
                        <li>Using secure data centers</li>
                        <li>Encrypting your data</li>
                        <li>Using firewalls and other security software</li>
                    </ul>

                    <h2>Your Choices and Rights</h2>
                    <p>
                        You have the following choices and rights regarding your personal information:
                    </p>
                    <ul>
                        <li>You can unsubscribe from marketing emails.</li>
                        <li>You can request that your personal information be corrected or deleted.</li>
                        <li>You can object to the processing of your personal information.</li>
                    </ul>
                    <p>
                        To make any of these choices, please contact us at <a href="mailto:support@cihancalli.com">support@cihancalli.com</a>.
                    </p>

                    <h2>Children's Privacy</h2>
                    <p>
                        The Website is not designed for children under the age of 13. We do not knowingly collect
                        personal information from children under 13. If you believe that you are under 13 and have
                        provided personal information to us, please contact us at <a
                            href="mailto:support@cihancalli.com">support@cihancalli.com</a> and request that
                        we delete such information.
                    </p>

                    <h2>Changes</h2>
                    <p>
                        We may update this Privacy Policy from time to time. The most recent update date will be
                        displayed at the top of this Privacy Policy. If we make any material changes, we will notify you
                        by email or through a notification on the Website.
                    </p>

                    <h2>Contact Us</h2>
                    <p>
                        If you have any questions about this Privacy Policy or your choices and rights regarding your
                        personal information, please contact us at: <a href="mailto:support@cihancalli.com">support@cihancalli.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
