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
      <h1>Worflik Cookies Policy</h1>
      <div class="content">
        <p><strong>Owned & Operated By:</strong> Fission Monster</p>
        <p><strong>Contact:</strong> contact@worflik.com</p>
        <br>
        <h2>1. INTRODUCTION</h2>
        <p>This Cookie Policy explains how <strong>Worflik</strong> (“we,” “us,” “our”), an ERP system owned and
          operated by
          <strong>Fission Monster</strong>, uses cookies and similar tracking technologies on our website and
          platform. <br>
          Cookies help us deliver a secure, reliable, and optimized experience for all Worflik users. This policy
          details what cookies we use, why we use them, and how you can manage your cookie preferences. <br>
          By using Worflik or accessing our website, you consent to the use of cookies as described in this policy.
        </p>
        <br>
        <h2>2. What Are Cookies?</h2>
        <br>
        <p>Cookies are small text files placed on your device (computer, tablet, mobile) when you visit a website or use
          a
          web application. Cookies allow websites to function efficiently and improve your overall user experience. <br>
          Worflik may also use related tracking technologies such as:</p>
        <br>
        <ul>
          <li>Web beacons</li>
          <li>Pixels</li>
          <li>Local storage</li>
          <li>Session storage</li>
          <li>SDK tracking (for integrations)</li>
        </ul>
        <br>
        <h2>3. Why We Use Cookies</h2>
        <br>
        <p>As an ERP system handling sensitive and operational business data, Worflik uses cookies primarily to:</p>
        <br>
        <ul>
          <li>Maintain secure login sessions</li>
          <li>Enhance user authentication and prevent unauthorized access</li>
          <li>Improve platform performance and stability</li>
          <li>Track feature usage to optimize workflows</li>
          <li>Personalize the user interface experience</li>
          <li>Support integrations with third-party services</li>
          <li>Analyze website traffic and platform interaction patterns</li>
        </ul>
        <br>
        <p>We <strong>do not sell personal data</strong> collected through cookies.</p>
        <br>
        <h2>4. Types of Cookies We Use</h2>
        <br>
        <h4>a) Strictly Necessary Cookies</h4>
        <br>
        <p>Required for the core operation of the platform. <br>
          Examples:</p>
        <ul>
          <li>Session authentication</li>
          <li>Role-based access control</li>
          <li>Security verification tokens</li>
          <li>Load balancing and routing</li>
        </ul>
        <br>
        <p>These cookies <strong>cannot be disabled</strong> because the platform will not function without them.</p>
        <br>
        <h4>b) Performance & Analytics Cookies</h4>
        <br>
        <p>Used to analyze how users interact with the platform so we can improve efficiency and usability. <br>
          Examples:</p>
        <ul>
          <li>Page load metrics</li>
          <li>Module usage insights</li>
          <li>Traffic analytics</li>
        </ul>
        <br>
        <p>These analytics are aggregated and do not identify individuals.</p>
        <br>
        <h4>c) Functionality Cookies</h4>
        <br>
        <p>Improve user experience and allow Worflik to remember:</p>
        <br>
        <ul>
          <li>User interface preferences</li>
          <li>Dashboard settings</li>
          <li>Language selections</li>
          <li>Saved filters or view configurations</li>
        </ul>
        <br>
        <h4>d) Third-Party Cookies</h4>
        <br>
        <p>Worflik may integrate with or embed third-party services essential for operations, such as:</p>
        <br>
        <ul>
          <li>Cloud hosting providers</li>
          <li>Payment gateways</li>
          <li>Customer support tools</li>
          <li>Analytics platforms</li>
        </ul>
        <br>
        <p>These providers may set their own cookies, which are governed by their respective privacy policies.</p>
        <br>
        <h2>5. Cookies Used in the Worflik ERP Platform</h2>
        <br>
        <p>Because Worflik handles encrypted business and operational data, our cookies do not store:</p>
        <br>
        <ul>
          <li>Sensitive ERP data</li>
          <li>Financial information</li>
          <li>Employee details</li>
          <li>CRM records</li>
          <li>Business intelligence metrics</li>
        </ul>
        <br>
        <p>Cookies are restricted strictly to:</p>
        <br>
        <ul>
          <li>Authentication</li>
          <li>System performance</li>
          <li>User session continuity</li>
        </ul>
        <br>
        <h2>6. Your Cookie Choices</h2>
        <br>
        <p>You have control over how cookies are used on your device.</p>
        <br>
        <h4>a) Browser Settings</h4>
        <br>
        <p>You can disable cookies through your browser. Steps differ by browser but typically involve:</p>
        <br>
        <ul>
          <li>Blocking cookies</li>
          <li>Deleting stored cookies</li>
          <li>Managing site-specific cookie permissions</li>
        </ul>
        <br>
        <p>However, disabling essential cookies may prevent the Worflik platform from functioning properly.</p>
        <br>
        <h4>b) Cookie Banner Preferences</h4>
        <br>
        <p>When visiting our website, you may be presented with a cookie consent banner that allows you to accept or
          deny non-essential cookies.</p>
        <br>
        <h2>7. Do Not Track (DNT) Signals</h2>
        <br>
        <p>Worflik currently does not respond to Do Not Track signals due to inconsistent industry standards, but we
          continue to monitor developments in this area.</p>
        <br>
        <h2>8. Data Protection & Security</h2>
        <br>
        <p>All data processed by cookies on Worflik is protected through:</p>
        <br>
        <ul>
          <li>
            <strong>End-to-end encryption</strong>
          </li>
          <li>
            <strong>Encrypted sessions (TLS 1.2/1.3 in transit)</strong>
          </li>
          <li>
            <strong>Encrypted storage for session identifiers (AES-256 at rest)</strong>
          </li>
          <li>
            <strong>Secure, signed, and time-limited tokens</strong>
          </li>
        </ul>
        <br>
        <p>Cookies are never used to store raw sensitive ERP data.</p>
        <br>
        <h2>9. Third-Party Services</h2>
        <br>
        <p>Third parties integrated into the Worflik platform may use their own cookies to deliver services such as:</p>
        <br>
        <ul>
          <li>Cloud hosting</li>
          <li>Email delivery</li>
          <li>Support tools</li>
          <li>Payment processing</li>
        </ul>
        <br>
        <p>These providers operate under separate privacy policies. Worflik ensures all partners meet strong security
          standards and comply with relevant privacy regulations.</p>
        <br>
        <h2>10. International Data Transfers</h2>
        <br>
        <p>Cookies and related tracking data may be stored or processed outside your local jurisdiction depending on our
          hosting and service providers. <br>
          Worflik ensures all transfers comply with applicable laws, including:</p>
        <br>
        <ul>
          <li>GDPR Standard Contractual Clauses (SCCs)</li>
          <li>UK GDPR safeguards</li>
          <li>CCPA requirements</li>
        </ul>
        <br>
        <h2>11. Changes to This Cookie Policy</h2>
        <br>
        <p>We may update this Cookie Policy periodically. Updated versions will be posted on the Worflik website with a
          new “Last Updated” date. <br> <br>
          Continued use of the platform after updates constitutes acceptance of the revised policy.</p>
        <br>
        <h2>12. Contact Us</h2>
        <p>If you have questions about this Cookie Policy or how Worflik uses cookies, please contact: <br>
          <strong>contact@worflik.com <br>
            Fission Monster (Parent Organization)</strong>
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