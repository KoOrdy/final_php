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
         <a class="navbar-brand mr-2" href="index.html">
            <img src="assets/img/logo.gif" alt="" style="width: 50px; height: auto;">
         </a>

         <ul class="navbar-nav ml-auto d-flex align-items-center">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
               <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="feather-search mr-2"></i>
               </a>
               <!-- Dropdown - Messages -->
               <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in"
                  aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                     <div class="input-group">
                        <input type="text" class="form-control border-0 shadow-none"
                           placeholder="Search people, jobs and more..." aria-label="Search"
                           aria-describedby="basic-addon2">
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
               <a class="nav-link" href="jobs.html"><i class="feather-briefcase mr-2"></i><span
                     class="d-none d-lg-inline">Jobs</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="jobs.html"><i class="feather-users mr-2"></i><span
                     class="d-none d-lg-inline">My Jobs</span></a>
            </li>
            <li class="nav-item"></li>
            <a class="nav-link" href="job-profile.html"><i class="feather-message-square mr-2"></i><span
                  class="d-none d-lg-inline">Application</span></a>
            </li>


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
               <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
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
            <aside class="col-md-4">
               <div class="mb-3 border rounded bg-white profile-box text-center w-10">
                  <div class="p-4 d-flex align-items-center">
                     <img src="assets/img/66.png" class="img-fluid rounded-circle" alt="Responsive image">
                     <div class="p-4">
                        <label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture"
                           class="btn btn-info m-0" for="fileAttachmentBtn">
                           <i class="feather-image"></i>
                           <input id="fileAttachmentBtn" name="file-attachment" type="file" class="d-none">
                        </label>
                        <button data-toggle="tooltip" data-placement="top" data-original-title="Delete" type="submit"
                           class="btn btn-danger"><i class="feather-trash-2"></i></button>
                     </div>
                  </div>
               </div>
               <div class="border rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">About</h6>
                     <p class="mb-0 mt-0 small">Tell about yourself in two sentences.
                     </p>
                  </div>
                  <div class="box-body">
                     <div class="p-3 border-bottom">
                        <div class="form-group mb-4">
                           <label class="mb-1">BIO</label>
                           <div class="position-relative">
                              <textarea class="form-control" rows="4" name="text"
                                 placeholder="Enter Bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor :)</textarea>
                           </div>
                        </div>

                     </div>
                     <div class="overflow-hidden text-center p-3">
                        <a class="font-weight-bold btn btn-light rounded p-3 d-block" href="#"> SAVE </a>
                     </div>
                  </div>
               </div>
               <div class="border rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">Social profiles</h6>
                     <p class="mb-0 mt-0 small">Add elsewhere links to your profile.
                     </p>
                  </div>
                  <div class="box-body">
                     <div class="p-3 border-bottom">
                        <div class="position-relative icon-form-control mb-2">
                           <i class="feather-instagram position-absolute text-warning"></i>
                           <input placeholder="Add Instagram link" type="text" class="form-control">
                        </div>
                        <div class="position-relative icon-form-control mb-2">
                           <i class="feather-facebook position-absolute text-primary"></i>
                           <input placeholder="Add Facebook link" type="text" class="form-control">
                        </div>
                        <div class="position-relative icon-form-control mb-2">
                           <i class="feather-twitter position-absolute text-info"></i>
                           <input placeholder="Add Twitter link" type="text" class="form-control">
                        </div>
                        <div class="position-relative icon-form-control mb-2">
                           <i class="feather-youtube position-absolute text-danger"></i>
                           <input placeholder="Add Youtube link" type="text" class="form-control">
                        </div>
                        <div class="position-relative icon-form-control mb-0">
                           <i class="feather-github position-absolute text-dark"></i>
                           <input placeholder="Add Github link" type="text" class="form-control">
                        </div>
                     </div>
                     <div class="overflow-hidden text-center p-3">
                        <a class="font-weight-bold btn btn-light rounded p-3 d-block" href="#"> Update Social Profiles
                        </a>
                     </div>
                  </div>
               </div>
            </aside>
            <main class="col-md-8">
               <div class="border rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">Edit Basic Info</h6>
                     <p class="mb-0 mt-0 small">Lorem ipsum dolor sit amet, consecteturs.
                     </p>
                  </div>
                  <div class="box-body p-3">
                     <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="nameLabel" class="form-label">
                                    Name
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="Gurdeep Osahan"
                                       placeholder="Enter your name" aria-label="Enter your name" required=""
                                       aria-describedby="nameLabel" data-msg="Please enter your name."
                                       data-error-class="u-has-error" data-success-class="u-has-success">
                                    <small class="form-text text-muted">Displayed on your public profile, notifications
                                       and other places.</small>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="usernameLabel" class="form-label">
                                    Email
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="username" value="{{$user->email}}"
                                       placeholder="Enter your email" aria-label="Enter your username" required=""
                                       aria-describedby="usernameLabel" data-msg="Please enter your username."
                                       data-error-class="u-has-error" data-success-class="u-has-success">
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                        </div>
                        <label class="form-label">
                           Birth date
                           <span class="text-danger">*</span>
                        </label>
                        <div class="row">
                           <!-- Input -->
                           <div class="col-md-6 mb-3 mb-sm-6">
                              <div class="js-form-message">
                                 <div class="form-group">
                                    <select class="form-control custom-select" required=""
                                       data-msg="Please select month." data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                       <option value="">Select month</option>
                                       <option value="birthMonthSelect1">January</option>
                                       <option value="birthMonthSelect2">February</option>
                                       <option value="birthMonthSelect3">March</option>
                                       <option value="birthMonthSelect4" selected="selected">April</option>
                                       <option value="birthMonthSelect5">May</option>
                                       <option value="birthMonthSelect6">June</option>
                                       <option value="birthMonthSelect7">July</option>
                                       <option value="birthMonthSelect8">August</option>
                                       <option value="birthMonthSelect9">September</option>
                                       <option value="birthMonthSelect10">October</option>
                                       <option value="birthMonthSelect11">November</option>
                                       <option value="birthMonthSelect12">December</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-4 col-md-2 mb-3 mb-sm-6">
                              <div class="js-form-message">
                                 <div class="form-group">
                                    <select class="form-control custom-select" required=""
                                       data-msg="Please select date." data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                       <option value="">Select date</option>
                                       <option value="birthDateSelect1">1</option>
                                       <option value="birthDateSelect2">2</option>
                                       <option value="birthDateSelect3">3</option>
                                       <option value="birthDateSelect4">4</option>
                                       <option value="birthDateSelect5">5</option>
                                       <option value="birthDateSelect6">6</option>
                                       <option value="birthDateSelect7">7</option>
                                       <option value="birthDateSelect8">8</option>
                                       <option value="birthDateSelect9">9</option>
                                       <option value="birthDateSelect10">10</option>
                                       <option value="birthDateSelect11">11</option>
                                       <option value="birthDateSelect12" selected="selected">12</option>
                                       <option value="birthDateSelect13">13</option>
                                       <option value="birthDateSelect14">14</option>
                                       <option value="birthDateSelect15">15</option>
                                       <option value="birthDateSelect16">16</option>
                                       <option value="birthDateSelect17">17</option>
                                       <option value="birthDateSelect18">18</option>
                                       <option value="birthDateSelect19">19</option>
                                       <option value="birthDateSelect20">20</option>
                                       <option value="birthDateSelect21">21</option>
                                       <option value="birthDateSelect22">22</option>
                                       <option value="birthDateSelect23">23</option>
                                       <option value="birthDateSelect24">24</option>
                                       <option value="birthDateSelect25">25</option>
                                       <option value="birthDateSelect26">26</option>
                                       <option value="birthDateSelect27">27</option>
                                       <option value="birthDateSelect28">28</option>
                                       <option value="birthDateSelect29">29</option>
                                       <option value="birthDateSelect30">30</option>
                                       <option value="birthDateSelect31">31</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-4 col-md-2 mb-3 mb-sm-6">
                              <div class="js-form-message">
                                 <div class="form-group">
                                    <select class="form-control custom-select" required=""
                                       data-msg="Please select year." data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                       <option value="">Select year</option>
                                       <option value="birthYearSelect1900">1900</option>
                                       <option value="birthYearSelect1901">1901</option>
                                       <option value="birthYearSelect1902">1902</option>
                                       <option value="birthYearSelect1903">1903</option>
                                       <option value="birthYearSelect1904">1904</option>
                                       <option value="birthYearSelect1905">1905</option>
                                       <option value="birthYearSelect1906">1906</option>
                                       <option value="birthYearSelect1907">1907</option>
                                       <option value="birthYearSelect1908">1908</option>
                                       <option value="birthYearSelect1909">1909</option>
                                       <option value="birthYearSelect1910">1910</option>
                                       <option value="birthYearSelect1911">1911</option>
                                       <option value="birthYearSelect1912">1912</option>
                                       <option value="birthYearSelect1913">1913</option>
                                       <option value="birthYearSelect1914">1914</option>
                                       <option value="birthYearSelect1915">1915</option>
                                       <option value="birthYearSelect1916">1916</option>
                                       <option value="birthYearSelect1917">1917</option>
                                       <option value="birthYearSelect1918">1918</option>
                                       <option value="birthYearSelect1919">1919</option>
                                       <option value="birthYearSelect1920">1920</option>
                                       <option value="birthYearSelect1921">1921</option>
                                       <option value="birthYearSelect1922">1922</option>
                                       <option value="birthYearSelect1923">1923</option>
                                       <option value="birthYearSelect1924">1924</option>
                                       <option value="birthYearSelect1925">1925</option>
                                       <option value="birthYearSelect1926">1926</option>
                                       <option value="birthYearSelect1927">1927</option>
                                       <option value="birthYearSelect1928">1928</option>
                                       <option value="birthYearSelect1929">1929</option>
                                       <option value="birthYearSelect1930">1930</option>
                                       <option value="birthYearSelect1931">1931</option>
                                       <option value="birthYearSelect1932">1932</option>
                                       <option value="birthYearSelect1933">1933</option>
                                       <option value="birthYearSelect1934">1934</option>
                                       <option value="birthYearSelect1935">1935</option>
                                       <option value="birthYearSelect1936">1936</option>
                                       <option value="birthYearSelect1937">1937</option>
                                       <option value="birthYearSelect1938">1938</option>
                                       <option value="birthYearSelect1939">1939</option>
                                       <option value="birthYearSelect1940">1940</option>
                                       <option value="birthYearSelect1941">1941</option>
                                       <option value="birthYearSelect1942">1942</option>
                                       <option value="birthYearSelect1943">1943</option>
                                       <option value="birthYearSelect1944">1944</option>
                                       <option value="birthYearSelect1945">1945</option>
                                       <option value="birthYearSelect1946">1946</option>
                                       <option value="birthYearSelect1947">1947</option>
                                       <option value="birthYearSelect1948">1948</option>
                                       <option value="birthYearSelect1949">1949</option>
                                       <option value="birthYearSelect1950">1950</option>
                                       <option value="birthYearSelect1951">1951</option>
                                       <option value="birthYearSelect1952">1952</option>
                                       <option value="birthYearSelect1953">1953</option>
                                       <option value="birthYearSelect1954">1954</option>
                                       <option value="birthYearSelect1955">1955</option>
                                       <option value="birthYearSelect1956">1956</option>
                                       <option value="birthYearSelect1957">1957</option>
                                       <option value="birthYearSelect1958">1958</option>
                                       <option value="birthYearSelect1959">1959</option>
                                       <option value="birthYearSelect1960">1960</option>
                                       <option value="birthYearSelect1961">1961</option>
                                       <option value="birthYearSelect1962">1962</option>
                                       <option value="birthYearSelect1963">1963</option>
                                       <option value="birthYearSelect1964">1964</option>
                                       <option value="birthYearSelect1965">1965</option>
                                       <option value="birthYearSelect1966">1966</option>
                                       <option value="birthYearSelect1967">1967</option>
                                       <option value="birthYearSelect1968">1968</option>
                                       <option value="birthYearSelect1969">1969</option>
                                       <option value="birthYearSelect1970">1970</option>
                                       <option value="birthYearSelect1971">1971</option>
                                       <option value="birthYearSelect1972">1972</option>
                                       <option value="birthYearSelect1973">1973</option>
                                       <option value="birthYearSelect1974">1974</option>
                                       <option value="birthYearSelect1975">1975</option>
                                       <option value="birthYearSelect1976">1976</option>
                                       <option value="birthYearSelect1977">1977</option>
                                       <option value="birthYearSelect1978">1978</option>
                                       <option value="birthYearSelect1979">1979</option>
                                       <option value="birthYearSelect1980">1980</option>
                                       <option value="birthYearSelect1981">1981</option>
                                       <option value="birthYearSelect1982">1982</option>
                                       <option value="birthYearSelect1983">1983</option>
                                       <option value="birthYearSelect1984">1984</option>
                                       <option value="birthYearSelect1985">1985</option>
                                       <option value="birthYearSelect1986" selected="selected">1986</option>
                                       <option value="birthYearSelect1987">1987</option>
                                       <option value="birthYearSelect1988">1988</option>
                                       <option value="birthYearSelect1989">1989</option>
                                       <option value="birthYearSelect1990">1990</option>
                                       <option value="birthYearSelect1991">1991</option>
                                       <option value="birthYearSelect1992">1992</option>
                                       <option value="birthYearSelect1993">1993</option>
                                       <option value="birthYearSelect1994">1994</option>
                                       <option value="birthYearSelect1995">1995</option>
                                       <option value="birthYearSelect1996">1996</option>
                                       <option value="birthYearSelect1997">1997</option>
                                       <option value="birthYearSelect1998">1998</option>
                                       <option value="birthYearSelect1999">1999</option>
                                       <option value="birthYearSelect2000">2000</option>
                                       <option value="birthYearSelect2001">2001</option>
                                       <option value="birthYearSelect2002">2002</option>
                                       <option value="birthYearSelect2003">2003</option>
                                       <option value="birthYearSelect2004">2004</option>
                                       <option value="birthYearSelect2005">2005</option>
                                       <option value="birthYearSelect2006">2006</option>
                                       <option value="birthYearSelect2007">2007</option>
                                       <option value="birthYearSelect2008">2008</option>
                                       <option value="birthYearSelect2009">2009</option>
                                       <option value="birthYearSelect2010">2010</option>
                                       <option value="birthYearSelect2011">2011</option>
                                       <option value="birthYearSelect2012">2012</option>
                                       <option value="birthYearSelect2013">2013</option>
                                       <option value="birthYearSelect2014">2014</option>
                                       <option value="birthYearSelect2015">2015</option>
                                       <option value="birthYearSelect2016">2016</option>
                                       <option value="birthYearSelect2017">2017</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-4 col-md-2 mb-2">
                              <div class="js-form-message">
                                 <div class="form-group">
                                    <select class="form-control custom-select" required=""
                                       data-msg="Please select your gender." data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                       <option value="genderSelect1" selected="">Male</option>
                                       <option value="genderSelect2">Female</option>
                                       <option value="genderSelect3">Other</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                        </div>
                        <div class="row">
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="emailLabel" class="form-label">
                                    Email address
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="iamosahan@gmail.com"
                                       placeholder="Enter your email address" aria-label="Enter your email address"
                                       required="" aria-describedby="emailLabel"
                                       data-msg="Please enter a valid email address." data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                    <small class="form-text text-muted">We'll never share your email with anyone
                                       else.</small>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="locationLabel" class="form-label">
                                    Location
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="location" value="Ludhiana, Punjab"
                                       placeholder="Enter your location" aria-label="Enter your location" required=""
                                       aria-describedby="locationLabel" data-msg="Please enter your location."
                                       data-error-class="u-has-error" data-success-class="u-has-success">
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                        </div>
                        <div class="row">
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="organizationLabel" class="form-label">
                                    Organization
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="organization" value="Askbootsrap Ltd."
                                       placeholder="Enter your organization name"
                                       aria-label="Enter your organization name" required=""
                                       aria-describedby="organizationLabel"
                                       data-msg="Please enter your organization name" data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="websiteLabel" class="form-label">
                                    Website
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input class="form-control" type="url" name="website"
                                       value="https://askbootstrap.com/" placeholder="Enter your website"
                                       aria-label="Enter your website" required="" aria-describedby="websiteLabel"
                                       data-msg="Password enter a valid website" data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                    <small class="form-text text-muted">Your home page, blog or company site, e.g.
                                       http://example.com</small>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                        </div>
                        <div class="row">
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label id="phoneNumberLabel" class="form-label">
                                    Phone number
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input class="form-control" type="tel" name="phoneNumber" value="+91 85680 79956"
                                       placeholder="Enter your phone number" aria-label="Enter your phone number"
                                       required="" aria-describedby="phoneNumberLabel"
                                       data-msg="Please enter a valid phone number" data-error-class="u-has-error"
                                       data-success-class="u-has-success">
                                 </div>
                              </div>
                              <a class="d-inline-block u-text-muted" href="#">
                                 <span class="mr-1">+</span>
                                 Add phone number
                              </a>
                           </div>
                           <!-- End Input -->
                           <!-- Input -->
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">
                                 <label class="form-label">
                                    Preferred language
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <select class="custom-select">
                                       <option value="">Select language</option>
                                       <option value="languageSelect1" selected="">English</option>
                                       <option value="languageSelect2">Français</option>
                                       <option value="languageSelect3">Deutsch</option>
                                       <option value="languageSelect4">Português</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <!-- End Input -->
                        </div>
                     </form>
                  </div>
               </div>
               <div class="border rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">Experience
                     </h6>
                     <p class="mb-0 mt-0 small">Tell about your work, job, and other experiences.
                     </p>
                  </div>
                  <div class="box-body px-3 pt-3 pb-0">
                     <div class="row">
                        <div class="col-sm-6 mb-4">
                           <label id="FROM" class="form-label">FROM</label>
                           <!-- Input -->
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="From" aria-label="FROM"
                                 aria-describedby="FROM">
                           </div>
                           <!-- End Input -->
                        </div>
                        <div class="col-sm-6 mb-4">
                           <label id="TO" class="form-label">TO</label>
                           <!-- Input -->
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="TO" aria-label="TO"
                                 aria-describedby="TO">
                           </div>
                           <!-- End Input -->
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6 mb-4">
                           <label id="companyLabel" class="form-label">Company</label>
                           <!-- Input -->
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter your company title"
                                 aria-label="Enter your company title" aria-describedby="companyLabel">
                           </div>
                           <!-- End Input -->
                        </div>
                        <div class="col-sm-6 mb-4">
                           <label id="positionLabel" class="form-label">Position</label>
                           <!-- Input -->
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter your position"
                                 aria-label="Enter your position" aria-describedby="positionLabel">
                           </div>
                           <!-- End Input -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3 text-right">
                  <a class="font-weight-bold btn btn-link rounded p-3" href="#"> &nbsp;&nbsp;&nbsp;&nbsp; Cancel
                     &nbsp;&nbsp;&nbsp;&nbsp; </a>
                  <a class="font-weight-bold btn btn-primary rounded p-3" href="#"> &nbsp;&nbsp;&nbsp;&nbsp; Sava
                     Chenges &nbsp;&nbsp;&nbsp;&nbsp; </a>
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