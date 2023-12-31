<!DOCTYPE php>
<php class="no-js" lang="en">
  <!-- Mirrored from themeadapt.com/tm/eduvalt/index  by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jul 2023 15:31:42 GMT -->

  <head>
    <?php
    session_start();
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Project Mentor</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/flaticon-eduvalt.css" />
    <link rel="stylesheet" href="assets/css/default-icons.css" />
    <link rel="stylesheet" href="assets/css/select2.min.css" />
    <link rel="stylesheet" href="assets/css/odometer.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <link rel="stylesheet" href="assets/css/tg-cursor.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <style>
      .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,
            0,
            0,
            0.7);
        /* Adjust the overlay color and opacity here */
        z-index: 1000;
        /* Make sure the overlay is above other content */
        transition: opacity 0.3s, visibility 0.3s;
      }

      .exit-button {
        margin-top: -10%;
      }

      .overlay.show {
        display: block;
      }

      .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(0, 0, 0, 0.7); */
        justify-content: center;
        align-items: center;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s;
      }

      .show {
        opacity: 1;
        display: flex;
        visibility: visible;
      }

      .fadeIn {
        animation: fade-in 0.3s;
      }

      .popOut {
        animation: pop-out 0.3s;
      }

      @keyframes fade-in {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      @keyframes pop-out {
        from {
          opacity: 1;
        }

        to {
          opacity: 0;
        }
      }

      /* Centralize Modal Content */
      .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 400px;
        /* Set a max width for the modal content */
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        text-align: left;
        /* Center the content horizontally */
      }

      .form-grp {
        margin-bottom: 20px;
        /* Increase the margin between form groups */
      }

      /* Vertical Line Separator */
      .vertical-line {
        width: 1px;
        height: 100%;
        background-color: #ccc;
      }

      .radio-container {
        display: flex;
        align-items: center;
        /* Center radio button and label vertically */
      }

      .radio-container input[type="radio"] {
        margin-right: 10px;
        /* Adjust this value to control the space between radio button and label */
        width: 20px;
        /* Increase the width of the radio button */
        height: 20px;
        /* Increase the height of the radio button */
      }

      .radio-container label {
        font-size: 18px;
        /* Increase the font size of the label */
      }
    </style>
  </head>

  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <div class="position-fixed top-10 end-0 p-3" style="z-index: 1000; margin-top: 5%;">
      <?php
      if (isset($_SESSION['login_notification'])) {
        echo '<div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert" style="width: 300px;">' . $_SESSION['login_notification'] . '</div>';
        unset($_SESSION['login_notification']); // Clear the notification after displaying
      }

      if (isset($_SESSION['signup_error'])) {
        echo '<div class="alert alert-danger d-flex justify-content-center align-items-center" role="alert" style="width: 300px;">' . $_SESSION['signup_error'] . '</div>';
        unset($_SESSION['signup_error']); // Clear the signup error after displaying
      }

      if (isset($_SESSION['signup_success'])) {
        echo '<div class="alert alert-success d-flex justify-content-center align-items-center" role="alert" style="width: 300px;">' . $_SESSION['signup_success'] . '</div>';
        unset($_SESSION['signup_success']); // Clear the signup success after displaying
      }
      ?>
    </div>

    <button class="scroll__top scroll-to-target" data-target="php">
      <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Modal for Signup Form -->
    <div class="overlay" id="overlay">
      <div class="modal" id="loginModal">
        <div class="modal-content">
          <div class="row">
            <div class="col-lg-6">
              <!-- Login Form -->
              <div class="contact-form-wrap modal-content">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="title">Sign In</h4>
                  <button id="exitFormBtn1" type="button" class="btn-close exit-button" aria-label="Close"
                    data-bs-dismiss="modal"></button>
                </div>
                <form id="login-form" action="auth-sign-in-controller " method="POST">
                  <div class="form-grp">
                    <input name="loginemail" type="text" placeholder="Email *" required />
                  </div>
                  <div class="form-grp">
                    <input name="loginpassword" type="password" placeholder="Password *" required />
                  </div>
                  <p style="text-align: center" >Signing in as:</p>
                  <div style="display: flex; gap: 30%; margin-left: 10%">
                    <div class="radio-container">
                      <input name="userType" type="radio" value="Student" id="student" required />
                      <label for="student">Student</label>
                    </div>
                    <div class="radio-container">
                      <input name="userType" type="radio" value="Expert" id="expert" required />
                      <label for="expert">Expert</label>
                    </div>
                  </div>
                  <br>
                  <div style="margin-left: 29%">
                    <a href="#">Forgot Password?</a><br />
                  </div>
                  <button type="submit" class="btn" style="margin-top: 5%; margin-left: 33%">
                    Log In</button><br />
                  <button type="submit" class="btn" style="margin-top: 5%; margin-left: 18.75%" id="showSignupFormBtn">
                    Create an account
                  </button>
                  <div class="social-links">
                    <div class="list-wrap" style="margin-top: 10%; margin-left: 25.50%; display: flex; gap: 15px;">
                      <a href="#" style="font-size: 24px;"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" style="font-size: 24px;"><i class="fab fa-twitter"></i></a>
                      <a href="#" style="font-size: 24px;"><i class="fab fa-instagram"></i></a>
                      <a href="#" style="font-size: 24px;"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#" style="font-size: 24px;"><i class="fab fa-youtube"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="modal" id="signupModal">

        <div class="modal-content">
          
          <div class="row">
            
            <div class="col-lg-6">
              <!-- Login Form -->
              <div class="contact-form-wrap modal-content">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="title">Sign up</h4>
                  <button id="exitFormBtn1" type="button" class="btn-close exit-button" aria-label="Close"
                    data-bs-dismiss="modal"></button>
                </div>
                <form id="signup-form" action="auth-sign-up-controller" method="POST">
                <p style="text-align: center; font-size: 110%" >Registering as:</p>
                  <div style="display: flex; gap: 30%; margin-left: 10%">
                    <div class="radio-container">
                      <input name="userType" type="radio" value="Student" id="student" required />
                      <label for="student">Student</label>
                    </div>
                    <div class="radio-container">
                      <input name="userType" type="radio" value="Expert" id="expert" required />
                      <label for="expert">Expert</label>
                    </div>
                  </div>
                  <br>
                  <div class="form-grp">
                    <input name="fname" type="text" placeholder="First Name *" required />
                  </div>
                  <div class="form-grp">
                    <input name="lname" type="text" placeholder="Last Name *" required />
                  </div>
                  <div class="form-grp">
                    <input name="email" type="text" placeholder="Email *" required />
                  </div>

                  <div class="form-grp">
                    <input name="password" type="password" placeholder="Password *" required />
                  </div>
                  <div class="form-grp">
                    <input name="confpassword" type="password" placeholder="Confirm Password *" required />
                  </div>
                  <div style="margin-left: 22%">
                    <a href="#" id="loginlink">Already have an account?</a><br />
                  </div>
                  <button type="submit" class="btn" style="margin-top: 5%; margin-left: 20%">
                    Create account
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- header-area -->
    <header>
      <div id="sticky-header" class="tg-header__area transparent-header">
        <div class="container custom-container">
          <div class="row">
            <div class="col-12">
              <div class="mobile-nav-toggler">
                <i class="tg-flaticon-menu-1"></i>
              </div>
              <div class="tgmenu__wrap">
                <nav class="tgmenu__nav">
                  <div class="logo">
                    <a href="index "><img src="assets/img/logo/logo.png" alt="Logo" /></a>
                  </div>
                  <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                    <ul class="navigation">
                      <li class="active menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                          <li class="active">
                            <a href="index ">Home</a>
                          </li>
                          <li><a href="about-us">About Us</a></li>
                          <li><a href="contact">Contact</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Projects</a>
                        <ul class="sub-menu">
                          <li><a href="courses ">All Projects</a></li>
                          <li>
                            <a href="tutorial-details ">Project Details</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Pricing</a>
                        <ul class="sub-menu">
                          <li><a href="mentors ">Pricing</a></li>
                          <li><a href="events ">Events</a></li>
                          <li><a href="faq ">FAQs</a></li>
                        </ul>
                      </li>
                      <li class="menu-item-has-children">
                        <a href="#">Tools</a>
                        <ul class="sub-menu">
                          <li><a href="templates ">All Tools</a></li>
                          <li>
                            <a href="template-details ">Tutorials</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>

                  <div class="tgmenu__search d-none d-md-block">
                    <form action="#" class="tgmenu__search-form">
                      <div class="select-grp">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z"
                            fill="currentcolor" />
                        </svg>
                        <select class="form-select" id="course-cat" aria-label="Default select example"
                          style="width: 150px">
                          <!-- <option selected disabled>Categories</option> -->
                          <option value="1">Templates</option>
                          <option value="2">Projects</option>
                          <option value="3">Tools</option>
                        </select>
                      </div>
                      <div class="input-grp">
                        <input type="text" placeholder="Search For Course . . ." />
                        <button type="submit">
                          <i class="flaticon-searching"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="tgmenu__action">
                    <ul class="list-wrap">
                      <li class="mini-cart-icon">
                        <a href="shop " class="cart-count">
                          <img src="assets/img/icons/cart.svg" alt="cart" />
                          <span class="mini-cart-count">0</span>
                        </a>
                      </li>
                      <li class="header-btn login-btn">
                        <a href="#" id="showLoginFormBtn" class="btn">Sign In/Up</a>
                      </li>
                      <li class="header-btn free-btn">
                        <a href="contact " class="btn">Try For Free</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
              <!-- Mobile Menu  -->
              <div class="tgmobile__menu">
                <nav class="tgmobile__menu-box">
                  <div class="close-btn">
                    <i class="tg-flaticon-close-1"></i>
                  </div>
                  <div class="nav-logo">
                    <a href="index "><img src="assets/img/logo/logo.png" alt="Logo" /></a>
                  </div>
                  <div class="tgmobile__search">
                    <form action="#">
                      <input type="text" placeholder="Search here..." />
                      <button><i class="fas fa-search"></i></button>
                    </form>
                  </div>
                  <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                  </div>
                  <div class="tgmenu__action">
                    <ul class="list-wrap">
                      <li class="header-btn login-btn">
                        <a href="#" class="btn" id="showLoginFormBtn">Sign In/Up</a>
                      </li>
                      <li class="header-btn">
                        <a href="#" class="btn">Try For Free</a>
                      </li>
                    </ul>
                  </div>
                  <div class="social-links">
                    <ul class="list-wrap">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="tgmobile__menu-backdrop"></div>
              <!-- End Mobile Menu -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main class="main-area fix">
      <!-- banner-area -->
      <section class="banner-area banner-bg" data-background="assets/img/banner/banner_bg.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="banner__content">
                <img src="assets/img/banner/bshape_01.png" alt="shape" class="shape alltuchtopdown" />
                <img src="assets/img/banner/bshape_02.png" alt="shape" class="shape" />
                <span class="sub-title" data-aos="fade-right" data-aos-delay="200">100% Satisfaction
                  Guarantee</span>
                <h3 class="title tg-svg" data-aos="fade-right" data-aos-delay="400">
                  Learn
                  <span class="position-relative"><span class="svg-icon" id="svg-2"
                      data-svg-icon="assets/img/icons/title_shape.svg"></span>Skills</span>
                  From Our Top Instructors
                </h3>
                <p data-aos="fade-right" data-aos-delay="600">
                  Borem ipsum dolor sit amet, consectetur adipiscing elit.
                  Ut elit tellus, luctus nec ullamcorper mattisBorem ipsum
                  dolor sit amet consectetur adipiscing area we followelit.
                </p>
                <div class="banner__btn-wrap" data-aos="fade-right" data-aos-delay="800">
                  <div class="tg-button-wrap">
                    <a href="courses " class="btn tg-svg"><span class="text">Explore Courses</span>
                      <span class="svg-icon" id="svg-1" data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                  </div>
                  <div class="banner__phone">
                    <i class="flaticon-phone-call"></i>
                    <div class="number-info">
                      <span>Have any Question?</span>
                      <h6 class="number">
                        <a href="tel:993-00-67777">993-00-67777</a>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="banner__images">
                <img src="assets/img/banner/banner_img.png" alt="img" class="main-img" />
                <img src="assets/img/banner/bshape_03.png" alt="shape" class="shape" data-aos="fade-down-right"
                  data-aos-delay="1200" />
                <img src="assets/img/banner/bshape_04.png" alt="shape" class="shape" data-aos="fade-right"
                  data-aos-delay="1200" />
                <img src="assets/img/banner/bshape_05.png" alt="shape" class="shape" data-aos="fade-down-left"
                  data-aos-delay="1200" />
                <div class="banner__fact">
                  <div class="banner__fact-item">
                    <div class="icon">
                      <i class="flaticon-group"></i>
                    </div>
                    <div class="info">
                      <span>Total Students</span>
                      <h4 class="count">15K</h4>
                    </div>
                  </div>
                  <div class="banner__fact-item">
                    <div class="icon">
                      <i class="flaticon-graduation-cap"></i>
                    </div>
                    <div class="info">
                      <span>Complete Graduation</span>
                      <h4 class="count">34K</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner-area-end -->

      <!-- brand-area -->
      <div class="brand-area" style="height: 0; padding: 0;">
        <div class="container">
          <div class="row brand-active">
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand01.png" alt="brand" /></a>
              </div>
            </div>
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand02.png" alt="brand" /></a>
              </div>
            </div>
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand03.png" alt="brand" /></a>
              </div>
            </div>
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand04.png" alt="brand" /></a>
              </div>
            </div>
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand05.png" alt="brand" /></a>
              </div>
            </div>
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand06.png" alt="brand" /></a>
              </div>
            </div>
            <div class="col">
              <div class="brand__item">
                <a href="#"><img src="assets/img/brand/brand07.png" alt="brand" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- brand-area-end -->

      <!-- about-area -->
      <section class="about-area tg-motion-effects section-py-120">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-8">
              <div class="about__images">
                <img class="small-img tg-motion-effects3" src="assets/img/others/about_img02.png" alt="img" />
                <img class="big-img" src="assets/img/others/about_img01.png" alt="img" />
                <div class="about__exp">
                  <svg width="126" height="108" viewBox="0 0 126 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 10C0 4.47715 4.47715 0 10 0H110.996C116.321 0 120.713 4.17312 120.983 9.4914L125.429 96.7793C125.733 102.754 120.758 107.657 114.789 107.267L9.34719 100.369C4.08901 100.025 0 95.6593 0 90.3899V10Z"
                      fill="currentcolor" />
                  </svg>
                  <h4 class="year">12 +</h4>
                  <p>Years of Experiences</p>
                </div>
                <img src="assets/img/others/about_dots.svg" alt="svg" class="dots tg-motion-effects2" />
                <svg class="circle tg-motion-effects1" width="344" height="344" viewBox="0 0 344 344" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <rect x="20" y="20" width="304" height="304" rx="152" stroke="currentcolor" stroke-width="40" />
                </svg>
              </div>
            </div>
            <div class="col-xl-6 col-lg-7">
              <div class="about__content">
                <div class="section__title">
                  <span class="sub-title">Get To Know About Us</span>
                  <h2 class="title tg-svg">
                    Discover top
                    <span class="position-relative"><span class="svg-icon" id="svg-3"
                        data-svg-icon="assets/img/icons/title_shape.svg"></span>Instructors</span>
                    Around the World
                  </h2>
                </div>
                <p class="desc">
                  Borem ipsum dolor sit amet, consectetur adipiscing eliawe
                  awUt elit ellus, luctus nec ullamcorper mattisBorem ipsum
                  dolor awes atnse awctetur adipis we followelit. Borem.
                </p>
                <ul class="about__info-list list-wrap">
                  <li class="about__info-list-item">
                    <div class="icon"><i class="flaticon-support"></i></div>
                    <p class="content">
                      2000+ <br />
                      Expert Tutors
                    </p>
                  </li>
                  <li class="about__info-list-item">
                    <div class="icon"><i class="flaticon-file"></i></div>
                    <p class="content">
                      1500+ <br />
                      Top Lessons
                    </p>
                  </li>
                  <li class="about__info-list-item">
                    <div class="icon">
                      <i class="flaticon-graduation-cap"></i>
                    </div>
                    <p class="content">
                      18000+ <br />
                      Over Students
                    </p>
                  </li>
                  <li class="about__info-list-item">
                    <div class="icon">
                      <i class="flaticon-video-player"></i>
                    </div>
                    <p class="content">
                      3200+ <br />
                      Pro Videos
                    </p>
                  </li>
                </ul>
                <div class="tg-button-wrap">
                  <a href="about-us " class="btn tg-svg"><span class="text">Discover More</span>
                    <span class="svg-icon" id="about-btn" data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about-area-end -->

      <!-- course-area -->
      <section class="courses-area section-pt-120 section-pb-90">
        <div class="container">
          <div class="section__title-wrap">
            <div class="row align-items-end">
              <div class="col-lg-6">
                <div class="section__title text-center text-lg-start">
                  <span class="sub-title">10,000+ Unique Online Courses</span>
                  <h2 class="title tg-svg">
                    Our
                    <span class="position-relative"><span class="svg-icon" id="svg-4"
                        data-svg-icon="assets/img/icons/title_shape.svg"></span>Featured</span>
                    Courses
                  </h2>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="courses__nav-active">
                  <button class="active" data-filter="*">
                    All Courses <span>New</span>
                  </button>
                  <button data-filter=".cat-one">Design</button>
                  <button data-filter=".cat-two">Marketing</button>
                  <button data-filter=".cat-three">Development</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row courses-active row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
            <div class="col grid-item cat-two cat-three">
              <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                  <a href="#" class="courses__item-tag" style="background-color: #04bc53">Graphic Design</a>
                  <a href="course-details " class="shine__animate-link">
                    <img src="assets/img/courses/course_thumb01.jpg" alt="img" />
                  </a>
                </div>
                <div class="courses__item-content">
                  <ul class="courses__item-meta list-wrap">
                    <li><i class="flaticon-file"></i> 05 Lessons</li>
                    <li><i class="flaticon-timer"></i> 12h 30m</li>
                    <li><i class="flaticon-user-1"></i> Students</li>
                  </ul>
                  <h5 class="title">
                    <a href="course-details ">A Biginer Adobe Illustrator for Graphic Design</a>
                  </h5>
                  <div class="courses__item-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(06)</span>
                  </div>
                  <div class="courses__item-bottom">
                    <div class="author">
                      <a href="instructor-details "><img src="assets/img/courses/course_author.png" alt="img" /></a>
                      <a href="instructor-details ">David Millar</a>
                    </div>
                    <h5 class="price">$11.00</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col grid-item cat-one">
              <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                  <a href="#" class="courses__item-tag" style="background-color: #bc18e4">Marketing</a>
                  <a href="course-details " class="shine__animate-link">
                    <img src="assets/img/courses/course_thumb02.jpg" alt="img" />
                  </a>
                </div>
                <div class="courses__item-content">
                  <ul class="courses__item-meta list-wrap">
                    <li><i class="flaticon-file"></i> 09 Lessons</li>
                    <li><i class="flaticon-timer"></i> 17h 30m</li>
                    <li><i class="flaticon-user-1"></i> Students</li>
                  </ul>
                  <h5 class="title">
                    <a href="course-details ">How to Market Yourself as a Coach or Consultant</a>
                  </h5>
                  <div class="courses__item-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(10)</span>
                  </div>
                  <div class="courses__item-bottom">
                    <div class="author">
                      <a href="instructor-details "><img src="assets/img/courses/course_author02.png" alt="img" /></a>
                      <a href="instructor-details ">Mark Lassoff</a>
                    </div>
                    <h5 class="price"><del>$29.00</del>$19.00</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col grid-item cat-two cat-three">
              <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                  <a href="#" class="courses__item-tag" style="background-color: #ff2020">Marketing</a>
                  <a href="course-details " class="shine__animate-link">
                    <img src="assets/img/courses/course_thumb03.jpg" alt="img" />
                  </a>
                </div>
                <div class="courses__item-content">
                  <ul class="courses__item-meta list-wrap">
                    <li><i class="flaticon-file"></i> 08 Lessons</li>
                    <li><i class="flaticon-timer"></i> 14h 30m</li>
                    <li><i class="flaticon-user-1"></i> Students</li>
                  </ul>
                  <h5 class="title">
                    <a href="course-details ">Become a Certified php, CSS, JavaScript Web
                      Developer</a>
                  </h5>
                  <div class="courses__item-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(08)</span>
                  </div>
                  <div class="courses__item-bottom">
                    <div class="author">
                      <a href="instructor-details "><img src="assets/img/courses/course_author03.png" alt="img" /></a>
                      <a href="instructor-details ">David Millar</a>
                    </div>
                    <h5 class="price">$29.00</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col grid-item cat-one">
              <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                  <a href="#" class="courses__item-tag" style="background-color: #ff2020">Development</a>
                  <a href="course-details " class="shine__animate-link">
                    <img src="assets/img/courses/course_thumb04.jpg" alt="img" />
                  </a>
                </div>
                <div class="courses__item-content">
                  <ul class="courses__item-meta list-wrap">
                    <li><i class="flaticon-file"></i> 12 Lessons</li>
                    <li><i class="flaticon-timer"></i> 15h 30m</li>
                    <li><i class="flaticon-user-1"></i> Students</li>
                  </ul>
                  <h5 class="title">
                    <a href="course-details ">Running a Web Development The Complete Guide</a>
                  </h5>
                  <div class="courses__item-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(08)</span>
                  </div>
                  <div class="courses__item-bottom">
                    <div class="author">
                      <a href="instructor-details "><img src="assets/img/courses/course_author04.png" alt="img" /></a>
                      <a href="instructor-details ">David Millar</a>
                    </div>
                    <h5 class="price"><del>$24.00</del>$15.00</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col grid-item cat-one cat-three">
              <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                  <a href="#" class="courses__item-tag" style="background-color: #03c0ea">Photography</a>
                  <a href="course-details " class="shine__animate-link">
                    <img src="assets/img/courses/course_thumb05.jpg" alt="img" />
                  </a>
                </div>
                <div class="courses__item-content">
                  <ul class="courses__item-meta list-wrap">
                    <li><i class="flaticon-file"></i> 10 Lessons</li>
                    <li><i class="flaticon-timer"></i> 12h 30m</li>
                    <li><i class="flaticon-user-1"></i> Students</li>
                  </ul>
                  <h5 class="title">
                    <a href="course-details ">The Art of Seeing Photography training for the Artist
                      in you</a>
                  </h5>
                  <div class="courses__item-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(10)</span>
                  </div>
                  <div class="courses__item-bottom">
                    <div class="author">
                      <a href="instructor-details "><img src="assets/img/courses/course_author05.png" alt="img" /></a>
                      <a href="instructor-details ">David Millar</a>
                    </div>
                    <h5 class="price">$14.00</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col grid-item cat-two">
              <div class="courses__item shine__animate-item">
                <div class="courses__item-thumb">
                  <a href="#" class="courses__item-tag" style="background-color: #ff109f">Finance</a>
                  <a href="course-details " class="shine__animate-link">
                    <img src="assets/img/courses/course_thumb06.jpg" alt="img" />
                  </a>
                </div>
                <div class="courses__item-content">
                  <ul class="courses__item-meta list-wrap">
                    <li><i class="flaticon-file"></i> 12 Lessons</li>
                    <li><i class="flaticon-timer"></i> 16h 30m</li>
                    <li><i class="flaticon-user-1"></i> Students</li>
                  </ul>
                  <h5 class="title">
                    <a href="course-details ">The Complete Guide to the Global Capital Markets</a>
                  </h5>
                  <div class="courses__item-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(14)</span>
                  </div>
                  <div class="courses__item-bottom">
                    <div class="author">
                      <a href="instructor-details "><img src="assets/img/courses/course_author06.png" alt="img" /></a>
                      <a href="instructor-details ">David Millar</a>
                    </div>
                    <h5 class="price">$22.00</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="courses__shapes">
          <div class="courses__shapes-item alltuchtopdown">
            <img src="assets/img/courses/course_shape01.png" alt="shape" />
          </div>
          <div class="courses__shapes-item alltuchtopdown">
            <img src="assets/img/courses/course_shape02.png" alt="shape" />
          </div>
        </div>
      </section>
      <!-- course-area-end -->

      <!-- categories-area -->
      <section class="categories-area section-py-130">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-8 col-md-10">
              <div class="categories__title-wrap text-center text-xl-start">
                <div class="section__title">
                  <span class="sub-title">Unique online courses</span>
                  <h2 class="title tg-svg">
                    Browse By
                    <span class="position-relative"><span class="svg-icon" id="svg-5"
                        data-svg-icon="assets/img/icons/title_shape.svg"></span>Categories</span>
                  </h2>
                </div>
                <p>
                  Borem ipsum dolor sit amet, consectetur adipiscing eliawe
                  awut elit ellus, luctus nec ullamcorper mattisBorem ipsum
                  dolor awes atnse awctetur.
                </p>
                <div class="tg-button-wrap justify-content-center justify-content-xl-start">
                  <a href="courses " class="btn btn-border tg-svg"><span class="text">All Categories</span>
                    <span class="svg-icon" id="svg-6" data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-9">
              <div class="categories__wrap">
                <img src="assets/img/objects/categories_shape03.svg" alt="shape" data-aos="fade-right" />
                <img src="assets/img/objects/categories_shape04.svg" alt="shape" data-aos="fade-left" />
                <div class="row justify-content-center row-cols-2 row-cols-md-3">
                  <div class="col">
                    <div class="categories__item">
                      <a href="courses ">
                        <i class="flaticon-graphic-design"></i>
                        <span class="name">Graphic Design</span>
                        <span class="courses">19 Courses</span>
                      </a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="categories__item">
                      <a href="courses ">
                        <i class="flaticon-email-marketing"></i>
                        <span class="name">Marketing</span>
                        <span class="courses">10 Courses</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center row-cols-2 row-cols-sm-3">
                  <div class="col">
                    <div class="categories__item">
                      <a href="courses ">
                        <i class="flaticon-bars"></i>
                        <span class="name">Fiance</span>
                        <span class="courses">08 Courses</span>
                      </a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="categories__item">
                      <a href="courses ">
                        <i class="flaticon-programming-language"></i>
                        <span class="name">Development</span>
                        <span class="courses">13 Courses</span>
                      </a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="categories__item">
                      <a href="courses ">
                        <i class="flaticon-atom"></i>
                        <span class="name">Science</span>
                        <span class="courses">19 Courses</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="categories__shapes">
          <div class="categories__shapes-item rotateme">
            <img src="assets/img/objects/categories_shape01.png" alt="shape" />
          </div>
          <div class="categories__shapes-item" data-aos="fade-up">
            <img src="assets/img/objects/categories_shape02.png" alt="shape" />
          </div>
        </div>
      </section>
      <!-- categories-area-end -->

      <!-- testimonial-area -->
      <section class="testimonial-area testimonial-bg section-py-120"
        data-background="assets/img/bg/testimonial_bg.jpg">
        <div class="container">
          <div class="row align-items-xl-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
              <div class="testimonial__image-wrapper position-relative">
                <div class="testimonial__image-active">
                  <div class="testimonial__image-item">
                    <img src="assets/img/others/testimonial01.jpg" alt="img" />
                  </div>
                  <div class="testimonial__image-item">
                    <img src="assets/img/others/testimonial02.jpg" alt="img" />
                  </div>
                </div>
                <div class="testimonial__shapes">
                  <img src="assets/img/objects/testi_shape01.svg" alt="shape" data-aos="fade-up-left"
                    data-aos-delay="300" />
                  <img src="assets/img/objects/testi_shape02.svg" alt="shape" data-aos="fade-up-right"
                    data-aos-delay="300" />
                  <img src="assets/img/objects/testi_shape03.svg" alt="shape" class="rotateme" />
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="testimonial__content-wrapper">
                <div class="section__title white-title mb-40">
                  <h2 class="title tg-svg">
                    What Our
                    <span class="position-relative"><span class="svg-icon" id="svg-7"
                        data-svg-icon="assets/img/icons/title_shape.svg"></span>Students</span><br />
                    Say About Us
                  </h2>
                </div>
                <div class="testimonial__content-active">
                  <div class="testimonial__content-item">
                    <div class="testimonial__content-icon">
                      <img src="assets/img/icons/quote.png" alt="img" />
                    </div>
                    <p>
                      “ when an unknown printer took a galley of type and
                      scrambled to make a type specimen book. It has
                      survived not only five centuries, but also the leap
                      into electronic.”
                    </p>
                    <div class="testimonial__content-avatar">
                      <h5 class="name">Parker Robert</h5>
                      <span class="designation">UI Designer</span>
                    </div>
                  </div>
                  <div class="testimonial__content-item">
                    <div class="testimonial__content-icon">
                      <img src="assets/img/icons/quote.png" alt="img" />
                    </div>
                    <p>
                      “ when an unknown printer took a galley of type and
                      scrambled to make a type specimen book. It has
                      survived not only five centuries, but also the leap
                      into electronic.”
                    </p>
                    <div class="testimonial__content-avatar">
                      <h5 class="name">Parker Robert</h5>
                      <span class="designation">UI Designer</span>
                    </div>
                  </div>
                </div>
                <div class="testimonial__content-nav"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- testimonial-area-end -->

      <!-- instructor-area -->
      <section class="instructor-area section-pt-120 section-pb-70">
        <div class="container">
          <div class="section__title-wrap">
            <div class="row align-items-center gap-4 gap-md-0">
              <div class="col-md-8">
                <div class="section__title text-center text-md-start">
                  <span class="sub-title">Our Qualified People Matter</span>
                  <h2 class="title tg-svg">
                    Top
                    <span class="position-relative"><span class="svg-icon" id="svg-8"
                        data-svg-icon="assets/img/icons/title_shape.svg"></span>Class</span>
                    instructor
                  </h2>
                </div>
              </div>
              <div class="col-md-4">
                <div class="tg-button-wrap justify-content-center justify-content-md-end">
                  <a href="instructor " class="btn tg-svg"><span class="text">All Instructors</span>
                    <span class="svg-icon" id="instructor-btn"
                      data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="instructor__item">
                <div class="instructor__img">
                  <div class="instructor__shape" style="
                          background-color: #e2faff;
                          border-radius: 135px 0 0 0;
                        "></div>
                  <a href="instructor-details "><img src="assets/img/instructor/instructor01.png"
                      alt="instructor" /></a>
                </div>
                <div class="instructor__content">
                  <div class="left">
                    <span class="designation">Graphic Design</span>
                    <h4 class="name">
                      <a href="instructor-details ">Robert Smith</a>
                    </h4>
                  </div>
                  <div class="right">
                    <span class="share"><i class="flaticon-share"></i></span>
                    <ul class="social-list list-wrap">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="instructor__item">
                <div class="instructor__img">
                  <div class="instructor__shape" style="
                          background-color: #e4ffe2;
                          border-radius: 135px 115px 115px 0;
                        "></div>
                  <a href="instructor-details "><img src="assets/img/instructor/instructor02.png"
                      alt="instructor" /></a>
                </div>
                <div class="instructor__content">
                  <div class="left">
                    <span class="designation">Web Design</span>
                    <h4 class="name">
                      <a href="instructor-details ">Olivia Mia</a>
                    </h4>
                  </div>
                  <div class="right">
                    <span class="share"><i class="flaticon-share"></i></span>
                    <ul class="social-list list-wrap">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="instructor__item">
                <div class="instructor__img">
                  <div class="instructor__shape" style="
                          background-color: #e8edff;
                          border-radius: 135px 0 0 0;
                        "></div>
                  <a href="instructor-details "><img src="assets/img/instructor/instructor03.png"
                      alt="instructor" /></a>
                </div>
                <div class="instructor__content">
                  <div class="left">
                    <span class="designation">Digital Marketing</span>
                    <h4 class="name">
                      <a href="instructor-details ">William Hope</a>
                    </h4>
                  </div>
                  <div class="right">
                    <span class="share"><i class="flaticon-share"></i></span>
                    <ul class="social-list list-wrap">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="instructor__item">
                <div class="instructor__img">
                  <div class="instructor__shape" style="
                          background-color: #ffe2e2;
                          border-radius: 135px 115px 115px 0;
                        "></div>
                  <a href="instructor-details "><img src="assets/img/instructor/instructor04.png"
                      alt="instructor" /></a>
                </div>
                <div class="instructor__content">
                  <div class="left">
                    <span class="designation">Web Development</span>
                    <h4 class="name">
                      <a href="instructor-details ">Sophia Ava</a>
                    </h4>
                  </div>
                  <div class="right">
                    <span class="share"><i class="flaticon-share"></i></span>
                    <ul class="social-list list-wrap">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- instructor-area-end -->

      <!-- cta-area -->
      <section class="cta-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="cta__wrapper">
                <div class="section__title white-title">
                  <h2 class="title tg-svg">
                    Join us &
                    <span class="position-relative"><span class="svg-icon" id="svg-9"
                        data-svg-icon="assets/img/icons/title_shape.svg"></span>Spread</span>
                    Experiences
                  </h2>
                </div>
                <div class="cta__desc">
                  <p>
                    Borem ipsum dolor sit amet, consectetur adipiscing
                    eliawe awUt elit ellus, luctus nec ullamcorper
                    mattisBorem
                  </p>
                </div>
                <div class="tg-button-wrap justify-content-center justify-content-md-end">
                  <a href="contact " class="btn white-btn tg-svg"><span class="text">Become an Instructor</span>
                    <span class="svg-icon" id="cta-btn" data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                </div>
                <img class="object" src="assets/img/objects/cta_shape01.svg" style="left: 25px; top: -35px" alt="Object"
                  data-aos="fade-down" data-aos-delay="400" />
                <img class="object" src="assets/img/objects/cta_shape02.svg" style="right: -20px; bottom: -80px"
                  alt="Object" data-aos="fade-up" data-aos-delay="400" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- cta-area-end -->

      <!-- blog-area -->
      <section class="blog-area blog-bg-circle section-pt-205 section-pb-90">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
              <div class="section__title text-center mb-40">
                <span class="sub-title">Always Smart To Hear News</span>
                <h2 class="title tg-svg">
                  Latest
                  <span class="position-relative"><span class="svg-icon" id="svg-10"
                      data-svg-icon="assets/img/icons/title_shape.svg"></span>News</span>
                  & Blog
                </h2>
                <p class="desc">
                  Receive huge benefits with our lifetime Plumbing Receive
                  huge benefits with our lifetime Plumbing email address
                  will be shown
                </p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-9">
              <div class="blog__post-item shine__animate-item">
                <div class="blog__post-thumb">
                  <a href="blog-details " class="shine__animate-link"><img src="assets/img/blog/blog_thumb01.jpg"
                      alt="img" /></a>
                </div>
                <div class="blog__post-content">
                  <a href="#" class="cat">Education</a>
                  <h4 class="title">
                    <a href="blog-details ">when aeunkno printer took galley of scrambled</a>
                  </h4>
                  <ul class="list-wrap blog__post-meta">
                    <li>
                      <i class="flaticon-account"></i> by
                      <a href="#">Admin</a>
                    </li>
                    <li>
                      <i class="flaticon-calendar-date"></i> 23 Aug, 2023
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
              <div class="blog__post-item shine__animate-item">
                <div class="blog__post-thumb">
                  <a href="blog-details " class="shine__animate-link"><img src="assets/img/blog/blog_thumb02.jpg"
                      alt="img" /></a>
                </div>
                <div class="blog__post-content">
                  <a href="#" class="cat">Course</a>
                  <h4 class="title">
                    <a href="blog-details ">Full Stack GraphQL With Next.js And Vercel</a>
                  </h4>
                  <ul class="list-wrap blog__post-meta">
                    <li>
                      <i class="flaticon-account"></i> by
                      <a href="#">Admin</a>
                    </li>
                    <li>
                      <i class="flaticon-calendar-date"></i> 24 Aug, 2023
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
              <div class="blog__post-item shine__animate-item">
                <div class="blog__post-thumb">
                  <a href="blog-details " class="shine__animate-link"><img src="assets/img/blog/blog_thumb03.jpg"
                      alt="img" /></a>
                </div>
                <div class="blog__post-content">
                  <a href="#" class="cat">Skill Development</a>
                  <h4 class="title">
                    <a href="blog-details ">What Leonardo Teach us About Web Design</a>
                  </h4>
                  <ul class="list-wrap blog__post-meta">
                    <li>
                      <i class="flaticon-account"></i> by
                      <a href="#">Admin</a>
                    </li>
                    <li>
                      <i class="flaticon-calendar-date"></i> 24 Aug, 2023
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="object" src="assets/img/objects/blog_shape01.png" width="97" style="left: 8%; top: 32%"
          alt="Object" />
        <img class="object rotateme" src="assets/img/objects/blog_shape02.png" width="66" style="right: 9%; bottom: 23%"
          alt="Object" />
      </section>
      <!-- blog-area-end -->

      <!-- newsletter-area -->
      <section class="newsletter-area section-py-55">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-4">
              <div class="newsletter__img-wrap">
                <div class="newsletter__img" data-aos="fade-right">
                  <img src="assets/img/others/newsletter.png" alt="img" />
                </div>
                <div class="newsletter__content">
                  <h4 class="title">
                    Let’s Join To <br />
                    Our Newsletters
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-7">
              <div class="newsletter__form">
                <form action="#">
                  <input type="email" placeholder="Enter your email" required />
                  <button type="submit">Subscribe Now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer-bg" data-bg-color="var(--tg-common-color-dark)">
      <div class="footer__top-wrap">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="footer-widget">
                <div class="footer__about">
                  <div class="footer__logo logo">
                    <a href="index "><img src="assets/img/logo/secondary_logo.png" alt="img" /></a>
                  </div>
                  <p>
                    when an unknown printer took galley of type and
                    scrambled it to make pspecimen bookt has.
                  </p>
                  <ul class="list-wrap m-0 p-0">
                    <li class="address">463 7th Ave, NY 10018, USA</li>
                    <li class="number">+123 88 9900 456</li>
                    <li class="socials">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-whatsapp"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="footer-widget widget_nav_menu">
                <h4 class="fw-title">Resources</h4>
                <ul class="list-wrap">
                  <li><a href="about-us ">About</a></li>
                  <li><a href="contact ">Contact</a></li>
                  <li><a href="contact ">Help Center</a></li>
                  <li><a href="#">Refund</a></li>
                  <li><a href="#">Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="footer-widget widget_nav_menu">
                <h4 class="fw-title">Courses</h4>
                <ul class="list-wrap">
                  <li><a href="courses ">Life Coach</a></li>
                  <li><a href="courses ">Business Coach</a></li>
                  <li><a href="courses ">Health Coach</a></li>
                  <li><a href="courses ">Development</a></li>
                  <li><a href="courses ">Web Design</a></li>
                  <li><a href="courses ">SEO Optimize</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="footer-widget">
                <h4 class="fw-title">Working Hours</h4>
                <div class="footer__working-list">
                  <div class="footer__working-item">
                    <span class="day">Mon - Fri</span>
                    <span class="time">8:00 AM - 5:00 PM</span>
                  </div>
                  <div class="footer__working-item">
                    <span class="day">Mon - Fri</span>
                    <span class="time">9:00 AM - 6:00 PM</span>
                  </div>
                  <div class="footer__working-item">
                    <span class="day">Mon - Fri</span>
                    <span class="time">10:00 AM - 8:00 PM</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="copyright__text">
                <p>Copyright © 2023 eduvalt. All rights reserved.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="copyright__menu">
                <ul class="list-wrap d-flex flex-wrap justify-content-center justify-content-lg-end">
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tween-max.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/tg-cursor.min.js"></script>
    <script src="assets/js/vivus.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      const overlay = document.getElementById("overlay");
      const loginModal = document.getElementById("loginModal");
      const signupModal = document.getElementById("signupModal");
      const showLoginFormBtn = document.getElementById("showLoginFormBtn");
      const showSignupFormBtn =
        document.getElementById("showSignupFormBtn");
      const loginlink = document.getElementById("loginlink");

      const exitButtons = document.querySelectorAll(".exit-button");

      showLoginFormBtn.addEventListener("click", () => {
        showLoginModal();
      });

      loginlink.addEventListener("click", () => {
        showLoginModal();
      });

      showSignupFormBtn.addEventListener("click", () => {
        showSignupModal();
      });

      exitButtons.forEach((button) => {
        button.addEventListener("click", closeModal);
      });

      function showLoginModal() {
        overlay.classList.remove("popOut");
        overlay.classList.add("show");
        loginModal.classList.add("show");
        loginModal.classList.add("fadeIn");
        signupModal.classList.remove("show");
        document.body.style.overflow = "hidden"; // Prevent scrolling

      }

      function showSignupModal() {
        overlay.classList.remove("popOut");
        overlay.classList.add("show");
        signupModal.classList.add("show");
        signupModal.classList.add("fadeIn");
        loginModal.classList.remove("show");
        document.body.style.overflow = "hidden"; // Prevent scrolling

      }

      function closeModal() {
        overlay.classList.add("popOut");
        loginModal.classList.add("popOut");
        signupModal.classList.add("popOut");
        setTimeout(() => {
          loginModal.classList.remove("popOut", "show");
          signupModal.classList.remove("popOut", "show");
          overlay.classList.remove("show");
        }, 300); // This should match the duration of your pop-out animation
        document.body.style.overflow = "auto"; // Prevent scrolling

      }
    </script>

  </body>

  <!-- Mirrored from themeadapt.com/tm/eduvalt/index  by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jul 2023 15:32:11 GMT -->
</php>