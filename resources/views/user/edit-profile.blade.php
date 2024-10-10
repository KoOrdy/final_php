<!DOCTYPE html>
<html lang="en">

        <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit - Profile</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick-theme.min.css')}}" />
    <!-- Feather Icon-->
    <link href="{{asset('vendor/icons/feather.css')}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}"  rel="stylesheet">


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
                  <a class="dropdown-item" href="{{url('/users/profile')}}"><i class="feather-edit mr-1"></i> My Account</a>
                  <a class="dropdown-item" href="{{url('/users/edit-profile/'.auth()->user()->id)}}"><i class="feather-user mr-1"></i> Edit Profile</a>
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
    <div class="py-4">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <aside class="col-md-4">
                    <div class="mb-3 border rounded bg-white profile-box text-center w-10">
                        <div class="p-4 d-flex align-items-center">
                            <img src="{{asset( '/storage/' .$user->profile_picture)}}" width="100px" class="img-fluid rounded-circle" alt="Responsive image">
                            <div class="p-4">
                                <form action="{{ url('users/update-image/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="d-flex align-items-center">
                                        <label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture"
                                            class="btn btn-info m-0" for="fileAttachmentBtn">
                                            <i class="feather-image"></i> Update
                                            <input id="fileAttachmentBtn" name="profile_picture" type="file" class="d-none" required>
                                        </label>

                                        <div class="overflow-hidden text-center p-3">
                                            <button type="submit" name="action" value="update" class="font-weight-bold btn btn-light rounded p-3 d-block">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <a href="{{ url('users/delete-image/'.$user->id) }}" data-toggle="tooltip" data-placement="top"
                                data-original-title="Delete" class="btn btn-danger">
                                    <i class="feather-trash-2"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="border rounded bg-white mb-3">
                </div>

                </aside>
                <main class="col-md-8">
                    <div class="border rounded bg-white mb-3">
                        <div class="box-title border-bottom p-3">
                            <h6 class="m-0">Edit Basic Info</h6>
                            <p class="mb-0 mt-0 small">Lorem ipsum dolor sit amet, consecteturs.</p>
                        </div>
                        <div class="box-body p-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="js-validate" novalidate="novalidate" action="{{url('users/update-profile/'.$user->id)}}" method="POST">

                                @if(session('success'))
                                    <p class="alert alert-success">
                                        {{session('success')}}
                                    </p>
                                @endif

                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-sm-6 mb-2">
                                        <div class="js-form-message">
                                            <label id="nameLabel" class="form-label">Name<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}"
                                                        placeholder="Enter your name" aria-label="Enter your name" required
                                                        aria-describedby="nameLabel" data-msg="Please enter your name."
                                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                                <small class="form-text text-muted">Displayed on your public profile, notifications and other places.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-2">
                                        <div class="js-form-message">
                                            <label id="usernameLabel" class="form-label">Email<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" value="{{old('email',$user->email)}}"
                                                        placeholder="Enter your email" required
                                                        aria-describedby="usernameLabel" data-msg="Please enter your email."
                                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <label class="form-label">Birth date<span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="birthdate" required
                                                        value="{{old('birthdate',$user->birthdate)}}" data-msg="Please select your birth date."
                                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="js-form-message">
                                            <div class="form-group">
                                                <select class="form-control custom-select" id="gender" name="gender" required
                                                        data-msg="Please select your gender." data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                    <option value="" disabled>{{old('gender',$user->gender)}}</option>
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 mb-2">
                                        <div class="js-form-message">
                                            <label id="phoneNumberLabel" class="form-label">Phone number<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="tel" name="phone_number" value="{{old('phone_number',$user->phone_number)}}"
                                                        placeholder="Enter your phone number" required
                                                        aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number."
                                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-1">BIO<span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <textarea class="form-control" rows="4" name="bio"
                                    placeholder="Enter Bio">{{old('bio',$user->bio)}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mb-2">
                                        <div class="js-form-message">
                                            <label id="passwordLabel" class="form-label">Password<span class="text-danger">*</span></label>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Enter your password"
                                                        aria-describedby="passwordLabel" data-msg="Please enter your password."
                                                        data-error-class="u-has-error" data-success-class="u-has-success" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="overflow-hidden text-center p-3">
                                    <button type="submit" value="update" class="font-weight-bold btn btn-light rounded p-3 d-block">
                                        Save
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="border rounded bg-white mb-3">
                        <div class="box-title border-bottom p-3">
                            <h6 class="m-0">Posts
                            </h6>
                            <p class="mb-0 mt-0 small">Here you can edit your posts.
                            </p>
                        </div>

                        <div>
                            <table class="table text-nowrap mb-0 align-middle" >
                               
                                <tbody>

                                    @foreach (auth()->user()->posts as $post)
                                    <div class="user-info">
                                       <div class="box shadow-sm border rounded bg-white mb-3 osahan-post">
                                          <div class="p-3 d-flex align-items-center border-bottom osahan-post-header">
                                             <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" 
                                                   src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('default-profile.png') }}" 
                                                   alt="{{ auth()->user()->name }}" 
                                                   width="50" height="50">
                                                <div class="status-indicator bg-success"></div>
                                             </div>
                                             <div class="font-weight-bold">
                                                <div class="text-truncate">{{ auth()->user()->name }}</div>
                                             </div>
                                          </div>
                                 
                                          <div class="p-3 border-bottom osahan-post-body">
                                             <p class="mb-0">{{ $post->content }}</p>
                                 
                                             @if($post->image)
                                                <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="800"/>
                                             @endif
                                          </div>
                                 
                                          <div class="p-3 border-bottom osahan-post-footer">
                                             <a href="{{ url('users/edit-post/' . $post->id) }}" class="btn btn-warning">Update</a>
                                             <a href="{{ url('users/edit-profile/delete-post/' . $post->id) }}" class="btn btn-dark">Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </main>


            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/osahan.js"></script>
        </body>

</html>
