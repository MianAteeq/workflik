<!DOCTYPE html>
<html lang="en">
@section('css')
<link rel="stylesheet" href="{{ asset('asset/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/pricing.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
@endsection
@include('layouts.head')

@section('meta_title', 'WorFlik Pricing – Affordable ERP Plans for Every Business')

@section('meta_description',
'Choose the right WorFlik ERP package for your business needs. Transparent pricing for Accounting, HR, POS, and
Inventory modules. Flexible plans with free trial and full support included.'
)

<body>

  @include('layouts.header')

  <!-- ======================================= Pricing Section 1 ======================================================== -->
  <section class="pricing-section">
    <!-- overlay container -->
    <div class="pricing-container">

      <!-- Left text + button -->
      <div class="pricing-left">
        <h1>Simple Plans. Powerful Possibilities.</h1>
        <p>
          No hidden costs, no surprise - just flexible pricing that grows with your business. Choose the
          modules you need and scale effortlessly as you expand.
        </p>
        <a href="{{ route('home.register') }}" class="pricing-btn">Get Started</a>
      </div>

      <!-- Right image -->
      <div class="pricing-right">
        <img class="pricing-img" src="/img/pricing.png" alt="Pricing Illustration">
      </div>
    </div>
  </section>


  <!-- ======================================= Pricing Section 2 ======================================================== -->
  <div class="pricing-card-heading">
    <h1>Find the Perfect Plan to Power Your Business</h1>
  </div>
  <section class="pricing-card-section">
    <div class="pricing-cards">

      <div class="pricing-card">
        <h2>Basic</h2>
        <p>Perfect for sale business owners who need core accounting</p>
        <h3>Starting at</h3>
        <h4><span>$19</span>per month</h4>
        <div class="decor-bar"></div>
        <ul>
          <li><img src="/img/check-circle-1.png" alt="">No. of User: 1</li>
          <li><img src="/img/check-circle-1.png" alt="">Accounting (Double Entry)</li>
          <li><img src="/img/check-circle-1.png" alt="">Invoicing & Credit Notes</li>
          <li><img src="/img/check-circle-1.png" alt="">Budget Planner</li>
          <li><img src="/img/check-circle-1.png" alt="">Basic Reports</li>
          <li><img src="/img/check-circle-1.png" alt="">Email Support</li>
          <li><img src="/img/check-circle-1.png" alt="">Add HR or POS</li>
        </ul>
        <a href="{{ route('home.register') }}" class="price-btn">Buy Plan Now</a>
      </div>

      <div class="pricing-card">
        <h2>Pro</h2>
        <p>Ideal for growing teams managing finance + inventory.</p>
        <h3>Starting at</h3>
        <h4><span>$49</span>per month</h4>
        <div class="decor-bar"></div>
        <ul>
          <li><img src="/img/check-circle-1.png" alt="">No. of User: 5</li>
          <li><img src="/img/check-circle-1.png" alt="">All Features in Basic Plan</li>
          <li><img src="/img/check-circle-1.png" alt="">Advanced Reports</li>
          <li><img src="/img/check-circle-1.png" alt="">Role-Based Access</li>
          <li><img src="/img/check-circle-1.png" alt="">Advance Analytics</li>
          <li><img src="/img/check-circle-1.png" alt="">Email Support</li>
          <li><img src="/img/check-circle-1.png" alt="">Add HR or POS</li>
        </ul>
        <a href="{{ route('home.register') }}" class="price-btn">Buy Plan Now</a>
      </div>

      <div class="pricing-card">
        <h2>Enterprise</h2>
        <p>Everything you need - all features, no <br>limits.</p>
        <h3>Starting at</h3>
        <h4><span>$99</span>per month</h4>
        <div class="decor-bar"></div>
        <ul>
          <li><img src="/img/check-circle-1.png" alt="">No. of User: 20+</li>
          <li><img src="/img/check-circle-1.png" alt="">All Features in Basic & Pro</li>
          <li><img src="/img/check-circle-1.png" alt="">Accounting, HR, POS</li>
          <li><img src="/img/check-circle-1.png" alt="">Custom Dashboards</li>
          <li><img src="/img/check-circle-1.png" alt="">Contracts, and Goals</li>
          <li><img src="/img/check-circle-1.png" alt="">Advanced Permissions</li>
          <li><img src="/img/check-circle-1.png" alt="">Priority Support</li>
        </ul>
        <a href="{{ route('home.register') }}" class="price-btn">Buy Plan Now</a>
      </div>
    </div>
    </div>
  </section>


  <!-- ======================================= Pricing Section 3 ======================================================== -->
  <div class="workflow-title">
    <h1>Enhance Your Workflow with <br> Power Add-on</h1>
    <p>Add only what you need - from smart HR tools to a lightning-fast POS <br> system, designed to plug right into
      your base plan.</p>
  </div>
  <section class="workflow-section">
    <div class="workflow-flex">
      <div class="workflow-cards">
        <div class="workflow-card">
          <p>Add-on</p>
          <h1>HR Management</h1>
          <p>Designed to simplify team operations and boost performance</p>
          <div class="under-line"></div>
          <ul>
            <li><img src="/img/check-circle-1.png" alt="">Payroll & Salary Management</li>
            <li><img src="/img/check-circle-1.png" alt="">Attendance & Leave Tracking</li>
            <li><img src="/img/check-circle-1.png" alt="">Performance Reviews & Goals</li>
            <li><img src="/img/check-circle-1.png" alt="">Role Assignments & Access Control</li>
            <li><img src="/img/check-circle-1.png" alt="">No Standalone work</li>
          </ul>
          <div class="workflow-btn-price">
            <a class="workflow-btn" href="{{ route('home.register') }}">Add to Plan</a>
            <p class="workflow-btn-p"> <span class="dollar">$15</span>per month</p>
          </div>
        </div>

        <div class="workflow-card">
          <p>Add-on</p>
          <h1>POS System</h1>
          <p>Fast, reliable billing for walk-ins and product sales - no base plan required.</p>
          <div class="under-line"></div>
          <ul>
            <li><img src="/img/check-circle-1.png" alt="">Barcode Scanning & Quick Billing</li>
            <li><img src="/img/check-circle-1.png" alt="">Walk-in & Appointment Checkout</li>
            <li><img src="/img/check-circle-1.png" alt="">Tax & Discount Automation</li>
            <li><img src="/img/check-circle-1.png" alt="">Product & Service Sales Integration</li>
            <li><img src="/img/check-circle-1.png" alt="">Works standalone or with any plan</li>
          </ul>
          <div class="workflow-btn-price">
            <a class="workflow-btn" href="{{ route('home.register') }}">Add to Plan</a>
            <p class="workflow-btn-p"> <span class="dollar">$25</span>per month</p>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Font Awesome for search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </section>

  @include('layouts.footer')





  <!-- Font Awesome for search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </section>

</body>

</html>
