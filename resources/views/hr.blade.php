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
@section('meta_title', 'WorFlik HR & Payroll System – Smart HRM for Modern Businesses')
@section('meta_description',
'Manage employee records, attendance, payroll, leave, and HR compliance effortlessly. WorFlik offers a complete HRM
module built for accuracy, automation, and scalability.'
)

<body>

  @include('layouts.header')

  <!-- ================= Accounting Section ================= -->
  <section class="accounting-section">
    <!-- overlay container -->
    <div class="accounting-container">

      <!-- Left text + button -->
      <div class="accounting-left">
        <h1>HR &amp; Payroll</h1>
        <p>
          Manage staff details, salaries, commissions, and work schedules with ease.
        </p>
        <a href="{{ route('home.register') }}" class="acc-btn">Get Started</a>
      </div>

      <!-- Right image -->
      <div class="accounting-right">
        <img class="hr-img" src="/img/HR.png" alt="Accounting Illustration">
      </div>

    </div>
  </section>

  <section class="service-section">
    <!-- ================= Accounts Management Section ================= -->
    <section class="HR-payroll">
      <div class="HR-heading">
        <h1>HR &amp; Payroll Management</h1>
        <p>
          Handle all your people operations - from salaries and schedules to performance - in one smooth
          system. WorFlik makes managing permanent and commission-based staff simple, organized, and
          stress-free.
        </p>
      </div>
    </section>





    <!----------------------------Features Section----------------------------->
    <h2 class="section-title">Key Features</h2>
    <section class="features-section">
      <div class="feature">
        <img src="/img/attendance.png" alt="Smart Attendance" class="feature-icon">
        <div class="feature-text">
          <h3>Smart Attendance Management</h3>
          <p>Track daily attendance, manage bulk entries, assign holidays, and automate
            leave tracking — all from a unified dashboard.</p>
        </div>
      </div>

      <div class="feature">
        <img src="/img/employee.png" alt="Employee Lifecycle" class="feature-icon">
        <div class="feature-text">
          <h3>Employee Lifecycle Management</h3>
          <p>Handle everything from onboarding to offboarding: maintain staff profiles,
            manage transfers, promotions, awards, and disciplinary records — all with a few clicks.</p>
        </div>
      </div>

      <div class="feature">
        <img src="/img/HR-records.png" alt="Employee Lifecycle" class="feature-icon">
        <div class="feature-text">
          <h3>Centralized HR Records</h3>
          <p>Securely store and access employee documents,
            asset allocations, meeting logs, and company policies in one place
            , ensuring full compliance and clarity.</p>
        </div>
      </div>

      <div class="feature">
        <img src="/img/performance.png" alt="Employee Lifecycle" class="feature-icon">
        <div class="feature-text">
          <h3>Performance & Training Insights</h3>
          <p>Evaluate each employee’s growth with advanced tracking for performance indicators, appraisals,
            and goal achievements. Set technical, behavioral, and organizational KPIs at the department or
            branch level.</p>
        </div>
      </div>

      <div class="feature">
        <img src="/img/payroll.png" alt="Employee Lifecycle" class="feature-icon">
        <div class="feature-text">
          <h3>Seamless Payroll Processing</h3>
          <p>Customize salaries across various components, automate payslip generation,
            and run bulk payments without errors. Supports commission-based and fixed compensation models.
          </p>
        </div>
      </div>

      <div class="feature">
        <img src="/img/analytics.png" alt="Employee Lifecycle" class="feature-icon">
        <div class="feature-text">
          <h3>Role-Based Analytics</h3>
          <p>Get a clear view of revenue contributions and productivity metrics for each team member — ideal
            for performance reviews and bonus planning.</p>
        </div>
      </div>
    </section>



    <!-- Why It Works -->
    <section class="why-it-section">
      <h2>Why It Works</h2>
      <ul class="why-list">
        <li>Time-Saving Automation: No more manual calculations - run payroll and commissions with ease.</li>
        <li>Smarter Oversight: Access real-time insights on staff performance and contribution.</li>
        <li>Better Team Experience: Organized HR processes lead to higher satisfaction and accountability.</li>
      </ul>
    </section>

    </div>

    <!------Get Started Button------>
    <div class="get-btn-div">
      <a href="{{ route('home.register') }}" class="get-btn">Get Started</a>
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