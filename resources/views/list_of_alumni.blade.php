<x-layout>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">List Of Alumni</h1>
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

                                        <h5 class="post-title"><a
                                                href="/alumni_details/{{ $row->id }}">{{ $row->name }}</a>
                                        </h5>
                                        <p>
                                            {{ substr($row->body, 0, 150) }}
                                        </p>
                                        <div class="post-extra">
                                            <a href="/alumni_details/{{ $row->id }}" class="btn-link">READ
                                                MORE</a>

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
                                    <h6 class="widget-title">Search</h6>
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
                                    <h6 class="widget-title">Recent Posts</h6>
                                    <div class="widget-post-bx">
                                        @foreach ($alumni as $row)
                                            <div class="widget-post clearfix">
                                                <div class="ttr-post-media"> <img src="/storage/{{ $row->main_pic }}"
                                                        width="200" height="143" alt=""> </div>
                                                <div class="ttr-post-info">
                                                    <div class="ttr-post-header">
                                                        <h6 class="post-title"><a
                                                                href="alumni_details/{{ $row->id }}">{{ $row->name }}</a>
                                                        </h6>
                                                    </div>
                                                    <ul class="media-post">
                                                        <li><a href="alumni_details/{{ $row->id }}"><i
                                                                    class="fa fa-calendar"></i>{{ $row->created_at }}</a>
                                                        </li>

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
</x-layout>
