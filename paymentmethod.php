<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include 'assets/include/cssinclude.php' ;?>

</head>

<body>
    <!-- Header -->
    <?php include 'assets/include/header.php' ;?>
    <!-- /Header -->


    <!-- for tab bar -->
    <div class="fillter-btn bg-f7 mt-50 input-group-checkout text-center">
        <div class="btn-group ml-20" role="group" aria-label="Basic checkbox toggle button group">

            <div class="at">
                <button class="btn btn-outline-primary">Dashboard</button>
            </div>

            <div class="at">
                <button class="btn btn-outline-primary ">Award Pending</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary ">Won Vehicles</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">Lost Pre-Bids</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary">My Vehicles</button>
            </div>


            <div class="at">
                <button class="btn btn-outline-primary active-btn-at">Profile</button>
            </div>

        </div>
    </div>

    <section class="mt-50 mb-50">
        <div class="container">
            <div class="won-vehicles-section">
                <div class="header-checkout nav nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-credit-card">
                        Update profile
                    </button>

                    <button class="btn btn-credit-card ">
                        Change Password
                    </button>

                    <button class="btn btn-credit-card">
                        Notification
                    </button>

                    <button class="btn btn-credit-card">
                        Licenses & Documents
                    </button>

                    <button class="btn btn-credit-card bg-white">
                        Payment Method
                    </button>
                </div>


                <div class="p-10 pb-0 pt-30 notification-section">
                    <div class="d-flex justify-content-between">
                        <div class="text-black font-montserrat font-600 line-28 fst-italic">
                            Personal Identification
                        </div>

                        <button class="btn set-payment set-payment-bg d-flex align-items-center gap-10"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Add New Document <img src="assets/images/icon/person_2.svg" />
                        </button>
                    </div>

                    <div class="row g-5 pt-4">
                        <div class="col-lg-6">
                            <div class="side-section-license">
                                <div class="d-flex justify-content-between">
                                    <div class="text-gray font-termina font-600 font-14">
                                        Credit Card
                                    </div>

                                    <div data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        class="d-flex gap-2 align-items-center hover-text-edit">
                                        <img src="assets/images/icon/edit.svg" />
                                        <div
                                            class="text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
                                            Edit</div>
                                    </div>
                                </div>

                                <div class="mt-40 text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
                                    3798 ✱✱✱✱ ✱✱✱✱ 6801</div>
                                <div class="text-gray font-termina font-500 font-14 mt-3">
                                    Expiration Date: <span
                                        class="text-dark font-montserrat font-600 fs-italic font-12">16/10/2024</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="side-section-license">
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="text-gray font-termina font-600 font-14">
                                        PayPal
                                    </div>

                                    <div data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        class="d-flex gap-2 align-items-center hover-text-edit">
                                        <img src="assets/images/icon/edit.svg" />
                                        <div
                                            class="text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
                                            Edit</div>
                                    </div>
                                </div>

                                <img src="assets/images/icon/paypal.svg" />

                                <div class="text-gray font-termina font-500 font-14 mt-2">
                                    info@dxbrealty.ae
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">
            <div class="modal-content p-3">

                <div class="modal-body">
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
                                <label class="form-label label-checkout">Name on card
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
                                <input type="text" class="form-control input-field-checkout"
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

            </div>
        </div>
    </div>



    <!-- Footer -->
    <?php include 'assets/include/footer.php' ;?>
    <!-- /Footer -->

</body>

</html>