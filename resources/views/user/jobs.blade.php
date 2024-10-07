<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="assets/img/fav.png">
      <title>Posted Jobs</title>
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick-theme.min.css"/>
      <!-- Feather Icon-->
      <link href="assets/vendor/icons/feather.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap core CSS -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/custom.css" rel="stylesheet">
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand navbar-light osahan-nav-top p-0" id="header">
         <div class="container">
            <a class="navbar-brand mr-2" href="index.html">
               <img src="assets/img/logo.gif" alt="" style="width: 50px; height: auto;">
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
                  <a class="nav-link" href="jobs.html"><i class="feather-briefcase mr-2"></i><span class="d-none d-lg-inline">Jobs</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="jobs.html"><i class="feather-users mr-2"></i><span class="d-none d-lg-inline">My Jobs</span></a>
               </li>
               <li class="nav-item"></li>
                  <a class="nav-link" href="job-profile.html"><i class="feather-message-square mr-2"></i><span class="d-none d-lg-inline">Application</span></a>
               </li>
              
               
               <!-- Nav Item - User Information -->
               <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
                  <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="img-profile rounded-circle" src="assets/img/66.png">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow-sm">
                     <div class="p-3 d-flex align-items-center">
                        <div class="dropdown-list-image mr-3">
                           <img class="rounded-circle" src="assets/img/66.png" alt="">
                           <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                           <div class="text-truncate">Gurdeep Osahan</div>
                           <div class="small text-gray-500">UI/UX Designer</div>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="profile.html"><i class="feather-edit mr-1"></i> My Account</a>
                     <a class="dropdown-item" href="edit-profile.html"><i class="feather-user mr-1"></i> Edit Profile</a>
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
               <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                  <div class="box shadow-sm border rounded bg-white mb-3 osahan-share-post">
                    
                     <ul class="nav border-bottom osahan-line-tab" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Category</a>
                        </li>
                       
                        
                     </ul>
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="p-3 job-tags">
                              <button type="button" class="btn btn-outline-secondary btn-sm mr-1">All</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm mr-1">Sales</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm mr-1">Design</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm mr-1">Products</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm mr-1">Developer</button>
                              <button type="button" class="btn btn-outline-secondary btn-sm mr-1">Business Analyst</button>
                           </div>
                           <div class="p-3 border-top">
                              <div class="row">
                                 <div class="col-md-6">
                                    <a href="job-profile.html">
                                       <div class="border job-item mb-3">
                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <h6 class="font-weight-bold text-dark mb-0 text-truncate">UI/UX designer</h6>
                                                <div class="text-truncate text-primary">Envato</div>
                                                <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                                             </div>
                                          </div>

                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <div class="small text-gray-500"><i class="feather-edit"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit cumque ipsa dignissimos vero itaque? Illo blanditiis odio explicabo nobis.</div>
                                             </div>
                                          </div>
                                          
                                          <div class="p-3 job-item-footer">
                                             <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                             <div>
                                                <button type="button" class="btn btn-primary"> &nbsp; Apply &nbsp; </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>

                                 <div class="col-md-6">
                                    <a href="job-profile.html">
                                       <div class="border job-item mb-3">
                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <h6 class="font-weight-bold text-dark mb-0 text-truncate">UI/UX designer</h6>
                                                <div class="text-truncate text-primary">Envato</div>
                                                <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                                             </div>
                                          </div>

                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <div class="small text-gray-500"><i class="feather-edit"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit cumque ipsa dignissimos vero itaque? Illo blanditiis odio explicabo nobis.</div>
                                             </div>
                                          </div>
                                          
                                          <div class="p-3 job-item-footer">
                                             <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                             <div>
                                                <button type="button" class="btn btn-primary"> &nbsp; Apply &nbsp; </button>
                                             </div>
                                          </div>

                                          
                                       </div>
                                    </a>
                                 </div>

                                 <div class="col-md-6">
                                    <a href="job-profile.html">
                                       <div class="border job-item mb-3">
                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <h6 class="font-weight-bold text-dark mb-0 text-truncate">UI/UX designer</h6>
                                                <div class="text-truncate text-primary">Envato</div>
                                                <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                                             </div>
                                          </div>

                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <div class="small text-gray-500"><i class="feather-edit"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit cumque ipsa dignissimos vero itaque? Illo blanditiis odio explicabo nobis.</div>
                                             </div>
                                          </div>
                                          
                                          <div class="p-3 job-item-footer">
                                             <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                             <div>
                                                <button type="button" class="btn btn-primary"> &nbsp; Apply &nbsp; </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>

                                 <div class="col-md-6">
                                    <a href="job-profile.html">
                                       <div class="border job-item mb-3">
                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <h6 class="font-weight-bold text-dark mb-0 text-truncate">UI/UX designer</h6>
                                                <div class="text-truncate text-primary">Envato</div>
                                                <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                                             </div>
                                          </div>

                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <div class="small text-gray-500"><i class="feather-edit"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit cumque ipsa dignissimos vero itaque? Illo blanditiis odio explicabo nobis.</div>
                                             </div>
                                          </div>
                                          
                                          <div class="p-3 job-item-footer">
                                             <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                             <div>
                                                <button type="button" class="btn btn-primary"> &nbsp; Apply &nbsp; </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>

                                 <div class="col-md-6">
                                    <a href="job-profile.html">
                                       <div class="border job-item mb-3">
                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <h6 class="font-weight-bold text-dark mb-0 text-truncate">UI/UX designer</h6>
                                                <div class="text-truncate text-primary">Envato</div>
                                                <div class="small text-gray-500"><i class="feather-map-pin"></i> India, Punjab</div>
                                             </div>
                                          </div>

                                          <div class="d-flex align-items-center p-3 job-item-header">
                                             <div class="overflow-hidden mr-2">
                                                <div class="small text-gray-500"><i class="feather-edit"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit cumque ipsa dignissimos vero itaque? Illo blanditiis odio explicabo nobis.</div>
                                             </div>
                                          </div>
                                          
                                          <div class="p-3 job-item-footer">
                                             <small class="text-gray-500"><i class="feather-clock"></i> Posted 3 Days ago</small>
                                             <div>
                                                <button type="button" class="btn btn-primary"> &nbsp; Apply &nbsp; </button>
                                             </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
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
