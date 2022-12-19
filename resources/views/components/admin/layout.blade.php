 <header class="ttr-header">
     <div class="ttr-header-wrapper">
         <!--sidebar menu toggler start -->
         <div class="ttr-toggle-sidebar ttr-material-button">
             <i class="ti-close ttr-open-icon"></i>
             <i class="ti-menu ttr-close-icon"></i>
         </div>
         <!--sidebar menu toggler end -->
         <!--logo start -->
         <div class="ttr-logo-box">
             <div>
                 <a href="/" class="ttr-logo">

                     <img alt="" class="ttr-logo-desktop" src="{{ asset('assets/images/logo-white.png') }}"
                         width="50" height="27">
                 </a>
             </div>
         </div>
         <!--logo end -->
         <div class="ttr-header-menu">
             <!-- header left menu start -->
             <ul class="ttr-header-navigation">
                 <li>
                     <a href="/" class="ttr-material-button ttr-submenu-toggle">Benawa Institute of Higher
                         Education</a>
                 </li>

             </ul>
             <!-- header left menu end -->
         </div>
         <div class="ttr-header-right ttr-with-seperator">
             <!-- header right menu start -->
             <ul class="ttr-header-navigation">


                 <li style="margin-right:20px">
                     <a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img
                                 alt="" src="{{ asset('assets/images/testimonials/pic3.jpg') }}" width="32"
                                 height="32"></span></a>
                     <div class="ttr-header-submenu">
                         <ul>
                             <li><a href="user-profile.html">My profile</a></li>

                             <li><a href="../login.html">Logout</a></li>
                         </ul>
                     </div>
                 </li>

             </ul>
             <!-- header right menu end -->
         </div>


     </div>
 </header>
 <!-- header end -->
 <!-- Left sidebar menu start -->
 <div class="ttr-sidebar">
     <div class="ttr-sidebar-wrapper content-scroll">
         <!-- side menu logo start -->
         <div class="ttr-sidebar-logo">
             <a href="#"><img alt="" src="{{ asset('assets/images/logo.png') }}" width="122"
                     height="27"></a>
             <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
     <i class="material-icons ttr-fixed-icon">gps_fixed</i>
     <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
    </div> -->
             <div class="ttr-sidebar-toggle-button">
                 <i class="ti-arrow-left"></i>
             </div>
         </div>
         <!-- side menu logo end -->
         <!-- sidebar menu start -->
         <nav class="ttr-sidebar-navi">
             <ul>

                 <li>
                     <a href="/admin/teachers" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-person"></i></span>
                         <span class="ttr-label">Teachers</span>
                     </a>
                 </li>
                 <li>
                     <a href="/admin/staffs" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-people"></i></span>
                         <span class="ttr-label">Staffs</span>
                     </a>
                 </li>
                 <li>
                     <a href="/admin/news" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-email"></i></span>
                         <span class="ttr-label">News</span>
                         <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                     </a>
                     <ul>
                         <li>
                             <a href="/admin/news" class="ttr-material-button"><span class="ttr-label">News</span></a>
                         </li>
                         <li>
                             <a href="/admin/create-news" class="ttr-material-button"><span class="ttr-label">Create
                                     News</span></a>
                         </li>

                     </ul>
                 </li>
                 <li>
                     <a href="/admin/news" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-email"></i></span>
                         <span class="ttr-label">Events</span>
                         <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                     </a>
                     <ul>
                         <li>
                             <a href="/admin/events" class="ttr-material-button"><span
                                     class="ttr-label">Events</span></a>
                         </li>
                         <li>
                             <a href="/admin/create-event" class="ttr-material-button"><span class="ttr-label">Create
                                     Event</span></a>
                         </li>

                     </ul>
                 </li>
                 <li>
                     <a href="/admin/news" class="ttr-material-button">
                         <span class="ttr-icon"><i class="ti-email"></i></span>
                         <span class="ttr-label">Alumuni</span>
                         <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                     </a>
                     <ul>
                         <li>
                             <a href="/admin/alumuni" class="ttr-material-button"><span
                                     class="ttr-label">Alumuni</span></a>
                         </li>
                         <li>
                             <a href="/admin/add-alumuni" class="ttr-material-button"><span class="ttr-label">Create
                                     Alumuni</span></a>
                         </li>

                     </ul>
                 </li>





             </ul>
             <!-- sidebar menu end -->
         </nav>
         <!-- sidebar menu end -->
     </div>
 </div>
