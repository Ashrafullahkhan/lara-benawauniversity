<x-pashto.pashto-layout>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white pashto-font">د پیښو لیست</h1>
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8">
                            @foreach ($data as $row)
                                <div class="blog-post blog-md clearfix">
                                    <div class="ttr-post-media">
                                        <a href="#"><img src="/storage/{{ $row->main_pic }}" alt=""></a>
                                    </div>
                                    <div class="ttr-post-info">
                                        <ul class="media-post">
                                            <li><a href="/pa_event_details/{{ $row->id }}"><i
                                                        class="fa fa-calendar"></i>{{ $row->created_at }}</a>
                                            </li>

                                        </ul>
                                        <h5 class="post-title text-right"><a
                                                href="/pa_event_details/{{ $row->id }}"
                                                class="pashto-font">{{ $row->title }}</a>
                                        </h5>
                                        <p class="pashto-font text-right">
                                            {{ substr($row->body, 0, 100) }}
                                            <span>...</span>
                                        </p>
                                        <div class="post-extra">
                                            <a href="/pa_event_details/{{ $row->id }}"
                                                class="btn-link pashto-font">نور یی
                                                ولوله</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Pagination start -->
                            {!! $data->links('pagination::bootstrap-4') !!}
                            <!-- Pagination END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->
                        <div class="col-lg-4 sticky-top">
                            <aside class="side-bar sticky-top">
                                <div class="widget">
                                    <h6 class="widget-title pashto-font text-right">لټون</h6>
                                    <div class="search-bx style-1">

                                        <form method="GET" action="#">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Enter your keywords..."
                                                    name="search" type="text" value="{{ request('search') }}">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="fa fa-search text-primary"></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget recent-posts-entry">
                                    <h6 class="widget-title pashto-font text-right">وروستي پوسټونه</h6>
                                    <div class="widget-post-bx">
                                        @foreach ($news as $row)
                                            <div class="widget-post clearfix">
                                                <div class="ttr-post-media"> <img src="/storage/{{ $row->main_pic }}"
                                                        width="200" height="143" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title pashto-font text-right"><a
                                                                href="">{{ $row->title }}</a></h6>
                                                    </div>
                                                    <ul class="media-post">
                                                        <li><a href="#"><i
                                                                    class="fa fa-calendar"></i>{{ $row->created_at }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="widget widget_gallery gallery-grid-4">
                                    <h6 class="widget-title pashto-font text-right">زموږ ګالری</h6>
                                    <ul>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic2.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic1.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic5.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic7.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic8.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic9.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic3.jpg"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div><a href="#"><img src="assets/images/gallery/pic4.jpg"
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
</x-pashto.pashto-layout>
