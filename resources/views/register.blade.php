<!DOCTYPE html>
<html lang="en">
@section('css')
    <link rel="stylesheet" href="{{ asset('asset/Register.css') }}">
@endsection
@include('layouts.head')

<body>

    @include('layouts.header')

    <!----=======================================Registration Form=================================================================-->
    <div class="register-container">
        <!-- Left Section -->
        <div class="register-left">
            <h1>Start Smarter.</h1>
            <p>Create your WorFlik Account today.</p>
            <img src="/img/reg.png" alt="Illustration" class="illustration">
        </div>

        <!-- Right Section -->
        <div class="register-right">
            <div class="logo">
                <img src="/img/logo.png" alt="WorFlik Logo">
            </div>

            <!-- Toggle buttons -->
            <div class="form-toggle">
                <button onclick="window.location.href='https://tool.worflik.com/'">Login</button>
                <button class="active">Register</button>
            </div>

            <!-- Form -->
            <form action="#">

                <label>
                    Full Name
                    <input type="text" placeholder="Enter your full name" required>
                </label>

                <label>
                    User name
                    <input type="text" placeholder="Enter your user name" required>
                </label>

                <label>
                    Email
                    <input type="email" placeholder="Enter your email address" required>
                </label>

                <label>
                    Phone
                    <input type="tel" placeholder="Enter your phone number" required>
                </label>

                <h5>Password<h5>
                        <div class="password-container">
                            <input type="password" placeholder="Enter your password" id="password">
                            <img src="/img/eye-closed.png" id="eyeicon">
                        </div>
                        <script>
                            let eyeicon = document.getElementById("eyeicon");
                            let password = document.getElementById("password");

                            eyeicon.onclick = function() {
                                if (password.type == "password") {
                                    password.type = "text";
                                    eyeicon.src = "/img/eye-open.png";
                                } else {
                                    password.type = "password";
                                    eyeicon.src = "/img/eye-closed.png";
                                }
                            }
                        </script>






                        <div class="remember">
                            <input class="checkbox" type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </div>

                        <button type="submit" class="btn-submit">Register Now</button>
            </form>
        </div>
    </div>















    <!-----------------------------FOOTER SECTION-------------------------------------->
    @include('layouts.footer')





    </section>


</body>

</html>
