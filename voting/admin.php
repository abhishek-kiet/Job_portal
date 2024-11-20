<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
            crossorigin="anonymous">
        <style>
           section{
            box-shadow: rgba(16, 213, 137, 0.866) 0px 22px 70px 4px;
           }
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;
            
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            }
            
            @media (min-width: 768px) {
            .gradient-form {
            height: 100vh !important;
            }
            }
            @media (min-width: 769px) {
            .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
            }
            }
    </style>
    </head>

    <body background="../ovs/images/pannel_bg/admin_pannel_bg.jpg">
        <section class="h-100 gradient-form"
            style="background-color: #eee;box-shadow: rgba(16, 213, 137, 0.866) 0px 22px 70px 4px;">
            <div class="container py-5 h-100">
                <div
                    class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img
                                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                style="width: 185px;"
                                                alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">E-Voting
                                                Pannel</h4>
                                        </div>

                                        <form action="admincode.php"
                                            method="post">
                                            <p>Please login to your account</p>

                                            <div data-mdb-input-init
                                                class="form-outline mb-4">
                                                <input name="email" type="email"
                                                    id="form2Example11"
                                                    class="form-control"
                                                    placeholder="Phone number or email address" />
                                                <label class="form-label"
                                                    for="form2Example11">Username</label>
                                            </div>

                                            <div data-mdb-input-init
                                                class="form-outline mb-4">
                                                <input name="pass"
                                                    placeholder="Password"
                                                    type="password"
                                                    id="form2Example22"
                                                    class="form-control" />
                                                <label class="form-label"
                                                    for="form2Example22">Password</label>
                                            </div>

                                            <div
                                                class="text-center pt-1 mb-5 pb-1">
                                                <button data-mdb-button-init
                                                    data-mdb-ripple-init
                                                    class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Log
                                                    in</button>
                                                <a class="text-muted"
                                                    href="#!">Forgot
                                                    password?</a>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div
                                        class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">A way to the Era of
                                            Digital Voting System.</h4>
                                        <p class="small mb-0">Please enter your
                                            credentials to access the
                                            administrative functions of the
                                            system. This secure area is designed
                                            for authorized personnel only,
                                            ensuring the highest level of
                                            privacy and protection for our data.

                                            Features:

                                            Secure Login: Utilizing advanced
                                            encryption to safeguard your
                                            information.
                                            User-Friendly Interface: Clean and
                                            intuitive design for easy
                                            navigation.
                                            Fast Access: Optimized for quick and
                                            efficient logins, minimizing wait
                                            times.
                                            Responsive Design: Accessible from
                                            any device, providing flexibility
                                            for on-the-go management.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>

</html>