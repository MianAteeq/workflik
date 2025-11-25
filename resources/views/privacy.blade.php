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
  margin-left: 60px;
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

.container p {
  color: #222222ff;
  max-width: 1200px;
}

.container ul {
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
</style>

<body>

  @include('layouts.header')

  <!-- ======================================= Pricing Section 1 ======================================================== -->
  <section class="section">
    <div class="container">
      <h1>Privacy Policy</h1>
      <div class="content">
        <h3>Last updated:<span><strong>[21-11-2025]</strong></span></h3>
        <p>Welcome to <strong>Worflik</strong> (“we”, “our”, “us”). We are committed to protecting your privacy and
          ensuring that your
          personal information is handled securely and responsibly. This Privacy Policy explains how we collect, use,
          store, and protect your information when you use our accounting software and related services.</p>
        <br>

        <h2>1. Information We Collect</h2>
        <ul>
          <li>Personal Information</li>
          <li>Financial & Business Data</li>
          <li>Technical Information</li>
        </ul>
        <br>

        <h2>2. How We Use Your Information</h2>
        <p>We use your information to:</p>
        <ul>
          <li>Provide, operate, and improve our accounting software</li>
          <li>Create and manage user accounts</li>
          <li>Process payments and subscriptions</li>
          <li>Offer customer support</li>
          <li>Communicate updates, security alerts, or service announcements</li>
          <li>Ensure security, detect fraud, and maintain system integrity</li>
        </ul>
        <br>

        <h2>3. Sharing of Information</h2>
        <p>We do <strong>not</strong> sell your personal or business data. We may share information only with:</p>
        <ul>
          <li><strong>Service providers</strong> (payment gateways, cloud storage, analytics tools)</li>
          <li><strong>Legal authorities</strong> if required by law</li>
          <li><strong>Business partners</strong> with your explicit consent</li>
        </ul>
        <br>
        <h2>4. Data Security</h2>
        <p>We use industry-standard encryption, secure servers, and access controls to protect your data. While we
          strive to keep your information safe, no digital system is 100% secure, and we cannot guarantee absolute
          protection.</p>
        <br>
        <h2>5. Your Rights</h2>
        <p>Depending on your region, you may have the right to:</p>
        <ul>
          <li>Access your data</li>
          <li>Update or correct your data</li>
          <li> Download/export your data</li>
          <li> Withdraw consent</li>
          <li> Object to certain data processing</li>
        </ul>
        <p><strong>Contact us</strong> at [contact@worflik.com] to submit any requests.</p>
        <br>
        <h2>6. Data Retention</h2>
        <p>We retain your data as long as your account is active or as necessary to fulfill legal or accounting
          obligations.</p>
        <br>
        <h2>7. Cookies and Tracking</h2>
        <p>Worflik may use cookies and similar technologies to enhance your experience, analyze usage, and improve
          performance. You may control cookies through browser settings.</p>
        <br>
        <h2>8. Third-Party Links</h2>
        <p>Our platform may contain links to third-party websites. We are not responsible for their content or privacy
          practices.</p>
        <br>

        <h2>9. Changes to This Privacy Policy</h2>
        <p>We may update this policy from time to time. Any changes will be posted on this page with the updated date.
        </p>
        <br>
        <h2>10. Contact Us</h2>
        <p>If you have any questions regarding this Privacy Policy, please contact us at:</p>
        <p><strong>Email:</strong> [contact@worflik.com]</p>
        <p><strong>Website:</strong> Worflik</p>
        <br>

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