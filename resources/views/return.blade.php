<!DOCTYPE html>
<html lang="en">
@section('css')
<link rel="stylesheet" href="{{ asset('asset/home.css') }}">
<link rel="stylesheet" href="{{ asset('asset/pricing.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
@endsection
@include('layouts.head')
<style>
.section {
  margin-top: 150px;
  margin-left: 40px;
  max-width: 1100px;
}

.container {
  padding-left: 60px;
  margin-bottom: 80px;
}

.container h1 {
  font-size: 60px;
  line-height: 70px;
  color: #2a2a0f;
  margin-bottom: 20px;
}

.container h3 {
  color: #2a2a0f;
}

.container h2 {
  color: #2a2a0f;
}

.container h4 {
  color: #2a2a0f;
}

strong {
  color: #2a2a0f;
}

.container p {
  color: #222222ff;
  max-width: 1200px;
}

.container ul {
  padding-left: 25px;
  color: #222222ff;
}

.container ol {
  padding-left: 25px;
  color: #222222ff;
}

.content {
  padding-left: 16px;
}

@media (max-width:1030px) {
  .section {
    margin-top: 100px;
    margin-left: 20px;
    max-width: 900px;
  }

  .container {
    margin-bottom: 80px;
    padding: 25px;
  }

  .container h1 {
    font-size: 35px;
    line-height: 70px;
    margin-bottom: 10px;
  }
}

@media (max-width:770px) {
  .section {
    margin-top: 100px;
    margin-left: 20px;
    max-width: 800px;
  }

  .container {
    margin-bottom: 80px;
    padding: 25px;
  }

  .container h1 {
    font-size: 35px;
    line-height: 30px;
    margin-bottom: 10px;
  }
}

@media (max-width:430px) {
  .section {
    margin-top: 100px;
    margin-left: 10px;
    max-width: 750px;
  }

  .container {
    margin-bottom: 80px;
    padding: 15px;
  }

  .container h1 {
    font-size: 25px;
    line-height: 30px;
    margin-bottom: 10px;
  }

  .container h3 {
    font-size: 14px;
  }

  .container h2 {
    font-size: 18px
  }

  .container p {
    max-width: 1100px;
    font-size: 14px;
    text-align: justify;
  }

  .container ul {
    padding-left: 15px;
    font-size: 14px
  }

  .content {
    padding-left: 10px;
  }
}

@media (max-width:380px) {
  .section {
    margin-top: 100px;
    margin-left: 10px;
    max-width: 670px;
  }

  .container {
    margin-bottom: 80px;
    padding: 15px;
  }

  .container h1 {
    font-size: 25px;
    line-height: 20px;
    margin-bottom: 10px;
  }

  .container h3 {
    font-size: 14px;
  }

  .container h2 {
    font-size: 18px
  }

  .container p {
    max-width: 1100px;
    font-size: 14px;
    text-align: justify;
  }

  .container ul {
    padding-left: 15px;
    font-size: 14px
  }

  .content {
    padding-left: 10px;
  }
}

@media (max-width:320px) {
  .section {
    margin-top: 100px;
    margin-left: 10px;
    max-width: 670px;
  }

  .container {
    margin-bottom: 80px;
    padding: 15px;
  }

  .container h1 {
    font-size: 25px;
    line-height: 30px;
    margin-bottom: 10px;
  }

  .container h3 {
    font-size: 14px;
  }

  .container h2 {
    font-size: 18px
  }

  .container p {
    max-width: 1100px;
    font-size: 14px;
    text-align: justify;
  }

  .container ul {
    padding-left: 15px;
    font-size: 14px
  }

  .content {
    padding-left: 10px;
  }
}
</style>

