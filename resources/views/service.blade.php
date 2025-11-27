<!DOCTYPE html>
<html lang="en">
@section('css')
<link rel="stylesheet" href="{{ asset('asset/services.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
@endsection
@include('layouts.head')

@section('meta_title', 'WorFlik Services – ERP Modules for Accounting, HRM, POS & Inventory')

@section('meta_description',
'Explore WorFlik’s ERP services, including Accounting & Finance, HR & Payroll, POS Management, Inventory Tracking,
Multi-Company support, and role-based access. A complete solution to manage your entire business.'
)

<body>

  @include('layouts.header')

  <!-- dashboard image -->
  <section class="dashboard-container">

    <div class="dashboard-items">

      <div class="left-img">
        <img src="/img/service-dash.png" alt="dashboard-img">
      </div>

      <div class="right-text">
        <h5>All-in-One ERP Solution</h5>
        <div class="decor-bar"></div>
        <h1>Simplify Operations, Amplify Growth</h1>
        <p>
          With WorFlik, You can streamline accounting, HR, inventory,
          and POS through one unified platform. Say goodbye to scattered
          systems and manual work - and gain complete control, efficiency, and
          insight across your business. Designed to scale with you at every stage.
        </p>
        <a class="dash-btn" href="{{ route('home.register') }}">Get Started</a>
      </div>
    </div>
  </section>

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

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const header = document.getElementById('header');
    let lastScrollTop = 0;

    window.addEventListener('scroll', () => {
      const scrollTop = window.scrollY || document.documentElement.scrollTop;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      const scrolledPercent = (scrollTop / docHeight) * 100;

      if (scrollTop > lastScrollTop) {
        // Scrolling down
        if (scrolledPercent > 16) {
          header.classList.add('hide');
        }
      } else {
        // Scrolling up
        if (scrolledPercent < 10) {
          header.classList.remove('hide');
        }
      }
      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
  });
  </script>


  <!-- Font Awesome for search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </section>


  <!-----------------------------FOOTER SECTION-------------------------------------->
  @include('layouts.footer')
</body>

</html>
