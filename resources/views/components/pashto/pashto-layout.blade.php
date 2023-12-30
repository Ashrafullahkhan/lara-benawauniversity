<!DOCTYPE html>
<html lang="en">


<head>
    <!-- META ============================================= -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no" />

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Benawa Institute of Higher Studies</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css') }}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css') }}">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/navigation.css') }}" />
    <!-- REVOLUTION SLIDER END -->
</head>
<style>


    .df{
        color: red
    }
        </style>

<body id="bg">


    


    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <!-- Header Top ==== -->
        <header class="header rs-nav ">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li>
                                    <a href="faq-1.html" class="pashto-font"><i class="fa fa-question-circle"></i>پوښتنه
                                        وکړي</a>
                                </li>
                                <li>
                                    <a href="javascript:;"><i class="fa fa-envelope-o"></i>info@benawa.edu.af
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-right df">
                            <ul class="df">
                                <li class="df" >
                                    <select class="header-lang-bx df" name="languages"
                                        id="languages"onchange="location = this.value;">
                                        <option class="df"  data-icon="flag flag-afg" value="/pashto">
                                          
                                           
                                            پښتو
                                        
                                          
                                           
                                        </option>
                                        <option data-icon="flag flag-uk"
                                            value="{{ url('') . '/' . substr(Request::path(), 3) }}">
                                            English</option>

                                        <option data-icon="flag flag-afg"
                                            value="{{ url('') . '/dr-' . substr(Request::path(), 3) }}">دری</option>

                                    </select>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="/"><img src="{{ asset('assets/images/logo-white.png') }}" />
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/benawa.uni/" class="btn-link"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn">
                                        <button id="quik-search-btn" type="button" class="btn-link">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control"
                                    placeholder="Type to search" />
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <!-- <li class="active">
                    <a href="javascript:;"
                      >Home <i class="fa fa-chevron-down"></i
                    ></a>
                    <ul class="sub-menu">
                      <li><a href="index.html">Home 1</a></li>
                      <li><a href="index-2.html">Home 2</a></li>
                    </ul>
                  </li> -->

                                <li>
                                    <a href="javascript:;"
                                        style="font-family:'Noto Naskh Arabic',serif ;
                      ">داخله<i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="/pa-admission-info"
                                                style="font-family:'Noto Naskh Arabic',serif;" class="text-right">د
                                                داخیلې
                                                معلومات</a>
                                        </li>

                                        <li>
                                            <a href="https://admission.benawa.edu.af/Result.php"
                                                style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">آنلاین
                                                داخله </a>
                                        </li>
                                        <li>
                                            <a href="pa-fee-structure" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">دفیس جوړښت</a>
                                        </li>
                                        <li>
                                            <a href="/pa-scholarships" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">بور
                                                سونه او بیرته ستنیدو پالیسی</a>
                                        </li>
                                        <li>
                                            <a href="/pa-financial-assistant"
                                                style="font-family:'Noto Naskh Arabic',serif;" class="text-right">مالی
                                                مرسته</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="javascript:;" style="font-family:'Noto Naskh Arabic',serif;"
                                        class="text-right"> 
                                        علمي پروګرامونه
                                        
                                        <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:;"
                                                style="font-family:'Noto Naskh Arabic',serif; margin-right:17px"class="text-right">پروګرامونه<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/pa-programmes-CS"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right"> کمپیوتر
                                                        ساینس</a></li>
                                                <li><a href="/pa-programmes-EN"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">انجینری</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="javascript:;"
                                                style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                class="text-right">پوحنځی</a>
                                        </li>
                                        <li><a href="javascript:;"
                                                style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                class="text-right">پروسیجر او پالیسی<i
                                                    class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ url('policies', ['pdf' => 'Academic_staff_recruitment_policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">داکاډمیک
                                                        کارمندانواړتیا پالیسی</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Benawa_Research_Policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">د بینوا د
                                                        تحقیقاتو پالیسی</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Compiliation_and_translation_Policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">درترجمی او تالیف
                                                        پالیسی</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Conflicts_of_Intrest_in_Research_Policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">د شخړو
                                                        د څیړنې په پالیسۍ کې لیوالتیا</a>
                                                </li>
                                                <li><a href="faq-2.html"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">د کارمندانو د
                                                        شکایاتو پالیسی</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Ethics_in_Research_Policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">په څیړنه کی د
                                                        اخلاقو پالیسی</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Ethics_policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">د اخلاقو
                                                        پالیسی</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Gender_policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">جندر
                                                        پالیسي</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Juctice_Policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">عدالت
                                                        پالیسي</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Library_using_Mechanism.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">کتابتون
                                                        د میکانیزم کارول</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Ethics_policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">مسلکي
                                                        د پراختیا پالیسي</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Research_Guidline.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">څیړنه
                                                        او لارښود</a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Sponsored_Research_Policy.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right">سپانسر شوی
                                                        د څیړنې پالیسي
                                                    </a></li>
                                                <li><a href="{{ url('policies', ['pdf' => 'Academic_Freedom.pdf']) }}"
                                                        style="font-family:'Noto Naskh Arabic',serif;"
                                                        class="text-right"> علمي
                                                        ازادي

                                                    </a></li>
                                            </ul>

                                        </li>
                                    </ul>


                                <li class="add-mega-menu"><a href="javascript:;"
                                        style="font-family:'Noto Naskh Arabic',serif;">
                                        محصلین
 <i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">

                                            <ul>
                                                <li>
                                                    <a href="{{ url('files', ['pdf' => 'Acadimic_Calender.pdf']) }}"
                                                        
                                                        class="text-right">مهال ویش </a>
                                                </li>
                                                <li><a href="https://student.benawa.edu.af/Login.php"
                                                        style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                        class="text-right">د  محصلینو
                                                        پورټل</a></li>
                                                <li><a href="/pa-student-affairs"
                                                        style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                        class="text-right">  
                                                        محصلانو معاونیت
                                                    
                                                    </a></li>
                                                <li><a href="event.html"
                                                        style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                        class="text-right">د ازموینی مهال
                                                        ویش</a></li>
                                                <li><a href="membership.html"
                                                        style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                        class="text-right"> د محصلانو لارښود</a>
                                                </li>
                                                <li><a href="pa-academic_rules_and_regulation"
                                                        style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                        class="text-right">اکاډمیک اصول او
                                                        مقررات</a></li>
                                                <li><a href="membership.html"
                                                        style="font-family:'Noto Naskh Arabic',serif;  margin-right:17px"
                                                        class="text-right">د  محصلینو د سند
                                                        تصدیق</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                <li><a href="javascript:;" style="font-family:'Noto Naskh Arabic',serif;"
                                        class="text-right">اسانتیاوي<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="pa-computer-lab" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">
                                                کمپیوټر لېب</a></li>
                                        <li><a href="pa-engineering-lab"
                                                style="font-family:'Noto Naskh Arabic',serif;" class="text-right">
                                                د انجینري لابراتوار</a></li>
                                        <li><a href="pa-library" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">کتابتون</a></li>
                                        <li><a href="pa-cafeteria" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">خوړنځای</a></li>

                                    </ul>
                                </li>

                                <li class="nav-dashboard"><a href="javascript:;"
                                        style="font-family:'Noto Naskh Arabic',serif;" class="text-right">
                                        زموږ په اړه
                                        <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/pa-why-benawa" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">ولی
                                                بینوا ؟</a></li>
                                        <li><a href="/pa-mession_vesion" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">لرليد، رسالت او موخي</a>
                                        </li>
                                        <li><a href="pa-founder-of-benawa"
                                                style="font-family:'Noto Naskh Arabic',serif;" class="text-right">
                                                  د مؤسس
                                                پیغام
                                            </a></li>
                                        <li><a href="pa-chancellor-message"
                                                style="font-family:'Noto Naskh Arabic',serif;" class="text-right">د
                                              
                                               
                                                رئيس پیغام
                                            </a></li>
                                        <li><a href="/pa-management-team"
                                                style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">اداری ټیم</a></li>
                                        <li><a href="/pa_teachers" style="font-family:'Noto Naskh Arabic',serif;"
                                                class="text-right">زموږ
                                                استادان</a></li>
                                        <li><a href="admin/teacher-profile"
                                                style="font-family:'Noto Naskh Arabic',serif;" class="text-right">زموږ
                                                محصلن</a></li>
                                </li>
                            </ul>
                            <li class="nav-dashboard clearfix"><a style="font-family:'Noto Naskh Arabic',serif;"
                                    href="/pa-contact">
                                    زموږ سره اړيکه
                                </a>
                                <div class="nav-social-link">
                                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                    <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                                </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->
        <!-- Content -->
        {{ $slot }}
        <!-- Content END-->
        <!-- Footer ==== -->
        <footer>
            <div class="footer-top">
                <div class="pt-exebar">
                    <div class="container">
                        <div class="d-flex align-items-stretch">
                            <div class="pt-logo mr-auto">
                                <a href="index.html"><img src="assets/images/logo-white.png" alt="" /></a>
                            </div>
                            <div class="pt-social-link">
                                <ul class="list-inline m-a0">
                                    <li>
                                        <a href="https://www.facebook.com/benawa.uni" class="btn-link"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="pt-btn-join">
                                <a href="#" class="btn">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- footer --}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget" >
                                <h5 class="footer-title pashto-font">د مؤسسې پته</h5>
                                <p class="text-capitalize" style="text-align: right;margin-right:100px">
                                    عينو مېنه، دوهمه فواره، اطاق تجارت شاته، کندهار افغانستان
                                </p>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                <h5 class="footer-title pashto-font">د اړیکو شمیرې</h5>
                                <p class="text-capitalize ">
                                    <div style="margin-right: 30px">
                                        <div>
                                          +93700035222
                                        </div>
                                        <div>
                                          +93700036222
                                        </div>
                                        <div>
                                          +93700038222
                                        </div>
                                        </div>
                                </p>
                            </div>

                            <div class="col-6">
                                <h5 class="footer-title pashto-font">د واټسپ شمیرې</h5>
                                <p class="text-capitalize ">
                                    <div style="margin-right: 30px">
                                        <div>
                                            +93700035222
                                        </div>
                                        <div>
                                            +93700036222
                                        </div>
                                        
                                        </div>
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-col-4">
                            <div class="widget">
                                <h5 class="footer-title pashto-font">ایمیل ادرسونه</h5>
                                <p class="">
                                    info@benawa.edu.af
                                    hr@benawa.edu.af
                                    admission@benawa.edu.af

                                </p>

                            </div>

                        </div>
                        <div class="col-12 col-lg-2 col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-4 col-lg-12 col-md-4 col-sm-4">
                                    <div class="widget footer_widget">
                                        <h5 class="footer-title pashto-font">چټک لینکونه</h5>
                                        <ul>
                                            <li><a href="{{ url('files', ['pdf' => 'TimeTable.pdf']) }}">Time
                                                    Table</a></li>
                                            <li><a href="https://student.benawa.edu.af/Login.php">Student Portal</a>
                                            </li>
                                            <li><a href="https://admission.benawa.edu.af/Result.php">Online
                                                    Admission</a></li>
                                            <li><a href="scholarships">Scholarships & Refund Policy</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                            <div class="widget widget_gallery gallery-grid-4">
                                <h5 class="footer-title">Our Gallery</h5>
                                <ul class="magnific-image">
                                    <li>
                                        <a href="{{ asset('assets/images/gallery/pic1.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic1.jpg') }}"
                                                alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/images/gallery/pic2.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic2.jpg') }}"alt="" /></a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ asset('assets/images/gallery/pic4.jpg') }}"class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic4.jpg') }}"alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/images/gallery/pic3.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic3.jpg') }}"
                                                alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/images/gallery/pic5.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic5.jpg') }}"
                                                alt="" /></a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ asset('assets/images/gallery/pic6.jpg') }}"class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic6.jpg') }}"alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/images/gallery/pic7.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic7.jpg') }}"
                                                alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('assets/images/gallery/pic8.jpg') }}"
                                            class="magnific-anchor"><img
                                                src="{{ asset('assets/images/gallery/pic8.jpg') }}"
                                                alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Footer END ==== -->
        <button class="back-to-top fa fa-chevron-up"></button>
    </div>

    <!-- External JavaScripts -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/counter/counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/masonry/masonry.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/masonry/filter.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/scroll/scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/functions.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/chart/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/admin.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/switcher/switcher.js  ') }}"></script>
    <!-- External JavaScripts -->

    <!-- Revolution JavaScripts Files -->
    <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            var ttrevapi;
            var tpj = jQuery;
            if (tpj("#rev_slider_486_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_486_1");
            } else {
                ttrevapi = tpj("#rev_slider_486_1")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        jsFileLocation: "assets/vendors/revolution/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false,
                            },
                            arrows: {
                                style: "uranus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: "",
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0,
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 10,
                                    v_offset: 0,
                                },
                            },
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%",
                            presize: false,
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [768, 600, 600, 600],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [
                                5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55,
                            ],
                            type: "scroll",
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            }
        });
    </script>
</body>

</html>