<body>

  @include('layouts.header')

  <!-- ======================================= Pricing Section 1 ======================================================== -->
  <section class="section">
    <div class="container">
      <h1>Worflik Return & Refund Policy</h1>
      <br>
      <div class="content">
        <p><strong>Owned & Operated By:</strong>Fission Monster</p>
        <p><strong>Contact:</strong>contact@worflik.com</p>
        <br>
        <h2>1. Introduction</h2>
        <br>
        <p>This Return & Refund Policy outlines the conditions, procedures, and terms under which customers (“you,”
          “your,” “Client”) may request returns, cancellations, or refunds for subscriptions, software licenses,
          implementation services, and other offerings provided through <strong>Worflik</strong>, an ERP system owned
          and operated by <strong>Fission Monster.</strong> <br> <br> By purchasing or using Worflik services, you agree
          to this
          policy in full. This policy is designed to protect both parties, ensure transparency, and maintain fairness in
          all financial transactions.
        </p>
        <br>
        <h2>2. Scope of the Policy</h2>
        <br>
        <p></p>
        <br>
        <ol>
          <li><strong>SaaS Subscriptions</strong></li>
          <li><strong>One-Time Software Licenses (if applicable)</strong></li>
          <li><strong>ERP Implementation & Customization Services</strong></li>
          <li><strong>Training Services</strong></li>
          <li><strong>Support & Maintenance Packages</strong></li>
          <li><strong>Add-on Modules or Integrations</strong></li>
          <li><strong>One-Time Digital Deliverables</strong></li>
          <li><strong>Professional Consultation Services</strong></li>
        </ol>
        <br>
        <h2>3. General Refund Principles</h2>
        <br>
        <ul>
          <li>Worflik operates on industry-standard B2B SaaS principles.</li>
          <li>Refunds are granted only under the conditions outlined in this policy.</li>
          <li>Refunds are <strong>not</strong> automatically guaranteed; they require evaluation under eligibility
            criteria.</li>
          <li>All refunds are processed to the original payment method unless otherwise agreed.</li>
          <li>Refund processing can take <strong>7–14 business</strong> days from approval.</li>
        </ul>
        <br>
        <h2>4. Subscription Services (SaaS)</h2>
        <br>
        <h4>4.1 Free Trial Period</h4>
        <br>
        <p>If Worflik offers a free trial:</p>
        <br>
        <ul>
          <li>You will not be charged during the trial.</li>
          <li>Once the trial ends, charges apply automatically unless cancelled before renewal.</li>
        </ul>
        <br>
        <h4>4.2 Monthly Subscriptions</h4>
        <br>
        <ul>
          <li>Monthly plans are <strong>non-refundable once the billing cycle has started</strong>.</li>
          <li>Cancellation stops future billing only.</li>
          <li>No partial refunds for unused time within the billing cycle.</li>
        </ul>
        <br>
        <h4>4.3 Annual Subscriptions</h4>
        <br>
        <ul>
          <li>Annual subscriptions may be refunded <strong>within 30 days of purchase</strong>, provided:
          <li>No more than 10% of allocated usage has been consumed.</li>
          <li>No onboarding, setup, or customization services have begun.</li>
          <br>
          </li>
          <li>After 30 days, annual subscriptions are <strong>non-refundable</strong>.</li>
        </ul>
        <br>
        <h4>4.4 Mid-Cycle Cancellations</h4>
        <br>
        <ul>
          <li>Cancellation does <strong>not</strong> trigger a refund for remaining subscription duration.</li>
          <li>Services remain available until the billing period ends.</li>
        </ul>
        <br>
        <h2>5. Software Licenses (If Offered)</h2>
        <br>
        <p>For perpetual or one-time licenses:</p>
        <br>
        <h4>5.1 Refund Eligibility</h4>
        <br>
        <p>Refunds may be issued within <strong>14 days</strong> of purchase <strong>only if</strong>:</p>
        <br>
        <ul>
          <li>The software has not been activated, downloaded, or installed.</li>
          <li>No license key has been used.</li>
        </ul>
        <br>
        <h4>5.2 Non-Refundable After Activation</h4>
        <br>
        <p>Once the license key is viewed, activated, or downloaded, the purchase becomes
          <strong>non-refundable</strong>.
        </p>
        <br>
        <h2>6. Implementation, Onboarding & Customization Services</h2>
        <br>
        <p>ERP implementations involve significant time and resource allocation; therefore:</p>
        <br>
        <h4>6.1 Non-Refundable Services</h4>
        <br>
        <p>The following are <strong>non-refundable</strong> once initiated:</p>
        <br>
        <ul>
          <li>System setup</li>
          <li>Data migration</li>
          <li>Custom module development</li>
          <li>Integration setup</li>
          <li>Business process mapping</li>
          <li>Third-party service connections</li>
        </ul>
        <br>
        <h4>6.2 Partial Refunds (Case-by-Case)</h4>
        <br>
        <p>A partial refund may be considered if:</p>
        <br>
        <ul>
          <li>The project has not progressed beyond the planning phase.</li>
          <li>No development or installation work has commenced.</li>
          <li>No third-party costs have been incurred.</li>
        </ul>
        <br>
        <p>Any approved partial refund will deduct:</p>
        <br>
        <ul>
          <li>Hours worked</li>
          <li>Resources allocated</li>
          <li>Third-party fees</li>
          <li>Administrative charges</li>
        </ul>
        <br>
        <h2>7. Training Services</h2>
        <br>
        <h4>7.1 Refund Eligibility</h4>
        <br>
        <p>Refunds for training sessions are allowed if:</p>
        <ul>
          <li>Cancellation is submitted <strong>at least 7 days before</strong> the scheduled session.</li>
        </ul>
        <br>
        <h4>7.2 Non-Refundable Training</h4>
        <br>
        <p>Refunds are <strong>not provided</strong> if:</p>
        <ul>
          <li>Training has already been delivered.</li>
          <li>You miss the session without prior notice.</li>
          <li>Trainings are part of a bundled package.</li>
        </ul>
        <br>
        <p>Rescheduling may be allowed at the discretion of Fission Monster.</p>
        <br>
        <h2>8. Support & Maintenance Packages</h2>
        <br>
        <p>Support plans (Basic, Professional, Enterprise, etc.) follow these rules:</p>
        <br>
        <ul>
          <li>Once the billing cycle begins, the support plan becomes <strong>non-refundable</strong>.</li>
          <li>Refunds are not issued for unused support hours or ticket limits.</li>
          <li>Upgrades or downgrades take effect in the next billing cycle.</li>
        </ul>
        <br>
        <h2>9. Add-Ons, Integrations & Third-Party Services</h2>
        <br>
        <h4>9.1 Add-On Modules</h4>
        <br>
        <p>Refunds for paid add-ons are offered only if:</p>
        <br>
        <ul>
          <li>Requested within <strong>7 days</strong> of purchase.</li>
          <li>The add-on has not been accessed or activated.</li>
        </ul>
        <br>
        <h4>9.2 Third-Party Costs</h4>
        <br>
        <p>All third-party tools, APIs, hosting, communication services, or integrations are
          <strong>non-refundable</strong>, as Worflik
          incurs direct expenses on your behalf.
        </p>
        <br>
        <h2>10. Data Deletion Upon Cancellation</h2>
        <br>
        <p>When you cancel a subscription:</p>
        <ul>
          <li>Your account will remain active until the end of the billing period.</li>
          <li>After expiration, your data will be retained for <strong>30 days</strong> unless legally required
            otherwise.</li>
          <li>You may request full data export before deletion.</li>
          <li>After the retention period, all data is securely <strong>deleted and non-recoverable</strong>.</li>
        </ul>
        <br>
        <h2>11. Non-Refundable Items</h2>
        <br>
        <p>The following items are <strong>strictly non-refundable</strong>:</p>
        <br>
        <ul>
          <li>Already delivered services</li>
          <li>Custom feature development</li>
          <li>Setup & configuration charges</li>
          <li>Migration & onboarding services</li>
          <li>Third-party integration fees</li>
          <li>Late cancellation/no-show training sessions</li>
          <li>Promotional/discounted subscriptions</li>
          <li>Any services where work has already started</li>
        </ul>
        <br>
        <h2>12. How to Request a Refund</h2>
        <br>
        <p>To request a return or refund:</p>
        <br>
        <ol>
          <li>Email us at <strong>contact@worflik.com</strong></li>
          <li>Account/Company Name</li>
          <li>Invoice Number</li>
          <li>Service or product purchased</li>
          <li>Reason for refund request</li>
          <li>Our team will review your request within <strong>5–7 business days</strong>.</li>
          <li>You will be notified of approval, partial approval, or denial.</li>
        </ol>
        <br>
        <h2>13. Dispute Resolution</h2>
        <br>
        <p>If you disagree with a refund decision:</p>
        <br>
        <ul>
          <li>You may submit a written appeal within <strong>10 days</strong> of the decision.</li>
          <li>Worflik management will conduct a secondary review.</li>
          <li>Final decisions are binding unless required otherwise by applicable law.</li>
        </ul>
        <br>
        <h2>14. Changes to This Policy</h2>
        <br>
        <p>Worflik may update or modify this Return & Refund Policy at any time. <br>
          Changes will be posted with a revised “Last Updated” date. <br>
          Your continued use of Worflik after updates constitutes acceptance.</p>
        <br>
        <h2>15. Contact Information</h2>
        <br>
        <p>If you have questions regarding returns or refunds, contact: <br>
          <strong>contact@worflik.com</strong>
        </p>

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
