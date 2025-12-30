<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>List Properties</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset(path: 'assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset(path: 'assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset(path: 'assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset(path: 'assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset(path: 'assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset(path: 'assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset(path: 'assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HomeSpace
  * Template URL: https://bootstrapmade.com/homespace-bootstrap-real-estate-template/
  * Updated: Jul 05 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="properties-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="bgCarrier" stroke-width="0"></g>
          <g id="tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="iconCarrier">
            <path d="M22 22L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M2 11L6.06296 7.74968M22 11L13.8741 4.49931C12.7784 3.62279 11.2216 3.62279 10.1259 4.49931L9.34398 5.12486" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M4 22V9.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M20 9.5V13.5M20 22V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393M9 22V17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="currentColor" stroke-width="1.5"></path>
          </g>
        </svg>
        <h1 class="sitename">MLP Properties</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('listproperty') }}">Properties</a></li>
          <!--<li><a href="services.html">Services</a></li>
          <li><a href="agents.html">Agents</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="property-details.html">Property Details</a></li>
              <li><a href="service-details.html">Service Details</a></li>
              <li><a href="agent-profile.html">Agent Profile</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
              <li><a href="terms.html">Terms</a></li>
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="404.html">404</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact-2">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Properties</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Properties</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Properties Section -->
    <section id="properties" class="properties section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Search Form -->
        <form method="GET" action="{{ route('listproperty') }}" class="row g-3 mb-4">
            <div class="col-md-3">
                <input type="text" name="location" value="{{ request('location') }}" class="form-control" placeholder="Location">
            </div>
            <div class="col-md-2">
                <select name="type" class="form-control">
                    <option value="">All Types</option>
                    <option value="House" {{ request('type')=='House' ? 'selected' : '' }}>House</option>
                    <option value="Apartment" {{ request('type')=='Apartment' ? 'selected' : '' }}>Apartment</option>
                    <option value="Condo" {{ request('type')=='Condo' ? 'selected' : '' }}>Condo</option>
                </select>
            </div>
            <div class="col-md-2">
                <select name="status" class="form-control">
                    <option value="">Any Status</option>
                    <option value="For Sale" {{ request('status')=='For Sale' ? 'selected' : '' }}>For Sale</option>
                    <option value="For Rent" {{ request('status')=='For Rent' ? 'selected' : '' }}>For Rent</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="number" name="bedrooms" value="{{ request('bedrooms') }}" class="form-control" placeholder="Bedrooms">
            </div>
            <div class="col-md-1">
                <input type="number" name="min_price" value="{{ request('min_price') }}" class="form-control" placeholder="Min">
            </div>
            <div class="col-md-1">
                <input type="number" name="max_price" value="{{ request('max_price') }}" class="form-control" placeholder="Max">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </form>

        <div class="results-header mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="results-info">
                  <!-- Show dynamic property count -->
                  <h5>{{ $properties->total() }} Properties Found</h5>

                  <!--Show dynamic location (if searched) -->
                  @if(request('location'))
                    <p class="text-muted">
                      Showing properties in {{ request('location') }}
                    </p>
                  @else
                    <p class="text-muted">
                      Showing all available properties
                    </p>
                  @endif
                </div>
              </div>
              <div class="col-lg-6">
                <div class="results-controls">
                    <div class="d-flex gap-3 align-items-center justify-content-lg-end">
                        <div class="sort-dropdown">
                            <form method="GET" action="{{ route('listproperty') }}">
                                <select class="form-select form-select-sm" name="sort" onchange="this.form.submit()">
                                    <option value="" disabled {{ !request('sort') ? 'selected' : '' }}>Sort by</option>
                                    <option value="price_asc" {{ request('sort')=='price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                                    <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                                    <option value="newest" {{ request('sort')=='newest' ? 'selected' : '' }}>Newest First</option>
                                    <option value="size" {{ request('sort')=='size' ? 'selected' : '' }}>Largest Size</option>
                                </select>
                                {{-- Keep other filters when sorting --}}
                                @foreach(request()->except('sort', 'page') as $key => $value)
                                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                @endforeach
                            </form>
                        </div>

                        
                    </div>
                </div>
            </div>

            </div>
          </div>


        <div class="properties-container">

          <div class="properties-masonry view-masonry active" data-aos="fade-up" data-aos-delay="250">
            <div class="row g-4">

                <div class="row g-4">
                      @forelse($properties as $property)
                          <div class="col-lg-4 col-md-6">
                              <div class="card shadow-sm">
                                  <img src="{{ asset($property->image) }}" class="card-img-top" alt="{{ $property->title }}">
                                  <div class="card-body">
                                      <h5 class="card-title">{{ $property->title }}</h5>
                                      <p class="card-text">
                                          <strong>${{ number_format($property->price) }}</strong><br>
                                          {{ $property->address }}<br>
                                          {{ $property->bedrooms }} Beds • {{ $property->bathrooms }} Baths • {{ $property->size }} sqft
                                      </p>
                                      <p class="text-muted">{{ $property->type }} • {{ $property->status }}</p>
                                  </div>
                              </div>
                          </div>
                      @empty
                          <p class="text-center">No properties found.</p>
                      @endforelse
                  </div>

            </div>
          </div>
        </div>

         <!-- Pagination -->
          <div class="mt-4">
              {{ $properties->withQueryString()->links() }}
          </div>

      </div>

    </section><!-- /Properties Section -->

  </main>

   <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">HomeSpace</span>
          </a>
          <p>Platform terbaik untuk mencari rumah idaman anda, memudahkan anda akses kepada pelbagai jenis dan rumah yang mengikut budget anda.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">List Of Properties</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Consultation</a></li>
            <li><a href="#">House Advise</a></li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>19-1, Jalan Aman Sinaria 2,   </p>
          <p>Bandar Tropicana Aman,</p>
          <p>42500 Telok Panglima Garang,Selangor</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+60 03-9767 8524</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">HomeSpace</strong> <span>All Rights Reserved</span></p>
     
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>