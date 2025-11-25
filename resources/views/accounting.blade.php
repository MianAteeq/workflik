<!DOCTYPE html>
<html lang="en">

@section('css')
<link rel="stylesheet" href="{{ asset('asset/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/Accounting.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
@endsection
@include('layouts.head')

<body>

  @include('layouts.header')

  <!-- ================= Accounting Section ================= -->
  <section class="accounting-section">
    <!-- overlay container -->
    <div class="accounting-container">

      <!-- Left text + button -->
      <div class="accounting-left">
        <h1>Accounting &amp; Finance</h1>
        <p>
          Track income, expenses, dues, and profits with complete financial
          transparency using our advanced Accounts Management system.
        </p>
        <a href="#" class="acc-btn">Get Started</a>
      </div>

      <!-- Right image -->
      <div class="accounting-right">
        <img class="accounting-img" src="/img/accounting.png" alt="Accounting Illustration">
      </div>

    </div>
  </section>

  <!-- ================= Accounts Management Section ================= -->
  <section class="accounts-section">
    <div class="accounts-container">

      <!-- Heading + intro -->
      <h1>Accounts Management</h1>
      <p>
        Take full financial control with WorFlik’s smart and streamlined Accounts
        Management module. From sales and payments to contracts and reports,
        everything is brought together in one easy-to-use system — no more
        scattered spreadsheets or manual errors.
      </p>
      <p>
        Whether you’re running one branch or multiple units, stay informed,
        compliant, and in control at every step.
      </p>

      <!-- Key Features -->
      <h2>Key Features</h2>
      <ol class="features-list">
        <li>
          <strong class="features-head">Double Entry Accounting</strong>
          <p>Ensure accuracy in every
            transaction with six powerful tools:</p>
          <ul class="sub-li">
            <li><strong>Chart of Accounts</strong> View structured account types, codes, and balances.</li>
            <li><strong>Journal Entries</strong> Record all transactions with clear descriptions and timestamps.</li>
            <li><strong>Ledger Summary</strong> Track past balances in a clean historical view.</li>
            <li><strong>Balance Sheet &amp; P&amp;L</strong> Instantly generate reports for insights and
              compliance.</li>
            <li><strong>Trial Balance</strong> Confirm your debits and credits always align.</li>
          </ul>
        </li>

        <li>
          <strong class=" features-head">Sales Management</strong>
          <p>Easily manage the full sales cycle - from invoicing and reminders to payments and credit notes -
            all in one place</p>
        </li>
        <li>
          <strong class="features-head">Budget Planner</strong>
          <p>Plan smarter by setting and tracking monthly or yearly budgets across income and expense
            categories</p>
        </li>
        <li>
          <strong class="features-head">Contract Management</strong>
          <p>Track all client contracts, dates, and values to stay ahead of renewals and billing cycles</p>
        </li>
        <li>
          <strong class="features-head">Events & Notices</strong>
          <p>Schedule internal events and publish important updates for teams or clients directly through your
            dashboard</p>
        </li>
        <li>
          <strong class="features-head">Goals & Notes</strong>
          <p>Set Financial targets, attach notes, and keep key goals visible for your team.</p>
        </li>
        <li>
          <strong class="features-head">Real-Time Reporting</strong>
          <p>Visual dashboards and detailed reports help you monitor performance across tasks, income, staff,
            invoices, and more.</p>
        </li>
      </ol>

      <!-- Why It Works -->
      <h2>Why It Works</h2>
      <ul class="why-list">
        <li><strong>Precision &amp; Compliance:</strong>
          <p>Eliminate errors with smart double-entry tracking.</p>
        </li>
        <li><strong>Less Manual Work:</strong>
          <p> Automations save time on billing, reminders, and budgeting.</p>
        </li>
        <li><strong>Smarter Decisions:</strong>
          <p> Real-time reports offer clear financial insights.</p>
        </li>
        <li><strong>Cash Flow Clarity:</strong>
          <p> Stay Ahead with connected contract, sales, and expense tracking.</p>
        </li>
        <li><strong>Team Alignment:</strong>
          <p> Goals and shared notices keep your staff informed and accountable.</p>
        </li>
      </ul>
    </div>
  </section>

  <!------Get Started Button------>
  <div class="get-btn-div">
    <a href="#" class="get-btn">Get Started</a>
  </div>

  <!-- Font Awesome for search icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </section>

  @include('layouts.footer')
  </section>
</body>

</html>