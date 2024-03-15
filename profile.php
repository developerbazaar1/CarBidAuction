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


    <!-- for tab bar -->
    <div class="fillter-btn bg-f7 mt-50 input-group-checkout text-center">
        <div class="btn-group ml-20" role="group" aria-label="Basic checkbox toggle button group">

            <div class="at">
                <a href="/dashboard.php">
                    <button class="btn btn-outline-primary ">Dashboard</button>
                </a>
            </div>

            <div class="at">
                <a href="/award.php">
                    <button class="btn btn-outline-primary ">Award Pending</button>
                </a>
            </div>


            <div class="at">
                <a href="/wonvehicles.php">
                    <button class="btn btn-outline-primary ">Won Vehicles</button>
                </a>
            </div>


            <div class="at">
                <a href="/lostbid.php">
                    <button class="btn btn-outline-primary">Lost Pre-Bids</button>
                </a>
            </div>


            <div class="at">
                <a href="/myvehicle.php">
                    <button class="btn btn-outline-primary">My Vehicles</button>
                </a>
            </div>


            <div class="at">
                <a href="/profile.php">
                    <button class="btn btn-outline-primary active-btn-at">Profile</button>
                </a>
            </div>

        </div>
    </div>

    <section class="mt-50 mb-50">
        <div class="container">
            <div class="won-vehicles-section">
                <div class="header-checkout nav nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-credit-card active" id="updateprofile-tab" data-bs-toggle="tab"
                        data-bs-target="#updateprofile-tab-pane" type="button" role="tab"
                        aria-controls="updateprofile-tab-pane" aria-selected="false">
                        Update profile
                    </button>

                    <button class="btn btn-credit-card " id="changepassword-tab" data-bs-toggle="tab"
                        data-bs-target="#changepassword-tab-pane" type="button" role="tab"
                        aria-controls="changepassword-tab-pane" aria-selected="false">
                        Change Password
                    </button>

                    <button class="btn btn-credit-card" id="notification-tab" data-bs-toggle="tab"
                        data-bs-target="#notification-tab-pane" type="button" role="tab"
                        aria-controls="notification-tab-pane" aria-selected="false">
                        Notification
                    </button>

                    <button class="btn btn-credit-card " id="licensesdocuments-tab" data-bs-toggle="tab"
                        data-bs-target="#licensesdocuments-tab-pane" type="button" role="tab"
                        aria-controls="licensesdocuments-tab-pane" aria-selected="false">
                        Licenses & Documents
                    </button>

                    <button class="btn btn-credit-card" id="paymentmethod-tab" data-bs-toggle="tab"
                        data-bs-target="#paymentmethod-tab-pane" type="button" role="tab"
                        aria-controls="paymentmethod-tab-pane" aria-selected="false">
                        Payment Method
                    </button>
                </div>


                <div class="p-10 pb-0 pt-30 tab-content" id="myTabContent">

                    <!-- for update profile tab  -->
                    <div class="tab-pane show active fade" id="updateprofile-tab-pane" role="tabpanel"
                        aria-labelledby="updateprofile-tab" tabindex="0">
                        <div class="d-flex flex-column gap-20 update-section">
                            <div>
                                <label class="form-label label-checkout">Name
                                </label>
                                <input type="text" class="form-control input-field-checkout"
                                    placeholder="Sheikh Muhammad Bilal">
                            </div>
                            <div>
                                <label class="form-label label-checkout">Account Activity Email
                                </label>
                                <input type="email" class="form-control input-field-checkout"
                                    placeholder="Perry68@yahoo.com">
                            </div>
                            <div>
                                <label class="form-label label-checkout">Phone No.
                                </label>
                                <!-- <input type="text" class="form-control input-field-checkout" placeholder=""> -->
                                <input name="phone" type="number" id="phone" placeholder="585-417-424"
                                    class="form-control input-field-checkout" />
                            </div>
                        </div>
                        <div class="text-center pt-30">
                            <button class="btn place-bid-btn px-5">
                                Save Updates
                            </button>
                        </div>
                    </div>
                    <!-- end update profile tab  -->


                    <!-- for change password tab  -->
                    <div class="tab-pane fade" id="changepassword-tab-pane" role="tabpanel"
                        aria-labelledby="changepassword-tab" tabindex="0">
                        <div class="d-flex flex-column gap-20 update-section">

                            <div class="pt-25">
                                <label class="form-label label-checkout">Old Password</label>
                                <div class="password-container d-flex align-items-center">
                                    <input type="password" id="passwordInputBlack"
                                        class="form-control input-field-checkout input-password" placeholder="✱✱✱✱✱✱✱✱">
                                    <div class="password-toggle-black password-icon-profile"><img
                                            src="assets/images/icon/eye-closed-black.svg" alt="Dropped Image"></div>
                                </div>
                            </div>


                            <div class="">
                                <label class="form-label label-checkout">New Password</label>
                                <div class="password-container d-flex align-items-center">
                                    <input type="password" id="newPasswordInput"
                                        class="form-control input-field-checkout input-password" placeholder="✱✱✱✱✱✱✱✱">
                                    <div class="new-password-toggle-black password-icon-profile"><img
                                            src="assets/images/icon/eye-closed-black.svg" alt="Dropped Image"></div>
                                </div>
                            </div>
                            <div class="">
                                <label class="form-label label-checkout">Confirm New Password</label>
                                <div class="password-container d-flex align-items-center">
                                    <input type="password" id="confirmPasswordInput"
                                        class="form-control input-field-checkout input-password" placeholder="✱✱✱✱✱✱✱✱">
                                    <div class="confirm-password-toggle-black password-icon-profile"><img
                                            src="assets/images/icon/eye-closed-black.svg" alt="Dropped Image"></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-30">
                            <button class="btn place-bid-btn px-5">
                                Update Password
                            </button>
                        </div>
                    </div>
                    <!-- end change password tab  -->


                    <!-- for notification tab  -->
                    <div class="tab-pane fade" id="notification-tab-pane" role="tabpanel"
                        aria-labelledby="notification-tab" tabindex="0">
                        <div class="notification-section">
                            <div>
                                <div class="text-black font-montserrat font-600 line-28 fst-italic">
                                    Negotiation Offers
                                </div>
                                <div class="d-flex flex-column gap-10 ">
                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Vehicles for which the seller sent you a counter offer (because you were the
                                        high
                                        bidder)
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            SMS (text message)
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Email
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="pt-4">
                                <div class="text-black font-montserrat font-600 line-28 fst-italic">
                                    Other
                                </div>
                                <div class="d-flex flex-column gap-10 ">
                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Vehicle Pick Up: Notify me when the transporter has initiated pickup.
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            SMS (text message)
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Email
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="pt-4">
                                <div class="text-black font-montserrat font-600 line-28 fst-italic">
                                    Account Credit
                                </div>
                                <div class="d-flex flex-column gap-10 ">
                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Notify me when funds are added to my Account Credit (Wire Transfer only)
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            SMS (text message)
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Email
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="pt-4">
                                <div class="text-black font-montserrat font-600 line-28 fst-italic">
                                    Post Sale
                                </div>
                                <div class="d-flex flex-column gap-10 ">
                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        To Be Paid items for which payment is due today or already overdue
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Dashboard
                                        </label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            SMS (text message)
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Email
                                        </label>
                                    </div>


                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        To Be Picked Up items which are due to be picked up today or before today
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Dashboard
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            SMS (text message)
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Email
                                        </label>
                                    </div>


                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Awarded Items
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Dashboard
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            SMS (text message)
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Email
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="pt-4">
                                <div class="text-black font-montserrat font-600 line-28 fst-italic">
                                    Email Notifications
                                </div>
                                <div class="d-flex flex-column gap-10 ">
                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Pre-bid
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Pre-bid: Outbid
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Pre-bid: Winning
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Pre-bid: Did not win proxy bid
                                        </label>
                                    </div>


                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        To Be Picked Up items which are due to be picked up today or before today
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            When my account is about to renew - Email
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            When my account is about to renew - Push
                                        </label>
                                    </div>




                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Awarded Items
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Buy Now: Vehicles sold through Buy Now within my Watch List
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Buy Now: Vehicles I have open pre-bids on that become available through Buy
                                            Now
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Buy Now: Vehicles I won, but were rejected, that are now available through
                                            Buy Now
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Buy Now: Vehicles I watched that become available through Buy Now
                                        </label>
                                    </div>


                                    <div class="text-gray font-termina font-600 font-14 mt-10">
                                        Other
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Assigned to Live Auctions: Notify me when vehicles I am watching are
                                            scheduled for
                                            Live Auctions
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Assigned to Timed Auctions: Notify me when vehicles I am watching are
                                            scheduled for
                                            Timed Auctions
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Final Offer/LiveRep Vehicle Alert: Notify me when an opportunity opens on an
                                            “Award
                                            Pending” vehicle.
                                        </label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label text-gray font-termina font-14 font-500">
                                            Receipts: Paid
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end notification tab  -->


                    <!-- for licenses & documents tab  -->
                    <div class="tab-pane fade" id="licensesdocuments-tab-pane" role="tabpanel"
                        aria-labelledby="licensesdocuments-tab" tabindex="0">
                        <div class="notification-section">
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
                    <!-- end licenses & documents tab  -->


                    <!-- for Payment Method tab  -->
                    <div class="tab-pane fade" id="paymentmethod-tab-pane" role="tabpanel"
                        aria-labelledby="paymentmethod-tab" tabindex="0">
                        <div class="p-10 pb-0 pt-30 notification-section">
                            <div class="d-flex justify-content-between">
                                <div class="text-black font-montserrat font-600 line-28 fst-italic">
                                    Personal Identification
                                </div>

                                <button class="btn set-payment set-payment-bg d-flex align-items-center gap-10"
                                    data-bs-toggle="modal" data-bs-target="#paymentmethod">
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

                                            <div data-bs-toggle="modal" data-bs-target="#paymentmethod"
                                                class="d-flex gap-2 align-items-center hover-text-edit">
                                                <img src="assets/images/icon/edit.svg" />
                                                <div
                                                    class="text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
                                                    Edit</div>
                                            </div>
                                        </div>

                                        <div
                                            class="mt-40 text-dark-gray font-14 font-montserrat font-600 fst-italic line-base">
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

                                            <div data-bs-toggle="modal" data-bs-target="#paymentmethod"
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
                    <!-- end Payment Method tab  -->
                </div>
            </div>
        </div>
    </section>


    <!-- for licensesdocuments modal  -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog mt-0 mb-0 h-100 modal-lg model-licensesdocuments ">
            <div class="modal-content p-3 model-licensesdocuments-body">

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

                        <div class="pt-30">
                            <input type="file" class="dropify-profile" />
                        </div>
                        <input type="file" id="fileInput">

                        <div class=" mt-4">
                            <button
                                class="btn btn-save-payment py-3 px-5 font-montserrat fst-italic font-600">Save</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end licensesdocuments modal  -->


    <!-- for paymentmethod modal  -->
    <div class="modal fade" id="paymentmethod" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="paymentmethodLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg model-dialog-addcard">
            <div class="modal-content">

                <div class="modal-content border-0">

                    <div class="modal-body p-0">
                        <div class="model-heder-addcard">
                            <div class="font-18 font-900 text-dark font-montserrat fst-italic text-center">
                                Add New Card
                            </div>
                        </div>
                        <div class="pl-20 pr-20">
                            <div class="row gx-5 gy-4 pt-30">
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
                                    <div class="text-center btn-save-addcard ">
                                        <button class="btn bid-now px-5 w-100">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end paymentmethod modal  -->



    <!-- Footer -->
    <?php include 'assets/include/footer.php' ;?>
    <!-- /Footer -->

    <!-- JS Include -->
    <?php include 'assets/include/jsinclude.php' ;?>
    <!-- /JS Include -->

</body>

</html>