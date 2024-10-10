<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Posts</title>
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
   <div class="py-4">
      <div class="container">
         <div class="row">
            <!-- Main Content -->
            <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

               <div class="box shadow-sm border rounded bg-white mb-3 osahan-share-post">
                  <ul class="nav nav-justified border-bottom osahan-line-tab" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="feather-edit"></i> Share an update</a>
                     </li>

                  </ul>

                  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

                     @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endif

                     @if(session('success'))
                     <p class="alert alert-success">
                        {{session('success')}}
                     </p>
                     @endif
                     @csrf
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="p-3 d-flex align-items-center w-100">
                              <!-- Profile Picture Section -->
                              <div class="profile-picture position-relative me-3">
                                 <img class="rounded-circle border" src="{{ asset('storage/' . auth()->user()->profile_picture) }}" width="50" alt="Profile Picture">
                              </div>

                              <!-- Textarea for Status Update -->
                              <div class="w-100">
                                 <textarea
                                    name="content"
                                    placeholder="What's on your mind?"
                                    class="form-control border-0 shadow-sm rounded-3 p-2"
                                    rows="2"
                                    style="resize: none; background-color: #f8f9fa;">
        </textarea>
                              </div>
                           </div>

                        </div>

                     </div>

                     <div class="p-3 w-100">
                        <label for="photo" class="font-weight-bold">Upload a Photo:</label>
                        <div class="custom-file">
                           <input type="file" name="image" id="photo" class="custom-file-input">
                           <label class="custom-file-label" for="photo">Choose file...</label>
                        </div>
                     </div>

                     <div class="border-top p-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-lg d-flex align-items-center">
                           <i class="fas fa-paper-plane mr-2"></i> Post Status
                        </button>
                     </div>

                  </form>

                  @foreach ($users as $user)
                  @foreach ($user->posts as $post)
                  <div class="user-info">
                     <div class="box shadow-sm border rounded bg-white mb-3 osahan-post">
                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle"
                                 src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('default-profile.png') }}"
                                 alt="{{ $user->name }}"
                                 width="50" height="50">
                           </div>
                           <div class="font-weight-bold">
                              <div class="text-truncate">{{ $user->name }}</div>
                           </div>
                        </div>


                        <div class="p-3 border-bottom osahan-post-body">
                           <p class="mb-0">{{ $post->content }}</p>

                           @if($post->image)
                           <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" alt="Post Image" />
                           @endif
                        </div>

                        <div class="p-3 border-bottom osahan-post-footer">
                           <a href="#" class="mr-3 text-secondary"><i class="feather-heart text-danger"></i></a>
                           <a href="#" class="mr-3 text-secondary"><i class="feather-message-square"></i></a>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endforeach





            </main>

            <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
               <div class="box mb-3 shadow-sm border rounded bg-white profile-box text-center">
                  <div class="py-4 px-3 border-bottom">
                     <img src="{{ asset('storage/' . auth()->user()->profile_picture)}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
                     <h5 class="font-weight-bold text-dark mb-1 mt-4">{{auth()->user()->name}}</h5>
                     <p class="mb-0 text-muted">{{auth()->user()->bio}}</p>
                  </div>

                  <div class="overflow-hidden border-top">
                     <a class="font-weight-bold p-3 d-block" href="{{url('/users/profile')}}"> View my profile </a>
                  </div>
               </div>
            </aside>

         </div>
      </div>
   </div>
   <!-- Bootstrap core JavaScript -->
   <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <!-- slick Slider JS
      <script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script> -->
   <!-- Custom scripts for all pages-->
   <script src="{{asset('js/osahan.js')}}"></script>
</body>

</html>