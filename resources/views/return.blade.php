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
      <h1>Return & Refund Policy</h1>
      <div class="content">
        <h3>Last updated:<span><strong>[21-11-2025]</strong></span></h3>
        <p>At Worflik, we strive to provide reliable and high-quality accounting software for individuals and
          businesses. This Return & Refund Policy explains the conditions under which refunds may be issued for our
          digital services.</p>
        <br>

        <h2>1. General Policy</h2>
        <p>Because Worflik provides digital software services that grant immediate access upon subscription, we
          generally do not offer refunds once a subscription or payment has been processed.
        </p>
        <br>
        <p>However, we understand that situations may arise where a refund is appropriate. Please review the conditions
          outlined below.
        </p>
        <br>

        <h2>2. Eligibility for Refunds</h2>
        <p>You may request a refund if:</p>
        <ul>
          <li>You were <strong>incorrectly charged</strong> due to a technical or billing error.</li>
          <li>You were <strong>charged after canceling</strong> your subscription before the renewal date.</li>
          <li>You are experiencing <strong>severe technical issues</strong> that prevent you from using the service, and
            our support team
            is unable to resolve the problem.</li>
          <li>Interfere with the platform’s functionality or security</li>
        </ul>
        <p>Refunds are issued at the discretion of Worflik after investigation.</p>
        <br>
        <h2>3. Non-Refundable Situations</h2>
        <p>Refunds will not be issued for the following:</p>
        <ul>
          <li>You changed your mind or no longer need the service</li>
          <li>You failed to cancel your subscription before renewal</li>
          <li>Partial usage of monthly or annual subscriptions</li>
          <li>Failure to use the software or misunderstanding of features</li>
          <li>Issues caused by your own devices, internet connection, or third-party integrations outside our control
          </li>
        </ul>
        <br>
        <h2>4. Free Trials</h2>
        <p>If Worflik offers a free trial, you can evaluate the platform before committing to a paid plan.</p>
        <p>Once the free trial ends and a paid subscription begins, the standard refund rules apply.</p>
        <br>
        <h2>5. Cancellation Policy</h2>
        <p>You may cancel your subscription at any time:</p>
        <ul>
          <li>Cancellation prevents future billing</li>
          <li>Your account will remain active until the end of the paid billing cycle</li>
          <li>Partial usage of monthly or annual subscriptions</li>
        </ul>
        <br>
        <h2>6. Duplicate Payments</h2>
        <p>If you believe you were <strong>charged twice</strong> for the same billing cycle, please contact us.
          Duplicate charges will
          be fully refunded once verified.</p>
        <br>
        <h2>7. How to Request a Refund</h2>
        <p>To request a refund, email us at:</p>
        <p><strong>Email:</strong> [contact@worflik.com]</p>
        <p>Include the following:</p>
        <ul>
          <li>Your full name</li>
          <li>Account email address</li>
          <li>Transaction ID or invoice number</li>
          <li> Reason for requesting a refund</li>
          <li> Screenshots, if applicable</li>
        </ul>
        <p>We will review your request and respond within <strong>3–7 business days.</strong></p>
        <br>
        <h2>8. Changes to This Policy</h2>
        <p>We may update this Return & Refund Policy periodically. Updates will be posted on this page with the revised
          date.</p>
        <br>

        <h2>9. Contact Information</h2>
        <p>For questions about our Return & Refund Policy, please contact us:</p>
        <p><strong>Email:</strong> [contact@worflik.com]</p>
        <p><strong>Website:</strong> Worflik</p>
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