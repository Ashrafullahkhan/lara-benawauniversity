<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp : Education HTML Template </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="assets/js/html5shiv.min.js"></script>
 <script src="assets/js/respond.min.js"></script>
 <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <x-admin.layout>
    </x-admin.layout>
    <!-- Left sidebar menu end -->

    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">

            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">



                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <br />

                    <div class="col-lg-12 m-b30">
                        <div class="widget-box">
                            <div class="wc-title">
                                <h4>Add Teachers</h4>
                            </div>
                            <div class="widget-inner">
                                <form method="post" action="{{ url('admin/teachers/insert_data/') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Teacher Name</label>
                                            <div>
                                                <input class="form-control" name="name" type="text"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="col-form-label">Job</label>
                                            <div>
                                                <input class="form-control" name="job" type="text"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Select language</label>
                                            <select id="selectLang" name="lang" required>
                                                <option value="" disabled selected>Please select language</option>
                                                <option value="en">english</option>
                                                <option value="pa">pashto</option>
                                                <option value="da">dari</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Select Profile Image</label>
                                            <div>
                                                <input type="file" name="pic" />
                                            </div>

                                        </div>
                                        <div class="form-group col-12">

                                            <button type="submit" name="teachers" value="Save" class="btn">Save
                                                changes</button>

                                        </div>
                                    </div>

                            </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <div class="wc-title">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Teachers</h4>
                                    </div>
                                    <div class=" offset-lg-2 col-lg-4 ">
                                        <form method="GET" action="#">

                                            <input class="form-control" name="search" type="text"
                                                placeholder="Search" value="{{ request('search') }}">
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="widget-inner">


                                <div class="table-responsive">
                                    <table class="table  ">
                                        <tr>
                                            <th width="30%">Image</th>
                                            <th width="30%">Name</th>
                                            <th width="30%">Job</th>
                                            <th width="30%">Action</th>
                                        </tr>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>
                                                    <img src="/storage/{{ $row->pic }}" class="img-thumbnail"
                                                        width="90" />
                                                </td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->job }}</td>

                                                <td>
                                                    <div> <a href="/admin/teachers/{{ $row->id }}"><i
                                                                class="fa fa-edit"></i></a>
                                                    </div>

                                                    <form float="right" action="/teachers/delete/{{ $row->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="delete"> <i class="fa fa-close"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        {!! $data->links('pagination::bootstrap-4') !!}
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>

    <!-- External JavaScripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendors/counter/waypoints-min.js"></script>
    <script src="assets/vendors/counter/counterup.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendors/masonry/masonry.js"></script>
    <script src="assets/vendors/masonry/filter.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src='assets/vendors/scroll/scrollbar.min.js'></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/vendors/chart/chart.min.js"></script>
    <script src="assets/js/admin.js"></script>
    <script src='assets/vendors/switcher/switcher.js'></script>
    <script>
        // Pricing add
        function newMenuItem() {
            var newElem = $('tr.list-item').first().clone();
            newElem.find('input').val('');
            newElem.appendTo('table#item-add');
        }
        if ($("table#item-add").is('*')) {
            $('.add-item').on('click', function(e) {
                e.preventDefault();
                newMenuItem();
            });
            $(document).on("click", "#item-add .delete", function(e) {
                e.preventDefault();
                $(this).parent().parent().parent().parent().remove();
            });
        }
    </script>
</body>


</html>
