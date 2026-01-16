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

    <style>
        /* --- Worflik Brand Theme --- */
        :root {
            --worflik-dark: #000000;
            /* Dark Olive/Black from Hero Button */
            --worflik-green: #b8d4ad;
            /* Bright Green from 'Connect' text */
            --worflik-bg: #2a2a0f;
            --input-bg: #2a2a0f;
            /* Very subtle tint for inputs */
            --input-border: #e1e6e1;
            --text-main: #000000;
            --text-light: #666666;
            --label: #2a2a0f;
        }

        /* Section Spacing */
        .contact-heading {
            text-align: center;
            margin-bottom: 50px;
            padding: 0 20px;
            margin-top: 60px;
            /* Space from previous section */
        }

        .contact-heading h1 {
            font-family: inherit;
            /* Inherit site font */
            font-size: 38px;
            font-weight: 800;
            color: var(--text-main);
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .contact-heading h1 span {
            color: var(--worflik-green);
            /* Matches the logo/accent */
        }

        .contact-heading p {
            color: var(--text-light);
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .contact-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: auto !important;
            min-height: 100vh;
            padding-bottom: 150px;
            padding-left: 20px;
            padding-right: 20px;
            width: 100%;
            position: relative;
            z-index: 2;
            overflow: visible;
            /* Prevents clipping */
        }

        /* The Card: Clean, Minimal, No heavy borders */
        .contact-card {
            background-color: #f1f9ed;
            width: 100%;
            max-width: 900px;
            box-shadow: 0 20px 60px rgba(31, 43, 32, 0.08);
            border-radius: 24px;
            padding: 30px;
            border: 1px solid rgba(0, 0, 0, 0.03);
            margin-bottom: 50px;
            position: relative;
            box-sizing: border-box;
        }

        /* Form Layout */
        .contact-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .full-width {
            grid-column: span 2;
        }

        /* Typography */
        .form-group label {
            font-size: 14px;
            font-weight: 700;
            color: var(--label);
            margin-bottom: 8px;
        }

        /* Inputs: Soft background, no harsh lines */
        .custom-input {
            background-color: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 10px;
            /* Matches buttons */
            padding: 16px 20px;
            font-size: 15px;
            color: var(--worflik-dark);
            transition: all 0.3s ease;
            width: 100%;
            font-family: inherit;
        }

        .custom-input:focus {
            outline: none;
            background-color: #ffffff;
            border-color: var(--worflik-green);
            box-shadow: 0 0 0 4px rgba(0, 166, 81, 0.1);
            /* Soft green glow */
        }

        .custom-input::placeholder {
            color: #b0b0b0;
        }

        /* The Button: Matches your 'Get Started' button */
        .submit-btn {
            background-color: #b8d4ad;
            color: #2a2a0f;
            border: 2px solid #2a2a0f;
            padding: 18px 40px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
            width: 100%;
            /* Full width looks better on modern forms */
        }

        .submit-btn:hover {
            background-color: #2a2a0f;
            color: #b8d4ad;
            /* Slightly lighter on hover */
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(31, 43, 32, 0.15);
        }

        /* Success Message */
        .success-alert {
            background-color: #ecfdf5;
            color: var(--worflik-green);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 30px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            border: 1px solid #d1fae5;
        }
    </style>
    <style>
        /* =========================================
               1. TABLET & LARGE MOBILE (Max 770px)
               ========================================= */
        @media (max-width: 770px) {

            /* Stack form fields into one column */
            .contact-form-grid {
                grid-template-columns: 1fr !important;
                gap: 20px !important;
            }

            /* Reset grid span for full-width items */
            .full-width {
                grid-column: span 1 !important;
            }

            /* Reduce card padding to save space */
            .contact-card {
                padding: 30px !important;
                max-width: 100% !important;
            }

            /* Adjust section padding */
            .contact-section {
                padding-bottom: 80px !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            /* Adjust Heading Size */
            .contact-heading h1 {
                font-size: 30px !important;
            }
        }

        /* =========================================
               2. SMALL MOBILE DEVICES (Max 430px)
               ========================================= */
        @media (max-width: 430px) {

            /* Minimal padding for small screens */
            .contact-card {
                padding: 20px 15px !important;
                border-radius: 16px !important;
            }

            /* Smaller heading to prevent wrapping issues */
            .contact-heading h1 {
                font-size: 26px !important;
                margin-bottom: 10px !important;
            }

            .contact-heading p {
                font-size: 14px !important;
            }

            /* Adjust Input Fields */
            .custom-input {
                padding: 12px 15px !important;
                font-size: 15px !important;
            }

            /* Adjust Submit Button */
            .submit-btn {
                padding: 14px 20px !important;
                font-size: 15px !important;
            }

            /* Ensure container fits */
            .contact-section {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }
        }
    </style>
@endsection

@section('meta_title', 'Contact WorFlik – Get Support or Book a Demo')
@section('meta_description',
    'Have questions about WorFlik ERP? Contact our support team or book a personalized demo.
    We’re here to help you streamline your business with our complete cloud-based ERP solution.')
@section('meta_keywords', 'web development, marketing, worflik')

@include('layouts.head')

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
            <a class="contact-btn" href="{{ route('home.register') }}">Get Started</a>
        </div>

        <div class="right-section">
            <img src="/img/contact-us.png" alt="contact-img" class="contact-img">
        </div>
    </section>





    <!--========================================= Contact Form ==========================================-->
    <div class="contact-heading">
        <h1>Let's <span>Connect</span> and Grow Together</h1>
        <p>Have a question, idea, or need support? Fill out the form below and our team will get back to you shortly.
        </p>
    </div>

    <section class="contact-section">
        <div class="contact-card">

            @if (session('success'))
                <div class="success-alert">
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="contact-form-grid">

                    <div class="form-group">
                        <label for="first">First Name</label>
                        <input type="text" id="first" name="first" class="custom-input" placeholder="e.g. John"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" id="last" name="last" class="custom-input" placeholder="e.g. Doe"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="custom-input"
                            placeholder="john@company.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="custom-input"
                            placeholder="+1 (555) 000-0000" pattern="[0-9\+\-\ ]{7,15}">
                    </div>

                    <div class="form-group full-width">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="custom-input"
                            placeholder="How can we help you?">
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="custom-input" rows="5"
                            placeholder="Tell us about your project or inquiry..." required></textarea>
                    </div>

                    <div class="full-width">
                        <button type="submit" class="submit-btn">Send Message</button>
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
