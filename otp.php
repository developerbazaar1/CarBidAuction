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

                        <div class="font-montserrat font-25 font-900 text-uppercase fst-italic text-center mt-30">
                            Verify Your Identity
                        </div>
                        <div class="font-termina text-center font-500">
                            Secure Your Account with OTP Verification
                        </div>
                        <form id="otp-form">
                            <div class="pt-25 d-flex gap-4 max-w-314">

                                <input type="number" maxlength="1" id="otp1"
                                    class="otp-input form-control input-field-checkout input-field-signin">
                                <input type="number" maxlength="1" id="otp2"
                                    class="otp-input form-control input-field-checkout input-field-signin">
                                <input type="number" maxlength="1" id="otp3"
                                    class="otp-input form-control input-field-checkout input-field-signin">
                                <input type="number" maxlength="1" id="otp4"
                                    class="otp-input form-control input-field-checkout input-field-signin">

                            </div>


                            <div class="text-center pt-25">
                                <button type="submit" class="btn place-bid-btn py-3 shadow-btn">
                                    Submit
                                </button>
                            </div>
                        </form>

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