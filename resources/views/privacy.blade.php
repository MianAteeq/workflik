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
      <h1>WORFLIK – PRIVACY POLICY</h1>
      <div class="content">
        <p>This Privacy Policy describes how <strong>(“Worflik,” “we,” “us,” or “our”)</strong>a cloud-based ERP
          platform owned and operated by <strong>Fission Monster</strong> , collects, uses, stores, protects, and shares
          information when you access or use our Services.
          <br>Worflik is committed to protecting your data privacy and ensuring transparency in how your information is
          handled. By using our platform, you consent to the practices described in this Privacy Policy. <br>For
          privacy-related questions, you may contact us at: <br> <strong>Email:</strong> contact@worflik.com
        </p>
        <br>
        <h2>1. INTRODUCTION</h2>
        <p>Worflik is an ERP (Enterprise Resource Planning) system that provides business management tools including
          accounting, HR, payroll, POS, inventory, and business intelligence modules. The platform processes sensitive
          business data, and we take data protection seriously.</p>
        <p>This policy outlines:</p>
        <ul>
          <li>What data we collect</li>
          <li>How we use and safeguard your information</li>
          <li>Your data protection rights</li>
          <li>How to exercise those rights</li>
          <li>Our compliance with GDPR, CCPA, and other global privacy frameworks</li>
        </ul>
        <br>
        <p>This Privacy Policy applies to all users, organizations, employees, and administrators using Worflik.</p>
        <br>
        <h2>2. WHO WE ARE</h2>
        <p><strong>Worflik</strong> is a product owned and operated by:</p>
        <p><strong>Fission Monster</strong></p>
        <p><strong>Email:</strong> contact@worflik.com</p>
        <p>Fission Monster serves as the <strong>Data Controller</strong> for personal data processed through
          the
          Worflik platform.</p>
        <br>
        <h2>3. DATA WE COLLECT</h2>
        <p>Worflik collects data necessary to deliver secure, efficient, and customized ERP services.</p>
        <h4>3.1 Personal Data</h4>
        <br>
        <p>Information that identifies or can identify a natural person, including:</p>
        <br>
        <ul>
          <li>Name</li>
          <li>Email address</li>
          <li>Username & credentials</li>
          <li>Phone number</li>
          <li>Role/department within the organization</li>
          <li>Login activity and access logs (audit logs)</li>
        </ul>
        <br>
        <h4>3.2 Business & Operational Data</h4>
        <br>
        <p>As an ERP system, Worflik processes sensitive business data entered by your organization, including:</p>
        <br>
        <ul>
          <li>Financial records</li>
          <li>Accounting entries</li>
          <li>Invoices, receipts, transactions</li>
          <li>Sales & purchase orders</li>
          <li>Inventory data</li>
          <li>Vendor & customer information</li>
          <li>HR & payroll details</li>
          <li>Employee attendance, performance, and leave data</li>
          <li>Contracts and compliance documents</li>
          <li>POS transactions</li>
        </ul>
        <br>
        <h4>3.3 Technical & Usage Data</h4>
        <br>
        <p>Automatically collected data when you access the platform:</p>
        <br>
        <ul>
          <li>IP address</li>
          <li>Browser type and device information</li>
          <li>Session logs and activity timestamps</li>
          <li>API usage logs</li>
          <li>Error diagnostics and crash reports</li>
        </ul>
        <br>
        <h4>3.4 Integration Data</h4>
        <br>
        <p>If your organization connects external systems:</p>
        <br>
        <ul>
          <li>Payment gateway data</li>
          <li>Third-party app metadata</li>
          <li>Import/export logs</li>
          <li>API request/response data</li>
        </ul>
        <br>
        <h4>3.5 Cookies & Tracking Technologies</h4>
        <br>
        <p>Worflik uses cookies to:</p>
        <br>
        <ul>
          <li>Authenticate users</li>
          <li>Maintain session data</li>
          <li>Improve platform performance</li>
          <li>Track usage analytics</li>
          <li>Enhance security</li>
          <li>You may control cookie settings through your browser.</li>
        </ul>
        <br>
        <h2>4. HOW WE USE YOUR DATA</h2>
        <br>
        <p>We process data strictly to provide and improve the Worflik ERP platform.</p>
        <br>
        <h4>4.1 Service Delivery</h4>
        <br>
        <ul>
          <li>Account creation and authentication</li>
          <li>Module functionality (Accounting, HR, POS, etc.)</li>
          <li>Data processing and computation</li>
          <li>Role-based access control</li>
          <li>Dashboard analytics and reporting</li>
        </ul>
        <br>
        <h4>4.2 Security & Fraud Prevention</h4>
        <br>
        <ul>
          <li>End-to-end encrypted data processing</li>
          <li>Audit logs</li>
          <li>Unauthorized access detection</li>
          <li>System monitoring</li>
        </ul>
        <br>
        <h4>4.3 Platform Improvement</h4>
        <br>
        <ul>
          <li>Usage analytics</li>
          <li>Error tracking and debugging</li>
          <li>Module performance optimization</li>
          <li>AI/automation improvements (non-personalized)</li>
        </ul>
        <br>
        <h4>4.4 Communication</h4>
        <br>
        <ul>
          <li>Billing notifications</li>
          <li>System alerts and updates</li>
          <li>Customer support interactions</li>
          <li>Security notifications</li>
        </ul>
        <br>
        <p>We <strong>do not</strong> sell personal data to any third party.</p>
        <br>
        <h2>5. DATA SECURITY & ENCRYPTION</h2>
        <p>Worflik uses industry-leading security standards to protect all data.</p>
        <br>
        <h4>5.1 Encryption</h4>
        <br>
        <p>All data is encrypted <strong>end-to-end:</strong></p>
        <ul>
          <li><strong>Encryption in transit:</strong> TLS/SSL</li>
          <li><strong>Encryption at rest:</strong> AES-256 or equivalent</li>
        </ul>
        <br>
        <p>This applies to all business data, credentials, documents, and logs.</p>
        <br>
        <h4>5.2 Infrastructure Security</h4>
        <br>
        <ul>
          <li>Secure cloud hosting</li>
          <li>Firewalls and intrusion detection</li>
          <li>Role-based access control</li>
          <li>Multi-layer authentication</li>
          <li>Regular security audits</li>
          <li>Strict internal access policies</li>
        </ul>
        <br>
        <h4>5.3 Backup & Recovery</h4>
        <br>
        <p>We maintain:</p>
        <br>
        <ul>
          <li>Automated daily backups</li>
          <li>Redundant storage</li>
          <li>Disaster recovery systems</li>
          <li>Business continuity protocols</li>
        </ul>
        <br>
        <h2>6. LEGAL BASIS FOR PROCESSING (GDPR)</h2>
        <br>
        <p>We process personal data based on:</p>
        <br>
        <ul>
          <li><strong>Contractual necessity </strong> (service delivery)</li>
          <li><strong>Legitimate interest </strong> (security, improvement)</li>
          <li><strong>Consent </strong>(cookies, optional integrations)</li>
          <li><strong>Legal obligations </strong> (financial record keeping)</li>
        </ul>
        <br>
        <h2>7. YOUR RIGHTS</h2>
        <br>
        <p>Depending on your jurisdiction (GDPR, CCPA, and others), you may exercise the following rights:</p>
        <br>
        <h4>7.1 Access</h4>
        <br>
        <p>Request a copy of your personal data.</p>
        <br>
        <h4>7.2 Correction</h4>
        <br>
        <p>Update or correct inaccurate data.</p>
        <br>
        <h4>7.3 Deletion (Right to Be Forgotten)</h4>
        <br>
        <p>Request deletion of personal data, subject to:</p>
        <br>
        <ul>
          <li>Legal retention requirements</li>
          <li>Contractual obligations</li>
        </ul>
        <br>
        <h4>7.4 Data Portability</h4>
        <br>
        <p>Receive your data in a structured, machine-readable format.</p>
        <br>
        <h4>7.5 Restriction of Processing</h4>
        <br>
        <p>Limit how your data is used.</p>
        <br>
        <h4>7.6 Objection</h4>
        <br>
        <p>Object to specific types of processing (e.g., analytics).</p>
        <br>
        <h4>7.7 Opt-Out (CCPA)</h4>
        <br>
        <p>California users may opt out of third-party sharing.</p>
        <br>
        <h4>How to Exercise Your Rights</h4>
        <br>
        <p> Email: <span style="color: blue; text-decoration: underline;">contact@worflik.com</span> <br>
          We may request identity verification for security.</p>
        <br>
        <h2>8. DATA RETENTION</h2>
        <p>Worflik retains data only as long as necessary usually:</p>
        <br>
        <ul>
          <li><strong>Active subscription: </strong> full data retention</li>
          <li><strong>After cancellation: </strong> 30–90 days for account export</li>
          <li><strong>Backups: </strong> retained per automated backup cycle</li>
          <li><strong>Audit logs: </strong> retained for compliance and security</li>
        </ul>
        <br>
        <p>Users may request early deletion of personal data.</p>
        <br>
        <h2>9. THIRD-PARTY SERVICES & INTEGRATIONS</h2>
        <p>Worflik integrates with third-party services, such as:</p>
        <br>
        <ul>
          <li>Payment processors</li>
          <li>Email and SMS providers</li>
          <li>Cloud hosting services</li>
          <li>Optional ERP add-on applications</li>
        </ul>
        <br>
        <p>We carefully vet third parties and require them to meet similar data protection standards. <br>
          However:</p>
        <br>
        <ul>
          <li>Third-party privacy practices are governed by their own policies</li>
          <li>Worflik is <strong>not responsible</strong> for third-party misuse</li>
          <li>Users are responsible for reviewing external service agreements</li>
        </ul>
        <br>
        <h2>10. INTERNATIONAL DATA TRANSFERS</h2>
        <br>
        <p>Data may be processed or stored in regions outside your jurisdiction. <br>
          Worflik ensures:</p>
        <br>
        <ul>
          <li>GDPR-compliant transfer mechanisms</li>
          <li>Standard Contractual Clauses (SCCs), where applicable</li>
          <li>Secure encrypted transfer channels</li>
        </ul>
        <br>
        <h2>11. CHILDREN’S PRIVACY</h2>
        <br>
        <p>Worflik is a business application and not intended for children under 16. <br>
          We do not knowingly collect data from minors.</p>
        <br>
        <h2>12. DATA BREACH NOTIFICATION</h2>
        <br>
        <p>In case of a data breach:</p>
        <br>
        <ul>
          <li>Users will be notified promptly</li>
          <li>Regulatory authorities will be contacted when required</li>
          <li>Incident response and containment procedures will activate immediately</li>
        </ul>
        <br>
        <h2>13. AUTOMATED PROCESSING</h2>
        <br>
        <p>Some ERP features may automate:</p>
        <br>
        <ul>
          <li>Financial calculations</li>
          <li>HR workflows</li>
          <li>Role-based decisions</li>
          <li>Inventory or POS reporting</li>
          <li>Business intelligence insights</li>
        </ul>
        <br>
        <p>These processes do not involve making legally binding decisions about individuals.</p>
        <br>
        <h2>14. CHANGES TO THIS PRIVACY POLICY</h2>
        <br>
        <p>We may update this Privacy Policy to reflect:</p>
        <br>
        <ul>
          <li>Platform changes</li>
          <li>Legal requirements</li>
          <li>Security improvements</li>
        </ul>
        <br>
        <p>Updates will be posted on this page, and continued use constitutes acceptance.</p>
        <br>
        <h2>15. CONTACT INFORMATION</h2>
        <br>
        <p>For privacy questions, data access, or rights requests, contact:</p>
        <br>
        <p><Strong>Worflik – Fission Monster</Strong></p>
        <p>Email: <Strong>contact@worflik.com</Strong></p>
        <br>
        <p>For legal notices, including GDPR inquiries, please include “Privacy Request” in the subject line.</p>

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