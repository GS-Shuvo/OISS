<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Without menu - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
<style>
 .dropdown-menu.show {
  -webkit-animation: fadeIn 0.3s alternate;
  /* Safari 4.0 - 8.0 */
  animation: fadeIn 0.3s alternate;
}

.nav-item.dropdown.dropdown-mega {
  position: static;
}
.nav-item.dropdown.dropdown-mega .dropdown-menu {
  width: 90%;
  top: auto;
  left: 5%;
}

.navbar-toggler {
  border: none;
  padding: 0;
  outline: none;
}
.navbar-toggler:focus {
  box-shadow: none;
}
.navbar-toggler .hamburger-toggle {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 50px;
  z-index: 11;
  float: right;
}
.navbar-toggler .hamburger-toggle .hamburger {
  position: absolute;
  transform: translate(-50%, -50%) rotate(0deg);
  left: 50%;
  top: 50%;
  width: 50%;
  height: 50%;
  pointer-events: none;
}
.navbar-toggler .hamburger-toggle .hamburger span {
  width: 100%;
  height: 4px;
  position: absolute;
  background: #333;
  border-radius: 2px;
  z-index: 1;
  transition: transform 0.2s cubic-bezier(0.77, 0.2, 0.05, 1), background 0.2s cubic-bezier(0.77, 0.2, 0.05, 1), all 0.2s ease-in-out;
  left: 0px;
}
.navbar-toggler .hamburger-toggle .hamburger span:first-child {
  top: 10%;
  transform-origin: 50% 50%;
  transform: translate(0% -50%) !important;
}
.navbar-toggler .hamburger-toggle .hamburger span:nth-child(2) {
  top: 50%;
  transform: translate(0, -50%);
}
.navbar-toggler .hamburger-toggle .hamburger span:last-child {
  left: 0px;
  top: auto;
  bottom: 10%;
  transform-origin: 50% 50%;
}
.navbar-toggler .hamburger-toggle .hamburger.active span {
  position: absolute;
  margin: 0;
}
.navbar-toggler .hamburger-toggle .hamburger.active span:first-child {
  top: 45%;
  transform: rotate(45deg);
}
.navbar-toggler .hamburger-toggle .hamburger.active span:nth-child(2) {
  left: 50%;
  width: 0px;
}
.navbar-toggler .hamburger-toggle .hamburger.active span:last-child {
  top: 45%;
  transform: rotate(-45deg);
}

.icons {
  display: inline-flex;
  margin-left: auto;
}
.icons a {
  transition: all 0.2s ease-in-out;
  padding: 0.2rem 0.4rem;
  color: #ccc !important;
  text-decoration: none;
}
.icons a:hover {
  color: white;
  text-shadow: 0 0 30px white;
}
</style>


  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page">

          <!-- Start Mega Menu HTML -->
          <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark shadow">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}">OISS</span></a>
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
                <div class="hamburger-toggle">
                  <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>
              </button>
              <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Multilevel</a>
                    <ul class="dropdown-menu shadow">
                      <li><a class="dropdown-item" href="#">Gallery</a></li>
                      <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                      <li class="dropend">
                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Submenu Right</a>
                        <ul class="dropdown-menu shadow">
                          <li><a class="dropdown-item" href=""> Second level 1</a></li>
                          <li><a class="dropdown-item" href=""> Second level 2</a></li>
                          <li><a class="dropdown-item" href=""> Second level 3</a></li>
                          <li class="dropend">
                            <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Let's go deeper!</a>
                            <ul class="dropdown-menu dropdown-submenu shadow">
                              <li><a class="dropdown-item" href=""> Third level 1</a></li>
                              <li><a class="dropdown-item" href=""> Third level 2</a></li>
                              <li><a class="dropdown-item" href=""> Third level 3</a></li>
                              <li><a class="dropdown-item" href=""> Third level 4</a></li>
                              <li><a class="dropdown-item" href=""> Third level 5</a></li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href=""> Third level 5</a></li>
                        </ul>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown dropdown-mega position-static">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Megamenu</a>
                    <div class="dropdown-menu shadow">
                      <div class="mega-content px-4">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-12 col-sm-4 col-md-3 py-4">
                              <h5>Pages</h5>
                              <div class="list-group">
                                <a class="list-group-item" href="#">Accomodations</a>
                                <a class="list-group-item" href="#">Terms & Conditions</a>
                                <a class="list-group-item" href="#">Privacy</a>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 py-4">
                              <h5>Card</h5>
                              <div class="card">
                          <img src="img/banner-image.jpg" class="img-fluid" alt="image">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 py-4">
                              <h5>About CodeHim</h5>
                                <p><b>CodeHim</b> is one of the BEST developer websites that provide web designers and developers with a simple way to preview and download a variety of free code & scripts.</p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 py-4">
                              <h5>Damn, so many</h5>
                              <div class="list-group">
                                <a class="list-group-item" href="#">Accomodations</a>
                                <a class="list-group-item" href="#">Terms & Conditions</a>
                                <a class="list-group-item" href="#">Privacy</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex ms-auto mr-5" style="margin-right: 50px;">
                    <div class="input-group">
                        <input class="form-control border-0 mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary border-0" type="submit">Search</button>
                    </div>
                </form>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 sm:block ml-5">
                    @auth <button type="button" class="btn btn-outline-success">Success</button>
                        <a href="{{ url('/') }}" class="btn btn-outline-success">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-info">Log in</a>

                        @if (Route::has('register-user'))
                            <a href="{{ route('register-user') }}" class="btn btn-outline-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </div>
            </div>
          </nav>
          <!-- END Mega Menu HTML -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            
            @yield('guestcontent')

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                      document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
  </body>
</html>
