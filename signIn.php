<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include 'assets/include/cssinclude.php' ;?>

</head>

<body>

    <!-- Section -->
    <section>
        <div class="signin-section">
            <div class="container pe-5">
                <div class="d-flex align-items-center w-100 h-100 justify-content-end py-110 max-w-485">
                    <div class="form-signin">
                        <div class="font-montserrat font-25 font-900 text-uppercase fst-italic">
                            Start Your Journey with Us
                        </div>
                        <div class="font-termina text-center font-500">
                            Access Your Account to Explore Auctions
                        </div>
                        <form id="signin-form">
                            <div class="pt-25">
                                <label class="form-label label-checkout text-white">
                                    Email Address:
                                </label>
                                <input type="text" class="form-control input-field-checkout input-field-signin"
                                    placeholder="dummy@login.com">
                            </div>

                            <div class="pt-25">
                                <label class="form-label label-checkout text-white">Password</label>
                                <div class="password-container d-flex align-items-center">
                                    <input type="password" id="passwordInput"
                                        class="form-control input-field-checkout input-field-signin input-password"
                                        placeholder="✱✱✱✱✱✱✱✱">
                                    <div class="password-toggle password-icon"><img
                                            src="assets/images/icon/eye-closed.svg" alt="Dropped Image"></div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between pt-25">
                                <div class="form-check ">
                                    <input class="form-check-input signin-check" type="checkbox" value=""
                                        id="flexCheckChecked" checked>
                                    <label class="form-check-label font-montserrat font-500 font-14"
                                        for="flexCheckChecked">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="">
                                    <a href="/assets/forgotpassword.php"
                                        class="font-montserrat font-500 font-14 text-white text-decoration-none">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <div class="text-center pt-25">
                                <button type="submit" class="btn place-bid-btn py-3 px-5">
                                    Sign In
                                </button>
                            </div>
                        </form>
                        <div class="d-flex gap-10 align-items-center pt-25">
                            <div class="bg-white w-100 or-side-div"></div>
                            <div class="font-500 font-noto">Or</div>
                            <div class="bg-white w-100 or-side-div"></div>
                        </div>

                        <div class="pt-3 group-button-signin pb-30">
                            <button class="btn-google">
                                <img src="assets/images/icon/flat-color-icons_google.svg" />
                                Login With Google
                            </button>

                            <button class="btn-google mt-3">
                                <img src="assets/images/icon/logos_facebook.svg" />
                                Login With Facebook
                            </button>
                        </div>

                        <div class="font-montserrat font-500 font-14 text-center">
                            Don’t Have An Account?
                            <span><a href="/assets/signup.php" class="signin-singn-up-text text-decoration-none">Sign Up
                                    Now</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section -->

    <!-- JS Include -->
    <?php include 'assets/include/jsinclude.php' ;?>
    <!-- /JS Include -->
</body>

</html>