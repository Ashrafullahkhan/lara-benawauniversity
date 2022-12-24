 <x-layout>
     <div class="page-banner ovbl-dark" style="background-image: url(assets/images/slider/slide2.jpg)">
         <div class="container">
             <div class="page-banner-entry">
                 <h1 class="text-white">Meet our Teachers</h1>

             </div>
         </div>
     </div>
     <div class="col-lg-12 ">
         <div class="teachers mt-20">
             <div class="row">
                 @foreach ($teacher as $row)
                     <div class="col-sm-3">
                         <div class="singel-teachers mt-30 text-center">
                             <div class="image">
                                 <img src="/storage/{{ $row->pic }}" alt="Teachers" />

                             </div>
                             <div class="cont">
                                 <a href="teachers-singel.html">
                                     <h6>{{ $row->name }}</h6>
                                     <span>{{ $row->job }}</span>
                                 </a>
                             </div>
                         </div>
                         <!-- singel teachers -->
                     </div>
                 @endforeach
             </div>
             <!-- row -->
         </div>
         <!-- teachers -->
     </div>

 </x-layout>
