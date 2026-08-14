 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu">

     <!-- Brand Logo Light -->
     <a href="#" class="logo logo-light">
         <span class="logo-lg">
             {{-- <span class="logo-fnt text-white">{{ admin_contact_details('name') }}</span> --}}
             <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
         </span>
         <span class="logo-sm">
             {{-- <span class="logo-fnt text-white">{{ admin_contact_details('name') }}</span> --}}
             <img src="{{ asset('assets/images/logo.png') }}" alt="small logo">
         </span>
     </a>

     <!-- Brand Logo Dark -->
     <a href="#" class="logo logo-dark">
         <span class="logo-lg">
             <img src="assets/images/logo-dark.png" alt="dark logo">
         </span>
         <span class="logo-sm">
             <img src="assets/images/logo.png" alt="small logo">
         </span>
     </a>

     <!-- Sidebar -left -->
     <div class="h-100" id="leftside-menu-container" data-simplebar>
         <!--- Sidemenu -->
         <ul class="side-nav">

             <li class="side-nav-title">Main</li>

             <li class="side-nav-item">
                 <a href="#" class="side-nav-link">
                     <i class="ri-dashboard-3-line"></i>
                     <span> Dashboard </span>
                 </a>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarBooking" aria-expanded="false"
                     aria-controls="sidebarBooking" class="side-nav-link">
                     <i class="ri-calendar-2-fill"></i>
                     <span> Bookings & Enquiries </span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarBooking">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">
                            Booking Lists</a>
                         </li>
                         {{-- <li>
                             <a href="{{ route('vehicle.enquiries.index') }}">
                                 Vehicle Enquiries
                             </a>
                         </li> --}}
                         {{-- <li>
                             <a href="{{ route('offline-bookings.index') }}">Offline Bookings</a>
                         </li> --}}

                         <li>
                             <a href="#">Failed Bookings</a>
                         </li>


                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPartnerPayments" aria-expanded="false"
                     aria-controls="sidebarPartnerPayments" class="side-nav-link">
                     <i class="ri-coin-line"></i>
                     <span> Partner Payments </span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarPartnerPayments">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">List Partner Payments</a>
                         </li>
                     </ul>
                 </div>
             </li>



             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPagesGst" aria-expanded="false"
                     aria-controls="sidebarPagesGst" class="side-nav-link">
                     <i class="bi bi-currency-rupee"></i>
                     <span> GST Settings </span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarPagesGst">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add GST</a>
                         </li>
                         <li>
                             <a href="#">List GST</a>
                         </li>
                         {{-- <li>
                             <a href="{{ route('gst-partner.index') }}">List Partner GST</a>
                         </li> --}}
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarComingSoon" aria-expanded="false"
                     aria-controls="sidebarComingSoon" class="side-nav-link">
                     <i class="ri-map-pin-time-line"></i>
                     <span>Coming Soon</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarComingSoon">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Coming Soon</a>
                         </li>
                         <li>
                             <a href="#">List Coming Soon</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarCity" aria-expanded="false" aria-controls="sidebarCity"
                     class="side-nav-link">
                     <i class="ri-map-pin-line"></i>
                     <span>Manage City</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarCity">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add City</a>
                         </li>
                         <li>
                             <a href="#">List City</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                     aria-controls="sidebarPagesAuth" class="side-nav-link">
                     <i class="ri-group-2-line"></i>
                     <span> Manage Partner </span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarPagesAuth">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Partner</a>
                         </li>
                         <li>
                             <a href="#">List Partner</a>
                         </li>
                         <li>
                             <a href="#">Delete Account Request</a>
                         </li>
                     </ul>
                 </div>
             </li>


             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarHotel" aria-expanded="false"
                     aria-controls="sidebarHotel" class="side-nav-link">
                     <i class="bi bi-building"></i>
                     <span> Manage Hotel</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarHotel">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Hotel</a>
                         </li>
                         <li>
                             <a href="#">Hotel List</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarPageFV" aria-expanded="false"
                     aria-controls="sidebarPageFV" class="side-nav-link">
                     <i class="bi bi-house-door"></i>
                     <span> Manage Farm.../Villa </span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarPageFV">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Farmhouse/Villa</a>
                         </li>
                         <li>
                             <a href="#">List Farmhouse/Villa</a>
                         </li>
                     </ul>
                 </div>
             </li>



             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarVehicle" aria-expanded="false"
                     aria-controls="sidebarVehicle" class="side-nav-link">
                     <i class="bi bi-car-front"></i>
                     <span> Manage Vehicle</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarVehicle">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Vehicle</a>
                         </li>
                         <li>
                             <a href="#">List Vehicle</a>
                         </li>
                     </ul>
                 </div>
             </li>


             {{-- <  li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarFood" aria-expanded="false" aria-controls="sidebarFood" class="side-nav-link">
                                <i class=" ri-restaurant-fill"></i>
                                <span>Manage Food</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarFood">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('food.create') }}">Add Food</a>
                                    </li>
                                    <li>
                                        <a href="{{route('food.index')}}">List Food</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}


             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarAmenity" aria-expanded="false"
                     aria-controls="sidebarAmenity" class="side-nav-link">
                     <i class="bi bi-lamp"></i>
                     <span>Manage Amenities</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarAmenity">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Amenity</a>
                         </li>
                         <li>
                             <a href="#">List Amenity</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarCoupon" aria-expanded="false"
                     aria-controls="sidebarCoupon" class="side-nav-link">
                     <i class="bi bi-receipt"></i>
                     <span>Manage Coupons</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarCoupon">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Coupons</a>
                         </li>
                         <li>
                             <a href="#">List Coupons</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a href="#" class="side-nav-link">
                     <i class="bi bi-star-half"></i>
                     {{-- <span class="badge bg-success float-end" id="rating_notification">0</span> --}}
                     <span> Ratings </span>
                 </a>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarOffer" aria-expanded="false"
                     aria-controls="sidebarOffer" class="side-nav-link">
                     <i class="bi bi-percent"></i>
                     <span>Manage Offers</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarOffer">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Offer</a>
                         </li>
                         <li>
                             <a href="#">List Offers</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a href="#" class="side-nav-link">
                     <i class="ri-file-user-line"></i>
                     <span> Contact Details </span>
                 </a>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarLegalInfo" aria-expanded="false"
                     aria-controls="sidebarLegalInfo" class="side-nav-link">
                     <i class="ri-information-line"></i>
                     <span>Legal Information</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarLegalInfo">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add Terms & Conditions</a>
                         </li>
                         <li>
                             <a href="#">List Terms & Conditions</a>
                         </li>
                         <li>
                             <a href="#">Add Cancellation & Refunds</a>
                         </li>
                         <li>
                             <a href="#">List Cancellation & Refunds</a>
                         </li>
                         <li>
                             <a href="#">Add Privacy Policy</a>
                         </li>
                         <li>
                             <a href="#">List Privacy Policy</a>
                         </li>
                         <li>
                             <a href="#">Disclaimer</a>
                         </li>
                     </ul>
                 </div>
             </li>

             <li class="side-nav-item">
                 <a data-bs-toggle="collapse" href="#sidebarFAQ" aria-expanded="false" aria-controls="sidebarFAQ"
                     class="side-nav-link">
                     <i class="ri-question-answer-line"></i>
                     <span>Manage FAQs</span>
                     <span class="menu-arrow"></span>
                 </a>
                 <div class="collapse" id="sidebarFAQ">
                     <ul class="side-nav-second-level">
                         <li>
                             <a href="#">Add FAQs Category</a>
                         </li>
                         <li>
                             <a href="#">List FAQs Categories</a>
                         </li>
                         <li>
                             <a href="#">Add FAQs</a>
                         </li>
                         <li>
                             <a href="#">List FAQs</a>
                         </li>
                     </ul>
                 </div>
             </li>

         </ul>
         <!--- End Sidemenu -->

         <div class="clearfix"></div>
     </div>
 </div>
 <!-- ========== Left Sidebar End ========== -->
