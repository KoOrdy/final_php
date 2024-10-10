<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Edit - Post</title>
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

   
   <div class="bg-white shadow-sm border-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="align-items-center py-3">
                  <div class="profile-center">
                     <h2 class="font-weight-bold text-dark mb-1 mt-0 text-center">Edit my Post</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <br>
   
   <div class="table-responsive">
    <!-- Error Display Section -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Post Update Form -->
    <form action="{{url('users/update-post/' . $post->id)}}" method="post" enctype="multipart/form-data" class="mx-auto p-4 bg-light shadow-sm rounded-3" style="max-width: 500px;">
        @csrf
        @method('PUT')

        <!-- Post Content Input -->
        <div class="form-group mb-3">
            <label for="content" class="form-label font-weight-bold">Change Post Title</label>
            <input 
                type="text" 
                name="content" 
                id="content" 
                class="form-control" 
                placeholder="Enter Title" 
                value="{{old('content', $post->content)}}" 
                required>
        </div>

        <!-- Image Upload Input -->
        <div class="p-3 w-100">
                        <label for="photo" class="font-weight-bold">Change the Photo:</label>
                        <div class="custom-file">
                           <input type="file" name="image" id="photo" class="custom-file-input">
                           <label class="custom-file-label" for="photo">Choose file...</label>
                        </div>
                     </div>

        <!-- Display Existing Image -->
        <div class="text-center mb-4">
            <img src="{{asset('/storage/' . $post->image)}}" class="img-fluid rounded" width="200" alt="Post Image">
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">
                Update Post
            </button>
        </div>
    </form>
</div>

</body>
</html>





   

