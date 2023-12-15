<!-- Preloader Starts -->
  <div class="preloader" id="preloader">
    <div class="preloader-inner">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  </div>
  <!-- header -->
  <header>
    <!-- header-top -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="
                col-lg-12 col-md-12 col-12
                d-flex
                flex-wrap
                justify-content-between
              ">
            <div class="contact-box">
              <span>
                <a href="tel:09442627286"><i class="fas fa-phone-square-alt"></i> 09-442627286</a>
              </span>
              <span>
                <a href="mailto:jackfood2000@gmail.com"><i class="fas fa-envelope-open-text"></i>
                  jackfood2000@gmail.com</a></span>
            </div>
            <div class="social-box">
              <span><a href="#"><i class="fab fa-twitter"></i></a></span>
              <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
              <span><a href="#"><i class="fab fa-linkedin-in"></i></a></span>
              <span><a href="#"><i class="fab fa-instagram"></i></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom margin-top-20">
      <div class="container position-relative">
        <div class="row d-flex align-items-center">
          <div class="col-lg-2 col-md-2 col-sm-2 col-3">
            <div class="logo">
              <a href="{{url('/')}}">
                <img src="{!!asset('/images/logo/logo.png')!!}" alt="logo" /></a>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <nav id="mobile-menu">
              <ul class="main-menu">
                <li>
                  <a href="{{url('/')}}">home</a>
                </li>
                <li><a href="{{url('about')}}">about us</a></li>
                <li>
                  <a href="{{url('/restaurant/index')}}">restaurants</a>
                </li>
                <li>
                  <a href="#">pages <span><i class="fas fa-angle-down"></i></span></a>
                  <ul class="submenu">
                    <li>
                      <a href="{{url('user/checkout')}}">checkout page</a>
                    </li>
                    <li>
                      <a href="{{url('user/cart')}}">shopping cart page</a>
                    </li>
                    <li>
                      <a href="{{url('user/profile')}}">profile page</a>
                    </li>
                    <li>
                      <a href="{{url('user/login')}}">login page</a>
                    </li>
                    <li>
                      <a href="{{url('user/signup')}}">signup page</a>
                    </li>
                    <li>
                      <a href="{{url('#')}}">404 page</a>
                    </li>
                  </ul>
                </li>
                <li><a href="{{url('contact')}}">contact us</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-4 col-md-9 col-8">
            <div class="customer-area">
              <span>
                <a href="{{url('user/profile')}}"><i class="fas fa-user"></i></a>
              </span>
              <span>
                <a href="{{url('user/cart')}}"><i class="fas fa-shopping-basket"></i></a>
              </span>
              @auth
                <form method="POST" action="{{url('logout')}}" style="display:inline-block;">
                  @csrf
                  <button class="btn">
                    Logout
                  </button>
                </form>
                {{-- <a href="" class="btn">logout</a> --}}
              @else
                <a href="{{url('user/login')}}" class="btn">login</a>
              @endauth
            </div>
          </div>
        </div>
        <!-- mobile-menu -->
        <div class="mobile-menu"></div>
      </div>
    </div>
  </header>