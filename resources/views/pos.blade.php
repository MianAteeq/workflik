<!DOCTYPE html>
<html lang="en">


@section('css')
<link rel="stylesheet" href="{{ asset('asset/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/hr.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
@endsection
@include('layouts.head')
@extends('layouts.app')
@section('meta_title', 'WorFlik POS Software – Fast Billing & Inventory Sync')
@section('meta_description',
'Boost your sales efficiency with WorFlik POS. Enjoy fast billing, stock synchronization, multi-store management, and
real-time sales reporting — fully integrated with the ERP system.'
)

<body>

  @include('layouts.header')

  <!-- ================= Accounting Section ================= -->
  <section class="accounting-section">
    <!-- overlay container -->
    <div class="accounting-container">

      <!-- Left text + button -->
      <div class="accounting-left">
        <h1>POS System</h1>
        <p>
          A fast, intelligent billing system for walk-ins, booking, and product sales.
        </p>
        <a href="#" class="acc-btn">Get Started</a>
      </div>

      <!-- Right image -->
      <div class="accounting-right">
        <img class="hr-img" src="/img/POS.png" alt="Accounting Illustration">
      </div>

    </div>
  </section>

  <section class="service-section">
    <!-- ================= Accounts Management Section ================= -->
    <section class="HR-payroll">
      <div class="HR-heading">
        <h1>POS System Management</h1>
        <p>
          WorFlik's POS System acts as your smart digital cashier - engineered for speed, precision, and ease.
          Whether it's appointment or walk-in sales, you can hangle every transaction smoothly and
          professionaly.
        </p>
      </div>
    </section>





    <!----------------------------Features Section----------------------------->
    <h2 class="section-title">Key Features</h2>
    <section class="features-section">
      <div class="POS-features">
        <div class="feature">
          <img src="/img/unified.png" alt="Smart Attendance" class="feature-icon">
          <div class="feature-text">
            <h3>Unified Sales Management</h3>
            <p>Process both service and product sales in a single invoice, with options to assign staff and
              apply item-level discounts.</p>
          </div>
        </div>

        <div class="feature">
          <img src="/img/barcode.png" alt="Employee Lifecycle" class="feature-icon">
          <div class="feature-text">
            <h3>Barcode & Discount Ready</h3>
            <p>Easily print barcodes and apply automated discounts for POS items directly within the system.
            </p>
          </div>
        </div>

        <div class="feature">
          <img src="/img/flexible.png" alt="Employee Lifecycle" class="feature-icon">
          <div class="feature-text">
            <h3>Flexible Payments</h3>
            <p>Accept multiple payment modes - cash, card, or digital - with auto tax calculations for each
              transaction</p>
          </div>
        </div>

        <div class="feature">
          <img src="/img/inventory.png" alt="Employee Lifecycle" class="feature-icon">
          <div class="feature-text">
            <h3>Smart Inventory Integration</h3>
            <p>Link your POS to warehouse and purchase modules, so stock updates happen in real time with
              every scale.</p>
          </div>
        </div>

        <div class="feature">
          <img src="/img/bill.png" alt="Employee Lifecycle" class="feature-icon">
          <div class="feature-text">
            <h3>Instant Billing</h3>
            <p>Generate client-specific or walk-in invoices with clear, printable receipts.</p>
          </div>
        </div>

        <div class="feature">
          <img src="/img/analytics.png" alt="Employee Lifecycle" class="feature-icon">
          <div class="feature-text">
            <h3>Role-Based Analytics</h3>
            <p>View POS reports by day, staff, service, or branch to monitor performance and revenue trends.
            </p>
          </div>
        </div>
      </div>

    </section>



    <!-- Why It Works -->
    <section class="why-it-section">
      <h2>Why It Works</h2>
      <ul class="why-list">
        <li>Faster Transactions: Speeds up billing and minimizes client wait time.</li>
        <li>Error-Free Accounting: Automated calculations ensure accuracy every time.</li>
        <li>Smarter Operations: Real-time stock sync and detailed reports streamline business decisions.</li>
        <li>Improved Experience: A smooth checkout process builds trust and keeps customers coming back.</li>
      </ul>
    </section>

    </div>

    <!------Get Started Button------>
    <div class="get-btn-div">
      <a href="#" class="get-btn">Get Started</a>
    </div>

  </section>
  </section>


  <!-- Font Awesome for search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </section>
  @include('layouts.footer')
  </section>
</body>

</html>