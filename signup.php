<!DOCTYPE html>
<html lang="en">

<head>
    <title> Car Arbab</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <?php include 'assets/include/cssinclude.php' ;?>

</head>

<body>

    <!-- Section -->
    <section>
        <div class="signin-section">
            <div class="container">
                <div class="pe-sm-5 pe-0">
                    <div class=" align-items-center w-100 h-100 justify-content-end py-4 max-w-450">
                        <div class="form-signin">
                            <div class="font-montserrat font-25 font-900 text-uppercase fst-italic text-center">
                                Join the Excitement
                            </div>
                            <div class="font-termina text-center font-500">
                                Start Bidding and Driving Your Dream
                            </div>
                            <form id="signup-form">
                                <div class="pt-25">
                                    <label class="form-label label-checkout text-white">
                                        Email Address:
                                    </label>
                                    <input type="text" class="form-control input-field-checkout input-field-signin"
                                        placeholder="dummy@login.com">
                                </div>

                                <div class="pt-25 position-relative">
                                    <label class="form-label label-checkout text-white">
                                        Phone Number:
                                    </label>
                                    <input name="phone" type="number" id="phone" placeholder="99999-99999"
                                        class="form-control input-field-checkout input-field-signin" />
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


                                <div class="pt-25">
                                    <label class="form-label label-checkout text-white">Confirm Password</label>
                                    <div class="password-container d-flex align-items-center">
                                        <input type="password" id="confirmPasswordInput"
                                            class="form-control input-field-checkout input-field-signin input-password"
                                            placeholder="✱✱✱✱✱✱✱✱">
                                        <div class="confirm-password-toggle password-icon"><img
                                                src="assets/images/icon/eye-closed.svg" alt="Dropped Image"></div>
                                    </div>
                                </div>

                                <div class="text-center pt-25">
                                    <button type="submit" class="btn place-bid-btn py-3 px-5">
                                        Sign Up
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
                                Already have An Account?
                                <span><a href="/signIn.php" class="signin-singn-up-text text-decoration-none">Sign In
                                        Now</a></span>
                            </div>
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