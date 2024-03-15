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

    <section class="pt-50 pb-50">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="/cart.php" class="text-decoration-none">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Checkout</a></li>
                </ol>
            </nav>

            <div class="heading">
                Checkout
            </div>

            <div class="p">
                Complete Your Purchase with Confidence
            </div>

            <div class="checkout-section mt-50">
                <div class="header-checkout nav nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-credit-card active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="false">
                        Credit Card
                    </button>

                    <button class="btn btn-credit-card" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="true">
                        Bank Transfer
                    </button>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="input-group-checkout tab-pane show active fade" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="row gx-5 gy-4">
                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">Name on card
                                    </label>
                                    <input type="text" class="form-control input-field-checkout"
                                        placeholder="Enter card holder name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">
                                        Card information
                                    </label>
                                    <input type="text" class="form-control input-field-checkout"
                                        placeholder="Enter card information">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">Expiration
                                    </label>
                                    <div class="d-flex month-year-input">
                                        <input type="number" class="form-control input-field-checkout-month"
                                            placeholder="MM">
                                        <input type="number" class="form-control input-field-checkout-year"
                                            placeholder="YYYY">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label class="form-label label-checkout">
                                        CVV
                                    </label>
                                    <input type="number" class="form-control input-field-checkout"
                                        placeholder="Enter your card CVV no.">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label label-checkout">
                                        Email Address
                                    </label>
                                    <input type="email" class="form-control input-field-checkout"
                                        placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center mt-2">
                                    <button class="btn bid-now">Pay AED 39,150</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane input-group-checkout fade" id="profile-tab-pane" role="tabpanel"
                        aria-labelledby="profile-tab" tabindex="0">
                        <div class="bank-account-text">
                            Bank Account Information
                        </div>

                        <div class="row gx-5 gy-2">
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Bank Name:
                                    </div>
                                    <div class="pri fw-bold">
                                        ABC Bank
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Account Number:
                                    </div>
                                    <div class="pri fw-bold">
                                        234567890
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Routing Number:
                                    </div>
                                    <div class="pri fw-bold">
                                        0987654321
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex justify-content-between">
                                    <div class="pri">
                                        Account Holder Name:
                                    </div>
                                    <div class="pri fw-bold">
                                        Car Arbab PVT. LTD
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-bank"></div>

                        <div>
                            <label class="form-label label-checkout">Lot #
                            </label>
                            <input type="text" class="form-control input-field-checkout" placeholder="Enter Lot #">
                        </div>

                        <div class="pt-30">
                            <input type="file" class="dropify" data-max-file-size="100kb" />
                            <div class="drag-img-text mt-10">Image should not bigger than 100 KB</div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn bid-now">Pay AED 39,150</button>
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