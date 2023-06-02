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
      @if (!empty($title))
        {{$title}} - Phòng Kỹ thuật hình sự - Công an tỉnh Cao Bằng
      @else
        Phòng Kỹ thuật hình sự - Công an tỉnh Cao Bằng
      @endif 
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
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
    

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
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{route('ThongKeHoSoGiamDinh')}}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Thống kê hồ sơ</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="menu-item">
                  <div class="menu-content pt-8 pb-2">
                    <span
                      class="menu-section text-muted text-uppercase fs-8 ls-1"
                      >Quản lý tài khoản</span
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
                    <span class="menu-title">Thông tin tài khoản</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{route('thong-tin-tai-khoan.create')}}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Thêm mới tài khoản</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{route('thong-tin-tai-khoan.index')}}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Danh sách tài khoản</span>
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
                    src="{{asset('assets/media/logos/logo-3.svg')}}"
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
         @yield('thongtintaikhoan')
         @yield('dangkytaikhoan')

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
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('custom-scripts')
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

  </body>
  <!--end::Body-->
</html>
