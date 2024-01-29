<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Travgo</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('preview') }}/assets/images/favicon.png" type="image/x-icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/bootstrap.min.css">

  <!-- swiper -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/swiper-bundle.min.css">

  <!-- datepicker -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/jquery.datetimepicker.css">

  <!-- jquery ui -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/jquery-ui.min.css">

  <!-- common -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/common.css">

  <!-- animations -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/animations.css">

  <!-- welcome -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/welcome.css">

  <!-- home -->
  <link rel="stylesheet" href="{{ asset('preview') }}/assets/css/home.css">

  <style>
    :root {
        --primary: #A73B94;
    }
    .progress{
    width: 70px;
    height: 70px;
    line-height: 70px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
    }
    .progress:after{
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 5px solid #FFF;
        position: absolute;
        top: 0;
        left: 0;
    }
    .progress > span{
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }
    .progress .progress-left{
        left: 0;
    }
    .progress .progress-bar{
        width: 100%;
        height: 100%;
        background: none;
        border-width: 5px;
        border-style: solid;
        position: absolute;
        top: 0;
    }
    .progress .progress-left .progress-bar{
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }
    .progress .progress-right{
        right: 0;
    }
    .progress .progress-right .progress-bar{
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards;
    }
    .progress .progress-value{
        width: 90%;
        height: 90%;
        border-radius: 50%;
        background: #ffffff;
        font-size: 16px;
        color: #A73B94;
        line-height: 65px;
        text-align: center;
        position: absolute;
        top: 5%;
        left: 5%;
    }
    .progress.blue .progress-bar{
        border-color: #A73B94;
    }
    .progress.blue .progress-left .progress-bar{
        animation: loading-2 1.5s linear forwards 1.8s;
    }

    @keyframes loading-1{
        0%{
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100%{
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }
    @keyframes loading-2{
        0%{
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100%{
            -webkit-transform: rotate(144deg);
            transform: rotate(144deg);
        }
    }
    @keyframes loading-3{
        0%{
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100%{
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
    }
    @keyframes loading-4{
        0%{
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100%{
            -webkit-transform: rotate(36deg);
            transform: rotate(36deg);
        }
    }
    @keyframes loading-5{
        0%{
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100%{
            -webkit-transform: rotate(126deg);
            transform: rotate(126deg);
        }
    }
    @media only screen and (max-width: 990px){
        .progress{ margin-bottom: 20px; }
    }
  </style>
</head>
<body class="scrollbar-hidden">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
  <!-- splash-screen start -->
  <section id="preloader" class="spalsh-screen">
    <div class="circle text-center">
      <div>
        <h1>Travgo</h1>
        <p>Discover Your Destinition</p>
      </div>
    </div>
    <div class="loader-spinner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <!-- splash-screen end -->

  <main class="home">
    <!-- menu, side-menu start -->
    <section class="wrapper dz-mode">
      <!-- menu -->
      <div class="menu">
        <button class="toggle-btn">
          <img src="{{ asset('preview') }}/assets/images/logo-alfatihah-white.png" alt="" class="icon" style="width: 100px">
        </button>
        <div class="btn-grp d-flex align-items-center gap-16">
          <label for="mode-change" class="mode-change d-flex align-items-center justify-content-center">
            <input type="checkbox" id="mode-change">
            <img src="{{ asset('preview') }}/assets/svg/menu/sun-white.svg" alt="icon" class="sun">
            <img src="{{ asset('preview') }}/assets/svg/menu/moon-white.svg" alt="icon" class="moon">
          </label>
          <a href="./profile/user-profile.html">
            <img src="{{ asset('preview') }}/assets/svg/menu/logout.svg" alt="icon">
          </a>
        </div>
      </div>
      {{-- <div class="m-menu__overlay"></div> --}}
      <!-- main menu -->
      {{-- <div class="m-menu">
        <div class="m-menu__header">
          <button class="m-menu__close">
            <img src="{{ asset('preview') }}/assets/svg/menu/close-white.svg" alt="icon">
          </button>
          <div class="menu-user">
            <img src="{{ asset('preview') }}/assets/images/profile/avatar.png" alt="avatar">
            <div >
              <a href="#!">angela mayer</a>
              <h3>
                Verified user · Membership
              </h3>
            </div>
          </div>
        </div>
        <ul>
          <li>
            <h2 class="menu-title">menu</h2>
          </li>

          <li>
              <a href="home.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="{{ asset('preview') }}/assets/svg/menu/pie-white.svg" alt="">
                  </span>
                  overview
                </div>
                <img src="{{ asset('preview') }}/assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
              <a href="../page.html">
                <div class="d-flex align-items-center gap-16">
                  <span class="icon">
                    <img src="{{ asset('preview') }}/assets/svg/menu/page-white.svg" alt="">
                  </span>
                  pages
                </div>
                <img src="{{ asset('preview') }}/assets/svg/menu/chevron-right-black.svg" alt="">
              </a>
          </li>
          <li>
            <h2 class="menu-title">others</h2>
          </li>

          <li>
            <label class="a-label__chevron" for="item-4">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="{{ asset('preview') }}/assets/svg/menu/grid-white.svg" alt="">
                </span>
                components
              </span>
              <img src="{{ asset('preview') }}/assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-4" name="item-4" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-4">
                  <img src="{{ asset('preview') }}/assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">components</span>
              </div>
              <ul>
                <li>
                  <a href="../components/splash-screen.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      splash screen
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <label class="a-label__chevron" for="item-5">
              <span class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="{{ asset('preview') }}/assets/svg/menu/gear-white.svg" alt="">
                </span>
                settings
              </span>
              <img src="{{ asset('preview') }}/assets/svg/menu/chevron-right-black.svg" alt="">
            </label>
            <input type="checkbox" id="item-5" name="item-5" class="m-menu__checkbox">
            <div class="m-menu">
              <div class="m-menu__header">
                <label class="m-menu__toggle" for="item-5">
                  <img src="{{ asset('preview') }}/assets/svg/menu/back-white.svg" alt="">
                </label>
                <span class="m-menu__header-title">settings</span>
              </div>
              <ul>
                <li>
                  <a href="./profile/user-address.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      My Address
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./profile/user-payment.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Payment Method
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./profile/change-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Change Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./profile/forgot-password.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Forgot Password
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./profile/security.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Security
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./profile/user-language.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Language
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./profile/notifications.html">
                    <div class="d-flex align-items-center gap-16">
                      <span class="icon">
                        <img src="{{ asset('preview') }}/assets/svg/menu/box-white.svg" alt="icon">
                      </span>
                      Notifications
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dz-switch">
            <div class="a-label__chevron">
              <div class="d-flex align-items-center gap-16">
                <span class="icon">
                  <img src="{{ asset('preview') }}/assets/svg/menu/moon-white.svg" alt="">
                </span>
                switch to dark mode
              </div>
              <label class="toggle-switch" for="enableMode">
                <input type="checkbox" id="enableMode" class="mode-switch">
                <span class="slider"></span>
              </label>
            </div>
          </li>
        </ul>
      </div> --}}
      <!-- end main menu -->
    </section>
    <!-- menu, side-menu end -->

    <!-- info start -->
    <section class="info d-flex align-items-start justify-content-between pb-12">
      <div class="d-flex align-items-center justify-content-between gap-14">
        <div class="image shrink-0 rounded-full overflow-hidden">
          <img src="{{ asset('preview') }}/assets/images/home/avatar.png" alt="avatar" class="w-100 h-100 object-fit-cover">
        </div>
        <div>
          <h6><i>Assalamu'alaikum, kak </i><br><span><b>Agus Setiawan</b> 👋</span></h6>
        </div>
      </div>

      {{-- <ul class="d-flex align-items-center gap-16">
        <li>
          <a href="notification.html" class="d-flex align-items-center justify-content-center rounded-full position-relative">
            <img src="{{ asset('preview') }}/assets/svg/bell-black.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
        <li>
          <a href="chat/message.html" class="d-flex align-items-center justify-content-center rounded-full position-relative">
            <img src="{{ asset('preview') }}/assets/svg/message-square-dots.svg" alt="icon">
            <span class="dot"></span>
          </a>
        </li>
      </ul> --}}
    </section>
    <!-- info end -->

    {{-- Table Start --}}
    <div class="row">
      <div class="col-md-12 card bg-light">
        <table class="table  table-light my-0">
          <tbody>
            <tr>
              <td>
                Total pencapaian hari ini
                <br>
                <b>Rp.100.000</b>
              </td>
              <td>
                Total donatur hari ini
                <br>
                <b>1 Donatur</b>
              </td>
            </tr>
            <tr>
              <td>
                <div class="container">
                  <div class="row">
                      <div class="col-md-4 col-sm-4">
                          <div class="progress blue">
                              <span class="progress-left">
                                <span class="progress-bar"></span>
                              </span>
                              <span class="progress-right">
                                  <span class="progress-bar"></span>
                              </span>
                              <div class="progress-value">90%</div>
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-8">
                        <small>
                          Target Harian
                          <br>
                          <b>Rp 100.000</b>
                          <br>
                          <i>dari Rp 0</i>
                        </small>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="container">
                  <div class="row">
                      <div class="col-md-4 col-sm-4">
                          <div class="progress blue">
                              <span class="progress-left">
                                <span class="progress-bar"></span>
                              </span>
                              <span class="progress-right">
                                  <span class="progress-bar"></span>
                              </span>
                              <div class="progress-value">90%</div>
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-8">
                        <small>
                          Target Harian
                          <br>
                          <b>Rp 100.000</b>
                          <br>
                          <i>dari Rp 0</i>
                        </small>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="border-bottom: none" colspan="2">Lihat sebagai branch</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    {{-- Table End --}}

    <!-- search start -->
    <section class="search py-12">
      <form action="#">
        <div class="form-inner w-100 d-flex align-items-center gap-8 radius-24">
          <img src="{{ asset('preview') }}/assets/svg/search.svg" alt="search" class="shrink-0">
          <input type="search" class="input-search input-field" placeholder="Search...">
          <div class="filter shrink-0">
            <button type="button" class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#filterModal">
              <img src="{{ asset('preview') }}/assets/svg/filter-black.svg" alt="filter">
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- search end -->

    <!-- service start -->
    <section class="service py-12">
      <!-- item 1 -->
      <a href="service-location.html">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="{{ asset('preview') }}/assets/images/home/airport.png" alt="airport" class="img-fluid backface-hidden">
          </div>
          <figcaption>Airport</figcaption>
        </figure>
      </a>

      <!-- item 2 -->
      <a href="service-location.html">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="{{ asset('preview') }}/assets/images/home/car-rental.png" alt="car" class="img-fluid backface-hidden">
          </div>
          <figcaption>Rental</figcaption>
        </figure>
      </a>

      <!-- item 3 -->
      <a href="service-location.html">
        <figure class="item text-center">
          <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
            <img src="{{ asset('preview') }}/assets/images/home/hotel.png" alt="hotel" class="img-fluid backface-hidden">
          </div>
          <figcaption>Hotel</figcaption>
        </figure>
      </a>

      <!-- item 4 -->
      <figure class="item text-center" data-bs-toggle="modal" data-bs-target="#serviceModal">
        <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
          <img src="{{ asset('preview') }}/assets/images/home/category.png" alt="category" class="img-fluid backface-hidden">
        </div>
        <figcaption>More</figcaption>
      </figure>
    </section>
    <!-- service end -->

    <!-- visited start -->
    <section class="visited py-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Frequently visited</h2>
        <div class="custom-pagination visited-pagination"></div>
      </div>

      <div class="swiper visited-swiper">
        <div class="swiper-wrapper">
          <!-- item-1 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="{{ asset('preview') }}/assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="{{ asset('preview') }}/assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Tahiti Beach</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="{{ asset('preview') }}/assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(32)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-2 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="{{ asset('preview') }}/assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="{{ asset('preview') }}/assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>St. Lucia Mountain</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="{{ asset('preview') }}/assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(41)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-3 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="{{ asset('preview') }}/assets/images/home/item-1.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="{{ asset('preview') }}/assets/svg/heart-red.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>Tahiti Beach</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="{{ asset('preview') }}/assets/svg/map-marker.svg" alt="icon">
                  Polynesia, French
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(32)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

          <!-- item-4 -->
          <div class="swiper-slide place-card">
            <a href="vacation-details.html">
              <div class="image position-relative">
                <img src="{{ asset('preview') }}/assets/images/home/item-2.png" alt="desert" class="img-fluid w-100 overflow-hidden radius-8">
                <span class="d-flex align-items-center justify-content-center rounded-full">
                  <img src="{{ asset('preview') }}/assets/svg/heart-black.svg" alt="icon">
                </span>
              </div>
              <div class="content">
                <h4>St. Lucia Mountain</h4>
                <p class="d-flex align-items-center gap-04 location">
                  <img src="{{ asset('preview') }}/assets/svg/map-marker.svg" alt="icon">
                  South America
                </p>
                <div class="price d-flex align-items-center justify-content-between">
                  <h3>$235</h3>
                  <p class="d-flex align-items-center gap-04">
                    <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="icon">
                    4.4 <span>(41)</span>
                  </p>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- visited end -->

    <!-- guide start -->
    <section class="guide py-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">Tour Guide</h2>
        <a href="tour-guide.html" class="shrink-0 d-inline-block">See All</a>
      </div>

      <!-- cards -->
      <div class="d-flex gap-24 all-cards scrollbar-hidden">
        <!-- item 1 -->
        <a href="profile/guide-profile.html" class="d-flex gap-16 item w-fit shrink-0">
          <div class="image position-relative shrink-0">
            <img src="{{ asset('preview') }}/assets/images/home/guide-1.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            <div class="rating d-flex align-items-center gap-04 w-fit">
              <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="Star">
              <span class="d-inline-block">4.0</span>
            </div>
          </div>

          <div class="content">
            <h4>Emilia Ricardo</h4>
            <h5>$25 (1 Day)</h5>
            <p class="d-flex align-items-center gap-8 location">
              <img src="{{ asset('preview') }}/assets/svg/map-black.svg" alt="icon">
              Polynesia, French 
            </p>
          </div>
        </a>

        <!-- item 2 -->
        <a href="profile/guide-profile.html" class="d-flex gap-16 item w-fit shrink-0">
          <div class="image position-relative shrink-0">
            <img src="{{ asset('preview') }}/assets/images/home/guide-2.png" alt="guide" class="guide-img object-fit-cover img-fluid radius-12">
            <div class="rating d-flex align-items-center gap-04 w-fit">
              <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="Star">
              <span class="d-inline-block">4.0</span>
            </div>
          </div>

          <div class="content">
            <h4>Jonsky Alexia</h4>
            <h5>$30 (1 Day)</h5>
            <p class="d-flex align-items-center gap-8 location">
              <img src="{{ asset('preview') }}/assets/svg/map-black.svg" alt="icon">
              South America 
            </p>
          </div>
        </a>

      </div>
    </section>
    <!-- guide end -->

    <!-- budget start -->
    <section class="budget pt-12">
      <!-- title -->
      <div class="title d-flex align-items-center justify-content-between">
        <h2 class="shrink-0">On Budget Tour</h2>
        <a href="hotels.html" class="shrink-0 d-inline-block">See All</a>
      </div>

      <ul>
        <!-- item 1 -->
        <li>
          <a href="hotel-details.html" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('preview') }}/assets/images/home/budget-1.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>

            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>Ledadu Beach</h4>
                <h5>3 days 2 nights</h5>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="{{ asset('preview') }}/assets/svg/map-marker.svg" alt="icon">
                  Australia 
                </p>
              </div>
              <p class="price"><span>$20</span>/Person</p>
            </div>
          </a>
        </li>

        <!-- item 2 -->
        <li>
          <a href="hotel-details.html" class="d-flex align-items-center gap-12">
            <div class="image shrink-0 overflow-hidden radius-8">
              <img src="{{ asset('preview') }}/assets/images/home/budget-2.png" alt="Place" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
  
            <div class="content shrink-0 d-flex align-items-center gap-12 justify-content-between flex-grow">
              <div>
                <h4>Endigada Beach</h4>
                <h5>5 days 4 nights</h5>
                <p class="d-flex align-items-center gap-8 location">
                  <img src="{{ asset('preview') }}/assets/svg/map-marker.svg" alt="icon">
                  Australia 
                </p>
              </div>
              <p class="price"><span>$25</span>/Person</p>
            </div>
          </a>
        </li>
      </ul>
    </section>
    <!-- budget end -->
  </main>

  <!-- bottom navigation start -->
  <footer class="bottom-nav">
    <ul class="d-flex align-items-center justify-content-around w-100 h-100">
      <li>
        <a href="home.html">
          <img src="{{ asset('preview') }}/assets/svg/bottom-nav/home-active.svg" alt="home">
        </a>
      </li>
      <li>
        <a href="explore.html">
          <img src="{{ asset('preview') }}/assets/svg/bottom-nav/category.svg" alt="category">
        </a>
      </li>
      <li>
        <a href="ticket-booked.html">
          <img src="{{ asset('preview') }}/assets/svg/bottom-nav/ticket.svg" alt="ticket">
        </a>
      </li>
      <li>
        <a href="wishlist.html">
          <img src="{{ asset('preview') }}/assets/svg/bottom-nav/heart.svg" alt="heart">
        </a>
      </li>
      <li>
        <a href="profile/user-profile.html">
          <img src="{{ asset('preview') }}/assets/svg/bottom-nav/profile.svg" alt="profile">
        </a>
      </li>
    </ul>
  </footer>
  <!-- bottom navigation end -->

  <!-- service modal start -->
  <div class="modal fade serviceModal bottomModal modalBg" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('preview') }}/assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">All Services</h1>
        </div>
        <div class="modal-body">
          <!-- item 1 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/airport.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Airport</figcaption>
            </figure>
          </a>

          <!-- item 2 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/car.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Taxi</figcaption>
            </figure>
          </a>

          <!-- item 3 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/hotel.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Hotel</figcaption>
            </figure>
          </a>

          <!-- item 4 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/villa.png" alt="airport" class="img-fluid backface-hidden">
              </div>
              <figcaption>Villa</figcaption>
            </figure>
          </a>

          <!-- item 5 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/cafe.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Cafe</figcaption>
            </figure>
          </a>

          <!-- item 6 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/luggage.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Luggage</figcaption>
            </figure>
          </a>

          <!-- item 7 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/boat.png" alt="car" class="img-fluid backface-hidden">
              </div>
              <figcaption>Ship</figcaption>
            </figure>
          </a>

          <!-- item 8 -->
          <a href="service-location.html">
            <figure class="item text-center">
              <div class="image rounded-full d-flex align-items-center justify-content-center m-auto">
                <img src="{{ asset('preview') }}/assets/images/home/camera.png" alt="hotel" class="img-fluid backface-hidden">
              </div>
              <figcaption>Camera </figcaption>
            </figure>
          </a>

        </div>
      </div>
    </div>
  </div>
  <!-- service modal end -->

  <!-- filter modal start -->
  <div class="modal fade filterModal bottomModal" id="filterModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="modal-close rounded-full" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('preview') }}/assets/svg/close-black.svg" alt="Close">
          </button>
          <h1 class="modal-title">Filter</h1>
        </div>
        <div class="modal-body">
          <!-- price range -->
          <div class="pb-12">
            <h4 class="content-title">Price Range</h4>
            <div class="filter-range">
              <div id="price-slider-range"></div>
              <div class="price-range w-100 d-flex align-items-center justify-content-between">
                <input type="text" id="amount1">
                <input type="text" id="amount2">
              </div>
            </div>
          </div>

          <!-- popular filters -->
          <div class="py-12">
            <h4 class="content-title">Popular Filters</h4>
            <ul class="popular-filters">
              <li>
                <label for="hotel" class="filter-label">
                  <input type="checkbox" id="hotel" >
                  Hotels (340)
                </label>
              </li>
              <li>
                <label for="pool" class="filter-label">
                  <input type="checkbox" id="pool" checked>
                  Swimming Pool (340)
                </label>
              </li>
              <li>
                <label for="stars" class="filter-label">
                  <input type="checkbox" id="stars">
                  5 stars (100)
                </label>
              </li>
              <li>
                <label for="bathroom" class="filter-label">
                  <input type="checkbox" id="bathroom">
                  Private Bathroom (200)
                </label>
              </li>
              <li>
                <label for="breakfast" class="filter-label">
                  <input type="checkbox" id="breakfast">
                  Breakfast Included (115)
                </label>
              </li>
              <li>
                <label for="kitchen" class="filter-label">
                  <input type="checkbox" id="kitchen">
                  Kitchen (10)
                </label>
              </li>
            </ul>
          </div>

          <!-- star rating -->
          <div class="py-12">
            <h4 class="content-title">Star Rating</h4>
            <ul class="star-rating">
              <li>
                <label for="star1" class="filter-label">
                  <input type="radio" name="star" id="star1" >
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star2" class="filter-label">
                  <input type="radio" name="star" id="star2" >
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star3" class="filter-label">
                  <input type="radio" name="star" id="star3" >
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star4" class="filter-label">
                  <input type="radio" name="star" id="star4" checked>
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
              <li>
                <label for="star5" class="filter-label">
                  <input type="radio" name="star" id="star5" >
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                  <img src="{{ asset('preview') }}/assets/svg/star-yellow.svg" alt="star">
                </label>
              </li>
            </ul>
          </div>

          <!-- apply-filter -->
          <div class="py-12">
            <a href="search-result.html" class="btn-primary apply-filter-btn">Apply Filter</a>
          </div>

          <!-- clear-all -->
          <div class="pt-12">
            <button type="button" class="clear-all-btn" data-bs-dismiss="modal" aria-label="Close">Clear All</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- filter modal end -->
</div>
</div>
</div>
  <!-- jquery -->
  <script src="{{ asset('preview') }}/assets/js/jquery-3.6.1.min.js"></script>

  <!-- bootstrap -->
  <script src="{{ asset('preview') }}/assets/js/bootstrap.bundle.min.js"></script>

  <!-- jquery ui -->
  <script src="{{ asset('preview') }}/assets/js/jquery-ui.js"></script>

  <!-- mixitup -->
  <script src="{{ asset('preview') }}/assets/js/mixitup.min.js"></script>

  <!-- gasp -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

  <!-- draggable -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

  <!-- swiper -->
  <script src="{{ asset('preview') }}/assets/js/swiper-bundle.min.js"></script>

  <!-- datepicker -->
  <script src="{{ asset('preview') }}/assets/js/jquery.datetimepicker.full.js"></script>

  <!-- google-map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap" type="text/javascript"></script>

  <!-- script -->
  <script src="{{ asset('preview') }}/assets/js/script.js"></script>
</body>
</html>