<!DOCTYPE html>
<html lang="en">
@section('css')
    <link rel="stylesheet" href="{{ asset('asset/about.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/footer.css') }}">
@endsection
<style>
    /* ==========================================================================
       FORCED CSS LOAD - MODERN CARD GRID
       ========================================================================== */
    .how-work-section {
        padding: 100px 20px;
        background-color: #f4f9f1;
        /* Theme Background */
        font-family: Arial, sans-serif;
        box-sizing: border-box;
    }

    .how-work-section * {
        box-sizing: border-box;
    }

    .hw-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* --- Header --- */
    .hw-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .hw-header h1 {
        font-size: clamp(32px, 5vw, 42px);
        font-weight: 800;
        color: #2a2a0f;
        margin-bottom: 15px;
    }

    .hw-header p {
        font-size: 18px;
        color: #555;
        line-height: 1.5;
    }

    /* --- The Grid Layout --- */
    .hw-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
    }

    /* --- Card Styling --- */
    .hw-card {
        background: #ffffff;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: 1px solid transparent;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    /* Hover Effects */
    .hw-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(42, 42, 15, 0.15);
        border-color: #b8d4ad;
    }

    /* The Step Number (01, 02...) */
    .hw-step-number {
        font-size: 50px;
        font-weight: 900;
        color: #e6f0e2;
        /* Watermark color */
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 0.3s ease;
        line-height: 1;
    }

    .hw-card:hover .hw-step-number {
        color: #b8d4ad;
        transform: scale(1.1) rotate(-10deg);
    }

    /* Text Styling */
    .hw-card h3 {
        font-size: 22px;
        font-weight: 800;
        color: #2a2a0f;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    .hw-card p {
        font-size: 15px;
        color: #666;
        line-height: 1.6;
        position: relative;
        z-index: 1;
    }

    /* Special Highlight for Last Card */
    .highlight-card {
        background-color: #2a2a0f;
    }

    .highlight-card .hw-step-number {
        color: #3a3a1f;
    }

    .highlight-card h3 {
        color: #ffffff;
    }

    .highlight-card p {
        color: #bbbbbb;
    }

    .highlight-card:hover {
        border-color: #2a2a0f;
    }

    /* --- CTA Button --- */
    .hw-btn-container {
        text-align: center;
        margin-top: 40px;
    }

    .hw-btn {
        display: inline-block;
        padding: 18px 60px;
        background-color: #2a2a0f;
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .hw-btn:hover {
        background-color: #b8d4ad;
        color: #2a2a0f;
        transform: translateY(-3px);
    }

    /* --- Responsive --- */
    @media (max-width: 768px) {
        .how-work-section {
            padding: 60px 20px;
        }

        .hw-grid {
            grid-template-columns: 1fr;
        }

        .hw-card {
            text-align: center;
        }

        .hw-step-number {
            position: static;
            margin-bottom: 10px;
            color: #b8d4ad;
        }

        .hw-btn {
            width: 72%;
            text-align: center;
        }
    }
</style>
@section('meta_title', 'About WorFlik – A Complete ERP Solution for Growing Businesses')
@section('meta_description',
    'Learn about WorFlik’s mission to simplify business management through a unified ERP
    system. Discover our expertise in Accounting, HRM, POS, Inventory, and cloud automation for small and medium
    enterprises.')
@section('meta_keywords', 'web development, marketing, worflik')

@include('layouts.head')

<body>

    @include('layouts.header')



    <!-- dashboard image -->
    <section class="dashboard-container">
        <div class="left-section">
            <p class="dash-p1">Built for Business That Think Ahead</p>
            <div class="decor-bar"></div>
            <h1 class="dash-h1">Empowering Smarter Operations, Company-Wide</h1>
            <p class="dash-p">
                WorFlik isn't just software it's the digital backbone of forward thinking business. From HR and
                finance to sales and inventory, it connects
                every department in one seamless, could-powered platform. Whether you run one branch or many, WorFlik
                helps you scale with clarity and control.
            </p>
            <a class="contact-btn" href="{{ route('home.register') }}">Get Started</a>
        </div>

        <div class="right-section">
            <img src="/img/about-us.png" alt="contact-img" class="contact-img">
        </div>
    </section>

    <div class="about-soft">
        <h1>About Our Software</h1>
        <p>More Than a Tool It's Your Business Operating System WorFlik Unifies Finance, POS, HR, Inventory, and
            sales in one smart,
            modular platform built to adapt and scale with you.
        </p>
    </div>

    <section class="value-card">
        <div class="flex-container">
            <div class="left-img">
                <img src="/img/core-values.png" alt="">
            </div>

            <div class="right-text">
                <h1>Core Values Behind the Software:</h1>
                <ul>
                    <li>Transparency and Control across all operations</li>
                    <li>Seamless collaboration between internal teams</li>
                    <li>Real-time reporting and actionable insights</li>
                    <li>Reliable cloud infrastructure with top-grade security</li>
                </ul>
            </div>
        </div>

    </section>

    <section class="intel-section">
        <div class="intel-content">
            <div class="left-intel">
                <h1>Customizations & Intelligence</h1>
                <p>
                    <strong>Tailored for Your Business Not the Other Way Aroung</strong> WorFlik is built to mold
                    around your unique operations. No rigid templates. No limits. Just a platform that grows with you.
                </p>
            </div>

            <div class="right-intel">
                <img src="/img/customize.png" alt="">
            </div>
        </div>
        <div class="what-del">
            <h4>What We Deliver:</h4>
            <ul>
                <li>Fully customizable modules aligned with your business model</li>
                <li>Smart filters to analyze performance by team, timeframe, or individual</li>
                <li>Dynamic, stakeholder specific reports for leadership, finance, HR, and more</li>
                <li>Adaptive KPIs and dashboard that evolve with your goal</li>
            </ul>
        </div>

    </section>


    <section class="how-work-section">
        <div class="hw-container">

            <div class="hw-header">
                <h1>How It Works</h1>
                <p>We've made setup effortless without cutting back on capability.</p>
            </div>

            <div class="hw-grid">

                <div class="hw-card">
                    <div class="hw-step-number">01</div>
                    <h3>Company Registration</h3>
                    <p>Sign up and set up your business structure in minutes.</p>
                </div>

                <div class="hw-card">
                    <div class="hw-step-number">02</div>
                    <h3>Module Activation</h3>
                    <p>Choose the departments you need Finance, POS, HR, Inventory, and more.</p>
                </div>

                <div class="hw-card">
                    <div class="hw-step-number">03</div>
                    <h3>Role Assignment</h3>
                    <p>Create teams with custom access like Sales seeing only POS, HR viewing employee data.</p>
                </div>

                <div class="hw-card">
                    <div class="hw-step-number">04</div>
                    <h3>Live Tracking & Reporting</h3>
                    <p>Get real-time data, alerts, and business summaries from day one.</p>
                </div>

                <div class="hw-card">
                    <div class="hw-step-number">05</div>
                    <h3>Ongoing Support & Training</h3>
                    <p>Our team is with you at every step setup, updates, and training.</p>
                </div>

                <div class="hw-card highlight-card">
                    <div class="hw-step-number">06</div>
                    <h3>Focus on Growth</h3>
                    <p>You grow your business WorFlik takes care of the rest.</p>
                </div>

            </div>

            <div class="hw-btn-container">
                <a class="hw-btn" href="{{ route('home.register') }}">Start Your Free Trial</a>
            </div>

        </div>
    </section>



    <section class="analytic">
        <div class="analytic-container">
            <div class="analytic-img">
                <img src="/img/powerful.png" alt="">
            </div>

            <div class="right-analytic">
                <h1>Powerful Analytics That Make Decision Making Easy</h1>
                <p>We don't just help you operate, we help you understand and improve. WorFlik provides deep insights
                    and performance analysis tools for every key business function.</p>
                <h4>Key Features</h4>
                <ul>
                    <li>Profit/loss tracking in real-time</li>
                    <li>Sales trends across products, teams, or locations</li>
                    <li>Employee performance dashboards</li>
                    <li>Inventory movement analysis</li>
                    <li>Financial forecasting and budget planning</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="detail-container">
        <p>It's not about more data - it's about the right data. Delivered in clear, actionable ways that empower
            smarter decisions every day.</p>
        <a href="{{ route('home.register') }}">Start Your Free Trial</a>
    </div>









    <!---========================================Contact Form==================================================-->



    @include('layouts.footer')

    </section>


</body>

</html>
