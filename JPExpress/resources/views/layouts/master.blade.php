

<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>Metronic Live preview | Keenthemes</title>
    <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('admintemplate/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('admintemplate/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admintemplate/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admintemplate/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('admintemplate/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admintemplate/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admintemplate/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admintemplate/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('admintemplate/assets/media/logos/favicon.ico')}}" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">

    @yield('css')

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="index.html">
        <img alt="Logo" src="{{asset('admintemplate/assets/media/logos/logo-light.png')}}" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                    <!--end::Svg Icon-->
                    </span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
    @extends('layouts.nav')
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::Search-->
                        <div class="dropdown" id="kt_quick_search_toggle">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                                                                                <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                </div>
                            </div>
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                    <!--begin:Form-->
                                    <form method="get" class="quick-search-form">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                                                            <span class="input-group-text">
                                                                                                <span class="svg-icon svg-icon-lg">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <div class="input-group-append">
                                                                                            <span class="input-group-text">
                                                                                                <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                                                                            </span>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Scroll-->
                                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                                    <!--end::Scroll-->
                                </div>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Search-->
                        <!--begin::Notifications-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                                                                <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                                                                            <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                    <span class="pulse-ring"></span>
                                </div>
                            </div>
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <form>
                                    <!--begin::Header-->
                                    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                                        <!--begin::Title-->
                                        <h4 class="d-flex flex-center rounded-top">
                                            <span class="text-white">User Notifications</span>
                                            <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
                                        </h4>
                                        <!--end::Title-->
                                        <!--begin::Tabs-->
                                        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Content-->
                                    <div class="tab-content">
                                        <!--begin::Tabpane-->
                                        <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                            <!--begin::Scroll-->
                                            <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-primary mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                                                    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
                                                        <span class="text-muted">Marketing campaign planning</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-warning mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
                                                        <span class="text-muted">Project status update meeting</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-success mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-success">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                                                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Claudy Sys</a>
                                                        <span class="text-muted">Project Deployment &amp; Launch</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-danger mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                                                                                                    <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                                                                                                    <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                                                                                                    <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Trilo Service</a>
                                                        <span class="text-muted">Analytics &amp; Requirement Study</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-info mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-info">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                                                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                                                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bravia SAAS</a>
                                                        <span class="text-muted">Reporting Application</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-danger mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                                                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Express Wind</a>
                                                        <span class="text-muted">Software Analytics &amp; Design</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-6">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-success mr-5">
                                                                                                    <span class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-lg svg-icon-success">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
                                                                                                                    <path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column font-weight-bold">
                                                        <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bruk Fitness</a>
                                                        <span class="text-muted">Web Design &amp; Development</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Action-->
                                            <div class="d-flex flex-center pt-7">
                                                <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Tabpane-->
                                        <!--begin::Tabpane-->
                                        <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                            <!--begin::Nav-->
                                            <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-line-chart text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New report has been received</div>
                                                            <div class="text-muted">23 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-paper-plane text-danger"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">Finance report has been generated</div>
                                                            <div class="text-muted">25 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-user flaticon2-line- text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New order has been received</div>
                                                            <div class="text-muted">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-pin text-primary"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New customer is registered</div>
                                                            <div class="text-muted">3 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-sms text-danger"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">Application has been approved</div>
                                                            <div class="text-muted">3 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-pie-chart-3 text-warning"></i>
                                                        </div>
                                                        <div class="navinavinavi-text">
                                                            <div class="font-weight-bold">New file has been uploaded</div>
                                                            <div class="text-muted">5 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-pie-chart-1 text-info"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New user feedback received</div>
                                                            <div class="text-muted">8 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-settings text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">System reboot has been successfully completed</div>
                                                            <div class="text-muted">12 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-safe-shield-protection text-primary"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New order has been placed</div>
                                                            <div class="text-muted">15 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-notification text-primary"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">Company meeting canceled</div>
                                                            <div class="text-muted">19 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-fax text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New report has been received</div>
                                                            <div class="text-muted">23 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-download-1 text-danger"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">Finance report has been generated</div>
                                                            <div class="text-muted">25 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon-security text-warning"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New customer comment recieved</div>
                                                            <div class="text-muted">2 days ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="#" class="navi-item">
                                                    <div class="navi-link">
                                                        <div class="navi-icon mr-2">
                                                            <i class="flaticon2-analytics-1 text-success"></i>
                                                        </div>
                                                        <div class="navi-text">
                                                            <div class="font-weight-bold">New customer is registered</div>
                                                            <div class="text-muted">3 days ago</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Nav-->
                                        </div>
                                        <!--end::Tabpane-->
                                        <!--begin::Tabpane-->
                                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                            <!--begin::Nav-->
                                            <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
                                                <br />No new notifications.</div>
                                            <!--end::Nav-->
                                        </div>
                                        <!--end::Tabpane-->
                                    </div>
                                    <!--end::Content-->
                                </form>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Notifications-->
                        <!--begin::Quick Actions-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                                                                <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                </div>
                            </div>
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <!--begin:Header-->
                                <div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                                    <h4 class="text-white font-weight-bold">Quick Actions</h4>
                                    <span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">23 tasks pending</span>
                                </div>
                                <!--end:Header-->
                                <!--begin:Nav-->
                                <div class="row row-paddingless">
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
                                                                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg-->
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                    <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3" />
                                                                                                    <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000" />
                                                                                                </g>
                                                                                            </svg>
                                                                                            <!--end::Svg Icon-->
                                                                                        </span>
                                            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
                                            <span class="d-block text-dark-50 font-size-lg">eCommerce</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
                                                                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg-->
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                    <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3" />
                                                                                                    <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000" />
                                                                                                </g>
                                                                                            </svg>
                                                                                            <!--end::Svg Icon-->
                                                                                        </span>
                                            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Administration</span>
                                            <span class="d-block text-dark-50 font-size-lg">Console</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
                                                                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                    <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                                                                                    <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                                                                                </g>
                                                                                            </svg>
                                                                                            <!--end::Svg Icon-->
                                                                                        </span>
                                            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
                                            <span class="d-block text-dark-50 font-size-lg">Pending Tasks</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                    <!--begin:Item-->
                                    <div class="col-6">
                                        <a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
                                                                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                                                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                    </g>
                                                                                                </svg>
                                                                                            <!--end::Svg Icon-->
                                                                                            </span>
                                            <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Customers</span>
                                            <span class="d-block text-dark-50 font-size-lg">Latest cases</span>
                                        </a>
                                    </div>
                                    <!--end:Item-->
                                </div>
                                <!--end:Nav-->
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Quick Actions-->
                        <!--begin::Cart-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1" id="kt_quick_cart_toggle">
                                                                                <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                            <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                            </div>
                        </div>
                        <!--end::Cart-->
                        <!--begin::Quick panel-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
                                                                                <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                            </div>
                        </div>
                        <!--end::Quick panel-->
                        <!--begin::Chat-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal" data-target="#kt_chat_modal">
                                                                                <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                                                        </g>
                                                                                    </svg>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                            </div>
                        </div>
                        <!--end::Chat-->
                        <!--begin::Languages-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                    <img class="h-20px w-20px rounded-sm" src="{{asset('admintemplate/assets/media/svg/flags/226-united-states.svg')}}" alt="" />
                                </div>
                            </div>
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Nav-->
                                <ul class="navi navi-hover py-4">
                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                                                                            <span class="symbol symbol-20 mr-3">
                                                                                                <img src="{{asset('admintemplate/assets/media/svg/flags/226-united-states.svg')}}" alt="" />
                                                                                            </span>
                                            <span class="navi-text">English</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="navi-item active">
                                        <a href="#" class="navi-link">
                                                                                            <span class="symbol symbol-20 mr-3">
                                                                                                <img src="{{asset('admintemplate/assets/media/svg/flags/128-spain.svg')}}" alt="" />
                                                                                            </span>
                                            <span class="navi-text">Spanish</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                                                                            <span class="symbol symbol-20 mr-3">
                                                                                                <img src="{{asset('admintemplate/assets/media/svg/flags/162-germany.svg')}}" alt="" />
                                                                                            </span>
                                            <span class="navi-text">German</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                                                                            <span class="symbol symbol-20 mr-3">
                                                                                                <img src="{{asset('admintemplate/assets/media/svg/flags/063-japan.svg')}}" alt="" />
                                                                                            </span>
                                            <span class="navi-text">Japanese</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                                                                            <span class="symbol symbol-20 mr-3">
                                                                                                <img src="{{asset('admintemplate/assets/media/svg/flags/195-france.svg')}}" alt="" />
                                                                                            </span>
                                            <span class="navi-text">French</span>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Languages-->
                        <!--begin::User-->
                        <div class="topbar-item">
                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name }}</span>
                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                                                                    <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                                                                </span>
                            </div>
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            @yield('subheader')

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">





                        @yield('content')
                        {{--                        <!--begin::Dashboard-->--}}
                        {{--                        <!--begin::Row-->--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-lg-6 col-xxl-4">--}}
                        {{--                                <!--begin::Mixed Widget 1-->--}}
                        {{--                                <div class="card card-custom bg-gray-100 card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0 bg-danger py-5">--}}
                        {{--                                        <h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline">--}}
                        {{--                                                <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header pb-1">--}}
                        {{--                                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-shopping-cart-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Order</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-calendar-8"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Event</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-graph-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Report</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Post</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-writing"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">File</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body p-0 position-relative overflow-hidden">--}}
                        {{--                                        <!--begin::Chart-->--}}
                        {{--                                        <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>--}}
                        {{--                                        <!--end::Chart-->--}}
                        {{--                                        <!--begin::Stats-->--}}
                        {{--                                        <div class="card-spacer mt-n25">--}}
                        {{--                                            <!--begin::Row-->--}}
                        {{--                                            <div class="row m-0">--}}
                        {{--                                                <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">--}}
                        {{--															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />--}}
                        {{--																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />--}}
                        {{--																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />--}}
                        {{--																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--                                                    <a href="#" class="text-warning font-weight-bold font-size-h6">Weekly Sales</a>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">--}}
                        {{--															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<polygon points="0 0 24 0 24 24 0 24" />--}}
                        {{--																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--                                                    <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">New Users</a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Row-->--}}
                        {{--                                            <!--begin::Row-->--}}
                        {{--                                            <div class="row m-0">--}}
                        {{--                                                <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">--}}
                        {{--															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<polygon points="0 0 24 0 24 24 0 24" />--}}
                        {{--																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--                                                    <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Item Orders</a>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="col bg-light-success px-6 py-8 rounded-xl">--}}
                        {{--															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--                                                    <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Bug Reports</a>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Row-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Stats-->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Mixed Widget 1-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-6 col-xxl-4">--}}
                        {{--                                <!--begin::List Widget 9-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header align-items-center border-0 mt-4">--}}
                        {{--                                        <h3 class="card-title align-items-start flex-column">--}}
                        {{--                                            <span class="font-weight-bolder text-dark">My Activity</span>--}}
                        {{--                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>--}}
                        {{--                                        </h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline">--}}
                        {{--                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-4">--}}
                        {{--                                        <!--begin::Timeline-->--}}
                        {{--                                        <div class="timeline timeline-6 mt-3">--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-warning icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-success icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Content-->--}}
                        {{--                                                <div class="timeline-content d-flex">--}}
                        {{--                                                    <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Content-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-danger icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Desc-->--}}
                        {{--                                                <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit--}}
                        {{--                                                    <a href="#" class="text-primary">USD 700</a>. to ESL</div>--}}
                        {{--                                                <!--end::Desc-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-primary icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-danger icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Desc-->--}}
                        {{--                                                <div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed--}}
                        {{--                                                    <a href="#" class="text-primary">#XF-2356</a>.</div>--}}
                        {{--                                                <!--end::Desc-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-info icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-primary icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                            <!--begin::Item-->--}}
                        {{--                                            <div class="timeline-item align-items-start">--}}
                        {{--                                                <!--begin::Label-->--}}
                        {{--                                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>--}}
                        {{--                                                <!--end::Label-->--}}
                        {{--                                                <!--begin::Badge-->--}}
                        {{--                                                <div class="timeline-badge">--}}
                        {{--                                                    <i class="fa fa-genderless text-danger icon-xl"></i>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Badge-->--}}
                        {{--                                                <!--begin::Desc-->--}}
                        {{--                                                <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed--}}
                        {{--                                                    <a href="#" class="text-primary">#XF-2356</a>.</div>--}}
                        {{--                                                <!--end::Desc-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Item-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Timeline-->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end: Card Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end: List Widget 9-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-6 col-xxl-4">--}}
                        {{--                                <!--begin::Stats Widget 11-->--}}
                        {{--                                <div class="card card-custom card-stretch card-stretch-half gutter-b">--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body p-0">--}}
                        {{--                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">--}}
                        {{--													<span class="symbol symbol-50 symbol-light-success mr-2">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-xl svg-icon-success">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />--}}
                        {{--																		<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--													</span>--}}
                        {{--                                            <div class="d-flex flex-column text-right">--}}
                        {{--                                                <span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>--}}
                        {{--                                                <span class="text-muted font-weight-bold mt-2">Weekly Income</span>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success" style="height: 150px"></div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Stats Widget 11-->--}}
                        {{--                                <!--begin::Stats Widget 12-->--}}
                        {{--                                <div class="card card-custom card-stretch card-stretch-half gutter-b">--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body p-0">--}}
                        {{--                                        <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">--}}
                        {{--													<span class="symbol symbol-50 symbol-light-primary mr-2">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-xl svg-icon-primary">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<polygon points="0 0 24 0 24 24 0 24" />--}}
                        {{--																		<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																		<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--													</span>--}}
                        {{--                                            <div class="d-flex flex-column text-right">--}}
                        {{--                                                <span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>--}}
                        {{--                                                <span class="text-muted font-weight-bold mt-2">New Users</span>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary" style="height: 150px"></div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Stats Widget 12-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">--}}
                        {{--                                <!--begin::List Widget 1-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0 pt-5">--}}
                        {{--                                        <h3 class="card-title align-items-start flex-column">--}}
                        {{--                                            <span class="card-label font-weight-bolder text-dark">Tasks Overview</span>--}}
                        {{--                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Pending 10 tasks</span>--}}
                        {{--                                        </h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover py-5">--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-drop"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">New Group</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-list-3"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Contacts</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Groups</span>--}}
                        {{--                                                                <span class="navi-link-badge">--}}
                        {{--																			<span class="label label-light-primary label-inline font-weight-bold">new</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-bell-2"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Calls</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-gear"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Settings</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator my-3"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-magnifier-tool"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Help</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-bell-2"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Privacy</span>--}}
                        {{--                                                                <span class="navi-link-badge">--}}
                        {{--																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-8">--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-primary mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-xl svg-icon-primary">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />--}}
                        {{--																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Briefing</a>--}}
                        {{--                                                <span class="text-muted">Project Manager</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-warning mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-lg svg-icon-warning">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																		<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Concept Design</a>--}}
                        {{--                                                <span class="text-muted">Art Director</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-success mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-lg svg-icon-success">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />--}}
                        {{--																		<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Functional Logics</a>--}}
                        {{--                                                <span class="text-muted">Lead Developer</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-danger mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-lg svg-icon-danger">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />--}}
                        {{--																		<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />--}}
                        {{--																		<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />--}}
                        {{--																		<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Development</a>--}}
                        {{--                                                <span class="text-muted">DevOps</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-2">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-info mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<span class="svg-icon svg-icon-lg svg-icon-info">--}}
                        {{--																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->--}}
                        {{--																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																		<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																		<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																		<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																	</g>--}}
                        {{--																</svg>--}}
                        {{--                                                                <!--end::Svg Icon-->--}}
                        {{--															</span>--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Testing</a>--}}
                        {{--                                                <span class="text-muted">QA Managers</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::List Widget 1-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-xxl-8 order-2 order-xxl-1">--}}
                        {{--                                <!--begin::Advance Table Widget 2-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0 pt-5">--}}
                        {{--                                        <h3 class="card-title align-items-start flex-column">--}}
                        {{--                                            <span class="card-label font-weight-bolder text-dark">New Arrivals</span>--}}
                        {{--                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>--}}
                        {{--                                        </h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <ul class="nav nav-pills nav-pills-sm nav-dark-75">--}}
                        {{--                                                <li class="nav-item">--}}
                        {{--                                                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>--}}
                        {{--                                                </li>--}}
                        {{--                                                <li class="nav-item">--}}
                        {{--                                                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Week</a>--}}
                        {{--                                                </li>--}}
                        {{--                                                <li class="nav-item">--}}
                        {{--                                                    <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_3">Day</a>--}}
                        {{--                                                </li>--}}
                        {{--                                            </ul>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-2 pb-0 mt-n3">--}}
                        {{--                                        <div class="tab-content mt-5" id="myTabTables11">--}}
                        {{--                                            <!--begin::Tap pane-->--}}
                        {{--                                            <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">--}}
                        {{--                                                <!--begin::Table-->--}}
                        {{--                                                <div class="table-responsive">--}}
                        {{--                                                    <table class="table table-borderless table-vertical-center">--}}
                        {{--                                                        <thead>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <th class="p-0 w-40px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-200px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-100px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-125px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-110px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-150px"></th>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        </thead>--}}
                        {{--                                                        <tbody>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">Laravel, Metronic</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-success label-inline">Success</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-bold">AngularJS, C#</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">ReactJS, Ruby</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-1">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">ReactJs, HTML</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">Python, MySQL</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        </tbody>--}}
                        {{--                                                    </table>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Table-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Tap pane-->--}}
                        {{--                                            <!--begin::Tap pane-->--}}
                        {{--                                            <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">--}}
                        {{--                                                <!--begin::Table-->--}}
                        {{--                                                <div class="table-responsive">--}}
                        {{--                                                    <table class="table table-borderless table-vertical-center">--}}
                        {{--                                                        <thead>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <th class="p-0 w-40px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-200px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-100px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-125px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-110px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-150px"></th>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        </thead>--}}
                        {{--                                                        <tbody>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">Python, MySQL</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">Laravel, Metronic</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-success label-inline">Success</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-bold">AngularJS, C#</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-1">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">ReactJs, HTML</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">ReactJS, Ruby</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        </tbody>--}}
                        {{--                                                    </table>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Table-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Tap pane-->--}}
                        {{--                                            <!--begin::Tap pane-->--}}
                        {{--                                            <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">--}}
                        {{--                                                <!--begin::Table-->--}}
                        {{--                                                <div class="table-responsive">--}}
                        {{--                                                    <table class="table table-borderless table-vertical-center">--}}
                        {{--                                                        <thead>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <th class="p-0 w-40px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-200px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-100px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-125px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-110px"></th>--}}
                        {{--                                                            <th class="p-0 min-w-150px"></th>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        </thead>--}}
                        {{--                                                        <tbody>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-1">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">ReactJs, HTML</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">Python, MySQL</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">Laravel, Metronic</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-success label-inline">Success</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-bold">AngularJS, C#</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        <tr>--}}
                        {{--                                                            <td class="pl-0 py-4">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="pl-0">--}}
                        {{--                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <span class="font-weight-bolder">Email:</span>--}}
                        {{--                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>--}}
                        {{--                                                                <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="text-muted font-weight-500">ReactJS, Ruby</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right">--}}
                        {{--                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>--}}
                        {{--                                                            </td>--}}
                        {{--                                                            <td class="text-right pr-0">--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />--}}
                        {{--																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />--}}
                        {{--																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">--}}
                        {{--																				<span class="svg-icon svg-icon-md svg-icon-primary">--}}
                        {{--																					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->--}}
                        {{--																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
                        {{--																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--																							<rect x="0" y="0" width="24" height="24" />--}}
                        {{--																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />--}}
                        {{--																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />--}}
                        {{--																						</g>--}}
                        {{--																					</svg>--}}
                        {{--                                                                                    <!--end::Svg Icon-->--}}
                        {{--																				</span>--}}
                        {{--                                                                </a>--}}
                        {{--                                                            </td>--}}
                        {{--                                                        </tr>--}}
                        {{--                                                        </tbody>--}}
                        {{--                                                    </table>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Table-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Tap pane-->--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Advance Table Widget 2-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">--}}
                        {{--                                <!--begin::List Widget 3-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0">--}}
                        {{--                                        <h3 class="card-title font-weight-bolder text-dark">Authors</h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline">--}}
                        {{--                                                <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header pb-1">--}}
                        {{--                                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-shopping-cart-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Order</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-calendar-8"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Event</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-graph-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Report</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Post</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-writing"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">File</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-2">--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-success mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>--}}
                        {{--                                                <span class="text-muted">PHP, SQLite, Artisan CLI</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-success mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Anne Clarc</a>--}}
                        {{--                                                <span class="text-muted">PHP, SQLite, Artisan CLI</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-success mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<img src="assets/media/svg/avatars/011-boy-5.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kristaps Zumman</a>--}}
                        {{--                                                <span class="text-muted">PHP, SQLite, Artisan CLI</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end:Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-10">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-success mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<img src="assets/media/svg/avatars/015-boy-6.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>--}}
                        {{--                                                <span class="text-muted">PHP, SQLite, Artisan CLI</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mb-2">--}}
                        {{--                                            <!--begin::Symbol-->--}}
                        {{--                                            <div class="symbol symbol-40 symbol-light-success mr-5">--}}
                        {{--														<span class="symbol-label">--}}
                        {{--															<img src="assets/media/svg/avatars/016-boy-7.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--														</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Symbol-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">--}}
                        {{--                                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Carles Puyol</a>--}}
                        {{--                                                <span class="text-muted">PHP, SQLite, Artisan CLI</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::List Widget 3-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">--}}
                        {{--                                <!--begin::List Widget 4-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0">--}}
                        {{--                                        <h3 class="card-title font-weight-bolder text-dark">Todo</h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline">--}}
                        {{--                                                <a href="#" class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header pb-1">--}}
                        {{--                                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-shopping-cart-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Order</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-calendar-8"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Event</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-graph-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Report</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Post</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-writing"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">File</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-2">--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center">--}}
                        {{--                                            <!--begin::Bullet-->--}}
                        {{--                                            <span class="bullet bullet-bar bg-success align-self-stretch"></span>--}}
                        {{--                                            <!--end::Bullet-->--}}
                        {{--                                            <!--begin::Checkbox-->--}}
                        {{--                                            <label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">--}}
                        {{--                                                <input type="checkbox" name="select" value="1" />--}}
                        {{--                                                <span></span>--}}
                        {{--                                            </label>--}}
                        {{--                                            <!--end::Checkbox-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Create FireStone Logo</a>--}}
                        {{--                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end:Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mt-10">--}}
                        {{--                                            <!--begin::Bullet-->--}}
                        {{--                                            <span class="bullet bullet-bar bg-primary align-self-stretch"></span>--}}
                        {{--                                            <!--end::Bullet-->--}}
                        {{--                                            <!--begin::Checkbox-->--}}
                        {{--                                            <label class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">--}}
                        {{--                                                <input type="checkbox" value="1" />--}}
                        {{--                                                <span></span>--}}
                        {{--                                            </label>--}}
                        {{--                                            <!--end::Checkbox-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Stakeholder Meeting</a>--}}
                        {{--                                                <span class="text-muted font-weight-bold">Due in 3 Days</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mt-10">--}}
                        {{--                                            <!--begin::Bullet-->--}}
                        {{--                                            <span class="bullet bullet-bar bg-warning align-self-stretch"></span>--}}
                        {{--                                            <!--end::Bullet-->--}}
                        {{--                                            <!--begin::Checkbox-->--}}
                        {{--                                            <label class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">--}}
                        {{--                                                <input type="checkbox" value="1" />--}}
                        {{--                                                <span></span>--}}
                        {{--                                            </label>--}}
                        {{--                                            <!--end::Checkbox-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                <a href="#" class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">Scoping &amp; Estimations</a>--}}
                        {{--                                                <span class="text-muted font-weight-bold">Due in 5 Days</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin: Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mt-10">--}}
                        {{--                                            <!--begin::Bullet-->--}}
                        {{--                                            <span class="bullet bullet-bar bg-info align-self-stretch"></span>--}}
                        {{--                                            <!--end::Bullet-->--}}
                        {{--                                            <!--begin::Checkbox-->--}}
                        {{--                                            <label class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">--}}
                        {{--                                                <input type="checkbox" value="1" />--}}
                        {{--                                                <span></span>--}}
                        {{--                                            </label>--}}
                        {{--                                            <!--end::Checkbox-->--}}
                        {{--                                            <!--begin::Text-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Sprint Showcase</a>--}}
                        {{--                                                <span class="text-muted font-weight-bold">Due in 1 Day</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin::Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover py-5">--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-drop"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">New Group</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-list-3"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Contacts</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Groups</span>--}}
                        {{--                                                                <span class="navi-link-badge">--}}
                        {{--																			<span class="label label-light-primary label-inline font-weight-bold">new</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-bell-2"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Calls</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-gear"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Settings</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator my-3"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-magnifier-tool"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Help</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-bell-2"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Privacy</span>--}}
                        {{--                                                                <span class="navi-link-badge">--}}
                        {{--																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="d-flex align-items-center mt-10">--}}
                        {{--                                            <!--begin::Bullet-->--}}
                        {{--                                            <span class="bullet bullet-bar bg-danger align-self-stretch"></span>--}}
                        {{--                                            <!--end::Bullet-->--}}
                        {{--                                            <!--begin::Checkbox-->--}}
                        {{--                                            <label class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">--}}
                        {{--                                                <input type="checkbox" value="1" />--}}
                        {{--                                                <span></span>--}}
                        {{--                                            </label>--}}
                        {{--                                            <!--end::Checkbox:-->--}}
                        {{--                                            <!--begin::Title-->--}}
                        {{--                                            <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Project Retro</a>--}}
                        {{--                                                <span class="text-muted font-weight-bold">Due in 12 Days</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Text-->--}}
                        {{--                                            <!--begin: Dropdown-->--}}
                        {{--                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">--}}
                        {{--                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header font-weight-bold py-4">--}}
                        {{--                                                            <span class="font-size-lg">Choose Label:</span>--}}
                        {{--                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mb-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-success">Customer</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-danger">Partner</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-warning">Suplier</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-primary">Member</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-text">--}}
                        {{--																			<span class="label label-xl label-inline label-light-dark">Staff</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator mt-3 opacity-70"></li>--}}
                        {{--                                                        <li class="navi-footer py-4">--}}
                        {{--                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">--}}
                        {{--                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Dropdown-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end:List Widget 4-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">--}}
                        {{--                                <!--begin::List Widget 8-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0">--}}
                        {{--                                        <h3 class="card-title font-weight-bolder text-dark">Trends</h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline">--}}
                        {{--                                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-ver"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover">--}}
                        {{--                                                        <li class="navi-header pb-1">--}}
                        {{--                                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-shopping-cart-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Order</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-calendar-8"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Event</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-graph-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Report</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Post</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-writing"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">File</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-0">--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="mb-10">--}}
                        {{--                                            <!--begin::Section-->--}}
                        {{--                                            <div class="d-flex align-items-center">--}}
                        {{--                                                <!--begin::Symbol-->--}}
                        {{--                                                <div class="symbol symbol-45 symbol-light mr-5">--}}
                        {{--															<span class="symbol-label">--}}
                        {{--																<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--															</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Symbol-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>--}}
                        {{--                                                    <span class="text-muted font-weight-bold">5 day ago</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Section-->--}}
                        {{--                                            <!--begin::Desc-->--}}
                        {{--                                            <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the top Authors that fits within this section</p>--}}
                        {{--                                            <!--end::Desc-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="mb-10">--}}
                        {{--                                            <!--begin::Section-->--}}
                        {{--                                            <div class="d-flex align-items-center">--}}
                        {{--                                                <!--begin::Symbol-->--}}
                        {{--                                                <div class="symbol symbol-45 symbol-light mr-5">--}}
                        {{--															<span class="symbol-label">--}}
                        {{--																<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--															</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Symbol-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>--}}
                        {{--                                                    <span class="text-muted font-weight-bold">5 day ago</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Section-->--}}
                        {{--                                            <!--begin::Desc-->--}}
                        {{--                                            <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the Popular Authors that fits within this section</p>--}}
                        {{--                                            <!--end::Desc-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                        <!--begin::Item-->--}}
                        {{--                                        <div class="">--}}
                        {{--                                            <!--begin::Section-->--}}
                        {{--                                            <div class="d-flex align-items-center">--}}
                        {{--                                                <!--begin::Symbol-->--}}
                        {{--                                                <div class="symbol symbol-45 symbol-light mr-5">--}}
                        {{--															<span class="symbol-label">--}}
                        {{--																<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />--}}
                        {{--															</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Symbol-->--}}
                        {{--                                                <!--begin::Text-->--}}
                        {{--                                                <div class="d-flex flex-column flex-grow-1">--}}
                        {{--                                                    <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>--}}
                        {{--                                                    <span class="text-muted font-weight-bold">5 day ago</span>--}}
                        {{--                                                </div>--}}
                        {{--                                                <!--end::Text-->--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Section-->--}}
                        {{--                                            <!--begin::Desc-->--}}
                        {{--                                            <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the New Users that fits within this section</p>--}}
                        {{--                                            <!--end::Desc-->--}}
                        {{--                                        </div>--}}
                        {{--                                        <!--end::Item-->--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end: Card-->--}}
                        {{--                                <!--end::List Widget 8-->--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <!--end::Row-->--}}
                        {{--                        <!--begin::Row-->--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-lg-4">--}}
                        {{--                                <!--begin::Mixed Widget 14-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0 pt-5">--}}
                        {{--                                        <h3 class="card-title font-weight-bolder">Action Needed</h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <div class="dropdown dropdown-inline">--}}
                        {{--                                                <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                                    <i class="ki ki-bold-more-hor"></i>--}}
                        {{--                                                </a>--}}
                        {{--                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">--}}
                        {{--                                                    <!--begin::Navigation-->--}}
                        {{--                                                    <ul class="navi navi-hover py-5">--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-drop"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">New Group</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-list-3"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Contacts</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-rocket-1"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Groups</span>--}}
                        {{--                                                                <span class="navi-link-badge">--}}
                        {{--																			<span class="label label-light-primary label-inline font-weight-bold">new</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-bell-2"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Calls</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-gear"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Settings</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-separator my-3"></li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-magnifier-tool"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Help</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                        <li class="navi-item">--}}
                        {{--                                                            <a href="#" class="navi-link">--}}
                        {{--																		<span class="navi-icon">--}}
                        {{--																			<i class="flaticon2-bell-2"></i>--}}
                        {{--																		</span>--}}
                        {{--                                                                <span class="navi-text">Privacy</span>--}}
                        {{--                                                                <span class="navi-link-badge">--}}
                        {{--																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>--}}
                        {{--																		</span>--}}
                        {{--                                                            </a>--}}
                        {{--                                                        </li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                    <!--end::Navigation-->--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body d-flex flex-column">--}}
                        {{--                                        <div class="flex-grow-1">--}}
                        {{--                                            <div id="kt_mixed_widget_14_chart" style="height: 200px"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="pt-5">--}}
                        {{--                                            <p class="text-center font-weight-normal font-size-lg pb-7">Notes: Current sprint requires stakeholders--}}
                        {{--                                                <br />to approve newly amended policies</p>--}}
                        {{--                                            <a href="#" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Generate Report</a>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Mixed Widget 14-->--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-8">--}}
                        {{--                                <!--begin::Advance Table Widget 4-->--}}
                        {{--                                <div class="card card-custom card-stretch gutter-b">--}}
                        {{--                                    <!--begin::Header-->--}}
                        {{--                                    <div class="card-header border-0 py-5">--}}
                        {{--                                        <h3 class="card-title align-items-start flex-column">--}}
                        {{--                                            <span class="card-label font-weight-bolder text-dark">Agents Stats</span>--}}
                        {{--                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>--}}
                        {{--                                        </h3>--}}
                        {{--                                        <div class="card-toolbar">--}}
                        {{--                                            <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Report</a>--}}
                        {{--                                            <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Header-->--}}
                        {{--                                    <!--begin::Body-->--}}
                        {{--                                    <div class="card-body pt-0 pb-3">--}}
                        {{--                                        <div class="tab-content">--}}
                        {{--                                            <!--begin::Table-->--}}
                        {{--                                            <div class="table-responsive">--}}
                        {{--                                                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">--}}
                        {{--                                                    <thead>--}}
                        {{--                                                    <tr class="text-left text-uppercase">--}}
                        {{--                                                        <th style="min-width: 250px" class="pl-7">--}}
                        {{--                                                            <span class="text-dark-75">products</span>--}}
                        {{--                                                        </th>--}}
                        {{--                                                        <th style="min-width: 100px">earnings</th>--}}
                        {{--                                                        <th style="min-width: 100px">comission</th>--}}
                        {{--                                                        <th style="min-width: 100px">company</th>--}}
                        {{--                                                        <th style="min-width: 130px">rating</th>--}}
                        {{--                                                        <th style="min-width: 80px"></th>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    </thead>--}}
                        {{--                                                    <tbody>--}}
                        {{--                                                    <tr>--}}
                        {{--                                                        <td class="pl-0 py-8">--}}
                        {{--                                                            <div class="d-flex align-items-center">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-4">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>--}}
                        {{--                                                                    <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">In Proccess</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Web, UI/UX Design</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />--}}
                        {{--                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td class="pr-0 text-right">--}}
                        {{--                                                            <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>--}}
                        {{--                                                        </td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    <tr>--}}
                        {{--                                                        <td class="pl-0 py-0">--}}
                        {{--                                                            <div class="d-flex align-items-center">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-4">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>--}}
                        {{--                                                                    <span class="text-muted font-weight-bold d-block">C#, ASP.NET, MS SQL</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$23,000,000</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Pending</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,600</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Rejected</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />--}}
                        {{--                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Above Avarage</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td class="pr-0 text-right">--}}
                        {{--                                                            <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>--}}
                        {{--                                                        </td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    <tr>--}}
                        {{--                                                        <td class="pl-0 py-8">--}}
                        {{--                                                            <div class="d-flex align-items-center">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-4">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>--}}
                        {{--                                                                    <span class="text-muted font-weight-bold d-block">PHP, Laravel, VueJS</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000,000</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$6,700</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />--}}
                        {{--                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td class="pr-0 text-right">--}}
                        {{--                                                            <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>--}}
                        {{--                                                        </td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    <tr>--}}
                        {{--                                                        <td class="pl-0 py-0">--}}
                        {{--                                                            <div class="d-flex align-items-center">--}}
                        {{--                                                                <div class="symbol symbol-50 symbol-light mr-4">--}}
                        {{--																				<span class="symbol-label">--}}
                        {{--																					<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />--}}
                        {{--																				</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                                <div>--}}
                        {{--                                                                    <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>--}}
                        {{--                                                                    <span class="text-muted font-weight-bold d-block">Python, PostgreSQL, ReactJS</span>--}}
                        {{--                                                                </div>--}}
                        {{--                                                            </div>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td class="text-left pr-0">--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,600,000</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Paid</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$14,000</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Pending</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>--}}
                        {{--                                                            <span class="text-muted font-weight-bold">Insurance</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td>--}}
                        {{--                                                            <img src="assets/media/logos/stars.png" style="width: 5.5rem" alt="" />--}}
                        {{--                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>--}}
                        {{--                                                        </td>--}}
                        {{--                                                        <td class="pr-0 text-right">--}}
                        {{--                                                            <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm" style="width: 7rem">View Offer</a>--}}
                        {{--                                                        </td>--}}
                        {{--                                                    </tr>--}}
                        {{--                                                    </tbody>--}}
                        {{--                                                </table>--}}
                        {{--                                            </div>--}}
                        {{--                                            <!--end::Table-->--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!--end::Body-->--}}
                        {{--                                </div>--}}
                        {{--                                <!--end::Advance Table Widget 4-->--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <!--end::Row-->--}}
                        {{--                        <!--end::Dashboard-->--}}

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2021©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->

    <!--end::Main-->
    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">User Profile
                <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" style="background-image:url('admintemplate/assets/media/users/blank.png')"></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="profileoverview" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name }}</a>
                    <div class="text-muted mt-1">User Type : {{ Auth::user()->user_type}}</div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                                                                                                    <span class="navi-link p-0 pb-2">
                                                                                                        <span class="navi-icon mr-1">
                                                                                                            <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                                                        <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                                                                                        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                                                                                    </g>
                                                                                                                </svg>
                                                                                                                <!--end::Svg Icon-->
                                                                                                            </span>
                                                                                                        </span>
                                                                                                        <span class="navi-text text-muted text-hover-primary">{{ Auth::user()->email }}</span>
                                                                                                    </span>
                        </a>


                        <a class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="profileoverview" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                                                                                        <span class="svg-icon svg-icon-md svg-icon-success">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                                                                                                                    <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Profile</div>
                            <div class="text-muted">Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span></div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->

                <!--end:Item-->
            </div>
            <!--end::Nav-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
            <!--begin::Notifications-->
            <div>
                <!--begin:Heading-->
                <h5 class="mb-5">Recent Notifications</h5>
                <!--end:Heading-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
                                                                                                    <span class="svg-icon svg-icon-warning mr-5">
                                                                                                        <span class="svg-icon svg-icon-lg">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                                                    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
                                                                                                    <span class="svg-icon svg-icon-success mr-5">
                                                                                                        <span class="svg-icon svg-icon-lg">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
                                                                                                    <span class="svg-icon svg-icon-danger mr-5">
                                                                                                        <span class="svg-icon svg-icon-lg">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                                                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5">
                                                                                                    <span class="svg-icon svg-icon-info mr-5">
                                                                                                        <span class="svg-icon svg-icon-lg">
                                                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                                                                    <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                                                                                                    <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                                                                                                    <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                                                                                                    <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                                                                                                </g>
                                                                                                            </svg>
                                                                                                            <!--end::Svg Icon-->
                                                                                                        </span>
                                                                                                    </span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->
    <!--begin::Quick Cart-->
    <div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Shopping Cart</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
                        <span class="text-muted">The best kitchen gadget in 2020</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="{{asset('admintemplate/assets/media/stock-600x400/img-1.jpg')}}" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
                        <span class="text-muted">Smart tool for cooking</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="{{asset('admintemplate/assets/media/stock-600x400/img-2.jpg')}}" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
                        <span class="text-muted">Professional camera for edge cutting shots</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="{{asset('admintemplate/assets/media/stock-600x400/img-3.jpg')}}" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
                        <span class="text-muted">Manufactoring unique objects</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="{{asset('admintemplate/assets/media/stock-600x400/img-4.jpg')}}" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex align-items-center justify-content-between py-8">
                    <div class="d-flex flex-column mr-2">
                        <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
                        <span class="text-muted">Perfect animation tool</span>
                        <div class="d-flex align-items-center mt-2">
                            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
                            <span class="text-muted mr-1">for</span>
                            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                                <i class="ki ki-minus icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                                <i class="ki ki-plus icon-xs"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="symbol symbol-70 flex-shrink-0">
                        <img src="{{asset('admintemplate/assets/media/stock-600x400/img-8.jpg')}}" title="" alt="" />
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
                    <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-7">
                    <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
                    <span class="font-weight-bolder text-primary text-right">$5640.00</span>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-primary text-weight-bold">Place Order</button>
                </div>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Cart-->
    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                                                                                                <span class="symbol-label">
                                                                                                                    <img src="{{asset('admintemplate/assets/media/svg/misc/006-plurk.svg')}}" class="h-50 align-self-center" alt="" />
                                                                                                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                                                                                                <span class="symbol-label">
                                                                                                                    <img src="{{asset('admintemplate/assets/media/svg/misc/015-telegram.svg')}}" class="h-50 align-self-center" alt="" />
                                                                                                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                                                                                                <span class="symbol-label">
                                                                                                                    <img src="{{asset('admintemplate/assets/media/svg/misc/003-puzzle.svg')}}" class="h-50 align-self-center" alt="" />
                                                                                                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                                                                                                <span class="symbol-label">
                                                                                                                    <img src="{{asset('admintemplate/assets/media/svg/misc/005-bebo.svg')}}" class="h-50 align-self-center" alt="" />
                                                                                                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
                                                                                                                <span class="symbol-label">
                                                                                                                    <img src="{{asset('admintemplate/assets/media/svg/misc/014-kickstarter.svg')}}" class="h-50 align-self-center" alt="" />
                                                                                                                </span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
                                                                                                            <span class="svg-icon svg-icon-warning mr-5">
                                                                                                                <span class="svg-icon svg-icon-lg">
                                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                    <!--end::Svg Icon-->
                                                                                                                </span>
                                                                                                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
                                                                                                            <span class="svg-icon svg-icon-success mr-5">
                                                                                                                <span class="svg-icon svg-icon-lg">
                                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                    <!--end::Svg Icon-->
                                                                                                                </span>
                                                                                                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
                                                                                                            <span class="svg-icon svg-icon-danger mr-5">
                                                                                                                <span class="svg-icon svg-icon-lg">
                                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                                                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                    <!--end::Svg Icon-->
                                                                                                                </span>
                                                                                                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
                                                                                                            <span class="svg-icon svg-icon-info mr-5">
                                                                                                                <span class="svg-icon svg-icon-lg">
                                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                                            <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                                                                                                            <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                                                                                                            <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                                                                                                            <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                                                                                                        </g>
                                                                                                                    </svg>
                                                                                                                    <!--end::Svg Icon-->
                                                                                                                </span>
                                                                                                            </span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-psd text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                                    <div class="text-muted">40% less alerts thar last week</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-notepad text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                                    <div class="text-muted">Most posted 12 time</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-users-1 text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                                    <div class="text-muted">9 photodrapehrs, 7 designer</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-info icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-download text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                                    <div class="text-muted">Mostly PSD end AL concepts</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-success switch-sm">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="checked" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-success switch-sm">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" name="quick_panel_notifications_2" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-success switch-sm">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="checked" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-sm switch-danger">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="checked" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-sm switch-danger">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-sm switch-danger">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="checked" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-sm switch-primary">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="checked" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-sm switch-primary">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
                                                                                                                    <span class="switch switch-sm switch-primary">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="checked" name="select" />
                                                                                                                            <span></span>
                                                                                                                        </label>
                                                                                                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->
    <!--begin::Chat Panel-->
    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                                <span class="svg-icon svg-icon-lg">
                                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                                                                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                                                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                                            </g>
                                                                                                                        </svg>
                                                                                                                    <!--end::Svg Icon-->
                                                                                                                    </span>
                                </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-drop"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-list-3"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-rocket-1"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
                                                                                                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                                                                                    </span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-bell-2"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-gear"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-separator my-3"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-magnifier-tool"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                                                                                                    <span class="navi-icon">
                                                                                                                                        <i class="flaticon2-bell-2"></i>
                                                                                                                                    </span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
                                                                                                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                                                                                    </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_12.jpg')}}" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_21.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_21.jpg')}}" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_21.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_12.jpg')}}" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                                        <a href="#">https://github.com</a></div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_21.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_12.jpg')}}" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="{{asset('admintemplate/assets/media/users/300_21.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                                </div>
                                <!--end::Message Out-->
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer align-items-center">
                        <!--begin::Compose-->
                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                    <i class="flaticon2-photograph icon-lg"></i>
                                </a>
                                <a href="#" class="btn btn-clean btn-icon btn-md">
                                    <i class="flaticon2-photo-camera icon-lg"></i>
                                </a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                            </div>
                        </div>
                        <!--begin::Compose-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Chat Panel-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
                                                                                                <span class="svg-icon">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                                                                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                                                                                                                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                            </g>
                                                                                                        </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                    </span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Sticky Toolbar-->
    <ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
        <!--begin::Item-->
        <li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
                <i class="flaticon2-drop"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/metronic/demo1/builder.html" target="_blank">
                <i class="flaticon2-gear"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
                <i class="flaticon2-telegram-logo"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
                <i class="flaticon2-chat-1"></i>
            </a>
        </li>
        <!--end::Item-->
    </ul>
    <!--end::Sticky Toolbar-->
    <!--begin::Demo Panel-->
    <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
            <h4 class="font-weight-bold m-0">Select A Demo</h4>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content">
            <!--begin::Wrapper-->
            <div class="offcanvas-wrapper mb-5 scroll-pull">
                <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo1.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo1/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo1/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo2.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo2/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo2/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo3.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo3/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo3/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo4.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo4/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo4/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo5.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo5/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo5/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo6.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo6/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo6/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo7.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo7/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo7/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo8.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo8/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo8/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo9.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo9/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo9/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo10.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo10/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo10/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo11.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo11/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo11/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo12.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo12/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo12/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo13.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="../../demo13/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                        <a href="https://preview.keenthemes.com/metronic/demo13/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo14.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo15.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo16.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo17.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo18.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo19.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo20.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo21.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo22.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo23.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo24.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo25.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo26.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo27.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo28.pnga')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo29.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
                <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                <div class="overlay rounded-lg mb-8 offcanvas-demo">
                    <div class="overlay-wrapper rounded-lg">
                        <img src="{{asset('admintemplate/assets/media/demos/demo30.png')}}" alt="" class="w-100" />
                    </div>
                    <div class="overlay-layer">
                        <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->
            <!--begin::Purchase-->
            <div class="offcanvas-footer">
                <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
            </div>
            <!--end::Purchase-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Demo Panel-->

    <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{asset('admintemplate/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('admintemplate/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
    <script src="{{asset('admintemplate/assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset('admintemplate/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('admintemplate/assets/js/pages/widgets.js')}}"></script>
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('admintemplate/assets/js/pages/crud/forms/widgets/bootstrap-switch.js')}}"></script>
    <script src="{{asset('admintemplate/assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js')}}"></script>

    <script src="{{asset('admintemplate/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

    <!--end::Page Scripts-->
    <script> src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"</script>
    <script> src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"</script>
    <script> src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"</script>
    <script> src="https://code.jquery.com/jquery-3.5.1.js"</script>
@yield('js')



</body>
<!--end::Body-->
</html>


