<x-layout>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image: url(assets/images/banner/banner3.jpg)">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Management Team</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->

        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="container">
            <div class="row">
                @foreach ($staff as $row)
                    <div class="col-lg-4 col-sm-6">
                        <div class="singel-teachers mt-30 text-center">
                            <div class="image">
                                <img src="/storage/{{ $row->pic }}" alt="Teachers" />
                            </div>
                            <div class="cont">
                                <a href="#">
                                    <h6>{{ $row->name }}</h6>
                                </a>
                                <span>{{ $row->job }}</span>
                            </div>
                        </div>
                        <!-- singel teachers -->
                    </div>
                @endforeach
            </div>
            <!-- row -->

            <!-- row -->
        </div>
        <!-- contact area END -->
    </div>

</x-layout>
