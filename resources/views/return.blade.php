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
            <h1>Return & Cancellation Policy</h1>
            <br>
            <div class="content">
                <p><strong>Owned & Operated By:</strong>Fission Monster</p>
                <p><strong>Contact:</strong>contact@worflik.com</p>
                <br>
                <h2>1. Introduction</h2>
                <br>
                <p>This Return & Cancellation Policy outlines your statutory rights as a Consumer, the procedures for
                    exercising those rights, and the obligations of both the Customer and the Business when a
                    cancellation or refund request is submitted. All transactions are processed securely through Paddle,
                    our payment partner, which may exercise independent discretion when assessing refund eligibility in
                    cases of fraud, abuse, or policy violations.
                </p>
                <br>
                <p>This Policy is designed to comply with applicable consumer protection laws and ensure transparency,
                    fairness, and clarity for every Customer.</p>
                <br>
                <h2>2. Scope of the Policy</h2>
                <br>
                <h4>2.1 Statutory Cooling-Off Period (14 Days)</h4>
                <br>
                <p>As a Consumer, you have the legal right to cancel your purchase within <strong> 14 calendar days
                    </strong> without
                    providing any reason, unless a specific exception applies under this Policy. <br> This <strong>
                        cancellation
                        period begins on the day after your Transaction has been completed </strong> and ends at
                    midnight on the 14th
                    day.</p>
                <br>
                <p>To meet this deadline, you must send your cancellation request before the end of the 14-day period.
                    You are not required to receive a confirmation from us before the deadline for the cancellation to
                    be valid.</p>
                <br>
                <h4>2.2 Subscription Services — Important Exception</h4>
                <br>
                <p>Your statutory right to cancel applies <strong> only to the initial subscription purchase.</strong>
                    <br>
                    It <strong>does not</strong> apply to <strong>automatic renewals, recurring billing cycles</strong>,
                    or subsequent subscription
                    charges.<br>
                    If you wish to stop future subscription renewals, you may cancel your active subscription at any
                    time, but the statutory cancellation right applies solely to the first transaction.
                </p>
                <br>
                <h2>3. How to Submit a Cancellation Request</h2>
                <br>
                <p>To exercise your right to cancel, you must notify us or Paddle of your decision clearly and
                    unambiguously using one of the following methods:</p>
                <br>
                <ol>
                    <li><strong>Online Contact Form</strong><br>Submit your request through our official Contact Us
                        form. </li>
                    <li><strong>Email</strong><br>Send your cancellation request to our support email:
                        <br><strong>contact@worflik.com</strong>
                    </li>
                    <li><strong>Model Cancellation Form</strong><br>You may also use the model cancellation form
                        provided at the end of this document and send it via email or through the contact form.</li>
                </ol>
                <br>
                <h4>3.1 Acknowledgment of Receipt</h4>
                <br>
                <p>When you submit a cancellation request via our online Contact Us form, we will provide a written
                    acknowledgment of receipt without undue delay.
                    This acknowledgment confirms that your request has been received and will be processed in accordance
                    with this Policy.</p>
                <br>
                <h2>4. Reimbursement & Refund Process</h2>
                <br>
                <h4>4.1 Refund Timeline</h4>
                <br>
                <p>If you cancel within the lawful cancellation period and no exclusions apply, we will process your
                    refund within 14 days from the date we receive your cancellation notice.</p>
                <br>
                <h4>4.2 Method of Reimbursement</h4>
                <br>
                <p>Refunds will be issued using <strong>the same payment method you used for the original
                        Transaction</strong>, unless an
                    alternative has been mutually agreed upon.
                    No additional fees will be charged for the reimbursement.</p>
                <br>
                <h4>4.3 Paddle’s Refund Authority</h4>
                <br>
                <p>Because all payments are processed by Paddle, refund assessments may also be subject to Paddle’s own
                    fraud-prevention checks and abuse monitoring.
                    Paddle may decline or challenge refund requests if:</p>
                <br>
                <ul>
                    <li>the transaction shows signs of fraudulent activity,</li>
                    <li>the request is inconsistent with consumer protection regulations,</li>
                    <li>prior misuse of refunds has been identified.</li>
                </ul>
                <br>
                <p>In such cases, Paddle may exercise independent discretion in approving or denying the refund.</p>
                <br>
                <h2>5. Limitations & Exceptions to the Right to Cancel</h2>
                <br>
                <p>Certain product types and situations are legally exempt from the cancellation right. These exceptions
                    apply automatically and override the general 14-day cancellation period.</p>
                <br>
                <h4>5.1 Digital Content Exception</h4>
                <br>
                <p>You <strong>lose your right to cancel</strong> once access to <strong>digital content</strong> has
                    been provided and you have <strong>begun
                        downloading, streaming, or otherwise using the product.</strong>
                </p>
                <br>
                <p>By starting the download or streaming process, you expressly acknowledge and agree that:</p>
                <br>
                <ul>
                    <li>You waive your right to cancel, and</li>
                    <li>You are no longer eligible for a statutory refund.</li>
                </ul>
                <br>
                <h4>5.2 Services or Benefits Already Received</h4>
                <br>
                <p>If the nature of the product or service involves you receiving value or benefit immediately upon
                    purchase (for example, one-time digital access, completed service steps, or delivered materials),
                    you may no longer be eligible to cancel once:
                </p>
                <br>
                <ul>
                    <li>You have accessed or used the service, or</li>
                    <li>The digital goods have been delivered and consumed.</li>
                </ul>
                <br>
                <p>This exception applies even if the cancellation period has not yet expired.</p>
                <br>
                <h2>6. Discretionary Refunds (Outside Statutory Rights)</h2>
                <br>
                <p>If your request falls outside the statutory 14-day cancellation period or qualifies under an
                    exception, refunds may still be considered <strong>at our sole discretion</strong> or <strong>at
                        Paddle’s discretion.</strong><br>
                    Discretionary refunds are evaluated on a case-by-case basis and may require additional information
                    or verification to prevent fraudulent or abusive refund claims.<br><br>
                    Approval of one discretionary refund does not guarantee future refunds.</p>
                <br>

                <h2>7. Model Cancellation Form</h2>
                <br>
                <p>Customers may (but are not required to) use the following template:</p>
                <br>
                <p><strong>Model Cancellation Form</strong></p>
                <p>(Complete and return this form only if you wish to cancel your purchase)<br> I hereby notify you that
                    I am cancelling my contract for the following product/service:</p>
                <br>
                <ul>
                    <li>Product/Service Name:</li>
                    <li>Order Number:</li>
                    <li>Date of Purchase:</li>
                    <li>Customer Name:</li>
                    <li>Customer Email:</li>
                    <li>Reason for Cancellation (optional):</li>
                </ul>
                <br>
                <p>Date:<br>Signature (if submitted on paper):</p>

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
