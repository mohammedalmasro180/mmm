@extends("body")


@section("content")

<!--header-->
<section class="w3l-header">
    <header id="site-header" class="">
      <section class="w3l-top-header py-3">
        <div class="container">
          <div class="d-grid main-top">
            <div class="top-header-left">
              <ul class="info-top-gridshny">
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-clock-o"></span></div>
                  <div class="info-text">
                    <p>Monday - Friday 08:00 - 20:00</p>
                    <p>Saturday and Sunday - CLOSED</p>
                  </div>

                </li>
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-mobile"></span></div>
                  <div class="info-text">
                    <p>+ 0800 2466 7921</p>
                    <p>+ 0800 2466 7922</p>
                  </div>

                </li>
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-map-marker"></span></div>
                  <div class="info-text">
                    <p>34th Avenue</p>
                    <p>New York, S2 Honey Block</p>

                  </div>

                </li>
              </ul>
            </div>
            <div class="top-header-right text-lg-right">
              <ul>
                <li>
                  <a href="#facebook"><span class="fa fa-facebook"></span></a>
                </li>
                <li>
                  <a href="#twitter"><span class="fa fa-twitter"></span></a>
                </li>
                <li><a href="#instagram" class="instagram mr-0"><span class="fa fa-instagram"></span></a></li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="header-2hny py-3">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1><a class="navbar-brand mr-xl-5" href="index.html">
                <span class="fa fa-heartbeat mr-1"></span>Preventive
              </a></h1>
            <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">Departments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item mr-lg-3 mr-4" title="Search"><a href="#search" class="btn search-search">
                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
                <li class="nav-item"><a href="#download" class="free-con btn btn-style btn-secondary d-block"
                    data-toggle="modal" data-target="#myModal">Free Appointment</a>

                 <!-- //modal-popup-->
                  <div class="selectpackage">

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              &times;</button>
                            <h4 class="modal-title" id="myModalLabel">
                              Make An Appointment</h4>
                          </div>
                          <div class="modal-body packages">
                            <div class="appointment-form">
                              <form action="#" method="post">
                                <div class="fields-grid">
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="fullname" placeholder="Full Name" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="phone" placeholder="Enter Number" required="">
                                    </div>
                                  </div>

                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="date" name="age" placeholder="Enter Your Age" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="date" name="date" placeholder="Set a Date" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <select id="department" required="Specialization">
                                        <option value="">Specialization*</option>
                                        <option value="">Cardiology</option>
                                        <option value="">Heart Surgery</option>
                                        <option value="">Skin Care</option>
                                        <option value="">Body Check-up</option>
                                        <option value="">Numerology</option>
                                        <option value="">Diagnosis</option>
                                        <option value="">Others</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <select id="doctor" required="Select Doctor">
                                        <option value="">Select Doctor</option>
                                        <option value="">Doctor 1</option>
                                        <option value="">Doctor 2</option>
                                        <option value="">Doctor 3</option>
                                        <option value="">Doctor 4</option>
                                        <option value="">Doctor 5</option>
                                        <option value="">Doctor 6</option>
                                        <option value="">Doctor 7</option>
                                      </select>
                                    </div>
                                  </div>

                                </div>
                                <div class="appointment-btn text-lg-right">
                                  <button type="submit" class="btn btn-style btn-primary mt-4">Book Appointment</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      $('#myModal').modal('show');
                    </script>
                  </div>
                  <!-- //modal-popup-->

                </li>
              </ul>
              <!-- //toggle switch for light and dark theme -->
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">
                  <form action="#" method="GET" class="d-sm-flex">
                    <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                    <button type="submit">Search</button>
                    <a class="close" href="#url">&times;</a>
                  </form>
                </div>
              </div>
              <!-- /search popup -->
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
              <nav class="navigation">
                <div class="theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox">
                    <div class="mode-container py-1">
                      <i class="gg-sun"></i>
                      <i class="gg-moon"></i>
                    </div>
                  </label>
                </div>
              </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
          </nav>
        </div>
      </div>
    </header>
    <!--/header-->
  </section>
  <!--/w3l-breadcrumb-->
  <!--//w3l-breadcrumb-->
  <!--/about-->
  
  <section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container">
            <h2 class="title">{{$products->address}}</h2>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                <li><a href="/">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About us </li>
            </ul>
        </div>
    </div>
  </section>
  <!--/w3l-ab-->
   <!--/w3l-ab-->
  <!--/w3l-ab-features-->
  <section class="w3l-ab-features py-5">
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main align-items-center" id="features">
        <div class="col-lg-6 feature-gird pb-lg-5">
          <h6 class="sub-titlehny mb-2">
            

          </h6>
          <h3 class="hny-title mb-4">
 

          </h3>
          <div class="separatorhny"></div>
          <p class="pr-lg-5">
          
<div contenteditable="true" calss="js-wysiwyg">  
          {{$products->text}}
          </div>
          </p>
          </div>
        <div class="col-lg-6 feature-gird pr-lg-5 mt-md-0 mt-4 pb-lg-5">
        <img src="assets/uploads/one/{{$products->img }}" alt="" class="img-fluid" />
        </div>
       
      </div>
    </div>
  </section>
  <!--//-->
   <!--/w3l-faq-block-->
   
@endsection

