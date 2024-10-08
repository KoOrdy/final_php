<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>My Profile</title>
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="{{{asset('vendor/slick/slick.min.css')}}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick-theme.min.css')}}"/>
      <!-- Feather Icon-->
      <link href="{{asset('vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">
      <!-- Bootstrap core CSS -->
      <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <link href="{{asset('css/custom.css')}}" rel="stylesheet">
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand navbar-light osahan-nav-top p-0" id="header">
         <div class="container">
            <a class="navbar-brand mr-2" href="{{url('/users')}}">
               <img src="{{asset('img/logo.gif')}}" alt="" style="width: 50px; height: auto;">
           </a>
           
            
            <ul class="navbar-nav ml-auto d-flex align-items-center">
               <!-- Nav Item - Search Dropdown (Visible Only XS) -->
               <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="feather-search mr-2"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
                     <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                           <input type="text" class="form-control border-0 shadow-none" placeholder="Search people, jobs and more..." aria-label="Search" aria-describedby="basic-addon2">
                           <div class="input-group-append">
                              <button class="btn" type="button">
                              <i class="feather-search"></i>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/users')}}"><i class="feather-home mr-2"></i><span class="d-none d-lg-inline">Posts</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/users/jobs')}}"><i class="feather-briefcase mr-2"></i><span class="d-none d-lg-inline">Jobs</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('/users/myjobs')}}"><i class="feather-users mr-2"></i><span class="d-none d-lg-inline">My Jobs</span></a>
               </li>
              
               
               <!-- Nav Item - User Information -->
               <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
                  <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="img-profile rounded-circle" src="{{asset('img/66.png')}}">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow-sm">
                     <div class="p-3 d-flex align-items-center">
                        <div class="dropdown-list-image mr-3">
                           <img class="rounded-circle" src="{{asset('img/66.png')}}" alt="">
                           <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                           <div class="text-truncate">Gurdeep Osahan</div>
                           <div class="small text-gray-500">UI/UX Designer</div>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{url('/users/profile')}}"><i class="feather-edit mr-1"></i> My Account</a>
                     <a class="dropdown-item" href="{{url('/users/edit-profile')}}"><i class="feather-user mr-1"></i> Edit Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="sign-in.html"><i class="feather-log-out mr-1"></i> Logout</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <div class="py-4">
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <aside class="col col-xl-3 order-xl-1 col-lg-12 order-lg-1 col-12">
                  <div class="box mb-3 shadow-sm border rounded bg-white profile-box text-center">
                     <div class="py-4 px-3 border-bottom">
                        <img src="assets/img/66.png" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
                        <h5 class="font-weight-bold text-dark mb-1 mt-4">Gurdeep Osahan</h5>
                        <p class="mb-0 text-muted">UI / UX Designer</p>
                     </div>
                     
                     <div class="overflow-hidden border-top">
                        <a class="font-weight-bold p-3 d-block" href="sign-in.html"> Log Out </a>
                     </div>
                  </div>
                 
               </aside>
               <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
                  <div class="box shadow-sm border rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">About You</h6>
                     </div>
                     <div class="box-body p-3">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                        <p class="mb-0">Find the most qualified people in the most unexpected places. Information for applicants to consider when applying for local positions. The largest community on the web to find and list jobs that aren't restricted by commutes or a specific location.
                        </p>
                     </div>
                  </div>
                  
               </main>
               
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript -->
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- slick Slider JS
      <script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script> -->
      <!-- Custom scripts for all pages-->
      <script src="{{asset('js/osahan.js')}}"></script>
   </body>
</html>
