<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Posted Jobs</title>
   <!-- Slick Slider -->
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.min.css')}}" />
   <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick-theme.min.css')}}" />
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
               <a class="nav-link" href="{{url('/posts')}}"><i class="feather-home mr-2"></i><span class="d-none d-lg-inline">Posts</span></a>
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
                        <div class="text-truncate">{{$user->name}}</div>
                        <div class="small text-gray-500">{{$user->gender}}</div>
                     </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{url('/users/profile')}}"><i class="feather-edit mr-1"></i> My Account</a>
                  <a class="dropdown-item" href="{{url('/users/edit-profile/'.$user->id)}}"><i class="feather-user mr-1"></i> Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                     @csrf

                     <a href="{{route('logout')}}" class="feather-log-out mr-1"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                     </a>
                  </form>
               </div>
            </li>
         </ul>
      </div>
   </nav>

   <div class="bg-white shadow-sm border-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="align-items-center py-3">
                  <div class="profile-center">
                     <h2 class="font-weight-bold text-dark mb-1 mt-0 text-center">Jobs</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="py-4">
      <div class="container">
         <div class="row justify-content-center">
            <!-- Main Content -->
            <main class="col-lg-8 col-md-10 col-12">
               <div class="box shadow-lg rounded bg-white mb-4 osahan-share-post">

                  <ul class="nav border-bottom osahan-line-tab" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Category</a>
                     </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="p-3 job-tags">
                           <button type="button" class="btn btn-outline-primary btn-sm mr-1">All</button>
                           <button type="button" class="btn btn-outline-primary btn-sm mr-1">Sales</button>
                           <button type="button" class="btn btn-outline-primary btn-sm mr-1">Design</button>
                           <button type="button" class="btn btn-outline-primary btn-sm mr-1">Products</button>
                           <button type="button" class="btn btn-outline-primary btn-sm mr-1">Developer</button>
                           <button type="button" class="btn btn-outline-primary btn-sm mr-1">Business Analyst</button>
                        </div>
                        <div class="p-3 border-top">
                           <div class="row">
                              <!-- Job Item Start -->

                              @foreach ($jobs as $job)
                              <div class="col-md-6 mb-4">
                                 <a class="text-decoration-none">
                                    <div class="border rounded shadow-lg bg-white job-item p-4" style="transition: transform 0.3s ease; border: none;">
                                       <div class="d-flex align-items-center mb-3">
                                          <div class="mr-3">
                                             <h5 class="font-weight-bold text-dark mb-2">Title: {{ $job->job_title }}</h5>
                                             <h6 class="text-secondary">Company: {{ $job->company }}</h6>
                                             <div class="text-muted"><i class="feather-map-pin"></i> {{ $job->location }}</div>
                                          </div>
                                       </div>
                                       <div class="mb-3">
                                          <p class="text-muted"><i class="feather-edit"></i> {{ $job->description }}</p>
                                       </div>
                                       <div class="d-flex justify-content-end">
                                          <a href="{{ url('/users/application' , ['job_id' => $job->id]) }}" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm" style="transition: background-color 0.2s ease;">
                                             Apply
                                          </a>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              @endforeach



                              <!-- Job Item End -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>
         </div>
      </div>
   </div>

   <!-- Include Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   </div>
   <!-- Bootstrap core JavaScript -->
   <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <!-- Custom scripts for all pages-->
   <script src="{{asset('js/osahan.js')}}"></script>
</body>

</html>