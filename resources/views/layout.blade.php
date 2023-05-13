<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  <head>
    <title>
      Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for
      HTML, Vue, React, Angular &amp; Laravel by Keenthemes
    </title>
    <meta
      name="description"
      content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta
      name="keywords"
      content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link
      href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}"
      rel="stylesheet"
      type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link
      href="{{ asset('assets/plugins/global/plugins.bundle.css')}}"
      rel="stylesheet"
      type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body
    id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div
          id="kt_aside"
          class="aside aside-dark aside-hoverable"
          data-kt-drawer="true"
          data-kt-drawer-name="aside"
          data-kt-drawer-activate="{default: true, lg: false}"
          data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}"
          data-kt-drawer-direction="start"
          data-kt-drawer-toggle="#kt_aside_mobile_toggle">
          <!--begin::Brand-->
          <div class="aside-logo flex-column-auto" id="kt_aside_logo">
            <!--begin::Logo-->
            <a href="../../demo1/dist/index.html">
              <img
                alt="Logo"
                src="{{ asset('assets/media/logos/logo-1.svg')}}"
                class="h-15px logo" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside toggler-->
            <div
              id="kt_aside_toggle"
              class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
              data-kt-toggle="true"
              data-kt-toggle-state="active"
              data-kt-toggle-target="body"
              data-kt-toggle-name="aside-minimize">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
              <span class="svg-icon svg-icon-1 rotate-180">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path
                      d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                      fill="#000000"
                      fill-rule="nonzero"
                      transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                    <path
                      d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                      fill="#000000"
                      fill-rule="nonzero"
                      opacity="0.5"
                      transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Aside toggler-->
          </div>
          <!--end::Brand-->
          <!--begin::Aside menu-->
          <div class="aside-menu flex-column-fluid">
            <!--begin::Aside Menu-->
            <div
              class="hover-scroll-overlay-y my-5 my-lg-5"
              id="kt_aside_menu_wrapper"
              data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: true}"
              data-kt-scroll-height="auto"
              data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
              data-kt-scroll-wrappers="#kt_aside_menu"
              data-kt-scroll-offset="0">
              <!--begin::Menu-->
              <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu"
                data-kt-menu="true">
                <!-- Bắt đầu menu cấp 1 -->
                <div class="menu-item">
                  <div class="menu-content pb-2">
                    <span
                      class="menu-section text-muted text-uppercase fs-8 ls-1"
                      >Thống kê</span
                    >
                  </div>
                </div>
                <div class="menu-item">
                  <a class="menu-link" href="../../demo1/dist/index.html">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24px"
                          height="24px"
                          viewBox="0 0 24 24"
                          version="1.1">
                          <path
                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                            fill="#000000"
                            opacity="0.3" />
                          <path
                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                            fill="#000000" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Menu 1 cấp</span>
                  </a>
                </div>
                <!-- Hết menu cấp 1 -->
                <!-- Hết menu cấp 2 -->
                <div class="menu-item">
                  <div class="menu-content pt-8 pb-2">
                    <span
                      class="menu-section text-muted text-uppercase fs-8 ls-1"
                      >Menu 3 cấp</span
                    >
                  </div>
                </div>
                <!-- Bắt đầu phân chia -->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24px"
                          height="24px"
                          viewBox="0 0 24 24"
                          version="1.1">
                          <path
                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                            fill="#000000"
                            opacity="0.3" />
                          <path
                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                            fill="#000000" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Menu 3 cấp</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion">
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Menu cấp 2</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                          <a
                            class="menu-link"
                            href="../../demo1/dist/pages/profile/overview.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Menu cấp cuối</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="menu-item">
                  <div class="menu-content pt-8 pb-2">
                    <span
                      class="menu-section text-muted text-uppercase fs-8 ls-1"
                      >Menu 2 cấp</span
                    >
                  </div>
                </div>
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion">
                  <span class="menu-link">
                    <span class="menu-icon">
                      <!--begin::Svg Icon | path: icons/duotone/Communication/Group.svg-->
                      <span class="svg-icon svg-icon-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24px"
                          height="24px"
                          viewBox="0 0 24 24"
                          version="1.1">
                          <path
                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                            fill="#000000"
                            fill-rule="nonzero"
                            opacity="0.3" />
                          <path
                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                            fill="#000000"
                            fill-rule="nonzero" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                    </span>
                    <span class="menu-title">Hồ sơ giám định</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{route('ho-so-giam-dinh.create')}}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Thêm mới hồ sơ</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{route('ho-so-giam-dinh.index')}}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Quản lý hồ sơ</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Aside Menu-->
          </div>
          <!--end::Aside menu-->
          <!--begin::Footer-->
          <div
            class="aside-footer flex-column-auto pt-5 pb-7 px-5"
            id="kt_aside_footer">
            <a
              href="../../demo1/dist/documentation/getting-started.html"
              class="btn btn-custom btn-primary w-100"
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss-="click"
              title="200+ in-house components and 3rd-party plugins">
              <span class="btn-label">Phần này để hướng dẫn</span>
              <!--begin::Svg Icon | path: icons/duotone/General/Clipboard.svg-->
              <span class="svg-icon btn-icon svg-icon-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                      d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                      fill="#000000"
                      opacity="0.3" />
                    <path
                      d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                      fill="#000000" />
                    <rect
                      fill="#000000"
                      opacity="0.3"
                      x="7"
                      y="10"
                      width="5"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.3"
                      x="7"
                      y="14"
                      width="9"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </a>
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" class="header align-items-stretch">
            <!--begin::Container-->
            <div
              class="container-fluid d-flex align-items-stretch justify-content-between">
              <!--begin::Aside mobile toggle-->
              <div
                class="d-flex align-items-center d-lg-none ms-n3 me-1"
                title="Show aside menu">
                <div
                  class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                  id="kt_aside_mobile_toggle">
                  <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                  <span class="svg-icon svg-icon-2x mt-1">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="24px"
                      height="24px"
                      viewBox="0 0 24 24"
                      version="1.1">
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect
                          fill="#000000"
                          x="4"
                          y="5"
                          width="16"
                          height="3"
                          rx="1.5" />
                        <path
                          d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                          fill="#000000"
                          opacity="0.3" />
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </div>
              </div>
              <!--end::Aside mobile toggle-->
              <!--begin::Mobile logo-->
              <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                  <img
                    alt="Logo"
                    src="assets/media/logos/logo-3.svg"
                    class="h-30px" />
                </a>
              </div>
              <!--end::Mobile logo-->
              <!--begin::Wrapper-->
              <div
                class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                <!--begin::Navbar-->
                <div class="d-flex align-items-center" id="kt_header_nav">
                  <!--begin::Page title-->
                  <div
                    data-kt-swapper="true"
                    data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_header_nav'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1
                      class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
                      PC09
                    </h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span
                      class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                  </div>
                  <!--end::Page title-->
                </div>
                <!--end::Navbar-->
                <!--begin::Topbar-->
                <div class="d-flex align-items-stretch flex-shrink-0">
                  <!--begin::Toolbar wrapper-->
                  <div class="d-flex align-items-stretch flex-shrink-0">
                    <!--begin::User-->
                    <div
                      class="d-flex align-items-center ms-1 ms-lg-3"
                      id="kt_header_user_menu_toggle">
                      <!--begin::Menu wrapper-->
                      <!-- avatar main -->
                      <div
                        class="cursor-pointer symbol symbol-30px symbol-md-40px"
                        data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end"
                        data-kt-menu-flip="bottom">
                        <img
                          src="{{asset('assets/media/avatars/150-1.jpg')}}"
                          alt="metronic" />
                      </div>
                      <!-- end avatar main -->
                      <!--begin::Menu-->
                      <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                          <div
                            class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                              <img
                                alt="Logo"
                                src="{{asset('assets/media/avatars/150-1.jpg')}}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                              <div
                                class="fw-bolder d-flex align-items-center fs-5">
                                Max Smith
                                <span
                                  class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"
                                  >Pro</span
                                >
                              </div>
                              <a
                                href="#"
                                class="fw-bold text-muted text-hover-primary fs-7"
                                >max@kt.com</a
                              >
                            </div>
                            <!--end::Username-->
                          </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                          <a
                            href="../../demo1/dist/account/overview.html"
                            class="menu-link px-5"
                            >Thông tin cá nhân</a
                          >
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                          <a
                            href="../../demo1/dist/pages/projects/list.html"
                            class="menu-link px-5">
                            <span class="menu-text">My Projects</span>
                            <span class="menu-badge">
                              <span
                                class="badge badge-light-danger badge-circle fw-bolder fs-7"
                                >3</span
                              >
                            </span>
                          </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div
                          class="menu-item px-5"
                          data-kt-menu-trigger="hover"
                          data-kt-menu-placement="left-start"
                          data-kt-menu-flip="bottom, top">
                          <a href="#" class="menu-link px-5">
                            <span class="menu-title">My Subscription</span>
                            <span class="menu-arrow"></span>
                          </a>
                          <!--begin::Menu sub-->
                          <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/referrals.html"
                                class="menu-link px-5"
                                >Referrals</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/billing.html"
                                class="menu-link px-5"
                                >Billing</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/statements.html"
                                class="menu-link px-5"
                                >Payments</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/statements.html"
                                class="menu-link d-flex flex-stack px-5"
                                >Statements
                                <i
                                  class="fas fa-exclamation-circle ms-2 fs-7"
                                  data-bs-toggle="tooltip"
                                  title="View your statements"></i
                              ></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <div class="menu-content px-3">
                                <label
                                  class="form-check form-switch form-check-custom form-check-solid">
                                  <input
                                    class="form-check-input w-30px h-20px"
                                    type="checkbox"
                                    value="1"
                                    checked="checked"
                                    name="notifications" />
                                  <span class="form-check-label text-muted fs-7"
                                    >Notifications</span
                                  >
                                </label>
                              </div>
                            </div>
                            <!--end::Menu item-->
                          </div>
                          <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                          <a
                            href="../../demo1/dist/account/statements.html"
                            class="menu-link px-5"
                            >My Statements</a
                          >
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div
                          class="menu-item px-5"
                          data-kt-menu-trigger="hover"
                          data-kt-menu-placement="left-start"
                          data-kt-menu-flip="bottom, top">
                          <a href="#" class="menu-link px-5">
                            <span class="menu-title position-relative"
                              >Language
                              <span
                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0"
                                >English
                                <img
                                  class="w-15px h-15px rounded-1 ms-2"
                                  src="assets/media/flags/united-states.svg"
                                  alt="metronic" /></span
                            ></span>
                          </a>
                          <!--begin::Menu sub-->
                          <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/settings.html"
                                class="menu-link d-flex px-5 active">
                                <span class="symbol symbol-20px me-4">
                                  <img
                                    class="rounded-1"
                                    src="assets/media/flags/united-states.svg"
                                    alt="metronic" /> </span
                                >English</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                  <img
                                    class="rounded-1"
                                    src="assets/media/flags/spain.svg"
                                    alt="metronic" /> </span
                                >Spanish</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                  <img
                                    class="rounded-1"
                                    src="assets/media/flags/germany.svg"
                                    alt="metronic" /> </span
                                >German</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                  <img
                                    class="rounded-1"
                                    src="assets/media/flags/japan.svg"
                                    alt="metronic" /> </span
                                >Japanese</a
                              >
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a
                                href="../../demo1/dist/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                  <img
                                    class="rounded-1"
                                    src="assets/media/flags/france.svg"
                                    alt="metronic" /> </span
                                >French</a
                              >
                            </div>
                            <!--end::Menu item-->
                          </div>
                          <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                          <a
                            href="../../demo1/dist/account/settings.html"
                            class="menu-link px-5"
                            >Account Settings</a
                          >
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                          <a
                            href="../../demo1/dist/authentication/flows/basic/sign-in.html"
                            class="menu-link px-5"
                            >Sign Out</a
                          >
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                          <div class="menu-content px-5">
                            <label
                              class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                              for="kt_user_menu_dark_mode_toggle">
                              <input
                                class="form-check-input w-30px h-20px"
                                type="checkbox"
                                value="1"
                                name="mode"
                                id="kt_user_menu_dark_mode_toggle"
                                data-kt-url="../../demo1/dist/index.html" />
                              <span class="pulse-ring ms-n1"></span>
                              <span class="form-check-label text-gray-600 fs-7"
                                >Dark Mode</span
                              >
                            </label>
                          </div>
                        </div>
                        <!--end::Menu item-->
                      </div>
                      <!--end::Menu-->
                      <!--end::Menu wrapper-->
                    </div>
                    <!--end::User -->
                    <!--begin::Heaeder menu toggle-->
                    <!--end::Heaeder menu toggle-->
                  </div>
                  <!--end::Toolbar wrapper-->
                </div>
                <!--end::Topbar-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->

         @yield('taomoihoso')

          <!--begin::Footer-->
          <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div
              class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
              <!--begin::Copyright-->
              <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-bold me-1">2021©</span>
                <a
                  href="https://keenthemes.com"
                  target="_blank"
                  class="text-gray-800 text-hover-primary"
                  >Keenthemes</a
                >
              </div>
              <!--end::Copyright-->
              <!--begin::Menu-->
              <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                  <a
                    href="https://keenthemes.com"
                    target="_blank"
                    class="menu-link px-2"
                    >About</a
                  >
                </li>
                <li class="menu-item">
                  <a
                    href="https://keenthemes.com/support"
                    target="_blank"
                    class="menu-link px-2"
                    >Support</a
                  >
                </li>
                <li class="menu-item">
                  <a
                    href="https://1.envato.market/EA4JP"
                    target="_blank"
                    class="menu-link px-2"
                    >Purchase</a
                  >
                </li>
              </ul>
              <!--end::Menu-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div
      id="kt_activities"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="activities"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_activities_toggle"
      data-kt-drawer-close="#kt_activities_close">
      <div class="card shadow-none rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
          <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
          <div class="card-toolbar">
            <button
              type="button"
              class="btn btn-sm btn-icon btn-active-light-primary me-n5"
              id="kt_activities_close">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                    fill="#000000">
                    <rect
                      fill="#000000"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.5"
                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </button>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
          <!--begin::Content-->
          <div
            id="kt_activities_scroll"
            class="position-relative scroll-y me-n5 pe-5"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_activities_body"
            data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
            data-kt-scroll-offset="5px">
            <!--begin::Timeline items-->
            <div class="timeline">
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div
                  class="timeline-icon symbol symbol-circle symbol-40px me-4">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Chat2.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <polygon
                          fill="#000000"
                          opacity="0.3"
                          points="5 15 3 21.5 9.5 19.5" />
                        <path
                          d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z"
                          fill="#000000" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      There are 2 new tasks for you in “AirPlus Mobile APp”
                      project:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Added at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson">
                        <img src="{{asset('assets/media/avatars/150-11.jpg')}}" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                      <!--begin::Title-->
                      <a
                        href="#"
                        class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px"
                        >Meeting with customer</a
                      >
                      <!--end::Title-->
                      <!--begin::Label-->
                      <div class="min-w-175px pe-2">
                        <span class="badge badge-light text-muted"
                          >Application Design</span
                        >
                      </div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img src="{{asset('assets/media/avatars/150-3.jpg')}}" alt="img" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img
                            src="{{asset('assets/media/avatars/150-11.jpg')}}"
                            alt="img" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">
                            A
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                      <!--begin::Progress-->
                      <div class="min-w-125px pe-2">
                        <span class="badge badge-light-primary"
                          >In Progress</span
                        >
                      </div>
                      <!--end::Progress-->
                      <!--begin::Action-->
                      <a
                        href="#"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                    <!--begin::Record-->
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                      <!--begin::Title-->
                      <a
                        href="#"
                        class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px"
                        >Project Delivery Preparation</a
                      >
                      <!--end::Title-->
                      <!--begin::Label-->
                      <div class="min-w-175px">
                        <span class="badge badge-light text-muted"
                          >CRM System Development</span
                        >
                      </div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div
                        class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <img src="assets/media/avatars/150-5.jpg" alt="img" />
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="symbol symbol-circle symbol-25px">
                          <div
                            class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">
                            B
                          </div>
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                      <!--begin::Progress-->
                      <div class="min-w-125px">
                        <span class="badge badge-light-success">Completed</span>
                      </div>
                      <!--end::Progress-->
                      <!--begin::Action-->
                      <a
                        href="#"
                        class="btn btn-sm btn-light btn-active-light-primary"
                        >View</a
                      >
                      <!--end::Action-->
                    </div>
                    <!--end::Record-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Thumbtack.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <path
                          d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z"
                          fill="#000000" />
                        <polygon
                          fill="#000000"
                          opacity="0.3"
                          transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)"
                          points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n2">
                  <!--begin::Timeline heading-->
                  <div class="overflow-auto pe-3">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      Invitation for crafting engaging designs that speak human
                      workshop
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Alan Nilson">
                        <img src="assets/media/avatars/150-2.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/General/Attachment2.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <g
                          stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path
                            d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z"
                            fill="#000000"
                            opacity="0.3"
                            transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                          <path
                            d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z"
                            fill="#000000"
                            transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                          <path
                            d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z"
                            fill="#000000"
                            opacity="0.3"
                            transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                          <path
                            d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z"
                            fill="#000000"
                            opacity="0.3"
                            transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="mb-5 pe-3">
                    <!--begin::Title-->
                    <a
                      href="#"
                      class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2"
                      >3 New Incoming Project Files:</a
                    >
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Sent at 10:30 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Jan Hummer">
                        <img src="assets/media/avatars/150-6.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt=""
                          class="w-30px me-3"
                          src="assets/media/svg/files/pdf.svg" />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-bold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bolder"
                            >Finance KPI App Guidelines</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-400">1.9mb</div>
                          <!--end::Number-->
                        </div>
                        <!--begin::Info-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                        <!--begin::Icon-->
                        <img
                          alt=""
                          class="w-30px me-3"
                          src="assets/media/svg/files/doc.svg" />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-bold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bolder"
                            >Client UAT Testing Results</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-400">18kb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex flex-aligns-center">
                        <!--begin::Icon-->
                        <img
                          alt=""
                          class="w-30px me-3"
                          src="assets/media/svg/files/css.svg" />
                        <!--end::Icon-->
                        <!--begin::Info-->
                        <div class="ms-1 fw-bold">
                          <!--begin::Desc-->
                          <a href="#" class="fs-6 text-hover-primary fw-bolder"
                            >Finance Reports</a
                          >
                          <!--end::Desc-->
                          <!--begin::Number-->
                          <div class="text-gray-400">20mb</div>
                          <!--end::Number-->
                        </div>
                        <!--end::Icon-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Home/Library.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <g
                          stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path
                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                            fill="#000000" />
                          <rect
                            fill="#000000"
                            opacity="0.3"
                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                            x="16.3255682"
                            y="2.94551858"
                            width="3"
                            height="18"
                            rx="1" />
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      Task
                      <a href="#" class="text-primary fw-bolder me-1">#45890</a
                      >merged with
                      <a href="#" class="text-primary fw-bolder me-1">#45890</a
                      >in “Ads Pro Admin Dashboard project:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Initiated at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Nina Nilson">
                        <img src="assets/media/avatars/150-11.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <path
                          d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                        <path
                          d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          opacity="0.3" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      3 new application design concepts added:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Created at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Marcus Dotson">
                        <img src="assets/media/avatars/150-3.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <div
                      class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-200px"
                            src="assets/media/demos/demo1.png" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded">
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="overlay me-10">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-200px"
                            src="assets/media/demos/demo2.png" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded">
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="overlay">
                        <!--begin::Image-->
                        <div class="overlay-wrapper">
                          <img
                            alt="img"
                            class="rounded w-200px"
                            src="assets/media/demos/demo3.png" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Link-->
                        <div
                          class="overlay-layer bg-dark bg-opacity-10 rounded">
                          <a href="#" class="btn btn-sm btn-primary btn-shadow"
                            >Explore</a
                          >
                        </div>
                        <!--end::Link-->
                      </div>
                      <!--end::Item-->
                    </div>
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Urgent-mail.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <path
                          d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                          fill="#000000"
                          opacity="0.3" />
                        <path
                          d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                          fill="#000000" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      New case
                      <a href="#" class="text-primary fw-bolder me-1">#67890</a
                      >is assigned to you in Multi-platform Database Design
                      project
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="overflow-auto pb-5">
                      <!--begin::Wrapper-->
                      <div class="d-flex align-items-center mt-1 fs-6">
                        <!--begin::Info-->
                        <div class="text-muted me-2 fs-7">
                          Added at 4:23 PM by
                        </div>
                        <!--end::Info-->
                        <!--begin::User-->
                        <a href="#" class="text-primary fw-bolder me-1"
                          >Alice Tan</a
                        >
                        <!--end::User-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24px"
                        height="24px"
                        viewBox="0 0 24 24"
                        version="1.1">
                        <path
                          d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                        <path
                          d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          opacity="0.3" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mb-10 mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      You have received a new order:
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 5:05 AM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <div
                        class="symbol symbol-circle symbol-25px"
                        data-bs-toggle="tooltip"
                        data-bs-boundary="window"
                        data-bs-placement="top"
                        title="Robert Rich">
                        <img src="assets/media/avatars/150-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                  <!--begin::Timeline details-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Notice-->
                    <div
                      class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                      <!--begin::Icon-->
                      <!--begin::Svg Icon | path: icons/duotone/Code/Git4.svg-->
                      <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24px"
                          height="24px"
                          viewBox="0 0 24 24"
                          version="1.1">
                          <path
                            d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z"
                            fill="#000000"
                            fill-rule="nonzero" />
                          <path
                            d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z"
                            fill="#000000"
                            fill-rule="nonzero"
                            opacity="0.3" />
                          <path
                            d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z"
                            fill="#000000"
                            fill-rule="nonzero" />
                          <path
                            d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z"
                            fill="#000000"
                            fill-rule="nonzero" />
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      <!--end::Icon-->
                      <!--begin::Wrapper-->
                      <div
                        class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-bold">
                          <h4 class="text-gray-900 fw-bolder">
                            Database Backup Process Completed!
                          </h4>
                          <div class="fs-6 text-gray-700 pe-7">
                            Login into Metronic Admin Dashboard to make sure the
                            data integrity is OK
                          </div>
                        </div>
                        <!--end::Content-->
                        <!--begin::Action-->
                        <a
                          href="#"
                          class="btn btn-primary px-6 align-self-center text-nowrap"
                          >Proceed</a
                        >
                        <!--end::Action-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                  </div>
                  <!--end::Timeline details-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
              <!--begin::Timeline item-->
              <div class="timeline-item">
                <!--begin::Timeline line-->
                <div class="timeline-line w-40px"></div>
                <!--end::Timeline line-->
                <!--begin::Timeline icon-->
                <div class="timeline-icon symbol symbol-circle symbol-40px">
                  <div class="symbol-label bg-light">
                    <!--begin::Svg Icon | path: icons/duotone/Shopping/Cart4.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none">
                        <path
                          opacity="0.25"
                          d="M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z"
                          fill="#7E8299" />
                        <path
                          d="M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z"
                          fill="#7E8299" />
                        <path
                          d="M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z"
                          fill="#7E8299" />
                        <path
                          d="M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z"
                          fill="#7E8299" />
                        <g opacity="0.25">
                          <path
                            d="M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z"
                            fill="#7E8299" />
                          <path
                            d="M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z"
                            fill="#7E8299" />
                        </g>
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                </div>
                <!--end::Timeline icon-->
                <!--begin::Timeline content-->
                <div class="timeline-content mt-n1">
                  <!--begin::Timeline heading-->
                  <div class="pe-3 mb-5">
                    <!--begin::Title-->
                    <div class="fs-5 fw-bold mb-2">
                      New order
                      <a href="#" class="text-primary fw-bolder me-1">#67890</a
                      >is placed for Workshow Planning &amp; Budget Estimation
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Placed at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bolder me-1"
                        >Jimmy Bold</a
                      >
                      <!--end::User-->
                    </div>
                    <!--end::Description-->
                  </div>
                  <!--end::Timeline heading-->
                </div>
                <!--end::Timeline content-->
              </div>
              <!--end::Timeline item-->
            </div>
            <!--end::Timeline items-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
          <a
            href="../../demo1/dist/pages/profile/activity.html"
            class="btn btn-bg-body text-primary"
            >View All Activities
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
            <span class="svg-icon svg-icon-3 svg-icon-primary">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="24px"
                height="24px"
                viewBox="0 0 24 24"
                version="1.1">
                <g
                  stroke="none"
                  stroke-width="1"
                  fill="none"
                  fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <rect
                    fill="#000000"
                    opacity="0.5"
                    transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                    x="7.5"
                    y="7.5"
                    width="2"
                    height="9"
                    rx="1" />
                  <path
                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                    fill="#000000"
                    fill-rule="nonzero"
                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                </g>
              </svg>
            </span>
            <!--end::Svg Icon--></a
          >
        </div>
        <!--end::Footer-->
      </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
    <div
      id="kt_drawer_chat"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="chat"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'300px', 'md': '500px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_drawer_chat_toggle"
      data-kt-drawer-close="#kt_drawer_chat_close">
      <!--begin::Messenger-->
      <div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
          <!--begin::Title-->
          <div class="card-title">
            <!--begin::User-->
            <div class="d-flex justify-content-center flex-column me-3">
              <a
                href="#"
                class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1"
                >Brian Cox</a
              >
              <!--begin::Info-->
              <div class="mb-0 lh-1">
                <span
                  class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                <span class="fs-7 fw-bold text-muted">Active</span>
              </div>
              <!--end::Info-->
            </div>
            <!--end::User-->
          </div>
          <!--end::Title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Menu-->
            <div class="me-2">
              <button
                class="btn btn-sm btn-icon btn-active-light-primary"
                data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end"
                data-kt-menu-flip="top-end">
                <i class="bi bi-three-dots fs-3"></i>
              </button>
              <!--begin::Menu 3-->
              <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                data-kt-menu="true">
                <!--begin::Heading-->
                <div class="menu-item px-3">
                  <div
                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                    Contacts
                  </div>
                </div>
                <!--end::Heading-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a
                    href="#"
                    class="menu-link px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_users_search"
                    >Add Contact</a
                  >
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <a
                    href="#"
                    class="menu-link flex-stack px-3"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_invite_friends"
                    >Invite Contacts
                    <i
                      class="fas fa-exclamation-circle ms-2 fs-7"
                      data-bs-toggle="tooltip"
                      title="Specify a contact email to send an invitation"></i
                  ></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div
                  class="menu-item px-3"
                  data-kt-menu-trigger="hover"
                  data-kt-menu-placement="right-start"
                  data-kt-menu-flip="left, center, top">
                  <a href="#" class="menu-link px-3">
                    <span class="menu-title">Groups</span>
                    <span class="menu-arrow"></span>
                  </a>
                  <!--begin::Menu sub-->
                  <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                        >Create Group</a
                      >
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                        >Invite Members</a
                      >
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <a
                        href="#"
                        class="menu-link px-3"
                        data-bs-toggle="tooltip"
                        title="Coming soon"
                        >Settings</a
                      >
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3 my-1">
                  <a
                    href="#"
                    class="menu-link px-3"
                    data-bs-toggle="tooltip"
                    title="Coming soon"
                    >Settings</a
                  >
                </div>
                <!--end::Menu item-->
              </div>
              <!--end::Menu 3-->
            </div>
            <!--end::Menu-->
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-light-primary"
              id="kt_drawer_chat_close">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                    fill="#000000">
                    <rect
                      fill="#000000"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.5"
                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
          <!--begin::Messages-->
          <div
            class="scroll-y me-n5 pe-5"
            data-kt-element="messages"
            data-kt-scroll="true"
            data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
            data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
            data-kt-scroll-offset="0px">
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                  data-kt-element="message-text">
                  How likely are you to recommend our company to your friends
                  and family ?
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">5 mins</span>
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                  data-kt-element="message-text">
                  Hey there, we’re just writing to let you know that you’ve been
                  subscribed to a repository on GitHub.
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                  data-kt-element="message-text">
                  Ok, Understood!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                  data-kt-element="message-text">
                  You’ll receive notifications for all issues, pull requests!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                  data-kt-element="message-text">
                  You can unwatch this repository immediately by clicking here:
                  <a href="https://keenthemes.com">Keenthemes.com</a>
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(out)-->
            <div class="d-flex justify-content-end mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                  data-kt-element="message-text">
                  Most purchased Business courses during this sale!
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            <!--begin::Message(in)-->
            <div class="d-flex justify-content-start mb-10">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                  data-kt-element="message-text">
                  Company BBQ to celebrate the last quater achievements and
                  goals. Food and drinks provided
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            <!--begin::Message(template for out)-->
            <div
              class="d-flex justify-content-end mb-10 d-none"
              data-kt-element="template-out">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-end">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Details-->
                  <div class="me-3">
                    <span class="text-muted fs-7 mb-1">Just now</span>
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1"
                      >You</a
                    >
                  </div>
                  <!--end::Details-->
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                  </div>
                  <!--end::Avatar-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                  data-kt-element="message-text"></div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(template for out)-->
            <!--begin::Message(template for in)-->
            <div
              class="d-flex justify-content-start mb-10 d-none"
              data-kt-element="template-in">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column align-items-start">
                <!--begin::User-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-3">
                    <a
                      href="#"
                      class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1"
                      >Brian Cox</a
                    >
                    <span class="text-muted fs-7 mb-1">Just now</span>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::User-->
                <!--begin::Text-->
                <div
                  class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                  data-kt-element="message-text">
                  Right before vacation season we have the next Big Deal for
                  you.
                </div>
                <!--end::Text-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Message(template for in)-->
          </div>
          <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
          <!--begin::Input-->
          <textarea
            class="form-control form-control-flush mb-3"
            rows="1"
            data-kt-element="input"
            placeholder="Type a message"></textarea>
          <!--end::Input-->
          <!--begin:Toolbar-->
          <div class="d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2">
              <button
                class="btn btn-sm btn-icon btn-active-light-primary me-1"
                type="button"
                data-bs-toggle="tooltip"
                title="Coming soon">
                <i class="bi bi-paperclip fs-3"></i>
              </button>
              <button
                class="btn btn-sm btn-icon btn-active-light-primary me-1"
                type="button"
                data-bs-toggle="tooltip"
                title="Coming soon">
                <i class="bi bi-upload fs-3"></i>
              </button>
            </div>
            <!--end::Actions-->
            <!--begin::Send-->
            <button
              class="btn btn-primary"
              type="button"
              data-kt-element="send">
              Send
            </button>
            <!--end::Send-->
          </div>
          <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
      </div>
      <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--begin::Exolore drawer toggle-->
    <button
      id="kt_explore_toggle"
      class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0"
      title="Explore Metronic"
      data-bs-toggle="tooltip"
      data-bs-placement="right"
      data-bs-trigger="hover">
      <span id="kt_explore_toggle_label">Explore</span>
    </button>
    <!--end::Exolore drawer toggle-->
    <!--begin::Exolore drawer-->
    <div
      id="kt_explore"
      class="bg-body"
      data-kt-drawer="true"
      data-kt-drawer-name="explore"
      data-kt-drawer-activate="true"
      data-kt-drawer-overlay="true"
      data-kt-drawer-width="{default:'350px', 'lg': '475px'}"
      data-kt-drawer-direction="end"
      data-kt-drawer-toggle="#kt_explore_toggle"
      data-kt-drawer-close="#kt_explore_close">
      <!--begin::Card-->
      <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_explore_header">
          <h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>
          <div class="card-toolbar">
            <button
              type="button"
              class="btn btn-sm btn-icon btn-active-light-primary me-n5"
              id="kt_explore_close">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                    fill="#000000">
                    <rect
                      fill="#000000"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.5"
                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </button>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_explore_body">
          <!--begin::Content-->
          <div
            id="kt_explore_scroll"
            class="scroll-y me-n5 pe-5"
            data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-wrappers="#kt_explore_body"
            data-kt-scroll-dependencies="#kt_explore_header"
            data-kt-scroll-offset="5px">
            <!--begin::Wrapper-->
            <div class="mb-0">
              <!--begin::Header-->
              <div class="mb-7">
                <div class="d-flex flex-stack">
                  <h3 class="mb-0">Metronic Licenses</h3>
                  <a
                    href="https://themeforest.net/licenses/standard"
                    class="fw-bold"
                    target="_blank"
                    >License FAQs</a
                  >
                </div>
              </div>
              <!--end::Header-->
              <!--begin::License-->
              <div
                class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                <div class="d-flex flex-stack">
                  <div class="d-flex flex-column">
                    <div class="d-flex align-items-center mb-1">
                      <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">
                        Regular License
                      </div>
                      <i
                        class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                        data-bs-toggle="popover"
                        data-bs-custom-class="popover-dark"
                        data-bs-trigger="hover"
                        data-bs-placement="top"
                        data-bs-content="Use, by you or one client in a single end product which end users are not charged for."></i>
                    </div>
                    <div class="fs-7 text-muted">
                      For single end product used by you or one client
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <span class="text-muted fs-7 fw-bold me-n1">$</span>
                    <span class="text-dark fs-1 fw-bolder">39</span>
                  </div>
                </div>
              </div>
              <!--end::License-->
              <!--begin::License-->
              <div
                class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                <div class="d-flex flex-stack">
                  <div class="d-flex flex-column">
                    <div class="d-flex align-items-center mb-1">
                      <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">
                        Extended License
                      </div>
                      <i
                        class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                        data-bs-toggle="popover"
                        data-bs-custom-class="popover-dark"
                        data-bs-trigger="hover"
                        data-bs-placement="top"
                        data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                    </div>
                    <div class="fs-7 text-muted">
                      For single end product with paying users.
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <span class="text-muted fs-7 fw-bold me-n1">$</span>
                    <span class="text-dark fs-1 fw-bolder">939</span>
                  </div>
                </div>
              </div>
              <!--end::License-->
              <!--begin::License-->
              <div
                class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                <div class="d-flex flex-stack">
                  <div class="d-flex flex-column">
                    <div class="d-flex align-items-center mb-1">
                      <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">
                        Custom License
                      </div>
                    </div>
                    <div class="fs-7 text-muted">
                      Reach us for custom license offers.
                    </div>
                  </div>
                  <div class="text-nowrap">
                    <a
                      href="https://keenthemes.com/contact/"
                      class="btn btn-sm btn-success"
                      target="_blank"
                      >Contact Us</a
                    >
                  </div>
                </div>
              </div>
              <!--end::License-->
              <!--begin::Purchase-->
              <a
                href="https://1.envato.market/EA4JP"
                class="btn btn-primary mb-15 w-100"
                >Buy Now</a
              >
              <!--end::Purchase-->
              <!--begin::Demos-->
              <div class="mb-0">
                <h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
                <!--begin::Row-->
                <div class="row g-5">
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo1.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo1"
                          class="btn btn-sm btn-success shadow"
                          >Demo 1</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo2.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo2"
                          class="btn btn-sm btn-success shadow"
                          >Demo 2</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo3.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo3"
                          class="btn btn-sm btn-success shadow"
                          >Demo 3</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo4.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo4"
                          class="btn btn-sm btn-success shadow"
                          >Demo 4</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo5.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo5"
                          class="btn btn-sm btn-success shadow"
                          >Demo 5</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo6.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo6"
                          class="btn btn-sm btn-success shadow"
                          >Demo 6</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo7.png"
                          alt="demo"
                          class="w-100" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <a
                          href="https://preview.keenthemes.com/metronic8/demo7"
                          class="btn btn-sm btn-success shadow"
                          >Demo 7</a
                        >
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo8.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo9.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo10.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo11.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo12.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo13.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo14.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo15.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-6">
                    <!--begin::Demo-->
                    <div
                      class="overlay overflow-hidden position-relative rounded">
                      <div class="overlay-wrapper">
                        <img
                          src="assets/media/demos/demo16.png"
                          alt="demo"
                          class="w-100 opacity-75" />
                      </div>
                      <div class="overlay-layer bg-dark bg-opacity-10">
                        <div
                          class="badge badge-white px-6 py-4 fw-bold fs-base shadow">
                          Coming soon
                        </div>
                      </div>
                    </div>
                    <!--end::Demo-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Demos-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Content-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Exolore drawer-->
    <!--end::Drawers-->
    <!--begin::Modals-->
    <!--begin::Modal - Invite Friends-->
    <div
      class="modal fade"
      id="kt_modal_invite_friends"
      tabindex="-1"
      aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header pb-0 border-0 justify-content-end">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                    fill="#000000">
                    <rect
                      fill="#000000"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.5"
                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--begin::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
            <!--begin::Heading-->
            <div class="text-center mb-13">
              <!--begin::Title-->
              <h1 class="mb-3">Invite a Friend</h1>
              <!--end::Title-->
              <!--begin::Description-->
              <div class="text-muted fw-bold fs-5">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
              </div>
              <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Google Contacts Invite-->
            <div class="btn btn-light-primary fw-bolder w-100 mb-8">
              <img
                alt="Logo"
                src="assets/media/svg/brand-logos/google-icon.svg"
                class="h-20px me-3" />Invite Gmail Contacts
            </div>
            <!--end::Google Contacts Invite-->
            <!--begin::Separator-->
            <div class="separator d-flex flex-center mb-8">
              <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3"
                >or</span
              >
            </div>
            <!--end::Separator-->
            <!--begin::Textarea-->
            <textarea
              class="form-control form-control-solid mb-8"
              rows="3"
              placeholder="Type or paste emails here"></textarea>
            <!--end::Textarea-->
            <!--begin::Users-->
            <div class="mb-10">
              <!--begin::Heading-->
              <div class="fs-6 fw-bold mb-2">Your Invitations</div>
              <!--end::Heading-->
              <!--begin::List-->
              <div class="mh-300px scroll-y me-n7 pe-7">
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Emma Smith</a
                      >
                      <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-bold"
                        >M</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Melody Macy</a
                      >
                      <div class="fw-bold text-muted">melody@altbox.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Max Smith</a
                      >
                      <div class="fw-bold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Sean Bean</a
                      >
                      <div class="fw-bold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Brian Cox</a
                      >
                      <div class="fw-bold text-muted">brian@exchange.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-warning text-warning fw-bold"
                        >M</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Mikaela Collins</a
                      >
                      <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Francis Mitcham</a
                      >
                      <div class="fw-bold text-muted">
                        f.mitcham@kpmg.com.au
                      </div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-bold"
                        >O</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Olivia Wild</a
                      >
                      <div class="fw-bold text-muted">olivia@corpmail.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-primary text-primary fw-bold"
                        >N</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Neil Owen</a
                      >
                      <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Dan Wilson</a
                      >
                      <div class="fw-bold text-muted">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-danger text-danger fw-bold"
                        >E</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Emma Bold</a
                      >
                      <div class="fw-bold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Ana Crown</a
                      >
                      <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span class="symbol-label bg-light-info text-info fw-bold"
                        >A</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Robert Doe</a
                      >
                      <div class="fw-bold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >John Miller</a
                      >
                      <div class="fw-bold text-muted">miller@mapple.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <span
                        class="symbol-label bg-light-success text-success fw-bold"
                        >L</span
                      >
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Lucy Kunic</a
                      >
                      <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2" selected="selected">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div
                  class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Ethan Wilder</a
                      >
                      <div class="fw-bold text-muted">ethan@loop.com.au</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1" selected="selected">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
                <!--begin::User-->
                <div class="d-flex flex-stack py-4">
                  <!--begin::Details-->
                  <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                      <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-5">
                      <a
                        href="#"
                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                        >Emma Smith</a
                      >
                      <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                    </div>
                    <!--end::Details-->
                  </div>
                  <!--end::Details-->
                  <!--begin::Access menu-->
                  <div class="ms-2 w-100px">
                    <select
                      class="form-select form-select-solid form-select-sm"
                      data-control="select2"
                      data-hide-search="true">
                      <option value="1">Guest</option>
                      <option value="2">Owner</option>
                      <option value="3" selected="selected">Can Edit</option>
                    </select>
                  </div>
                  <!--end::Access menu-->
                </div>
                <!--end::User-->
              </div>
              <!--end::List-->
            </div>
            <!--end::Users-->
            <!--begin::Notice-->
            <div class="d-flex flex-stack">
              <!--begin::Label-->
              <div class="me-5 fw-bold">
                <label class="fs-6">Adding Users by Team Members</label>
                <div class="fs-7 text-muted">
                  If you need more info, please check budget planning
                </div>
              </div>
              <!--end::Label-->
              <!--begin::Switch-->
              <label
                class="form-check form-switch form-check-custom form-check-solid">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  checked="checked" />
                <span class="form-check-label fw-bold text-muted">Allowed</span>
              </label>
              <!--end::Switch-->
            </div>
            <!--end::Notice-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
    <!--begin::Modal - Create App-->
    <div
      class="modal fade"
      id="kt_modal_create_app"
      tabindex="-1"
      aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
          <!--begin::Modal header-->
          <div class="modal-header">
            <!--begin::Modal title-->
            <h2>Create App</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                    fill="#000000">
                    <rect
                      fill="#000000"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.5"
                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body py-lg-10 px-lg-10">
            <!--begin::Stepper-->
            <div
              class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
              id="kt_modal_create_app_stepper">
              <!--begin::Aside-->
              <div
                class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                <!--begin::Nav-->
                <div class="stepper-nav ps-lg-10">
                  <!--begin::Step 1-->
                  <div
                    class="stepper-item current"
                    data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Details</h3>
                      <div class="stepper-desc">Name your App</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">2</span>
                    </div>
                    <!--begin::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Frameworks</h3>
                      <div class="stepper-desc">Define your app framework</div>
                    </div>
                    <!--begin::Label-->
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">3</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Database</h3>
                      <div class="stepper-desc">
                        Select the app database type
                      </div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">4</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Billing</h3>
                      <div class="stepper-desc">Provide payment details</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div class="stepper-item" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="stepper-check fas fa-check"></i>
                      <span class="stepper-number">5</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Release</h3>
                      <div class="stepper-desc">Review and Submit</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Step 5-->
                </div>
                <!--end::Nav-->
              </div>
              <!--begin::Aside-->
              <!--begin::Content-->
              <div class="flex-row-fluid py-lg-5 px-lg-15">
                <!--begin::Form-->
                <form
                  class="form"
                  novalidate="novalidate"
                  id="kt_modal_create_app_form">
                  <!--begin::Step 1-->
                  <div class="current" data-kt-stepper-element="content">
                    <div class="w-100">
                      <!--begin::Input group-->
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label
                          class="d-flex align-items-center fs-5 fw-bold mb-2">
                          <span class="required">App Name</span>
                          <i
                            class="fas fa-exclamation-circle ms-2 fs-7"
                            data-bs-toggle="tooltip"
                            title="Specify your unique app name"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input
                          type="text"
                          class="form-control form-control-lg form-control-solid"
                          name="name"
                          placeholder=""
                          value="" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="fv-row">
                        <!--begin::Label-->
                        <label
                          class="d-flex align-items-center fs-5 fw-bold mb-4">
                          <span class="required">Category</span>
                          <i
                            class="fas fa-exclamation-circle ms-2 fs-7"
                            data-bs-toggle="tooltip"
                            title="Select your app category"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin:Options-->
                        <div class="fv-row">
                          <!--begin:Option-->
                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex align-items-center me-2">
                              <!--begin:Icon-->
                              <span class="symbol symbol-50px me-6">
                                <span class="symbol-label bg-light-primary">
                                  <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                  <span
                                    class="svg-icon svg-icon-1 svg-icon-primary">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      width="24px"
                                      height="24px"
                                      viewBox="0 0 24 24"
                                      version="1.1">
                                      <g
                                        stroke="none"
                                        stroke-width="1"
                                        fill="none"
                                        fill-rule="evenodd">
                                        <rect
                                          x="0"
                                          y="0"
                                          width="24"
                                          height="24" />
                                        <path
                                          d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                          fill="#000000"
                                          fill-rule="nonzero" />
                                        <circle
                                          fill="#000000"
                                          opacity="0.3"
                                          cx="12"
                                          cy="10"
                                          r="6" />
                                      </g>
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <!--end:Icon-->
                              <!--begin:Info-->
                              <span class="d-flex flex-column">
                                <span class="fw-bolder fs-6"
                                  >Quick Online Courses</span
                                >
                                <span class="fs-7 text-muted"
                                  >Creating a clear text structure is just one
                                  SEO</span
                                >
                              </span>
                              <!--end:Info-->
                            </span>
                            <!--end:Label-->
                            <!--begin:Input-->
                            <span
                              class="form-check form-check-custom form-check-solid">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="category"
                                value="1" />
                            </span>
                            <!--end:Input-->
                          </label>
                          <!--end::Option-->
                          <!--begin:Option-->
                          <label class="d-flex flex-stack mb-5 cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex align-items-center me-2">
                              <!--begin:Icon-->
                              <span class="symbol symbol-50px me-6">
                                <span class="symbol-label bg-light-danger">
                                  <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                  <span
                                    class="svg-icon svg-icon-1 svg-icon-danger">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      width="24px"
                                      height="24px"
                                      viewBox="0 0 24 24"
                                      version="1.1">
                                      <g
                                        stroke="none"
                                        stroke-width="1"
                                        fill="none"
                                        fill-rule="evenodd">
                                        <rect
                                          x="5"
                                          y="5"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="#000000" />
                                        <rect
                                          x="14"
                                          y="5"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="#000000"
                                          opacity="0.3" />
                                        <rect
                                          x="5"
                                          y="14"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="#000000"
                                          opacity="0.3" />
                                        <rect
                                          x="14"
                                          y="14"
                                          width="5"
                                          height="5"
                                          rx="1"
                                          fill="#000000"
                                          opacity="0.3" />
                                      </g>
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <!--end:Icon-->
                              <!--begin:Info-->
                              <span class="d-flex flex-column">
                                <span class="fw-bolder fs-6"
                                  >Face to Face Discussions</span
                                >
                                <span class="fs-7 text-muted"
                                  >Creating a clear text structure is just one
                                  aspect</span
                                >
                              </span>
                              <!--end:Info-->
                            </span>
                            <!--end:Label-->
                            <!--begin:Input-->
                            <span
                              class="form-check form-check-custom form-check-solid">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="category"
                                value="2" />
                            </span>
                            <!--end:Input-->
                          </label>
                          <!--end::Option-->
                          <!--begin:Option-->
                          <label class="d-flex flex-stack cursor-pointer">
                            <!--begin:Label-->
                            <span class="d-flex align-items-center me-2">
                              <!--begin:Icon-->
                              <span class="symbol symbol-50px me-6">
                                <span class="symbol-label bg-light-success">
                                  <!--begin::Svg Icon | path: icons/duotone/Devices/Watch1.svg-->
                                  <span
                                    class="svg-icon svg-icon-1 svg-icon-success">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24px"
                                      height="24px"
                                      viewBox="0 0 24 24"
                                      version="1.1">
                                      <path
                                        d="M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z M9,6 L15,6 C16.6568542,6 18,7.34314575 18,9 L18,15 C18,16.6568542 16.6568542,18 15,18 L9,18 C7.34314575,18 6,16.6568542 6,15 L6,9 C6,7.34314575 7.34314575,6 9,6 Z"
                                        fill="#000000"
                                        fill-rule="nonzero" />
                                      <path
                                        d="M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z"
                                        fill="#000000"
                                        opacity="0.3" />
                                      <path
                                        d="M9,18 L15,18 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,18 Z"
                                        fill="#000000"
                                        opacity="0.3" />
                                      <path
                                        d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,6 L9,6 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z"
                                        fill="#000000"
                                        opacity="0.3" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </span>
                              <!--end:Icon-->
                              <!--begin:Info-->
                              <span class="d-flex flex-column">
                                <span class="fw-bolder fs-6"
                                  >Full Intro Training</span
                                >
                                <span class="fs-7 text-muted"
                                  >Creating a clear text structure
                                  copywriting</span
                                >
                              </span>
                              <!--end:Info-->
                            </span>
                            <!--end:Label-->
                            <!--begin:Input-->
                            <span
                              class="form-check form-check-custom form-check-solid">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="category"
                                value="3" />
                            </span>
                            <!--end:Input-->
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end:Options-->
                      </div>
                      <!--end::Input group-->
                    </div>
                  </div>
                  <!--end::Step 1-->
                  <!--begin::Step 2-->
                  <div data-kt-stepper-element="content">
                    <div class="w-100">
                      <!--begin::Input group-->
                      <div class="fv-row">
                        <!--begin::Label-->
                        <label
                          class="d-flex align-items-center fs-5 fw-bold mb-4">
                          <span class="required">Select Framework</span>
                          <i
                            class="fas fa-exclamation-circle ms-2 fs-7"
                            data-bs-toggle="tooltip"
                            title="Specify your apps framework"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer mb-5">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-warning">
                                <i class="fab fa-html5 text-warning fs-2x"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">HTML5</span>
                              <span class="fs-7 text-muted"
                                >Base Web Projec</span
                              >
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              checked="checked"
                              name="framework"
                              value="1" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer mb-5">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-success">
                                <i class="fab fa-react text-success fs-2x"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">ReactJS</span>
                              <span class="fs-7 text-muted"
                                >Robust and flexible app framework</span
                              >
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="framework"
                              value="2" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer mb-5">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-danger">
                                <i class="fab fa-angular text-danger fs-2x"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">Angular</span>
                              <span class="fs-7 text-muted"
                                >Powerful data mangement</span
                              >
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="framework"
                              value="3" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-primary">
                                <i class="fab fa-vuejs text-primary fs-2x"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">Vue</span>
                              <span class="fs-7 text-muted"
                                >Lightweight and responsive framework</span
                              >
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="framework"
                              value="4" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Input group-->
                    </div>
                  </div>
                  <!--end::Step 2-->
                  <!--begin::Step 3-->
                  <div data-kt-stepper-element="content">
                    <div class="w-100">
                      <!--begin::Input group-->
                      <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="required fs-5 fw-bold mb-2"
                          >Database Name</label
                        >
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input
                          type="text"
                          class="form-control form-control-lg form-control-solid"
                          name="dbname"
                          placeholder=""
                          value="master_db" />
                        <!--end::Input-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="fv-row">
                        <!--begin::Label-->
                        <label
                          class="d-flex align-items-center fs-5 fw-bold mb-4">
                          <span class="required">Select Database Engine</span>
                          <i
                            class="fas fa-exclamation-circle ms-2 fs-7"
                            data-bs-toggle="tooltip"
                            title="Select your app database engine"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer mb-5">
                          <!--begin::Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin::Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-success">
                                <i
                                  class="fas fa-database text-success fs-2x"></i>
                              </span>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">MySQL</span>
                              <span class="fs-7 text-muted"
                                >Basic MySQL database</span
                              >
                            </span>
                            <!--end::Info-->
                          </span>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="dbengine"
                              checked="checked"
                              value="1" />
                          </span>
                          <!--end::Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer mb-5">
                          <!--begin::Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin::Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-danger">
                                <i class="fab fa-google text-danger fs-2x"></i>
                              </span>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">Firebase</span>
                              <span class="fs-7 text-muted"
                                >Google based app data management</span
                              >
                            </span>
                            <!--end::Info-->
                          </span>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="dbengine"
                              value="2" />
                          </span>
                          <!--end::Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer">
                          <!--begin::Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin::Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-warning">
                                <i class="fab fa-amazon text-warning fs-2x"></i>
                              </span>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bolder fs-6">DynamoDB</span>
                              <span class="fs-7 text-muted"
                                >Amazon Fast NoSQL Database</span
                              >
                            </span>
                            <!--end::Info-->
                          </span>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <span
                            class="form-check form-check-custom form-check-solid">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="dbengine"
                              value="3" />
                          </span>
                          <!--end::Input-->
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Input group-->
                    </div>
                  </div>
                  <!--end::Step 3-->
                  <!--begin::Step 4-->
                  <div data-kt-stepper-element="content">
                    <div class="w-100">
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label
                          class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                          <span class="required">Name On Card</span>
                          <i
                            class="fas fa-exclamation-circle ms-2 fs-7"
                            data-bs-toggle="tooltip"
                            title="Specify a card holder's name"></i>
                        </label>
                        <!--end::Label-->
                        <input
                          type="text"
                          class="form-control form-control-solid"
                          placeholder=""
                          name="card_name"
                          value="Max Doe" />
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-bold form-label mb-2"
                          >Card Number</label
                        >
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                          <!--begin::Input-->
                          <input
                            type="text"
                            class="form-control form-control-solid"
                            placeholder="Enter card number"
                            name="card_number"
                            value="4111 1111 1111 1111" />
                          <!--end::Input-->
                          <!--begin::Card logos-->
                          <div
                            class="position-absolute translate-middle-y top-50 end-0 me-5">
                            <img
                              src="assets/media/svg/card-logos/visa.svg"
                              alt=""
                              class="h-25px" />
                            <img
                              src="assets/media/svg/card-logos/mastercard.svg"
                              alt=""
                              class="h-25px" />
                            <img
                              src="assets/media/svg/card-logos/american-express.svg"
                              alt=""
                              class="h-25px" />
                          </div>
                          <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-8 fv-row">
                          <!--begin::Label-->
                          <label class="required fs-6 fw-bold form-label mb-2"
                            >Expiration Date</label
                          >
                          <!--end::Label-->
                          <!--begin::Row-->
                          <div class="row fv-row">
                            <!--begin::Col-->
                            <div class="col-6">
                              <select
                                name="card_expiry_month"
                                class="form-select form-select-solid"
                                data-control="select2"
                                data-hide-search="true"
                                data-placeholder="Month">
                                <option></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                              <select
                                name="card_expiry_year"
                                class="form-select form-select-solid"
                                data-control="select2"
                                data-hide-search="true"
                                data-placeholder="Year">
                                <option></option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                              </select>
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                          <!--begin::Label-->
                          <label
                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">CVV</span>
                            <i
                              class="fas fa-exclamation-circle ms-2 fs-7"
                              data-bs-toggle="tooltip"
                              title="Enter a card CVV code"></i>
                          </label>
                          <!--end::Label-->
                          <!--begin::Input wrapper-->
                          <div class="position-relative">
                            <!--begin::Input-->
                            <input
                              type="text"
                              class="form-control form-control-solid"
                              minlength="3"
                              maxlength="4"
                              placeholder="CVV"
                              name="card_cvv" />
                            <!--end::Input-->
                            <!--begin::CVV icon-->
                            <div
                              class="position-absolute translate-middle-y top-50 end-0 me-3">
                              <!--begin::Svg Icon | path: icons/duotone/Shopping/Credit-card.svg-->
                              <span class="svg-icon svg-icon-2hx">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="24px"
                                  height="24px"
                                  viewBox="0 0 24 24"
                                  version="1.1">
                                  <g
                                    stroke="none"
                                    stroke-width="1"
                                    fill="none"
                                    fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect
                                      fill="#000000"
                                      opacity="0.3"
                                      x="2"
                                      y="5"
                                      width="20"
                                      height="14"
                                      rx="2" />
                                    <rect
                                      fill="#000000"
                                      x="2"
                                      y="8"
                                      width="20"
                                      height="3" />
                                    <rect
                                      fill="#000000"
                                      opacity="0.3"
                                      x="16"
                                      y="14"
                                      width="4"
                                      height="2"
                                      rx="1" />
                                  </g>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->
                            </div>
                            <!--end::CVV icon-->
                          </div>
                          <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Input group-->
                      <!--begin::Input group-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-bold form-label"
                            >Save Card for further billing?</label
                          >
                          <div class="fs-7 fw-bold text-muted">
                            If you need more info, please check budget planning
                          </div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label
                          class="form-check form-switch form-check-custom form-check-solid">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value="1"
                            checked="checked" />
                          <span class="form-check-label fw-bold text-muted"
                            >Save Card</span
                          >
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Input group-->
                    </div>
                  </div>
                  <!--end::Step 4-->
                  <!--begin::Step 5-->
                  <div data-kt-stepper-element="content">
                    <div class="w-100 text-center">
                      <!--begin::Heading-->
                      <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                      <!--end::Heading-->
                      <!--begin::Description-->
                      <div class="text-muted fw-bold fs-3">
                        Submit your app to kickstart your project.
                      </div>
                      <!--end::Description-->
                      <!--begin::Illustration-->
                      <div class="text-center px-4 py-15">
                        <img
                          src="assets/media/illustrations/todo.png"
                          alt=""
                          class="mw-100 mh-150px" />
                      </div>
                      <!--end::Illustration-->
                    </div>
                  </div>
                  <!--end::Step 5-->
                  <!--begin::Actions-->
                  <div class="d-flex flex-stack pt-10">
                    <!--begin::Wrapper-->
                    <div class="me-2">
                      <button
                        type="button"
                        class="btn btn-lg btn-light-primary me-3"
                        data-kt-stepper-action="previous">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
                        <span class="svg-icon svg-icon-3 me-1">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1">
                            <g
                              stroke="none"
                              stroke-width="1"
                              fill="none"
                              fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <rect
                                fill="#000000"
                                opacity="0.3"
                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)"
                                x="14"
                                y="7"
                                width="2"
                                height="10"
                                rx="1" />
                              <path
                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                fill="#000000"
                                fill-rule="nonzero"
                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                            </g>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->Back
                      </button>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Wrapper-->
                    <div>
                      <button
                        type="button"
                        class="btn btn-lg btn-primary"
                        data-kt-stepper-action="submit">
                        <span class="indicator-label"
                          >Submit
                          <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                          <span class="svg-icon svg-icon-3 ms-2 me-0">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect
                                  fill="#000000"
                                  opacity="0.5"
                                  transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                  x="7.5"
                                  y="7.5"
                                  width="2"
                                  height="9"
                                  rx="1" />
                                <path
                                  d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                  fill="#000000"
                                  fill-rule="nonzero"
                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                          </span>
                          <!--end::Svg Icon--></span
                        >
                        <span class="indicator-progress"
                          >Please wait...
                          <span
                            class="spinner-border spinner-border-sm align-middle ms-2"></span
                        ></span>
                      </button>
                      <button
                        type="button"
                        class="btn btn-lg btn-primary"
                        data-kt-stepper-action="next">
                        Continue
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
                        <span class="svg-icon svg-icon-3 ms-1 me-0">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            version="1.1">
                            <g
                              stroke="none"
                              stroke-width="1"
                              fill="none"
                              fill-rule="evenodd">
                              <polygon points="0 0 24 0 24 24 0 24" />
                              <rect
                                fill="#000000"
                                opacity="0.5"
                                transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                x="7.5"
                                y="7.5"
                                width="2"
                                height="9"
                                rx="1" />
                              <path
                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                fill="#000000"
                                fill-rule="nonzero"
                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                            </g>
                          </svg>
                        </span>
                        <!--end::Svg Icon-->
                      </button>
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Actions-->
                </form>
                <!--end::Form-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Stepper-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
    <!--begin::Modal - Upgrade plan-->
    <div
      class="modal fade"
      id="kt_modal_upgrade_plan"
      tabindex="-1"
      aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
          <!--begin::Modal header-->
          <div class="modal-header justify-content-end border-0 pb-0">
            <!--begin::Close-->
            <div
              class="btn btn-sm btn-icon btn-active-color-primary"
              data-bs-dismiss="modal">
              <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
              <span class="svg-icon svg-icon-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="24px"
                  height="24px"
                  viewBox="0 0 24 24"
                  version="1.1">
                  <g
                    transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                    fill="#000000">
                    <rect
                      fill="#000000"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                    <rect
                      fill="#000000"
                      opacity="0.5"
                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                      x="0"
                      y="7"
                      width="16"
                      height="2"
                      rx="1" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
            <!--begin::Heading-->
            <div class="mb-13 text-center">
              <h1 class="mb-3">Upgrade a Plan</h1>
              <div class="text-muted fw-bold fs-5">
                If you need more info, please check
                <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a
                >.
              </div>
            </div>
            <!--end::Heading-->
            <!--begin::Plans-->
            <div class="d-flex flex-column">
              <!--begin::Nav group-->
              <div
                class="nav-group nav-group-outline mx-auto"
                data-kt-buttons="true">
                <a
                  href="#"
                  class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                  data-kt-plan="month"
                  >Monthly</a
                >
                <a
                  href="#"
                  class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                  data-kt-plan="annual"
                  >Annual</a
                >
              </div>
              <!--end::Nav group-->
              <!--begin::Row-->
              <div class="row mt-10">
                <!--begin::Col-->
                <div class="col-lg-6 mb-10 mb-lg-0">
                  <!--begin::Tabs-->
                  <div class="nav flex-column">
                    <!--begin::Tab link-->
                    <div
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_startup">
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success me-6">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            checked="checked"
                            value="startup" />
                        </div>
                        <!--end::Radio-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <h2
                            class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                            Startup
                          </h2>
                          <div class="fw-bold opacity-50">
                            Best for startups
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->
                      <!--begin::Price-->
                      <div class="ms-5">
                        <span class="mb-2">$</span>
                        <span
                          class="fs-3x fw-bolder"
                          data-kt-plan-price-month="39"
                          data-kt-plan-price-annual="399"
                          >39</span
                        >
                        <span class="fs-7 opacity-50"
                          >/ <span data-kt-element="period">Mon</span></span
                        >
                      </div>
                      <!--end::Price-->
                    </div>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <div
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_advanced">
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success me-6">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            value="advanced" />
                        </div>
                        <!--end::Radio-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <h2
                            class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                            Advanced
                          </h2>
                          <div class="fw-bold opacity-50">
                            Best for 100+ team size
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->
                      <!--begin::Price-->
                      <div class="ms-5">
                        <span class="mb-2">$</span>
                        <span
                          class="fs-3x fw-bolder"
                          data-kt-plan-price-month="339"
                          data-kt-plan-price-annual="3399"
                          >339</span
                        >
                        <span class="fs-7 opacity-50"
                          >/ <span data-kt-element="period">Mon</span></span
                        >
                      </div>
                      <!--end::Price-->
                    </div>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <div
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                      data-bs-toggle="tab"
                      data-bs-target="#kt_upgrade_plan_enterprise">
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success me-6">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            value="enterprise" />
                        </div>
                        <!--end::Radio-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <h2
                            class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                            Enterprise
                            <span class="badge badge-light-success ms-2 fs-7"
                              >Most popular</span
                            >
                          </h2>
                          <div class="fw-bold opacity-50">
                            Best value for 1000+ team
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->
                      <!--begin::Price-->
                      <div class="ms-5">
                        <span class="mb-2">$</span>
                        <span
                          class="fs-3x fw-bolder"
                          data-kt-plan-price-month="999"
                          data-kt-plan-price-annual="9999"
                          >999</span
                        >
                        <span class="fs-7 opacity-50"
                          >/ <span data-kt-element="period">Mon</span></span
                        >
                      </div>
                      <!--end::Price-->
                    </div>
                    <!--end::Tab link-->
                    <!--begin::Tab link-->
                    <div
                      class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                      <!--end::Description-->
                      <div class="d-flex align-items-center me-2">
                        <!--begin::Radio-->
                        <div
                          class="form-check form-check-custom form-check-solid form-check-success me-6">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="plan"
                            value="custom" />
                        </div>
                        <!--end::Radio-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                          <h2
                            class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                            Custom
                          </h2>
                          <div class="fw-bold opacity-50">
                            Requet a custom license
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Description-->
                      <!--begin::Price-->
                      <div class="ms-5">
                        <a href="#" class="btn btn-sm btn-primary"
                          >Contact Us</a
                        >
                      </div>
                      <!--end::Price-->
                    </div>
                    <!--end::Tab link-->
                  </div>
                  <!--end::Tabs-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-6">
                  <!--begin::Tab content-->
                  <div class="tab-content rounded h-100 bg-light p-10">
                    <!--begin::Tab Pane-->
                    <div
                      class="tab-pane fade show active"
                      id="kt_upgrade_plan_startup">
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bolder text-dark">
                          What’s in Startup Plan?
                        </h2>
                        <div class="text-muted fw-bold">
                          Optimal for 10+ team size and new startup
                        </div>
                      </div>
                      <!--end::Heading-->
                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Up to 10 Active Users</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Up to 30 Project Integrations</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Analytics Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-muted flex-grow-1"
                            >Finance Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                          <span class="svg-icon svg-icon-1">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                fill="#000000" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-muted flex-grow-1"
                            >Accounting Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                          <span class="svg-icon svg-icon-1">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                fill="#000000" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-muted flex-grow-1"
                            >Network Platform</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                          <span class="svg-icon svg-icon-1">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                fill="#000000" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span class="fw-bold fs-5 text-muted flex-grow-1"
                            >Unlimited Cloud Space</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                          <span class="svg-icon svg-icon-1">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                fill="#000000" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bolder text-dark">
                          What’s in Startup Plan?
                        </h2>
                        <div class="text-muted fw-bold">
                          Optimal for 100+ team size and grown company
                        </div>
                      </div>
                      <!--end::Heading-->
                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Up to 10 Active Users</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Up to 30 Project Integrations</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Analytics Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Finance Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Accounting Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-muted flex-grow-1"
                            >Network Platform</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                          <span class="svg-icon svg-icon-1">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                fill="#000000" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span class="fw-bold fs-5 text-muted flex-grow-1"
                            >Unlimited Cloud Space</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
                          <span class="svg-icon svg-icon-1">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                                fill="#000000" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                      <!--begin::Heading-->
                      <div class="pb-5">
                        <h2 class="fw-bolder text-dark">
                          What’s in Startup Plan?
                        </h2>
                        <div class="text-muted fw-bold">
                          Optimal for 1000+ team and enterpise
                        </div>
                      </div>
                      <!--end::Heading-->
                      <!--begin::Body-->
                      <div class="pt-1">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Up to 10 Active Users</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Up to 30 Project Integrations</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Analytics Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Finance Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Accounting Module</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-7">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Network Platform</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center">
                          <span class="fw-bold fs-5 text-gray-700 flex-grow-1"
                            >Unlimited Cloud Space</span
                          >
                          <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                          <span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24px"
                              height="24px"
                              viewBox="0 0 24 24"
                              version="1.1">
                              <circle
                                fill="#000000"
                                opacity="0.3"
                                cx="12"
                                cy="12"
                                r="10" />
                              <path
                                d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                fill="#000000"
                                fill-rule="nonzero" />
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Tab Pane-->
                  </div>
                  <!--end::Tab content-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Plans-->
            <!--begin::Actions-->
            <div class="d-flex flex-center flex-row-fluid pt-12">
              <button
                type="reset"
                class="btn btn-light me-3"
                data-bs-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary">
                Upgrade Plan
              </button>
            </div>
            <!--end::Actions-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan-->
    <!--end::Modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
      <span class="svg-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="24px"
          height="24px"
          viewBox="0 0 24 24"
          version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24" />
            <rect
              fill="#000000"
              opacity="0.5"
              x="11"
              y="10"
              width="2"
              height="10"
              rx="1" />
            <path
              d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
              fill="#000000"
              fill-rule="nonzero" />
          </g>
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('assets/js/custom/modals/create-app.js')}}"></script>
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script>
      ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic'))
    .then(editor => {
        console.log(editor);
       
    })
    .catch(error => {
        console.error(error);
    });
  </script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

  </body>
  <!--end::Body-->
</html>
