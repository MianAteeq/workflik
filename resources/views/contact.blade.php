<!DOCTYPE html>
<html lang="en">
@section('css')
<link rel="stylesheet" href="{{ asset('asset/contact.css') }}">
<link rel="stylesheet" href="{{ asset('asset/header.css') }}">
<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
<style>
.success-alert {
  padding: 15px 20px;
  background: #28a745;
  color: white;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 500;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  animation: fadeIn 0.5s ease-in-out;
  margin-bottom: 20px;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
@endsection
@include('layouts.head')
@extends('layouts.app')
@section('meta_title', 'Contact WorFlik – Get Support or Book a Demo')

@section('meta_description',
'Have questions about WorFlik ERP? Contact our support team or book a personalized demo. We’re here to help you
streamline your business with our complete cloud-based ERP solution.'
)

<body>

  @include('layouts.header')



  <!-- dashboard image -->
  <section class="dashboard-container">
    <div class="left-section">
      <h1 class="dash-h1">Let's Build Better Business, Together</h1>
      <p class="dash-p">
        <strong>Have Question?</strong> Need a custom solution? Our team is here to help.
        Reach out and let's explore how WorFlik can simplify, scale, and empower your operations.
      </p>
      <a class="contact-btn" href="#">Get Started</a>
    </div>

    <div class="right-section">
      <img src="/img/contact-us.png" alt="contact-img" class="contact-img">
    </div>
  </section>







  <!---========================================Contact Form==================================================-->
  <div class="contact-heading">
    <h1>Let's Connect and Grow Together</h1>
    <p>Have a question, idea, or need support? Fill out the form- our team will get back to you shortly</p>


  </div>



  <section class="contact-section">
    <div class="contact-card">
      <!-- Decorative circles -->
      <div class="circle circle-lg"></div>
      <div class="circle circle-sm"></div>
      @if (session('success'))
      <div class="success-alert">
        <span>✔ {{ session('success') }}</span>
      </div>
      @endif



      <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="row">
          <label>
            First Name
            <input type="text" name="first" required>
          </label>
          <label>
            Last Name
            <input type="text" name="last" required>
          </label>
        </div>

        <div class="row">
          <label>
            Email
            <input type="email" name="email" required>
          </label>
          <label>
            Phone
            <input type="tel" name="phone">
          </label>
        </div>

        <div class="subject-msg-area">
          <label>
            Subject?
            <input class="subject-area" type="text" name="subject">
          </label>

          <div class="message-row">
            <!-- NEW flex wrapper -->
            <label class="message-label">
              Message
              <textarea class="msg-area" name="message" rows="1" placeholder="Write your message.."></textarea>
            </label>

            <button type="submit" class="submit-btn">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!---===============================================Contact Links Section=======================================================-->
  <!-- <section class="contact-info-section">
        <div class="info-container">
             Left image 
  <div class="info-image">
    <img src="/img/contact-img.png" alt="Phone illustration">
  </div>

  Right text and icons
  <div class="info-details">


    <ul class="info-list">
      <li>
        <img src="/img/location.png" alt="Location">
        <span>22 main boulevard Pine Ave, Eden Lane Villas 2 Lahore, 5400</span>
      </li>
      <li>
        <img src="/img/mail.png" alt="Email">
        <span>contact@worflik.com</span>
      </li>
      <li>
        <img src="/img/phone.png" alt="Phone">
        <span>+92 331 4547089</span>
      </li>
      <li>
        <img src="/img/timings.png" alt="Time">
        <span>9:00 AM – 6:00 PM</span>
      </li>
    </ul>
  </div>
  </div>
  </section> -->

  <div class="Free-trial-btn">
    <a class="trial-btn" href="{{ route('home.register') }}">Start Your Free Trial</a>
  </div>



  @include('layouts.footer')
  </section>


</body>

</html>