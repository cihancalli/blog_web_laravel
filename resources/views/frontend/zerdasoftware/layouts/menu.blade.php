<!-- Navbar-->
<nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
    <div class="container px-5">
        <a class="navbar-brand text-primary" href="{{route('home')}}">Zerda Software</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-lg-5">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item dropdown dropdown-xl no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Landings
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up me-lg-n25 me-xl-n15"
                         aria-labelledby="navbarDropdownDemos">
                        <div class="row g-0">
                            <div
                                class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block"
                                style="background-image: url('{{route('home')}}/frontend/zerdasoftware/dist/assets/img/backgrounds/bg-dropdown-xl.jpg')">
                                <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                    <div class="text-white text-center z-1">
                                        <div class="mb-3">Multipurpose landing pages for a variety of
                                            projects.
                                        </div>
                                        <a class="btn btn-white btn-sm text-primary fw-500"
                                           href="{{route('home')}}">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 p-lg-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header text-primary">Applications</h6>
                                        <a class="dropdown-item" href="{{route('home')}}">Mobile App</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Desktop App</a>
                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Business</h6>
                                        <a class="dropdown-item" href="{{route('home')}}">Multipurpose</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Agency</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Press</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Directory</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Rental</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Real Estate</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Classifieds</a>
                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Lead Generation</h6>
                                        <a class="dropdown-item" href="{{route('home')}}">Lead Capture</a>
                                        <div class="dropdown-divider border-0 d-lg-none"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header text-primary">Personal</h6>
                                        <a class="dropdown-item" href="{{route('home')}}">Resume</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Portfolio</a>
                                        <div class="dropdown-divider border-0"></div>
                                        <h6 class="dropdown-header text-primary">Header Styles</h6>
                                        <a class="dropdown-item" href="{{route('home')}}">Basic</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Basic (Signup)</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Graphic</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Graphic
                                            (Signup)</a>
                                        <a class="dropdown-item" href="{{route('home')}}">
                                            Video Header
                                            <span
                                                class="badge bg-primary-soft text-primary ms-1">New!</span>
                                        </a>
                                        <a class="dropdown-item" href="{{route('home')}}">Inner Page</a>
                                        <a class="dropdown-item" href="{{route('home')}}">Nav Only</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-xl no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-n20 me-xl-n15 animated--fade-in-up"
                         aria-labelledby="navbarDropdownPages">
                        <div class="row g-0">
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Company</h6>
                                <a class="dropdown-item" href="{{route('home')}}">Basic Page</a>
                                <a class="dropdown-item" href="{{route('home')}}">About</a>
                                <a class="dropdown-item" href="{{route('home')}}">Pricing</a>
                                <a class="dropdown-item" href="{{route('home')}}">Contact</a>
                                <a class="dropdown-item" href="{{route('home')}}">Team</a>
                                <a class="dropdown-item" href="{{route('home')}}">Terms</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Support</h6>
                                <a class="dropdown-item" href="{{route('home')}}">Help Center</a>
                                <a class="dropdown-item" href="{{route('home')}}">Knowledgebase</a>
                                <a class="dropdown-item" href="{{route('home')}}">Message Center</a>
                                <a class="dropdown-item" href="{{route('home')}}">Support Ticket</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Careers</h6>
                                <a class="dropdown-item" href="{{route('home')}}">Careers List</a>
                                <a class="dropdown-item" href="{{route('home')}}">Position Details</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Blog</h6>
                                <a class="dropdown-item" href="{{route('home')}}">Overview</a>
                                <a class="dropdown-item" href="{{route('home')}}">Post</a>
                                <a class="dropdown-item" href="{{route('home')}}">Archive</a>
                                <div class="dropdown-divider border-0"></div>
                                <h6 class="dropdown-header text-primary">Portfolio</h6>
                                <a class="dropdown-item" href="{{route('home')}}">Grid</a>
                                <a class="dropdown-item" href="{{route('home')}}">Large Grid</a>
                                <a class="dropdown-item" href="{{route('home')}}">Masonry</a>
                                <a class="dropdown-item" href="{{route('home')}}">Case Study</a>
                                <a class="dropdown-item" href="{{route('home')}}">Project</a>
                                <div class="dropdown-divider border-0 d-lg-none"></div>
                            </div>
                            <div class="col-lg-4 p-lg-5">
                                <h6 class="dropdown-header text-primary">Error</h6>
                                <a class="dropdown-item" href="{{route('home')}}">400 Error</a>
                                <a class="dropdown-item" href="{{route('home')}}">401 Error</a>
                                <a class="dropdown-item" href="{{route('home')}}">404 Error (Option 1)</a>
                                <a class="dropdown-item" href="{{route('home')}}">404 Error (Option 2)</a>
                                <a class="dropdown-item" href="{{route('home')}}">500 Error</a>
                                <a class="dropdown-item" href="{{route('home')}}">503 Error</a>
                                <a class="dropdown-item" href="{{route('home')}}">504 Error</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Documentation
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                         aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3"
                           href="{{route('home')}}" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i
                                    data-feather="book-open"></i></div>
                            <div>
                                <div class="small text-gray-500">Documentation</div>
                                Usage instructions and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3"
                           href="{{route('home')}}" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i
                                    data-feather="code"></i></div>
                            <div>
                                <div class="small text-gray-500">Components</div>
                                Code snippets and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3"
                           href="{{route('home')}}" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i
                                    data-feather="file-text"></i></div>
                            <div>
                                <div class="small text-gray-500">Changelog</div>
                                Updates and changes
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <a class="btn fw-500 ms-lg-4 btn-primary"
               href="https://play.google.com/store/apps/dev?id=5931187171322808945&pli=1">
                Play Store
                <i class="ms-2" data-feather="arrow-right"></i>
            </a>
        </div>
    </div>
</nav>
