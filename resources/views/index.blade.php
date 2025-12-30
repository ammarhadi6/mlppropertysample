<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MLP Properties</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HomeSpace
  * Template URL: https://bootstrapmade.com/homespace-bootstrap-real-estate-template/
  * Updated: Jul 05 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        
        <h1 class="sitename">MLP Property</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('listproperty') }}">List Properties</a></li>
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

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="hero-wrapper">
          <div class="row g-4">

            <div class="col-lg-7">
              <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
                <div class="content-header">
                  <span class="hero-label">
                    <i class="bi bi-house-heart"></i>
                    Dream Homes Await
                  </span>
                  <h1>Find Your Ideal Property with Expert Guidance</h1>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Connect with verified real estate professionals.</p>
                </div>

                <div class="search-container" data-aos="fade-up" data-aos-delay="300">
                  <div class="search-header">
                    <h3>Start Your Property Search</h3>
                    <p>Discover thousands of verified listings</p>
                  </div>

                  <form method="GET" action="{{ route('listproperty') }}" class="property-search-form">
                    <div class="search-grid">
                      <div class="search-field">
                        <label for="search-location" class="field-label">Location</label>
                        <input type="text" id="search-location" name="location" placeholder="Enter city or neighborhood" required="">
                        <i class="bi bi-geo-alt field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-type" class="field-label">Property Type</label>
                        <select name="type" class="form-control">
                            <option value="">All Types</option>
                            <option value="House" {{ request('type')=='House' ? 'selected' : '' }}>House</option>
                            <option value="Apartment" {{ request('type')=='Apartment' ? 'selected' : '' }}>Apartment</option>
                            <option value="Condo" {{ request('type')=='Condo' ? 'selected' : '' }}>Condo</option>
                        </select>
                        <i class="bi bi-building field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-budget" class="field-label">House Status</label>
                        <select name="status" class="form-control">
                            <option value="">Any Status</option>
                            <option value="For Sale" {{ request('status')=='For Sale' ? 'selected' : '' }}>For Sale</option>
                            <option value="For Rent" {{ request('status')=='For Rent' ? 'selected' : '' }}>For Rent</option>
                        </select>
                        <i class="bi bi-currency-dollar field-icon"></i>
                      </div>

                      <div class="search-field">
                        <label for="search-rooms" class="field-label">Bedrooms</label>
                        <select id="search-rooms" name="bedrooms">
                          <option value="">Any</option>
                          <option value="1">1 Room</option>
                          <option value="2">2 Rooms</option>
                          <option value="3">3 Rooms</option>
                          <option value="4">4 Rooms</option>
                          <option value="5+">5+ Rooms</option>
                        </select>
                        <i class="bi bi-door-open field-icon"></i>
                      </div>
                    </div>

                    <button type="submit" class="search-btn">
                      <i class="bi bi-search"></i>
                      <span>Find Properties</span>
                    </button>
                  </form>
                </div>

                <div class="achievement-grid" data-aos="fade-up" data-aos-delay="400">
                  <div class="achievement-item">
                    <div class="achievement-number">
                      <span data-purecounter-start="0" data-purecounter-end="1250" data-purecounter-duration="1" class="purecounter"></span>+
                    </div>
                    <span class="achievement-text">Active Listings</span>
                  </div>
                  <div class="achievement-item">
                    <div class="achievement-number">
                      <span data-purecounter-start="0" data-purecounter-end="89" data-purecounter-duration="1" class="purecounter"></span>+
                    </div>
                    <span class="achievement-text">Expert Agents</span>
                  </div>
                  <div class="achievement-item">
                    <div class="achievement-number">
                      <span data-purecounter-start="0" data-purecounter-end="96" data-purecounter-duration="1" class="purecounter"></span>%
                    </div>
                    <span class="achievement-text">Success Rate</span>
                  </div>
                </div>
              </div>
            </div><!-- End Hero Content -->

            <div class="col-lg-5">
              <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="visual-container">
                  <div class="featured-property">
                    <img src="{{asset('assets/img/real-estate/property-exterior-8.webp')}}" alt="Featured Property" class="img-fluid">
                    <div class="property-info">
                      <div class="property-price">$925,000</div>
                      <div class="property-details">
                        <span><i class="bi bi-geo-alt"></i> Downtown District</span>
                        <span><i class="bi bi-house"></i> 4 Bed, 3 Bath</span>
                      </div>
                    </div>
                  </div>

                  <div class="overlay-images">
                    <div class="overlay-img overlay-1">
                      <img src="{{asset('assets/img/real-estate/property-interior-4.webp')}}" alt="Interior View" class="img-fluid">
                    </div>
                    <div class="overlay-img overlay-2">
                      <img src="{{asset('assets/img/real-estate/property-exterior-2.webp')}}" alt="Exterior View" class="img-fluid">
                    </div>
                  </div>

                  
                </div>
              </div>
            </div><!-- End Hero Visual -->

          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->
