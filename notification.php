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

                    <button class="btn btn-credit-card">
                        Change Password
                    </button>

                    <button class="btn btn-credit-card bg-white">
                        Notification
                    </button>

                    <button class="btn btn-credit-card ">
                        Licenses & Documents
                    </button>

                    <button class="btn btn-credit-card">
                        Payment Method
                    </button>
                </div>


                <div class="p-10 pb-0 pt-30 notification-section">
                    <div>
                        <div class="text-black font-montserrat font-600 line-28 fst-italic">
                            Negotiation Offers
                        </div>
                        <div class="d-flex flex-column gap-10 ">
                            <div class="text-gray font-termina font-600 font-14 mt-10">
                                Vehicles for which the seller sent you a counter offer (because you were the high
                                bidder)
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    SMS (text message)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
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
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    SMS (text message)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
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
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    SMS (text message)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
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
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Dashboard
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    SMS (text message)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Email
                                </label>
                            </div>


                            <div class="text-gray font-termina font-600 font-14 mt-10">
                                To Be Picked Up items which are due to be picked up today or before today
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Dashboard
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    SMS (text message)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Email
                                </label>
                            </div>


                            <div class="text-gray font-termina font-600 font-14 mt-10">
                                Awarded Items
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Dashboard
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    SMS (text message)
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
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
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Pre-bid: Outbid
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Pre-bid: Winning
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Pre-bid: Did not win proxy bid
                                </label>
                            </div>


                            <div class="text-gray font-termina font-600 font-14 mt-10">
                                To Be Picked Up items which are due to be picked up today or before today
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    When my account is about to renew - Email
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    When my account is about to renew - Push
                                </label>
                            </div>




                            <div class="text-gray font-termina font-600 font-14 mt-10">
                                Awarded Items
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Buy Now: Vehicles sold through Buy Now within my Watch List
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Buy Now: Vehicles I have open pre-bids on that become available through Buy Now
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Buy Now: Vehicles I won, but were rejected, that are now available through Buy Now
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Buy Now: Vehicles I watched that become available through Buy Now
                                </label>
                            </div>


                            <div class="text-gray font-termina font-600 font-14 mt-10">
                                Other
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Assigned to Live Auctions: Notify me when vehicles I am watching are scheduled for
                                    Live Auctions
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Assigned to Timed Auctions: Notify me when vehicles I am watching are scheduled for
                                    Timed Auctions
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Final Offer/LiveRep Vehicle Alert: Notify me when an opportunity opens on an “Award
                                    Pending” vehicle.
                                </label>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault">
                                <label class="form-check-label text-gray font-termina font-14 font-500"
                                    for="flexSwitchCheckDefault">
                                    Receipts: Paid
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'assets/include/footer.php' ;?>
    <!-- /Footer -->

</body>

</html>