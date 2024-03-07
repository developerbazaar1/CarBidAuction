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

                    <button class="btn btn-credit-card bg-white">
                        Licenses & Documents
                    </button>

                    <button class="btn btn-credit-card">
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
                                        Driver's License (DBX,AE)
                                    </div>

                                    <div data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        class="d-flex gap-2 align-items-center hover-text-edit">
                                        <img src="assets/images/icon/edit.svg" />
                                        <div
                                            class="text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
                                            Edit</div>
                                    </div>
                                </div>

                                <div class="text-gray font-termina font-500 font-14 mt-40">
                                    Expiration Date: <span
                                        class="text-dark font-montserrat font-600 fs-italic font-12">16/10/2024</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="side-section-license">
                                <div class="d-flex justify-content-between">
                                    <div class="text-gray font-termina font-600 font-14">
                                        Passport (J12393496)
                                    </div>

                                    <div data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                        class="d-flex gap-2 align-items-center hover-text-edit">
                                        <img src="assets/images/icon/edit.svg" />
                                        <div
                                            class="text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
                                            Edit</div>
                                    </div>
                                </div>

                                <div class="text-gray font-termina font-500 font-14 mt-40">
                                    Expiration Date: <span
                                        class="text-dark font-montserrat font-600 fs-italic font-12">25/02/2044</span>
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

        <div class="modal-dialog me-0 mt-0 mb-0 h-100 modal-lg">
            <div class="modal-content p-3">

                <div class="modal-body">
                    <div class="text-dark-gray font-16 font-montserrat font-600 fst-italic line-base">
                        Add New Document
                    </div>
                    <h4 class="fs-4 mb-0 text-dark font-montserrat fst-italic font-900 mt-3">
                        ADD IDENTIFICATION
                    </h4>

                    <div class="pt-50 d-flex flex-column gap-4">
                        <div class="row gx-5 p-0 m-0">
                            <div class="col-lg-6 ps-0">
                                <select class="form-select select-bar-payment m-0" aria-label="Default select example">
                                    <option value="3" class="font-14 text-gray font-500 font-termina px-3 py-2"
                                        selected>Select
                                        ID Type</option>
                                    <option>Driver License</option>
                                    <option value="1">State ID</option>
                                    <option value="2">Passport/visa</option>
                                </select>
                            </div>
                            <div class="col-lg-6 pe-0">
                                <select class="form-select select-bar-payment m-0" aria-label="Default select example">
                                    <option selected>Country</option>
                                    <option value="1">Canada</option>
                                    <option value="2">United States</option>
                                    <option value="3">Uzbekistan</option>
                                    <option value="3">United Arab Emirates</option>

                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="form-label label-checkout">
                                Identification Number
                            </label>
                            <input type="password" class="form-control input-field-checkout" placeholder="✱✱✱✱✱✱✱✱">
                        </div>

                        <div>
                            <label class="form-label label-checkout">DATE OF BIRTH
                            </label>
                            <div class="d-flex month-year-input">
                                <input type="number" class="form-control input-field-checkout-month" placeholder="Date">

                                <input type="number" class="form-control input-field-checkout-year" placeholder="MM">

                                <input type="number" class="form-control border-start input-field-checkout-year"
                                    placeholder="YYYY">
                            </div>
                        </div>


                        <div>
                            <label class="form-label label-checkout">EXPIRATION DATE
                            </label>
                            <div class="d-flex month-year-input">
                                <input type="number" class="form-control input-field-checkout-month" placeholder="Date">

                                <input type="number" class="form-control input-field-checkout-year" placeholder="MM">

                                <input type="number" class="form-control border-start input-field-checkout-year"
                                    placeholder="YYYY">
                            </div>
                        </div>

                        <div class="drag-uplod-img pt-0 w-100">
                            <div class="drag-img">
                                <img src="assets/images/icon/bytesize_upload.svg">
                                <div class="drag-img-text">
                                    Drag Or Upload Your Image/Video Here
                                </div>
                                <button class="btn drag-img-button">
                                    Browse File
                                </button>
                            </div>

                        </div>

                        <div class=" mt-4">
                            <button
                                class="btn btn-save-payment py-3 px-5 font-montserrat fst-italic font-600">Save</button>
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