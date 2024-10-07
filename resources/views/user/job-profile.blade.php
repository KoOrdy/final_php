<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/png" href="assets/img/fav.png">
      <title>Application</title>
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
      <div class="profile-cover text-center">
         <img class="img-fluid" src="assets/img/background_edit/Untitled-3.png" alt="">
      </div>
      <div class="bg-white shadow-sm border-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="d-flex align-items-center py-3">
                     <div class="profile-left">
                        <h5 class="font-weight-bold text-dark mb-1 mt-0">Senior Ruby Developer</h5>
                        <p class="mb-0 text-muted"><a class="mr-2 font-weight-bold" href="#">Envato</a> <i class="feather-map-pin"></i> Melbourne, AU</p>
                     </div>
                     <div class="profile-right ml-auto">
                        <button type="button" class="btn btn-primary"> &nbsp; Apply &nbsp; </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="py-4">
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                  <div class="box shadow-sm border rounded bg-white mb-3">
                      <div class="box-title border-bottom p-3">
                          <h6 class="m-0">Form</h6>
                      </div>
                      <div class="box-body p-3">
                        <form>
                            <div class="form-group">
                                <label for="name" class="font-weight-bold">Name</label>
                                <input type="text" class="form-control professional" id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control professional" id="email" placeholder="Enter your email" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block professional">Submit</button>
                        </form>
                     </div>                    
                  </div>
              </main>
              

               <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12"></main>
                  <div class="box shadow-sm border rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Overview</h6>
                     </div>
                     <div class="box-body p-3">
                        <p>Headquartered in Melbourne, Australia, Envato is a completely online company with an ecosystem of sites and services to help people get creative. We’ve consistently been named as one of the Best Places to Work in Australia, since 2015, in the BRW Awards , and we’ve also been awarded the title of Australia's Coolest Company for Women and Diversity by JobAdvisor.</p>
                        <p class="mb-0">Envato was found in 2006 and, since then, we’ve helped a community of creative sellers earn more than $500 Million . Millions of people around the world choose our marketplace, studio and courses to buy files, hire freelancers, or learn the skills needed to build websites, videos, apps, graphics and more. Find out more at Envato Market , Envato Elements , Envato Sites , Envato Studio and Tuts+... 
                        </p>
                     </div>
                  </div>
                  
                  
               </main>
               <aside>
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Job Details</h6>
                     </div>
                     <div class="box-body">
                        <table class="table table-borderless mb-0">
                           <tbody>
                              <tr class="border-bottom">
                                 <th class="p-3">Seniority Level</th>
                                 <td class="p-3">Mid-Senior level
                                 </td>
                              </tr>
                              <tr class="border-bottom">
                                 <th class="p-3">Industry</th>
                                 <td class="p-3">Internet Information Technology & Services</td>
                              </tr>
                              <tr class="border-bottom">
                                 <th class="p-3">Employment Type</th>
                                 <td class="p-3">Full-time
                                 </td>
                              </tr>
                              <tr class="border-bottom">
                                 <th class="p-3">Job Functions</th>
                                 <td class="p-3">Other</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </aside>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript -->
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- slick Slider JS-->
      <script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="assets/js/osahan.js"></script>
   </body>
</html>
