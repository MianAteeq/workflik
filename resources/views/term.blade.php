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
      <h1>WORFLIK – TERMS AND CONDITIONS</h1>
      <div class="content">
        <p>These Terms and Conditions “<strong>Terms</strong>” form a legally binding agreement between
          <strong>Worflik (“Worflik,” “the Platform,” “we,” “us,” or “our”)</strong>, a product owned and operated by
          <strong>Fission Monster</strong>, and you (<strong>“User,”
            “Customer,” or “you”</strong>). By accessing or using the Worflik ERP system, including all features,
          modules,
          websites, mobile interfaces, and related services (collectively, the <strong>“Services”</strong>), you agree
          to be bound by
          these Terms.
        </p>
        <br>
        <p>If you do not agree to these Terms, you must not access or use the Services.</p>
        <br>
        <p>For any questions, you may contact us at:</p>
        <p><strong>Email:</strong> contact@worflik.com</p>
        <br>
        <h2>1. DEFINITIONS</h2>
        <p>For the purpose of these Terms:</p>
        <ul>
          <li> <strong>“ERP System”</strong> means the cloud-based enterprise resource planning services provided by
            Worflik, including
            accounting, HR/payroll, POS, inventory, reporting, and related modules.</li>
          <li> <strong>“Account”</strong> means the unique profile created by a User to access the Services.</li>
          <li> <strong>“Subscription”</strong> means the paid plan selected by the User for ongoing access to Worflik
            Services.</li>
          <li> <strong>“Data”</strong> means all information entered, uploaded, or processed by the User through the
            Services.</li>
          <li> <strong>“Content”</strong> means any materials, software, text, images, reports, dashboards,
            documentation, and features
            made available through the Services.</li>
          <li> <strong>“Third-Party Services”</strong> means external software, tools, or systems integrated with or
            connected to Worflik.
          </li>
        </ul>
        <br>
        <h2>2. ACCEPTANCE OF TERMS</h2>
        <p>By creating an account, subscribing to a plan, accessing the ERP modules, or using any part of Worflik, you
          confirm that:</p>
        <br>
        <ol>
          <li>You have read and understood these Terms.</li>
          <li>You are legally capable of entering into binding contracts.</li>
          <li>If you are using Worflik on behalf of an organization, you are authorized to bind that organization to
            these Terms.</li>
        </ol>
        <br>
        <h2>3. DESCRIPTION OF SERVICES</h2>
        <p>Worflik provides a cloud-hosted ERP platform offering a modular suite of business applications, including but
          not limited to:</p>
        <ul>
          <li>Accounting & Finance Management
          </li>
          <li>Invoicing & Billing</li>
          <li>Budgeting & Cashflow</li>
          <li>Trial Balance, Profit & Loss, Financial Reports</li>
          <li>HR & Payroll Management</li>
          <li>Attendance, Leave & Performance Tracking</li>
          <li>POS System</li>
          <li>Inventory & Stock Management</li>
          <li>Customer, Vendor & Contract Management</li>
          <li>Role-Based Access Control</li>
          <li>Multi-user and Multi-Company Support</li>
          <li>Dashboard Analytics & Real-Time Reporting
          </li>
          <li>Automated Backups & Cloud Storage</li>
          <li>Audit Logs & Activity Trails</li>
          <li>Security & Permission Controls</li>
        </ul>
        <br>
        <p>Worflik may add, update, or modify modules from time to time.</p>
        <br>
        <h2>4. ACCOUNT REGISTRATION</h2>
        <h4>4.1Account Creation </h4>
        <p> To use the Services, you must create an Account by providing accurate and complete information.</p>
        <br>
        <h4>4.2 User Responsibility </h4>
        <p>You are responsible for:</p>
        <ul>
          <li> Maintaining the confidentiality of your login credentials.
          </li>
          <li>Ensuring all users under your account comply with these Terms.</li>
          <li>Any actions taken under your Account, whether authorized or not.</li>
        </ul>
        <br>
        <h4>4.3 User Responsibility </h4>
        <p>You must notify us immediately at <strong>contact@worflik.com</strong> if you suspect unauthorized access.
        </p>
        <br>
        <h2>5. SUBSCRIPTION PLANS & PAYMENT TERMS</h2>
        <br>
        <h4>5.1 Subscription Requirement </h4>
        <p>Access to most modules requires an active paid Subscription.</p>
        <br>
        <h4>5.2 Plans </h4>
        <p>Worflik offers subscription plans including (but not limited to):</p>
        <ul>
          <li><strong>Basic</strong></li>
          <li><strong>Pro</strong></li>
          <li><strong>Enterprise</strong></li>
          <li>Optional Add-ons: <strong>HR Module, POS Module</strong></li>
        </ul>
        <br>
        <h4>5.3 strong>Billing </h4>
        <ul>
          <li>Subscriptions are billed in advance monthly or annually.</li>
          <li>Prices listed on the website are exclusive of applicable taxes.</li>
          <li>Charges are non-refundable unless required by law.</li>
        </ul>
        <br>
        <h4>5.4 Automatic Renewal</h4>
        <p>Subscriptions renew automatically unless cancelled before the renewal date.</p>
        <br>
        <h4>5.5 Payment Failure </h4>
        <p>If payment fails, Worflik may suspend or terminate access until the account is settled.</p>

        <br>
        <h2>6. FREE TRIAL</h2>
        <p>Worflik may offer a free trial.</p>
        <p> During the trial:</p>
        <ul>
          <li>Features may be limited.</li>
          <li>Users must upgrade to retain their data.</li>
          <li>Worflik is not responsible for data loss after trial expiration.</li>
        </ul>
        <br>
        <h2>7. ACCEPTABLE USE POLICY</h2>
        <p>Users agree <strong>not</strong> to:</p>
        <ul>
          <li>Use the Services for unlawful, harmful, or fraudulent purposes.</li>
          <li>Attempt to gain unauthorized access to systems or accounts.</li>
          <li>Interfere with platform performance or security.</li>
          <li>Upload viruses, malware, or harmful code.</li>
          <li>Misuse API access or conduct bulk export without permission.</li>
          <li>Use the platform to store or transmit unlawful content.</li>
          <li>Attempt to copy, reverse engineer, decompile, or duplicate the platform.</li>
        </ul>
        <p>Attempt to copy, reverse engineer, decompile, or duplicate the platform.</p>
        <br>
        <h2>8. DATA OWNERSHIP & PRIVACY</h2>
        <br>
        <h4>8.1 Ownership </h4>
        <p>All data entered into Worflik remains the property of the User.</p>
        <br>
        <h4>8.2 Data Usage </h4>
        Worflik may process User Data solely for:
        <ul>
          <li>Service delivery</li>
          <li>Backup and recovery</li>
          <li>Performance improvement</li>
          <li>Security</li>
        </ul>
        <p>Worflik does not sell user data.</p>
        <br>
        <h4>8.3 Data Protection </h4>
        <p>We implement industry-standard security measures including:</p>
        <ul>
          <li>Encryption</li>
          <li>Automated backups</li>
          <li>Secure cloud hosting</li>
          <li>Access control permissions</li>
          <li>Audit trails</li>
        </ul>
        <br>
        <h4>8.4 Backup & Recovery </h4>
        <p>Worflik performs automated backups; however, users are responsible for exporting and maintaining
          personal
          data backups. Worflik is not liable for rare data loss events due to external factors.</p>
        <br>
        <h4>8.5 Compliance Support </h4>
        <p>Worflik may provide tools for compliance (e.g., audit logs), but <strong>legal compliance remains the
            User’s
            responsibility</strong>.</p>

        <br>
        <h2>9. MULTI-TENANT CLOUD ARCHITECTURE</h2>
        <p>Worflik operates on a shared cloud environment.</p>
        <p>Users acknowledge that:</p>
        <ul>
          <li>Their data is logically separated from other users.</li>
          <li>Resources are shared, but access is securely partitioned.</li>
          <li>Service availability may depend on third-party hosting providers.</li>
        </ul>
        <br>

        <h2>10. SERVICE AVAILABILITY & PERFORMANCE</h2>
        <h4>10.1 Availability Commitment</h4>
        <p> Worflik aims for high uptime but does not guarantee uninterrupted service.</p>
        <br>
        <h4>10.2 Planned Maintenance </h4>
        <p> Notifications will be provided for scheduled maintenance whenever feasible.</p>
        <br>
        <h4>10.3 External Dependencies </h4>
        <p>Performance may be affected by:</p>
        <ul>
          <li>Hosting providers</li>
          <li>Internet connectivity</li>
          <li>Third-party integrations</li>
        </ul>
        <p>Worflik is not liable for downtime caused by external services.</p>
        <br>
        <h2>11. THIRD-PARTY SERVICES & INTEGRATIONS</h2>
        <p>Some modules may integrate with third-party tools (e.g., payment gateways, SMS/email services).</p>
        <br>
        <p>Worflik is <strong>not responsible</strong> for:</p>
        <ul>
          <li>Third-party service fees</li>
          <li>Downtime caused by external systems</li>
          <li>Data loss due to third-party actions</li>
        </ul>
        <p>Users accept all risks associated with external integrations.</p>
        <br>
        <h2>12. INTELLECTUAL PROPERTY</h2>
        <h4>12.1 Worflik Ownership </h4>
        <p> All intellectual property rights related to the ERP platform, including software, source code,
          logos, UI/UX,
          documentation, modules, analytics, and branding, belong exclusively to <strong>Fission
            Monster</strong>.</p>
        <br>
        <h4>12.2 User Restrictions </h4>
        <p>Users may not:</p>
        <br>
        <ul>
          <li>Copy or reproduce platform components</li>
          <li>Reverse engineer or attempt to extract source code</li>
          <li>Sell, sublicense, or resell the platform</li>
          <li>Remove or alter branding or proprietary notices</li>
        </ul>
        <h2>13. API USAGE (If Applicable)</h2>
        <p>If API access is provided:</p>
        <br>
        <ul>
          <li>Usage is governed by rate limits</li>
          <li>The API must not be used to replicate the system</li>
          <li>Worflik may revoke API access at any time</li>
          <li>Data extracted via API remains under these Terms</li>
        </ul>
        <br>
        <h2>14. CONFIDENTIALITY</h2>
        <p>Both parties agree to maintain confidentiality of:</p>
        <br>
        <ul>
          <li>Financial information</li>
          <li>Business processes</li>
          <li>User Data</li>
          <li>Technical details</li>
          <li>Proprietary software logic</li>
        </ul>
        <br>
        <p>Confidentiality obligations survive termination.</p>
        <br>
        <h2>15. TERMINATION</h2>
        <h4>15.1 By User </h4>
        <p>Users may cancel their subscription anytime; however:</p>
        <ul>
          <li>No refunds are issued for the remaining billing period.</li>
          <li>Access will continue until the end of the paid term.</li>
        </ul>
        <br>
        <h4>15.2 By Worflik< </h4>
            <p>We may suspend or terminate access if:</p>
            <br>
            <ul>
              <li>Payment is overdue</li>
              <li>Terms are violated</li>
              <li>Activities threaten system integrity</li>
              <li>Illegal behavior is detected</li>
            </ul>
            <br>
            <h4>15.3 After Termination </h4>
            <br>
            <ul>
              <li>Limited-time data export may be provided</li>
              <li>Data may be permanently deleted after 30–90 days</li>
              <li>Worflik retains backups only as part of routine operations</li>
            </ul>
            <h2>16. WARRANTIES & DISCLAIMERS</h2>
            <p>Worflik is provided <strong>“AS IS”</strong> and <strong>“AS AVAILABLE”</strong> without warranties
              of any
              kind.</p>
            <p>We do <strong>not</strong> guarantee that:</p>
            <ul>
              <li>The Service will be error-free</li>
              <li>Reports or calculations will always be accurate</li>
              <li>Integrations will remain available</li>
              <li>Data will never be lost</li>
            </ul>
            <br>
            <p>Users are responsible for validating critical financial or HR outputs.</p>
            <h2>17. LIMITATION OF LIABILITY</h2>
            <p>To the fullest extent permitted by law:</p>
            <ul>
              <li>Worflik and Fission Monster are <strong>not liable</strong> for indirect, incidental, or
                consequential
                damages.
              </li>
              <li>Total liability for any claim will <strong>not exceed the amount paid in the previous 12
                  months</strong>.
              </li>
              <li>Worflik is <strong>not liable</strong> for business losses, missed profits, or compliance
                failures.</li>
              <li>Data will never be lost</li>
            </ul>
            <br>
            <h2>18. INDEMNIFICATION</h2>
            <p>Users agree to indemnify and hold harmless Worflik and Fission Monster from claims arising out of:
            </p>
            <br>
            <ul>
              <li>Improper use of the platform</li>
              <li>Violation of laws or third-party rights</li>
              <li>Misuse of data or content</li>
              <li>Integration with external systems</li>
            </ul>
            <br>
            <h2>19. MODIFICATION OF TERMS</h2>
            <p>Worflik may update these Terms at any time.</p>
            <p>Continued use of the platform constitutes acceptance of updated Terms.</p>
            <br>
            <h2>20. GOVERNING LAW & DISPUTE RESOLUTION</h2>
            <p>These Terms are governed by the laws of Pakistan, unless otherwise required by local law.</p>
            <br>
            <p>Disputes will be resolved through:</p>
            <ol>
              <li><strong>Internal resolution attempts</strong></li>
              <li><strong>Mediation or arbitration</strong></li>
              <li><strong>Court proceedings</strong>, if necessary, in the jurisdiction of Fission Monster’s
                headquarters
              </li>
            </ol>
            <br>
            <h2>21. CONTACT INFORMATION</h2>
            <p>For support, legal questions, or account issues, contact:</p>
            <br>
            <p><strong>Worflik – Fission Monster</strong></p>
            <p>Email:<strong> contact@worflik.com</strong></p>
            <br>
            <h2>22. ENTIRE AGREEMENT</h2>
            <p>These Terms constitute the entire agreement between the User and Worflik and supersede all previous
              agreements or representations.</p>
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