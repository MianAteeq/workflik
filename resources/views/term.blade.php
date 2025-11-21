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
}

.container {
  padding-left: 40px;
  margin-bottom: 40px;
}

.container h1 {
  font-size: 60px;
  line-height: 70px;
  color: #2a2a0f;
  margin-bottom: 20px;
  max-width: 600px;
}

.container h3 {
  color: #2a2a0f;
}

.container h2 {
  color: #2a2a0f;
}

.container p {
  color: grey;
  max-width: 1200px;
}

.container ul {
  padding-left: 25px;
  color: grey;
}

.content {
  padding-left: 16px;
}
</style>

<body>

  @include('layouts.header')

  <!-- ======================================= Pricing Section 1 ======================================================== -->
  <section class="section">
    <div class="container">
      <h1>Terms & Conditions</h1>
      <div class="content">
        <h3>Last updated:<span><strong>[21-11-2025]</strong></span></h3>
        <p>These Terms & Conditions (“Terms”) govern your use of Worflik, our accounting software and related services.
          By accessing or using our platform, you agree to these Terms. If you do not agree, please do not use our
          services.</p>
        <br>

        <h2>1. Use of Service</h2>
        <ul>
          <li>You must be at least 18 years old to use Worflik.</li>
          <li>You agree to provide accurate and complete information when creating an account.</li>
          <li>You are responsible for maintaining the confidentiality of your account and password.</li>
        </ul>
        <br>
        <h2>2. License</h2>
        <p>Worflik grants you a limited, non-exclusive, non-transferable license to use the software for your business
          accounting needs.</p>
        <br>
        <h2>3. Prohibited Uses</h2>
        <p>You agree not to:</p>
        <ul>
          <li>Use Worflik for illegal or fraudulent activities</li>
          <li>Reverse-engineer, copy, or distribute our software</li>
          <li>Upload harmful or malicious content</li>
          <li>Interfere with the platform’s functionality or security</li>
        </ul>
        <br>
        <h2>4. Subscription & Payments</h2>
        <ul>
          <li> Some features may require a paid subscription.</li>
          <li>Fees, billing cycles, and payment methods are provided at checkout.</li>
          <li>We may change pricing with prior notice.</li>
          <li>Subscription fees are generally non-refundable, unless required by law.</li>
        </ul>
        <br>
        <h2>5. Data Ownership</h2>
        <p>You retain ownership of all financial and business data you upload.</p>
        <p>By using our service, you grant Worflik permission to process and store your data solely for service
          delivery.</p>
        <br>
        <h2>6. Availability & Service Interruptions</h2>
        <p>We strive to keep Worflik available at all times but we do not guarantee uninterrupted access. Maintenance,
          upgrades, or technical issues may cause temporary downtime.</p>
        <br>
        <h2>7. Limitation of Liability</h2>
        <p>To the maximum extent permitted by law:</p>

        <ul>
          <li> Worflik is not liable for any indirect, accidental, or financial losses</li>
          <li>We do not guarantee absolute accuracy of accounting or financial information processed by the software
          </li>
          <li>You use the platform at your own risk</li>
        </ul>
        <br>
        <h2>8. Termination</h2>
        <p>We may suspend or terminate accounts that violate these Terms or engage in harmful activities.</p>
        <p>You may terminate your account anytime by contacting support or deleting your profile.</p>

        <br>
        <h2>9. Intellectual Property</h2>
        <p>All trademarks, logos, software, and content remain the property of Worflik.</p>
        <p>You may not copy or reuse any part of the service without written permission.</p>
        <br>

        <h2>10. Changes to Terms</h2>
        <p>We may update these Terms from time to time. Continued use of the platform after updates means you agree to
          the revised Terms.</p>
        <br>
        <h2>11. Governing Law</h2>
        <p>These Terms are governed by the laws of [Pakistan].</p>
        <br>
        <h2>12. Contact Information</h2>
        <p>If you have questions about these Terms, contact us at:
          <br>
          Email: [contact@worflik.com]
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