<!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why Us</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h3>Why Choose Premier Real Estate Partners?</h3>
              <p>With over two decades of experience in the real estate market, we've built our reputation on trust, expertise, and exceptional results. Our dedicated team of local experts understands the nuances of every neighborhood and market trend.</p>

              <div class="features-list">
                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-check-circle-fill"></i>
                  </div>
                  <div>
                    <h5>Local Market Expertise</h5>
                    <p>Deep knowledge of neighborhoods, pricing trends, and market conditions in your area.</p>
                  </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div>
                    <h5>Verified Listings Only</h5>
                    <p>Every property is thoroughly vetted and verified before listing to ensure accuracy and quality.</p>
                  </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-headset"></i>
                  </div>
                  <div>
                    <h5>24/7 Client Support</h5>
                    <p>Our dedicated support team is available around the clock to assist with your real estate needs.</p>
                  </div>
                </div>

                <div class="feature-item d-flex align-items-center mb-3">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-graph-up-arrow"></i>
                  </div>
                  <div>
                    <h5>Proven Track Record</h5>
                    <p>Consistently delivering results with over 2,500 successful transactions and 98% client satisfaction.</p>
                  </div>
                </div>
              </div>

              <div class="cta-buttons mt-4">
                <a href="#" class="btn btn-primary me-3">Learn More About Us</a>
                <a href="#" class="btn btn-outline-primary">Contact Our Team</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="stats-section">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-house-door"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Homes Sold</div>
                    <p>Successfully closed transactions across all property types and price ranges.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2" class="purecounter"></span>%
                    </div>
                    <div class="stat-label">Client Satisfaction</div>
                    <p>Exceptional service quality rated by our satisfied homeowners and investors.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Years Experience</div>
                    <p>Two decades of expertise navigating changing market conditions successfully.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                      <i class="bi bi-award"></i>
                    </div>
                    <div class="stat-number">
                      <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="2" class="purecounter"></span>+
                    </div>
                    <div class="stat-label">Industry Awards</div>
                    <p>Recognition for excellence in real estate service and client satisfaction.</p>
                  </div>
                </div>
              </div>

              <div class="testimonial-preview mt-5">
                <div class="testimonial-card">
                  <div class="quote-icon mb-2">
                    <i class="bi bi-quote"></i>
                  </div>
                  <p>"Working with this team made buying our first home a seamless experience. Their knowledge of the local market and dedication to finding the perfect property exceeded our expectations."</p>
                  <div class="testimonial-author d-flex align-items-center mt-3">
                    <img src="{{asset('assets/img/person/person-f-3.webp')}}" alt="Client" class="author-image me-3">
                    <div>
                      <h6>Sarah Martinez</h6>
                      <span>First-time Homebuyer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-search"></i>
              </div>
              <div class="service-info">
                <h3><a href="service-details.html">Property Search</a></h3>
                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <ul class="service-highlights">
                  <li><i class="bi bi-check-circle-fill"></i> Comprehensive Listings</li>
                  <li><i class="bi bi-check-circle-fill"></i> Advanced Filtering</li>
                  <li><i class="bi bi-check-circle-fill"></i> Virtual Tours</li>
                </ul>
                <a href="service-details.html" class="service-link">
                  <span>Explore Now</span>
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
              <div class="service-visual">
                <img src="{{asset('assets/img/real-estate/property-interior-2.webp')}}" class="img-fluid" alt="Property Search" loading="lazy">
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-calculator"></i>
              </div>
              <div class="service-info">
                <h3><a href="service-details.html">Property Valuation</a></h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
                <ul class="service-highlights">
                  <li><i class="bi bi-check-circle-fill"></i> Market Analysis</li>
                  <li><i class="bi bi-check-circle-fill"></i> Comparative Reports</li>
                  <li><i class="bi bi-check-circle-fill"></i> Investment Insights</li>
                </ul>
                <a href="service-details.html" class="service-link">
                  <span>Get Valuation</span>
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
              <div class="service-visual">
                <img src="{{asset('assets/img/real-estate/property-exterior-1.webp')}}" class="img-fluid" alt="Property Valuation" loading="lazy">
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

        <div class="row g-4 mt-4">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-key"></i>
              </div>
              <div class="service-info">
                <h3><a href="service-details.html">Property Rental</a></h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                <ul class="service-highlights">
                  <li><i class="bi bi-check-circle-fill"></i> Tenant Matching</li>
                  <li><i class="bi bi-check-circle-fill"></i> Lease Management</li>
                  <li><i class="bi bi-check-circle-fill"></i> Property Maintenance</li>
                </ul>
                <a href="service-details.html" class="service-link">
                  <span>Start Renting</span>
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
              <div class="service-visual">
                <img src="{{asset('assets/img/real-estate/property-interior-8.webp')}}" class="img-fluid" alt="Property Rental" loading="lazy">
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div class="service-info">
                <h3><a href="service-details.html">Investment Advisory</a></h3>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos</p>
                <ul class="service-highlights">
                  <li><i class="bi bi-check-circle-fill"></i> Portfolio Planning</li>
                  <li><i class="bi bi-check-circle-fill"></i> Risk Assessment</li>
                  <li><i class="bi bi-check-circle-fill"></i> Market Forecasting</li>
                </ul>
                <a href="service-details.html" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-up-right"></i>
                </a>
              </div>
              <div class="service-visual">
                <img src="{{asset('assets/img/real-estate/property-exterior-4.webp')}}" class="img-fluid" alt="Investment Advisory" loading="lazy">
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-grid">

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="100">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{asset('assets/img/person/person-f-5.webp')}}" class="img-fluid" alt="Testimonial 1">
                </div>
                <div class="testimonial-meta">
                  <h3>Sophia Martinez</h3>
                  <h4>Creative Director</h4>
                  <div class="company-logo">
                    <i class="bi bi-building"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Leveraging cutting-edge design principles to create immersive brand experiences that resonate with modern audiences.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{asset('assets/img/person/person-m-5.webp')}}" class="img-fluid" alt="Testimonial 2">
                </div>
                <div class="testimonial-meta">
                  <h3>Alexander Wright</h3>
                  <h4>CEO &amp; Founder</h4>
                  <div class="company-logo">
                    <i class="bi bi-buildings"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Revolutionary solutions have transformed our business landscape, driving unprecedented growth and market leadership position.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{asset('assets/img/person/person-f-6.webp')}}" class="img-fluid" alt="Testimonial 3">
                </div>
                <div class="testimonial-meta">
                  <h3>Isabella Kim</h3>
                  <h4>Product Strategist</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-check"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Strategic implementation of innovative technologies has elevated our product development and market penetration.</p>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-image">
                  <img src="{{asset('assets/img/person/person-m-6.webp')}}" class="img-fluid" alt="Testimonial 4">
                </div>
                <div class="testimonial-meta">
                  <h3>James Cooper</h3>
                  <h4>Tech Lead</h4>
                  <div class="company-logo">
                    <i class="bi bi-building-gear"></i>
                  </div>
                </div>
              </div>
              <div class="testimonial-body">
                <i class="bi bi-chat-quote-fill quote-icon"></i>
                <p>Exceptional technical expertise and innovative solutions have streamlined our development processes significantly.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Call To Action Section -->
    <section class="call-to-action-1 call-to-action section" id="call-to-action">
      <div class="cta-bg" style="background-image: url('{{asset('assets/img/real-estate/showcase-3.webp')}}');"></div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8">

            <div class="cta-content text-center">
              <h2>Need Help Finding Your Dream Property?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

              <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Contact Us Today</a>
                <a href="#" class="btn btn-outline">Schedule a Call</a>
              </div>

              <div class="cta-features">
                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-telephone-fill"></i>
                  <span>Free Consultation</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="250">
                  <i class="bi bi-clock-fill"></i>
                  <span>24/7 Support</span>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-shield-check-fill"></i>
                  <span>Trusted Experts</span>
                </div>
              </div>

            </div><!-- End CTA Content -->

          </div>
        </div>

      </div>
    </section><!-- /Call To Action Section -->

  <!-- Contact 2 Section -->
    <section id="contact-2" class="contact-2 section">

      <!-- Map Section -->
      <div class="map-container mb-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.550115382616!2d101.52488621162996!3d2.944694197019186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdafb74762c61b%3A0x431ab639bc07472b!2sMLP%20PROPERTIES%20SDN%20BHD!5e0!3m2!1sen!2smy!4v1759158758642!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
<br>
        <!-- Contact Info -->
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-md-6">
            <div class="contact-info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Location</h4>
                <p>19-1, Jalan Aman Sinaria 2,
                  Bandar Tropicana Aman,
                  42500 Telok Panglima Garang,Selangor</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="info-content">
                <h4>Phone &amp; Email</h4>
                <p>+60 03-9767 8524</p>
                <p>info@example.com</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Let's Get in Touch</h2>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Your Message" rows="6" required=""></textarea>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn-submit">Connect With us</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section>
  </main>

 <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">MLP Property</span>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MLP Properties Sdn Bhd</strong> <span>All Rights Reserved</span></p>
     
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