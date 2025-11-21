<!DOCTYPE html>
<html lang="en">
@section('css')
    <link rel="stylesheet" href="{{ asset('asset/about.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/header.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/footer.css') }}">    
@endsection
@include('layouts.head')

<body>

    @include('layouts.header')



    <!-- dashboard image -->
    <section class="dashboard-container">
        <div class="left-section">
            <p class="dash-p1">Built for Business That Think Ahead</p>
            <h1 class="dash-h1">Empowering Smarter Operations, Company-Wide</h1>
            <p class="dash-p">
                WorFlik isn't just software - it's the digital backbone of forward-thinking business. From HR and
                finance to sales and inventory, it connects
                every department in one seamless, could-powered platform. Whether you run one branch or many, WorFlik
                helps you scale with clarity and control.
            </p>
            <a class="contact-btn" href="#">Get Started</a>
        </div>

        <div class="right-section">
            <img src="/img/about-us.png" alt="contact-img" class="contact-img">
        </div>
    </section>

    <div class="about-soft">
        <h1>About Our Software</h1>
        <p>More Than a Tool - It's Your Business Operating System <br> WorFlik Unifies Finance, POS, HR, Inventory, and
            sales in one smart,
            modular platform - built to adapt and scale with you.
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
                    <strong>Tailored for Your Business - Not the Other Way Aroung</strong> WorFlik is built to mold
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
                <li>Dynamic, stakeholder - specific reports for leadership, finance, HR, and more</li>
                <li>Adaptive KPIs and dashboard that evolve with your goal</li>
            </ul>
        </div>

    </section>


    <section class="how-work">
        <div class="how-title">
            <h1>How It Works</h1>
            <p>We've made setup effortless - without cutting <br> back on capability</p>
        </div>

        <div class="working-container">

            <div class="workings">
                <div class="work-img">
                    <img src="/img/company.png" alt="">
                </div>
                <div class="work-text">
                    <h1>Compnay Registration</h1>
                    <p>Sign up and set up your business structure in minutes.</p>
                </div>
            </div>

            <div class="workings">
                <div class="work-img">
                    <img src="/img/module.png" alt="">
                </div>
                <div class="work-text">
                    <h1>Module Activation</h1>
                    <p>Choose the departments you need — Finance, POS, HR, Inventory, and more.</p>
                </div>
            </div>

            <div class="workings">
                <div class="work-img">
                    <img src="/img/employee.png" alt="">
                </div>
                <div class="work-text">
                    <h1>Role Assignment</h1>
                    <p>Create teams with custom access — like Sales seeing only POS, HR viewing employee data.</p>
                </div>
            </div>

            <div class="workings">
                <div class="work-img">
                    <img src="/img/performance.png" alt="">
                </div>
                <div class="work-text">
                    <h1>Live Tracking & Reporting</h1>
                    <p>Get real-time data, alerts, and business summaries from day one.</p>
                </div>
            </div>

            <div class="workings">
                <div class="work-img">
                    <img src="/img/training.png" alt="">
                </div>
                <div class="work-text">
                    <h1>Ongoing Support & Training</h1>
                    <p>Our team is with you at every step — setup, updates, and training.</p>
                </div>
            </div>


            <div class="workings">
                <div class="work-img">
                    <img src="/img/analytics.png" alt="">
                </div>
                <div class="work-text">
                    <h1>Focus on Growth</h1>
                    <p>You grow your business — WorFlik takes care of the rest.</p>
                </div>
            </div>
        </div>

        <div class="work-btn">
            <a class="work-bt" href="#">Start Your Free Trial</a>
        </div>
    </section>



    <section class="analytic">
        <div class="analytic-container">
            <div class="analytic-img">
                <img src="/img/powerful.png" alt="">
            </div>

            <div class="right-analytic">
                <h1>Powerful Analytics That Make Decision - Making Easy</h1>
                <p>We don't just help you operate - we help you understand and improve. WorFlik provides deep insights
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
        <a href="">Start Your Free Trial</a>
    </div>









    <!---========================================Contact Form==================================================-->



    @include('layouts.footer')

    </section>


</body>

</html>
