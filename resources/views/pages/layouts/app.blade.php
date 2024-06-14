<!DOCTYPE html>
<html lang="en">

<head>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .is-invalid {
            border-color: #dc3545;
        }

        .is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg">
                <!--begin::Header-->
                <div class="bg-black h-50px pt-4 pb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2 class="welcome-heading h-40px">
                                    <marquee>Welcome to Black Diamond Exclusive</marquee>
                                </h2>
                            </div>
                            <div class="col-sm-5 text-end">
                                <h2 class="follow-us-heading h-40px">Follow Us</h2>
                            </div>
                            <div class="col-sm-2">
                                <div class="social-icons h-40px text-end px-6 m-0">
                                    <a href="#"><i class="fa-brands fa-facebook text-white fs-3"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter text-white fs-3"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube text-white fs-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2hx">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="#">
                                    <img alt="Logo" src="{{ asset('assets/media/logos/main-logo.png') }}"
                                        class="logo-default h-60px" />
                                    <img alt="Logo" src="{{ asset('assets/media/logos/main-logo.png') }}"
                                        class="logo-sticky h-20px h-lg-25px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-state-title-primary fs-5 fw-semibold"
                                        id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link active py-3 px-4 px-xxl-6 m-2" href="#kt_body"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 m-2" href="#how-it-works"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About
                                                Works</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 m-2" href="#achievements"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Services</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 m-2" href="#team"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Our
                                                Fleets</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 m-2" href="#portfolio"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Gallery</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 m-2" href="#pricing"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Blog</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 m-2" href="#pricing"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Contact
                                                Us</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                <a href="{{ route('booking.index') }}" class="btn booking-btn"
                                    style="padding: 10px 30px;">BOOK NOW</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Header Section-->
        @yield('content')
        <!--begin::Footer Section-->
        {{-- <div class="mb-0">
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg bg-black">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <!--begin::Title-->
                                <h2 class="text-white">Would you need a Custom License?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="https://keenthemes.com/support"
                                        class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">
                                <!--begin::Title-->
                                <h2 class="text-white">How About a Custom Project?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="pages/user-profile/overview.html"
                                        class="text-white opacity-50 text-hover-primary">Click to Get a
                                        Quote</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-500 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/faqs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://devs.keenthemes.com/"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/blog"
                                        class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-500 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                                            class="h-20px me-2" alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://github.com/KeenthemesHub" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/github.svg') }}"
                                            class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://twitter.com/keenthemes" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}"
                                            class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://dribbble.com/keenthemes" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/dribbble-icon-1.svg') }}"
                                            class="h-20px me-2" alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                        <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}"
                                            class="h-20px me-2" alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="landing.html">
                                <img alt="Logo" src="{{ asset('assets/media/logos/landing.svg') }}"
                                    class="h-15px h-md-20px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"
                                href="https://keenthemes.com">&copy; 2024 Keenthemes Inc.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul
                            class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div> --}}
        <!-- resources/views/layouts/footer.blade.php -->

        <footer class="footer bg-black text-light py-5">
            <div class="container">
                <div class="row">
                    <!-- About Company -->
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h5 class="text-light">ABOUT COMPANY</h5>
                        <p>“Centric applications productize front-end portals, visualize front-end insights, deliver
                            results, and add value globally. They simplify alternative systems without relying on
                            cross-platform models.”</p>
                        <div class="social-icons">
                            {{-- <a href="#"><img src="path/to/facebook-icon.png" alt="Facebook"></a>
                            <a href="#"><img src="path/to/twitter-icon.png" alt="Twitter"></a>
                            <a href="#"><img src="path/to/instagram-icon.png" alt="Instagram"></a>
                            <a href="#"><img src="path/to/linkedin-icon.png" alt="LinkedIn"></a> --}}
                        </div>
                    </div>
                    <!-- Quick Links -->
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h5 class="text-light">QUICK LINK</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none text-light">Home</a></li>
                            <li><a href="#" class="text-decoration-none text-light">About</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Services</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Our Fleets</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Gallery</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Contact</a></li>
                            <li><a href="#" class="text-decoration-none text-light">Rental Booking</a></li>
                        </ul>
                    </div>
                    <!-- Contact Details -->
                    <div class="col-lg-4">
                        <h5 class="text-light">CONTACT DETAILS</h5>
                        <p><i class="fa fa-phone"></i> 1 (707) 455-6792</p>
                        <p><i class="fa fa-envelope"></i> bdiamondxl@gmail.com</p>
                        <p><i class="fa fa-map-marker"></i> Helano Road, USA</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <p class="mb-0">&copy; 2024 Black Diamond Exclusive | All Rights Reserved</p>
                        <p class="mb-0">Created by The Evolving Digital</p>
                    </div>
                </div>
            </div>
        </footer>

        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/stepform.js') }}"></script>
    <script src="{{ asset('assets/js/map.js') }}"></script>
    <!--end::Custom Javascript-->
    @yield('SCRIPT')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
