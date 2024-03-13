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
                <div class=" align-items-center w-100 h-100 justify-content-end py-258 max-w-450">
                    <div class="form-signin">
                        <div class="text-center">
                            <a href="/signIn.php"
                                class="d-flex align-items-center text-white gap-1 text-decoration-none back-login-text">
                                <img src="assets/images/icon/ep_back.svg" />
                                <div>
                                    Back to login
                                </div>
                            </a>
                        </div>
                        <div class="font-montserrat font-25 font-900 text-uppercase fst-italic text-center mt-30">
                            Recover Your Access
                        </div>
                        <div class="font-termina text-center font-500">
                            Regain Entry to Your Account

                        </div>
                        <div class="">
                            <div class="pt-25">
                                <label class="form-label label-checkout text-white">
                                    Email Address:
                                </label>
                                <input type="text" class="form-control input-field-checkout input-field-signin"
                                    placeholder="dummy@login.com">
                            </div>


                            <div class="text-center pt-25">
                                <button class="btn place-bid-btn py-3 shadow-btn">
                                    Submit
                                </button>
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