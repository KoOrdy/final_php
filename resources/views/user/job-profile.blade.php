<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Job - Application</title>
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
         <h1 class="title">LinkedOut</h1>
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
                  <img class="img-profile rounded-circle" src="{{ asset('storage/' . auth()->user()->profile_picture)}}">
               </a>
               <!-- Dropdown - User Information -->
               <div class="dropdown-menu dropdown-menu-right shadow-sm">
                  <div class="p-3 d-flex align-items-center">
                     <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{ asset('storage/' . auth()->user()->profile_picture)}}" width="35px" alt="">
                        <div class="status-indicator bg-success"></div>
                     </div>
                     <div class="font-weight-bold">
                        <div class="text-truncate">{{auth()->user()->name}}</div>
                        <div class="small text-gray-500">{{auth()->user()->gender}}</div>
                     </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{url('/users/profile')}}"><i class="feather-edit mr-1"></i> My Profile</a>
                  <a class="dropdown-item" href="{{url('/users/edit-profile/'.auth()->user()->id)}}"><i class="feather-user mr-1"></i> Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                     @csrf

                     <a href="{{route('logout')}}" class="feather-log-out mr-1 font-weight-bold d-block"
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
   <div class="profile-cover text-center">
      <img class="img-fluid" src="assets/img/background_edit/Untitled-3.png" alt="">
   </div>
   <div class="bg-white shadow-sm border-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="align-items-center py-3">
                  <div class="profile-center">
                     <h2 class="font-weight-bold text-dark mb-1 mt-0 text-center">My Application</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="py-5">
      <div class="container">
         <div class="row g-4">

            <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
               <div class="card shadow-lg border-0 rounded-4 bg-light mb-5">
                  <div class="card-header text-center bg-primary text-white rounded-top-4 py-4">
                     <h6 class="m-0 fw-bold display-6">Apply for the Job</h6>
                  </div>
                  <div class="card-body p-5">
                     <form action="{{ route('application.store') }}" method="POST">

                        @csrf

                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::id()}}">

                        @if(session('success'))
                        <p class="alert alert-success">
                           {{session('success')}}
                        </p>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                           <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </div>
                        @endif

                        <div class="form-group mb-4">
                           <label for="name" class="fw-bold h5">Full Name</label>
                           <input name="name" type="text" class="form-control rounded-pill shadow-sm" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group mb-4">
                           <label for="phone_number" class="fw-bold h5">Phone Number</label>
                           <input name="phone_number" type="text" class="form-control rounded-pill shadow-sm" id="phone_number" placeholder="Enter you phone number" required>
                        </div>
                        <div class="form-group mb-4">
                           <label for="email" class="fw-bold h5">Email Address</label>
                           <input name="email" type="email" class="form-control rounded-pill shadow-sm" id="email" placeholder="Enter your email" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-lg py-2">Submit Application</button>
                     </form>
                  </div>
               </div>
            </main>

            <!-- Job Description Section -->
            <main class="col col-xl-6 order-xl-1 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
               <div class="card shadow-lg border-0 rounded-4 bg-light mb-5">
                  <div class="card-header bg-dark text-white rounded-top-4 py-4">
                     <h6 class="m-0 fw-bold display-6">Job Description</h6>
                  </div>
                  <div class="card-body p-5">
                     <p class="h5">{{$job->description}}</p>
                  </div>
               </div>
            </main>

            <!-- Job Details Section -->
            <aside class="col col-xl-12">
               <div class="card shadow-lg border-0 rounded-4 bg-light">
                  <div class="card-header bg-dark text-white rounded-top-4 py-4">
                     <h6 class="m-0 fw-bold display-6">Job Details</h6>
                  </div>
                  <div class="card-body p-4">
                     <table class="table table-borderless mb-0">
                        <tbody>
                           <tr class="border-bottom">
                              <th class="p-3 text-muted h5">Job Title</th>
                              <td class="p-3 h5">{{$job->job_title}}</td>
                           </tr>
                           <tr class="border-bottom">
                              <th class="p-3 text-muted h5">Company</th>
                              <td class="p-3 h5">{{$job->company}}</td>
                           </tr>
                           <tr class="border-bottom">
                              <th class="p-3 text-muted h5">Location</th>
                              <td class="p-3 h5"><i class="bi bi-geo-alt"></i> {{$job->location}}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </aside>
            <div class="container">
               <div class="py-2">
                  <div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>




   </div>
   <!-- Bootstrap core JavaScript -->
   <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{{asset('js/osahan.js')}}"></script>
</body>

</html>