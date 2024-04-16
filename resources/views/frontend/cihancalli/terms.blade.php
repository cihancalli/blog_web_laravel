@extends('frontend.cihancalli.layouts.master')
@section('titleCihancalli','Terms & Conditions')
@section('bodyClassCihancalli','')
@section('contentCihancalli')
    <!-- Terms content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Terms form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3">
                        <i class="bi bi-shield-exclamation"></i>
                    </div>
                    <h1 class="fw-bolder">
                        Terms & Conditions
                    </h1>
                    <p>
                        This document sets out the legal agreement between you and <a
                                href="{{route("home")}}">{{route("home")}}</a> ("Company") when you use
                        the <a
                                href="{{route("home")}}">{{route("home")}}</a> Blog website ("Site"). By accessing or
                        using the Site, you agree to these Terms
                        and Conditions.
                    </p>
                    <h2>1. Terms of Use</h2>
                    <ul>
                        <li>You may only use the Site for lawful and ethical purposes.</li>
                        <li>You may not upload or post any illegal or unauthorized content to the Site.</li>
                        <li>You may not disrupt the Site in any way or interfere with others' use of it.</li>
                        <li>All content on the Site is copyrighted by the Company or its licensors.</li>
                        <li>You may not copy or distribute content from the Site without permission.</li>
                    </ul>

                    <h2>2. Membership</h2>
                    <ul>
                        <li>You must be 18 years of age or older and have a valid email address to become a member of
                            the Site.
                        </li>
                        <li>You warrant that all information you provide during registration is accurate and
                            up-to-date.
                        </li>
                        <li>You are responsible for keeping your password confidential and not sharing it with any third
                            party.
                        </li>
                        <li>You must notify the Company immediately of any unauthorized use of your account or any other
                            security breach.
                        </li>
                    </ul>

                    <h2>3. Comments and Content</h2>
                    <ul>
                        <li>By submitting comments or content to the Site, you grant the Company a non-exclusive,
                            worldwide,
                            royalty-free license to use, copy, distribute, and modify such content.
                        </li>
                        <li>The Company does not pre-screen or moderate comments or content submitted.</li>
                        <li>The Company reserves the right to remove comments or content at any time and for any
                            reason.
                        </li>
                        <li>It is important that you are polite in your comments and content and that you do not use any
                            offensive or defamatory language.
                        </li>
                    </ul>

                    <h2>4. Privacy Policy</h2>
                    <ul>


                        <li>The Company will use your personal information in accordance with the Privacy Policy.</li>
                        <li>You can view the Privacy Policy at <a
                                    href="{{route("home").'/privacy'}}">{{route("home").'/privacy'}}</a>
                        </li>
                    </ul>

                    <h2>5. Disclaimer</h2>
                    <ul>
                        <li>The information on the Site is provided "as is" and the Company makes no warranties as to
                            its accuracy or completeness.
                        </li>
                        <li>The Company will not be liable for any direct or indirect damages arising from your use of
                            the Site.
                        </li>
                        <li>Links on the Site may lead to third party websites and the Company is not responsible for
                            the content or security of such websites.
                        </li>
                    </ul>

                    <h2>6. Changes</h2>
                    <ul>
                        <li>The Company reserves the right to change these Terms and Conditions at any time.</li>
                        <li>Changes will be effective from the date they are published on the Site.</li>
                        <li>Your continued use of the Site constitutes your acceptance of the updated Terms and
                            Conditions.
                        </li>
                    </ul>

                    <h2>7. Disputes</h2>
                    <ul>
                        <li>These Terms and Conditions shall be governed by and construed in accordance with Turkish
                            law.
                        </li>
                        <li>Any disputes shall be resolved by the courts of Istanbul.</li>
                    </ul>

                    <h2>8. Contact</h2>
                    <p>
                        If you have any questions or concerns about these Terms and Conditions, please contact us at <a
                                href="{{route("home").'/contact'}}">{{route("home").'/contact'}}</a>
                    </p>
                    <p><strong>Thank you for using <a
                                    href="{{route("home")}}">{{route("home")}}</a> Blog!</strong>
                    </p>


                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
