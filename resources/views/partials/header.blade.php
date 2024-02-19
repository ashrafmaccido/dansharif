<header class="header-area">
    <div class="top-header" style="padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #777; background-color: #222454 !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="header-left-content">
                        <li>
                            <a href="tel:082 444 343">
                                <i class="ri-phone-fill"></i>
                                082 444 343
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="header-right-content">
                        <a href="http://dcns.schoolpal.ng/" target="_blank" style="color: #fff !important; margin-right: 20px;">
                            Parents
                        </a>
                        <a href="http://dcns.schoolpal.ng/" target="_blank" style="color: #fff !important; margin-right: 20px;">
                            Staff
                        </a>
                        <a href="http://dcns.schoolpal.ng/" target="_blank" style="color: #fff !important;">
                            Students
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="others-options-for-mobile-devices">
                        <ul>
                            <li>
                                <a href="http://dcns.schoolpal.ng/" target="_blank" class="default-btn">
                                    APPLY NOW
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/" style="padding: 5px;">
                        <img src="{{ asset('assets/images/logo.png') }}" style="width:300px;" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    PROGRAMMES
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('programmes/basic-nursing') }}" class="nav-link">ND/HND Nursing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('programmes/community-nursing') }}" class="nav-link">Community Nursing</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="{{ url('programmes/basic-midwifery') }}" class="nav-link">Basic Midwifery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('programmes/community-midwifery') }}" class="nav-link">Community Midwifery</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">Post Basic Nursing  <br> <em style="font-size: 11px; color: #92210f;">(under review)</em></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Public Health Nursing <br> <em style="font-size: 11px; color: #92210f;">(under review)</em></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Post Basic Midwifery <br> <em style="font-size: 11px; color: #92210f;">(under review)</em></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Continuing Education <br> <em style="font-size: 11px; color: #92210f;">(under review)</em></a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    ADMISSIONS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Requirements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Duration & Fees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://dcns.schoolpal.ng/" target="_blank" class="nav-link">Apply Now</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">FAQs</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    CAMPUS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Accomodation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">IT Facility</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">School Bus</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    NEWS & EVENTS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Events</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    ABOUT
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Mission & Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Why Study at DCNS?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Management & Staff</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="others-options">
                            <ul>
                                <li>
                                    <a href="http://dcns.schoolpal.ng/" target="_blank" class="default-btn">
                                        APPLY NOW
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>