<head>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active1,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade1 {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade1 {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
    </style>
</head>

<body id="bg">
    <x-layout>
        <div class="page-content bg-white">
            <div class="content-block">
                <div class="section-area section-sp1">
                    <div class="container">
                        <div class="row">

                            <!-- Left part start -->
                            <div class="col-lg-8 col-xl-8">
                                <!-- blog start -->
                                <div class="recent-events blog-lg">
                                    <div class="slideshow-container">
                                        <div class="mySlides fade1">

                                            <img src="/storage/{{ $event->main_pic }}"style="width:100%">

                                        </div>
                                        @if ($event->pic2)
                                            <div class="mySlides fade1">

                                                <img src="/storage/{{ $event->pic2 }}" style="width:100%">

                                            </div>
                                        @endif

                                        @if ($event->pic3)
                                            <div class="mySlides fade1">

                                                <img src="/storage/{{ $event->pic3 }}" style="width:100%">

                                            </div>
                                        @endif
                                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                                        <a class="next" onclick="plusSlides(1)">❯</a>
                                    </div>
                                    <br>

                                    <div style="text-align:center">
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        @if ($event->pic2)
                                            <span class="dot" onclick="currentSlide(2)"></span>
                                        @endif
                                        @if ($event->pic3)
                                            <span class="dot" onclick="currentSlide(3)"></span>
                                        @endif

                                    </div>

                                    <div class="info-bx">
                                        <ul class="media-post">
                                            <li><a href="#">start date &nbsp;<i
                                                        class="fa fa-calendar"></i>{{ $event->start_date }}</a></li>
                                            <li><a href="#">end date &nbsp; <i
                                                        class="fa fa-calendar"></i>{{ $event->end_date }}</a></li>
                                        </ul>
                                        <h5 class="post-title"><a href="#">{{ $event->title }}</a></h5>
                                        <p>{{ $event->body }}</p>
                                        <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>

                                        <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                                        <h6>SHARE </h6>
                                        <ul class="list-inline contact-social-bx">
                                            <li><a href="#" class="btn outline radius-xl"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="btn outline radius-xl"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="btn outline radius-xl"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" class="btn outline radius-xl"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                        <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
                                    </div>
                                </div>

                                <!-- blog END -->
                            </div>
                            <!-- Left part END -->

                            <!-- Side bar start -->
                            <div class="col-lg-4 col-xl-4">
                                <aside class="side-bar sticky-top">
                                    <div class="widget">
                                        <h6 class="widget-title">Search</h6>
                                        <div class="search-bx style-1">
                                            <form role="search" method="GET" action="#">
                                                <div class="input-group">
                                                    <input name="search" class="form-control"
                                                        placeholder="Enter your keywords..." type="text"
                                                        value="{{ request('search') }}">
                                                    <span class="input-group-btn">

                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget recent-posts-entry">
                                        <h6 class="widget-title">Recent Posts</h6>
                                        <div class="widget-post-bx">
                                            @foreach ($allevents as $row)
                                                <div class="widget-post clearfix">
                                                    <div class="ttr-post-media"> <img
                                                            src="/storage/{{ $event->main_pic }}" width="200"
                                                            height="143" alt=""> </div>
                                                    <div class="ttr-post-info">
                                                        <div class="ttr-post-header">
                                                            <h6 class="post-title"><a
                                                                    href="blog-details.html">{{ $row->title }}</a>
                                                            </h6>
                                                        </div>
                                                        <ul class="media-post">
                                                            <li><a href="#"><i
                                                                        class="fa fa-calendar"></i>{{ $row->created_at }}
                                                                </a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="widget widget_gallery gallery-grid-4">
                                        <h6 class="widget-title">Our Gallery</h6>
                                        <ul>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic2.jpg') }}">
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic1.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic5.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic7.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic8.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic9.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic3.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                            <li>
                                                <div><a href="#"><img
                                                            src="{{ asset('assets/images/gallery/pic2.jpg') }}"
                                                            alt=""></a></div>
                                            </li>
                                        </ul>
                                    </div>

                                </aside>
                            </div>
                            <!-- Side bar END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </x-layout>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active1", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active1";
        }
    </script>
</body>

</html>