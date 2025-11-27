<!DOCTYPE html>
<html lang="en">

@section('css')
<link rel="stylesheet" href="{{ asset('asset/index.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">

@endsection
@include('layouts.head')
@section('meta_title', 'WorFlik – All-in-One ERP for Accounting, HR, POS & Inventory')
@section('meta_description',
'WorFlik is a cloud-based ERP system that helps businesses manage accounting, HR, payroll, POS billing, inventory, and
more from one dashboard.'
)
@section('meta_keywords', 'erp software, accounting, pos, hr payroll, inventory management')

<body>

  @include('layouts.header')







  <!-- dashboard image -->
  <section class="dashboard-container">
    <div class="left-section">
      <p class="top-p">Built for every industry, designed for every team.</p>
      <div class="decor-bar"></div>
      <h1 class="dash-h1">One Platform. Total Business Control.</h1>
      <p class="dash-p ">
        Empower your entire company with Workflik – an all-in-one cloud-based
        ERP software built to simplify accounting, HR, inventory, POS,
        and team operations from a single dashboard.
      </p>

      <div class="book-form">
        <input type="text" placeholder="Enter Your Email">
        <button class="form-btn"><a href="{{ route('home.contact') }}">Book a Demo</a></button>
      </div>
    </div>

    <div class="right-section">
      <img src="/img/Group 3.png" alt="Laptop mockup" class="laptop-img">
    </div>
  </section>


  <!-----Our Features Section----->
  <div class="features-heading">
    <h1>Our Features</h1>
    <h4>Everything You Need. Nothing You Don't</h4>
    <p>WorFlik combines powerful modules into one intelligent system -<br> designed to streamline, scale, and secure
      your operations</p>


    <section class="cards-section">
      <div class="card">
        <img src="/img/Vector.png" alt="icon 1">
        <h3>Real-Time Reporting</h3>
        <div class="decor-bars"></div>
      </div>
      <div class="card">
        <img src="/img/Vector.png" alt="icon 2">
        <h3>Role-Based Access Control</h3>
        <div class="decor-bars"></div>
      </div>
      <div class="card">
        <img src="/img/Vector.png" alt="icon 3">
        <h3>Multi-Company, Multi-User</h3>
        <div class="decor-bars"></div>
      </div>
      <div class="card">
        <img src="/img/Vector.png" alt="icon 4">
        <h3>100%<br>Cloud-Based</h3>
        <div class="decor-bars"></div>
      </div>
      <div class="card">
        <img src="/img/Vector.png" alt="icon 5">
        <h3>Auto Backups & Security Encryption</h3>
        <div class="decor-bars"></div>
      </div>
      <div class="card">
        <img src="/img/Vector.png" alt="icon 6">
        <h3>Modular & Scalable</h3>
        <div class="decor-bars"></div>
      </div>
    </section>
  </div>

  <!----What's inside Section----->
  <section class="inside-section">
    <div class="inside-container">

      <h2 class="inside-title">What’s Inside</h2>
      <p class="inside-subtitle">
        WorFlik unifies smart modules into one powerful system — built to streamline operations,
        scale faster, and stay secure.
      </p>

      <div class="inside-cards">
        <!-- Card 1 -->
        <div class="inside-card">
          <img src="/img/account-emoji.png" alt="Accounting Icon" class="card-icon">
          <h3>Accounting & Finance</h3>
          <p>
            Generate invoices, manage expenses, track cash flows,
            and automate tax-ready reports.
          </p>
          <a href="{{ route('home.accounting') }}">See More Details &rsaquo;</a>
        </div>

        <!-- Card 2 -->
        <div class="inside-card">
          <img src="/img/account-emoji.png" alt="HR Icon" class="card-icon">
          <h3>HR & Payroll</h3>
          <p>
            Handle employee onboarding, salary management,
            leave tracking, and HR records — in just a few clicks.
          </p>
          <a href="{{ route('home.hr') }}">See More Details &rsaquo;</a>
        </div>

        <!-- Card 3 -->
        <div class="inside-card">
          <img src="/img/account-emoji.png" alt="POS Icon" class="card-icon">
          <h3>POS System</h3>
          <p>
            Sell faster, smarter, and on the go with our integrated Point of Sale
            system — ideal for retail & service businesses.
          </p>
          <a href="{{ route('home.pos') }}">See More Details &rsaquo;</a>
        </div>
      </div>
      <a href="{{ route('home.register') }}" class="trial-btn">Start Your Free Trial</a>
    </div>
  </section>


  <!----Worflik Journey---->
  <section class="our-journey">
    <div class="journey-section">
      <div class="our-text">
        <h1>Your WorFlik Journey Simplified</h1>
        <p>Your 3-Steps Journey to Smarter Accounting Starts Here</p>
      </div>

      <div class="journey-img-container">

        <div class="img-text">
          <div class="img-box">
            <img src="/img/choose-journey.png">
          </div>
          <p>Choose Your Package & Services</p>
        </div>

        <div class="arrow-img">
          <img src="/img/curve-arrow.png" alt="">
        </div>

        <div class="img-text">
          <div class="img-box">
            <img src="/img/registration.png">
          </div>
          <p>Complete Registration</p>
        </div>

        <div class="arrow-img">
          <img src="/img/curve-arrow.png" alt="">
        </div>

        <div class="img-text">
          <div class="img-box">
            <img src="/img/start-working.png">
          </div>
          <p>Get Started Instantly</p>
        </div>

      </div>

      <div class="free-trial-btn">
        <a href="{{ route('home.register') }}" class="trial-btn">Start Your Free Trial</a>
      </div>
    </div>


    <!-----Business Help Card----->
    <section class="outer-section">
      <div class="main-card">
        <!-- Left Part -->
        <div class="left-part">
          <h1>WorFlik helps businesses work smarter and<br> grow stronger.</h1>
          <p>
            WorFlik was built to estimate scattered tools, outdated systems, and complexity. Whether you're
            managing 5 or 500, run accounting, HR, POS, and inventory - all from one seamless platform.
          </p>

          <a class="inside-trial" ; href="{{ route('home.register') }}">Start Your Free Trial</a>
        </div>

        <!-- Right Part -->
        <div class="right-part">
          <div class="mini-card-1">Clarity at a Glance</div>
          <div class="mini-card-2">Security by Design</div>
          <div class="mini-card-3">Built to Scale</div>
        </div>
      </div>
    </section>

    <section class="testimonial-section">
      <h2>What our User Say's</h2>

      <div class="testimonial-container">
        <!-- Card 1 -->
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="review">
            "Switching to WorFlik transformed the way we run our business. From accounting to HR and
            inventory, everything is now under one roof - simple, secure, and surprisingly affordable."
          </p>
          <div class="profile">
            <img src="/img/Ellipse 8.png" alt="Profile">
            <div class="profile-info">
              <h1>Anton Kash</h1>
              <span>CEO, Hales Tech</span>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="review">
            "Switching to WorFlik transformed the way we run our business. From accounting to HR and
            inventory, everything is now under one roof - simple, secure, and surprisingly affordable."
          </p>
          <div class="profile">
            <img src="/img/Ellipse 8.png" alt="Profile">
            <div class="profile-info">
              <h1>Anton Kash</h1>
              <span>CEO, Hales Tech</span>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p class="review">
            "Switching to WorFlik transformed the way we run our business. From accounting to HR and
            inventory, everything is now under one roof - simple, secure, and surprisingly affordable."
          </p>
          <div class="profile">
            <img src="/img/Ellipse 8.png" alt="Profile">
            <div class="profile-info">
              <h1>Anton Kash</h1>
              <span>CEO, Hales Tech</span>
            </div>
          </div>
        </div>
      </div>
      <a href="{{ route('home.pricing') }}" class="get-started-btn">Get Started</a>
    </section>


    @include('layouts.footer')
  </section>


</body>

</html>