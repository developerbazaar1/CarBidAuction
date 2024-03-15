<!DOCTYPE html>
<html lang="en">

<head>
    <title> Car Arbab</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <?php include 'assets/include/cssinclude.php' ;?>

</head>

<body>

    <!-- Header -->
    <?php include 'assets/include/header.php' ;?>
    <!-- /Header -->

    <section class="google-map-section position-relative -mt-130">
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.52647740656!2d76.76356035964785!3d28.64368459244109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1709542558888!5m2!1sen!2sin"
                width="100%" height="581" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="pt-50 pb-50">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="heading">
                        Let's Connect, Drive Your Inquiries Away
                    </div>
                    <div class="pri font-600 pt-4">
                        Reach Out to [Your Company Name] for Exceptional Support
                    </div>
                    <div class="contact-details">
                        <div class="d-flex gap-4">
                            <div>
                                <img src="assets/images/icon/call.svg" />
                            </div>
                            <div class="inquiries-list-desc">
                                815-360-0806
                            </div>
                        </div>

                        <div class="d-flex gap-4">
                            <div>
                                <img src="assets/images/icon/location.svg" />
                            </div>
                            <div class="inquiries-list-desc">
                                7888 Derwent Close, Lonzostad 19248
                            </div>
                        </div>

                        <div class="d-flex gap-4">
                            <div>
                                <img src="assets/images/icon/message.svg" />
                            </div>
                            <div class="inquiries-list-desc">
                                Winston_OKeefe21@hotmail.com
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2 pt-4">
                        <a href="#">
                            <img src="assets/images/icon/facebook.svg" />
                        </a>
                        <a href="#">
                            <img src="assets/images/icon/twitter.svg" />
                        </a>
                        <a href="#">
                            <img src="assets/images/icon/instagram.svg" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="row gy-4 gx-5">
                        <div class="col-lg-6">
                            <div class="input-field-contact">
                                <img src="assets/images/icon/user.svg" />
                                <input type="text" placeholder="Name" class="input-field-contact form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-field-contact">
                                <img src="assets/images/icon/mail.svg" />
                                <input type="email" placeholder="Email" class="input-field-contact form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-field-contact">
                                <img src="assets/images/icon/phone-call.svg" />
                                <input type="number" placeholder="Phone" class="input-field-contact form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-field-contact">
                                <img src="assets/images/icon/pencil-line.svg" />
                                <input type="text" placeholder="Subject" class="input-field-contact form-control">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="input-field-contact">
                                <div>
                                    <img src="assets/images/icon/message-square.svg" />
                                </div>
                                <textarea value={null} row="9" placeholder="Write a message"
                                    class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button class="btn submit-btn">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'assets/include/footer.php' ;?>
    <!-- /Footer -->
    <!-- JS Include -->
    <?php include 'assets/include/jsinclude.php' ;?>
    <!-- /JS Include -->
</body>

</html>